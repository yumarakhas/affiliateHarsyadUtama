<?php

namespace App\Http\Controllers;

use App\Models\AffiliateRegistration;
use App\Models\AffiliateInfo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends Controller
{
    /**
     * Display the admin data view page
     */
    public function viewData()
    {
        // Get all affiliate registrations with their related info, paginated to 10 per page
        $affiliates = AffiliateRegistration::with('affiliateInfo')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.view-data', compact('affiliates'));
    }

    /**
     * Show edit form for affiliate
     */
    public function edit($id)
    {
        $affiliate = AffiliateRegistration::with('affiliateInfo')->findOrFail($id);
        return view('admin.edit-affiliate', compact('affiliate'));
    }

    /**
     * Update affiliate data
     */
    public function update(Request $request, $id)
    {
        try {
            Log::info('Update request received for ID: ' . $id);
            Log::info('Request data: ', $request->all());

            $affiliate = AffiliateRegistration::findOrFail($id);

            // Validate the request
            $validatedData = $request->validate([
                'email' => 'required|email|unique:affiliate_registrations,email,' . $id,
                'nama_lengkap' => 'required|string|max:255',
                'kontak_whatsapp' => 'required|string|max:255',
                'kota_domisili' => 'required|string|max:255',
                'profesi_kesibukan' => 'required|string',
                'akun_instagram' => 'nullable|string|max:255',
                'akun_tiktok' => 'nullable|string|max:255',
                'status' => 'required|string|in:Aktif,Nonaktif,Pending',
            ]);

            Log::info('Validation passed. Validated data: ', $validatedData);

            // Update main data including status
            $updated = $affiliate->update([
                'email' => $validatedData['email'],
                'nama_lengkap' => $validatedData['nama_lengkap'],
                'kontak_whatsapp' => $validatedData['kontak_whatsapp'],
                'kota_domisili' => $validatedData['kota_domisili'],
                'profesi_kesibukan' => $validatedData['profesi_kesibukan'],
                'status' => $validatedData['status'], // Status disimpan di affiliate_registrations
            ]);

            Log::info('Main data update result: ' . ($updated ? 'success' : 'failed'));

            // Update or create affiliate info (tanpa status karena ada di tabel utama)
            $infoUpdated = $affiliate->affiliateInfo()->updateOrCreate(
                ['affiliate_registration_id' => $affiliate->id],
                [
                    'akun_instagram' => $validatedData['akun_instagram'],
                    'akun_tiktok' => $validatedData['akun_tiktok'],
                ]
            );

            Log::info('Affiliate info update result: ' . ($infoUpdated ? 'success' : 'failed'));

            // Always return JSON response for AJAX requests
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data affiliator berhasil diperbarui!'
                ]);
            }

            return redirect()->route('admin.view-data')->with('success', 'Data affiliator berhasil diperbarui!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data tidak valid',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data affiliator tidak ditemukan'
                ], 404);
            }
            abort(404, 'Data affiliator tidak ditemukan');
        } catch (\Exception $e) {
            Log::error('Error updating affiliate: ' . $e->getMessage());

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat menyimpan data'
                ], 500);
            }

            return redirect()->route('admin.view-data')->with('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }

    /**
     * Export data to Excel
     */
    public function exportExcel()
    {
        try {
            $affiliates = AffiliateRegistration::with('affiliateInfo')
                ->orderBy('created_at', 'asc')
                ->get();

            // Create new Spreadsheet object
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Set document properties
            $spreadsheet->getProperties()
                ->setCreator('Gentle Living Admin')
                ->setTitle('Data Affiliator')
                ->setSubject('Export Data Affiliator')
                ->setDescription('Data affiliator yang terdaftar di sistem Gentle Living');

            // Header styling
            $headerStyle = [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => 'FFFFFF'],
                    'size' => 12
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '528B89']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['rgb' => '000000']
                    ]
                ]
            ];

            // Data styling
            $dataStyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['rgb' => 'CCCCCC']
                    ]
                ],
                'alignment' => [
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'wrapText' => true
                ]
            ];

            // Set column headers
            $headers = [
                'A1' => 'No',
                'B1' => 'Email',
                'C1' => 'Nama Lengkap',
                'D1' => 'Kontak WhatsApp',
                'E1' => 'Kota Domisili',
                'F1' => 'Akun Instagram',
                'G1' => 'Akun TikTok',
                'H1' => 'Profesi/Kesibukan',
                'I1' => 'Info Dari Mana',
                'J1' => 'Keterangan Lainnya',
                'K1' => 'Tanggal Daftar',
                'L1' => 'Status'
            ];

            foreach ($headers as $cell => $value) {
                $sheet->setCellValue($cell, $value);
            }

            // Apply header styling
            $sheet->getStyle('A1:L1')->applyFromArray($headerStyle);

            // Set row height for header
            $sheet->getRowDimension('1')->setRowHeight(25);

            // Fill data
            $row = 2;
            foreach ($affiliates as $index => $affiliate) {
                $info = $affiliate->affiliateInfo;

                $sheet->setCellValue('A' . $row, $index + 1);
                $sheet->setCellValue('B' . $row, $affiliate->email);
                $sheet->setCellValue('C' . $row, $affiliate->nama_lengkap);
                $sheet->setCellValue('D' . $row, $affiliate->kontak_whatsapp);
                $sheet->setCellValue('E' . $row, $affiliate->kota_domisili);
                $sheet->setCellValue('F' . $row, $info->akun_instagram ?? '-');
                $sheet->setCellValue('G' . $row, $info->akun_tiktok ?? '-');
                $sheet->setCellValue('H' . $row, $affiliate->profesi_kesibukan);
                $sheet->setCellValue('I' . $row, $affiliate->info_darimana);
                $sheet->setCellValue('J' . $row, $affiliate->yang_lain_text ?? '-');
                $sheet->setCellValue('K' . $row, $affiliate->created_at->format('d/m/Y H:i'));
                $sheet->setCellValue('L' . $row, $affiliate->status === 'Pending' ? 'Menunggu Konfirmasi' : ($affiliate->status ?? 'Aktif'));

                // Apply data styling to current row
                $sheet->getStyle('A' . $row . ':L' . $row)->applyFromArray($dataStyle);

                // Set row height
                $sheet->getRowDimension($row)->setRowHeight(20);

                $row++;
            }

            // Auto-size columns
            foreach (range('A', 'L') as $column) {
                $sheet->getColumnDimension($column)->setAutoSize(true);
            }

            // Set minimum column widths
            $sheet->getColumnDimension('H')->setWidth(30); // Profesi/Kesibukan
            $sheet->getColumnDimension('J')->setWidth(25); // Keterangan Lainnya

            // Create Excel file
            $writer = new Xlsx($spreadsheet);

            // Set filename
            $filename = 'Data_Affiliator_Gentle_Living_' . date('Y-m-d_H-i-s') . '.xlsx';

            // Use Laravel's streamDownload response
            return response()->streamDownload(function () use ($writer) {
                $writer->save('php://output');
            }, $filename, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Cache-Control' => 'max-age=0',
                'Cache-Control' => 'max-age=1',
                'Expires' => 'Mon, 26 Jul 1997 05:00:00 GMT',
                'Last-Modified' => gmdate('D, d M Y H:i:s') . ' GMT',
                'Cache-Control' => 'cache, must-revalidate',
                'Pragma' => 'public',
            ]);
        } catch (\Exception $e) {
            Log::error('Excel export error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan saat export Excel'], 500);
        }
    }

    /**
     * Update affiliate status (Active/Inactive)
     */
    public function updateStatus(Request $request, $id)
    {
        try {
            Log::info('UpdateStatus called', [
                'id' => $id,
                'request_data' => $request->all(),
                'content_type' => $request->header('Content-Type'),
                'method' => $request->method()
            ]);

            // Validate input
            $validated = $request->validate([
                'status' => 'required|string|in:Aktif,Nonaktif,Pending'
            ]);

            $affiliate = AffiliateRegistration::findOrFail($id);

            Log::info('Found affiliate', [
                'name' => $affiliate->nama_lengkap,
                'current_status' => $affiliate->status,
                'new_status' => $validated['status']
            ]);

            $oldStatus = $affiliate->status;
            $affiliate->status = $validated['status'];
            $saved = $affiliate->save();

            Log::info('Status update completed', [
                'saved' => $saved,
                'old_status' => $oldStatus,
                'new_status' => $affiliate->status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status berhasil diperbarui!',
                'data' => [
                    'affiliate_id' => $affiliate->id,
                    'old_status' => $oldStatus,
                    'new_status' => $affiliate->status
                ]
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', ['errors' => $e->errors()]);

            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid: ' . implode(', ', \Illuminate\Support\Arr::flatten($e->errors())),
                'errors' => $e->errors()
            ], 422);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Affiliate not found', ['id' => $id]);

            return response()->json([
                'success' => false,
                'message' => 'Data affiliator tidak ditemukan'
            ], 404);
        } catch (\Exception $e) {
            Log::error('Unexpected error in updateStatus', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat mengubah status'
            ], 500);
        }
    }

    /**
     * Delete affiliate data
     */
    public function delete(Request $request, $id)
    {
        try {
            $affiliate = AffiliateRegistration::findOrFail($id);
            $affiliateName = $affiliate->nama_lengkap;

            // Delete related info first
            if ($affiliate->affiliateInfo) {
                $affiliate->affiliateInfo->delete();
            }

            $affiliate->delete();

            // Check if it's an AJAX request
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => "Data {$affiliateName} berhasil dihapus!"
                ]);
            }

            return redirect()->back()->with('success', 'Data affiliator berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Error deleting affiliate: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat menghapus data'
                ], 500);
            }

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }

    /**
     * Get affiliate details for modal
     */
    public function getDetails($id)
    {
        try {
            $affiliate = AffiliateRegistration::with('affiliateInfo')->findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $affiliate
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Affiliate not found: ' . $id);

            return response()->json([
                'success' => false,
                'message' => 'Data affiliator tidak ditemukan'
            ], 404);
        } catch (\Exception $e) {
            Log::error('Error getting affiliate details: ' . $e->getMessage() . ' | Stack: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memuat data'
            ], 500);
        }
    }

    /**
     * Show affiliate details - alias for getDetails for route compatibility
     */
    public function show($id)
    {
        return $this->getDetails($id);
    }

    /**
     * Export affiliate data to CSV
     */
    public function export()
    {
        try {
            // Get all affiliate data
            $affiliates = AffiliateRegistration::with('affiliateInfo')
                ->orderBy('created_at', 'asc')
                ->get();

            // Generate filename
            $filename = 'data-affiliator-' . date('Y-m-d-H-i-s') . '.csv';

            // Set headers for CSV download
            $headers = [
                'Content-Type' => 'text/csv; charset=UTF-8',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Cache-Control' => 'max-age=0',
            ];

            // Create CSV content
            $callback = function () use ($affiliates) {
                $file = fopen('php://output', 'w');

                // Add BOM for UTF-8
                fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

                // CSV Headers
                fputcsv($file, [
                    'No',
                    'Email',
                    'Nama Lengkap',
                    'Kontak WhatsApp',
                    'Kota Domisili',
                    'Profesi/Kesibukan',
                    'Info Dari Mana',
                    'Instagram',
                    'TikTok',
                    'Status',
                    'Tanggal Daftar'
                ]);

                // Data rows
                foreach ($affiliates as $index => $affiliate) {
                    fputcsv($file, [
                        $index + 1,
                        $affiliate->email,
                        $affiliate->nama_lengkap,
                        $affiliate->kontak_whatsapp,
                        $affiliate->kota_domisili,
                        $affiliate->profesi_kesibukan,
                        $affiliate->info_darimana,
                        $affiliate->affiliateInfo->akun_instagram ?? '-',
                        $affiliate->affiliateInfo->akun_tiktok ?? '-',
                        $affiliate->status === 'Pending' ? 'Menunggu Konfirmasi' : ($affiliate->status ?? 'Aktif'),
                        $affiliate->created_at->format('d/m/Y H:i')
                    ]);
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        } catch (\Exception $e) {
            Log::error('Error exporting affiliate data: ' . $e->getMessage() . ' | Stack: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengexport data'
            ], 500);
        }
    }

    /**
     * Delete affiliate data - alias for delete method
     */
    public function destroy(Request $request, $id)
    {
        return $this->delete($request, $id);
    }

    // ===== PRODUCT MANAGEMENT METHODS =====

    /**
     * Show product management page
     */
    public function manageProducts()
    {
        $products = Product::ordered()->get();
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show form to create new product
     */
    public function createProduct()
    {
        return view('admin.products.create');
    }

    /**
     * Store new product
     */
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'status' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $data = $request->only(['name', 'description', 'category', 'status', 'order']);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $data['image'] = 'images/products/' . $imageName;
        }

        // Handle content (JSON data)
        $content = [
            'benefits' => $request->input('benefits', []),
            'variants' => $request->input('variants', []),
            'features' => $request->input('features', []),
            'reviews' => $request->input('reviews', [])
        ];
        $data['content'] = $content;

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Show form to edit product
     */
    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update product
     */
    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'status' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $data = $request->only(['name', 'description', 'category', 'status', 'order']);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $data['image'] = 'images/products/' . $imageName;
        }

        // Handle content (JSON data)
        $content = [
            'benefits' => $request->input('benefits', []),
            'variants' => $request->input('variants', []),
            'features' => $request->input('features', []),
            'reviews' => $request->input('reviews', [])
        ];
        $data['content'] = $content;

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Delete product
     */
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        
        // Delete image if exists
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}

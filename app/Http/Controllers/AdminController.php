<?php

namespace App\Http\Controllers;

use App\Models\AffiliateRegistration;
use App\Models\AffiliateInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    /**
     * Display the admin data view page
     */
    public function viewData()
    {
        // Get all affiliate registrations with their related info
        $affiliates = AffiliateRegistration::with('affiliateInfo')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
            
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
            ]);
            
            // Update main data
            $affiliate->update([
                'email' => $validatedData['email'],
                'nama_lengkap' => $validatedData['nama_lengkap'],
                'kontak_whatsapp' => $validatedData['kontak_whatsapp'],
                'kota_domisili' => $validatedData['kota_domisili'],
                'profesi_kesibukan' => $validatedData['profesi_kesibukan'],
            ]);
            
            // Update or create affiliate info
            $affiliate->affiliateInfo()->updateOrCreate(
                ['affiliate_registration_id' => $affiliate->id],
                [
                    'akun_instagram' => $validatedData['akun_instagram'],
                    'akun_tiktok' => $validatedData['akun_tiktok'],
                ]
            );
            
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
            \Log::error('Error updating affiliate: ' . $e->getMessage());
            
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
        $affiliates = AffiliateRegistration::with('affiliateInfo')->get();
        
        $filename = 'data_affiliator_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($affiliates) {
            $file = fopen('php://output', 'w');
            
            // Add BOM for UTF-8
            fwrite($file, "\xEF\xBB\xBF");
            
            // Header columns
            fputcsv($file, [
                'No',
                'Email',
                'Nama Lengkap',
                'Kontak WhatsApp',
                'Kota Domisili',
                'Akun Instagram',
                'Akun TikTok',
                'Profesi/Kesibukan',
                'Info Dari Mana',
                'Keterangan Lainnya',
                'Tanggal Daftar',
                'Status'
            ]);
            
            // Data rows
            $no = 1;
            foreach ($affiliates as $affiliate) {
                $info = $affiliate->affiliateInfo;
                
                fputcsv($file, [
                    $no++,
                    $affiliate->email,
                    $affiliate->nama_lengkap,
                    $affiliate->kontak_whatsapp,
                    $affiliate->kota_domisili,
                    $info->akun_instagram ?? '-',
                    $info->akun_tiktok ?? '-',
                    $affiliate->profesi_kesibukan,
                    $affiliate->info_darimana,
                    $affiliate->yang_lain_text ?? '-',
                    $affiliate->created_at->format('d/m/Y H:i'),
                    $affiliate->status ?? 'Aktif'
                ]);
            }
            
            fclose($file);
        };
        
        return Response::stream($callback, 200, $headers);
    }
    
    /**
     * Update affiliate status (Active/Inactive)
     */
    public function updateStatus(Request $request, $id)
    {
        $affiliate = AffiliateRegistration::findOrFail($id);
        $affiliate->status = $request->status;
        $affiliate->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diperbarui!'
        ]);
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
            \Log::error('Error deleting affiliate: ' . $e->getMessage());
            
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
        $affiliate = AffiliateRegistration::with('affiliateInfo')->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $affiliate
        ]);
    }
}

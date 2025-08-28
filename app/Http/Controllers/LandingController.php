<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\MasterItem;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    
    public function partner()
    {
        return view('partner');
    }
    
    public function produk(Request $request)
    {
        // Ambil produk yang aktif dan diurutkan
        $products = Product::active()->ordered()->get();
        
        // Pisahkan berdasarkan kategori
        $gentleBabyProducts = $products->where('category', 'gentle-baby');
        $mamimaProducts = $products->where('category', 'mamina');
        $nyamProducts = $products->where('category', 'nyam');
        $generalProducts = $products->where('category', 'general');
        
        // Tentukan produk yang sedang dipilih dari dropdown
        $selectedProduct = $request->get('product', 'gentle-baby'); // default ke gentle-baby
        
        // Validasi produk yang dipilih
        $validProducts = ['gentle-baby', 'mamina-asi-booster', 'nyam'];
        if (!in_array($selectedProduct, $validProducts)) {
            $selectedProduct = 'gentle-baby';
        }
        
        return view('produk', compact(
            'products', 
            'gentleBabyProducts', 
            'mamimaProducts', 
            'nyamProducts', 
            'generalProducts',
            'selectedProduct'
        ));
    }
    
    public function tentangKami()
    {
        return view('tentang-kami');
    }
    
    public function belanja()
    {
        // Ambil kategori aktif
        $categories = Category::active()->ordered()->get();
        
        // Ambil produk unggulan dari master items (maksimal 6)
        $featuredProducts = MasterItem::with('category')
            ->whereHas('category', function($q) {
                $q->where('is_active', true);
            })
            ->where('stock', '>', 0)
            ->orderBy('name_item', 'asc')
            ->take(6)
            ->get();
        
        // Debug: Log the counts
        Log::info('Categories count: ' . $categories->count());
        Log::info('Featured products count: ' . $featuredProducts->count());
        
        return view('belanja-beranda', compact('categories', 'featuredProducts'));
    }
    
    public function belanjaProduk(Request $request)
    {
        // Query builder untuk master items dengan kategori
        $query = MasterItem::with('category')->whereHas('category', function($q) {
            $q->where('is_active', true);
        });
        
        // Filter berdasarkan kategori jika ada
        $categorySlug = $request->get('category');
        if ($categorySlug && $categorySlug !== 'all') {
            $query->whereHas('category', function($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }
        
        // Sorting
        $sort = $request->get('sort');
        if ($sort) {
            switch ($sort) {
                case 'name-asc':
                    $query->orderBy('name_item', 'asc');
                    break;
                case 'price-low':
                    $query->orderBy('sell_price', 'asc');
                    break;
                case 'price-high':
                    $query->orderBy('sell_price', 'desc');
                    break;
                default:
                    $query->orderBy('name_item', 'asc');
                    break;
            }
        } else {
            $query->orderBy('name_item', 'asc');
        }
        
        // Pagination dengan 6 produk per halaman
        $products = $query->paginate(6)->withQueryString();
        
        // Hitung jumlah produk per kategori
        $allItems = MasterItem::with('category')->whereHas('category', function($q) {
            $q->where('is_active', true);
        })->get();
        
        $categoryCounts = [
            'all' => $allItems->count(),
        ];
        
        // Hitung per kategori
        foreach(Category::active()->get() as $category) {
            $categoryCounts[$category->slug] = $allItems->where('category_id', $category->id)->count();
        }
        
        return view('belanja-produk', compact('products', 'categoryCounts', 'categorySlug', 'sort'));
    }
    
    public function produkDetail($id)
    {
        // Ambil produk berdasarkan ID dari master_items
        $product = MasterItem::with('category')->findOrFail($id);
        
        // Ambil produk serupa dari kategori yang sama (maksimal 4)
        $similarProducts = MasterItem::with('category')
            ->where('category_id', $product->category_id)
            ->where('item_id', '!=', $product->item_id)
            ->take(4)
            ->get();
        
        // Ambil produk lainnya dari kategori berbeda (maksimal 4)
        $otherProducts = MasterItem::with('category')
            ->where('category_id', '!=', $product->category_id)
            ->take(4)
            ->get();
        
        return view('produk-detail', compact('product', 'similarProducts', 'otherProducts'));
    }
    
    public function riwayat()
    {
        // For now, we'll create mock order data
        // In a real application, this would come from an orders table
        $orders = collect([
            [
                'id' => 1,
                'products' => [
                    [
                        'name' => 'Nama Produk 1',
                        'variant' => 'Variasi 1',
                        'quantity' => 1,
                        'price' => 100000,
                        'image' => 'products/gentle-baby.png'
                    ]
                ],
                'total' => 100000,
                'status' => 'selesai',
                'info' => 'Pesanan telah tiba di alamat tujuan. Diterima oleh Yang Bersangkutan',
                'date' => '08/08/2025',
                'payment_method' => 'Bank BRI'
            ],
            [
                'id' => 2,
                'products' => [
                    [
                        'name' => 'Nama Produk 1',
                        'variant' => 'Variasi 1', 
                        'quantity' => 1,
                        'price' => 100000,
                        'image' => 'products/gentle-baby.png'
                    ],
                    [
                        'name' => 'Nama Produk 2',
                        'variant' => 'Variasi 2',
                        'quantity' => 2,
                        'price' => 200000,
                        'image' => 'products/mamina.png'
                    ]
                ],
                'total' => 300000,
                'status' => 'belum-bayar',
                'info' => 'Bayar sebelum 08/08/2025 23:59 dengan Bank BRI',
                'date' => '08/08/2025',
                'payment_method' => 'Bank BRI'
            ],
            [
                'id' => 3,
                'products' => [
                    [
                        'name' => 'Nama Produk 1',
                        'variant' => 'Variasi 1',
                        'quantity' => 1,
                        'price' => 100000,
                        'image' => 'products/gentle-baby.png'
                    ]
                ],
                'total' => 100000,
                'status' => 'dikemas',
                'info' => 'Produk akan dikirimkan sebelum 15/08/2025',
                'date' => '08/08/2025',
                'payment_method' => 'Bank BRI'
            ],
            [
                'id' => 4,
                'products' => [
                    [
                        'name' => 'Nama Produk 1',
                        'variant' => 'Variasi 1',
                        'quantity' => 1,
                        'price' => 100000,
                        'image' => 'products/gentle-baby.png'
                    ]
                ],
                'total' => 100000,
                'status' => 'dikirim',
                'info' => 'Pesanan dalam proses pengantaran',
                'date' => '08/08/2025',
                'payment_method' => 'Bank BRI'
            ]
        ]);
        
        return view('belanja-riwayat', compact('orders'));
    }
    
    public function keranjang()
    {
        // Mock data untuk keranjang belanja
        // Dalam aplikasi nyata, ini akan diambil dari session atau database
        $cartItems = collect([
            [
                'id' => 1,
                'product_id' => 1,
                'name' => 'Gentle Baby Oil - Minyak Telon Bayi',
                'variant' => 'Ukuran 100ml',
                'price' => 85000,
                'quantity' => 2,
                'image' => 'products/gentle-baby.png',
                'stock' => 15,
                'weight' => 200 // gram
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'name' => 'Mamina ASI Booster Tea',
                'variant' => 'Kemasan 30 sachet',
                'price' => 120000,
                'quantity' => 1,
                'image' => 'products/mamina.png',
                'stock' => 8,
                'weight' => 150 // gram
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'name' => 'Essential Oil Lavender',
                'variant' => 'Ukuran 10ml',
                'price' => 65000,
                'quantity' => 3,
                'image' => 'products/essential-oil.png',
                'stock' => 20,
                'weight' => 30 // gram
            ]
        ]);
        
        // Hitung total
        $subtotal = $cartItems->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
        
        $totalWeight = $cartItems->sum(function($item) {
            return $item['weight'] * $item['quantity'];
        });
        
        // Estimasi ongkos kirim (contoh)
        $shippingCost = 15000; // Flat rate untuk contoh
        
        $total = $subtotal + $shippingCost;
        
        return view('belanja-keranjang', compact('cartItems', 'subtotal', 'shippingCost', 'total', 'totalWeight'));
    }
    
    public function updateCart(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer|min:1|max:99'
        ]);
        
        // Dalam implementasi nyata, ini akan update database
        // Untuk demo, kita akan return response sukses
        $itemId = $request->item_id;
        $quantity = $request->quantity;
        
        // Simulasi update cart di session/database
        // session()->put("cart.{$itemId}.quantity", $quantity);
        
        return response()->json([
            'success' => true,
            'message' => 'Keranjang berhasil diperbarui',
            'quantity' => $quantity
        ]);
    }
    
    public function removeFromCart($id)
    {
        // Dalam implementasi nyata, ini akan hapus dari database
        // Untuk demo, kita akan return response sukses
        
        // session()->forget("cart.{$id}");
        
        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil dihapus dari keranjang'
        ]);
    }
    
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1|max:99'
        ]);
        
        // Dalam implementasi nyata, ini akan tambah ke database
        // Untuk demo, kita akan return response sukses
        
        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan ke keranjang'
        ]);
    }
    
    public function checkout()
    {
        // Mock data untuk checkout
        // Dalam implementasi nyata, ini akan mengambil item yang dipilih dari session/database
        $selectedItems = collect([
            [
                'id' => 1,
                'product_id' => 1,
                'name' => 'Gentle Baby Oil - Minyak Telon Bayi',
                'variant' => 'Ukuran 100ml',
                'price' => 85000,
                'quantity' => 2,
                'image' => 'products/gentle-baby.png',
                'weight' => 200 // gram
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'name' => 'Essential Oil Lavender',
                'variant' => 'Ukuran 10ml',
                'price' => 65000,
                'quantity' => 1,
                'image' => 'products/essential-oil.png',
                'weight' => 30 // gram
            ]
        ]);
        
        // Hitung total
        $subtotal = $selectedItems->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
        
        $totalWeight = $selectedItems->sum(function($item) {
            return $item['weight'] * $item['quantity'];
        });
        
        // Opsi pengiriman
        $shippingOptions = [
            [
                'id' => 'regular',
                'name' => 'Pengiriman Reguler',
                'description' => '5-7 hari kerja',
                'price' => 15000,
                'estimated_days' => '5-7'
            ],
            [
                'id' => 'express',
                'name' => 'Pengiriman Express',
                'description' => '2-3 hari kerja',
                'price' => 25000,
                'estimated_days' => '2-3'
            ],
            [
                'id' => 'same_day',
                'name' => 'Same Day Delivery',
                'description' => 'Hari yang sama (area tertentu)',
                'price' => 35000,
                'estimated_days' => '1'
            ]
        ];
        
        // Metode pembayaran
        $paymentMethods = [
            [
                'id' => 'bank_transfer',
                'name' => 'Transfer Bank',
                'description' => 'Transfer ke rekening bank',
                'icon' => 'bank',
                'fee' => 0
            ],
            [
                'id' => 'e_wallet',
                'name' => 'E-Wallet',
                'description' => 'GoPay, OVO, Dana, ShopeePay',
                'icon' => 'wallet',
                'fee' => 0
            ],
            [
                'id' => 'credit_card',
                'name' => 'Kartu Kredit',
                'description' => 'Visa, Mastercard, JCB',
                'icon' => 'credit-card',
                'fee' => 2500
            ],
            [
                'id' => 'cod',
                'name' => 'Bayar di Tempat (COD)',
                'description' => 'Bayar saat barang diterima',
                'icon' => 'cash',
                'fee' => 5000
            ]
        ];
        
        $defaultShipping = $shippingOptions[0];
        $total = $subtotal + $defaultShipping['price'];
        
        return view('belanja-checkout', compact(
            'selectedItems', 
            'subtotal', 
            'total', 
            'totalWeight',
            'shippingOptions',
            'paymentMethods',
            'defaultShipping'
        ));
    }
    
    public function processCheckout(Request $request)
    {
        $request->validate([
            'recipient_name' => 'required|string|max:255',
            'recipient_phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'shipping_method' => 'required|string',
            'payment_method' => 'required|string',
            'notes' => 'nullable|string|max:500'
        ], [
            'recipient_name.required' => 'Nama penerima wajib diisi.',
            'recipient_phone.required' => 'Nomor telepon penerima wajib diisi.',
            'address.required' => 'Alamat pengiriman wajib diisi.',
            'city.required' => 'Kota wajib diisi.',
            'postal_code.required' => 'Kode pos wajib diisi.',
            'shipping_method.required' => 'Metode pengiriman wajib dipilih.',
            'payment_method.required' => 'Metode pembayaran wajib dipilih.'
        ]);
        
        // Dalam implementasi nyata, ini akan:
        // 1. Simpan order ke database
        // 2. Proses pembayaran
        // 3. Kirim email konfirmasi
        // 4. Clear cart
        
        // Untuk demo, redirect ke halaman riwayat dengan pesan sukses
        return redirect()->route('belanja.riwayat')->with('success', 'Pesanan berhasil dibuat! Silakan lakukan pembayaran sesuai metode yang dipilih.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        // Ambil produk unggulan (maksimal 6)
        $featuredProducts = Product::active()
            ->orderBy('name', 'asc')
            ->take(6)
            ->get();
        
        return view('belanja-beranda', compact('featuredProducts'));
    }
    
    public function belanjaProduk(Request $request)
    {
        // Query builder untuk produk aktif
        $query = Product::active()->ordered();
        
        // Filter berdasarkan kategori jika ada
        $category = $request->get('category');
        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }
        
        // Sorting
        $sort = $request->get('sort');
        if ($sort) {
            switch ($sort) {
                case 'name-asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'price-low':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-high':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    $query->ordered(); // Default ordering
                    break;
            }
        }
        
        // Pagination dengan 6 produk per halaman
        $products = $query->paginate(6)->withQueryString();
        
        // Hitung jumlah produk per kategori
        $allProducts = Product::active()->get();
        $categoryCounts = [
            'all' => $allProducts->count(),
            'baby-oil' => $allProducts->where('category', 'gentle-baby')->count(),
            'aromatherapy' => $allProducts->where('category', 'aromatherapy')->count(),
            'health' => $allProducts->where('category', 'health')->count(),
            'skincare' => $allProducts->where('category', 'skincare')->count(),
            'essential-oil' => $allProducts->where('category', 'essential-oil')->count(),
        ];
        
        return view('belanja-produk', compact('products', 'categoryCounts', 'category', 'sort'));
    }
    
    public function produkDetail($id)
    {
        // Ambil produk berdasarkan ID
        $product = Product::findOrFail($id);
        
        // Ambil produk serupa dari kategori yang sama (maksimal 4)
        $similarProducts = Product::active()
            ->where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();
        
        // Ambil produk lainnya dari kategori berbeda (maksimal 4)
        $otherProducts = Product::active()
            ->where('category', '!=', $product->category)
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
}

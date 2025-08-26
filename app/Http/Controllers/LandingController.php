<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
}

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
}

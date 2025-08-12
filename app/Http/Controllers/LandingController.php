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
    
    public function produk()
    {
        // Ambil produk yang aktif dan diurutkan
        $products = Product::active()->ordered()->get();
        
        // Pisahkan berdasarkan kategori
        $gentleBabyProducts = $products->where('category', 'gentle-baby');
        $mamimaProducts = $products->where('category', 'mamina');
        $nyamProducts = $products->where('category', 'nyam');
        $generalProducts = $products->where('category', 'general');
        
        return view('produk', compact('products', 'gentleBabyProducts', 'mamimaProducts', 'nyamProducts', 'generalProducts'));
    }
    
    public function tentangKami()
    {
        return view('tentang-kami');
    }
}

@extends('layouts.ecommerce')

@section('title', 'Produk - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50">
    
    <!-- E-commerce Navigation -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-8 py-4">
                <a href="{{ route('belanja') }}" 
                   class="px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-semibold font-nunito transition-colors duration-200">
                    Beranda Belanja
                </a>
                <a href="{{ route('belanja.produk') }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold font-nunito">
                    Semua Produk
                </a>
            </nav>
        </div>
    </div>
    
    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Categories -->
            <div class="w-full lg:w-80 space-y-6">
                <!-- Categories Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 font-nunito">Kategori</h2>
                        
                        <!-- Category List -->
                        <div class="space-y-3">
                            <a href="{{ route('belanja.produk') }}" 
                               class="flex items-center justify-between p-3 rounded-lg {{ !request('category') || request('category') == 'all' ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }} font-medium transition-colors duration-200 group">
                                <span class="font-nunito">Semua produk</span>
                                <span class="{{ !request('category') || request('category') == 'all' ? 'bg-white text-blue-600' : 'bg-gray-200 text-gray-700 group-hover:bg-blue-100 group-hover:text-blue-600' }} px-2 py-1 rounded-full text-sm font-bold">{{ $categoryCounts['all'] }}</span>
                            </a>
                            
                            @php
                                $categories = App\Models\Category::active()->ordered()->get();
                            @endphp
                            
                            @foreach($categories as $category)
                                <a href="{{ route('belanja.produk', ['category' => $category->slug]) }}" 
                                   class="flex items-center justify-between p-3 rounded-lg {{ request('category') == $category->slug ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }} transition-colors duration-200 group">
                                    <span class="font-nunito">{{ $category->name }}</span>
                                    <span class="{{ request('category') == $category->slug ? 'bg-white text-blue-600' : 'bg-gray-200 text-gray-700 group-hover:bg-blue-100 group-hover:text-blue-600' }} px-2 py-1 rounded-full text-sm font-semibold">{{ $categoryCounts[$category->slug] ?? 0 }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Filter Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 font-nunito">Urutkan</h3>
                        
                        <form method="GET" action="{{ route('belanja.produk') }}">>
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            
                            <div class="space-y-3">
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="sort" value="name-asc" 
                                           class="text-blue-600 focus:ring-blue-500" 
                                           {{ request('sort') == 'name-asc' ? 'checked' : '' }}
                                           onchange="this.form.submit()">
                                    <span class="text-gray-700 font-nunito">Nama (A-Z)</span>
                                </label>
                                
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="sort" value="price-low" 
                                           class="text-blue-600 focus:ring-blue-500"
                                           {{ request('sort') == 'price-low' ? 'checked' : '' }}
                                           onchange="this.form.submit()">
                                    <span class="text-gray-700 font-nunito">Harga: Rendah ke Tinggi</span>
                                </label>
                                
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="sort" value="price-high" 
                                           class="text-blue-600 focus:ring-blue-500"
                                           {{ request('sort') == 'price-high' ? 'checked' : '' }}
                                           onchange="this.form.submit()">
                                    <span class="text-gray-700 font-nunito">Harga: Tinggi ke Rendah</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Header Section -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2 font-nunito">
                        @if(request('category') && request('category') != 'all')
                            @switch(request('category'))
                                @case('gentle-baby')
                                    Minyak Bayi
                                    @break
                                @case('aromatherapy')
                                    Aromaterapi
                                    @break
                                @case('skincare')
                                    Perawatan Kulit
                                    @break
                                @case('essential-oil')
                                    Essential Oil
                                    @break
                                @default
                                    Semua produk
                            @endswitch
                        @else
                            Semua produk
                        @endif
                    </h1>
                    <p class="text-gray-600 font-nunito">Menampilkan {{ $products->count() }} dari {{ $products->total() }} produk</p>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @forelse($products as $product)
                    <!-- Product Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300 group">
                        <!-- Product Image -->
                        <div class="relative bg-gray-100 h-64 flex items-center justify-center">
                            <div class="absolute top-3 right-3">
                                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $product->netweight_item ?? 'Standard' }}
                                </span>
                            </div>
                            <!-- For now, show placeholder since MasterItem doesn't have image field -->
                            <div class="text-gray-400 text-center">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-sm">{{ $product->category->name }}</p>
                            </div>
                        </div>
                        
                        <!-- Product Info -->
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 font-nunito">{{ $product->name_item }}</h3>
                            <p class="text-sm text-gray-600 mb-3 font-nunito">{{ $product->description_item }}</p>
                            <p class="text-2xl font-bold text-blue-600 mb-1 font-nunito">{{ $product->formatted_price }}</p>
                            <p class="text-sm {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }} mb-4 font-nunito">
                                @if($product->stock > 0)
                                    Stok: {{ $product->stock }} {{ $product->unit_item }} tersedia
                                @else
                                    Stok habis
                                @endif
                            </p>
                            
                            <a href="{{ route('produk.detail', $product->item_id) }}" class="block w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 font-nunito text-center {{ $product->stock <= 0 ? 'opacity-50 cursor-not-allowed pointer-events-none' : '' }}">
                                {{ $product->stock > 0 ? 'Lihat Produk' : 'Stok Habis' }}
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <div class="text-gray-400 mb-4">
                            <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2 font-nunito">Tidak ada produk</h3>
                        <p class="text-gray-500 font-nunito">Tidak ada produk yang ditemukan dalam kategori ini.</p>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            {{-- Previous Page Link --}}
                            @if ($products->onFirstPage())
                                <span class="px-3 py-2 text-gray-300 cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </span>
                            @else
                                <a href="{{ $products->previousPageUrl() }}" class="px-3 py-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                @if ($page == $products->currentPage())
                                    <span class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">{{ $page }}</a>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($products->hasMorePages())
                                <a href="{{ $products->nextPageUrl() }}" class="px-3 py-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            @else
                                <span class="px-3 py-2 text-gray-300 cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            @endif
                        </nav>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

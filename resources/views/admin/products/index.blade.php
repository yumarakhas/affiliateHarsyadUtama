@extends('layouts.admin.app')

@section('title', 'Kelola Carousel Varian')

@section('content')
<div class="p-6">
    <!-- Content Navigation -->
    <div class="mb-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-900" style="font-family: 'Nunito', sans-serif;">
                Kelola Konten Landing Page
            </h1>
            <a href="{{ route('admin.content.index') }}" 
               class="text-gray-600 hover:text-gray-800 text-sm">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Dashboard
            </a>
        </div>
        
        <!-- Horizontal Menu Navigation -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-6">
            <div class="flex space-x-1 overflow-x-auto">
                <!-- Carousel Produk -->
                <a href="{{ route('admin.content.carousel-produk') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.carousel-produk*') ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Carousel Produk
                </a>

                <!-- Benefits -->
                <a href="{{ route('admin.content.benefits') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.benefits*') ? 'bg-green-500 text-white shadow-md' : 'text-gray-600 hover:text-green-600 hover:bg-green-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Benefits
                </a>

                <!-- Carousel Varian (Active) -->
                <a href="{{ route('admin.content.carousel-varian') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.carousel-varian*') || Request::routeIs('admin.products*') ? 'bg-purple-500 text-white shadow-md' : 'text-gray-600 hover:text-purple-600 hover:bg-purple-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Carousel Varian
                </a>
            </div>
        </div>
    </div>

    <!-- Carousel Varian Content -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <!-- Header -->
        <div class="mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Kelola Carousel Varian Produk</h2>
                    <p class="text-gray-600">Kelola varian produk yang ditampilkan di carousel halaman utama</p>
                </div>
                <a href="{{ route('admin.content.carousel-varian.create') }}{{ request('category') ? '?category=' . request('category') : '' }}" 
                   class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 transition-colors inline-flex items-center">
                    <i class="fas fa-plus mr-2"></i>Tambah Varian
                </a>
            </div>
        </div>

        <!-- Product Category Selector -->
        <div class="mb-6">
            <div class="bg-gray-50 rounded-lg p-4">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    <i class="fas fa-filter mr-2"></i>Filter Berdasarkan Produk/Brand
                </label>
                <div class="flex flex-wrap gap-2">
                    <!-- All Products -->
                    <a href="{{ route('admin.content.carousel-varian') }}" 
                       class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ !request('category') ? 'bg-purple-500 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50' }}">
                        <i class="fas fa-th mr-2"></i>Semua Produk
                        <span class="ml-2 px-2 py-0.5 text-xs rounded-full {{ !request('category') ? 'bg-purple-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                            {{ $products->total() }}
                        </span>
                    </a>

                    <!-- Gentle Baby -->
                    <a href="{{ route('admin.content.carousel-varian') }}?category=gentle-baby" 
                       class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request('category') == 'gentle-baby' ? 'bg-blue-500 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-300 hover:bg-blue-50' }}">
                        <div class="w-4 h-4 rounded-full bg-blue-400 mr-2"></div>Gentle Baby
                        <span class="ml-2 px-2 py-0.5 text-xs rounded-full {{ request('category') == 'gentle-baby' ? 'bg-blue-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                            @php
                                $gentleBabyCount = \App\Models\Product::where('category', 'gentle-baby')->count();
                            @endphp
                            {{ $gentleBabyCount }}
                        </span>
                    </a>

                    <!-- Mamina -->
                    <a href="{{ route('admin.content.carousel-varian') }}?category=mamina" 
                       class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request('category') == 'mamina' ? 'bg-pink-500 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-300 hover:bg-pink-50' }}">
                        <div class="w-4 h-4 rounded-full bg-pink-400 mr-2"></div>Mamina
                        <span class="ml-2 px-2 py-0.5 text-xs rounded-full {{ request('category') == 'mamina' ? 'bg-pink-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                            @php
                                $maminaCount = \App\Models\Product::where('category', 'mamina')->count();
                            @endphp
                            {{ $maminaCount }}
                        </span>
                    </a>

                    <!-- Nyam -->
                    <a href="{{ route('admin.content.carousel-varian') }}?category=nyam" 
                       class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request('category') == 'nyam' ? 'bg-orange-500 text-white shadow-md' : 'bg-white text-gray-700 border border-gray-300 hover:bg-orange-50' }}">
                        <div class="w-4 h-4 rounded-full bg-orange-400 mr-2"></div>Nyam! MPASI
                        <span class="ml-2 px-2 py-0.5 text-xs rounded-full {{ request('category') == 'nyam' ? 'bg-orange-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                            @php
                                $nyamCount = \App\Models\Product::where('category', 'nyam')->count();
                            @endphp
                            {{ $nyamCount }}
                        </span>
                    </a>
                </div>
                
                @if(request('category'))
                    <div class="mt-3 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                        <div class="flex items-center text-blue-800">
                            <i class="fas fa-info-circle mr-2"></i>
                            <span class="text-sm font-medium">
                                Menampilkan varian untuk: 
                                <span class="font-bold">
                                    @if(request('category') == 'gentle-baby') Gentle Baby
                                    @elseif(request('category') == 'mamina') Mamina  
                                    @elseif(request('category') == 'nyam') Nyam! MPASI
                                    @endif
                                </span>
                            </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Products Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gambar
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama Produk
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Urutan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($products as $index => $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" 
                                         class="w-12 h-12 object-cover rounded-lg shadow-sm">
                                @else
                                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                <div class="text-sm text-gray-500">{{ Str::limit($product->description, 50) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                           {{ $product->category == 'gentle-baby' ? 'bg-blue-100 text-blue-800' : 
                                              ($product->category == 'mamina' ? 'bg-pink-100 text-pink-800' : 
                                              ($product->category == 'nyam' ? 'bg-orange-100 text-orange-800' : 'bg-gray-100 text-gray-800')) }}">
                                    {{ ucfirst(str_replace('-', ' ', $product->category)) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($product->status)
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        <i class="fas fa-check-circle mr-1"></i>Aktif
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        <i class="fas fa-times-circle mr-1"></i>Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-900 bg-gray-100 px-2 py-1 rounded">
                                    {{ $product->order }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.content.carousel-varian.edit', $product->id) }}" 
                                       class="text-purple-600 hover:text-purple-900 bg-purple-50 hover:bg-purple-100 p-2 rounded-lg transition-colors"
                                       title="Edit Varian">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.content.carousel-varian.delete', $product->id) }}" 
                                          method="POST" 
                                          class="inline"
                                          onsubmit="return confirm('Yakin ingin menghapus varian produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900 bg-red-50 hover:bg-red-100 p-2 rounded-lg transition-colors"
                                                title="Hapus Varian">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-box-open text-gray-300 text-4xl mb-4"></i>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada varian produk</h3>
                                    <p class="text-gray-600 mb-4">Mulai dengan menambahkan varian produk pertama untuk carousel</p>
                                    <a href="{{ route('admin.content.carousel-varian.create') }}" 
                                       class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 transition-colors inline-flex items-center">
                                        <i class="fas fa-plus mr-2"></i>Tambah Varian Pertama
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination (if needed) -->
        @if(method_exists($products, 'links'))
            <div class="mt-6">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>
@endsection

@extends('layouts.admin.app')

@section('title', 'Kelola Carousel Produk')

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
                <!-- Carousel Produk (Active) -->
                <a href="{{ route('admin.content.carousel-produk') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap bg-blue-500 text-white shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Carousel Produk
                </a>

                <!-- Benefits -->
                <a href="{{ route('admin.content.benefits') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap text-gray-600 hover:text-green-600 hover:bg-green-50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Benefits
                </a>

                <!-- Carousel Varian -->
                <a href="{{ route('admin.content.carousel-varian') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap text-gray-600 hover:text-purple-600 hover:bg-purple-50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Carousel Varian
                </a>
            </div>
        </div>
    </div>

    <!-- Carousel Produk Content -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <div class="text-center py-16">
            <div class="mx-auto w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Kelola Carousel Produk</h3>
            <p class="text-gray-600 mb-6 max-w-md mx-auto">
                Fitur ini akan memungkinkan Anda untuk mengelola carousel produk utama di halaman beranda. 
                Anda dapat mengatur gambar, teks, dan urutan tampilan carousel.
            </p>
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 max-w-lg mx-auto">
                <div class="flex items-center text-blue-800">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-medium">Fitur ini sedang dalam pengembangan</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin.app')

@section('title', 'Kelola Konten Landing Page')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2" style="font-family: 'Nunito', sans-serif;">
            Kelola Konten Landing Page
        </h1>
        <p class="text-gray-600">Pilih section yang ingin Anda kelola untuk mengatur konten halaman utama website</p>
    </div>

    <!-- Navigation Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Carousel Produk Card -->
        <a href="{{ route('admin.content.carousel-produk') }}" 
           class="group bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 rounded-xl p-6 border border-blue-200 hover:border-blue-300 transition-all duration-300 shadow-sm hover:shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-blue-500 p-3 rounded-lg group-hover:bg-blue-600 transition-colors">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="text-blue-500 group-hover:text-blue-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Carousel Produk</h3>
            <p class="text-gray-600 text-sm mb-4">Kelola gambar dan konten carousel produk utama di halaman beranda</p>
            <div class="flex items-center text-blue-600 text-sm font-medium">
                <span>Kelola Carousel Produk</span>
            </div>
        </a>

        <!-- Benefits Card -->
        <a href="{{ route('admin.content.benefits') }}" 
           class="group bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 rounded-xl p-6 border border-green-200 hover:border-green-300 transition-all duration-300 shadow-sm hover:shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-green-500 p-3 rounded-lg group-hover:bg-green-600 transition-colors">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-green-500 group-hover:text-green-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Benefits</h3>
            <p class="text-gray-600 text-sm mb-4">Kelola section manfaat dan keunggulan produk di halaman beranda</p>
            <div class="flex items-center text-green-600 text-sm font-medium">
                <span>Kelola Benefits</span>
            </div>
        </a>

        <!-- Carousel Varian Card -->
        <a href="{{ route('admin.content.carousel-varian') }}" 
           class="group bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 rounded-xl p-6 border border-purple-200 hover:border-purple-300 transition-all duration-300 shadow-sm hover:shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-purple-500 p-3 rounded-lg group-hover:bg-purple-600 transition-colors">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div class="text-purple-500 group-hover:text-purple-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Carousel Varian</h3>
            <p class="text-gray-600 text-sm mb-4">Kelola carousel varian produk dan detail informasi produk</p>
            <div class="flex items-center text-purple-600 text-sm font-medium">
                <span>Kelola Carousel Varian</span>
            </div>
        </a>
    </div>

    <!-- Quick Stats -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Statistik Konten</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600">{{ $productsCount ?? 0 }}</div>
                <div class="text-sm text-gray-600">Total Varian</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-600">{{ $gentleBabyCount ?? 0 }}</div>
                <div class="text-sm text-gray-600">Gentle Baby</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-pink-600">{{ $maminaCount ?? 0 }}</div>
                <div class="text-sm text-gray-600">Mamina</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-orange-600">{{ $nyamCount ?? 0 }}</div>
                <div class="text-sm text-gray-600">Nyam! MPASI</div>
            </div>
        </div>
    </div>

    <!-- Recent Activity (Optional) -->
    <div class="mt-8 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Aktivitas Terkini</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-b-0">
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <span class="text-sm text-gray-600">Sistem siap untuk pengelolaan konten</span>
                </div>
                <span class="text-xs text-gray-400">Hari ini</span>
            </div>
        </div>
    </div>
</div>
@endsection

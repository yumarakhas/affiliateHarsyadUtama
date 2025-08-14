@extends('layouts.app')

@section('title', 'Produk - Gentle Living')

@section('content')
    <style>
        .carousel-container {
            padding: 0 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        #productCarousel {
            transition: transform 0.5s ease-in-out;
            gap: 1.5rem;
        }
        
        .product-card {
            transition: transform 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-4px);
        }
        
        .dot.active {
            background-color: #6C63FF !important;
        }
        
        /* Desktop: 3 cards per view */
        @media (min-width: 1024px) {
            .product-card {
                min-width: calc(33.333% - 1rem);
                max-width: calc(33.333% - 1rem);
            }
        }
        
        /* Tablet: 2 cards per view */
        @media (min-width: 768px) and (max-width: 1023px) {
            .product-card {
                min-width: calc(50% - 0.75rem);
                max-width: calc(50% - 0.75rem);
            }
        }
        
        /* Mobile: 1 card per view */
        @media (max-width: 767px) {
            .carousel-container {
                padding: 0 1rem;
            }
            
            .product-card {
                min-width: calc(100% - 2rem);
                max-width: calc(100% - 2rem);
            }
        }
        
        /* Square image container */
        .image-container {
            width: 100%;
            aspect-ratio: 1 / 1;
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            background: white;
        }
        
        .image-container img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Varian Carousel Styles */
        #varianCarousel {
            transition: transform 0.5s ease-in-out;
            gap: 1.5rem;
        }
        
        .varian-card {
            transition: transform 0.3s ease;
        }
        
        .varian-card:hover {
            transform: translateY(-4px);
        }
        
        /* Desktop: 3 varian cards per view */
        @media (min-width: 1024px) {
            .varian-card {
                min-width: calc(33.333% - 1rem);
                max-width: calc(33.333% - 1rem);
            }
        }
        
        /* Tablet: 2 varian cards per view */
        @media (min-width: 768px) and (max-width: 1023px) {
            .varian-card {
                min-width: calc(50% - 0.75rem);
                max-width: calc(50% - 0.75rem);
            }
        }
        
        /* Mobile: 1 varian card per view */
        @media (max-width: 767px) {
            .varian-card {
                min-width: calc(100% - 2rem);
                max-width: calc(100% - 2rem);
            }
        }
        
        /* Varian Square image container */
        .varian-image-container {
            width: 100%;
            aspect-ratio: 1 / 1;
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            background: white;
        }
        
        .varian-image-container img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    </style>
    <!-- Hero Produk Section -->
    <section class="relative bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Title -->
            <div class="text-center px-6 mb-12">
                @php
                    $productTitle = 'Gentle Baby';
                    
                    if(request('product') == 'mamina') {
                        $productTitle = 'Mamina ASI Booster';
                    } elseif(request('product') == 'nyam') {
                        $productTitle = 'Nyam!';
                    }
                @endphp
                
                <h1 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-5xl text-[#6C63FF]">
                    {{ $productTitle }}
                </h1>
            </div>

            <!-- Product Carousel -->
            <div class="relative mb-16 carousel-container">
                <!-- Carousel Container -->
                <div class="overflow-hidden rounded-lg">
                    <div id="productCarousel" class="flex">
                        @php
                            $productImage = 'gentleBaby.png';
                            if(request('product') == 'mamina') {
                                $productImage = 'mamina.png';
                            } elseif(request('product') == 'nyam') {
                                $productImage = 'nyam.png';
                            }
                        @endphp
                        
                        <!-- Product Cards - 10 items total -->
                        @for ($i = 1; $i <= 10; $i++)
                        <div class="product-card flex-none mx-3">
                            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 text-center shadow-lg border border-gray-200">
                                <!-- Square Image Container 1:1 ratio -->
                                <div class="image-container shadow-md">
                                    <img src="{{ asset('images/' . $productImage) }}" alt="Product {{ $i }}" class="rounded-lg">
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Dots Indicator -->
                <div class="flex justify-center mt-8 space-x-3">
                    <div class="dot active w-3 h-3 bg-[#6C63FF] rounded-full cursor-pointer transition-all duration-200 hover:scale-110" data-slide="0"></div>
                    <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer transition-all duration-200 hover:scale-110" data-slide="1"></div>
                    <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer transition-all duration-200 hover:scale-110" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Benefits Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Product Benefits -->
            <div class="text-center mb-12">
                @if(request('product') == 'mamina')
                    <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-gray-700 mb-6">
                        Pelancar ASI dari bahan rempah alami terpilih untuk meningkatkan kualitas dan kuantitas ASI.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">100% BAHAN ALAMI REMPAH TERPILIH</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MENINGKATKAN KUALITAS & KUANTITAS ASI</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">KONSULTASI GRATIS dengan ahli laktasi</span>
                        </div>
                    </div>
                @elseif(request('product') == 'nyam')
                    <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-gray-700 mb-6">
                        Makanan Pendamping ASI (MPASI) berkualitas tinggi untuk tumbuh kembang optimal si kecil.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MPASI BERKUALITAS TINGGI</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">NUTRISI LENGKAP untuk tumbuh kembang</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">KONSULTASI GRATIS seputar MPASI</span>
                        </div>
                    </div>
                @else
                    <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-gray-700 mb-6">
                        Minyak Bayi Aromaterapi, kombinasi Essential Oil dan Sunflower Seed Oil untuk kesehatan ibu, bayi, dan balita.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MINYAK PIJAT BAYI BALITA</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Bahan Alami, AMAN untuk BAYI mulai usia 0-4th</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-brand-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">FREE Konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @if(!request('product') || request('product') == 'gentle-baby')
    <!-- Varian Section - Only for Gentle Baby -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-4xl text-[#6C63FF] mb-8">
                    Varian
                </h2>
                
                <!-- Varian Carousel -->
                <div class="carousel-container relative">
                    <div class="overflow-hidden rounded-xl">
                        <div id="varianCarousel" class="flex transition-transform duration-500 ease-in-out gap-6">
                            @php
                                $variants = [
                                    ['name' => 'Cough n Flu', 'desc' => 'Minyak oles flu, pilek untuk balita'],
                                    ['name' => 'Deep Sleep', 'desc' => 'Minyak pijat untuk tidur nyenyak'],
                                    ['name' => 'Gimme Food', 'desc' => 'Minyak penambah nafsu makan'],
                                    ['name' => 'Joy', 'desc' => 'Minyak relaksasi dan kebahagiaan'],
                                    ['name' => 'Calm Baby', 'desc' => 'Minyak penenang untuk bayi rewel'],
                                    ['name' => 'Fresh Breath', 'desc' => 'Minyak aromaterapi penyegar'],
                                    ['name' => 'Skin Care', 'desc' => 'Minyak perawatan kulit bayi'],
                                    ['name' => 'Immunity', 'desc' => 'Minyak penambah daya tahan tubuh'],
                                    ['name' => 'Growth Plus', 'desc' => 'Minyak pendukung tumbuh kembang']
                                ];
                            @endphp
                            
                            <!-- Varian Cards - 9 items total -->
                            @foreach($variants as $index => $variant)
                            <div class="varian-card flex-none mx-3">
                                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-6 text-center shadow-lg border border-gray-200 h-auto">
                                    <!-- Square Image Container 1:1 ratio -->
                                    <div class="varian-image-container mb-4 shadow-md">
                                        <img src="{{ asset('images/gentleBaby.png') }}" alt="{{ $variant['name'] }}" class="rounded-lg">
                                    </div>
                                    
                                    <!-- Varian Info -->
                                    <div class="text-center">
                                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-lg">
                                            {{ $variant['name'] }}
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-4">
                                            {{ $variant['desc'] }}
                                        </p>
                                        <button class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-6 py-2 rounded-full text-sm font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all duration-200 shadow-md hover:shadow-lg">
                                            Beli
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <button id="varianPrevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button id="varianNextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Carousel Indicators -->
                <div id="varianIndicators" class="flex justify-center space-x-2 mt-6">
                    <!-- Dots will be generated by JavaScript -->
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Produk Lainnya Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-4xl text-[#6C63FF] mb-8">
                    Produk Lainnya
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    @if(request('product') != 'gentle-baby' && request('product') != null)
                    <!-- Gentle Baby -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-white rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby" class="max-h-full max-w-full object-contain">
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-xl">
                            Gentle Baby
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Minyak Bayi Aromaterapi untuk kesehatan dan kenyamanan si kecil
                        </p>
                        <a href="{{ route('produk', ['product' => 'gentle-baby']) }}" class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-8 py-3 rounded-full font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all inline-block">
                            Lihat Produk
                        </a>
                    </div>
                    @endif
                    
                    @if(request('product') != 'mamina')
                    <!-- Mamina ASI Booster -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-white rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/mamina.png') }}" alt="Mamina ASI Booster" class="max-h-full max-w-full object-contain">
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-xl">
                            Mamina ASI Booster
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Pelancar ASI dari bahan Rempah Alami
                        </p>
                        <a href="{{ route('produk', ['product' => 'mamina-asi-booster']) }}" class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-8 py-3 rounded-full font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all inline-block">
                            Lihat Produk
                        </a>
                    </div>
                    @endif
                    
                    @if(request('product') != 'nyam')
                    <!-- Nyam! -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-white rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/nyam.png') }}" alt="Nyam! MPASI" class="max-h-full max-w-full object-contain">
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-xl">
                            Nyam!
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Makanan Pendamping ASI (MPASI)
                        </p>
                        <a href="{{ route('produk', ['product' => 'nyam']) }}" class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-8 py-3 rounded-full font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all inline-block">
                            Lihat Produk
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Penilaian Produk Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-4xl text-[#6C63FF] mb-8">
                    Penilaian Produk
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Review 1 -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                        <div class="flex justify-center mb-3">
                            <div class="flex space-x-1">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">uer01</h4>
                        <p class="text-sm text-gray-600">
                            Sangat berguna untuk masa mpasi bayi. Anak saya yang awalnya susah makan jadi lahap untuk makan. Delivery yang sangat cepat, hanya 2 hari sudah sampai.
                        </p>
                    </div>
                    
                    <!-- Review 2 -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                        <div class="flex justify-center mb-3">
                            <div class="flex space-x-1">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">user02</h4>
                        <p class="text-sm text-gray-600">
                            Sangat membantu untuk melancarkan ASI dan sangat bagus untuk konsumsi ibu yang sedang menyusui. Pengiriman cepat dan rempah segar.
                        </p>
                    </div>
                    
                    <!-- Review 3 -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                        <div class="flex justify-center mb-3">
                            <div class="flex space-x-1">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">user03</h4>
                        <p class="text-sm text-gray-600">
                            Sangat senang dengan kualitas produk yang terjaga dan aman untuk anak. Minyak pijat balita ini sangat membantu untuk tidur nyenyak si kecil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('productCarousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dots = document.querySelectorAll('.dot');
            
            let currentSlide = 0;
            const totalItems = 10;
            
            function getItemsPerView() {
                if (window.innerWidth >= 1024) return 3; // Desktop: 3 cards
                if (window.innerWidth >= 768) return 2;  // Tablet: 2 cards  
                return 1; // Mobile: 1 card
            }
            
            function getTotalSlides() {
                const itemsPerView = getItemsPerView();
                return Math.ceil(totalItems / itemsPerView);
            }
            
            function updateCarousel() {
                const itemsPerView = getItemsPerView();
                const slideWidth = 100 / itemsPerView;
                const translateX = currentSlide * slideWidth;
                
                carousel.style.transform = `translateX(-${translateX}%)`;
                
                // Update dots
                const totalSlides = getTotalSlides();
                dots.forEach((dot, index) => {
                    const isActive = index === currentSlide;
                    dot.classList.toggle('bg-[#6C63FF]', isActive);
                    dot.classList.toggle('bg-gray-300', !isActive);
                });
                
                // Update button states
                prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
                prevBtn.style.pointerEvents = currentSlide === 0 ? 'none' : 'auto';
                
                const maxSlide = totalSlides - 1;
                nextBtn.style.opacity = currentSlide >= maxSlide ? '0.5' : '1';
                nextBtn.style.pointerEvents = currentSlide >= maxSlide ? 'none' : 'auto';
            }
            
            function nextSlide() {
                const totalSlides = getTotalSlides();
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                } else {
                    currentSlide = 0; // Loop back to start
                }
                updateCarousel();
            }
            
            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                } else {
                    currentSlide = getTotalSlides() - 1; // Loop to end
                }
                updateCarousel();
            }
            
            function goToSlide(slideIndex) {
                const totalSlides = getTotalSlides();
                currentSlide = Math.min(slideIndex, totalSlides - 1);
                updateCarousel();
            }
            
            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => goToSlide(index));
            });
            
            // Auto-play carousel (optional - remove if not wanted)
            let autoPlayInterval = setInterval(nextSlide, 4000);
            
            // Pause auto-play on hover
            carousel.parentElement.addEventListener('mouseenter', () => {
                clearInterval(autoPlayInterval);
            });
            
            carousel.parentElement.addEventListener('mouseleave', () => {
                autoPlayInterval = setInterval(nextSlide, 4000);
            });
            
            // Handle resize
            window.addEventListener('resize', () => {
                const totalSlides = getTotalSlides();
                if (currentSlide >= totalSlides) {
                    currentSlide = totalSlides - 1;
                }
                updateCarousel();
            });
            
            // Initialize
            updateCarousel();
            
            // Touch/Swipe support for mobile
            let startX = 0;
            let currentX = 0;
            let isTouch = false;
            
            carousel.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                isTouch = true;
            });
            
            carousel.addEventListener('touchmove', (e) => {
                if (!isTouch) return;
                currentX = e.touches[0].clientX;
                e.preventDefault();
            });
            
            carousel.addEventListener('touchend', () => {
                if (!isTouch) return;
                isTouch = false;
                
                const deltaX = startX - currentX;
                if (Math.abs(deltaX) > 50) { // Minimum swipe distance
                    if (deltaX > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
            });
            
            // Varian Carousel functionality
            const varianCarousel = document.getElementById('varianCarousel');
            const varianNextBtn = document.getElementById('varianNextBtn');
            const varianPrevBtn = document.getElementById('varianPrevBtn');
            const varianIndicators = document.getElementById('varianIndicators');
            
            if (varianCarousel) {
                let varianCurrentSlide = 0;
                const totalVarianItems = 9;
                
                function getVarianItemsPerView() {
                    if (window.innerWidth >= 1024) return 3; // Desktop: 3 cards
                    if (window.innerWidth >= 768) return 2;  // Tablet: 2 cards  
                    return 1; // Mobile: 1 card
                }
                
                function getTotalVarianSlides() {
                    const itemsPerView = getVarianItemsPerView();
                    return Math.ceil(totalVarianItems / itemsPerView);
                }
                
                function updateVarianCarousel() {
                    const itemsPerView = getVarianItemsPerView();
                    const slideWidth = 100 / itemsPerView;
                    const translateX = varianCurrentSlide * slideWidth;
                    
                    varianCarousel.style.transform = `translateX(-${translateX}%)`;
                    
                    // Update indicators
                    const dots = varianIndicators.querySelectorAll('.dot');
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === varianCurrentSlide);
                    });
                    
                    // Update navigation buttons
                    const totalSlides = getTotalVarianSlides();
                    varianPrevBtn.style.opacity = varianCurrentSlide === 0 ? '0.5' : '1';
                    varianNextBtn.style.opacity = varianCurrentSlide >= totalSlides - 1 ? '0.5' : '1';
                }
                
                function nextVarianSlide() {
                    const totalSlides = getTotalVarianSlides();
                    if (varianCurrentSlide < totalSlides - 1) {
                        varianCurrentSlide++;
                        updateVarianCarousel();
                    }
                }
                
                function prevVarianSlide() {
                    if (varianCurrentSlide > 0) {
                        varianCurrentSlide--;
                        updateVarianCarousel();
                    }
                }
                
                function goToVarianSlide(slideIndex) {
                    varianCurrentSlide = slideIndex;
                    updateVarianCarousel();
                }
                
                // Create indicators
                function createVarianIndicators() {
                    const totalSlides = getTotalVarianSlides();
                    varianIndicators.innerHTML = '';
                    
                    for (let i = 0; i < totalSlides; i++) {
                        const dot = document.createElement('button');
                        dot.classList.add('dot', 'w-3', 'h-3', 'rounded-full', 'bg-gray-300', 'hover:bg-gray-400', 'transition-colors');
                        if (i === 0) dot.classList.add('active');
                        dot.addEventListener('click', () => goToVarianSlide(i));
                        varianIndicators.appendChild(dot);
                    }
                }
                
                // Event listeners
                varianNextBtn.addEventListener('click', nextVarianSlide);
                varianPrevBtn.addEventListener('click', prevVarianSlide);
                
                // Auto-slide functionality
                let varianAutoSlideInterval;
                
                function startVarianAutoSlide() {
                    varianAutoSlideInterval = setInterval(() => {
                        const totalSlides = getTotalVarianSlides();
                        if (varianCurrentSlide >= totalSlides - 1) {
                            varianCurrentSlide = 0;
                        } else {
                            varianCurrentSlide++;
                        }
                        updateVarianCarousel();
                    }, 4000);
                }
                
                function stopVarianAutoSlide() {
                    clearInterval(varianAutoSlideInterval);
                }
                
                varianCarousel.parentElement.addEventListener('mouseenter', stopVarianAutoSlide);
                varianCarousel.parentElement.addEventListener('mouseleave', startVarianAutoSlide);
                
                // Responsive handling
                window.addEventListener('resize', () => {
                    createVarianIndicators();
                    updateVarianCarousel();
                });
                
                // Touch/swipe support for mobile
                let varianStartX = 0;
                let varianCurrentX = 0;
                let varianIsDragging = false;
                
                varianCarousel.addEventListener('touchstart', (e) => {
                    varianStartX = e.touches[0].clientX;
                    varianIsDragging = true;
                });
                
                varianCarousel.addEventListener('touchmove', (e) => {
                    if (!varianIsDragging) return;
                    varianCurrentX = e.touches[0].clientX;
                    e.preventDefault();
                });
                
                varianCarousel.addEventListener('touchend', () => {
                    if (!varianIsDragging) return;
                    varianIsDragging = false;
                    
                    const diffX = varianStartX - varianCurrentX;
                    const threshold = 50;
                    
                    if (Math.abs(diffX) > threshold) {
                        if (diffX > 0) {
                            nextVarianSlide();
                        } else {
                            prevVarianSlide();
                        }
                    }
                });
                
                // Initialize
                createVarianIndicators();
                updateVarianCarousel();
                startVarianAutoSlide();
            }
        });
    </script>
@endsection

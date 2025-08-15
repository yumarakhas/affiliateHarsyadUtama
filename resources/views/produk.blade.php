@extends('layouts.app')

@section('title', 'Produk - Gentle Living')

@section('content')
    <style>
        .carousel-container {
            padding: 0 2rem;
            max-width: 1900px;
            margin: 0 auto;
        }
        
        #productCarousel {
            transition: transform 0.5s ease-in-out;
            gap: 1rem;
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
                min-width: calc(50% - 0.5rem);
                max-width: calc(50% - 0.5rem);
            }
        }
        
        /* Mobile: 1 card per view */
        @media (max-width: 767px) {
            .carousel-container {
                padding: 0 1rem;
            }
            
            .product-card {
                min-width: calc(100% - 1rem);
                max-width: calc(100% - 1rem);
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
            gap: 0.5rem;
        }
        
        .varian-card {
            transition: transform 0.3s ease;
        }
        
        .varian-card:hover {
            transform: translateY(-4px);
        }
        
        /* Desktop: 5 varian cards per view (smaller cards) */
        @media (min-width: 1200px) {
            .varian-card {
                min-width: calc(20% - 1.2rem);
                max-width: calc(20% - 1.2rem);
            }
        }
        
        /* Large Desktop: 4 varian cards per view */
        @media (min-width: 1024px) and (max-width: 1199px) {
            .varian-card {
                min-width: calc(25% - 1rem);
                max-width: calc(25% - 1rem);
            }
        }
        
        /* Tablet: 3 varian cards per view */
        @media (min-width: 768px) and (max-width: 1023px) {
            .varian-card {
                min-width: calc(33.333% - 0.75rem);
                max-width: calc(33.333% - 0.75rem);
            }
        }
        
        /* Mobile: 2 varian cards per view */
        @media (min-width: 480px) and (max-width: 767px) {
            .varian-card {
                min-width: calc(50% - 0.5rem);
                max-width: calc(50% - 0.5rem);
            }
        }
        
        /* Small Mobile: 1 varian card per view */
        @media (max-width: 479px) {
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
        
        /* Card styles untuk varian */
        .card-product {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            border-radius: 0.75rem;
            padding: 0.75rem;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
            height: auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-product:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* Button styles */
        .btn-gradient-brand {
            background: linear-gradient(90deg, #528B89 0%, #6C63FF 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-gradient-brand:hover {
            background: linear-gradient(90deg, #446b6a 0%, #5a56d1 100%);
            transform: translateY(-1px);
        }

        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.75rem;
        }

        /* Carousel button styles */
        .btn-carousel {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #e5e7eb;
            border-radius: 50%;
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(4px);
        }

        .btn-carousel:hover {
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
    </style>

    @php
        // Define product title based on request parameter
        $productType = request('product', 'gentle-baby');
        $productTitle = match($productType) {
            'mamina', 'mamina-asi-booster' => 'Mamina ASI Booster',
            'nyam' => 'Nyam! MPASI',
            default => 'Gentle Baby'
        };
    @endphp

    <!-- Hero Produk Section -->
    <section class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
            <div class="text-center mb-16">
                <h1 class="text-3xl lg:text-5xl text-[#6C63FF] font-fredoka mt-4">
                    {{ $productTitle }}
                </h1>
            </div>

            <!-- Product Carousel -->
            <div class="relative mb-16 carousel-container mt-4">
                <!-- Carousel Container -->
                <div class="overflow-hidden rounded-lg">
                    <div id="productCarousel" class="flex">
                        @php
                            if(request('product') == 'mamina' || request('product') == 'mamina-asi-booster') {
                                // Mamina - Multiple images from folder
                                $productImages = [
                                    'products/mamina/ori-10.jpg',
                                    'products/mamina/bahan-manfaat-ori.jpg',
                                    'products/mamina/mamina1.jpg',
                                    'products/mamina/paket-20.jpg',
                                    'products/mamina/bahan-manfaat-jeruk-nipis.jpg',
                                    'products/mamina/mamina-2.jpg',
                                    'products/mamina/bahan-manfaat-belimbing.jpg'
                                ];
                            } elseif(request('product') == 'nyam') {
                                $productImages = [
                                    'products/nyam/nyam-1.jpg',
                                    'products/nyam/nyam-11.jpg',
                                    'products/nyam/nyam-2.jpg',
                                    'products/nyam/nyam-22.jpg',
                                    'products/nyam/nyam-3.jpg',
                                    'products/nyam/nyam-33.jpg'
                                ];
                            } else {
                                // Gentle Baby - Multiple images from folder
                                $productImages = [
                                    'products/gentle-baby/gentle-baby-1.jpg',
                                    'products/gentle-baby/gentle-baby-2.jpg',
                                    'products/gentle-baby/gentle-baby-3.jpg',
                                    'products/gentle-baby/gentle-baby-4.png',
                                    'products/gentle-baby/gentle-baby-5.png',
                                    'products/gentle-baby/gentle-baby-6.png',
                                    'products/gentle-baby/gentle-baby-7.png',
                                    'products/gentle-baby/gentle-baby-8.png',
                                    'products/gentle-baby/gentle-baby-9.png',
                                    'products/gentle-baby/gentle-baby-10.png'
                                ];
                            }
                        @endphp
                        
                        <!-- Product Cards - 10 items total -->
                        @foreach($productImages as $index => $image)
                        <div class="product-card flex-none mx-3">
                            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 text-center shadow-lg border border-gray-200">
                                <!-- Square Image Container 1:1 ratio -->
                                <div class="image-container shadow-md">
                                    <img src="{{ asset('images/' . $image) }}" 
                                        alt="{{ $productTitle }} Product {{ $index + 1 }}" 
                                        class="rounded-lg"
                                        onerror="this.src='{{ asset('images/' . (request('product') == 'nyam' ? 'nyam.png' : (request('product') == 'mamina' || request('product') == 'mamina-asi-booster' ? 'mamina.png' : 'gentleBaby.png'))) }}'">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10">
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
    <section class="py-4 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Product Benefits -->
            <div class="text-center mb-6">
                @if(request('product') == 'mamina')
                    <p class="text-lg text-gray-700 mb-6 font-nunito">
                        Pelancar ASI dari bahan rempah alami terpilih untuk meningkatkan kualitas dan kuantitas ASI.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">100% BAHAN ALAMI REMPAH TERPILIH</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MENINGKATKAN KUALITAS & KUANTITAS ASI</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">KONSULTASI GRATIS dengan ahli laktasi</span>
                        </div>
                    </div>
                @elseif(request('product') == 'nyam')
                    <p class="text-lg text-gray-700 mb-6 font-nunito">
                        Makanan Pendamping ASI (MPASI) berkualitas tinggi dengan nutrisi lengkap untuk tumbuh kembang optimal si kecil.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MPASI BERGIZI TINGGI & HIGIENIS</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">NUTRISI LENGKAP sesuai tahapan usia</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">TANPA PENGAWET & MSG - 100% Alami</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">KONSULTASI GRATIS ahli gizi MPASI</span>
                        </div>
                    </div>
                @else
                    <p class="text-lg text-gray-700 mb-6 font-nunito">
                        Minyak Bayi Aromaterapi, kombinasi Essential Oil dan Sunflower Seed Oil untuk kesehatan ibu, bayi, dan balita.
                    </p>
                    
                    <div class="space-y-3 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">MINYAK PIJAT BAYI BALITA</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Bahan Alami, AMAN untuk BAYI mulai usia 0-4th</span>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-3">
                            <div class="w-6 h-6 bg-[#6C63FF] rounded-full flex items-center justify-center">
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

    @if((!request('product') || request('product') == 'gentle-baby') || request('product') == 'nyam' || request('product') == 'mamina' || request('product') == 'mamina-asi-booster')
    <!-- Varian Section - For Gentle Baby, Nyam, and Mamina -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl lg:text-4xl text-[#6C63FF] mb-8 font-fredoka">
                    Varian
                </h2>
                
                <!-- Varian Carousel -->
                <div class="carousel-container relative">
                    <div class="overflow-hidden rounded-xl">
                        <div id="varianCarousel" class="flex transition-transform duration-500 ease-in-out gap-6">
                            @php
                            if(request('product') == 'mamina' || request('product') == 'mamina-asi-booster') {
                                // Mamina Variants
                                $variants = [
                                    ['name' => 'Paket Bundle Premium', 'desc' => 'Paket premium dengan isi eksklusif', 'image' => 'products/mamina/variants/paket-20.jpg'],
                                    ['name' => 'Rempah Original', 'desc' => 'Seduhan rempah pelancar ASI original', 'image' => 'products/mamina/variants/paket-20.jpg'],
                                    ['name' => 'Rempah Jeruk Nipis', 'desc' => 'Seduhan rempah dengan perasa jeruk nipis', 'image' => 'products/mamina/variants/jeruk-nipis-10.jpg'],
                                    ['name' => 'Rempah Belimbing Wuluh', 'desc' => 'Seduhan rempah dengan perasa belimbing wuluh', 'image' => 'products/mamina/variants/jeruk-nipis-20.jpg'],
                                    ['name' => 'Tea Bag Original', 'desc' => 'Tea bag praktis untuk ibu sibuk', 'image' => 'products/mamina/variants/belimbing-10.jpg'],
                                    ['name' => 'Kapsul Herbal', 'desc' => 'Kapsul herbal pelancar ASI praktis', 'image' => 'products/mamina/variants/belimbing-20.jpg'],
                                    ['name' => 'Susu Almond', 'desc' => 'Susu almond khusus ibu menyusui', 'image' => 'products/mamina/variants/ori-10.jpg'],
                                    ['name' => 'Cookies Lactation', 'desc' => 'Cookies laktasi untuk camilan sehat', 'image' => 'products/mamina/variants/ori-20.jpg']
                                ];
                            } elseif(request('product') == 'nyam') {
                                // Nyam Variants
                                $variants = [
                                    ['name' => 'Abon Hati Ayam', 'desc' => 'MPASI abon hati ayam bergizi tinggi', 'image' => 'products/nyam/variants/abon-hati-ayam.jpg'],
                                    ['name' => 'Chicken Pudding', 'desc' => 'MPASI chicken pudding bergizi tinggi', 'image' => 'products/nyam/variants/chicken-pudding.jpg'],
                                    ['name' => 'Dori Bumbu Kuning', 'desc' => 'MPASI dori bumbu kuning bergizi tinggi', 'image' => 'products/nyam/variants/dori-bumbu-kuning.jpg'],
                                    ['name' => 'Hati Ayam Bumbu Kuning', 'desc' => 'MPASI hati ayam bumbu kuning bergizi tinggi', 'image' => 'products/nyam/variants/hati-ayam-bumbu-kuning.jpg'],
                                    ['name' => 'Hati Ayam Lengkuas', 'desc' => 'Makanan jari untuk bayi aktif', 'image' => 'products/nyam/variants/hati-ayam-lengkuas.jpg'],
                                    ['name' => 'Ice Cream', 'desc' => 'Es krim sehat untuk bayi', 'image' => 'products/nyam/variants/ice-cream.jpg'],
                                    ['name' => 'Jantung Ayam Ungkep', 'desc' => 'Biskuit sehat untuk cemilan', 'image' => 'products/nyam/variants/jantung-ayam-ungkep.jpg'],
                                    ['name' => 'Nasi Uduk', 'desc' => 'Cemilan sehat untuk balita', 'image' => 'products/nyam/variants/nasi-uduk.jpg'],
                                    ['name' => 'Pancake Pisang', 'desc' => 'Biskuit sehat untuk cemilan', 'image' => 'products/nyam/variants/pancake-pisang.jpg'],
                                    ['name' => 'Pasta Bolognese', 'desc' => 'Cemilan sehat untuk balita', 'image' => 'products/nyam/variants/pasta-bolognese.jpg']
                                ];
                            } else {
                                // Gentle Baby Variants (existing)
                                $variants = [
                                    ['name' => 'Cough n Flu', 'desc' => 'Minyak oles flu, pilek untuk balita', 'image' => 'products/gentle-baby/variants/cough-flu.jpg'],
                                    ['name' => 'Deep Sleep', 'desc' => 'Minyak pijat untuk tidur nyenyak', 'image' => 'products/gentle-baby/variants/deep-sleep.jpg'],
                                    ['name' => 'Gimme Food', 'desc' => 'Minyak penambah nafsu makan', 'image' => 'products/gentle-baby/variants/gimme-food.jpg'],
                                    ['name' => 'Joy', 'desc' => 'Minyak relaksasi dan kebahagiaan', 'image' => 'products/gentle-baby/variants/joy.jpg'],
                                    ['name' => 'Tummy Calmer', 'desc' => 'Minyak penenang untuk bayi rewel', 'image' => 'products/gentle-baby/variants/tummy-calmer.jpg'],
                                    ['name' => 'LDR Booster', 'desc' => 'Minyak aromaterapi penyegar', 'image' => 'products/gentle-baby/variants/ldr-booster.jpg'],
                                    ['name' => 'Massage Your Baby', 'desc' => 'Minyak perawatan kulit bayi', 'image' => 'products/gentle-baby/variants/massage-your-baby.jpg'],
                                    ['name' => 'Immboost', 'desc' => 'Minyak penambah daya tahan tubuh', 'image' => 'products/gentle-baby/variants/immboost.jpg'],
                                    ['name' => 'Anti Nyamuk', 'desc' => 'Minyak anti nyamuk alami', 'image' => 'products/gentle-baby/variants/anti-nyamuk.png']
                                ];
                            }
                        @endphp
                            
                            <!-- Varian Cards - 9 items total -->
                            @foreach($variants as $index => $variant)
                            <div class="varian-card flex-none mx-2">
                                <div class="card-product h-auto">
                                    <!-- Square Image Container 1:1 ratio -->
                                    <div class="varian-image-container shadow-sm">
                                        <img src="{{ asset('images/' . $variant['image']) }}" alt="{{ $variant['name'] }}" class="rounded-lg"
                                        onerror="this.src='{{ asset('images/' . (request('product') == 'nyam' ? 'nyam.png' : (request('product') == 'mamina' || 
                                        request('product') == 'mamina-asi-booster' ? 'mamina.png' : 'gentleBaby.png'))) }}'">
                                    </div>
                                    
                                    <!-- Varian Info -->
                                    <div class="text-center">
                                        <h3 class="font-bold text-gray-800 mb-1 text-sm font-nunito">
                                            {{ $variant['name'] }}
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3 leading-tight">
                                            {{ $variant['desc'] }}
                                        </p>
                                        <button class="btn-gradient-brand btn-sm">
                                            Beli
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <button id="varianPrevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button id="varianNextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10">
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
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl lg:text-4xl text-[#6C63FF] mb-8 font-fredoka">
                    Produk Lainnya
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    @if(request('product') != 'gentle-baby' && request('product') != null)
                    <!-- Gentle Baby -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-white rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby" class="max-h-full max-w-full object-contain">
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2 text-xl font-nunito">
                            Gentle Baby
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Minyak Bayi Aromaterapi untuk kesehatan dan kenyamanan si kecil
                        </p>
                        <a href="{{ route('produk', ['product' => 'gentle-baby']) }}" class="btn-gradient-brand inline-block">
                            Lihat Produk
                        </a>
                    </div>
                    @endif
                    
                    @if(request('product') != 'mamina' && request('product') != 'mamina-asi-booster')
                    <!-- Mamina ASI Booster -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-white rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/mamina.png') }}" alt="Mamina ASI Booster" class="max-h-full max-w-full object-contain">
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2 text-xl font-nunito">
                            Mamina ASI Booster
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Pelancar ASI dari bahan Rempah Alami
                        </p>
                        <a href="{{ route('produk', ['product' => 'mamina-asi-booster']) }}" class="btn-gradient-brand inline-block">
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
                        <h3 class="font-bold text-gray-800 mb-2 text-xl font-nunito">
                            Nyam!
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Makanan Pendamping ASI (MPASI)
                        </p>
                        <a href="{{ route('produk', ['product' => 'nyam']) }}" class="btn-gradient-brand inline-block">
                            Lihat Produk
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Penilaian Produk Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl lg:text-4xl text-[#6C63FF] mb-8 font-fredoka">
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
                    if (window.innerWidth >= 1024) return 5; // Desktop: 5 cards
                    if (window.innerWidth >= 768) return 2;  // Tablet: 2 cards  
                    return 1; // Mobile: 1 card
                }
                
                function getTotalVarianSlides() {
                    const itemsPerView = getVarianItemsPerView();
                    // Perbaikan: gunakan sliding window approach
                    return Math.max(1, totalVarianItems - itemsPerView + 1);
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

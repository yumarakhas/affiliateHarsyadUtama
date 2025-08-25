@extends('layouts.app')

@section('title', 'Produk - Gentle Living')

@section('content')

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
        <div class="max-w-7xl mx-auto px-2 sm:px-2 lg:px-2 pt-2">
            <div class="text-center mb-8">
                <h1 class="text-3xl lg:text-5xl text-[#6C63FF] font-fredoka mt-4">
                    {{ $productTitle }}
                </h1>
            </div>

            <!-- Product Carousel -->
            <div class="relative mb-8 px-2 lg:px-8 max-w-7xl mx-auto mt-4">
                <!-- Carousel Container -->
                <div class="overflow-hidden rounded-xl bg-white p-3 lg:p-4">
                    <div id="productCarousel" class="flex transition-transform duration-500 ease-in-out gap-4">
                        @php
                            if(request('product') == 'mamina' || request('product') == 'mamina-asi-booster') {
                                // Mamina - Multiple images from folder
                                $productImages = [
                                    'products/mamina/ori-10.jpg',
                                    'products/mamina/bahan-manfaat-ori.jpg',
                                    'products/mamina/mamina1.jpg',
                                    'products/mamina/bahan-manfaat-jeruk-nipis.jpg',
                                    'products/mamina/paket-20.jpg',
                                    'products/mamina/bahan-manfaat-belimbing.jpg',
                                    'products/mamina/ori-10.jpg',
                                    'products/mamina/bahan-manfaat-ori.jpg'
                                ];
                            } elseif(request('product') == 'nyam') {
                                $productImages = [
                                    'products/nyam/nyam-1.jpg',
                                    'products/nyam/nyam-11.jpg',
                                    'products/nyam/nyam-2.jpg',
                                    'products/nyam/nyam-22.jpg',
                                    'products/nyam/nyam-3.jpg',
                                    'products/nyam/nyam-33.jpg',
                                    'products/nyam/nyam-1.jpg',
                                    'products/nyam/nyam-11.jpg'
                                ];
                            } else {
                                // Gentle Baby - Multiple images from folder
                                $productImages = [
                                    'products/gentle-baby/gentle-baby-1.jpg',
                                    'products/gentle-baby/gentle-baby-2.jpg',
                                    'products/gentle-baby/gentle-baby-3.jpg',
                                    'products/gentle-baby/gentle-baby-4.png',
                                    'products/gentle-baby/gentle-baby-10.png',
                                    'products/gentle-baby/gentle-baby-9.png',
                                    'products/gentle-baby/gentle-baby-1.jpg',
                                    'products/gentle-baby/gentle-baby-2.jpg'
                                ];
                            }
                        @endphp
                        
                        <!-- Product Cards - 5 gambar per slide sesuai konsep -->
                        @foreach($productImages as $index => $image)
                        <div class="flex-none transition-transform duration-300 hover:-translate-y-1 
                                    w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)]">
                            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl text-center shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300">
                                <!-- Square Image Container -->
                                <div class="w-full aspect-square relative overflow-hidden rounded-lg bg-white shadow-md">
                                    <img src="{{ asset('images/' . $image) }}" 
                                        alt="{{ $productTitle }} Product {{ $index + 1 }}" 
                                        class="absolute inset-0 w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105"
                                        onerror="this.src='{{ asset('images/' . (request('product') == 'nyam' ? 'nyam.png' : (request('product') == 'mamina' || request('product') == 'mamina-asi-booster' ? 'mamina.png' : 'gentleBaby.png'))) }}'">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                        
                <!-- Dots Indicator dengan styling yang lebih menarik -->
                <div class="flex justify-center mt-8 space-x-2">
                    <!-- Dots akan di-generate oleh JavaScript berdasarkan total slides -->
                </div>
            </div>
        </div>
    </section>

    <!-- Product Benefits Section -->
    <section class="py-4 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Product Benefits -->
            <div class="text-center mb-6">
                @if(request('product') == 'mamina-asi-booster')
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
                <div class="px-4 sm:px-8 max-w-7xl mx-auto relative">
                    <div class="overflow-hidden rounded-xl">
                        <div id="varianCarousel" class="flex transition-transform duration-500 ease-in-out gap-2">
                            @php
                            if(request('product') == 'mamina' || request('product') == 'mamina-asi-booster') {
                                // Mamina Variants
                                $variants = [
                                    ['name' => 'Paket 3 box isi 20 kantong', 'image' => 'products/mamina/variants/paket-20.jpg', 'link' => 'https://shopee.co.id/Mamina-Paket-Bundle-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-3-Paket-Isi-20-Kantong-i.1483235365.40754357803'],
                                    ['name' => 'Paket 3 box isi 10 kantong', 'image' => 'products/mamina/variants/paket-10.jpg', 'link' => 'https://shopee.co.id/Mamina-Paket-Bundle-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-3-Paket-Isi10-Kantong-i.1483235365.41704362992'],
                                    ['name' => 'Jeruk Nipis 10 kantong', 'image' => 'products/mamina/variants/jeruk-nipis-10.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Jeruk-Nipis-Isi-10-Kantong-i.1483235365.41104368528'],
                                    ['name' => 'Jeruk Nipis 20 kantong', 'image' => 'products/mamina/variants/jeruk-nipis-20.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Jeruk-Nipis-Isi-20-Kantong-i.1483235365.42903609549'],
                                    ['name' => 'Belimbing Wuluh 10 kantong', 'image' => 'products/mamina/variants/belimbing-10.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Belimbing-Wuluh-Isi-10-Kantong-i.1483235365.43703599893'],
                                    ['name' => 'Belimbing Wuluh 20 kantong', 'image' => 'products/mamina/variants/belimbing-20.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Belimbing-Wuluh-Isi-20-Kantong-i.1483235365.42604364041'],
                                    ['name' => 'Original 10 kantong', 'image' => 'products/mamina/variants/ori-10.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Original-Isi-10-Kantong-i.1483235365.43404363804'],
                                    ['name' => 'Original 20 kantong', 'image' => 'products/mamina/variants/ori-20.jpg', 'link' => 'https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Original-Isi-20-Kantung-i.1483235365.40953609750']
                                ];
                            } elseif(request('product') == 'nyam') {
                                // Nyam Variants
                                $variants = [
                                    ['name' => 'Abon Hati Ayam', 'image' => 'products/nyam/variants/abon-hati-ayam.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-ABON-HATI-AYAM-MPASI-BAYI-ZAT-BESI-TINGGI-NO-MSG-TANPA-PENGAWET-i.1059596102.26274848426'],
                                    ['name' => 'Chicken Pudding', 'image' => 'products/nyam/variants/chicken-pudding.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-CHICKEN-PUDDING-GADON-AYAM-MPASI-BAYI-TINGGI-PROTEIN-NO-MSG-TANPA-PENGAWET-i.1059596102.27611140618'],
                                    ['name' => 'Dori Bumbu Kuning', 'image' => 'products/nyam/variants/dori-bumbu-kuning.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-DORI-BUMBU-KUNING-MPASI-BAYI-8-BULAN-FULL-MEAL-TANPA-PENGAWET-i.1059596102.27411140854'],
                                    ['name' => 'Hati Ayam Bumbu Kuning', 'image' => 'products/nyam/variants/hati-ayam-bumbu-kuning.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-HATI-AYAM-BUMBU-KUNING-MPASI-BAYI-8-BULAN-TINGGI-ZAT-BESI-TANPA-PENGAWET-i.1059596102.25235437153'],
                                    ['name' => 'Hati Ayam Lengkuas', 'image' => 'products/nyam/variants/hati-ayam-lengkuas.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-HATI-AYAM-LENGKUAS-MPASI-BAY-ZAT-BESI-TINGGI-NO-MSG-TANPA-PENGAWET-i.1059596102.26782686685'],
                                    ['name' => 'Hi-Pro Ice Cream', 'image' => 'products/nyam/variants/ice-cream.jpg', 'link' => 'https://shopee.co.id/NYAM-ICE-CREAM-MPASI-%E2%80%93-ES-KRIM-HOMEMADE-TINGGI-PROTEIN-UNTUK-BAYI-ANAK-BB-BOOSTER-i.1059596102.25185486134'],
                                    ['name' => 'Jantung Ayam Ungkep', 'image' => 'products/nyam/variants/jantung-ayam-ungkep.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-JANTUNG-AYAM-UNGKEP-MPASI-BAYI-ANTI-GTM-TANPA-PENGAWET-HOMEMADE-i.1059596102.25493777125'],
                                    ['name' => 'Nasi Uduk', 'image' => 'products/nyam/variants/nasi-uduk.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-NASI-UDUK-AYAM-TELUR-MPASI-BAYI-8-BULAN-GURIH-LEMBUT-FULL-MEAL-NO-MSG-TANPA-PENGAWET-i.1059596102.26659625493'],
                                    ['name' => 'Pancake Pisang', 'image' => 'products/nyam/variants/pancake-pisang.jpg', 'link' => 'https://shopee.co.id/Nyambabyfood-Pancake-Pisang-Homemade-Finger-Food-Sehat-untuk-Anak-Usia-6--i.1059596102.42806701992'],
                                    ['name' => 'Pasta Bolognese', 'image' => 'products/nyam/variants/pasta-bolognese.jpg', 'link' => 'https://shopee.co.id/NYAM-BABY-FOOD-PASTA-BOLOGNESE-MPASI-BAYI-8-BULAN-FULL-MEAL-TANPA-PENGAWET-HOMEMADE-i.1059596102.27559603253']
                                ];
                            } else {
                                // Gentle Baby Variants (existing)
                                $variants = [
                                    ['name' => 'Cough n Flu', 'image' => 'products/gentle-baby/variants/cough-flu.jpg', 'link' => 'https://shopee.co.id/GENTLE-BABY-Cough-n-Flu-Therapeutic-Oil-10-ml-mengatasi-Batuk-Pilek-pada-Bayi-Balita-Bahan-Alami-i.400631324.23843953090'],
                                    ['name' => 'Deep Sleep', 'image' => 'products/gentle-baby/variants/deep-sleep.jpg', 'link' => 'https://shopee.co.id/GENTLE-BABY-Deep-Sleep-Therapeutic-Oil-10-ml-Membuat-Bayi-Tidur-Lebih-Nyenyak-Bahan-Alami-i.400631324.23269436550'],
                                    ['name' => 'Gimme Food', 'image' => 'products/gentle-baby/variants/gimme-food.jpg', 'link' => 'https://shopee.co.id/Gentle-Baby-Gimme-Food-Therapeutic-Oil-10-ml-Tingkatkan-Nafsu-Makan-Buah-Hati-Bahan-Alami-i.400631324.16694810325'],
                                    ['name' => 'Joy', 'image' => 'products/gentle-baby/variants/joy.jpg', 'link' => 'https://shopee.co.id/Gentle-Baby-Joy-Therapeutic-Oil-10-ml-Atasi-Pegal-pegal-Nyeri-Otot-pada-Bayi-Bahan-Alami-i.400631324.23343960290'],
                                    ['name' => 'Tummy Calmer', 'image' => 'products/gentle-baby/variants/tummy-calmer.jpg', 'link' => 'https://shopee.co.id/Gentle-Baby-Tummy-Calmer-Therapeutic-Oil-10-ml-Atasi-Masalah-Perut-Kembung-Si-Kecil-Bahan-Alami-i.400631324.18489288812'],
                                    ['name' => 'LDR Booster', 'image' => 'products/gentle-baby/variants/ldr-booster.jpg', 'link' => 'https://shopee.co.id/Gentle-Baby-LDR-Booster-Therapeutic-Oil-10-ml-Untuk-Ibu-Menyusui-Bahan-Alami-i.400631324.19780323108'],
                                    ['name' => 'Massage Your Baby', 'image' => 'products/gentle-baby/variants/massage-your-baby.jpg', 'link' => 'https://shopee.co.id/Gentle-Baby-Massage-Your-Baby-Therapeutic-Oil-10-ml-Media-untuk-Memijat-Bayi-Balita-Bahan-Alami-i.400631324.21589276883'],
                                    ['name' => 'Immboost', 'image' => 'products/gentle-baby/variants/immboost.jpg', 'link' => 'https://shopee.co.id/GENTLE-BABY-Therapeutic-Oil-10ML-Minyak-Pijat-Aromaterapi-Bayi-Balita-Usia-0-4-Tahun-Bahan-alami-i.400631324.18077793526']
                                ];
                            }
                        @endphp
                            
                            <!-- Varian Cards - Display 5 variants per slide -->
                            @foreach($variants as $index => $variant)
                            <div class="flex-none w-full sm:w-1/2 md:w-1/3 lg:w-1/5 px-2 transition-transform duration-300 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-2 text-center shadow-lg border border-gray-200 h-full flex flex-col justify-between transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl">
                                    <!-- Square Image Container 1:1 ratio -->
                                    <div class="w-full aspect-square relative overflow-hidden rounded-lg bg-white shadow-md mb-3">
                                        <img src="{{ asset('images/' . $variant['image']) }}" 
                                             alt="{{ $variant['name'] }}" 
                                             class="w-full h-full object-cover rounded-lg"
                                             onerror="this.src='{{ asset('images/' . (request('product') == 'nyam' ? 'nyam.png' : (request('product') == 'mamina' || 
                                             request('product') == 'mamina-asi-booster' ? 'mamina.png' : 'gentleBaby.png'))) }}'">
                                    </div>
                                    
                                    <!-- Varian Info -->
                                    <div class="text-center">
                                        <h3 class="font-bold text-gray-800 mb-2 text-sm font-nunito">
                                            {{ $variant['name'] }}
                                        </h3>
                                        <a href="{{ $variant['link'] ?? '#' }}" 
                                            target="_blank" 
                                            rel="noopener noreferrer"
                                            class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90 block text-center">
                                            Beli
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <button id="varianPrevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/90 border border-gray-200 rounded-full w-10 h-10 flex items-center justify-center cursor-pointer transition-all duration-300 backdrop-blur-sm hover:bg-white hover:shadow-lg z-10">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button id="varianNextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/90 border border-gray-200 rounded-full w-10 h-10 flex items-center justify-center cursor-pointer transition-all duration-300 backdrop-blur-sm hover:bg-white hover:shadow-lg z-10">
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
                    <div class="bg-white border rounded-xl overflow-hidden h-64 flex">
                        <!-- Gambar Produk - Bigger Size -->
                        <div class="w-1/2 bg-gray-100 flex items-center justify-center p-6">
                            <img src="{{ asset('images/products/gentle-baby.png') }}" 
                                alt="Gentle Baby" 
                                class="w-full h-44 object-contain">
                        </div>
                        <!-- Konten Produk - Adjusted Layout -->
                        <div class="w-1/2 p-4 flex flex-col">
                            <!-- Judul -->
                            <h3 class="font-bold text-gray-800 mb-2 text-lg font-nunito leading-tight">
                                Gentle Baby
                            </h3>

                            <!-- Deskripsi di tengah -->
                            <p class="text-gray-600 text-sm leading-relaxed flex-1 flex items-center">
                                <span class="block">Minyak Bayi Aromaterapi, kombinasi Essential Oil dan Sunflower Seed Oil untuk kesehatan ibu, bayi, dan balita.</span>
                            </p>

                            <!-- Tombol -->
                            <div class="mt-3 flex justify-center">
                                <a href="{{ route('produk', ['product' => 'gentle-baby']) }}" 
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 px-3 text-sm rounded-lg">
                                Lihat Produk
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @if(request('product') != 'mamina' && request('product') != 'mamina-asi-booster')
                    <!-- Mamina ASI Booster -->
                    <div class="bg-white border rounded-xl overflow-hidden h-64 flex">
                        <!-- Gambar Produk - Bigger Size -->
                        <div class="w-1/2 bg-gray-100 flex items-center justify-center p-6">
                            <img src="{{ asset('images/products/mamina.png') }}" 
                                alt="Mamina ASI Booster" 
                                class="w-full h-44 object-contain">
                        </div>
                        <!-- Konten Produk - Adjusted Layout -->
                        <div class="w-1/2 p-4 flex flex-col">
                            <!-- Judul -->
                            <h3 class="font-bold text-gray-800 mb-2 text-lg font-nunito leading-tight">
                                Mamina ASI Booster
                            </h3>

                            <!-- Deskripsi di tengah -->
                            <p class="text-gray-600 text-sm leading-relaxed flex-1 flex items-center">
                                <span class="block">Pelancar ASI dari bahan Rempah Alami untuk meningkatkan kualitas dan kuantitas ASI</span>
                            </p>

                            <!-- Tombol -->
                            <div class="mt-3 flex justify-center">
                                <a href="{{ route('produk', ['product' => 'mamina-asi-booster']) }}" 
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 px-3 text-sm rounded-lg">
                                Lihat Produk
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @if(request('product') != 'nyam')
                    <!-- Nyam! -->
                    <div class="bg-white border rounded-xl overflow-hidden h-64 flex">
                        <!-- Gambar Produk - Bigger Size -->
                        <div class="w-1/2 bg-gray-100 flex items-center justify-center p-6">
                            <img src="{{ asset('images/products/nyam.png') }}" 
                                alt="Nyam! MPASI" 
                                class="w-full h-44 object-contain">
                        </div>
                        <!-- Konten Produk - Adjusted Layout -->
                        <div class="w-1/2 p-4 flex flex-col">
                            <!-- Judul -->
                            <h3 class="font-bold text-gray-800 mb-2 text-lg font-nunito leading-tight">
                                Nyam! MPASI
                            </h3>

                            <!-- Deskripsi di tengah -->
                            <p class="text-gray-600 text-sm leading-relaxed flex-1 flex items-center">
                                <span class="block">Makanan Pendamping ASI (MPASI) berkualitas tinggi dengan nutrisi yang lengkap</span>
                            </p>

                            <!-- Tombol -->
                            <div class="mt-3 flex justify-center">
                                <a href="{{ route('produk', ['product' => 'nyam']) }}" 
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 px-3 text-sm rounded-lg">
                                Lihat Produk
                                </a>
                            </div>
                        </div>
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
            const dotsContainer = document.querySelector('.flex.justify-center.mt-8.space-x-2');
            
            if (!carousel || !dotsContainer) {
                console.log('Product carousel elements not found');
                return;
            }
            
            let currentSlide = 0;
            
            // Get actual number of images dynamically from PHP
            @php
                $imageCount = 0;
                if(request('product') == 'mamina' || request('product') == 'mamina-asi-booster') {
                    $imageCount = count($productImages); // Mamina: 6 images
                } elseif(request('product') == 'nyam') {
                    $imageCount = count($productImages); // Nyam: 6 images
                } else {
                    $imageCount = count($productImages); // Gentle Baby: 6 images
                }
            @endphp
            
            const totalItems = {{ $imageCount }}; // Dynamic count from PHP
            function getItemsPerSlide() {
                if (window.innerWidth < 640) {
                    return 1; // Mobile
                } else if (window.innerWidth < 1024) {
                    return 2; // Tablet
                } else {
                    return 4; // Desktop
                }
            }

            let itemsPerSlide = getItemsPerSlide();

            console.log('Product Carousel Initialized:', {totalItems, itemsPerSlide});
            
            function getTotalSlides() {
                // Menghitung berapa banyak slide yang dibutuhkan untuk menampilkan semua gambar
                return Math.ceil(totalItems / itemsPerSlide);
            }
            
            function createDots() {
                const totalSlides = getTotalSlides();
                dotsContainer.innerHTML = '';

                console.log('Creating dots for', totalSlides, 'slides');
                
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'dot w-4 h-4 bg-gray-300 rounded-full cursor-pointer transition-all duration-200 hover:scale-110 hover:bg-gray-400';
                    if (i === 0) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-purple-500');
                    }
                    dot.setAttribute('data-slide', i);
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }
            }
            
            function updateCarousel() {
                console.log('Updating carousel, currentSlide:', currentSlide);
                
                // Calculate transform based on items per slide
                const items = carousel.querySelectorAll('.flex-none'); // ambil semua item
                if (items.length === 0) return;

                const itemWidth = items[0].getBoundingClientRect().width + 16; 
                // +16px karena ada gap-4 antar item

                const translateX = -(currentSlide * itemsPerSlide * itemWidth);
                carousel.style.transform = `translateX(${translateX}px)`;
                
                // Update dots
                const dots = dotsContainer.querySelectorAll('.dot');
                dots.forEach((dot, index) => {
                    const isActive = index === currentSlide;
                    dot.classList.toggle('bg-purple-500', isActive);
                    dot.classList.toggle('bg-gray-300', !isActive);
                });
                
                console.log('Transform applied:', `translateX(${translateX}px)`);
            }
            
            function nextSlide() {
                const totalSlides = getTotalSlides();
                console.log('Next slide called, current:', currentSlide, 'total slides:', totalSlides);
                
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                } else {
                    currentSlide = 0; // Loop back to start
                }
                updateCarousel();
            }
            
            function prevSlide() {
                const totalSlides = getTotalSlides();
                console.log('Prev slide called, current:', currentSlide);
                
                if (currentSlide > 0) {
                    currentSlide--;
                } else {
                    currentSlide = totalSlides - 1; // Loop to end
                }
                updateCarousel();
            }
            
            function goToSlide(slideIndex) {
                console.log('Go to slide:', slideIndex);
                const totalSlides = getTotalSlides();
                currentSlide = Math.min(slideIndex, totalSlides - 1);
                updateCarousel();
            }
            
            // AUTO-SLIDE CAROUSEL - Fixed implementation
            let autoPlayInterval;
            
            function startAutoSlide() {
                console.log('Starting auto-slide...');
                autoPlayInterval = setInterval(() => {
                    console.log('Auto-slide executing...');
                    nextSlide();
                }, 4000); // Auto slide every 4 seconds
            }
            
            function stopAutoSlide() {
                console.log('Stopping auto-slide...');
                clearInterval(autoPlayInterval);
            }
            
            // Pause auto-slide on hover
            const carouselContainer = carousel.parentElement;
            carouselContainer.addEventListener('mouseenter', () => {
                console.log('Mouse entered, pausing auto-slide');
                stopAutoSlide();
            });
            
            // Resume auto-slide when mouse leaves
            carouselContainer.addEventListener('mouseleave', () => {
                console.log('Mouse left, resuming auto-slide');
                startAutoSlide();
            });
            
            // Handle window resize
            window.addEventListener('resize', () => {
                itemsPerSlide = getItemsPerSlide();
                const totalSlides = getTotalSlides();
                if (currentSlide >= totalSlides) {
                    currentSlide = totalSlides - 1;
                }
                createDots(); // regenerate dots sesuai jumlah slide
                updateCarousel();
            });
            
            // Touch/Swipe support for mobile
            let startX = 0;
            let currentX = 0;
            let isTouch = false;
            
            carouselContainer.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                isTouch = true;
                stopAutoSlide(); // Pause during touch
            });
            
            carouselContainer.addEventListener('touchmove', (e) => {
                if (!isTouch) return;
                currentX = e.touches[0].clientX;
                e.preventDefault();
            });
            
            carouselContainer.addEventListener('touchend', () => {
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
                
                // Resume auto-slide after touch
                startAutoSlide();
            });
            
            // Initialize carousel
            console.log('Initializing product carousel...');
            createDots();
            updateCarousel();
            
            // Start auto-slide after a short delay
            setTimeout(() => {
                startAutoSlide();
                console.log('Auto-slide started');
            }, 1000);
            
            // Test carousel movement (for debugging)
            console.log('Testing manual slide in 2 seconds...');
            setTimeout(() => {
                if (getTotalSlides() > 1) {
                    nextSlide();
                    console.log('Manual test slide executed');
                }
            }, 2000);
            
            // Varian Carousel functionality
            const varianCarousel = document.getElementById('varianCarousel');
            const varianNextBtn = document.getElementById('varianNextBtn');
            const varianPrevBtn = document.getElementById('varianPrevBtn');
            const varianIndicators = document.getElementById('varianIndicators');
            
            if (varianCarousel && varianNextBtn && varianPrevBtn && varianIndicators) {
                console.log('Varian carousel elements found, initializing...');
                
                // Get actual variant count from DOM
                const varianCards = varianCarousel.children;
                const totalVarianItems = varianCards.length;
                let varianCurrentSlide = 0;
                
                console.log('Varian Carousel Initialized:', {totalVarianItems});
                
                function getVarianItemsPerView() {
                    if (window.innerWidth >= 1280) return 5; // Desktop XL: 5 cards
                    if (window.innerWidth >= 1024) return 4; // Desktop LG: 4 cards
                    if (window.innerWidth >= 768) return 3;  // Tablet MD: 3 cards
                    if (window.innerWidth >= 640) return 2;  // Tablet SM: 2 cards
                    return 1; // Mobile: 1 card
                }
                
                function getTotalVarianSlides() {
                    const itemsPerView = getVarianItemsPerView();
                    return Math.ceil(totalVarianItems / itemsPerView);
                }
                
                function updateVarianCarousel() {
                    console.log('updateVarianCarousel called, currentSlide:', varianCurrentSlide);
                    
                    const itemsPerView = getVarianItemsPerView();
                    const translatePercentage = (varianCurrentSlide * 100); 
                    varianCarousel.style.transform = `translateX(-${translatePercentage}%)`;
                    
                    // Update indicators
                    const dots = varianIndicators.querySelectorAll('button');
                    dots.forEach((dot, index) => {
                        if (index === varianCurrentSlide) {
                            dot.classList.remove('bg-gray-300');
                            dot.classList.add('bg-purple-500');
                        } else {
                            dot.classList.remove('bg-purple-500');
                            dot.classList.add('bg-gray-300');
                        }
                    });
                    
                    // Update navigation buttons
                    const totalSlides = getTotalVarianSlides();
                    if (varianPrevBtn) {
                        varianPrevBtn.style.opacity = varianCurrentSlide === 0 ? '0.5' : '1';
                        varianPrevBtn.style.pointerEvents = varianCurrentSlide === 0 ? 'none' : 'auto';
                    }
                    if (varianNextBtn) {
                        varianNextBtn.style.opacity = varianCurrentSlide >= totalSlides - 1 ? '0.5' : '1';
                        varianNextBtn.style.pointerEvents = varianCurrentSlide >= totalSlides - 1 ? 'none' : 'auto';
                    }
                }
                
                function nextVarianSlide() {
                    console.log('Next varian slide called');
                    const totalSlides = getTotalVarianSlides();
                    if (varianCurrentSlide < totalSlides - 1) {
                        varianCurrentSlide++;
                    } else {
                        varianCurrentSlide = 0; // Loop back to start
                    }
                    updateVarianCarousel();
                }
                
                function prevVarianSlide() {
                    console.log('Prev varian slide called');
                    if (varianCurrentSlide > 0) {
                        varianCurrentSlide--;
                    } else {
                        varianCurrentSlide = getTotalVarianSlides() - 1; // Loop to end
                    }
                    updateVarianCarousel();
                }
                
                function goToVarianSlide(slideIndex) {
                    console.log('Go to varian slide:', slideIndex);
                    varianCurrentSlide = slideIndex;
                    updateVarianCarousel();
                }
                
                // Create indicators
                function createVarianIndicators() {
                    const totalSlides = getTotalVarianSlides();
                    varianIndicators.innerHTML = '';
                    
                    console.log('Creating varian indicators for', totalSlides, 'slides');
                    
                    for (let i = 0; i < totalSlides; i++) {
                        const dot = document.createElement('button');
                        dot.classList.add('w-3', 'h-3', 'rounded-full', 'transition-colors', 'duration-200');
                        if (i === 0) {
                            dot.classList.add('bg-purple-500');
                        } else {
                            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                        }
                        dot.addEventListener('click', () => goToVarianSlide(i));
                        varianIndicators.appendChild(dot);
                    }
                    updateVarianCarousel();
                }
                
                // Event listeners with null checks
                if (varianNextBtn) {
                    varianNextBtn.addEventListener('click', () => {
                        console.log('Varian next button clicked');
                        nextVarianSlide();
                    });
                }
                
                if (varianPrevBtn) {
                    varianPrevBtn.addEventListener('click', () => {
                        console.log('Varian prev button clicked');
                        prevVarianSlide();
                    });
                }
                
                // Auto-slide functionality for varian
                let varianAutoSlideInterval;
                
                function startVarianAutoSlide() {
                    console.log('Starting varian auto-slide...');
                    varianAutoSlideInterval = setInterval(() => {
                        console.log('Varian auto-slide executing...');
                        nextVarianSlide();
                    }, 5000); // 5 seconds for varian
                }
                
                function stopVarianAutoSlide() {
                    console.log('Stopping varian auto-slide...');
                    clearInterval(varianAutoSlideInterval);
                }
                
                // Pause/resume on hover
                const varianContainer = varianCarousel.parentElement;
                varianContainer.addEventListener('mouseenter', stopVarianAutoSlide);
                varianContainer.addEventListener('mouseleave', startVarianAutoSlide);
                
                // Responsive handling
                window.addEventListener('resize', () => {
                    createVarianIndicators();
                });
                
                // Touch/swipe support for varian
                let varianStartX = 0;
                let varianCurrentX = 0;
                let varianIsDragging = false;
                
                varianContainer.addEventListener('touchstart', (e) => {
                    varianStartX = e.touches[0].clientX;
                    varianIsDragging = true;
                    stopVarianAutoSlide();
                });
                
                varianContainer.addEventListener('touchmove', (e) => {
                    if (!varianIsDragging) return;
                    varianCurrentX = e.touches[0].clientX;
                    e.preventDefault();
                });
                
                varianContainer.addEventListener('touchend', () => {
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
                    
                    startVarianAutoSlide();
                });
                
                // Initialize varian carousel
                console.log('Initializing varian carousel...');
                createVarianIndicators();
                
                // Start varian auto-slide
                setTimeout(() => {
                    startVarianAutoSlide();
                    console.log('Varian auto-slide started');
                }, 2000);
            } else {
                console.log('Varian carousel elements not found');
            }
        });
    </script>
@endsection

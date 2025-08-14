@extends('layouts.app')

@section('title', 'Gentle Living')

@section('content')
    <!-- Hero Section / partner -->
    <section id="partner" class="relative min-h-screen bg-gray-100">
        <!-- Mobile: Banner Background (visible only on mobile) -->
        <div class="absolute inset-0 w-full h-full lg:hidden" id="banner-carousel-mobile">
            <!-- Slides Container -->
            <div class="h-full overflow-hidden relative">
                <img src="{{ asset('images/banner.png') }}" alt="Banner 1"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-100">
                <img src="{{ asset('images/banner-2.png') }}" alt="Banner 2"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                <img src="{{ asset('images/banner-3.png') }}" alt="Banner 3"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
            </div>
            <!-- Mobile: Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-transparent z-10"></div>
        </div>

        <!-- Desktop Layout Container -->
        <div class="relative flex flex-col lg:flex-row min-h-screen">
            <!-- Desktop Background Gradient -->
            <div
                class="absolute top-0 left-0 right-0 h-full bg-gradient-to-r from-[#444444]/100 via-[#444444]/100 to-transparent z-10">
            </div>
            <!-- Left Side - Text Content -->
            <div class="relative w-full lg:w-1/2 flex items-center justify-center px-6 lg:px-12 z-20">


                <div class="relative z-10 max-w-lg text-center lg:text-left py-16 lg:py-0">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl text-[#EF9F9B] lg:text-[#EF9F9B] mb-6 leading-tight drop-shadow-lg lg:drop-shadow-none font-fredoka">
                        Join Our Baby Wellness Affiliate Program
                    </h1>
                    <p class="text-base lg:text-lg text-[#EF9F9B] lg:text-[#EF9F9B] mb-6 leading-relaxed drop-shadow lg:drop-shadow-none font-nunito">
                        Kami sedang membuka program affiliate partnership untuk <br class="hidden sm:block" />
                        <span class="font-bold"> 3 produk best-seller </span> kami yang fokus pada wellness bunda & bayi.
                    </p>
                    <p id="content" class="text-xl lg:text-2xl font-bold text-white lg:text-white mb-8 drop-shadow lg:drop-shadow-none font-nunito">

                    </p>
                    <a href="{{ route('affiliate.form') }}"
                        class="inline-block px-8 py-4 bg-white text-gray-800 font-bold rounded-full shadow-lg hover:shadow-2xl hover:bg-brand-500 hover:text-white transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out">
                        DAFTAR SEKARANG
                    </a>
                </div>
            </div>

            <!-- Right Side - Desktop Banner Carousel -->
            <div class="relative w-full lg:w-1/2 min-h-screen hidden lg:block" id="banner-carousel">
                <!-- Slides Container -->
                <div class="h-full overflow-hidden relative">
                    <img src="{{ asset('images/banner.png') }}" alt="Banner 1"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-100">
                    <img src="{{ asset('images/banner-2.png') }}" alt="Banner 2"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                    <img src="{{ asset('images/banner-3.png') }}" alt="Banner 3"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                </div>
                <!-- Subtle overlay for blending -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/5 to-transparent"></div>
            </div>
        </div>

        <!-- Navigation Indicators -->
        <div class="absolute bottom-8 left-0 right-0 flex justify-center gap-4 z-30" id="carousel-indicators">
            <button class="group relative cursor-pointer" data-slide="0">
                <div class="w-16 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                <div class="w-16 h-3 bg-white/80 rounded-full indicator-line active transition-all group-hover:bg-white">
                </div>
            </button>
            <button class="group relative cursor-pointer" data-slide="1">
                <div class="w-16 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                <div class="w-16 h-3 bg-white/40 rounded-full indicator-line transition-all group-hover:bg-white/60"></div>
            </button>
            <button class="group relative cursor-pointer" data-slide="2">
                <div class="w-16 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                <div class="w-16 h-3 bg-white/40 rounded-full indicator-line transition-all group-hover:bg-white/60"></div>
            </button>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="products" class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Why Join Us Header -->
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 lg:mb-8 font-fredoka">
                    Why Join Us
                </h2>
                <p class="text-base sm:text-lg text-[#6C63FF] max-w-4xl mx-auto leading-relaxed font-nunito">
                    Kami percaya produk ini sangat cocok untuk audience kami yang didominasi moms, new parents,
                    breastfeeding moms, dan pejuang MPASI.
                </p>
                <p class="text-base sm:text-lg text-[#6C63FF] italic font-semibold mt-3 lg:mt-4 font-nunito">
                    Helping Moms - Earning with Purpose
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-12 lg:mb-16">
                <!-- Benefit 1 -->
                <div
                    class="flex items-start space-x-4 p-4 lg:p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-check-badge class="w-10 h-10 sm:w-12 sm:h-12 text-brand-500" />
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Produk yang beneran dipakai & dibutuhkan
                            bunda dan baby</h3>
                        <p class="text-gray-600 text-sm sm:text-base font-nunito">
                            Kami tahu dibutuhkan berdasarkan riset & kami sendiri beneran pakai untuk Si Kecil
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="flex items-start space-x-4 p-4 lg:p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-shopping-cart class="w-10 h-10 sm:w-12 sm:h-12 text-brand-500" />
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Repeat order tinggi</h3>
                        <p class="text-gray-600 text-sm sm:text-base font-nunito">
                            Hasil dirasakan cepat & kebutuhan harian
                        </p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="flex items-start space-x-4 p-4 lg:p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-document-text class="w-10 h-10 sm:w-12 sm:h-12 text-brand-500" />
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Full support + edukasi</h3>
                        <p class="text-gray-600 text-sm sm:text-base font-nunito">
                            Kamu bisa dibantu berkembang secara skill atau kebutuhan konten
                        </p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="flex items-start space-x-4 p-4 lg:p-6 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-star class="w-10 h-10 sm:w-12 sm:h-12 text-brand-500" />
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Produk kategori premium</h3>
                        <p class="text-gray-600 text-sm sm:text-base font-nunito">
                            Bernilai jual cukup tinggi sehingga komisi besar untuk setiap penjualannya
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- What you will get Section -->
        <div class="mb-12 lg:mb-16 text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 lg:mb-8 font-fredoka">
                What you will get
            </h2>
            <div class="max-w-6xl mx-auto">
                <!-- Baris pertama - 3 item -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mb-6 lg:mb-8">
                    <!-- Item 1 -->
                    <div
                        class="bg-white rounded-lg p-4 sm:p-6 text-left border border-gray-200 hover:border-brand-500 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-currency-dollar class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Setup penjualan produk
                                </h4>
                                <p class="text-sm text-gray-600 font-nunito">mendapat
                                    komisi
                                    sebesar 30-40%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-white rounded-lg p-4 sm:p-6 text-left border border-gray-200 hover:border-brand-500 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-user-group class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Tim support untuk bantu
                                    tracking & pelaporan</h4>
                                <p class="text-sm text-gray-600 font-nunito">hingga
                                    pengembangan skill</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-white rounded-lg p-4 sm:p-6 text-left border border-gray-200 hover:border-brand-500 hover:shadow-md transition-all duration-200 shadow-sm sm:col-span-2 lg:col-span-1">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-gift class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Produk gratis untuk review
                                </h4>
                                <p class="text-sm text-gray-600 font-nunito">(bisa 1-3
                                    item)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris kedua - 2 item di tengah -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 max-w-4xl mx-auto">
                    <!-- Item 4 -->
                    <div
                        class="bg-white rounded-lg p-4 sm:p-6 text-left border border-gray-200 hover:border-brand-500 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-banknotes class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Bonus bulanan dan tahunan
                                </h4>
                                <p class="text-sm text-gray-600 font-nunito">untuk
                                    penjualan terbanyak</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div
                        class="bg-white rounded-lg p-4 sm:p-6 text-left border border-gray-200 hover:border-brand-500 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-photo class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Akses ke media kit</h4>
                                <p class="text-sm text-gray-600 font-nunito">(foto, video,
                                    script)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Perfect for you Section -->
        <div class="mb-12 lg:mb-16 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 lg:mb-8 text-center font-fredoka">
                Perfect for you
            </h2>
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-6">
                    <!-- Type 1 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-xs sm:text-sm lg:text-base mb-2">Momfluencer</h4>
                        <p class="text-xs lg:text-sm text-gray-600 font-nunito">Sering
                            berbagi daily life bermama anak</p>
                    </div>

                    <!-- Type 2 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-xs sm:text-sm lg:text-base mb-2">Bidan/Educator MPASI</h4>
                        <p class="text-xs lg:text-sm text-gray-600 font-nunito">Aktif
                            memberikan edukasi tentang kesehatan bayi/anak</p>
                    </div>

                    <!-- Type 3 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-xs sm:text-sm lg:text-base mb-2">Admin Komunitas Ibu</h4>
                        <p class="text-xs lg:text-sm text-gray-600 font-nunito">Mengelola
                            komunitas untuk mama dan terlibat diskusi</p>
                    </div>

                    <!-- Type 4 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-xs sm:text-sm lg:text-base mb-2">Content Creator Parenting
                        </h4>
                        <p class="text-xs lg:text-sm text-gray-600 font-nunito">Membuat
                            konten tips, review terkait tumbuh kembang</p>
                    </div>

                    <!-- Type 5 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200 col-span-2 sm:col-span-1">
                        <h4 class="font-bold text-gray-800 text-xs sm:text-sm lg:text-base mb-2">Ibu Aktif</h4>
                        <p class="text-xs lg:text-sm text-gray-600 font-nunito">Suka
                            berbagi info dan recommend ke mama lain</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet The Product Section -->
        <div class="text-center py-12 lg:py-16 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-8 lg:mb-12 font-fredoka">
                Meet The Product
            </h2>
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
                    <!-- Product 1 -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-xl p-4 sm:p-5 lg:p-6 hover:border-brand-500 transition-colors shadow-sm hover:shadow-lg flex flex-col">
                        <div
                            class="bg-gray-100 rounded-lg mb-4 lg:mb-6 flex items-center justify-center h-48 sm:h-64 lg:h-72">
                            <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby"
                                class="max-h-full max-w-full object-contain"
                                onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-gray-400 text-xl\'>Product Image</span>';">
                        </div>
                        <div class="text-center mt-auto">
                            <h4 class="text-2xl text-brand-500 mb-3 font-fredoka">
                                Gentle Baby
                            </h4>
                            <a href="https://shopee.co.id/GENTLE-BABY-Therapeutic-Oil-10ML-Minyak-Pijat-Aromaterapi-Bayi-Balita-Usia-0-4-Tahun-Bahan-alami-i.400631324.18077793526?sp_atk=fa2355c4-a239-4d5f-ac85-40125edb2198&xptdk=fa2355c4-a239-4d5f-ac85-40125edb2198"
                                class="inline-flex items-center justify-center text-brand-500 font-semibold hover:underline text-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                    <path
                                        d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                </svg>
                                Link produk
                            </a>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-brand-500 transition-colors shadow-sm hover:shadow-lg flex flex-col">
                        <div class="bg-gray-100 rounded-lg mb-6 flex items-center justify-center" style="height: 280px;">
                            <img src="{{ asset('images/mamina.png') }}" alt="Mamina"
                                class="max-h-full max-w-full object-contain"
                                onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-gray-400 text-xl\'>Product Image</span>';">
                        </div>
                        <div class="text-center mt-auto">
                            <h4 class="text-2xl text-brand-500 mb-3 font-fredoka">
                                Mamina Seduhan
                            </h4>
                            <a href="https://shopee.co.id/Mamina-Paket-Bundle-Pelancar-Asi-Isi-3-(10-Tebag-per-Paket)-ASI-Booster-Halal-Bahan-Alami-i.1483235365.41704362992?sp_atk=cd7bceae-166b-47bb-8c7c-92efde449b76&xptdk=cd7bceae-166b-47bb-8c7c-92efde449b76"
                                class="inline-flex items-center justify-center text-brand-500 font-semibold hover:underline text-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                    <path
                                        d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                </svg>
                                Link produk
                            </a>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-brand-500 transition-colors shadow-sm hover:shadow-lg flex flex-col">
                        <div class="bg-gray-100 rounded-lg mb-6 flex items-center justify-center" style="height: 280px;">
                            <img src="{{ asset('images/nyam.png') }}" alt="Nyam MPASI"
                                class="max-h-full max-w-full object-contain"
                                onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-gray-400 text-xl\'>Product Image</span>';">
                        </div>
                        <div class="text-center mt-auto">
                            <h4 class="text-2xl text-brand-500 mb-3 font-fredoka">
                                Nyam! MPASI
                            </h4>
                            <a href="https://shopee.co.id/NYAM-BABY-FOOD-BUNDLING-PAKET-MPASI-10-18-BULAN-HOMEMADE-TANPA-PENGAWET-i.1059596102.43102157461"
                                class="inline-flex items-center justify-center text-brand-500 font-semibold hover:underline text-lg">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                    <path
                                        d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                </svg>
                                Link produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 lg:mb-8 font-fredoka">
                Telah dipercaya >30.000 Ibu
            </h2>

            <!-- Testimonial Card -->
            <div class="bg-white rounded-lg p-6 lg:p-8 shadow-lg max-w-3xl mx-auto">
                <div class="flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-4">
                    <!-- Avatar -->
                    <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0 mx-auto sm:mx-0"></div>

                    <!-- Testimonial Content -->
                    <div class="text-center sm:text-left flex-1">
                        <p class="text-sm sm:text-base lg:text-lg text-gray-700 mb-3 lg:mb-4 italic leading-relaxed font-nunito">
                            "Produk-produknya benar-benar berkualitas dan sesuai dengan kebutuhan bayi. Sebagai affiliate,
                            saya merasa bangga merekomendasikan produk yang saya gunakan sendiri untuk anak saya."
                        </p>
                        <div class="text-left">
                            <p class="font-bold text-gray-800 text-sm lg:text-base">Ibu Sarah</p>
                            <p class="text-xs lg:text-sm text-gray-500 font-nunito">
                                Affiliate Partner sejak 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Join Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-[#B8E6D9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 text-center lg:text-left font-fredoka">
                How to Join
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Side - Content -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white rounded-2xl border border-[#E5E7EB] p-6 lg:p-8 shadow-lg">
                        <h3 class="text-xl lg:text-2xl text-brand-500 mb-3 text-center lg:text-left font-fredoka">
                            Work Easy, Earn More
                        </h3>
                        <p class="text-gray-600 text-sm lg:text-base leading-relaxed mb-6 lg:mb-8 text-center lg:text-left font-nunito">
                            Kami bisa bantu rekomendasikan bikin konten/script sesuai gaya kamu
                        </p>

                        <!-- CTA Button -->
                        <div class="text-center lg:text-left">
                            <button
                                class="relative bg-gradient-to-r from-[#FF6B6B] to-[#FF9191] text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-bold shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:shadow-xl hover:scale-105 hover:-translate-y-1 group w-full sm:w-auto">
                                <a class="relative z-10" href="{{ route('affiliate.form') }}">DAFTAR SEKARANG</a>
                                <!-- Hover Gradient Overlay -->
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#D94C4C] to-[#FF6B6B] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left z-0 rounded-xl"></span>
                                <!-- Shine Effect -->
                                <span
                                    class="absolute top-0 right-0 w-8 h-full bg-white/20 skew-x-[30deg] transform translate-x-32 group-hover:translate-x-0 transition-all duration-1000 z-0"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Steps -->
                <div class="space-y-8 order-1 lg:order-2">
                    <!-- Step Template -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative flex flex-col items-center">
                            <!-- Circle -->
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center shadow-lg z-10">
                                <span class="text-white font-bold text-lg">1</span>
                            </div>
                            <!-- Vertical Line -->
                            <div class="w-1 h-16 bg-[#D2F4E4] absolute top-12 left-1/2 transform -translate-x-1/2 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p class="text-[#D94C4C] font-bold text-sm sm:text-base leading-relaxed font-nunito">
                                Klik "DAFTAR SEKARANG" dan isi identitas diri
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative flex flex-col items-center">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center shadow-lg z-10">
                                <span class="text-white font-bold text-lg">2</span>
                            </div>
                            <div class="w-1 h-16 bg-[#D2F4E4] absolute top-12 left-1/2 transform -translate-x-1/2 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p class="text-[#D94C4C] font-bold text-base mb-1 font-nunito">
                                Tim kami akan kirim:
                            </p>
                            <p class="text-[#D94C4C] text-sm leading-relaxed font-nunito">
                                Link affiliate, Product Knowledge, Brief konten & panduan
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative flex flex-col items-center">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center shadow-lg z-10">
                                <span class="text-white font-bold text-lg">3</span>
                            </div>
                            <div class="w-1 h-16 bg-[#D2F4E4] absolute top-12 left-1/2 transform -translate-x-1/2 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p class="text-[#D94C4C] font-bold text-base leading-relaxed font-nunito">
                                Kamu tinggal share link affiliate ke IG Story, TikTok, WA Grup, atau komunitas Ibu
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative flex flex-col items-center">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center shadow-lg z-10">
                                <span class="text-white font-bold text-lg">4</span>
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p class="text-[#D94C4C] font-bold text-base mb-1 font-nunito">
                                Pantauan dan komisi dicatat otomatis lewat platform
                            </p>
                            <p class="text-[#D94C4C] text-sm leading-relaxed font-nunito">
                                (atau Google Sheet kalau manual)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


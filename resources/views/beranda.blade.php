@extends('layouts.app')
@section('title', 'Beranda - Gentle Living')

@section('content')
    {{-- Modern Hero Banner with Mobile-First Design --}}
    <section class="relative bg-[#444444]/100 overflow-hidden">
        <div class="container mx-auto px-3 sm:px-6 lg:px-8 min-h-screen flex items-center py-4 sm:py-8 lg:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-12 items-center w-full">

                {{-- Content Section - Mobile First --}}
                <div
                    class="space-y-3 sm:space-y-6 lg:space-y-8 lg:pr-8 z-10 relative order-2 lg:order-1 text-center lg:text-left">

                    {{-- Badge/Tag - Mobile Centered --}}
                    <div class="flex justify-center lg:justify-start mt-2 sm:mt-6 lg:mt-10">
                        <div
                            class="inline-flex items-center shadow-lg space-x-1 sm:space-x-2 bg-transparent border rounded-full px-2 sm:px-4 py-1.5 sm:py-3 lg:py-4">
                            <span class="w-1.5 sm:w-3 h-1.5 sm:h-3 bg-[#EF9F9B] rounded-full animate-pulse"></span>
                            <span class="text-xs sm:text-lg text-[#EF9F9B] font-nunito font-bold">Pilihan #1 Ibu
                                Indonesia</span>
                        </div>
                    </div>

                    {{-- Main Headline - Sesuai konsep partner banner --}}
                    <div class="space-y-2 sm:space-y-4 mb-8">
                        <h1 class="font-fredoka font-bold leading-tight max-w-md lg:max-w-lg mx-auto lg:mx-0"
                            style="color: #F4A6A6;">
                            <span class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl">
                                Therapeutic
                                <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl">✨</span><br>
                                Baby Massage Oil
                            </span>

                        </h1>
                    </div>

                    {{-- Description - Sesuai konsep partner banner --}}
                    <div class="mb-8">
                        <p class="font-nunito leading-relaxed max-w-md lg:max-w-lg mx-auto lg:mx-0" style="color: #D4B5A0;">
                            <span class="text-base sm:text-lg lg:text-xl">
                                Minyak Bayi Aromaterapi, kombinasi Essential Oil dan Sunflower Seed Oil untuk kesehatan ibu,
                                bayi dan balita. Khasiat sama dengan kemasan lebih ekonomis
                            </span>
                        </p>
                    </div>

                    {{-- CTA Button - Sesuai konsep partner banner --}}
                    <div class="mb-8">
                        <a href="#products"
                            class="inline-block px-10 py-4 bg-white text-gray-800 font-nunito font-bold rounded-full shadow-lg hover:shadow-2xl hover:bg-gray-100 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out">
                            VIEW PRODUCTS
                        </a>
                    </div>
                </div>

                {{-- Image Section - Mobile First --}}
                <div class="relative z-10 order-1 lg:order-2">
                    {{-- Main Product Image Container - Mobile Responsive --}}
                    <div
                        class="relative bg-gradient-to-br from-blue-100/50 via-white/30 to-green-100/50 rounded-xl sm:rounded-3xl overflow-hidden backdrop-blur-sm border border-white/20 h-48 sm:h-80 md:h-96 lg:h-[600px]">

                        <img src="{{ asset('images/banner/banner_beranda3.jpg') }}" alt="Gentle Living Products"
                            class="w-full h-full object-cover ">

                        {{-- Product Info Card - Mobile Responsive --}}
                        <div
                            class="absolute bottom-2 sm:bottom-4 lg:bottom-6 right-2 sm:right-4 lg:right-6 bg-white/95 rounded-lg sm:rounded-xl lg:rounded-2xl p-2 sm:p-3 lg:p-5 shadow-lg sm:shadow-xl lg:shadow-2xl max-w-[100px] sm:max-w-[160px] md:max-w-[200px] lg:max-w-none">

                            {{-- Star Badge - Mobile Responsive --}}
                            <div
                                class="absolute -top-2 sm:-top-3 lg:-top-4 -right-2 sm:-right-3 lg:-right-4 w-5 sm:w-7 lg:w-8 h-5 sm:h-7 lg:h-8 bg-yellow-200/30 rounded-full flex items-center justify-center">
                                <span class="text-yellow-600 text-xs sm:text-sm">⭐</span>
                            </div>

                            <div class="space-y-1 sm:space-y-2">
                                <h3 class="font-nunito text-xs sm:text-lg font-bold text-gray-800">Gentle Baby</h3>

                                {{-- Feature List - Mobile Optimized --}}
                                <div class="space-y-0.5 sm:space-y-1">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-brand-500 mr-2 sm:mr-3 mt-0.5 flex-shrink-0"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p
                                            class="text-[10px] sm:text-sm lg:text-base text-gray-800 font-nunito leading-tight flex-1">
                                            100% alami
                                        </p>
                                    </div>

                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-brand-500 mr-2 sm:mr-3 mt-0.5 flex-shrink-0"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p
                                            class="text-[10px] sm:text-sm lg:text-base text-gray-800 font-nunito leading-tight flex-1">
                                            BPOM Certified
                                        </p>
                                    </div>

                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-brand-500 mr-2 sm:mr-3 mt-0.5 flex-shrink-0"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p
                                            class="text-[10px] sm:text-sm lg:text-base text-gray-800 font-nunito leading-tight flex-1">
                                            Newborn Friendly
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Best Seller Section -->
    <section id="products" class="bg-white py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-6 sm:mb-8 lg:mb-12 mt-4 sm:mt-6">
                <h1 class="font-fredoka text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-2 relative inline-block">
                    Our Best Seller
                </h1>
                <p
                    class="font-nunito text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed max-w-md sm:max-w-lg mx-auto px-4 sm:px-0">
                    Produk yang selalu menjadi favorit ibu hingga saat ini
                </p>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-center gap-6 sm:gap-8 lg:gap-10">
                <!-- Product Cards -->
                <div class="w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                        <!-- Product Card 1: Gentle Baby -->
                        <div
                            class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                            <div class="relative">
                                <div class="p-4 sm:p-6 flex flex-col flex-1">
                                    <!-- Product Image -->
                                    <div
                                        class="w-full rounded-lg mb-3 sm:mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-2 sm:p-3 h-40 sm:h-48 lg:h-52">
                                        <img src="{{ asset('images/products/gentle-baby/gentle-baby-8.png') }}"
                                            alt="Gentle Baby"
                                            class="w-full h-full object-contain transition-transform duration-300 hover:scale-110">
                                    </div>
                                    <!-- Product Info -->
                                    <div class="text-center flex-1 flex flex-col justify-between">
                                        <div>
                                            <h3 class="font-fredoka text-gray-800 mb-1 sm:mb-2 text-lg sm:text-xl">Gentle
                                                Baby</h3>
                                            <p class="text-xs sm:text-sm text-gray-600 font-nunito mb-3 sm:mb-4"> Minyak
                                                Pijat Aromaterapi Bayi Balita Usia 0-4 Tahun
                                            </p>
                                        </div>
                                        <a href="https://shopee.co.id/GENTLE-BABY-Therapeutic-Oil-10ML-Minyak-Pijat-Aromaterapi-Bayi-Balita-Usia-0-4-Tahun-Bahan-alami-i.400631324.18077793526"
                                            target="_blank" rel="noopener noreferrer"
                                            class="w-full btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-4 text-xs sm:text-sm rounded-lg mt-auto hover:opacity-90 inline-block text-center">
                                            Beli
                                        </a>

                                        {{-- <button
                                            class="w-full btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-4 text-xs sm:text-sm rounded-lg mt-auto hover:opacity-90">
                                            Beli
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2: Mamina ASI Booster -->
                        <div
                            class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                            <div class="p-4 sm:p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div
                                    class="rounded-lg mb-3 sm:mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-2 sm:p-3 h-40 sm:h-48 lg:h-52">
                                    <img src="{{ asset('images/products/mamina/variants/ori-10.jpg') }}" alt="Mamina"
                                        class="w-full h-full object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-1 sm:mb-2 text-lg sm:text-xl">Mamina</h3>
                                        <p class="text-xs sm:text-sm text-gray-600 font-nunito mb-3 sm:mb-4">Pelancar ASI
                                            Halal dari Bahan Alami</p>
                                    </div>
                                    <a href="https://shopee.co.id/Mamina-ASI-Booster-Pelancar-ASI-Halal-dari-Bahan-Alami-Rasa-Original-Isi-10-Kantong-i.1483235365.43404363804"
                                        target="_blank" rel="noopener noreferrer"
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-4 text-xs sm:text-sm rounded-lg mt-auto hover:opacity-90 inline-block text-center">
                                        Beli
                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3: Nyam! BB Booster -->
                        <div
                            class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col sm:col-span-2 lg:col-span-1">
                            <div class="p-4 sm:p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div
                                    class="w-full rounded-lg mb-3 sm:mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-2 sm:p-3 h-40 sm:h-48 lg:h-52">
                                    <img src="{{ asset('images/products/nyam/variants/ice-cream.jpg') }}"
                                        alt="Nyam! BB Booster"
                                        class="w-full h-full object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-1 sm:mb-2 text-lg sm:text-xl">Nyam</h3>
                                        <p class="text-xs sm:text-sm text-gray-600 font-nunito mb-3 sm:mb-4">Es Krim Tinggi
                                            Protein untuk Bayi & Anak</p>
                                    </div>
                                    <a href="https://shopee.co.id/NYAM-ICE-CREAM-MPASI-%E2%80%93-ES-KRIM-HOMEMADE-TINGGI-PROTEIN-UNTUK-BAYI-ANAK-BB-BOOSTER-i.1059596102.25185486134"
                                        target="_blank" rel="noopener noreferrer"
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-4 text-xs sm:text-sm rounded-lg mt-auto hover:opacity-90 inline-block text-center">
                                        Beli
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="relative overflow-hidden mt-4 bg-gradient-to-br from-White to-blue-100/30">

        <!-- Gentle Baby Detail -->
        <div
            class="relative py-12 sm:py-16 lg:py-16 backdrop-blur-sm mx-2 sm:mx-4 overflow-hidden rounded-2xl sm:rounded-3xl">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-6 sm:gap-8 lg:gap-8">
                    <!-- Left: Product Image -->
                    <div class="w-full lg:w-1/3 flex-shrink-0">
                        <div
                            class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100 h-64 sm:h-80 lg:h-96">
                            <div class="h-full flex items-center justify-center p-4 sm:p-6">
                                <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby"
                                    class="w-full h-full object-contain transition-transform hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- Right: Product Details -->
                    <div class="w-full lg:w-2/3">
                        <div class="mb-4 sm:mb-6 text-center lg:text-left">
                            <h2 class="font-fredoka text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-2 sm:mb-3">Gentle
                                Baby
                            </h2>
                            <p class="text-base sm:text-lg font-nunito text-gray-600">Minyak pijat aromaterapi untuk si
                                kecil</p>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 mb-6 sm:mb-8">
                            <div class="space-y-3 sm:space-y-4 font-nunito text-gray-700">
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm sm:text-base ml-2 sm:ml-3">100% bahan alami</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm sm:text-base ml-2 sm:ml-3">Kelembutan sentuhan skin-to-skin</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm sm:text-base ml-2 sm:ml-3">Ramah untuk bayi baru lahir</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm sm:text-base ml-2 sm:ml-3">Aman & berkhasiat untuk bayi</span>
                                </div>
                            </div>
                        </div>
                        <!-- CTA Button -->
                        <div class="flex justify-center lg:justify-start">
                            <a href="https://shopee.co.id/gentleliving_id?page=1&sortBy=pop&tab=0" target="_blank"
                                rel="noopener noreferrer"
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-6 sm:px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mamina ASI Booster -->
        <div
            class="relative backdrop-blur-sm mx-2 sm:mx-4 py-12 sm:py-16 lg:py-16 overflow-hidden rounded-2xl sm:rounded-3xl">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-6 sm:gap-8 lg:gap-8">
                    <!-- Mobile: Product Details First -->
                    <div class="w-full lg:w-2/3 order-2 lg:order-1">
                        <div class="mb-4 sm:mb-6 text-center lg:text-right">
                            <h2 class="font-fredoka text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-2 sm:mb-3">
                                Mamina</h2>
                            <p class="text-base sm:text-lg font-nunito text-gray-600">Seduhan Herbal Untuk Ibu</p>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 mb-6 sm:mb-8">
                            <div class="space-y-3 sm:space-y-4 font-nunito text-gray-700 text-left lg:text-right">
                                <p class="text-sm sm:text-base leading-relaxed">
                                    Mamina merupakan teh herbal yang menjadi pendamping sempurna bagi ibu menyusui dalam
                                    menjaga kesehatan dan produksi ASI secara alami. Tanpa pemanis dan perasa serta dibuat
                                    dari rempah asli pilihan
                                </p>
                                <div class="flex flex-wrap justify-center lg:justify-end gap-2 mt-3 sm:mt-4">
                                    <span
                                        class="px-2 sm:px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Jeruk
                                        Nipis</span>
                                    <span
                                        class="px-2 sm:px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">Belimbing</span>
                                    <span
                                        class="px-2 sm:px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">Original</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="flex justify-center lg:justify-end">
                            <a href="https://shopee.co.id/maminast0re#product_list" target="_blank"
                                rel="noopener noreferrer"
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-6 sm:px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </a>
                        </div>
                    </div>

                    <!-- Mobile: Product Image Second -->
                    <div class="w-full lg:w-1/3 flex-shrink-0 order-1 lg:order-2">
                        <div
                            class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100 h-64 sm:h-80 lg:h-96">
                            <div class="h-full flex items-center justify-center p-4 sm:p-6">
                                <img src="{{ asset('images/mamina.png') }}" alt="Mamina ASI Booster"
                                    class="w-full h-full object-contain transition-transform hover:scale-105">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nyam! -->
        <div
            class="relative backdrop-blur-sm mx-2 sm:mx-4 py-12 sm:py-16 lg:py-16 overflow-hidden rounded-2xl sm:rounded-3xl">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-6 sm:gap-8 lg:gap-8">
                    <!-- Left: Product Image -->
                    <div class="w-full lg:w-1/3 flex-shrink-0">
                        <div
                            class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100 h-64 sm:h-80 lg:h-96">
                            <div class="h-full flex items-center justify-center p-4 sm:p-6">
                                <img src="{{ asset('images/nyam.png') }}" alt="Nyam!"
                                    class="w-full h-full object-contain transition-transform hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- Right: Product Details -->
                    <div class="w-full lg:w-2/3">
                        <div class="mb-4 sm:mb-6 text-center lg:text-left">
                            <h2 class="font-fredoka text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-2 sm:mb-3">Nyam</h2>
                            <p class="text-base sm:text-lg font-nunito text-gray-600">Makanan Pendamping ASI berkualitas
                                tinggi</p>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 mb-6 sm:mb-8">
                            <div class="space-y-3 sm:space-y-4 font-nunito text-gray-700">
                                <p class="text-sm sm:text-base leading-relaxed">Dibuat menggunakan beragam bahan pilihan
                                    dan
                                    berkualitas tinggi yang diolah dengan tangan kreatif dari seorang ibu, menghasilkan
                                    sebuah produk MPASI yang sehat, praktis, bergizi serta memiliki cita rasa rumahan yang
                                    lezat.</p>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 mt-3 sm:mt-4">
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-xs sm:text-sm">Tanpa Pengawet</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-xs sm:text-sm">Kaya Nutrisi</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-xs sm:text-sm">Mudah Disajikan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-xs sm:text-sm">Cita Rasa Rumahan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="flex justify-center lg:justify-start">
                            <a href="https://shopee.co.id/nyambabyfood#product_list" target="_blank"
                                rel="noopener noreferrer"
                                class="btn-gradient-brand text-white font-nunito font-semibold py-2 sm:py-3 px-6 sm:px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lebih dari Sekedar Produk Section -->
    <section class="py-12 sm:py-16 bg-white mt-8 sm:mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Section Header -->
            <div class="mb-8 sm:mb-12">
                <h2 class="font-fredoka text-2xl sm:text-3xl text-[#6C63FF] mb-3 sm:mb-4 px-2">
                    Lebih dari Sekedar Produk, Ini Bentuk Kasih Sayang
                </h2>
                <p
                    class="font-nunito text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed max-w-3xl lg:max-w-4xl mx-auto px-4 sm:px-0">
                    Di setiap hal kecil yang kami lakukan, kami tuangkan cinta dan kasih sayang yang begitu mendalam.
                    Bukan sekedar memenuhi kebutuhan, tapi juga menjadi jembatan dalam membangun ikatan penuh cinta antara
                    ibu dan anak.
                </p>
            </div>

            <!-- Icons Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                <!-- Icon 1 -->
                <div class="flex flex-col items-center text-center px-4 sm:px-0">
                    <div
                        class="w-12 sm:w-16 h-12 sm:h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-6 sm:w-8 h-6 sm:h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-lg sm:text-xl text-gray-800 mb-2 sm:mb-3">Terpercaya</h3>
                    <p class="font-nunito text-xs sm:text-sm text-gray-600 leading-relaxed">Produk bergizi tinggi yang
                        telah teruji dan direkomendasikan ahli gizi untuk tumbuh kembang optimal si kecil</p>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center text-center px-4 sm:px-0">
                    <div
                        class="w-12 sm:w-16 h-12 sm:h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-6 sm:w-8 h-6 sm:h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-lg sm:text-xl text-gray-800 mb-2 sm:mb-3">Konsultasi Gratis</h3>
                    <p class="font-nunito text-xs sm:text-sm text-gray-600 leading-relaxed">Layanan konsultasi langsung
                        dengan ahli
                        untuk membantu perjalanan menyusui dan tumbuh kembang anak Anda</p>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center text-center px-4 sm:px-0 sm:col-span-2 md:col-span-1">
                    <div
                        class="w-12 sm:w-16 h-12 sm:h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-6 sm:w-8 h-6 sm:h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-lg sm:text-xl text-gray-800 mb-2 sm:mb-3">BPOM Certified</h3>
                    <p class="font-nunito text-xs sm:text-sm text-gray-600 leading-relaxed">Tersertifikasi oleh BPOM,
                        memastikan produk bebas dari
                        bahan berbahaya dan aman untuk bayi maupun anak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-12 sm:py-16 bg-gray-50 mt-8 sm:mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Header -->
            <div class="mb-8 sm:mb-12">
                <h2 class="font-fredoka text-2xl sm:text-3xl text-[#6C63FF] mb-3 sm:mb-4 px-2">
                    Telah Dipercaya <span class="text-gray-800">30.000+</span> Ibu
                </h2>
                <p class="font-nunito text-sm sm:text-base lg:text-lg text-gray-600 mb-6 sm:mb-8 px-4 sm:px-0">
                    Bergabunglah dengan ribuan ibu yang telah merasakan manfaat produk kami
                </p>
            </div>

            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Testimonial Card 1 -->
                <div class="bg-white rounded-lg p-4 sm:p-6 shadow-md">
                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div
                            class="w-10 sm:w-12 h-10 sm:h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-left flex-1">
                            <div class="flex mb-2 sm:mb-3">
                                <!-- Star Rating -->
                                <div class="flex space-x-1">
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="font-nunito text-gray-700 mb-3 sm:mb-4 italic leading-relaxed text-sm sm:text-base">
                                "Gentle Baby benar-benar membantu moment bonding dengan si kecil. Aromanya menenangkan dan
                                teksturnya sangat lembut di kulit bayi. Sangat recommended!"
                            </p>
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-0">
                                <p class="font-fredoka text-gray-800 font-medium text-sm sm:text-base">Sari Dewi</p>
                                <span
                                    class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full self-start sm:self-auto">Gentle
                                    Baby User</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white rounded-lg p-4 sm:p-6 shadow-md">
                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div
                            class="w-10 sm:w-12 h-10 sm:h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-left flex-1">
                            <div class="flex mb-2 sm:mb-3">
                                <!-- Star Rating -->
                                <div class="flex space-x-1">
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="font-nunito text-gray-700 mb-3 sm:mb-4 italic leading-relaxed text-sm sm:text-base">
                                "Mamina ASI Booster sangat membantu produksi ASI saya. Dalam seminggu sudah terasa
                                peningkatannya. Rasanya juga enak dan alami!"
                            </p>
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-0">
                                <p class="font-fredoka text-gray-800 font-medium text-sm sm:text-base">Firda Annalisa
                                </p>
                                <span
                                    class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full self-start sm:self-auto">Mamina
                                    User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 sm:py-16 bg-white mt-8 sm:mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="font-fredoka text-2xl sm:text-3xl text-[#6C63FF] mb-3 sm:mb-4 px-2">
                    Frequently Asked Questions
                </h2>
                <p
                    class="font-nunito text-sm sm:text-base lg:text-lg text-gray-600 max-w-xl lg:max-w-2xl mx-auto px-4 sm:px-0">
                    Temukan jawaban untuk pertanyaan yang sering diajukan seputar produk dan layanan kami
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-3 sm:space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-sm sm:text-base lg:text-lg pr-2">Apakah produk Gentle Baby aman untuk bayi yang
                            baru lahir?</span>
                        <svg class="faq-icon w-4 sm:w-5 h-4 sm:h-5 text-gray-500 transform transition-transform flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-6 pb-3 sm:pb-4">
                        <p class="text-gray-600 leading-relaxed text-sm sm:text-base">Ya, produk Gentle Baby diformulasikan
                            khusus untuk bayi
                            dari usia 0 bulan. Menggunakan 100% bahan alami yang aman.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-sm sm:text-base lg:text-lg pr-2">Apakah Nyam BB Booster mengandung
                            pengawet?</span>
                        <svg class="faq-icon w-4 sm:w-5 h-4 sm:h-5 text-gray-500 transform transition-transform flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-6 pb-3 sm:pb-4">
                        <p class="text-gray-600 leading-relaxed text-sm sm:text-base">Tidak, Nyam BB Booster dibuat tanpa
                            pengawet buatan. Kami menggunakan proses pengolahan alami untuk menjaga kualitas dan kesegaran
                            produk.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-sm sm:text-base lg:text-lg pr-2">Bagaimana cara penyimpanan produk yang
                            benar?</span>
                        <svg class="faq-icon w-4 sm:w-5 h-4 sm:h-5 text-gray-500 transform transition-transform flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-6 pb-3 sm:pb-4">
                        <p class="text-gray-600 leading-relaxed text-sm sm:text-base">Simpan produk di tempat yang sejuk,
                            kering, dan terhindar dari sinar matahari langsung. Pastikan kemasan tertutup rapat setelah
                            digunakan untuk menjaga
                            kualitas produk.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-sm sm:text-base lg:text-lg pr-2">Apakah tersedia konsultasi gratis untuk
                            penggunaan produk?</span>
                        <svg class="faq-icon w-4 sm:w-5 h-4 sm:h-5 text-gray-500 transform transition-transform flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-6 pb-3 sm:pb-4">
                        <p class="text-gray-600 leading-relaxed text-sm sm:text-base">Ya, kami menyediakan layanan
                            konsultasi gratis dengan tim ahli kami. Anda dapat menghubungi melalui kontak yang tertera untuk
                            mendapatkan panduan penggunaan produk yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqToggles = document.querySelectorAll('.faq-toggle');

            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');

                    // Toggle content
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }

                    // Close other FAQs
                    faqToggles.forEach(otherToggle => {
                        if (otherToggle !== this) {
                            const otherContent = otherToggle.nextElementSibling;
                            const otherIcon = otherToggle.querySelector('.faq-icon');
                            otherContent.classList.add('hidden');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });
                });
            });
        });
    </script>

@endsection

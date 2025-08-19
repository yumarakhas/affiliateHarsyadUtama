@extends('layouts.app')
@section('title', 'Beranda - Gentle Living')
@section('content')
    {{-- Hero Section / Carousel Banner Produk --}}
    <section id="hero" class="relative min-h-screen bg-gray-100">
        <!-- Full Width Image Carousel -->
        <div class="absolute inset-0 w-full h-full" id="banner-carousel">
            <div class="h-full overflow-hidden relative">
                <img src="{{ asset('images/banner_beranda1.png') }}" alt="Banner 1"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-100">
                <img src="{{ asset('images/banner_beranda2.png') }}" alt="Banner 2"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                <img src="{{ asset('images/banner_beranda3.png') }}" alt="Banner 3"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
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

    <!-- Our Best Seller Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50 mt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-8 mt-6">
                <h1 class="font-fredoka text-4xl text-gray-800 mb-2 relative inline-block">
                    Our Best Seller
                    <span
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full"></span>
                </h1>
                <p class="font-nunito text-lg text-gray-600 leading-relaxed max-w-lg mx-auto">
                    Produk yang selalu menjadi favorit ibu hingga saat ini
                </p>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-center gap-10">
                <!-- Product Cards -->
                <div class="w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Product Card 1: Gentle Baby -->
                        <div
                            class="bg-white rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                            <div class="relative">
                                <div
                                    class="absolute top-3 right-3 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    Best Seller</div>
                                <div class="p-6 flex flex-col flex-1">
                                    <!-- Product Image -->
                                    <div class="w-full rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                        style="height: 200px;">
                                        <img src="{{ asset('images/products/gentle-baby/variants/joy.jpg') }}"
                                            alt="Gentle Baby"
                                            class="object-contain transition-transform duration-300 hover:scale-110">
                                    </div>
                                    <!-- Product Info -->
                                    <div class="text-center flex-1 flex flex-col justify-between">
                                        <div>
                                            <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Gentle Baby</h3>
                                            <p class="text-sm text-gray-600 font-nunito mb-4">Massage oil</p>
                                        </div>
                                        <button
                                            class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90">
                                            Beli
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2: Mamina ASI Booster -->
                        <div
                            class="bg-white rounded-xl border-2 border-gray-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                            <div class="p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div class="rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                    style="height: 200px;">
                                    <img src="{{ asset('images/products/mamina/variants/maminA.png') }}"
                                        alt="Mamina ASI Booster"
                                        class="object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Mamina ASI Booster</h3>
                                        <p class="text-sm text-gray-600 font-nunito mb-4">Solushion herbal</p>
                                    </div>
                                    <button
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90">
                                        Beli
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3: Nyam! BB Booster -->
                        <div
                            class="bg-white rounded-xl border-2 border-gray-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                            <div class="p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div class="w-full rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                    style="height: 200px;">
                                    <img src="{{ asset('images/products/nyam/nyam-11.jpg') }}" alt="Nyam! BB Booster"
                                        class="object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Nyam! BB Booster</h3>
                                        <p class="text-sm text-gray-600 font-nunito mb-4">MPASI</p>
                                    </div>
                                    <button
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90">
                                        Beli
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="relative overflow-hidden mt-32 py-16">
        <!-- Flowing Background Waves -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
            <!-- Animated Background Shapes -->
            <div class="absolute top-0 left-0 w-full h-full">
                <div
                    class="absolute top-20 left-10 w-64 h-64 bg-blue-200/20 rounded-full mix-blend-multiply filter blur-2xl animate-pulse">
                </div>
                <div
                    class="absolute bottom-32 right-16 w-80 h-80 bg-purple-200/15 rounded-full mix-blend-multiply filter blur-3xl animate-pulse delay-700">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-200/10 rounded-full mix-blend-multiply filter blur-3xl animate-pulse delay-1000">
                </div>
            </div>
        </div>

        <!-- Gentle Baby Detail -->
        <div
            class="relative py-24 bg-gradient-to-br from-blue-100/30 via-white/70 to-cyan-50/40 backdrop-blur-sm mx-4 mb-8 overflow-hidden rounded-3xl">
            <!-- Gentle Baby Floating Elements -->
            <div class="absolute top-8 right-8 w-32 h-32 bg-blue-300/20 rounded-full blur-xl"></div>
            <div class="absolute bottom-16 left-12 w-24 h-24 bg-cyan-300/15 rounded-full blur-lg"></div>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <!-- Left: Product Image -->
                    <div class="lg:w-1/3 flex-shrink-0">
                        <div class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100"
                            style="height: 350px;">
                            <div class="h-full flex items-center justify-center p-6">
                                <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby"
                                    class="w-full h-full object-contain transition-transform hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- Right: Product Details -->
                    <div class="lg:w-2/3">
                        <div class="mb-4">
                            <h2 class="font-fredoka text-3xl lg:text-4xl text-gray-800 mb-3">Gentle Baby</h2>
                            <p class="text-lg font-nunito text-gray-600">Minyak pijat aromaterapi untuk si kecil</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
                            <div class="space-y-4 font-nunito text-gray-700">
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1.5 flex-shrink-0">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-base ml-3">Kelembutan sentuhan skin-to-skin</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1.5 flex-shrink-0">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-base ml-3">100% Bahan Alami & tidak mencemari lingkungan</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1.5 flex-shrink-0">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-base ml-3">Dimulai dari anak berusia 0 bulan untuk anaknya</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="rounded-full bg-green-100 p-1.5 flex-shrink-0">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-base ml-3">Aman & Berkhasiat untuk bayi</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="flex gap-3">
                            <button
                                class="btn-gradient-brand text-white font-nunito font-semibold py-3 px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mamina ASI Booster -->
        <div
            class="relative py-24 bg-gradient-to-bl from-amber-100/40 via-white/60 to-orange-50/30 backdrop-blur-sm mx-4 mb-8 overflow-hidden rounded-3xl">
            <!-- Mamina Floating Elements -->
            <div class="absolute top-12 left-8 w-28 h-28 bg-amber-300/25 rounded-full blur-xl"></div>
            <div class="absolute bottom-20 right-16 w-36 h-36 bg-yellow-300/20 rounded-full blur-2xl"></div>
            <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-orange-300/15 rounded-full blur-lg"></div>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <!-- Left: Product Details -->
                    <div class="lg:w-2/3" style="text-align: right;">
                        <div class="mb-4" style="text-align: right;">
                            <h2 class="font-fredoka text-3xl lg:text-4xl text-gray-800 mb-3" style="text-align: right;">
                                Mamina ASI Booster</h2>
                            <p class="text-lg font-nunito text-gray-600" style="text-align: right;">Pelancar ASI dari
                                bahan rempah alami</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8"
                            style="text-align: right;">
                            <div class="space-y-4 font-nunito text-gray-700" style="text-align: right;">
                                <p class="text-base leading-relaxed" style="text-align: right;">
                                    Pelancer ASI dari bahan Rimpang Alami. Sediahan herbal dengan khasiat melancaran ASI
                                    dengan komposisi 100% bahan alami, tanpa pemanis dan perisa.
                                </p>
                                <div class="flex justify-end gap-2 mt-4">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Jeruk
                                        Nipis</span>
                                    <span
                                        class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">Blimbing
                                        Waluh</span>
                                    <span
                                        class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">Original</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div style="text-align: right;" class="flex gap-3 justify-end">
                            <button
                                class="btn-gradient-brand text-white font-nunito font-semibold py-3 px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </button>
                        </div>
                    </div>

                    <!-- Right: Product Image -->
                    <div class="lg:w-1/3 flex-shrink-0">
                        <div class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100"
                            style="height: 350px;">
                            <div class="h-full flex items-center justify-center p-6">
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
            class="relative py-24 bg-gradient-to-br from-emerald-100/35 via-white/65 to-green-50/40 backdrop-blur-sm mx-4 mb-16 overflow-hidden rounded-3xl">
            <!-- Nyam Floating Elements -->
            <div class="absolute top-16 right-12 w-40 h-40 bg-emerald-300/20 rounded-full blur-2xl"></div>
            <div class="absolute bottom-12 left-8 w-32 h-32 bg-green-300/25 rounded-full blur-xl"></div>
            <div class="absolute top-2/3 left-1/3 w-24 h-24 bg-teal-300/15 rounded-full blur-lg"></div>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <!-- Left: Product Image -->
                    <div class="lg:w-1/3 flex-shrink-0">
                        <div class="bg-white rounded-2xl overflow-hidden w-full shadow-md border border-gray-100"
                            style="height: 350px;">
                            <div class="h-full flex items-center justify-center p-6">
                                <img src="{{ asset('images/nyam.png') }}" alt="Nyam!"
                                    class="w-full h-full object-contain transition-transform hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- Right: Product Details -->
                    <div class="lg:w-2/3">
                        <div class="mb-4">
                            <h2 class="font-fredoka text-3xl lg:text-4xl text-gray-800 mb-3">Nyam! BB Booster</h2>
                            <p class="text-lg font-nunito text-gray-600">Makanan Pendamping ASI berkualitas tinggi</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
                            <div class="space-y-4 font-nunito text-gray-700">
                                <p class="text-base leading-relaxed">Dibuat menggunakan beragam bahan pilihan dan
                                    berkualitas tinggi yang diolah dengan tangan kreatif dari seorang ibu, menghasilkan
                                    sebuah produk MPASI yang sehat, praktis, bergizi serta memiliki cita rasa rumahan yang
                                    lezat.</p>

                                <div class="grid grid-cols-2 gap-3 mt-4">
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-sm">Tanpa Pengawet</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-sm">Kaya Nutrisi</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-sm">Mudah Disajikan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="rounded-full bg-green-100 p-1 flex-shrink-0">
                                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="ml-2 text-sm">Cita Rasa Rumahan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="flex gap-3">
                            <button
                                class="btn-gradient-brand text-white font-nunito font-semibold py-3 px-8 text-sm rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                                Lihat Produk
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lebih dari Sekedar Produk Section -->
    <section class="py-16 bg-white mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Section Header -->
            <div class="mb-12">
                <h2 class="font-fredoka text-3xl text-gray-800 mb-4">
                    Lebih dari Sekedar Produk, Ini Bentuk Kasih Sayang
                </h2>
                <p class="font-nunito text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                    Di setiap hal kecil yang kami lakukan, kami tuangkan cinta dan kasih sayang yang begitu mendalam.
                    Bukan sekedar memenuhi kebutuhan, tapi juga menjadi jembatan dalam membangun ikatan penuh cinta antara
                    ibu dan anak.
                </p>
            </div>

            <!-- Icons Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Icon 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-xl text-gray-800 mb-3">Terpercaya</h3>
                    <p class="font-nunito text-sm text-gray-600 leading-relaxed">Produk bergizi tinggi yang
                        telah teruji dan direkomendasikan ahli gizi untuk tumbuh kembang optimal si kecil</p>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-xl text-gray-800 mb-3">Konsultasi Gratis</h3>
                    <p class="font-nunito text-sm text-gray-600 leading-relaxed">Layanan konsultasi langsung dengan ahli
                        untuk membantu perjalanan menyusui dan tumbuh kembang anak Anda</p>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka text-xl text-gray-800 mb-3">Komunitas Ibu</h3>
                    <p class="font-nunito text-sm text-gray-600 leading-relaxed">Bergabung dengan ribuan ibu lainnya untuk
                        saling berbagi pengalaman dan dukungan dalam perjalanan mengasuh anak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-50 mt-16">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Header -->
            <div class="mb-12">
                <h2 class="font-fredoka text-3xl text-gray-800 mb-4">
                    Telah Dipercaya <span class="text-blue-600">30.000+ Ibu</span>
                </h2>
                <p class="font-nunito text-lg text-gray-600 mb-8">
                    Bergabunglah dengan ribuan ibu yang telah merasakan manfaat produk kami
                </p>
            </div>

            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-left flex-1">
                            <div class="flex mb-3">
                                <!-- Star Rating -->
                                <div class="flex space-x-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="font-nunito text-gray-700 mb-4 italic leading-relaxed">
                                "Gentle Baby benar-benar membantu moment bonding dengan si kecil. Aromanya menenangkan dan
                                teksturnya sangat lembut di kulit bayi. Sangat recommended!"
                            </p>
                            <div class="flex items-center justify-between">
                                <p class="font-fredoka text-gray-800 font-medium">Mam Sari Dewi</p>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Gentle Baby
                                    User</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-left flex-1">
                            <div class="flex mb-3">
                                <!-- Star Rating -->
                                <div class="flex space-x-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="font-nunito text-gray-700 mb-4 italic leading-relaxed">
                                "Mamina ASI Booster sangat membantu produksi ASI saya. Dalam seminggu sudah terasa
                                peningkatannya. Rasanya juga enak dan alami!"
                            </p>
                            <div class="flex items-center justify-between">
                                <p class="font-fredoka text-gray-800 font-medium">Mam Firda Annalisa</p>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Mamina User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="font-fredoka text-3xl text-gray-800 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="font-nunito text-lg text-gray-600 max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan yang sering diajukan seputar produk dan layanan kami
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-lg">Apakah produk Gentle Baby aman untuk bayi yang baru lahir?</span>
                        <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4">
                        <p class="text-gray-600 leading-relaxed">Ya, produk Gentle Baby diformulasikan khusus untuk bayi
                            dari usia 0 bulan. Menggunakan 100% bahan alami yang aman dan telah teruji dermatologi.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-lg">Berapa lama Mamina ASI Booster menunjukkan efek?</span>
                        <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4">
                        <p class="text-gray-600 leading-relaxed">Efek Mamina ASI Booster biasanya mulai terasa dalam 3-7
                            hari konsumsi rutin. Namun, hasil dapat bervariasi tergantung kondisi individu masing-masing
                            ibu.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-lg">Apakah Nyam! BB Booster mengandung pengawet?</span>
                        <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4">
                        <p class="text-gray-600 leading-relaxed">Tidak, Nyam! BB Booster dibuat tanpa pengawet buatan. Kami
                            menggunakan proses pengolahan alami untuk menjaga kualitas dan kesegaran produk.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-lg">Bagaimana cara penyimpanan produk yang benar?</span>
                        <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4">
                        <p class="text-gray-600 leading-relaxed">Simpan produk di tempat yang sejuk, kering, dan terhindar
                            dari sinar matahari langsung. Pastikan kemasan tertutup rapat setelah digunakan untuk menjaga
                            kualitas produk.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-nunito font-medium text-gray-800 flex justify-between items-center hover:text-blue-600 transition-colors">
                        <span class="text-lg">Apakah tersedia konsultasi gratis untuk penggunaan produk?</span>
                        <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4">
                        <p class="text-gray-600 leading-relaxed">Ya, kami menyediakan layanan konsultasi gratis dengan tim
                            ahli kami. Anda dapat menghubungi customer service kami melalui WhatsApp atau email untuk
                            mendapatkan panduan penggunaan produk yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // FAQ Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqToggles = document.querySelectorAll('.faq-toggle');

            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');

                    // Close other FAQ items
                    faqToggles.forEach(otherToggle => {
                        if (otherToggle !== this) {
                            const otherContent = otherToggle.nextElementSibling;
                            const otherIcon = otherToggle.querySelector('.faq-icon');
                            otherContent.classList.add('hidden');
                            otherIcon.classList.remove('rotate-180');
                        }
                    });

                    // Toggle current FAQ item
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        });
    </script>
@endsection

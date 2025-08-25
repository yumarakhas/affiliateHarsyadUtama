@extends('layouts.app')

@section('title', 'Gentle Living')

@section('content')
    <!-- Hero Section / partner -->
    <section id="partner" class="relative min-h-screen bg-gray-100">
        <!-- Mobile: Banner Background (visible only on mobile) -->
        <div class="absolute inset-0 w-full h-full lg:hidden" id="banner-carousel-mobile">
            <!-- Slides Container -->
            <div class="h-full overflow-hidden relative z-0">
                <img src="{{ asset('images/banner/banner_partner1.png') }}" alt="Banner 1"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-100">
                <img src="{{ asset('images/banner/banner_partner2.jpg') }}" alt="Banner 2"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                <img src="{{ asset('images/banner/banner_partner3.jpg') }}" alt="Banner 3"
                    class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
            </div>

            <!-- Mobile: Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#444444]/100 via-[#444444]/100 to-transparent z-10"></div>

            <!-- Mobile Content -->
            <div class="absolute inset-0 flex items-center justify-center z-20 px-6">
                <div class="text-center">
                    <!-- Main Title - Pink Color like in image -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight drop-shadow-lg mb-6 font-fredoka"
                        style="color: #F4A6A6;">
                        Join Our Baby<br>
                        Wellness Affiliate<br>
                        Program
                    </h1>

                    <!-- Description - Beige/Light color like in image -->
                    <p class="text-base sm:text-lg leading-relaxed drop-shadow mb-8 font-nunito max-w-md mx-auto"
                        style="color: #D4B5A0;">
                        Kami sedang membuka program affiliate partnership untuk
                        <span class="font-bold">3 produk best-seller</span> kami yang fokus pada wellness bunda & bayi.
                    </p>

                    <!-- Dynamic Caption Container - White text like in image -->
                    <div class="mb-6">
                        <div id="content" class="text-xl sm:text-2xl font-bold font-fredoka leading-tight text-white">
                            <!-- Content will be updated by carousel.js -->
                        </div>
                    </div>

                    <!-- CTA Button - White background, dark text like in image -->
                    <a href="{{ route('affiliate.form') }}"
                        class="inline-block px-10 py-4 bg-white text-gray-800 font-bold rounded-full shadow-lg hover:shadow-2xl hover:bg-gray-100 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out font-nunito">
                        DAFTAR SEKARANG
                    </a>

                    <!-- Navigation Indicators -->
                    <div id="carousel-indicators" class="flex justify-center space-x-2 mt-8">
                        <button class="w-8 h-1 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-200">
                            <div class="indicator-line w-full h-full rounded-full bg-white/80 transition-all duration-300">
                            </div>
                        </button>
                        <button class="w-8 h-1 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-200">
                            <div class="indicator-line w-full h-full rounded-full bg-white/40 transition-all duration-300">
                            </div>
                        </button>
                        <button class="w-8 h-1 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-200">
                            <div class="indicator-line w-full h-full rounded-full bg-white/40 transition-all duration-300">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop Layout Container -->
        <div class="relative flex-col lg:flex-row min-h-screen hidden lg:flex">
            <!-- Desktop Background Gradient -->
            <div
                class="absolute top-0 left-0 right-0 h-full bg-gradient-to-r from-[#444444]/100 via-[#444444]/100 to-transparent z-10">
            </div>

            <!-- Left Side - Text Content with Dynamic Caption -->
            <div class="relative w-full lg:w-1/2 flex items-center justify-center px-6 lg:px-24 z-20">
                <div class="relative z-10 text-center lg:text-left py-16 lg:py-0">
                    <!-- Main Title - Pink Color like in image, with line breaks -->
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-8 font-fredoka"
                        style="color: #F4A6A6;">
                        Join Our Baby<br>
                        Wellness Affiliate<br>
                        Program
                    </h1>

                    <!-- Description - Beige/Light color like in image -->
                    <p class="text-base lg:text-lg leading-relaxed font-nunito mb-8 max-w-lg" style="color: #D4B5A0;">
                        Kami sedang membuka program affiliate partnership untuk
                        <span class="font-bold">3 produk best-seller</span> kami yang fokus pada wellness bunda & bayi.
                    </p>

                    <!-- Desktop Dynamic Caption Container - White text like in image -->
                    <div class="mb-8">
                        <div id="desktop-content"
                            class="text-xl lg:text-2xl xl:text-3xl font-bold font-fredoka leading-tight text-white">
                            <!-- Content will be updated by carousel.js -->
                        </div>
                    </div>

                    <!-- CTA Button - White background, dark text like in image -->
                    <a href="{{ route('affiliate.form') }}"
                        class="inline-block px-10 py-4 bg-white text-gray-800 font-bold rounded-full shadow-lg hover:shadow-2xl hover:bg-gray-100 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out font-nunito">
                        DAFTAR SEKARANG
                    </a>
                </div>
            </div>

            <!-- Right Side - Desktop Banner Carousel -->
            <div class="relative w-full lg:w-1/2 min-h-screen" id="banner-carousel">
                <!-- Slides Container -->
                <div class="h-full overflow-hidden relative">
                    <img src="{{ asset('images/banner/banner_partner1.png') }}" alt="Banner 1"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-100">
                    <img src="{{ asset('images/banner/banner_partner2.jpg') }}" alt="Banner 2"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                    <img src="{{ asset('images/banner/banner_partner3.jpg') }}" alt="Banner 3"
                        class="banner-slide w-full h-full object-cover object-center absolute transition-all duration-700 opacity-0">
                </div>
                <!-- Desktop: Subtle overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/5 to-transparent"></div>
            </div>
        </div>
    </section>

    <!-- Include Carousel JavaScript -->
    <script src="{{ asset('js/carousel.js') }}"></script>

    <!-- Produk Section -->
    <section id="products" class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <!-- Why Join Us Header -->
            <div class="text-center mb-8 sm:mb-12 lg:mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-4 sm:mb-6 lg:mb-8 font-fredoka">
                    Why Join Us
                </h2>
                <p
                    class="text-sm sm:text-base lg:text-lg text-gray-800 max-w-4xl mx-auto leading-relaxed font-nunito px-2 sm:px-0">
                    Kami percaya produk ini sangat cocok untuk audience kami yang didominasi moms, new parents,
                    breastfeeding moms, dan pejuang MPASI.
                </p>
                <p
                    class="text-sm sm:text-base lg:text-lg text-gray-800 italic font-semibold mt-2 sm:mt-3 lg:mt-4 font-nunito">
                    Helping Moms - Earning with Purpose
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 mb-8 sm:mb-12 lg:mb-16">
                <!-- Benefit 1 -->
                <div
                    class="flex items-start space-x-3 sm:space-x-4 p-3 sm:p-4 lg:p-6 bg-white rounded-lg hover:bg-gray-50 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-check-badge
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-blue-600 bg-blue-100 rounded-full p-1" />
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-800 mb-1 sm:mb-2">Kebutuhan bunda dan
                            baby</h3>
                        <p class="text-gray-600 text-xs sm:text-sm lg:text-base font-nunito leading-relaxed">
                            Berdasarkan data yang kami punya, produk kami salah satu kebutuhan si Kecil
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="flex items-start space-x-3 sm:space-x-4 p-3 sm:p-4 lg:p-6 bg-white rounded-lg hover:bg-gray-50 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-shopping-cart
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-blue-600 bg-blue-100 rounded-full p-1" />
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-800 mb-1 sm:mb-2">Repeat order tinggi
                        </h3>
                        <p class="text-gray-600 text-xs sm:text-sm lg:text-base font-nunito leading-relaxed">
                            Hasil dirasakan cepat & kebutuhan harian
                        </p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="flex items-start space-x-3 sm:space-x-4 p-3 sm:p-4 lg:p-6 bg-white rounded-lg hover:bg-gray-50 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-document-text
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-blue-600 bg-blue-100 rounded-full p-1" />
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-800 mb-1 sm:mb-2">Full support +
                            edukasi</h3>
                        <p class="text-gray-600 text-xs sm:text-sm lg:text-base font-nunito leading-relaxed">
                            Kamu bisa dibantu berkembang secara skill atau kebutuhan konten
                        </p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="flex items-start space-x-3 sm:space-x-4 p-3 sm:p-4 lg:p-6 bg-white rounded-lg hover:bg-gray-50 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-star
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-blue-600 bg-blue-100 rounded-full p-1" />
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-800 mb-1 sm:mb-2">Produk kategori
                            premium</h3>
                        <p class="text-gray-600 text-xs sm:text-sm lg:text-base font-nunito leading-relaxed">
                            Bernilai jual cukup tinggi sehingga komisi besar untuk setiap penjualannya
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- What you will get Section -->
        <div class="mb-8 sm:mb-12 lg:mb-16 text-center px-3 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-4 sm:mb-6 lg:mb-8 font-fredoka">
                What you will get
            </h2>
            <div class="max-w-6xl mx-auto">
                <!-- Baris pertama - 3 item -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 lg:gap-6 mb-4 sm:mb-6 lg:mb-8">
                    <!-- Item 1 -->
                    <div
                        class="bg-white rounded-lg p-3 sm:p-4 lg:p-6 text-left border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4 flex-shrink-0">
                                <x-heroicon-s-currency-dollar class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">
                                    Setiap penjualan produk mendapat komisi sebesar 12-15%
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-white rounded-lg p-3 sm:p-4 lg:p-6 text-left border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4 flex-shrink-0">
                                <x-heroicon-s-user-group class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">
                                    Tim support untuk bantu tracking & pelaporan hingga pengembangan skill
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-white rounded-lg p-3 sm:p-4 lg:p-6 text-left border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-200 shadow-sm sm:col-span-2 lg:col-span-1">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4 flex-shrink-0">
                                <x-heroicon-s-gift class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">
                                    Produk gratis untuk review (bisa 1-3 item)
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris kedua - 2 item di tengah -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 lg:gap-6 max-w-4xl mx-auto">
                    <!-- Item 4 -->
                    <div
                        class="bg-white rounded-lg p-3 sm:p-4 lg:p-6 text-left border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4 flex-shrink-0">
                                <x-heroicon-s-banknotes class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">
                                    Bonus bulanan dan tahunan untuk penjualan terbanyak
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div
                        class="bg-white rounded-lg p-3 sm:p-4 lg:p-6 text-left border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-200 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4 flex-shrink-0">
                                <x-heroicon-s-photo class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">
                                    Akses ke media kit (foto, video, script)
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Perfect for you Section -->
        <div class="mb-8 sm:mb-12 lg:mb-16 px-3 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-4 sm:mb-6 lg:mb-8 text-center font-fredoka">
                Perfect for you
            </h2>
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-6">
                    <!-- Type 1 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-2">Momfluencer</h4>
                        <p class="text-xs sm:text-sm lg:text-base text-gray-600 font-nunito leading-relaxed">
                            Sering berbagi daily life bermama anak
                        </p>
                    </div>

                    <!-- Type 2 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-2">Bidan/Educator MPASI</h4>
                        <p class="text-xs sm:text-sm lg:text-base text-gray-600 font-nunito leading-relaxed">
                            Aktif memberikan edukasi tentang tumbuh kembang dan nutrisi
                        </p>
                    </div>

                    <!-- Type 3 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-2">Admin Komunitas Ibu</h4>
                        <p class="text-xs sm:text-sm lg:text-base text-gray-600 font-nunito leading-relaxed">
                            Mengelola komunitas diskusi seputar parenting
                        </p>
                    </div>

                    <!-- Type 4 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h4 class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-2">Content Creator Parenting
                        </h4>
                        <p class="text-xs sm:text-sm lg:text-base text-gray-600 font-nunito leading-relaxed">
                            Membuat konten tips, review produk bayi, hingga edukasi
                        </p>
                    </div>

                    <!-- Type 5 -->
                    <div
                        class="bg-white p-3 sm:p-4 lg:p-6 rounded-lg text-center shadow-lg hover:shadow-xl transition-shadow duration-200 sm:col-span-2 lg:col-span-1 sm:max-w-md sm:mx-auto lg:max-w-none">
                        <h4 class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-2">Ibu Aktif</h4>
                        <p class="text-xs sm:text-sm lg:text-base text-gray-600 font-nunito leading-relaxed">
                            Suka berbagi info bermanfaat ke sesama ibu
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet The Product Section -->
        <div class="text-center py-10 lg:py-14 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-8 lg:mb-12 font-fredoka">
                Meet The Product
            </h2>
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
                    <!-- Product 1 -->
                    <div
                        class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative">
                            <div class="p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div class="w-full rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                    style="height: 200px;">
                                    <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby"
                                        class="object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Gentle Baby</h3>
                                        <p class="text-sm text-gray-600 font-nunito mb-4">Massage oil</p>
                                    </div>
                                    <button
                                        onclick="window.location.href='https://shopee.co.id/Gentle-Baby-Massage-Oil-100ml-i.1483235365.41704362992?sp_atk=cd7bceae-166b-47bb-8c7c-92efde449b76&xptdk=cd7bceae-166b-47bb-8c7c-92efde449b76'"
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90">
                                        Beli
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div
                        class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative">
                            <div class="p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div class="w-full rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                    style="height: 200px;">
                                    <img src="{{ asset('images/mamina.png') }}" alt="Gentle Baby"
                                        class="object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Mamina Asi Booster</h3>
                                        <p class="text-sm text-gray-600 font-nunito mb-4">seduhan herbal alami</p>
                                    </div>
                                    <button
                                        onclick="window.location.href='https://shopee.co.id/Mamina-Paket-Bundle-Pelancar-Asi-Isi-3-(10-Tebag-per-Paket)-ASI-Booster-Halal-Bahan-Alami-i.1483235365.41704362992?sp_atk=cd7bceae-166b-47bb-8c7c-92efde449b76&xptdk=cd7bceae-166b-47bb-8c7c-92efde449b76'"
                                        class="w-full btn-gradient-brand text-white font-nunito font-semibold py-3 px-4 text-sm rounded-lg mt-auto hover:opacity-90">
                                        Beli
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div
                        class="bg-gradient-to-b from-white to-blue-50 rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative">
                            <div class="p-6 flex flex-col flex-1">
                                <!-- Product Image -->
                                <div class="w-full rounded-lg mb-5 overflow-hidden flex items-center justify-center bg-gray-50 p-3"
                                    style="height: 200px;">
                                    <img src="{{ asset('images/nyam.png') }}" alt="Gentle Baby"
                                        class="object-contain transition-transform duration-300 hover:scale-110">
                                </div>
                                <!-- Product Info -->
                                <div class="text-center flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-fredoka text-gray-800 mb-2 text-xl">Nyam! MPASI</h3>
                                        <p class="text-sm text-gray-600 font-nunito mb-4">Makanan pendamping bayi</p>
                                    </div>
                                    <button
                                        onclick="window.location.href='https://shopee.co.id/NYAM-BABY-FOOD-BUNDLING-PAKET-MPASI-10-18-BULAN-HOMEMADE-TANPA-PENGAWET-i.1059596102.43102157461'"
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

    <!-- Testimonial Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-[#6C63FF] mb-6 lg:mb-8 font-fredoka">
                Telah dipercaya oleh
                <span class="text-gray-800 font-bold">>30.000</span> Ibu
            </h2>

            <!-- Testimonial Card -->
            <div class="bg-white rounded-lg p-6 lg:p-8 shadow-lg max-w-3xl mx-auto">
                <div class="flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-4">
                    <!-- Avatar -->
                    <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0 mx-auto sm:mx-0"></div>

                    <!-- Testimonial Content -->
                    <div class="text-center sm:text-left flex-1">
                        <p
                            class="text-sm sm:text-base lg:text-lg text-gray-700 mb-3 lg:mb-4 italic leading-relaxed font-nunito">
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
                        <p
                            class="text-gray-600 text-sm lg:text-base leading-relaxed mb-6 lg:mb-8 text-center lg:text-left font-nunito">
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
                                Penjualan dan komisi dicatat otomatis lewat platform
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

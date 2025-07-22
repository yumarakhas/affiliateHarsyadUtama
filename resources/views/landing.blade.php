@extends('layouts.app')

@section('title', 'Gentle Living')

@section('content')
    <!-- Hero Section / Beranda -->
    <section id="beranda" class="flex flex-col md:flex-row items-center h-screen bg-gray-100 relative">
        <!-- Background Gradient -->
        <div
            class="absolute top-0 left-0 right-0 h-full bg-gradient-to-r from-[#444444]/100 via-[#444444]/100 to-transparent z-10">
        </div>

        <!-- Sisi Kiri - Teks -->
        <div class="relative z-20 w-full md:w-1/2 flex items-start justify-center flex-col h-full">
            <div class="px-6 md:px-16 max-w"> <!-- Tambahkan padding kiri & batasi lebar konten -->
                <h1 style="font-family: 'Fredoka One', cursive;"
                    class="text-3xl md:text-5xl text-[#528B89] mb-8 leading-tight">
                    Join Our Baby Wellness Affiliate Program
                </h1>
                <p style="font-family: 'Nunito', sans-serif;" class="text-base md:text-lg text-[#528B89] mb-4 md:mb-6">
                    Kami sedang membuka program affiliate partnership untuk <br />
                    <span class="font-bold"> 3 produk best-seller </span> kami yang fokus pada wellness bunda
                    & bayi.
                </p>
                <p style="font-family: 'Nunito', sans-serif; font-size: 25px; font-bold;"
                    class="text-white font-semibold mb-6">
                    Gentlebaby Massage Oil #TheMiracleofTouch<br />
                    <span class="text-white font-normal" style="font-size: 20px;">Bantu atasi bayi rewel dan rileks,
                        juga
                        media bonding dengan ayah bunda</span>
                </p>
                <a href="#"
                    class="inline-block px-8 py-4 bg-white text-gray-800 font-bold rounded-full shadow-lg hover:shadow-2xl hover:bg-[#528B89] hover:text-white transform hover:scale-110 hover:-translate-y-2 transition-all duration-300 ease-in-out">
                    DAFTAR SEKARANG
                </a>
            </div>
        </div>

        <!-- Sisi Kanan - Gambar Carousel -->
        <div class="relative z-0 w-full md:w-1/2 h-full" id="banner-carousel">
            <!-- Slides Container -->
            <div class="h-full overflow-hidden relative">
                <img src="{{ asset('images/banner.png') }}" alt="Banner 1"
                    class="banner-slide w-full h-full object-cover object-right absolute transition-all duration-700 opacity-100">
                <img src="{{ asset('images/banner-2.png') }}" alt="Banner 2"
                    class="banner-slide w-full h-full object-cover object-right absolute transition-all duration-700 opacity-0">
                <img src="{{ asset('images/banner-3.png') }}" alt="Banner 3"
                    class="banner-slide w-full h-full object-cover object-right absolute transition-all duration-700 opacity-0">
            </div>

            <!-- Navigation Indicators - Larger click target -->
            <div class="absolute bottom-12 left-0 right-0 flex justify-center gap-5 z-20" id="carousel-indicators">
                <button class="group relative cursor-pointer" data-slide="0">
                    <div class="w-20 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                    <div
                        class="w-20 h-3 bg-white/80 rounded-full indicator-line active transition-all group-hover:bg-white">
                    </div>
                </button>
                <button class="group relative cursor-pointer" data-slide="1">
                    <div class="w-20 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="w-20 h-3 bg-white/40 rounded-full indicator-line transition-all group-hover:bg-white/60">
                    </div>
                </button>
                <button class="group relative cursor-pointer" data-slide="2">
                    <div class="w-20 h-8 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="w-20 h-3 bg-white/40 rounded-full indicator-line transition-all group-hover:bg-white/60">
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="products" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Why Join Us Header -->
            <div class="text-center mb-16">
                <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-8">
                    Why Join Us
                </h2>
                <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-[#6C63FF] max-w-3xl mx-auto">
                    Kami percaya produk ini sangat cocok untuk audience kami yang didominasi moms, new parents,
                    breastfeeding moms, dan pejuang MPASI.
                </p>
                <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-[#6C63FF] italic font-semibold mt-4">
                    Helping Moms - Earning with Purpose
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <!-- Benefit 1 -->
                <div class="flex items-start space-x-4">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-check-badge class="w-12 h-12 text-[#528B89]" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Produk yang beneran dipakai & dibutuhkan bunda dan
                            baby</h3>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600">
                            Kami tahu dibutuhkan berdasarkan riset & kami sendiri beneran pakai untuk Si Kecil
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="flex items-start space-x-4">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-shopping-cart class="w-12 h-12 text-[#528B89]" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Repeat order tinggi</h3>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600">
                            Hasil dirasakan cepat & kebutuhan harian
                        </p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="flex items-start space-x-4">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-document-text class="w-12 h-12 text-[#528B89]" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Full support + edukasi</h3>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600">
                            Kamu bisa dibantu berkembang secara skill atau kebutuhan konten
                        </p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="flex items-start space-x-4">
                    <div class="flex items-center justify-center flex-shrink-0">
                        <x-heroicon-s-star class="w-12 h-12 text-[#528B89]" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Produk kategori premium</h3>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600">
                            Bernilai jual cukup tinggi sehingga komisi besar untuk setiap penjualannya
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- What you will get Section -->
        <div class="mb-16 text-center">
            <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-8">
                What you will get
            </h2>
            <div class="max-w-5xl mx-auto">
                <!-- Baris pertama - 3 item -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <!-- Item 1 -->
                    <div
                        class="bg-white rounded-lg p-6 text-left border border-gray-200 hover:border-[#528B89] transition-colors shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-currency-dollar class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Setup penjualan produk</h4>
                                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-600">mendapat
                                    komisi sebesar 30-40%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-white rounded-lg p-6 text-left border border-gray-200 hover:border-[#528B89] transition-colors shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-user-group class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Tim support untuk bantu
                                    tracking &
                                    pelaporan</h4>
                                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-600">hingga
                                    pengembangan skill</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-white rounded-lg p-6 text-left border border-gray-200 hover:border-[#528B89] transition-colors shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-gift class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Produk gratis untuk review
                                </h4>
                                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-600">(bisa 1-3
                                    item)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris kedua - 2 item di tengah -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto">
                    <!-- Item 4 -->
                    <div
                        class="bg-white rounded-lg p-6 text-left border border-gray-200 hover:border-[#528B89] transition-colors shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-banknotes class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Bonus bulanan dan tahunan
                                </h4>
                                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-600">untuk
                                    penjualan terbanyak</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div
                        class="bg-white rounded-lg p-6 text-left border border-gray-200 hover:border-[#528B89] transition-colors shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <x-heroicon-s-photo class="w-6 h-6 text-gray-600" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-base leading-tight mb-2">Akses ke media kit</h4>
                                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-600">(foto, video,
                                    script)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Perfect for you Section -->
        <div class="mb-16 ">
            <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-8 text-center">
                Perfect for you
            </h2>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <!-- Type 1 -->
                    <div class="bg-white p-4 rounded-lg text-center shadow-xl hover:shadow-2xl transition-shadow">
                        <h4 class="font-bold text-gray-800 text-sm mb-2">Momfluencer</h4>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-xs text-gray-600">Sering berbagi daily
                            life bermama anak</p>
                    </div>

                    <!-- Type 2 -->
                    <div class="bg-white p-4 rounded-lg text-center shadow-xl hover:shadow-2xl transition-shadow">
                        <h4 class="font-bold text-gray-800 text-sm mb-2">Bidan/Educator MPASI</h4>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-xs text-gray-600">Aktif memberikan
                            edukasi tentang kesehatan bayi/anak</p>
                    </div>

                    <!-- Type 3 -->
                    <div class="bg-white p-4 rounded-lg text-center shadow-xl hover:shadow-2xl transition-shadow">
                        <h4 class="font-bold text-gray-800 text-sm mb-2">Admin Komunitas Ibu</h4>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-xs text-gray-600">Mengelola komunitas
                            untuk mama dan terlibat diskusi</p>
                    </div>

                    <!-- Type 4 -->
                    <div class="bg-white p-4 rounded-lg text-center shadow-xl hover:shadow-2xl transition-shadow">
                        <h4 class="font-bold text-gray-800 text-sm mb-2">Content Creator Parenting</h4>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-xs text-gray-600">Membuat konten tips,
                            review terkait tumbuh kembang</p>
                    </div>

                    <!-- Type 5 -->
                    <div class="bg-white p-4 rounded-lg text-center shadow-xl hover:shadow-2xl transition-shadow">
                        <h4 class="font-bold text-gray-800 text-sm mb-2">Ibu Aktif</h4>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-xs text-gray-600">Suka berbagi info dan
                            recommend ke mama lain</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet The Product Section -->
        <div class="text-center">
            <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-8">
                Meet The Product
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6 hover:border-[#528B89] transition-colors">
                    <div class="h-48 bg-gray-100 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-400">Product Image</span>
                    </div>
                    <h4 style="font-family: 'Fredoka One', cursive;" class="text-xl text-[#528B89] mb-4">
                        Gentle Baby
                    </h4>
                    <a href="#" class="inline-flex items-center text-[#528B89] font-semibold hover:underline">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                        </svg>
                        Link produk
                    </a>
                </div>

                <!-- Product 2 -->
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6 hover:border-[#528B89] transition-colors">
                    <div class="h-48 bg-gray-100 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-400">Product Image</span>
                    </div>
                    <h4 style="font-family: 'Fredoka One', cursive;" class="text-xl text-[#528B89] mb-4">
                        Mamina Seduhan
                    </h4>
                    <a href="#" class="inline-flex items-center text-[#528B89] font-semibold hover:underline">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                        </svg>
                        Link produk
                    </a>
                </div>

                <!-- Product 3 -->
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6 hover:border-[#528B89] transition-colors">
                    <div class="h-48 bg-gray-100 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-400">Product Image</span>
                    </div>
                    <h4 style="font-family: 'Fredoka One', cursive;" class="text-xl text-[#528B89] mb-4">
                        Nyam! MPASI
                    </h4>
                    <a href="#" class="inline-flex items-center text-[#528B89] font-semibold hover:underline">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
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
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-8">
                Telah dipercaya >30.000 Ibu
            </h2>

            <!-- Testimonial Card -->
            <div class="bg-white rounded-lg p-8 shadow-lg max-w-2xl mx-auto">
                <div class="flex items-start space-x-4">
                    <!-- Avatar -->
                    <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>

                    <!-- Testimonial Content -->
                    <div class="text-left">
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-700 mb-4 italic">
                            "Hari ini Fahiyyah masuk angin, muntah, dan mual. Trus ingat punya Tummy Calmer.
                            Langsung obles-oles ke perut Alhamdulillah langsung terkendali enggak lagi
                            batunya. Makasih Gentle Baby!"
                        </p>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-[#528B89] font-semibold">
                            Mom Firda Amalia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Join Section -->
    <section class="py-20 bg-[#B8E6D9]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Side - Content -->
                <div>
                    <h2 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#6C63FF] mb-6">
                        How to Join
                    </h2>

                    <div class="bg-white rounded-2xl border border-[#E5E7EB] p-6 md:p-8 shadow-lg">
                        <h3 style="font-family: 'Fredoka One', cursive;" class="text-2xl text-[#528B89] mb-3">
                            Work Easy, Earn More
                        </h3>
                        <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600 text-sm leading-relaxed mb-8">
                            Kami bisa bantu rekomendasikan bikin konten/script sesuai gaya kamu
                        </p>

                        <!-- CTA Button -->
                        <button
                            class="relative bg-gradient-to-r from-[#FF6B6B] to-[#FF9191] text-white px-8 py-4 rounded-xl font-bold text-center shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:shadow-xl hover:scale-105 hover:-translate-y-1 group w-full md:w-auto">
                            <span class="relative z-10">DAFTAR SEKARANG</span>
                            <!-- Hover Gradient Overlay -->
                            <span
                                class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#D94C4C] to-[#FF6B6B] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left z-0 rounded-xl"></span>
                            <!-- Shine Effect -->
                            <span
                                class="absolute top-0 right-0 w-8 h-full bg-white/20 skew-x-[30deg] transform translate-x-32 group-hover:translate-x-0 transition-all duration-1000 z-0"></span>
                        </button>
                    </div>
                </div>


                <!-- Right Side - Steps -->
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 relative z-10 shadow-lg ">
                                <span class="text-white font-bold text-lg">1</span>
                            </div>
                            <!-- Line connector -->
                            <div class="absolute left-1/2 top-12 w-1 h-12 bg-[#D2F4E4] transform -translate-x-0.5 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p style="font-family: 'Nunito', sans-serif;"
                                class="text-[#D94C4C] font-bold text-base leading-relaxed">
                                Klik "DAFTAR SEKARANG" dan isi identitas diri
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 relative z-10 shadow-lg">
                                <span class="text-white font-bold text-lg">2</span>
                            </div>
                            <!-- Line connector -->
                            <div class="absolute left-1/2 top-12 w-1 h-12 bg-[#D2F4E4] transform -translate-x-0.5 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p style="font-family: 'Nunito', sans-serif;" class="text-[#D94C4C] font-bold text-base mb-1">
                                Tim kami akan kirim:
                            </p>
                            <p style="font-family: 'Nunito', sans-serif;" class="text-[#D94C4C] text-sm leading-relaxed">
                                Link affiliate, Product Knowledge, Brief konten & panduan
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 relative z-10 shadow-lg">
                                <span class="text-white font-bold text-lg">3</span>
                            </div>
                            <!-- Line connector -->
                            <div class="absolute left-1/2 top-12 w-1 h-12 bg-[#D2F4E4] transform -translate-x-0.5 z-0">
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p style="font-family: 'Nunito', sans-serif;"
                                class="text-[#D94C4C] font-bold text-base leading-relaxed">
                                Kamu tinggal sharelink affiliate ke IG Story, TikTok, WA Grup, atau komunitas Ibu
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start space-x-4 relative">
                        <div class="relative">
                            <div
                                class="bg-[#FF6B6B] w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 relative z-10 shadow-lg">
                                <span class="text-white font-bold text-lg">4</span>
                            </div>
                        </div>
                        <div class="flex-1 mt-2">
                            <p style="font-family: 'Nunito', sans-serif;" class="text-[#D94C4C] font-bold text-base mb-1">
                                Pantauan dan komisi dicatat otomatis lewat platform
                            </p>
                            <p style="font-family: 'Nunito', sans-serif;" class="text-[#D94C4C] text-sm leading-relaxed">
                                (atau Google Sheet kalau manual)
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
@endsection

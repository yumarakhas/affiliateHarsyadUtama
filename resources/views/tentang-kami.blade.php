@extends('layouts.app')

@section('title', 'Tentang Kami - Gentle Living')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[40vh] bg-gray-100 flex items-center justify-center">
        <div class="text-center px-6">
            <h1 class="text-4xl lg:text-5xl text-gray-800 mb-4 font-bold font-fredoka">
                GENTLE LIVING
            </h1>
            <p class="text-base lg:text-lg text-gray-600 font-nunito">
                Tujuan Gentle Living adalah untuk Sehat
            </p>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl text-gray-800 mb-8 font-fredoka">
                    Tentang Kami
                </h2>
            </div>

            <div class="prose prose-lg max-w-none text-gray-700 font-nunito">
                <p class="text-lg leading-relaxed mb-6">
                    MPASI atau Makanan Pendamping ASI merupakan makanan yang diberikan untuk anak di atas 6 bulan.
                    Pada masa ini nutrisi yang dibutuhkan anak semakin besar, sehingga anak memerlukan asupan makanan
                    lain selain ASI untuk memenuhi kebutuhan nutrisi hariannya.
                </p>

                <p class="text-lg leading-relaxed mb-6">
                    Beberapa ibu sering kali merasa bingung dan khawatir dalam memberikan makanan untuk anaknya,
                    karena takut sang anak tersedak atau makanan yang diberikan kurang sehat dan bergizi.
                    Oleh karena itu, Gentle Living hadir untuk memberikan solusi bagi para ibu dengan produk
                    MPASI yang sehat, bergizi, dan tentunya aman untuk si kecil.
                </p>
            </div>
        </div>
    </section>

    <!-- Perjalanan Kami Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl text-gray-800 mb-8 font-fredoka">
                    Perjalanan Kami
                </h2>
            </div>

            <div class="prose prose-lg max-w-none text-gray-700 font-nunito">
                <p class="text-lg leading-relaxed mb-6">
                    Berawal dari pengalaman sebagai orangtua yang kesulitan menemukan MPASI berkualitas tinggi
                    untuk si kecil, kami memulai perjalanan Gentle Living dengan misi menyediakan produk MPASI
                    yang sehat, bergizi, dan aman untuk bayi.
                </p>

                <p class="text-lg leading-relaxed mb-6">
                    Kami berkomitmen untuk menggunakan bahan-bahan terbaik dan proses produksi yang higienis
                    serta memenuhi standar keamanan pangan. Setiap produk MPASI kami diformulasikan khusus
                    untuk mendukung tumbuh kembang optimal bayi.
                </p>

                <p class="text-lg leading-relaxed mb-8">
                    Dengan dukungan tim ahli gizi dan pengalaman bertahun-tahun, Gentle Living kini telah
                    dipercaya oleh ribuan ibu di Indonesia untuk memberikan nutrisi terbaik bagi buah hati mereka.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Visi -->
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl lg:text-4xl text-gray-800 mb-8 font-fredoka">
                        Visi
                    </h2>
                    <div class="space-y-4 font-nunito">
                        <p class="text-lg text-gray-700 mb-6">
                            Menjadi brand MPASI terpercaya nomor satu di Indonesia yang memberikan nutrisi terbaik
                            untuk tumbuh kembang optimal bayi dan balita.
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Menghadirkan MPASI berkualitas tinggi dengan standar internasional
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mendukung ibu Indonesia dalam memberikan nutrisi terbaik
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Menciptakan generasi Indonesia yang sehat dan cerdas
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Misi -->
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl lg:text-4xl text-gray-800 mb-8 font-fredoka">
                        Misi
                    </h2>
                    <div class="space-y-4 font-nunito">
                        <p class="text-lg text-gray-700 mb-6">
                            Menyediakan produk MPASI yang sehat, bergizi, dan aman dengan menggunakan bahan-bahan
                            alami terbaik untuk mendukung tumbuh kembang optimal si kecil.
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Menggunakan bahan organik dan berkualitas tinggi
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Proses produksi higienis dengan standar keamanan pangan
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Memberikan edukasi MPASI yang tepat kepada orangtua
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-brand-500 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Inovasi berkelanjutan dalam pengembangan produk MPASI
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keluarga Gentle Living Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl text-gray-800 mb-8 font-fredoka">
                    Keluarga Gentle Living
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto font-nunito">
                    Bergabunglah dengan ribuan keluarga Indonesia yang telah mempercayakan nutrisi terbaik
                    untuk si kecil kepada Gentle Living
                </p>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
                <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/mamina.png') }}" alt="Mamina" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/nyam.png') }}" alt="Nyam" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/gentleBaby.png') }}" alt="Gentle Baby" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-3xl lg:text-4xl text-brand-500 mb-2 font-fredoka">
                        10,000+
                    </div>
                    <p class="text-gray-600 font-nunito">
                        Keluarga Terlayani
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-3xl lg:text-4xl text-brand-500 mb-2 font-fredoka">
                        50+
                    </div>
                    <p class="text-gray-600 font-nunito">
                        Varian Produk MPASI
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-3xl lg:text-4xl text-brand-500 mb-2 font-fredoka">
                        100%
                    </div>
                    <p class="text-gray-600 font-nunito">
                        Bahan Alami & Aman
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

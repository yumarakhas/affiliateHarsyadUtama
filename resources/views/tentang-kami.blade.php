@extends('layouts.app')

@section('title', 'Tentang Kami - Gentle Living')

@section('content')

    <!-- Tentang Kami Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50 mt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h1 class="font-fredoka text-4xl text-gray-800 mb-2 relative inline-block">
                    Tentang Kami
                    <span
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full"></span>
                </h1>
                <p class="font-nunito text-lg text-gray-600 leading-relaxed max-w-lg mx-auto">
                    Mengenal lebih dekat Gentle Living dan komitmen kami
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                <!-- Logo Section - Left -->
                <div class="flex justify-center lg:justify-start">
                    <div
                        class="w-80 h-80 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 p-8 flex items-center justify-center border-2 border-blue-100">
                        <img src="{{ asset('images/logo-full.png') }}" alt="Gentle Living Logo"
                            class="w-full h-full object-contain">
                    </div>
                </div>

                <!-- Content Section - Right -->
                <div class=" p-8 ">
                    <div class="space-y-6 text-gray-700 font-nunito">
                        <p class="text-lg leading-relaxed">
                            MPASI atau Makanan Pendamping ASI merupakan makanan yang diberikan untuk anak di atas 6 bulan.
                            Pada masa ini nutrisi yang dibutuhkan anak semakin besar, sehingga anak memerlukan asupan
                            makanan
                            lain selain ASI untuk memenuhi kebutuhan nutrisi hariannya.
                        </p>

                        <p class="text-lg leading-relaxed">
                            Beberapa ibu sering kali merasa bingung dan khawatir dalam memberikan makanan untuk anaknya,
                            karena takut sang anak tersedak atau makanan yang diberikan kurang sehat dan bergizi.
                        </p>

                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                            <p class="text-lg leading-relaxed font-medium text-blue-800">
                                Oleh karena itu, Gentle Living hadir untuk memberikan solusi bagi para ibu dengan produk
                                MPASI yang sehat, bergizi, dan tentunya aman untuk si kecil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="font-fredoka text-4xl text-gray-800 mb-4 relative inline-block">
                    Kebanggaan Kami
                    <span
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full"></span>
                </h2>
                <p class="font-nunito text-lg text-gray-600 leading-relaxed max-w-lg mx-auto">
                    Angka-angka yang membuktikan komitmen kami untuk keluarga Indonesia
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Stat 1: Keluarga Terlayani -->
                <div
                    class="bg-white rounded-xl border-2 border-blue-400 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="relative p-8">
                        <div
                            class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                            Terpercaya
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl text-blue-600 mb-3 font-fredoka font-bold">
                                10,000+
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">
                                Keluarga Terlayani
                            </h3>
                            <p class="text-sm text-gray-600 font-nunito">
                                Keluarga yang telah mempercayai produk kami untuk tumbuh kembang si kecil
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Stat 2: Varian Produk -->
                <div
                    class="bg-white rounded-xl border-2 border-gray-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="p-8">
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl text-orange-600 mb-3 font-fredoka font-bold">
                                50+
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">
                                Varian Produk MPASI
                            </h3>
                            <p class="text-sm text-gray-600 font-nunito">
                                Beragam pilihan rasa dan nutrisi untuk mendukung pertumbuhan optimal
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Stat 3: Bahan Alami -->
                <div
                    class="bg-white rounded-xl border-2 border-gray-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="p-8">
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl text-green-600 mb-3 font-fredoka font-bold">
                                100%
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">
                                Bahan Alami & Aman
                            </h3>
                            <p class="text-sm text-gray-600 font-nunito">
                                Diproduksi dengan bahan alami terbaik dan telah tersertifikasi aman
                            </p>
                        </div>
                    </div>
                </div>
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

            {{-- Image --}}
            <div class="rounded-lg overflow-hidden">
                <img src="{{ asset('images/employees.jpg') }}" alt="Gentle Baby"
                    class="w-screen h-auto object-cover transition-transform duration-300 hover:scale-110">
            </div>

        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Produk - Gentle Living')

@section('content')
    <!-- Hero Section Produk -->
    <section class="relative min-h-[60vh] bg-gradient-to-br from-[#B8E6D9] to-[#89CFC0] flex items-center justify-center">
        <div class="text-center px-6">
            <h1 style="font-family: 'Fredoka One', cursive;" 
                class="text-4xl lg:text-6xl text-[#6C63FF] mb-4">
                Gentle Baby
            </h1>
            <p style="font-family: 'Nunito', sans-serif;" 
               class="text-lg lg:text-xl text-gray-700 max-w-2xl mx-auto">
                Produk terpilih untuk kesehatan dan kenyamanan si kecil
            </p>
        </div>
    </section>

    <!-- Product Grid Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 mb-16">
                <!-- Product Items -->
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <div class="h-32 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Top Product</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <div class="h-32 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Top Product</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <div class="h-32 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Top Product</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <div class="h-32 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Top Product</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <div class="h-32 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Top Product</span>
                    </div>
                </div>
            </div>

            <!-- Product Benefits -->
            <div class="text-center mb-12">
                <p style="font-family: 'Nunito', sans-serif;" class="text-lg text-gray-700 mb-6">
                    Minyak Bayi Aromaterapi, kombinasi Essential Oil dan Sunflower Seed Oil untuk kesehatan ibu, bayi, dan balita.
                </p>
                
                <div class="space-y-3 max-w-2xl mx-auto">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-6 h-6 bg-[#528B89] rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">MINYAK PIJAT BAYI BALITA</span>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-6 h-6 bg-[#528B89] rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Bahan Alami, AMAN untuk BAYI mulai usia 0-4th</span>
                    </div>
                    
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-6 h-6 bg-[#528B89] rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">FREE Konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                    </div>
                </div>
            </div>

            <!-- Varian Section -->
            <div class="text-center mb-16">
                <h2 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-4xl text-[#6C63FF] mb-8">
                    Varian
                </h2>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Varian 1 -->
                    <div class="bg-gray-100 rounded-xl p-6 text-center">
                        <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2">
                            Cough n Flu
                        </h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Minyak oles flu, pilek untuk balita
                        </p>
                        <button class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-6 py-2 rounded-full text-sm font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all">
                            Beli
                        </button>
                    </div>
                    
                    <!-- Varian 2 -->
                    <div class="bg-gray-100 rounded-xl p-6 text-center">
                        <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2">
                            Deep Sleep
                        </h3>
                    </div>
                    
                    <!-- Varian 3 -->
                    <div class="bg-gray-100 rounded-xl p-6 text-center">
                        <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2">
                            Gimme Food
                        </h3>
                    </div>
                    
                    <!-- Varian 4 -->
                    <div class="bg-gray-100 rounded-xl p-6 text-center">
                        <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2">
                            Joy
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Produk Lainnya Section -->
            <div class="text-center mb-16">
                <h2 style="font-family: 'Fredoka One', cursive;" 
                    class="text-3xl lg:text-4xl text-[#6C63FF] mb-8">
                    Produk Lainnya
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <!-- Mamina ASI Booster -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-xl">
                            Mamina ASI Booster
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Pelancar ASI dari bahan Rempah Alami
                        </p>
                        <button class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-8 py-3 rounded-full font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all">
                            Lihat Produk
                        </button>
                    </div>
                    
                    <!-- Nyam! -->
                    <div class="bg-gray-100 rounded-xl p-6">
                        <div class="h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Top Product</span>
                        </div>
                        <h3 style="font-family: 'Nunito', sans-serif;" class="font-bold text-gray-800 mb-2 text-xl">
                            Nyam!
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Makanan Pendamping ASI (MPASI)
                        </p>
                        <button class="bg-gradient-to-r from-[#528B89] to-[#6C63FF] text-white px-8 py-3 rounded-full font-semibold hover:from-[#446b6a] hover:to-[#5a56d1] transition-all">
                            Lihat Produk
                        </button>
                    </div>
                </div>
            </div>

            <!-- Penilaian Produk Section -->
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
@endsection

@extends('layouts.ecommerce')

@section('title', 'Beranda - Gentle Living E-Commerce')

@section('content')
<div class="min-h-screen bg-gray-50">
    
    <!-- Carousel Banner Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Carousel Banner -->
            <div class="relative h-64 md:h-80 lg:h-96 bg-gray-200 rounded-lg overflow-hidden">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-gray-500">
                        <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-2xl font-bold font-nunito">CAROUSEL BANNER PRODUK</h2>
                    </div>
                </div>
                
                <!-- Carousel Navigation Dots -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <button class="w-3 h-3 bg-blue-600 rounded-full"></button>
                    <button class="w-3 h-3 bg-gray-300 rounded-full"></button>
                    <button class="w-3 h-3 bg-gray-300 rounded-full"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">
        
        <!-- Kategori Produk Section -->
        <section>
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 font-nunito">Kategori Produk</h2>
                <p class="text-gray-600 font-nunito">Temani setiap momen penting ibu dan anak dengan produk yang tepat.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kategori 1 -->
                <a href="{{ route('belanja.produk', ['category' => 'gentle-baby']) }}" class="group">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <div class="text-center text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <h3 class="text-lg font-semibold font-nunito group-hover:text-blue-600 transition-colors duration-200">Kategori 1</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Kategori 2 -->
                <a href="{{ route('belanja.produk', ['category' => 'aromatherapy']) }}" class="group">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <div class="text-center text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <h3 class="text-lg font-semibold font-nunito group-hover:text-blue-600 transition-colors duration-200">Kategori 2</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Kategori 3 -->
                <a href="{{ route('belanja.produk', ['category' => 'skincare']) }}" class="group">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <div class="text-center text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <h3 class="text-lg font-semibold font-nunito group-hover:text-blue-600 transition-colors duration-200">Kategori 3</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Produk Terlaris Section -->
        <section>
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 font-nunito">Produk Terlaris</h2>
                <p class="text-gray-600 font-nunito">Bukan hanya banyak diminati, tapi benar-benar dirasakan manfaatnya oleh para ibu setiap harinya.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($featuredProducts as $product)
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300 group">
                    <!-- Product Image -->
                    <div class="relative bg-gray-100 h-48 flex items-center justify-center">
                        @if($product->image)
                            <img src="{{ asset('images/products/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover">
                        @else
                            <div class="text-gray-400 text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                                <p class="text-xs">No Image</p>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 font-nunito line-clamp-2">{{ $product->name }}</h3>
                        <p class="text-xl font-bold text-blue-600 mb-3 font-nunito">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('produk.detail', $product->id) }}" class="flex-1 bg-blue-600 text-white text-center py-2 px-3 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito text-sm">
                                Lihat Produk
                            </a>
                            <button class="bg-gray-100 hover:bg-gray-200 p-2 rounded-lg transition-colors duration-200">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Cerita para Ibu Section -->
        <section>
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 font-nunito">Cerita para Ibu</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <blockquote class="text-gray-600 font-nunito leading-relaxed mb-4">
                                "Hari ini Fathiyah masuk angin, muntah, dan mual. Trus inget punya Tummy Calmer. Langsung dioles-oles ke perut Alhamdulillah langsung terkentut-kentut dan lega katanya. Makasih Gentle Baby!"
                            </blockquote>
                            <footer class="text-blue-600 font-semibold font-nunito">Mom Firda Amalia</footer>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <blockquote class="text-gray-600 font-nunito leading-relaxed mb-4">
                                "Hari ini Fathiyah masuk angin, muntah, dan mual. Trus inget punya Tummy Calmer. Langsung dioles-oles ke perut Alhamdulillah langsung terkentut-kentut dan lega katanya. Makasih Gentle Baby!"
                            </blockquote>
                            <footer class="text-blue-600 font-semibold font-nunito">Mom Firda Amalia</footer>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <blockquote class="text-gray-600 font-nunito leading-relaxed mb-4">
                                "Hari ini Fathiyah masuk angin, muntah, dan mual. Trus inget punya Tummy Calmer. Langsung dioles-oles ke perut Alhamdulillah langsung terkentut-kentut dan lega katanya. Makasih Gentle Baby!"
                            </blockquote>
                            <footer class="text-blue-600 font-semibold font-nunito">Mom Firda Amalia</footer>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Badges Section -->
        <section>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Percayakan pada EXPERT-nya!</h3>
                            <p class="text-sm text-gray-600 font-nunito">Dikembangkan oleh Dokter Anak, Dokter Kulit, dan Psikolog Anak</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Gratis Ongkir</h3>
                            <p class="text-sm text-gray-600 font-nunito">Pengiriman Express Seluruh Indonesia*</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Gratis Pengembalian</h3>
                            <p class="text-sm text-gray-600 font-nunito">Gratis Pengembalian Selama 7 Hari Kerja</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Hubungi Kami</h3>
                            <p class="text-sm text-gray-600 font-nunito">Whatsapp +62 821-3716-1033</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title', 'Gentle Living')
@section('content')
    {{-- Hero Section / beranda --}}
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
                    <h1 style="font-family: 'Fredoka One', cursive;"
                        class="text-3xl sm:text-4xl lg:text-5xl text-[#EF9F9B] lg:text-[#EF9F9B] mb-6 leading-tight drop-shadow-lg lg:drop-shadow-none">
                        Join Our Baby Wellness Affiliate Program
                    </h1>
                    <p style="font-family: 'Nunito', sans-serif;"
                        class="text-base lg:text-lg text-[#EF9F9B] lg:text-[#EF9F9B] mb-6 leading-relaxed drop-shadow lg:drop-shadow-none">
                        Kami sedang membuka program affiliate partnership untuk <br class="hidden sm:block" />
                        <span class="font-bold"> 3 produk best-seller </span> kami yang fokus pada wellness bunda & bayi.
                    </p>
                    <p id="content" style="font-family: 'Nunito', sans-serif;"
                        class="text-xl lg:text-2xl font-bold text-white lg:text-white mb-8 drop-shadow lg:drop-shadow-none">

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
@endsection

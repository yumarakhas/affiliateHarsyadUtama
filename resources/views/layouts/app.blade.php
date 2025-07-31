<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Halaman')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/carousel.js') }}"></script>
</head>

<body>
    {{-- Top Bar --}}
    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto py-3 lg:py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/top-bar.png') }}" alt="Gentle Living Logo" class="h-10 sm:h-12">
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button" id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#614DAC]">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu icon -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:items-center lg:space-x-8">
                    <nav class="flex space-x-6 xl:space-x-8" style="font-family: 'Fredoka One', cursive;">
                        <a href="#beranda"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Beranda</a>
                        <a href="#"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Produk</a>
                        <a href="#"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Belanja</a>
                        <a href="#"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Partner</a>
                        <a href="#"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Tentang
                            Kami</a>
                    </nav>

                    <!-- Admin Button -->
                    <a href="{{ route('login') }}" style="font-family: 'Nunito', sans-serif;"
                        class="font-medium px-4 lg:px-6 xl:px-8 py-2 border border-[#6C63FF] text-[#6C63FF] rounded-full hover:bg-[#6C63FF] hover:text-white transition-all duration-300 text-sm lg:text-base">
                        <span>Login</span>
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="lg:hidden hidden" id="mobile-menu">
                <div class="pt-4 pb-3 space-y-1 border-t border-gray-200 mt-4">
                    <nav class="space-y-1" style="font-family: 'Fredoka One', cursive;">
                        <a href="#beranda"
                            class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Beranda</a>
                        <a href="#products"
                            class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Produk</a>
                        <a href="#"
                            class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Belanja</a>
                        <a href="#"
                            class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Partner</a>
                        <a href="#"
                            class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Tentang
                            Kami</a>
                    </nav>
                    <div class="pt-4 border-t border-gray-200">
                        <a href="{{ route('login') }}" style="font-family: 'Nunito', sans-serif;"
                            class="block mx-3 px-4 py-2 text-center border border-[#6C63FF] text-[#6C63FF] rounded-full hover:bg-[#6C63FF] hover:text-white transition-all duration-300">
                            Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <div class="h-20"></div>

    {{-- Main Content  --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Halaman')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">

    <!-- Vite CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/topbar.js') }}"></script>
</head>

<body>
    {{-- Include Topbar --}}
    @include('layouts.topbar')

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <div class="h-20"></div>

    {{-- Main Content  --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')
</body>

</html>

<!-- Mobile Navigation Menu -->
<div class="lg:hidden hidden" id="mobile-menu">
    <div class="pt-4 pb-3 space-y-1 border-t border-gray-200 mt-4">
        <nav class="space-y-1 font-fredoka">>
            <a href="{{ route('beranda') }}"
                class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Beranda</a>

            <!-- Mobile Produk Dropdown dengan Tailwind CSS -->
            <div class="relative">
                <button id="mobile-produk-dropdown-btn"
                    class="w-full text-left px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200 flex items-center justify-between focus:outline-none group">
                    <span>Produk</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Mobile Dropdown Menu dengan Tailwind CSS -->
                <div id="mobile-produk-dropdown-menu"
                    class="hidden pl-6 space-y-1 bg-gray-50 rounded-lg mt-1 mr-3 transition-all duration-300">
                    <a href="{{ route('produk') }}?product=gentle-baby"
                        class="flex items-center px-3 py-2 text-sm text-gray-600 hover:text-[#614DAC] hover:bg-white rounded-md transition-all duration-200 group">
                        <span>Gentle Baby</span>
                    </a>
                    <a href="{{ route('produk') }}?product=mamina-asi-booster"
                        class="flex items-center px-3 py-2 text-sm text-gray-600 hover:text-[#614DAC] hover:bg-white rounded-md transition-all duration-200 group">
                        <span>Mamina ASI Booster</span>
                    </a>
                    <a href="{{ route('produk') }}?product=nyam"
                        class="flex items-center px-3 py-2 text-sm text-gray-600 hover:text-[#614DAC] hover:bg-white rounded-md transition-all duration-200 group">
                        <span>Nyam</span>
                    </a>
                </div>
            </div>

            <a href="#"
                class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Belanja</a>
            <a href="{{ route('partner') }}"
                class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Partner</a>
            <a href="{{ route('tentang-kami') }}"
                class="block px-3 py-2 text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Tentang
                Kami</a>
        </nav>
        <div class="pt-4 border-t border-gray-200">
            <a href="{{ route('login') }}" class="font-nunito
                            class="block mx-3 px-4 py-2
                text-center border border-[#6C63FF] text-[#6C63FF] rounded-full hover:bg-[#6C63FF] hover:text-white
                transition-all duration-300">
                Login
            </a>
        </div>
    </div>
</div>
</div>
</header>
</body>
</html>

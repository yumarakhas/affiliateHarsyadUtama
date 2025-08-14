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
                    <nav class="flex space-x-6 xl:space-x-8 font-fredoka">>
                        <a href="{{ route('beranda') }}"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Beranda</a>

                        <!-- Produk Dropdown dengan Tailwind CSS -->
                        <div class="relative group">
                            <button id="produk-dropdown-btn"
                                class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200 flex items-center space-x-1 focus:outline-none">
                                <span>Produk</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <!-- Dropdown Menu dengan Tailwind CSS -->
                            <div id="produk-dropdown-menu"
                                class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                                <div class="py-3">
                                    <a href="{{ route('produk') }}?product=gentle-baby"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-purple-50 hover:to-blue-50 hover:text-[#614DAC] transition-all duration-200 group/item">
                                        <span class="font-medium">Gentle Baby</span>
                                        <div
                                            class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                            <svg class="w-4 h-4 text-[#614DAC]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('produk') }}?product=mamina-asi-booster"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-purple-50 hover:to-blue-50 hover:text-[#614DAC] transition-all duration-200 group/item">
                                        <span class="font-medium">Mamina ASI Booster</span>
                                        <div
                                            class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                            <svg class="w-4 h-4 text-[#614DAC]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('produk') }}?product=nyam"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-purple-50 hover:to-blue-50 hover:text-[#614DAC] transition-all duration-200 group/item">
                                        <span class="font-medium">Nyam</span>
                                        <div
                                            class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                            <svg class="w-4 h-4 text-[#614DAC]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Belanja</a>
                        <a href="{{ route('partner') }}"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Partner</a>
                        <a href="{{ route('tentang-kami') }}"
                            class="text-sm xl:text-base text-[#444444]/50 hover:text-[#614DAC] transition-colors duration-200">Tentang
                            Kami</a>
                    </nav>

                    <!-- Admin Button -->
                    <a href="{{ route('login') }}" class="font-nunito
                        class="font-medium px-4
                        lg:px-6 xl:px-8 py-2 border border-[#6C63FF] text-[#6C63FF] rounded-full hover:bg-[#6C63FF]
                        hover:text-white transition-all duration-300 text-sm lg:text-base">
                        <span>Login</span>
                    </a>
                </div>
            </div>

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
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180"
                                    fill="currentColor" viewBox="0 0 20 20">
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
                            class="block
                            mx-3 px-4 py-2 text-center border border-[#6C63FF] text-[#6C63FF] rounded-full
                            hover:bg-[#6C63FF] hover:text-white transition-all duration-300">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <!-- <div class="h-20"></div> -->

    {{-- Main Content  --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

    <!-- Mobile Menu Toggle Script dengan Tailwind CSS -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Desktop dropdown functionality dengan Tailwind CSS
        const produkDropdownBtn = document.getElementById('produk-dropdown-btn');
        const produkDropdownMenu = document.getElementById('produk-dropdown-menu');

        if (produkDropdownBtn && produkDropdownMenu) {
            let timeoutId;

            // Show dropdown on hover
            produkDropdownBtn.parentElement.addEventListener('mouseenter', function() {
                clearTimeout(timeoutId);
                produkDropdownMenu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                produkDropdownMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
            });

            // Hide dropdown on mouse leave with delay
            produkDropdownBtn.parentElement.addEventListener('mouseleave', function() {
                timeoutId = setTimeout(() => {
                    produkDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    produkDropdownMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                }, 150);
            });

            // Toggle dropdown on button click (for mobile/touch devices)
            produkDropdownBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const isVisible = produkDropdownMenu.classList.contains('opacity-100');

                if (isVisible) {
                    produkDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    produkDropdownMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                } else {
                    produkDropdownMenu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                    produkDropdownMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!produkDropdownBtn.parentElement.contains(e.target)) {
                    produkDropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    produkDropdownMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                }
            });
        }

        // Mobile dropdown functionality dengan Tailwind CSS
        const mobileProdukDropdownBtn = document.getElementById('mobile-produk-dropdown-btn');
        const mobileProdukDropdownMenu = document.getElementById('mobile-produk-dropdown-menu');

        if (mobileProdukDropdownBtn && mobileProdukDropdownMenu) {
            mobileProdukDropdownBtn.addEventListener('click', function(e) {
                e.preventDefault();
                mobileProdukDropdownMenu.classList.toggle('hidden');

                // Rotate arrow dengan smooth transition
                const arrow = mobileProdukDropdownBtn.querySelector('svg');
                arrow.classList.toggle('rotate-180');

                // Add smooth slide animation
                if (!mobileProdukDropdownMenu.classList.contains('hidden')) {
                    mobileProdukDropdownMenu.style.maxHeight = mobileProdukDropdownMenu.scrollHeight + 'px';
                } else {
                    mobileProdukDropdownMenu.style.maxHeight = '0px';
                }
            });
        }
    </script>
</body>

</html>

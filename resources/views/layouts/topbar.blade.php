<header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto py-3 lg:py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('beranda') }}" class="flex items-center">
                    <img src="{{ asset('images/top-bar.png') }}" alt="Gentle Living Logo" class="h-10 sm:h-12">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button type="button" id="mobile-menu-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand transition-all duration-200">
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
                <nav class="flex space-x-6 xl:space-x-8 font-nunito">
                    <a href="{{ route('beranda') }}"
                        class="text-sm xl:text-base {{ Route::currentRouteName() == 'beranda' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                        Beranda
                    </a>

                    <!-- Produk Dropdown -->
                    <div class="relative group">
                        <button id="produk-dropdown-btn"
                            class="text-sm xl:text-base {{ Route::currentRouteName() == 'produk' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200 flex items-center space-x-1 focus:outline-none">
                            <span>Produk</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="produk-dropdown-menu"
                            class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="py-3">
                                <a href="{{ route('produk') }}?product=gentle-baby"
                                    class="flex items-center px-4 py-3 text-sm {{ request('product') == 'gentle-baby' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-700 hover:bg-blue-600 hover:text-white' }} transition-all duration-200 group/item">
                                    <span class="font-medium">Gentle Baby</span>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="{{ route('produk') }}?product=mamina-asi-booster"
                                    class="flex items-center px-4 py-3 text-sm {{ request('product') == 'mamina-asi-booster' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-700 hover:bg-blue-600 hover:text-white' }} transition-all duration-200 group/item">
                                    <span class="font-medium">Mamina ASI Booster</span>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="{{ route('produk') }}?product=nyam"
                                    class="flex items-center px-4 py-3 text-sm {{ request('product') == 'nyam' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-700 hover:bg-blue-600 hover:text-white' }} transition-all duration-200 group/item">
                                    <span class="font-medium">Nyam</span>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('belanja') }}" target="_blank" rel="noopener noreferrer"
                        class="text-sm xl:text-base text-gray-600 hover:text-blue-600 transition-colors duration-200">
                        Belanja
                    </a>
                    <a href="{{ route('partner') }}"
                        class="text-sm xl:text-base {{ Route::currentRouteName() == 'partner' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                        Partner
                    </a>
                    <a href="{{ route('tentang-kami') }}"
                        class="text-sm xl:text-base {{ Route::currentRouteName() == 'tentang-kami' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                        Tentang Kami
                    </a>
                </nav>

                <!-- Login Button -->
                <a href="{{ route('login') }}"
                    class="px-6 py-2 text-sm lg:text-base font-nunito font-medium text-blue-600 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105">
                    Login
                </a>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="pt-4 pb-3 space-y-1 border-t border-gray-200 mt-4">
                <nav class="space-y-1 font-nunito">
                    <a href="{{ route('beranda') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'beranda' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">
                        Beranda
                    </a>

                    <!-- Mobile Produk Dropdown -->
                    <div class="relative">
                        <button id="mobile-produk-dropdown-btn"
                            class="w-full text-left px-3 py-2 text-base {{ Route::currentRouteName() == 'produk' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 flex items-center justify-between focus:outline-none group">
                            <span>Produk</span>
                            <svg class="w-4 h-4 transition-transform duration-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Mobile Dropdown Menu -->
                        <div id="mobile-produk-dropdown-menu"
                            class="hidden pl-6 space-y-1 bg-gray-50 rounded-lg mt-1 mr-3 transition-all duration-300 overflow-hidden"
                            style="max-height: 0px;">
                            <a href="{{ route('produk') }}?product=gentle-baby"
                                class="flex items-center px-3 py-2 text-sm {{ request('product') == 'gentle-baby' ? 'text-blue-600 font-bold bg-white' : 'text-gray-600' }} hover:text-blue-600 hover:bg-white rounded-md transition-all duration-200">
                                <span>Gentle Baby</span>
                            </a>
                            <a href="{{ route('produk') }}?product=mamina-asi-booster"
                                class="flex items-center px-3 py-2 text-sm {{ request('product') == 'mamina-asi-booster' ? 'text-blue-600 font-bold bg-white' : 'text-gray-600' }} hover:text-blue-600 hover:bg-white rounded-md transition-all duration-200">
                                <span>Mamina ASI Booster</span>
                            </a>
                            <a href="{{ route('produk') }}?product=nyam"
                                class="flex items-center px-3 py-2 text-sm {{ request('product') == 'nyam' ? 'text-blue-600 font-bold bg-white' : 'text-gray-600' }} hover:text-blue-600 hover:bg-white rounded-md transition-all duration-200">
                                <span>Nyam</span>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('belanja') }}" target="_blank" rel="noopener noreferrer"
                        class="block px-3 py-2 text-base text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Belanja
                    </a>
                    <a href="{{ route('partner') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'partner' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Partner
                    </a>
                    <a href="{{ route('tentang-kami') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'tentang-kami' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Tentang Kami
                    </a>
                </nav>

                <div class="pt-4 border-t border-gray-200">
                    <a href="{{ route('login') }}"
                        class="block mx-3 px-6 py-3 text-center text-blue-600 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out font-nunito font-medium">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

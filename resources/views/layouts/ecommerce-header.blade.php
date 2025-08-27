<header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto py-3 lg:py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('beranda') }}" class="flex items-center">
                    <img src="{{ asset('images/top-bar.png') }}" alt="Gentle Living Logo" class="h-10 sm:h-12">
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden lg:flex lg:items-center lg:space-x-8 font-nunito">
                <a href="{{ route('belanja') }}"
                    class="text-sm xl:text-base {{ Route::currentRouteName() == 'belanja' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                    Beranda
                </a>
                <a href="{{ route('belanja.produk') }}"
                    class="text-sm xl:text-base {{ Route::currentRouteName() == 'belanja.produk' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                    Produk
                </a>
                <a href="{{ route('belanja.riwayat') }}"
                    class="text-sm xl:text-base {{ Route::currentRouteName() == 'belanja.riwayat' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                    Riwayat
                </a>
                <a href="{{ route('tentang-kami') }}"
                    class="text-sm xl:text-base {{ Route::currentRouteName() == 'tentang-kami' ? 'text-blue-600 font-bold' : 'text-gray-600' }} hover:text-blue-600 transition-colors duration-200">
                    Tentang
                </a>
            </nav>

            <!-- Search and Actions -->
            <div class="hidden lg:flex lg:items-center lg:space-x-4">
                <!-- Search Bar -->
                <div class="relative">
                    <input type="text" 
                           placeholder="Search products..." 
                           class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Login Button -->
                <a href="{{ route('login') }}"
                    class="px-6 py-2 text-sm lg:text-base font-nunito font-medium text-blue-600 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105">
                    Login
                </a>

                <!-- Register Button -->
                <a href="{{ route('register') }}"
                    class="px-6 py-2 text-sm lg:text-base font-nunito font-medium text-white bg-blue-600 border border-blue-600 rounded-full hover:bg-blue-700 hover:border-blue-700 transition-all duration-300 ease-in-out transform hover:scale-105">
                    Daftar
                </a>

                <!-- Cart Icon -->
                <a href="{{ route('belanja.keranjang') }}" class="relative p-2 text-gray-600 hover:text-blue-600 transition-colors duration-200">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                    </svg>
                    <!-- Cart badge -->
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button type="button" id="mobile-menu-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand transition-all duration-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="pt-4 pb-3 space-y-1 border-t border-gray-200 mt-4">
                <!-- Mobile Search -->
                <div class="px-3 mb-4">
                    <div class="relative">
                        <input type="text" 
                               placeholder="Search products..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <nav class="space-y-1 font-nunito">
                    <a href="{{ route('belanja') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'belanja' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Beranda
                    </a>
                    <a href="{{ route('belanja.produk') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'belanja.produk' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Produk
                    </a>
                    <a href="{{ route('belanja.riwayat') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'belanja.riwayat' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Riwayat
                    </a>
                    <a href="{{ route('tentang-kami') }}"
                        class="block px-3 py-2 text-base {{ Route::currentRouteName() == 'tentang-kami' ? 'text-blue-600 font-bold bg-blue-50' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                        Tentang
                    </a>
                </nav>

                <div class="pt-4 border-t border-gray-200 flex space-x-3">
                    <a href="{{ route('login') }}"
                        class="flex-1 text-center px-6 py-3 text-blue-600 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out font-nunito font-medium">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="flex-1 text-center px-6 py-3 text-white bg-blue-600 border border-blue-600 rounded-full hover:bg-blue-700 hover:border-blue-700 transition-all duration-300 ease-in-out font-nunito font-medium">
                        Daftar
                    </a>
                    <a href="{{ route('belanja.keranjang') }}" class="px-4 py-3 bg-gray-100 rounded-full relative">
                        <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

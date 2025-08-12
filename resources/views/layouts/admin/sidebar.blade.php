{{-- sidebar --}}

<!-- filepath: c:\laragon\www\affiliateHarsyadUtama\resources\views\layouts\admin\sidebar.blade.php -->
<!-- Sidebar -->
<div id="sidebar"
    class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">

    <!-- Close Button - Top Right Corner -->
    <button id="sidebar-close-top"
        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-full p-2 transition-colors duration-200 z-10">
        <x-heroicon-s-x-mark class="w-5 h-5" />
    </button>

    <!-- Sidebar Header -->
    <div class="flex items-center justify-between h-20 px-6 border-b border-gray-100">
        <!-- Logo/Title -->
        <div class="sidebar-logo flex items-center">
            <h2 class="sidebar-text text-xl font-bold text-[#528B89]" style="font-family: 'Nunito', sans-serif;">
                Pengaturan
            </h2>
        </div>

        <!-- Close button for mobile -->
        <button id="sidebar-close" class="lg:hidden text-gray-500 hover:text-gray-700 flex-shrink-0">
            <x-heroicon-s-x-mark class="w-6 h-6" />
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="mt-6 px-4">
        <ul class="space-y-3">
            <!-- Beranda -->
            <li class="relative">
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200">
                    <x-heroicon-s-home class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Beranda</span>

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Beranda
                    </div>
                </a>
            </li>

            <!-- Produk -->
            <li class="relative">
                <a href="{{ route('admin.products.index') }}"
                    class="nav-item group flex items-center px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 {{ request()->routeIs('admin.products.*') ? 'bg-[#528B89] text-white' : '' }}">
                    <x-heroicon-s-cube class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Produk</span>

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Produk
                    </div>
                </a>
            </li>

            <!-- Partner -->
            <li class="relative">
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200">
                    <x-heroicon-s-building-office class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Partner</span>

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Partner
                    </div>
                </a>
            </li>

            <!-- Tentang Kami -->
            <li class="relative">
                <a href="#"
                    class="nav-item group flex items-center px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200">
                    <x-heroicon-s-information-circle class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Tentang
                        Kami</span>

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Tentang Kami
                    </div>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout Button -->
    <div class="logout-section absolute bottom-6 left-4 right-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="logout-btn group w-full flex items-center px-4 py-3 text-red-600 hover:text-red-700 hover:bg-red-50 transition-all duration-200">
                <x-heroicon-s-arrow-left-on-rectangle class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Logout</span>

                <!-- Tooltip for collapsed state -->
                <div
                    class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                    Logout
                </div>
            </button>
        </form>
    </div>
</div>

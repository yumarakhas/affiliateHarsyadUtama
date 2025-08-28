{{-- sidebar.blade.php --}}
<!-- Mobile Overlay -->
<div id="sidebar-overlay"
    class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden transition-opacity duration-300 ease-in-out"></div>

<!-- Sidebar -->
<div id="sidebar"
    class="sidebar-mini fixed top-20 left-0 h-[calc(100vh-5rem)] w-16 bg-brand-500 shadow-lg transform lg:transform-none -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out z-40 overflow-hidden">

    <!-- Navigation Menu -->
    <nav class="mt-2 px-2 pb-16 overflow-y-auto h-full">
        <ul class="space-y-1">
            <!-- Homepage -->
            <li class="relative">
                <a href="{{ route('admin.view-data') }}" data-tooltip="Homepage"
                    class="nav-item group flex items-center justify-center lg:justify-start px-3 py-3 rounded-lg transition-all duration-200 {{ request()->routeIs('admin.view-data') ? 'bg-white bg-opacity-20 text-white' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                    <x-heroicon-s-chart-bar class="nav-icon w-5 h-5 flex-shrink-0" />
                    <span class="sidebar-text font-medium transition-all duration-200 ml-3 hidden"
                        style="font-family: 'Nunito', sans-serif;">Homepage</span>
                </a>
            </li>

            {{-- Data Penjualan --}}
            <li class="relative">
                <a href="#" data-tooltip="Data Penjualan"
                    class="nav-item group flex items-center justify-center lg:justify-start px-3 py-3 rounded-lg transition-all duration-200 {{ request()->routeIs('admin.data-penjualan') ? 'bg-white bg-opacity-20 text-white' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                    <x-heroicon-s-chart-pie class="nav-icon w-5 h-5 flex-shrink-0" />
                    <span class="sidebar-text font-medium transition-all duration-200 ml-3 hidden"
                        style="font-family: 'Nunito', sans-serif;">Data Penjualan</span>
                </a>
            </li>

            <!-- Pengaturan (Settings) with Dropdown -->
            <li class="relative">
                <button onclick="toggleSubmenu('pengaturan')" data-tooltip="Pengaturan"
                    class="nav-item group w-full flex items-center justify-center lg:justify-between px-3 py-3 rounded-lg transition-all duration-200 
                    {{ request()->routeIs('admin.products.*') ||
                    request()->routeIs('beranda') ||
                    request()->routeIs('partner') ||
                    request()->routeIs('tentang-kami')
                        ? 'bg-white bg-opacity-20 text-white'
                        : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                    <div class="flex items-center">
                        <x-heroicon-s-cog-6-tooth class="nav-icon w-5 h-5 flex-shrink-0" />
                        <span class="sidebar-text font-medium transition-all duration-200 ml-3 hidden"
                            style="font-family: 'Nunito', sans-serif;">Pengaturan</span>
                    </div>
                    <x-heroicon-s-chevron-down class="sidebar-text w-4 h-4 transition-transform duration-200 hidden"
                        id="pengaturan-chevron" />
                </button>

                <!-- Submenu -->
                <ul id="pengaturan-submenu"
                    class="sidebar-text ml-8 mt-2 space-y-2 overflow-hidden transition-all duration-300 max-h-0">
                    <!-- Beranda -->
                    <li>
                        <a href="#"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('beranda') ? 'bg-white bg-opacity-30 text-white font-medium' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                            <x-heroicon-s-home class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Beranda</span>
                        </a>
                    </li>

                    <!-- Produk -->
                    <li>
                        <a href="#"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('admin.products.*') ? 'bg-white bg-opacity-30 text-white font-medium' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                            <x-heroicon-s-cube class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Produk</span>
                        </a>
                    </li>

                    <!-- Partner -->
                    <li>
                        <a href="#"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('partner') ? 'bg-white bg-opacity-30 text-white font-medium' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                            <x-heroicon-s-building-office class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Partner</span>
                        </a>
                    </li>

                    <!-- Tentang Kami -->
                    <li>
                        <a href="#"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('tentang-kami') ? 'bg-white bg-opacity-30 text-white font-medium' : 'text-gray-300 hover:bg-white hover:bg-opacity-10 hover:text-white' }}">
                            <x-heroicon-s-information-circle class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Tentang Kami</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Logout Button -->
    <div class="logout-section absolute bottom-4 left-2 right-2">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" data-tooltip="Logout"
                class="logout-btn group w-full flex items-center justify-center lg:justify-start px-3 py-3 text-red-300 hover:text-red-200 hover:bg-red-500 hover:bg-opacity-20 transition-all duration-200 rounded-lg">
                <x-heroicon-s-arrow-left-on-rectangle class="nav-icon w-5 h-5 flex-shrink-0" />
                <span class="sidebar-text font-medium transition-all duration-200 ml-3 hidden"
                    style="font-family: 'Nunito', sans-serif;">Logout</span>
            </button>
        </form>
    </div>
</div>

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
                Admin Panel
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
            <!-- Homepage -->
            <li class="relative">
                <a href="{{ route('admin.view-data') }}"
                    class="nav-item group flex items-center px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 {{ request()->routeIs('admin.view-data') ? 'bg-[#528B89] text-white' : '' }}">
                    <x-heroicon-s-chart-bar class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Homepage</span>

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Homepage
                    </div>
                </a>
            </li>

            <!-- Pengaturan (Settings) with Dropdown -->
            <li class="relative">
                <button onclick="toggleSubmenu('pengaturan')"
                    class="nav-item group w-full flex items-center justify-between px-4 py-3 rounded-xl transition-all duration-200 
                    {{ request()->routeIs('admin.products.*') || request()->routeIs('beranda') || request()->routeIs('partner') || request()->routeIs('tentang-kami') 
                        ? 'bg-[#528B89] text-white' 
                        : 'text-gray-700 hover:bg-gray-50' }}">
                    <div class="flex items-center">
                        <x-heroicon-s-cog-6-tooth class="nav-icon w-5 h-5 mr-3 flex-shrink-0" />
                        <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Pengaturan</span>
                    </div>
                    <x-heroicon-s-chevron-down class="sidebar-text w-4 h-4 transition-transform duration-200" id="pengaturan-chevron" />

                    <!-- Tooltip for collapsed state -->
                    <div
                        class="nav-tooltip absolute left-16 bg-gray-800 text-white px-2 py-1 rounded text-sm opacity-0 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50">
                        Pengaturan
                    </div>
                </button>

                <!-- Submenu -->
                <ul id="pengaturan-submenu" class="sidebar-text ml-8 mt-2 space-y-2 overflow-hidden transition-all duration-300 max-h-0">
                    <!-- Beranda -->
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('beranda') ? 'bg-[#528B89] text-white' : 'text-gray-600 hover:bg-gray-50 hover:text-[#528B89]' }}">
                            <x-heroicon-s-home class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Beranda</span>
                        </a>
                    </li>

                    <!-- Produk -->
                    <li>
                        <a href="{{ route('admin.products.index') }}"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('admin.products.*') ? 'bg-[#528B89] text-white' : 'text-gray-600 hover:bg-gray-50 hover:text-[#528B89]' }}">
                            <x-heroicon-s-cube class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Produk</span>
                        </a>
                    </li>

                    <!-- Partner -->
                    <li>
                        <a href="{{ route('partner') }}"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('partner') ? 'bg-[#528B89] text-white' : 'text-gray-600 hover:bg-gray-50 hover:text-[#528B89]' }}">
                            <x-heroicon-s-building-office class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Partner</span>
                        </a>
                    </li>

                    <!-- Tentang Kami -->
                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="group flex items-center px-4 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('tentang-kami') ? 'bg-[#528B89] text-white' : 'text-gray-600 hover:bg-gray-50 hover:text-[#528B89]' }}">
                            <x-heroicon-s-information-circle class="w-4 h-4 mr-3 flex-shrink-0" />
                            <span style="font-family: 'Nunito', sans-serif;">Tentang Kami</span>
                        </a>
                    </li>
                </ul>
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

<script>
function toggleSubmenu(menuId) {
    const submenu = document.getElementById(menuId + '-submenu');
    const chevron = document.getElementById(menuId + '-chevron');
    
    if (submenu.style.maxHeight === '0px' || submenu.style.maxHeight === '') {
        // Open submenu
        submenu.style.maxHeight = submenu.scrollHeight + 'px';
        chevron.style.transform = 'rotate(180deg)';
    } else {
        // Close submenu
        submenu.style.maxHeight = '0px';
        chevron.style.transform = 'rotate(0deg)';
    }
}

// Close submenus when sidebar is collapsed
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                if (sidebar.classList.contains('sidebar-collapsed')) {
                    // Close all submenus when collapsed
                    const submenus = document.querySelectorAll('[id$="-submenu"]');
                    const chevrons = document.querySelectorAll('[id$="-chevron"]');
                    
                    submenus.forEach(submenu => {
                        submenu.style.maxHeight = '0px';
                    });
                    
                    chevrons.forEach(chevron => {
                        chevron.style.transform = 'rotate(0deg)';
                    });
                }
            }
        });
    });
    
    observer.observe(sidebar, { attributes: true });
    
    // Auto-open submenu if any child route is active
    @if(request()->routeIs('admin.products.*') || request()->routeIs('beranda') || request()->routeIs('partner') || request()->routeIs('tentang-kami'))
        const submenu = document.getElementById('pengaturan-submenu');
        const chevron = document.getElementById('pengaturan-chevron');
        
        if (submenu && chevron) {
            submenu.style.maxHeight = submenu.scrollHeight + 'px';
            chevron.style.transform = 'rotate(180deg)';
        }
    @endif
});
</script>

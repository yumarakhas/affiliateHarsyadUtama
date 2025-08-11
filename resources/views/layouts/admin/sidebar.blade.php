{{-- sidebar --}}

<!-- filepath: c:\laragon\www\affiliateHarsyadUtama\resources\views\layouts\admin\sidebar.blade.php -->
<!-- Sidebar -->
<div id="sidebar"
    class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">

    <!-- Close Button - Top Right Corner -->
    <button id="sidebar-close-top"
        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-full p-2 transition-colors duration-200 z-10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Sidebar Header -->
    <div class="flex items-center justify-between h-16 px-4 mt-7 border-gray-200">
        <!-- Logo - Full version (expanded state) -->
        <div class="sidebar-logo flex items-center lg:py-4 px-4 sm:px-6 lg:px-8">
            <img src="{{ asset('images/logo.png') }}" alt="Gentle Living" class="h-10 sm:h-12 ">
        </div>

        <!-- Close button for mobile (hidden, replaced by top button) -->
        <button id="sidebar-close" class="hidden lg:hidden text-gray-500 hover:text-gray-700 flex-shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="mt-4 px-4">
        <ul class="space-y-2">
            <!-- Dashboard -->
            <li class="relative">
                <a href="{{ route('admin.view-data') }}"
                    class="nav-item flex items-center px-4 py-3 text-gray-700 rounded-lg transition-colors duration-200 {{ request()->routeIs('admin.view-data') ? 'active' : '' }}">
                    <svg class="nav-icon w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Data
                        Affiliate</span>

                    <!-- Tooltip for collapsed state -->
                    <div class="nav-tooltip">Data Affiliate</div>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout Button -->
    <div class="logout-section absolute bottom-4 left-4 right-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="logout-btn w-full flex items-center px-4 py-3 text-red-600 rounded-lg transition-colors duration-200">
                <svg class="nav-icon w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                <span class="sidebar-text font-medium" style="font-family: 'Nunito', sans-serif;">Logout</span>

                <!-- Tooltip for collapsed state -->
                <div class="nav-tooltip">Logout</div>
            </button>
        </form>
    </div>
</div>

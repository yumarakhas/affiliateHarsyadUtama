{{-- sidebar --}}
<!-- Mobile Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

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
                    <x-heroicon-s-chevron-down class="sidebar-text w-4 h-4 transition-all duration-200 hidden"
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

<!-- Main Content Area -->
<div id="main-content" class="main-content transition-all duration-300 ease-in-out pt-20 lg:ml-16">
    <!-- Your main content goes here -->
    @yield('content')
</div>

<style>
    /* Hamburger Button Styling */
    .hamburger-btn {
        transition: all 0.2s ease;
    }

    .hamburger-btn:hover {
        background-color: rgba(243, 244, 246, 1);
    }

    /* Hamburger Lines Animation */
    .hamburger-line {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: center;
    }

    /* Mini Sidebar Tooltips */
    .sidebar-mini .nav-item[data-tooltip]:hover::after {
        content: attr(data-tooltip);
        position: absolute;
        left: 70px;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(31, 41, 55, 0.95);
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 12px;
        white-space: nowrap;
        z-index: 1000;
        pointer-events: none;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        opacity: 1;
        visibility: visible;
    }

    /* Hide tooltips on mobile */
    @media (max-width: 1023px) {
        .sidebar-mini .nav-item[data-tooltip]:hover::after {
            display: none;
        }
    }

    /* Sidebar transitions */
    #sidebar {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }

    /* Main content adjustment */
    #main-content {
        transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Nav item and text transitions */
    .nav-item,
    .sidebar-text {
        transition: all 0.3s ease;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const hamburgerLines = hamburgerBtn.querySelectorAll('.hamburger-line');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        let isDesktopExpanded = false;
        let isMobileOpen = false;

        // Initialize sidebar state
        initializeSidebar();

        function initializeSidebar() {
            if (window.innerWidth >= 1024) {
                // Desktop: Start with mini sidebar
                setMiniSidebar();
            } else {
                // Mobile: Start with hidden sidebar
                setMobileHidden();
            }
        }

        // Hamburger button click handler
        hamburgerBtn.addEventListener('click', function() {
            if (window.innerWidth >= 1024) {
                // Desktop: Toggle between mini and full sidebar
                isDesktopExpanded = !isDesktopExpanded;

                if (isDesktopExpanded) {
                    setFullSidebar();
                } else {
                    setMiniSidebar();
                }
            } else {
                // Mobile: Toggle sidebar
                isMobileOpen = !isMobileOpen;

                if (isMobileOpen) {
                    setMobileOpen();
                } else {
                    setMobileHidden();
                }
            }
        });

        // Overlay click to close mobile
        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', function() {
                isMobileOpen = false;
                setMobileHidden();
            });
        }

        // Sidebar state functions
        function setMiniSidebar() {
            sidebar.className =
                'sidebar-mini fixed top-20 left-0 h-[calc(100vh-5rem)] w-16 bg-brand-500 shadow-lg transition-all duration-300 ease-in-out z-40 overflow-hidden';
            mainContent.style.marginLeft = '4rem';

            // Hide text elements
            document.querySelectorAll('.sidebar-text').forEach(el => {
                el.classList.add('hidden');
            });

            // Center nav items
            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('lg:justify-start', 'lg:justify-between');
                el.classList.add('justify-center');
            });
        }

        function setFullSidebar() {
            sidebar.className =
                'sidebar-full fixed top-20 left-0 h-[calc(100vh-5rem)] w-64 bg-brand-500 shadow-lg transition-all duration-300 ease-in-out z-40';
            mainContent.style.marginLeft = '16rem';

            // Show text elements
            setTimeout(() => {
                document.querySelectorAll('.sidebar-text').forEach(el => {
                    el.classList.remove('hidden');
                });

                // Restore nav items layout
                document.querySelectorAll('.nav-item').forEach(el => {
                    el.classList.remove('justify-center');
                    if (el.classList.contains('w-full')) {
                        el.classList.add('lg:justify-between');
                    } else {
                        el.classList.add('lg:justify-start');
                    }
                });
            }, 150);
        }

        function setMobileHidden() {
            sidebar.classList.add('-translate-x-full');
            mainContent.style.marginLeft = '0';

            if (sidebarOverlay) {
                sidebarOverlay.classList.add('hidden');
            }

            document.body.classList.remove('overflow-hidden');
        }

        function setMobileOpen() {
            sidebar.classList.remove('-translate-x-full');
            sidebar.className =
                'sidebar-full fixed top-20 left-0 h-[calc(100vh-5rem)] w-64 bg-brand-500 shadow-lg transform translate-x-0 transition-all duration-300 ease-in-out z-40';
            mainContent.style.marginLeft = '0';

            // Show overlay
            if (sidebarOverlay) {
                sidebarOverlay.classList.remove('hidden');
            }

            // Show text elements
            document.querySelectorAll('.sidebar-text').forEach(el => {
                el.classList.remove('hidden');
            });

            // Restore layout for mobile
            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('justify-center');
                if (el.classList.contains('w-full')) {
                    el.classList.add('justify-between');
                } else {
                    el.classList.add('justify-start');
                }
            });

            document.body.classList.add('overflow-hidden');
        }

        // Hamburger animation functions
        function animateHamburgerToX() {
            if (hamburgerLines.length >= 3) {
                hamburgerLines[0].style.transform = 'rotate(45deg) translate(2px, 2px)';
                hamburgerLines[1].style.opacity = '0';
                hamburgerLines[1].style.transform = 'scale(0)';
                hamburgerLines[2].style.transform = 'rotate(-45deg) translate(2px, -2px)';
            }
        }

        function animateHamburgerToLines() {
            if (hamburgerLines.length >= 3) {
                hamburgerLines[0].style.transform = 'rotate(0deg) translate(0, 0)';
                hamburgerLines[1].style.opacity = '1';
                hamburgerLines[1].style.transform = 'scale(1)';
                hamburgerLines[2].style.transform = 'rotate(0deg) translate(0, 0)';
            }
        }

        // Handle window resize
        window.addEventListener('resize', function() {
            initializeSidebar();
            isDesktopExpanded = false;
            isMobileOpen = false;
        });

        // ESC key to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (window.innerWidth >= 1024 && isDesktopExpanded) {
                    isDesktopExpanded = false;
                    setMiniSidebar();
                    animateHamburgerToLines();
                } else if (window.innerWidth < 1024 && isMobileOpen) {
                    isMobileOpen = false;
                    setMobileHidden();
                    animateHamburgerToLines();
                }
            }
        });
    });

    // Existing submenu toggle function
    function toggleSubmenu(submenuId) {
        const submenu = document.getElementById(submenuId + '-submenu');
        const chevron = document.getElementById(submenuId + '-chevron');

        if (submenu && chevron) {
            if (submenu.style.maxHeight === '0px' || submenu.style.maxHeight === '') {
                submenu.style.maxHeight = submenu.scrollHeight + 'px';
                chevron.style.transform = 'rotate(180deg)';
            } else {
                submenu.style.maxHeight = '0px';
                chevron.style.transform = 'rotate(0deg)';
            }
        }
    }
</script>

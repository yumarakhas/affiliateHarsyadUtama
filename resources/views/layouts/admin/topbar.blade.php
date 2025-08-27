{{-- topbar --}}
<header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="flex justify-between items-center py-3 lg:py-4">
        <!-- Left Side: Hamburger + Logo -->
        <div class="flex items-center">
            <!-- Hamburger Button - Aligned with sidebar -->
            <div class="w-16 flex justify-center">
                <button id="hamburger-btn" class="p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <div class="hamburger-icon w-5 h-5 flex flex-col justify-center items-center">
                        <span class="hamburger-line block w-5 h-0.5 bg-gray-600 rounded transition-all duration-300 mb-1"></span>
                        <span class="hamburger-line block w-5 h-0.5 bg-gray-600 rounded transition-all duration-300 mb-1"></span>
                        <span class="hamburger-line block w-5 h-0.5 bg-gray-600 rounded transition-all duration-300"></span>
                    </div>
                </button>
            </div>

            <!-- Logo -->
            <div class="flex-shrink-0 ml-2">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/top-bar.png') }}" alt="Gentle Living Logo" class="h-10 sm:h-12">
                </a>
            </div>
        </div>

        <!-- User Info -->
        <div class="flex items-center space-x-3 sm:space-x-4 px-4 sm:px-6 lg:px-8">
            <span class="font-nunito text-xs sm:text-sm text-gray-600 hidden sm:block">
                Halo, {{ Auth::user()->name }}
            </span>
        </div>
    </div>
</header>
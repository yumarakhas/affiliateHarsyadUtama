{{-- resources/views/layouts/admin/topbar.blade.php --}}
<header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="flex justify-between items-center py-3 lg:py-4">
        <!-- Left Side: Hamburger + Logo -->
        <div class="flex items-center">
            <!-- Modern Hamburger Button - Pilih salah satu style -->
            <div class="w-16 flex justify-center">

                <button id="hamburger-btn" 
                    class="w-12 h-12 bg-brand-500/10 backdrop-blur-xl border border-white/20 rounded-xl cursor-pointer flex flex-col justify-center items-center gap-1 transition-all duration-300 hover:bg-brand-500/20 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-brand-500/25 focus:outline-none focus:ring-2 focus:ring-brand-500/50">
                    <span class="hamburger-line block w-5 h-0.5 bg-brand-500 rounded-full transition-all duration-300"></span>
                    <span class="hamburger-line block w-5 h-0.5 bg-brand-500 rounded-full transition-all duration-300"></span>
                    <span class="hamburger-line block w-5 h-0.5 bg-brand-500 rounded-full transition-all duration-300"></span>
                </button>
            </div>

            <!-- Logo -->
            <div class="flex-shrink-0 ml-3">
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

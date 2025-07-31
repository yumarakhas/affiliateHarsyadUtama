<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin - Gentle Living')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/carousel.js') }}"></script>
</head>

<body>
    {{-- Admin Top Bar --}}
    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto py-3 lg:py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Gentle Living Logo" class="h-10 sm:h-12">
                </div>

                <!-- User Info dan Logout Button -->
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <span style="font-family: 'Nunito', sans-serif;"
                        class="text-xs sm:text-sm text-gray-600 hidden sm:block">
                        Halo, {{ Auth::user()->name }}
                    </span>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" style="font-family: 'Nunito', sans-serif;"
                            class="font-medium px-4 sm:px-6 lg:px-8 py-2 border border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white transition-colors duration-300 flex items-center space-x-2 lg:space-x-4 text-sm lg:text-base">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <span class="hidden sm:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <div class="h-20"></div>

    <!-- Success/Error Messages -->
    @if (session('success'))
        <div class="fixed top-16 sm:top-20 left-1/2 transform -translate-x-1/2 z-40 w-full max-w-md px-4">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded-r-lg shadow-lg"
                id="successAlert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span style="font-family: 'Nunito', sans-serif;"
                        class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            </div>
        </div>
        <script>
            setTimeout(function() {
                const alert = document.getElementById('successAlert');
                if (alert) {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translate(-50%, -100%)';
                    setTimeout(() => alert.remove(), 300);
                }
            }, 3000);
        </script>
    @endif

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')
</body>

</html>

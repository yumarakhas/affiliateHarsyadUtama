<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin - Gentle Living')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">

    <!-- Vite CSS & JS (includes Tailwind) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Admin Styles -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</head>

<body>
    {{-- Admin Top Bar --}}
    @include('layouts.admin.topbar')

    <!-- Sidebar -->
    @include('layouts.admin.sidebar')

    <!-- Success/Error Messages -->
    @if (session('success'))
        <div class="fixed top-16 sm:top-20 left-1/2 transform -translate-x-1/2 z-40 w-full max-w-md px-4">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded-r-lg shadow-lg"
                id="successAlert">
                <div class="flex items-center">
                    <x-heroicon-s-check-circle class="w-5 h-5 mr-2" />
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
    <main id="main-content" class="main-content transition-all duration-300 ease-in-out pt-20 lg:ml-16">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer id="footer-content" class="main-content transition-all duration-300 ease-in-out lg:ml-16">
        @include('layouts.footer')
    </footer>
</body>

</html>

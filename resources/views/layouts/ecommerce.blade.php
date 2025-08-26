<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Gentle Living E-Commerce')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">

    <!-- Vite CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/topbar.js') }}"></script>
</head>

<body class="bg-gray-50">
    {{-- Include E-commerce Header --}}
    @include('layouts.ecommerce-header')

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <div class="h-20"></div>

    {{-- Main Content  --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')
</body>

</html>

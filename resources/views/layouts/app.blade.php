<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Halaman')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tab.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    </link>
    <script src="{{ asset('js/carousel.js') }}"></script>
</head>

<body>
    {{-- Top Bar --}}
    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="max-w-6xl mx-auto py-4 flex justify-between items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Gentle Living Logo" class="h-12">
            <div class="flex items-center">
                <nav class="space-x-4 mr-16" style="font-family: 'Fredoka One', cursive;">
                    <a href="#beranda" class="text-[#444444]/50 hover:text-[#614DAC] active:text-[#614DAC]">Beranda</a>
                    <a href="" class="text-[#444444]/50 hover:text-[#614DAC] active:text-[#614DAC]">Produk</a>
                    <a href="" class="text-[#444444]/50 hover:text-[#614DAC] active:text-[#614DAC]">Belanja</a>
                    <a href="" class="text-[#444444]/50 hover:text-[#614DAC] active:text-[#614DAC]">Partner</a>
                    <a href="" class="text-[#444444]/50 hover:text-[#614DAC] active:text-[#614DAC]">Tentang
                        Kami</a>
                </nav>
                <a href="{{ route('login') }}" style="font-family: 'Nunito', sans-serif;"
                    class="font-medium px-8 mr-0 py-2 border border-[#6C63FF] text-[#6C63FF] rounded-full hover:bg-[#6C63FF] hover:text-white transition-colors duration-300 flex items-center space-x-4">
                    <span>Admin</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Spacer untuk menggantikan ruang yang diambil oleh fixed header -->
    <div class="h-20"></div>

    {{-- Main Content  --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-[#528B89] py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 text-white">
                <!-- Logo and Company Info -->
                <div>
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-auto h-25">
                    </div>
                    <p style="font-family: 'Nunito', sans-serif;" class="text-sm mb-4">
                        Jl. Pandanwangi Park No 58<br>
                        Pandanwangi, Kec. Blimbing, Kota Malang, Jawa Timur 65126
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 3.95-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.35 0-.69-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.036 5.339c-3.635 0-6.591 2.956-6.591 6.589 0 3.632 2.956 6.589 6.591 6.589s6.591-2.957 6.591-6.589c0-3.633-2.956-6.589-6.591-6.589zm0 10.863c-2.359 0-4.274-1.915-4.274-4.274S9.677 7.654 12.036 7.654s4.274 1.915 4.274 4.274-1.915 4.274-4.274 4.274zM19.817 5.123c0 .847-.69 1.532-1.532 1.532-.847 0-1.532-.685-1.532-1.532s.685-1.532 1.532-1.532c.847 0 1.532.685 1.532 1.532zM12.036 2.5c-2.11 0-6.654-.09-8.566 1.822C1.558 6.234 1.648 10.778 1.648 12.036s-.09 5.802 1.822 7.714c1.912 1.912 6.456 1.822 8.566 1.822s6.654.09 8.566-1.822c1.912-1.912 1.822-6.456 1.822-8.714s.09-5.802-1.822-7.714C18.69 2.41 14.146 2.5 12.036 2.5zm7.714 16.948c-1.297 1.297-3.084 1.182-7.714 1.182s-6.417.115-7.714-1.182-1.182-3.084-1.182-7.714.115-6.417 1.182-7.714S7.406 2.838 12.036 2.838s6.417-.115 7.714 1.182 1.182 3.084 1.182 7.714-.115 6.417-1.182 7.714z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Tentang Kami -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Tentang Kami</h4>
                    <ul style="font-family: 'Nunito', sans-serif;" class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-200">Visi & Misi</a></li>
                        <li><a href="#" class="hover:text-gray-200">Karir</a></li>
                    </ul>
                </div>

                <!-- Hubungi Kami -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Hubungi Kami</h4>
                    <ul style="font-family: 'Nunito', sans-serif;" class="space-y-2 text-sm">
                        <li>+62 821-3716-1033</li>
                        <li>cs@gentleliving.com</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/20 mt-8 pt-8 text-center">
                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-white/80">
                    Hak Cipta © 2025 Gentle Living | Kebijakan Privasi
                </p>
            </div>
        </div>
    </footer>
</body>

</html>

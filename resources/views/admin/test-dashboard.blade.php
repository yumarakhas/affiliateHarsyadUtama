@extends('layouts.admin')

@section('title', 'Dashboard Admin - Gentle Living')

@section('content')
    <div class="container mx-auto px-6 py-16">
        <div class="max-w-4xl mx-auto">
            <h1 style="font-family: 'Fredoka One', cursive;" class="text-4xl text-[#614DAC] mb-8 text-center">Dashboard Admin
            </h1>

            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="text-center">
                    <div class="p-4 rounded-full bg-gradient-to-r from-[#6C63FF] to-[#614DAC] mb-6 inline-flex">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h2 style="font-family: 'Fredoka One', cursive;" class="text-3xl text-gray-700 mb-4">
                        Selamat Datang, {{ Auth::user()->name }}!
                    </h2>
                    <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600 text-lg mb-8">
                        Anda berhasil login ke dashboard admin Gentle Living
                    </p>

                    <!-- Action Cards -->
                    <div class="grid md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-gradient-to-br from-[#528B89] to-[#446b6a] rounded-xl p-6 text-white">
                            <div class="flex items-center mb-4">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                <h3 style="font-family: 'Fredoka One', cursive;" class="text-xl">Data Affiliate</h3>
                            </div>
                            <p style="font-family: 'Nunito', sans-serif;" class="text-sm mb-4">Kelola data registrasi
                                affiliate</p>
                            <a href="{{ route('admin.view-data') }}"
                                class="inline-block bg-white text-[#528B89] px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                Lihat Data
                            </a>
                        </div>

                        <div class="bg-gradient-to-br from-[#6C63FF] to-[#614DAC] rounded-xl p-6 text-white">
                            <div class="flex items-center mb-4">
                                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 style="font-family: 'Fredoka One', cursive;" class="text-xl">Statistik</h3>
                            </div>
                            <p style="font-family: 'Nunito', sans-serif;" class="text-sm mb-4">Lihat statistik registrasi
                            </p>
                            <button
                                class="inline-block bg-white text-[#6C63FF] px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                Lihat Statistik
                            </button>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="mt-8 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p style="font-family: 'Nunito', sans-serif;" class="text-blue-700 text-sm">
                                Perhatikan tombol logout yang menarik di bagian atas halaman!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('title', 'Dashboard Admin - Gentle Living')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard Admin</h1>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <div class="p-3 rounded-full bg-purple-100 mb-4 inline-flex">
                        <svg class="w-12 h-12 text-[#614DAC]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-700">Selamat Datang, {{ Auth::user()->name }}!</h2>
                    <p class="text-gray-500 mt-2">Ini adalah halaman dashboard sementara untuk Admin Gentle Living.</p>

                    <div class="mt-8">
                        <p class="text-gray-600">
                            Saat ini sistem masih dalam tahap pengembangan. Fitur-fitur akan segera tersedia pada versi
                            berikutnya.
                        </p>
                    </div>

                    <div class="mt-8">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-6 py-2 bg-gradient-to-r from-[#6C63FF] to-[#614DAC] text-white font-medium rounded-full shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Formulir Pendaftaran Affiliator - Gentle Living')

@section('content')
<!-- Clean White Background -->
<div class="min-h-screen bg-gray-50">
    <div class="relative z-10 py-12">
        <div class="max-w-2xl mx-auto px-6">
            <!-- Header -->
            <!-- <div class="text-center mb-12">
                <div class="bg-gradient-to-r from-[#528B89] to-[#446b6a] rounded-2xl p-8 shadow-xl">
                    <h1 style="font-family: 'Fredoka One', cursive;" 
                        class="text-3xl md:text-4xl text-white mb-4">
                        Formulir Pendaftaran Affiliator
                    </h1>
                    <p style="font-family: 'Nunito', sans-serif;" 
                       class="text-lg text-white/95 leading-relaxed">
                        Bergabunglah dengan program affiliate kami dan mulai 
                        <span class="font-bold text-yellow-300">earning with purpose!</span>
                    </p>
                    
                    Decorative Elements
                    <div class="flex justify-center mt-6 space-x-2">
                        <div class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse"></div>
                        <div class="w-3 h-3 bg-white rounded-full animate-pulse delay-75"></div>
                        <div class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse delay-150"></div>
                    </div>
                </div>
            </div> -->

            <!-- Success/Error Messages -->
            <!-- @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl mb-6 shadow-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl mb-6 shadow-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        {{ session('error') }}
                    </div>
                </div>
            @endif -->

            <!-- Form -->
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-[#528B89] to-[#446b6a] px-8 py-6">
                    <div class="flex items-center justify-between">
                        <h2 style="font-family: 'Fredoka One', cursive;" class="text-xl text-white flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Formulir Pendaftaran Affiliator
                        </h2>
                        <a href="{{ route('landing') }}" 
                           class="inline-flex items-center px-3 py-1.5 bg-white/10 hover:bg-white/20 text-white text-sm font-medium rounded-lg transition-all duration-300 ease-in-out backdrop-blur-sm border border-white/20">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Batal
                        </a>
                    </div>
                </div>
                
                <div class="p-8">
                    <form action="{{ route('affiliate.store') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                                Email <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] transition-all duration-300 bg-white hover:border-gray-300 @error('email') border-red-400 @enderror"
                                       placeholder="Masukkan email Anda"
                                       required>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Nama Lengkap -->
                        <div class="mb-6">
                            <label for="nama_lengkap" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="nama_lengkap" 
                                   name="nama_lengkap" 
                                   value="{{ old('nama_lengkap') }}"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] transition-all duration-300 bg-white hover:border-gray-300 @error('nama_lengkap') border-red-400 @enderror"
                                   placeholder="Masukkan nama lengkap Anda"
                                   required>
                            @error('nama_lengkap')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Kontak WhatsApp -->
                        <div class="mb-6">
                            <label for="kontak_whatsapp" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.130-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg>
                                Kontak WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="kontak_whatsapp" 
                                   name="kontak_whatsapp" 
                                   value="{{ old('kontak_whatsapp') }}"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] transition-all duration-300 bg-white hover:border-gray-300 @error('kontak_whatsapp') border-red-400 @enderror"
                                   placeholder="Contoh: +62812345678"
                                   required>
                            @error('kontak_whatsapp')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Kota Domisili -->
                        <div class="mb-6">
                            <label for="kota_domisili" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Kota Domisili <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="kota_domisili" 
                                   name="kota_domisili" 
                                   value="{{ old('kota_domisili') }}"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] transition-all duration-300 bg-white hover:border-gray-300 @error('kota_domisili') border-red-400 @enderror"
                                   placeholder="Contoh: Jakarta, Bandung, Surabaya"
                                   required>
                            @error('kota_domisili')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Social Media Section -->
                        <div class="mb-8">
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6 border-2 border-purple-100">
                                <h3 class="text-lg font-bold text-gray-700 mb-4">
                                    Media Sosial
                                </h3>
                                
                                <!-- Akun Instagram -->
                                <div class="mb-6">
                                    <label for="akun_instagram" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                        Akun Instagram
                                    </label>
                                    <input type="text" 
                                           id="akun_instagram" 
                                           name="akun_instagram" 
                                           value="{{ old('akun_instagram') }}"
                                           class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-300 bg-white hover:border-gray-300 @error('akun_instagram') border-red-400 @enderror"
                                           placeholder="Contoh: @username_instagram">
                                    @error('akun_instagram')
                                        <p class="text-red-500 text-sm mt-2 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Akun TikTok -->
                                <div class="mb-4">
                                    <label for="akun_tiktok" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                        </svg>
                                        Akun TikTok
                                    </label>
                                    <input type="text" 
                                           id="akun_tiktok" 
                                           name="akun_tiktok" 
                                           value="{{ old('akun_tiktok') }}"
                                           class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300 bg-white hover:border-gray-300 @error('akun_tiktok') border-red-400 @enderror"
                                           placeholder="Contoh: @username_tiktok">
                                    @error('akun_tiktok')
                                        <p class="text-red-500 text-sm mt-2 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                
                                @error('akun_sosmed')
                                    <p class="text-red-500 text-sm mt-2 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                                
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 mt-3">
                                    <p class="text-sm text-blue-700 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                        <strong>Minimal salah satu akun Instagram atau TikTok harus diisi</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Profesi/Kesibukan -->
                        <div class="mb-8">
                            <label for="profesi_kesibukan" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4.5a2 2 0 00-2-2h-4a2 2 0 00-2 2V6m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"></path>
                                </svg>
                                Profesi/Kesibukan kamu saat ini <span class="text-red-500">*</span>
                            </label>
                            <textarea id="profesi_kesibukan" 
                                      name="profesi_kesibukan" 
                                      rows="4"
                                      class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] transition-all duration-300 bg-white hover:border-gray-300 resize-none @error('profesi_kesibukan') border-red-400 @enderror"
                                      placeholder="Ceritakan profesi atau kesibukan Anda saat ini... (Contoh: Mahasiswa, Ibu Rumah Tangga, Freelancer, dll.)"
                                      required>{{ old('profesi_kesibukan') }}</textarea>
                            @error('profesi_kesibukan')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Tau info ini darimana -->
                        <div class="mb-8">
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border-2 border-blue-100">
                                <label class="block text-lg font-bold text-gray-700 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Tau info ini darimana? <span class="text-red-500">*</span>
                                </label>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach(['Instagram', 'Tiktok', 'Iklan', 'Teman'] as $option)
                                        <label class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 cursor-pointer group">
                                            <input type="checkbox" 
                                                   name="info_darimana[]" 
                                                   value="{{ $option }}"
                                                   class="w-4 h-4 text-blue-600 bg-white border-2 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                                   {{ in_array($option, old('info_darimana', [])) ? 'checked' : '' }}>
                                            <span class="ml-3 text-sm font-medium text-gray-700 group-hover:text-blue-700">{{ $option }}</span>
                                        </label>
                                    @endforeach
                                    
                                    <!-- Yang lain dengan input text -->
                                    <div class="md:col-span-2 space-y-3">
                                        <label class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 cursor-pointer group">
                                            <input type="checkbox" 
                                                   id="yang_lain_checkbox"
                                                   name="info_darimana[]" 
                                                   value="Yang lain"
                                                   class="w-4 h-4 text-blue-600 bg-white border-2 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                                   {{ in_array('Yang lain', old('info_darimana', [])) ? 'checked' : '' }}>
                                            <span class="ml-3 text-sm font-medium text-gray-700 group-hover:text-blue-700">Yang lain</span>
                                        </label>
                                        <div id="yang_lain_input_container" class="ml-3 {{ in_array('Yang lain', old('info_darimana', [])) ? '' : 'hidden' }}">
                                            <input type="text" 
                                                   id="yang_lain_text"
                                                   name="yang_lain_text" 
                                                   value="{{ old('yang_lain_text') }}"
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 bg-white @error('yang_lain_text') border-red-400 @enderror"
                                                   placeholder="Jelaskan dari mana Anda mengetahui info ini..."
                                                   maxlength="255">
                                            @error('yang_lain_text')
                                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @error('info_darimana')
                                    <p class="text-red-500 text-sm mt-3 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Checkbox Persetujuan -->
                        <div class="mb-8">
                            <div class="bg-green-50 rounded-xl p-4 border border-green-200">
                                <label class="flex items-start cursor-pointer">
                                    <input type="checkbox" 
                                           id="persetujuan"
                                           name="persetujuan" 
                                           value="1"
                                           class="w-4 h-4 text-green-600 bg-white border-2 border-green-300 rounded focus:ring-green-500 focus:ring-2 mt-1 flex-shrink-0"
                                           {{ old('persetujuan') ? 'checked' : '' }}
                                           required>
                                    <div class="ml-3">
                                        <span class="text-sm font-medium text-gray-700">
                                            Saya menyetujui untuk bergabung dalam program affiliate <strong class="text-green-700">Gentle Living</strong> dan berkomitmen untuk memberikan data yang benar, mengikuti ketentuan yang berlaku, serta mempromosikan produk secara etis dan profesional.
                                        </span>
                                    </div>
                                </label>
                                @error('persetujuan')
                                    <p class="text-red-500 text-sm mt-2 ml-7 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-4">
                            <button type="submit" 
                                    id="submit_button"
                                    class="relative w-full px-8 py-5 bg-gradient-to-r from-[#528B89] to-[#446b6a] text-white font-bold rounded-2xl shadow-2xl hover:shadow-[#528B89]/30 transform hover:scale-[1.02] transition-all duration-300 ease-out disabled:bg-gray-400 disabled:cursor-not-allowed disabled:transform-none disabled:shadow-none overflow-hidden group"
                                    disabled>
                                <!-- Button Background Animation -->
                                <div class="absolute inset-0 bg-gradient-to-r from-[#446b6a] to-[#528B89] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <!-- Button Content -->
                                <div class="relative flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    <span class="text-lg">Kirim Pendaftaran</span>
                                    <svg class="w-5 h-5 ml-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Form validation untuk checkbox dan sosial media
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const checkboxes = document.querySelectorAll('input[name="info_darimana[]"]');
        const instagramInput = document.querySelector('input[name="akun_instagram"]');
        const tiktokInput = document.querySelector('input[name="akun_tiktok"]');
        
        form.addEventListener('submit', function(e) {
            // Validasi checkbox
            const checkedBoxes = document.querySelectorAll('input[name="info_darimana[]"]:checked');
            if (checkedBoxes.length === 0) {
                e.preventDefault();
                alert('Silakan pilih minimal satu pilihan untuk "Tau info ini darimana?"');
                return false;
            }

            // Validasi sosial media
            const instagramValue = instagramInput.value.trim();
            const tiktokValue = tiktokInput.value.trim();
            
            if (!instagramValue && !tiktokValue) {
                e.preventDefault();
                alert('Minimal salah satu akun Instagram atau TikTok harus diisi!');
                return false;
            }
        });

        // Real-time validation untuk checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedBoxes = document.querySelectorAll('input[name="info_darimana[]"]:checked');
                const errorMsg = document.querySelector('.checkbox-error');
                
                if (checkedBoxes.length > 0 && errorMsg) {
                    errorMsg.remove();
                }
            });
        });

        // Handle "Yang lain" checkbox untuk show/hide input text
        const yangLainCheckbox = document.getElementById('yang_lain_checkbox');
        const yangLainContainer = document.getElementById('yang_lain_input_container');
        const yangLainText = document.getElementById('yang_lain_text');
        
        if (yangLainCheckbox && yangLainContainer) {
            yangLainCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    yangLainContainer.classList.remove('hidden');
                    yangLainText.focus();
                } else {
                    yangLainContainer.classList.add('hidden');
                    yangLainText.value = '';
                }
            });
        }

        // Handle checkbox persetujuan untuk enable/disable tombol submit
        const persetujuanCheckbox = document.getElementById('persetujuan');
        const submitButton = document.getElementById('submit_button');
        
        if (persetujuanCheckbox && submitButton) {
            // Set initial state
            submitButton.disabled = !persetujuanCheckbox.checked;
            
            persetujuanCheckbox.addEventListener('change', function() {
                submitButton.disabled = !this.checked;
                
                if (this.checked) {
                    submitButton.classList.remove('disabled:bg-gray-400', 'disabled:cursor-not-allowed', 'disabled:transform-none');
                } else {
                    submitButton.classList.add('disabled:bg-gray-400', 'disabled:cursor-not-allowed', 'disabled:transform-none');
                }
            });
        }

        // Fungsi untuk menampilkan warning dengan style yang menarik
        function showWarning(message, element = null) {
            // Hapus warning yang sudah ada
            const existingWarning = document.querySelector('.validation-warning');
            if (existingWarning) {
                existingWarning.remove();
            }

            // Buat elemen warning
            const warningDiv = document.createElement('div');
            warningDiv.className = 'validation-warning fixed top-4 left-1/2 transform -translate-x-1/2 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow-lg z-50 max-w-md mx-auto';
            warningDiv.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <p class="font-medium">Data belum lengkap!</p>
                        <p class="text-sm">${message}</p>
                    </div>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-auto">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            `;

            document.body.appendChild(warningDiv);
            
            // Focus ke element yang error
            if (element) {
                element.focus();
                element.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            // Auto-remove setelah 5 detik
            setTimeout(() => {
                if (warningDiv.parentElement) {
                    warningDiv.remove();
                }
            }, 5000);
        }

        // Validasi form sebelum submit
        form.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value.trim();
            const namaLengkap = document.getElementById('nama_lengkap').value.trim();
            const kontakWhatsapp = document.getElementById('kontak_whatsapp').value.trim();
            const kotaDomisili = document.getElementById('kota_domisili').value.trim();
            const akuntaInstagram = document.getElementById('akun_instagram').value.trim();
            const akunTiktok = document.getElementById('akun_tiktok').value.trim();
            const profesiKesibukan = document.getElementById('profesi_kesibukan').value.trim();
            const infoDarimana = document.querySelectorAll('input[name="info_darimana[]"]:checked');

            // Validasi field wajib
            if (!email) {
                e.preventDefault();
                showWarning('Email harus diisi', document.getElementById('email'));
                return false;
            }

            if (!namaLengkap) {
                e.preventDefault();
                showWarning('Nama lengkap harus diisi', document.getElementById('nama_lengkap'));
                return false;
            }

            if (!kontakWhatsapp) {
                e.preventDefault();
                showWarning('Kontak WhatsApp harus diisi', document.getElementById('kontak_whatsapp'));
                return false;
            }

            if (!kotaDomisili) {
                e.preventDefault();
                showWarning('Kota domisili harus diisi', document.getElementById('kota_domisili'));
                return false;
            }

            // Validasi social media (minimal salah satu)
            if (!akuntaInstagram && !akunTiktok) {
                e.preventDefault();
                showWarning('Minimal salah satu akun Instagram atau TikTok harus diisi', document.getElementById('akun_instagram'));
                return false;
            }

            if (!profesiKesibukan) {
                e.preventDefault();
                showWarning('Profesi/kesibukan harus diisi', document.getElementById('profesi_kesibukan'));
                return false;
            }

            // Validasi info darimana
            if (infoDarimana.length === 0) {
                e.preventDefault();
                showWarning('Pilih minimal satu sumber informasi', document.querySelector('input[name="info_darimana[]"]'));
                return false;
            }
            
            // Validasi checkbox persetujuan
            if (!persetujuanCheckbox.checked) {
                e.preventDefault();
                showWarning('Silakan centang kotak persetujuan untuk melanjutkan pendaftaran', persetujuanCheckbox);
                return false;
            }
            
            // Validasi "Yang lain" text ketika checkbox dipilih
            const yangLainChecked = yangLainCheckbox.checked;
            const yangLainValue = yangLainText.value.trim();
            
            if (yangLainChecked && !yangLainValue) {
                e.preventDefault();
                showWarning('Silakan isi keterangan untuk pilihan "Yang lain"', yangLainText);
                return false;
            }

            // Jika semua validasi lolos, tampilkan loading
            submitButton.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Mengirim...
                </div>
            `;
            submitButton.disabled = true;
        });
    });
</script>
@endsection

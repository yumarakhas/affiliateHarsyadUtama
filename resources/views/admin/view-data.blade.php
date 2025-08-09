@extends('layouts.admin')

@section('title', 'Data Affiliator')

@section('content')
    <div class="container mx-auto px-6 py-8 max-w-7xl">
        @php
            // Untuk summary cards, ambil semua data (tidak terpaginasi)
            $allAffiliatesForSummary = \App\Models\AffiliateRegistration::with('affiliateInfo')->get();
            $totalAffiliates = $allAffiliatesForSummary->count();
            $activeAffiliates = $allAffiliatesForSummary->where('status', 'Aktif')->count();
            $inactiveAffiliates = $allAffiliatesForSummary->where('status', 'Nonaktif')->count();
            $pendingAffiliates = $allAffiliatesForSummary->where('status', 'Pending')->count();
            
            // Debug info
            \Log::info('Summary Cards Data', [
                'total' => $totalAffiliates,
                'active' => $activeAffiliates,
                'inactive' => $inactiveAffiliates,
                'pending' => $pendingAffiliates
            ]);
            
            // Debug table data
            \Log::info('Table Data', [
                'affiliates_count' => $affiliates->count(),
                'affiliates_total' => $affiliates->total(),
                'affiliates_items' => $affiliates->items() ? count($affiliates->items()) : 0
            ]);
        @endphp
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
                <div class="mb-4 sm:mb-0">
                    <h1 style="font-family: 'Fredoka One', cursive;" class="text-3xl text-[#6C63FF] flex items-center mb-2">
                        <svg class="w-8 h-8 mr-3 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        Data Affiliator
                    </h1>
                    <p class="text-[#6C63FF] text-lg ml-11" style="font-family: 'Nunito', sans-serif;" >Kelola data affiliator yang telah mendaftar</p>
                </div>
                <div class="flex gap-3">
                    <button onclick="exportToExcel()"
                        class="inline-flex items-center px-6 py-3 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 transition-colors duration-200 shadow-sm">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Export Excel
                    </button>
                </div>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Total Affiliator Card -->
            <div
                class="bg-[#446b6a] rounded-xl p-8 text-white shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white/80 mb-2">Total Affiliator</p>
                        <p class="text-4xl font-bold">{{ $totalAffiliates }}</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Pending Affiliator Card dengan Notifikasi -->
            <div
                class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-xl p-8 text-white shadow-lg transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                @if($pendingAffiliates > 0)
                    <!-- Pulse Animation untuk Notifikasi -->
                    <div class="absolute top-2 right-2">
                        <div class="relative">
                            <div class="w-4 h-4 bg-red-500 rounded-full animate-ping"></div>
                            <div class="absolute inset-0 w-4 h-4 bg-red-600 rounded-full"></div>
                        </div>
                    </div>
                @endif
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white/90 mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Menunggu Konfirmasi
                        </p>
                        <p class="text-4xl font-bold">{{ $pendingAffiliates }}</p>
                        @if($pendingAffiliates > 0)
                            <p class="text-xs text-white/80 mt-2 font-medium">Segera hubungi via WhatsApp!</p>
                        @endif
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.728-.833-2.498 0L4.316 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Active Affiliator Card -->
            <div
                class="bg-green-600 rounded-xl p-8 text-white shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white/80 mb-2">Affiliator Aktif</p>
                        <p class="text-4xl font-bold">{{ $activeAffiliates }}</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Inactive Affiliator Card -->
            <div
                class="bg-red-600 rounded-xl p-8 text-white shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white/80 mb-2">Affiliator Nonaktif</p>
                        <p class="text-4xl font-bold">{{ $inactiveAffiliates }}</p>
                    </div>
                    <div class="bg-white/20 rounded-full p-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and Search Section -->
        <div class="bg-white rounded-xl shadow-md p-8 mb-8">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                    <div class="relative">
                        <svg class="absolute left-4 top-4 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" id="searchInput" placeholder="Cari berdasarkan nama atau email..."
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-transparent text-sm">
                    </div>
                </div>
                <div class="md:w-56">
                    <select id="statusFilter"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#528B89] focus:border-transparent text-sm">
                        <option value="">Semua Status</option>
                        <option value="Pending">Menunggu Konfirmasi</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <!-- Data Table -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
                
                
                <!-- Tampilkan tabel dalam semua kondisi untuk debugging -->
                @if(true)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama & Email</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak & Lokasi</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Social Media</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                                    <th class="px-8 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                
                                @forelse($affiliates as $index => $affiliate)
                                    <tr class="hover:bg-gray-50 transition-colors duration-200 affiliate-row"
                                        data-name="{{ strtolower($affiliate->nama_lengkap ?? 'no-name') }}"
                                        data-email="{{ strtolower($affiliate->email ?? 'no-email') }}"
                                        data-status="{{ $affiliate->status ?? 'no-status' }}">
                                        <td class="px-8 py-6 whitespace-nowrap text-sm text-gray-900 font-medium row-number">
                                            {{ ($affiliates->currentPage() - 1) * $affiliates->perPage() + $index + 1 }}
                                        </td>
                                        <td class="px-8 py-6">
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ $affiliate->nama_lengkap ?? 'No Name' }}</div>
                                                <div class="text-sm text-gray-500 mt-1">{{ $affiliate->email ?? 'No Email' }}</div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <div>
                                                <div class="text-sm text-gray-900 flex items-center mb-2">
                                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.130-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                                    </svg>
                                                    {{ $affiliate->kontak_whatsapp }}
                                                </div>
                                                <div class="text-sm text-gray-500 flex items-center">
                                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $affiliate->kota_domisili }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6">
                                            <div class="space-y-2">
                                                @if($affiliate->affiliateInfo && $affiliate->affiliateInfo->akun_instagram)
                                                    <div class="text-sm text-gray-900 flex items-center">
                                                        <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                                        </svg>
                                                        {{ $affiliate->affiliateInfo->akun_instagram }}
                                                    </div>
                                                @endif
                                                @if($affiliate->affiliateInfo && $affiliate->affiliateInfo->akun_tiktok)
                                                    <div class="text-sm text-gray-900 flex items-center">
                                                        <svg class="w-4 h-4 mr-2 text-black" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                                        </svg>
                                                        {{ $affiliate->affiliateInfo->akun_tiktok }}
                                                    </div>
                                                @endif
                                                @if((!$affiliate->affiliateInfo || (!$affiliate->affiliateInfo->akun_instagram && !$affiliate->affiliateInfo->akun_tiktok)))
                                                    <span class="text-sm text-gray-400">-</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 whitespace-nowrap">
                                            @php
                                                $status = $affiliate->status;
                                                $statusClass = match($status) {
                                                    'Aktif' => 'bg-green-100 text-green-800',
                                                    'Nonaktif' => 'bg-red-100 text-red-800',
                                                    'Pending' => 'bg-orange-100 text-orange-800 animate-pulse',
                                                    default => 'bg-gray-100 text-gray-800'
                                                };
                                                $statusText = match($status) {
                                                    'Pending' => 'Menunggu Konfirmasi',
                                                    default => $status
                                                };
                                            @endphp
                                            <span class="inline-flex px-3 py-2 text-xs font-semibold rounded-full {{ $statusClass }}">
                                                @if($status === 'Pending')
                                                    <svg class="w-3 h-3 mr-1 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                @endif
                                                {{ $statusText }}
                                            </span>
                                        </td>
                                        <td class="px-8 py-6 whitespace-nowrap text-sm text-gray-500 font-medium">
                                            {{ $affiliate->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="px-8 py-6 whitespace-nowrap text-center">
                                            <div class="flex items-center justify-center space-x-4">
                                                <!-- View Details Button -->
                                                <button onclick="viewDetails({{ $affiliate->id }})" 
                                                        class="text-blue-600 hover:text-blue-800 transition-colors duration-200 p-2 rounded-full hover:bg-blue-50"
                                                        title="Lihat Detail">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                                
                                                <!-- Edit Button -->
                                                <button onclick="editAffiliate({{ $affiliate->id }})" 
                                                        class="text-yellow-600 hover:text-yellow-800 transition-colors duration-200 p-2 rounded-full hover:bg-yellow-50"
                                                        title="Edit Data">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                    </svg>
                                                </button>
                                                
                                                <!-- Delete Button -->
                                                <button onclick="deleteAffiliate({{ $affiliate->id }}, '{{ $affiliate->nama_lengkap }}')" 
                                                        class="text-red-600 hover:text-red-800 transition-colors duration-200 p-2 rounded-full hover:bg-red-50"
                                                        title="Hapus Data">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-8 py-12 text-center text-gray-500">
                                            <strong>No Data Found in Loop</strong><br>
                                            Variable $affiliates tidak mengandung data atau error dalam loop
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="px-8 py-6 border-t border-gray-200" id="paginationSection">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <!-- Info Section -->
                            <div class="text-sm text-gray-700">
                                @php
                                    $from = ($affiliates->currentPage() - 1) * $affiliates->perPage() + 1;
                                    $to = min($from + $affiliates->perPage() - 1, $affiliates->total());
                                @endphp
                                <span>Menampilkan <span class="font-semibold">{{ $from }}</span> - <span class="font-semibold">{{ $to }}</span> dari <span class="font-semibold">{{ $affiliates->total() }}</span> data</span>
                            </div>
                            
                            <!-- Navigation Links -->
                            @if($affiliates->hasPages())
                                <div class="flex items-center space-x-2">
                                    {{-- Previous Page Link --}}
                                    @if ($affiliates->onFirstPage())
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 cursor-default leading-5 rounded-md">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            Sebelumnya
                                        </span>
                                    @else
                                        <a href="{{ $affiliates->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            Sebelumnya
                                        </a>
                                    @endif

                                    {{-- Next Page Link --}}
                                    @if ($affiliates->hasMorePages())
                                        <a href="{{ $affiliates->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#528B89] focus:border-[#528B89] active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                            Selanjutnya
                                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    @else
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 cursor-default leading-5 rounded-md">
                                            Selanjutnya
                                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada data affiliator</h3>
                        <p class="text-gray-500">Data affiliator akan muncul di sini setelah ada yang mendaftar.</p>
                    </div>
                @endif
            </div>
    </div>

    <!-- Detail Modal -->
    <div id="detailModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-8 px-6 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div
                class="inline-block align-bottom bg-white rounded-xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full">
                <div class="bg-white">
                    <div class="bg-gradient-to-r from-[#528B89] to-[#446b6a] px-8 py-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-white">Detail Affiliator</h3>
                            <button onclick="closeModal()" class="text-white hover:text-gray-200 p-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="px-8 py-6" id="modalContent">
                        <!-- Content will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-start justify-center min-h-screen pt-8 px-6 pb-6">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="relative bg-white rounded-xl shadow-xl w-full max-w-6xl max-h-[95vh] flex flex-col">
                <!-- Header - Fixed -->
                <div class="bg-gradient-to-r from-[#528B89] to-[#446b6a] px-8 py-6 rounded-t-xl flex-shrink-0">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-white flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Data Affiliator
                        </h3>
                        <button onclick="closeEditModal()" class="text-white hover:text-gray-200 p-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Content - Scrollable -->
                <div class="flex-1 overflow-y-auto px-8 py-6" id="editModalContent">
                    <!-- Edit form will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Search and Filter functionality with automatic renumbering
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');

            // Add event listeners
            searchInput.addEventListener('input', filterAndRenumber);
            statusFilter.addEventListener('change', filterAndRenumber);

            function filterAndRenumber() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value;
                const rows = document.querySelectorAll('.affiliate-row');
                let visibleRowCount = 0;

                // Update pagination info based on filtering
                const paginationSection = document.getElementById('paginationSection');
                
                rows.forEach((row, index) => {
                    const name = row.dataset.name || '';
                    const email = row.dataset.email || '';
                    const status = row.dataset.status || '';

                    const matchesSearch = name.includes(searchTerm) || email.includes(searchTerm);
                    const matchesStatus = !statusValue || status === statusValue;

                    if (matchesSearch && matchesStatus) {
                        row.style.display = '';
                        visibleRowCount++;
                        // Update numbering for visible rows starting from 1
                        const numberCell = row.querySelector('.row-number');
                        if (numberCell) {
                            numberCell.textContent = visibleRowCount;
                        }
                    } else {
                        row.style.display = 'none';
                    }
                });

                // Update pagination info text
                if (searchTerm || statusValue) {
                    // When filtering, show filtered results info
                    const infoSpan = paginationSection.querySelector('.text-sm.text-gray-700 span');
                    if (infoSpan) {
                        infoSpan.innerHTML = `Menampilkan <span class="font-semibold">1</span> - <span class="font-semibold">${visibleRowCount}</span> dari <span class="font-semibold">${visibleRowCount}</span> data (difilter)`;
                    }
                    // Hide navigation buttons when filtering
                    const navButtons = paginationSection.querySelector('.flex.items-center.space-x-2');
                    if (navButtons) navButtons.style.display = 'none';
                } else {
                    // When not filtering, restore original pagination info
                    const infoSpan = paginationSection.querySelector('.text-sm.text-gray-700 span');
                    if (infoSpan) {
                        const currentPage = {{ $affiliates->currentPage() }};
                        const perPage = {{ $affiliates->perPage() }};
                        const total = {{ $affiliates->total() }};
                        const from = (currentPage - 1) * perPage + 1;
                        const to = Math.min(from + perPage - 1, total);
                        infoSpan.innerHTML = `Menampilkan <span class="font-semibold">${from}</span> - <span class="font-semibold">${to}</span> dari <span class="font-semibold">${total}</span> data`;
                    }
                    // Show navigation buttons when not filtering
                    const navButtons = paginationSection.querySelector('.flex.items-center.space-x-2');
                    if (navButtons) navButtons.style.display = 'flex';
                }

                // Show/hide empty state message
                showEmptyStateIfNeeded(visibleRowCount);
            }

            // Reset filter function
            function resetFilters() {
                searchInput.value = '';
                statusFilter.value = '';
                
                // Show all rows with original numbering
                const rows = document.querySelectorAll('.affiliate-row');
                rows.forEach((row, index) => {
                    row.style.display = '';
                    const numberCell = row.querySelector('.row-number');
                    if (numberCell) {
                        // Calculate original pagination number
                        const currentPage = {{ $affiliates->currentPage() }};
                        const perPage = {{ $affiliates->perPage() }};
                        const originalNumber = (currentPage - 1) * perPage + index + 1;
                        numberCell.textContent = originalNumber;
                    }
                });

                // Restore original pagination info
                const paginationSection = document.getElementById('paginationSection');
                const infoSpan = paginationSection.querySelector('.text-sm.text-gray-700 span');
                if (infoSpan) {
                    const currentPage = {{ $affiliates->currentPage() }};
                    const perPage = {{ $affiliates->perPage() }};
                    const total = {{ $affiliates->total() }};
                    const from = (currentPage - 1) * perPage + 1;
                    const to = Math.min(from + perPage - 1, total);
                    infoSpan.innerHTML = `Menampilkan <span class="font-semibold">${from}</span> - <span class="font-semibold">${to}</span> dari <span class="font-semibold">${total}</span> data`;
                }
                
                // Show navigation buttons
                const navButtons = paginationSection.querySelector('.flex.items-center.space-x-2');
                if (navButtons) navButtons.style.display = 'flex';

                // Remove empty message
                const emptyMessage = document.getElementById('emptyMessage');
                if (emptyMessage) emptyMessage.remove();
            }

            // Add reset button functionality if needed
            window.resetFilters = resetFilters;

            function showEmptyStateIfNeeded(visibleRowCount) {
                const tableBody = document.querySelector('tbody');
                let emptyMessage = document.getElementById('emptyMessage');
                
                if (visibleRowCount === 0) {
                    if (!emptyMessage) {
                        emptyMessage = document.createElement('tr');
                        emptyMessage.id = 'emptyMessage';
                        emptyMessage.innerHTML = `
                            <td colspan="7" class="px-8 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <svg class="w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada data yang ditemukan</h3>
                                    <p class="text-gray-500 mb-4">Coba ubah kata kunci pencarian atau filter status.</p>
                                    <button onclick="resetFilters()" class="px-4 py-2 bg-[#528B89] text-white rounded-lg hover:bg-[#446b6a] transition-colors duration-200">
                                        Reset Filter
                                    </button>
                                </div>
                            </td>
                        `;
                        tableBody.appendChild(emptyMessage);
                    }
                } else {
                    if (emptyMessage) {
                        emptyMessage.remove();
                    }
                }
            }
        });

        // Export Excel function
        function exportToExcel() {
            const button = document.querySelector('button[onclick="exportToExcel()"]');
            const originalText = button.innerHTML;
            
            // Show loading state
            button.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Mengunduh...
            `;
            button.disabled = true;

            // Redirect to export URL
            window.location.href = '/admin/export-excel';

            // Reset button after a delay
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
            }, 3000);
        }

        // Modal functions
        function closeModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // View details function
        function viewDetails(id) {
            fetch(`/admin/affiliate/${id}/details`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('modalContent').innerHTML = data.html;
                        document.getElementById('detailModal').classList.remove('hidden');
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Gagal memuat detail data',
                            icon: 'error',
                            confirmButtonColor: '#dc2626'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat memuat data',
                        icon: 'error',
                        confirmButtonColor: '#dc2626'
                    });
                });
        }

        // Edit affiliate function
        function editAffiliate(id) {
            fetch(`/admin/affiliate/${id}/details`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const affiliate = data.data;
                        const info = affiliate.affiliate_info || {};
                        
                        const editForm = `
                            <form onsubmit="submitEdit(event, ${id})" class="space-y-8">
                                <!-- Basic Information -->
                                <div class="bg-gray-50 rounded-xl p-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Informasi Dasar
                                    </h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Email -->
                                        <div>
                                            <label for="edit_email" class="block text-sm font-semibold text-gray-700 mb-3">Email</label>
                                            <input type="email" 
                                                   id="edit_email" 
                                                   name="email" 
                                                   value="${affiliate.email}"
                                                   required
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="email@example.com">
                                        </div>

                                        <!-- Nama Lengkap -->
                                        <div>
                                            <label for="edit_nama_lengkap" class="block text-sm font-semibold text-gray-700 mb-3">Nama Lengkap</label>
                                            <input type="text" 
                                                   id="edit_nama_lengkap" 
                                                   name="nama_lengkap" 
                                                   value="${affiliate.nama_lengkap}"
                                                   required
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="Masukkan nama lengkap">
                                        </div>

                                        <!-- Kontak WhatsApp -->
                                        <div>
                                            <label for="edit_kontak_whatsapp" class="block text-sm font-semibold text-gray-700 mb-3">Kontak WhatsApp</label>
                                            <input type="text" 
                                                   id="edit_kontak_whatsapp" 
                                                   name="kontak_whatsapp" 
                                                   value="${affiliate.kontak_whatsapp}"
                                                   required
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="08xxxxxxxxx">
                                        </div>

                                        <!-- Kota Domisili -->
                                        <div>
                                            <label for="edit_kota_domisili" class="block text-sm font-semibold text-gray-700 mb-3">Kota Domisili</label>
                                            <input type="text" 
                                                   id="edit_kota_domisili" 
                                                   name="kota_domisili" 
                                                   value="${affiliate.kota_domisili}"
                                                   required
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="Masukkan kota domisili">
                                        </div>

                                        <!-- Status -->
                                        <div>
                                            <label for="edit_status" class="block text-sm font-semibold text-gray-700 mb-3">Status</label>
                                            <select id="edit_status" 
                                                    name="status" 
                                                    required
                                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300">
                                                <option value="Pending" ${affiliate.status === 'Pending' ? 'selected' : ''}>Menunggu Konfirmasi</option>
                                                <option value="Aktif" ${affiliate.status === 'Aktif' ? 'selected' : ''}>Aktif</option>
                                                <option value="Nonaktif" ${affiliate.status === 'Nonaktif' ? 'selected' : ''}>Nonaktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media Information -->
                                <div class="bg-blue-50 rounded-xl p-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1V4m0 0H7m10 0v9a1 1 0 01-1 1H8a1 1 0 01-1-1V4"></path>
                                        </svg>
                                        Media Sosial
                                    </h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Instagram -->
                                        <div>
                                            <label for="edit_akun_instagram" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                                </svg>
                                                Instagram
                                            </label>
                                            <input type="text" 
                                                   id="edit_akun_instagram" 
                                                   name="akun_instagram" 
                                                   value="${info.akun_instagram || ''}"
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="@username_instagram">
                                        </div>

                                        <!-- TikTok -->
                                        <div>
                                            <label for="edit_akun_tiktok" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-black" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                                </svg>
                                                TikTok
                                            </label>
                                            <input type="text" 
                                                   id="edit_akun_tiktok" 
                                                   name="akun_tiktok" 
                                                   value="${info.akun_tiktok || ''}"
                                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300"
                                                   placeholder="@username_tiktok">
                                        </div>
                                    </div>
                                </div>

                                <!-- Profesi -->
                                <div class="mt-8">
                                    <label for="edit_profesi_kesibukan" class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#528B89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4.5a2 2 0 00-2-2h-4a2 2 0 00-2 2V6m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"></path>
                                        </svg>
                                        Profesi/Kesibukan
                                    </label>
                                    <textarea id="edit_profesi_kesibukan" 
                                              name="profesi_kesibukan" 
                                              rows="4"
                                              required
                                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition-all duration-300 resize-none"
                                              placeholder="Jelaskan profesi atau kesibukan Anda saat ini">${affiliate.profesi_kesibukan}</textarea>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="flex justify-end space-x-4 pt-6 border-t">
                                    <button type="button" 
                                            onclick="closeEditModal()"
                                            class="px-6 py-3 bg-gray-500 text-white font-medium rounded-xl hover:bg-gray-600 transition-colors duration-300">
                                        Batal
                                    </button>
                                    <button type="submit" 
                                            class="px-6 py-3 bg-gradient-to-r from-[#528B89] to-[#446b6a] text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                        <span class="submit-text">Simpan Perubahan</span>
                                        <span class="loading-text hidden">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Menyimpan...
                                        </span>
                                    </button>
                                </div>
                            </form>
                        `;

                        document.getElementById('editModalContent').innerHTML = editForm;
                        document.getElementById('editModal').classList.remove('hidden');
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Gagal memuat data untuk edit',
                            icon: 'error',
                            confirmButtonColor: '#dc2626'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat memuat data',
                        icon: 'error',
                        confirmButtonColor: '#dc2626'
                    });
                });
        }

        // Submit edit function
        function submitEdit(event, id) {
            console.log('submitEdit called with ID:', id);
            console.log('Event:', event);
            
            event.preventDefault();
            event.stopPropagation();
            
            const form = event.target;
            console.log('Form element:', form);
            
            const submitButton = form.querySelector('button[type="submit"]');
            console.log('Submit button:', submitButton);
            
            if (!submitButton) {
                console.error('Submit button not found!');
                return;
            }
            
            const submitText = submitButton.querySelector('.submit-text');
            const loadingText = submitButton.querySelector('.loading-text');
            
            console.log('Submit text element:', submitText);
            console.log('Loading text element:', loadingText);
            
            // Show loading state
            submitButton.disabled = true;
            if (submitText) submitText.classList.add('hidden');
            if (loadingText) loadingText.classList.remove('hidden');

            const formData = new FormData(form);
            
            // Debug: log form data
            console.log('Form data being sent:');
            for (let [key, value] of formData.entries()) {
                console.log(key, value);
            }
            
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            console.log('CSRF token element:', csrfToken);
            console.log('CSRF token value:', csrfToken ? csrfToken.getAttribute('content') : 'NOT FOUND');
            
            fetch(`/admin/affiliate/${id}/update`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken ? csrfToken.getAttribute('content') : '',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', response.headers);
                return response.text().then(text => {
                    console.log('Raw response text:', text);
                    try {
                        return JSON.parse(text);
                    } catch (e) {
                        console.error('Response is not JSON:', text);
                        throw new Error('Server returned invalid JSON: ' + text);
                    }
                });
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Data berhasil diperbarui!',
                        icon: 'success',
                        confirmButtonColor: '#528B89',
                        timer: 2000,
                        timerProgressBar: true
                    }).then(() => {
                        closeEditModal();
                        location.reload();
                    });
                } else {
                    if (data.errors) {
                        const errorMessages = Object.values(data.errors).flat().join(', ');
                        throw new Error(errorMessages);
                    } else {
                        throw new Error(data.message || 'Terjadi kesalahan saat menyimpan data');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: error.message || 'Terjadi kesalahan saat menyimpan data',
                    icon: 'error',
                    confirmButtonColor: '#dc2626'
                });
            })
            .finally(() => {
                // Reset loading state
                submitButton.disabled = false;
                if (submitText) submitText.classList.remove('hidden');
                if (loadingText) loadingText.classList.add('hidden');
            });
        }

        // Delete Affiliate Function
        function deleteAffiliate(id, name) {
            console.log('deleteAffiliate called with ID:', id, 'Name:', name);
            
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: `Apakah Anda yakin ingin menghapus data ${name}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'swal2-popup-custom'
                }
            }).then((result) => {
                console.log('SweetAlert result:', result);
                
                if (result.isConfirmed) {
                    console.log('User confirmed delete, proceeding...');
                    
                    const csrfToken = document.querySelector('meta[name="csrf-token"]');
                    console.log('CSRF token element:', csrfToken);
                    console.log('CSRF token value:', csrfToken ? csrfToken.getAttribute('content') : 'NOT FOUND');
                    
                    fetch(`/admin/affiliate/${id}/delete`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken ? csrfToken.getAttribute('content') : '',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => {
                        console.log('Delete response status:', response.status);
                        return response.text().then(text => {
                            console.log('Raw delete response:', text);
                            try {
                                return JSON.parse(text);
                            } catch (e) {
                                console.error('Delete response is not JSON:', text);
                                throw new Error('Server returned invalid JSON: ' + text);
                            }
                        });
                    })
                    .then(data => {
                        console.log('Delete response data:', data);
                        if (data.success) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus',
                                icon: 'success',
                                confirmButtonColor: '#528B89',
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            throw new Error(data.message || 'Gagal menghapus data');
                        }
                    })
                    .catch(error => {
                        console.error('Delete error:', error);
                        Swal.fire({
                            title: 'Error!',
                            text: error.message || 'Terjadi kesalahan saat menghapus data',
                            icon: 'error',
                            confirmButtonColor: '#dc2626'
                        });
                    });
                } else {
                    console.log('User cancelled delete');
                }
            });
        }
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection

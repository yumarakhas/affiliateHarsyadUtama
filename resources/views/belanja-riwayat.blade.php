@extends('layouts.ecommerce')

@section('title', 'Riwayat Belanja - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 font-nunito">Riwayat Belanja</h1>
            <p class="text-gray-600 mt-2 font-nunito">Kelola dan pantau status pesanan Anda</p>
        </div>

        <!-- Tab Navigation -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mb-6">
            <div class="border-b border-gray-200">
                <nav class="flex overflow-x-auto" id="order-tabs">
                    <button onclick="showTab('semua')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito active"
                            data-tab="semua">
                        Semua
                    </button>
                    <button onclick="showTab('belum-bayar')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="belum-bayar">
                        Belum Bayar
                    </button>
                    <button onclick="showTab('sedang-dikemas')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="sedang-dikemas">
                        Sedang Dikemas
                    </button>
                    <button onclick="showTab('dikirim')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="dikirim">
                        Dikirim
                    </button>
                    <button onclick="showTab('selesai')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="selesai">
                        Selesai
                    </button>
                    <button onclick="showTab('dibatalkan')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="dibatalkan">
                        Dibatalkan
                    </button>
                    <button onclick="showTab('pengembalian-barang')" 
                            class="tab-button flex-shrink-0 px-6 py-4 text-sm font-medium border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap font-nunito"
                            data-tab="pengembalian-barang">
                        Pengembalian Barang
                    </button>
                </nav>
            </div>

            <!-- Search Bar -->
            <div class="p-6 border-b border-gray-200">
                <div class="relative max-w-md">
                    <input type="text" 
                           placeholder="Kamu bisa cari berdasarkan nama produk atau nomor pesanan"
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order List -->
        <div id="order-content" class="space-y-6">
            @foreach($orders as $order)
            <div class="order-item bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden" 
                 data-status="{{ $order['status'] }}">
                
                <!-- Order Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                @if($order['status'] == 'selesai')
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                @elseif($order['status'] == 'belum-bayar')
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                @elseif($order['status'] == 'dikemas')
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                    </div>
                                @elseif($order['status'] == 'dikirim')
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <p class="text-blue-600 font-semibold font-nunito">
                                    @if($order['status'] == 'selesai')
                                        Selesai
                                    @elseif($order['status'] == 'belum-bayar')
                                        Belum Bayar
                                    @elseif($order['status'] == 'dikemas')
                                        Dikemas
                                    @elseif($order['status'] == 'dikirim')
                                        Dikirim
                                    @endif
                                </p>
                                <p class="text-sm text-gray-600 font-nunito">{{ $order['info'] }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500 font-nunito">Total Pesanan:</p>
                            <p class="text-xl font-bold text-blue-600 font-nunito">Rp{{ number_format($order['total'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order Products -->
                <div class="p-6">
                    @foreach($order['products'] as $product)
                    <div class="flex items-center space-x-4 {{ !$loop->last ? 'mb-4 pb-4 border-b border-gray-100' : '' }}">
                        <!-- Product Image -->
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                <span class="text-gray-500 text-xs font-nunito">Foto Produk</span>
                            </div>
                        </div>
                        
                        <!-- Product Details -->
                        <div class="flex-1 min-w-0">
                            <h3 class="text-base font-semibold text-gray-800 font-nunito">{{ $product['name'] }}</h3>
                            <p class="text-sm text-gray-600 font-nunito">Variasi: {{ $product['variant'] }}</p>
                            <p class="text-sm text-gray-600 font-nunito">x{{ $product['quantity'] }}</p>
                        </div>
                        
                        <!-- Product Price -->
                        <div class="text-right">
                            <p class="text-base font-semibold text-gray-800 font-nunito">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Order Actions -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="text-sm text-gray-600 font-nunito">
                            @if($order['status'] == 'belum-bayar')
                                Bayar sebelum 09/08/2025 23:59 dengan {{ $order['payment_method'] }}
                            @else
                                Pesanan dari {{ $order['date'] }}
                            @endif
                        </div>
                        <div class="flex space-x-3">
                            @if($order['status'] == 'selesai')
                                <button class="px-4 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 transition-colors duration-200 font-nunito">
                                    Beli Lagi
                                </button>
                                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Beri Penilaian
                                </button>
                            @elseif($order['status'] == 'belum-bayar')
                                <button class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200 font-nunito">
                                    Ajukan Pengembalian
                                </button>
                                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Bayar Sekarang
                                </button>
                            @elseif($order['status'] == 'dikemas')
                                <button class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200 font-nunito">
                                    Hubungi Admin
                                </button>
                                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Lacak Pengiriman
                                </button>
                            @elseif($order['status'] == 'dikirim')
                                <button class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200 font-nunito">
                                    Hubungi Admin
                                </button>
                                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Lacak Pengiriman
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State (hidden by default) -->
        <div id="empty-state" class="hidden text-center py-16">
            <div class="max-w-md mx-auto">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">Belum ada pesanan</h3>
                <p class="text-gray-600 font-nunito">Anda belum memiliki pesanan dengan status ini.</p>
                <a href="{{ route('belanja.produk') }}" 
                   class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito font-medium">
                    Mulai Belanja
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function showTab(status) {
    // Update tab buttons
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('active', 'border-blue-600', 'text-blue-600');
        button.classList.add('border-transparent', 'text-gray-500');
    });
    
    const activeButton = document.querySelector(`[data-tab="${status}"]`);
    activeButton.classList.remove('border-transparent', 'text-gray-500');
    activeButton.classList.add('active', 'border-blue-600', 'text-blue-600');
    
    // Show/hide orders based on status
    const orders = document.querySelectorAll('.order-item');
    const emptyState = document.getElementById('empty-state');
    let hasVisibleOrders = false;
    
    orders.forEach(order => {
        const orderStatus = order.dataset.status;
        
        if (status === 'semua' || orderStatus === status || 
            (status === 'sedang-dikemas' && orderStatus === 'dikemas')) {
            order.style.display = 'block';
            hasVisibleOrders = true;
        } else {
            order.style.display = 'none';
        }
    });
    
    // Show empty state if no orders match the filter
    if (hasVisibleOrders) {
        emptyState.classList.add('hidden');
    } else {
        emptyState.classList.remove('hidden');
    }
}

// Initialize with 'semua' tab active
document.addEventListener('DOMContentLoaded', function() {
    showTab('semua');
});
</script>
@endsection

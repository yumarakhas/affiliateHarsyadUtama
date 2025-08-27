@extends('layouts.ecommerce')

@section('title', 'Keranjang Belanja - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 font-nunito">Keranjang Belanja</h1>
            <p class="text-gray-600 mt-2 font-nunito">Kelola produk yang akan Anda beli</p>
        </div>

        @if($cartItems->count() > 0)
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Cart Items -->
            <div class="flex-1">
                <!-- Select All Header -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-6">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" id="select-all" 
                                       class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="select-all" class="text-base font-semibold text-gray-800 font-nunito">
                                    Pilih Semua ({{ $cartItems->count() }} produk)
                                </label>
                            </div>
                            <button class="text-sm text-red-600 hover:text-red-700 font-nunito font-medium">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cart Items List -->
                <div class="space-y-4">
                    @foreach($cartItems as $item)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 cart-item" data-item-id="{{ $item['id'] }}">
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <!-- Checkbox -->
                                <div class="pt-2">
                                    <input type="checkbox" 
                                           class="item-checkbox w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                           data-price="{{ $item['price'] }}"
                                           data-quantity="{{ $item['quantity'] }}">
                                </div>

                                <!-- Product Image -->
                                <div class="flex-shrink-0">
                                    <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <span class="text-gray-500 text-xs font-nunito">Foto Produk</span>
                                    </div>
                                </div>
                                
                                <!-- Product Details -->
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-semibold text-gray-800 font-nunito">{{ $item['name'] }}</h3>
                                    <p class="text-sm text-gray-600 font-nunito mt-1">{{ $item['variant'] }}</p>
                                    <p class="text-sm text-gray-500 font-nunito mt-1">Stok: {{ $item['stock'] }}</p>
                                    
                                    <!-- Price -->
                                    <div class="mt-3">
                                        <span class="text-xl font-bold text-blue-600 font-nunito">Rp{{ number_format($item['price'], 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <!-- Quantity Controls & Actions -->
                                <div class="flex flex-col items-end space-y-4">
                                    <!-- Remove Button -->
                                    <button class="text-gray-400 hover:text-red-500 transition-colors duration-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>

                                    <!-- Quantity Controls -->
                                    <div class="flex items-center border border-gray-300 rounded-lg">
                                        <button class="quantity-btn px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-l-lg transition-colors duration-200"
                                                data-action="decrease" data-item-id="{{ $item['id'] }}">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                            </svg>
                                        </button>
                                        <input type="number" 
                                               value="{{ $item['quantity'] }}" 
                                               min="1" 
                                               max="{{ $item['stock'] }}"
                                               class="quantity-input w-16 px-3 py-2 text-center border-0 focus:ring-0 font-nunito"
                                               data-item-id="{{ $item['id'] }}">
                                        <button class="quantity-btn px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-r-lg transition-colors duration-200"
                                                data-action="increase" data-item-id="{{ $item['id'] }}">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Item Total -->
                                    <div class="text-right">
                                        <p class="text-sm text-gray-500 font-nunito">Total</p>
                                        <p class="text-lg font-bold text-gray-800 font-nunito item-total">
                                            Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="w-full lg:w-96">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 sticky top-24">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 font-nunito">Ringkasan Belanja</h2>
                        
                        <!-- Selected Items Info -->
                        <div class="mb-4 p-4 bg-blue-50 rounded-lg">
                            <p class="text-sm text-blue-800 font-nunito">
                                <span id="selected-count">0</span> produk dipilih
                            </p>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-nunito">Subtotal Produk</span>
                                <span class="font-semibold font-nunito" id="selected-subtotal">Rp0</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-nunito">Total Berat</span>
                                <span class="font-semibold font-nunito">{{ $totalWeight }}g</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-nunito">Ongkos Kirim</span>
                                <span class="font-semibold font-nunito">Rp{{ number_format($shippingCost, 0, ',', '.') }}</span>
                            </div>
                            <hr class="border-gray-200">
                            <div class="flex justify-between items-center text-lg">
                                <span class="font-bold text-gray-800 font-nunito">Total Pembayaran</span>
                                <span class="font-bold text-blue-600 font-nunito" id="selected-total">Rp{{ number_format($shippingCost, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <!-- Voucher Section -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2 font-nunito">Kode Voucher</label>
                            <div class="flex space-x-2">
                                <input type="text" 
                                       placeholder="Masukkan kode voucher"
                                       class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito">
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito font-medium">
                                    Pakai
                                </button>
                            </div>
                        </div>

                        <!-- Checkout Button -->
                        <button id="checkout-btn" 
                                class="w-full py-3 bg-gray-300 text-gray-500 rounded-lg font-nunito font-medium cursor-not-allowed"
                                disabled>
                            Beli Sekarang
                        </button>

                        <!-- Security Badge -->
                        <div class="mt-4 flex items-center justify-center space-x-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                            <span class="font-nunito">Pembayaran 100% Aman</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Empty Cart -->
        <div class="text-center py-16">
            <div class="max-w-md mx-auto">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">Keranjang Kosong</h3>
                <p class="text-gray-600 font-nunito mb-6">Belum ada produk dalam keranjang Anda.</p>
                <a href="{{ route('belanja.produk') }}" 
                   class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito font-medium">
                    Mulai Belanja
                </a>
            </div>
        </div>
        @endif

        <!-- Recommended Products -->
        @if($cartItems->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito">Rekomendasi Untuk Anda</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for($i = 1; $i <= 4; $i++)
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden group hover:shadow-md transition-shadow duration-300">
                    <div class="aspect-square bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500 text-sm font-nunito">Foto Produk</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 font-nunito mb-2">Produk Rekomendasi {{ $i }}</h3>
                        <p class="text-blue-600 font-bold font-nunito">Rp{{ number_format(rand(50000, 150000), 0, ',', '.') }}</p>
                        <button class="w-full mt-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito font-medium">
                            + Keranjang
                        </button>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('select-all');
    const itemCheckboxes = document.querySelectorAll('.item-checkbox');
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    const checkoutBtn = document.getElementById('checkout-btn');
    
    let shippingCost = {{ $shippingCost }};

    // Update summary when checkboxes change
    function updateSummary() {
        let selectedCount = 0;
        let selectedSubtotal = 0;
        
        itemCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedCount++;
                const price = parseInt(checkbox.dataset.price);
                const quantity = parseInt(checkbox.dataset.quantity);
                selectedSubtotal += price * quantity;
            }
        });
        
        document.getElementById('selected-count').textContent = selectedCount;
        document.getElementById('selected-subtotal').textContent = 'Rp' + selectedSubtotal.toLocaleString('id-ID');
        
        const selectedTotal = selectedCount > 0 ? selectedSubtotal + shippingCost : shippingCost;
        document.getElementById('selected-total').textContent = 'Rp' + selectedTotal.toLocaleString('id-ID');
        
        // Enable/disable checkout button
        if (selectedCount > 0) {
            checkoutBtn.disabled = false;
            checkoutBtn.classList.remove('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
            checkoutBtn.classList.add('bg-blue-600', 'text-white', 'hover:bg-blue-700');
            checkoutBtn.textContent = `Beli Sekarang (${selectedCount})`;
        } else {
            checkoutBtn.disabled = true;
            checkoutBtn.classList.add('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
            checkoutBtn.classList.remove('bg-blue-600', 'text-white', 'hover:bg-blue-700');
            checkoutBtn.textContent = 'Beli Sekarang';
        }
        
        // Update select all checkbox
        selectAllCheckbox.checked = selectedCount === itemCheckboxes.length;
        selectAllCheckbox.indeterminate = selectedCount > 0 && selectedCount < itemCheckboxes.length;
    }

    // Select all functionality
    selectAllCheckbox.addEventListener('change', function() {
        itemCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateSummary();
    });

    // Individual checkbox change
    itemCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSummary);
    });

    // Quantity controls
    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.dataset.action;
            const itemId = this.dataset.itemId;
            const input = document.querySelector(`input[data-item-id="${itemId}"]`);
            const checkbox = this.closest('.cart-item').querySelector('.item-checkbox');
            
            let currentValue = parseInt(input.value);
            let newValue = currentValue;
            
            if (action === 'increase' && currentValue < parseInt(input.max)) {
                newValue = currentValue + 1;
            } else if (action === 'decrease' && currentValue > 1) {
                newValue = currentValue - 1;
            }
            
            if (newValue !== currentValue) {
                input.value = newValue;
                checkbox.dataset.quantity = newValue;
                
                // Update item total display
                const price = parseInt(checkbox.dataset.price);
                const itemTotal = this.closest('.cart-item').querySelector('.item-total');
                itemTotal.textContent = 'Rp' + (price * newValue).toLocaleString('id-ID');
                
                updateSummary();
            }
        });
    });

    // Direct input change
    quantityInputs.forEach(input => {
        input.addEventListener('change', function() {
            const checkbox = this.closest('.cart-item').querySelector('.item-checkbox');
            checkbox.dataset.quantity = this.value;
            
            // Update item total display
            const price = parseInt(checkbox.dataset.price);
            const itemTotal = this.closest('.cart-item').querySelector('.item-total');
            itemTotal.textContent = 'Rp' + (price * parseInt(this.value)).toLocaleString('id-ID');
            
            updateSummary();
        });
    });

    // Initialize summary
    updateSummary();
});
</script>
@endsection

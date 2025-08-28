@extends('layouts.ecommerce')

@section('title', 'Checkout - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600 mb-4 font-nunito">
                <a href="{{ route('belanja.keranjang') }}" class="hover:text-blue-600">Keranjang</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-blue-600 font-medium">Checkout</span>
            </div>
            <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 font-nunito">Checkout</h1>
            <p class="text-gray-600 mt-2 font-nunito">Lengkapi informasi untuk menyelesaikan pesanan Anda</p>
        </div>

        <form method="POST" action="{{ route('belanja.checkout.process') }}" id="checkout-form">
            @csrf
            
            <div class="flex flex-col lg:flex-row gap-8">
                
                <!-- Left Column - Forms -->
                <div class="flex-1 space-y-6">
                    
                    <!-- Shipping Information -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800 font-nunito flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Informasi Pengiriman
                            </h2>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="recipient_name" class="block text-sm font-medium text-gray-700 mb-2 font-nunito">
                                        Nama Penerima *
                                    </label>
                                    <input type="text" id="recipient_name" name="recipient_name" value="{{ old('recipient_name') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                           placeholder="Nama lengkap penerima">
                                    @error('recipient_name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="recipient_phone" class="block text-sm font-medium text-gray-700 mb-2 font-nunito">
                                        Nomor Telepon *
                                    </label>
                                    <input type="tel" id="recipient_phone" name="recipient_phone" value="{{ old('recipient_phone') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                           placeholder="08123456789">
                                    @error('recipient_phone')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2 font-nunito">
                                    Alamat Lengkap *
                                </label>
                                <textarea id="address" name="address" rows="3" required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                          placeholder="Jalan, nomor rumah, RT/RW, kelurahan">{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-2 font-nunito">
                                        Kota *
                                    </label>
                                    <input type="text" id="city" name="city" value="{{ old('city') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                           placeholder="Nama kota">
                                    @error('city')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-2 font-nunito">
                                        Kode Pos *
                                    </label>
                                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                           placeholder="12345">
                                    @error('postal_code')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Options -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800 font-nunito flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m8-8v2m0 6v2"></path>
                                </svg>
                                Pilih Pengiriman
                            </h2>
                        </div>
                        <div class="p-6 space-y-3">
                            @foreach($shippingOptions as $option)
                            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:border-blue-300 transition-colors duration-200 shipping-option">
                                <div class="flex items-center">
                                    <input type="radio" name="shipping_method" value="{{ $option['id'] }}" 
                                           class="text-blue-600 focus:ring-blue-500"
                                           data-price="{{ $option['price'] }}"
                                           {{ $loop->first ? 'checked' : '' }}>
                                    <div class="ml-3">
                                        <div class="font-medium text-gray-800 font-nunito">{{ $option['name'] }}</div>
                                        <div class="text-sm text-gray-600 font-nunito">{{ $option['description'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="font-bold text-gray-800 font-nunito">Rp{{ number_format($option['price'], 0, ',', '.') }}</div>
                                    <div class="text-sm text-gray-600 font-nunito">{{ $option['estimated_days'] }} hari</div>
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800 font-nunito flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                Metode Pembayaran
                            </h2>
                        </div>
                        <div class="p-6 space-y-3">
                            @foreach($paymentMethods as $method)
                            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:border-blue-300 transition-colors duration-200 payment-option">
                                <div class="flex items-center">
                                    <input type="radio" name="payment_method" value="{{ $method['id'] }}" 
                                           class="text-blue-600 focus:ring-blue-500"
                                           data-fee="{{ $method['fee'] }}"
                                           {{ $loop->first ? 'checked' : '' }}>
                                    <div class="ml-3">
                                        <div class="font-medium text-gray-800 font-nunito">{{ $method['name'] }}</div>
                                        <div class="text-sm text-gray-600 font-nunito">{{ $method['description'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    @if($method['fee'] > 0)
                                        <div class="font-bold text-gray-800 font-nunito">+Rp{{ number_format($method['fee'], 0, ',', '.') }}</div>
                                        <div class="text-sm text-gray-600 font-nunito">Biaya admin</div>
                                    @else
                                        <div class="font-bold text-green-600 font-nunito">Gratis</div>
                                    @endif
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800 font-nunito flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Catatan Pesanan (Opsional)
                            </h2>
                        </div>
                        <div class="p-6">
                            <textarea id="notes" name="notes" rows="3"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent font-nunito"
                                      placeholder="Catatan khusus untuk pesanan Anda...">{{ old('notes') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Order Summary -->
                <div class="w-full lg:w-96">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 sticky top-24">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800 font-nunito">Ringkasan Pesanan</h2>
                        </div>
                        
                        <div class="p-6">
                            <!-- Order Items -->
                            <div class="space-y-4 mb-6">
                                @foreach($selectedItems as $item)
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                            <span class="text-gray-500 text-xs font-nunito">Foto</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm font-medium text-gray-800 font-nunito">{{ $item['name'] }}</h4>
                                        <p class="text-xs text-gray-600 font-nunito">{{ $item['variant'] }}</p>
                                        <p class="text-xs text-gray-600 font-nunito">Qty: {{ $item['quantity'] }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-bold text-gray-800 font-nunito">
                                            Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- Price Breakdown -->
                            <div class="space-y-3 mb-6 border-t border-gray-200 pt-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 font-nunito">Subtotal Produk</span>
                                    <span class="font-semibold font-nunito">Rp{{ number_format($subtotal, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 font-nunito">Total Berat</span>
                                    <span class="font-semibold font-nunito">{{ $totalWeight }}g</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 font-nunito">Ongkos Kirim</span>
                                    <span class="font-semibold font-nunito" id="shipping-cost">Rp{{ number_format($defaultShipping['price'], 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between items-center" id="payment-fee-row" style="display: none;">
                                    <span class="text-gray-600 font-nunito">Biaya Admin</span>
                                    <span class="font-semibold font-nunito" id="payment-fee">Rp0</span>
                                </div>
                                <hr class="border-gray-200">
                                <div class="flex justify-between items-center text-lg">
                                    <span class="font-bold text-gray-800 font-nunito">Total Pembayaran</span>
                                    <span class="font-bold text-blue-600 font-nunito" id="total-payment">Rp{{ number_format($total, 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" 
                                    class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito font-medium">
                                Buat Pesanan
                            </button>

                            <!-- Security Badge -->
                            <div class="mt-4 flex items-center justify-center space-x-2 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <span class="font-nunito">Transaksi 100% Aman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const shippingOptions = document.querySelectorAll('input[name="shipping_method"]');
    const paymentOptions = document.querySelectorAll('input[name="payment_method"]');
    const shippingCostElement = document.getElementById('shipping-cost');
    const paymentFeeElement = document.getElementById('payment-fee');
    const paymentFeeRow = document.getElementById('payment-fee-row');
    const totalPaymentElement = document.getElementById('total-payment');
    
    const subtotal = {{ $subtotal }};
    
    function updateTotal() {
        const selectedShipping = document.querySelector('input[name="shipping_method"]:checked');
        const selectedPayment = document.querySelector('input[name="payment_method"]:checked');
        
        const shippingCost = selectedShipping ? parseInt(selectedShipping.dataset.price) : 0;
        const paymentFee = selectedPayment ? parseInt(selectedPayment.dataset.fee) : 0;
        
        // Update display
        shippingCostElement.textContent = 'Rp' + shippingCost.toLocaleString('id-ID');
        paymentFeeElement.textContent = 'Rp' + paymentFee.toLocaleString('id-ID');
        
        // Show/hide payment fee row
        if (paymentFee > 0) {
            paymentFeeRow.style.display = 'flex';
        } else {
            paymentFeeRow.style.display = 'none';
        }
        
        const total = subtotal + shippingCost + paymentFee;
        totalPaymentElement.textContent = 'Rp' + total.toLocaleString('id-ID');
    }
    
    // Add event listeners
    shippingOptions.forEach(option => {
        option.addEventListener('change', updateTotal);
    });
    
    paymentOptions.forEach(option => {
        option.addEventListener('change', updateTotal);
    });
    
    // Handle shipping option selection styling
    shippingOptions.forEach(option => {
        option.addEventListener('change', function() {
            document.querySelectorAll('.shipping-option').forEach(label => {
                label.classList.remove('border-blue-500', 'bg-blue-50');
            });
            if (this.checked) {
                this.closest('.shipping-option').classList.add('border-blue-500', 'bg-blue-50');
            }
        });
    });
    
    // Handle payment option selection styling
    paymentOptions.forEach(option => {
        option.addEventListener('change', function() {
            document.querySelectorAll('.payment-option').forEach(label => {
                label.classList.remove('border-blue-500', 'bg-blue-50');
            });
            if (this.checked) {
                this.closest('.payment-option').classList.add('border-blue-500', 'bg-blue-50');
            }
        });
    });
    
    // Initialize
    updateTotal();
    
    // Set initial styling for checked options
    const checkedShipping = document.querySelector('input[name="shipping_method"]:checked');
    if (checkedShipping) {
        checkedShipping.closest('.shipping-option').classList.add('border-blue-500', 'bg-blue-50');
    }
    
    const checkedPayment = document.querySelector('input[name="payment_method"]:checked');
    if (checkedPayment) {
        checkedPayment.closest('.payment-option').classList.add('border-blue-500', 'bg-blue-50');
    }
});
</script>
@endsection

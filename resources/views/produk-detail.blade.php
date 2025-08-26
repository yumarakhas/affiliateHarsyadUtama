@extends('layouts.ecommerce')

@section('title', $product->name . ' - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm text-gray-500 font-nunito">
                <a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors duration-200">Home</a>
                <span>/</span>
                <a href="{{ route('belanja', ['category' => $product->category]) }}" class="hover:text-blue-600 transition-colors duration-200">Kategori {{ ucfirst($product->category) }}</a>
                <span>/</span>
                <span class="text-gray-800 font-medium">{{ $product->name }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Product Image -->
                <div class="bg-gray-100 rounded-xl overflow-hidden aspect-square flex items-center justify-center">
                    @if($product->image)
                        <img src="{{ asset('images/products/' . $product->image) }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-full object-cover">
                    @else
                        <div class="text-gray-400 text-center">
                            <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-lg">No Image Available</p>
                        </div>
                    @endif
                </div>

                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-3">
                    @for($i = 1; $i <= 4; $i++)
                        <div class="bg-gray-200 rounded-lg aspect-square flex items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors duration-200">
                            <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-3 font-nunito">{{ $product->name }}</h1>
                    
                    <!-- Description -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">Deskripsi</h3>
                        <p class="text-gray-600 leading-relaxed font-nunito">
                            {{ $product->description ?? 'Fusce ipsum dolor, elementum sed molestie a, tempus ullamcorper leo. Ut justo purus, tristique sollicitudin sapien quis, placerat placerat ligula. Nulla pulvinar ac est sed mattis. Mauris maximus laoreet lectus, quis aliquam augue efficitur nec. Nam et maximus leo. Maecenas purus velit, faucibus non libero a, sollicitudin rutrum augue. Suspendisse elementum a ante sit amet finibus.' }}
                        </p>
                    </div>

                    <!-- Variants -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 font-nunito">Varian</h3>
                        <div class="flex flex-wrap gap-3">
                            @if(isset($product->content['variants']) && is_array($product->content['variants']))
                                @foreach($product->content['variants'] as $index => $variant)
                                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-colors duration-200 font-nunito {{ $index == 0 ? 'border-blue-500 bg-blue-50' : '' }}">
                                        {{ $variant['name'] ?? 'Varian ' . ($index + 1) }}
                                    </button>
                                @endforeach
                            @else
                                <button class="px-4 py-2 border border-blue-500 bg-blue-50 rounded-lg font-nunito">Varian 1</button>
                                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-colors duration-200 font-nunito">Varian 2</button>
                                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-colors duration-200 font-nunito">Varian 3</button>
                            @endif
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 font-nunito">Kuantitas</h3>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 transition-colors duration-200" onclick="decreaseQuantity()">-</button>
                                <input type="number" id="quantity" value="1" min="1" max="{{ $product->stock }}" class="w-16 text-center border-0 focus:ring-0 font-nunito">
                                <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 transition-colors duration-200" onclick="increaseQuantity()">+</button>
                            </div>
                            <span class="text-gray-600 font-nunito">Stok {{ $product->stock }}</span>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="mb-8">
                        <p class="text-3xl font-bold text-blue-600 font-nunito">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="flex-1 bg-white border-2 border-blue-600 text-blue-600 py-3 px-6 rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-200 font-nunito flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                            </svg>
                            Masukkan Keranjang
                        </button>
                        <button class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 font-nunito">
                            Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-12">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito">Tentang Produk</h2>
                    
                    <div class="space-y-4">
                        @if(isset($product->content['benefits']) && is_array($product->content['benefits']))
                            @foreach($product->content['benefits'] as $benefit)
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 font-nunito">{{ $benefit }}</span>
                                </div>
                            @endforeach
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 font-nunito">Bahan Alami, AMAN untuk BAYI mulai usia 0-4th</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 font-nunito">MINYAK PIJAT BAYI BALITA</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 font-nunito">FREE konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700 font-nunito">FREE Konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Variant Details -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 font-nunito">VARIAN TERSEDIA</h3>
                        <div class="space-y-3">
                            <div class="text-gray-700 font-nunito">1. COUGH N FLU : Meredakan flu pada bayi balita</div>
                            <div class="text-gray-700 font-nunito">2. DEEP SLEEP : Meningkatkan kualitas tidur bayi balita</div>
                            <div class="text-gray-700 font-nunito">3. GIMME FOOD : Melancarkan pencernaan & Menambah nafsu makan si kecil</div>
                            <div class="text-gray-700 font-nunito">4. TUMMY CALMER : Meredakan masalah perut bayi balita (kolik, sembelt, kembung, dll)</div>
                            <div class="text-gray-700 font-nunito">5. JOY : Meredakan stress dan ceri kembali si kecil</div>
                            <div class="text-gray-700 font-nunito">6. IMBOOST : Meningkatkan daya tahan tubuh si kecil</div>
                            <div class="text-gray-700 font-nunito">7. MASSAGE YOUR BABY : Media pijat</div>
                            <div class="text-gray-700 font-nunito">8. LUV BOOSTER : Merelakskan & memperbaharui produksi Asi (khusus ibu)</div>
                            <div class="text-gray-700 font-nunito">9. BYE BUGS : Melindungi kulit dr gigitan nyamuk & meredakan gatal akibat gigitan serangga</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito">Penilaian Produk</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user01</span>
                                <div class="ml-auto flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Produk sangat bagus untuk bayi saya. Sangat potent. Aman untuk bayi/balita. Baby massage, oil berfungsi sangat bagus untuk menyembuhkan bayi yang rewel. Recomend banget nih buat yang punya bayi/balita.
                            </p>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user02</span>
                                <div class="ml-auto flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Bagus banget untuk melempingkan tidur anak. Aromanya yang lembut dan menenangkan membuat anak tidur lebih nyenyak. Bahannya alami jadi aman untuk kulit sensitive bayi.
                            </p>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user03</span>
                                <div class="ml-auto flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Saya sudah pakai untuk anak kedua saya dan hasilnya luar biasa. Cocok untuk semua varian, terutama yang cough n flu sangat membantu saat anak sedang flu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Category Products -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito text-center">Kategori Serupa</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($similarProducts as $similarProduct)
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-200 h-48 flex items-center justify-center">
                                @if($similarProduct->image)
                                    <img src="{{ asset('images/products/' . $similarProduct->image) }}" 
                                         alt="{{ $similarProduct->name }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito">{{ $similarProduct->name }}</h3>
                                <p class="text-blue-600 font-bold mb-3 font-nunito">Rp{{ number_format($similarProduct->price, 0, ',', '.') }}</p>
                                <a href="{{ route('produk.detail', $similarProduct->id) }}" class="block w-full bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Products -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito text-center">Produk Lainnya</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($otherProducts as $otherProduct)
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-200 h-48 flex items-center justify-center">
                                @if($otherProduct->image)
                                    <img src="{{ asset('images/products/' . $otherProduct->image) }}" 
                                         alt="{{ $otherProduct->name }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito">{{ $otherProduct->name }}</h3>
                                <p class="text-blue-600 font-bold mb-3 font-nunito">Rp{{ number_format($otherProduct->price, 0, ',', '.') }}</p>
                                <a href="{{ route('produk.detail', $otherProduct->id) }}" class="block w-full bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-nunito">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Percayakan pada EXPERT-nya!</h3>
                            <p class="text-sm text-gray-600 font-nunito">Dikembangkan oleh Dokter Anak, Dokter Kulit, dan Psikolog Anak</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Gratis Ongkir</h3>
                            <p class="text-sm text-gray-600 font-nunito">Pengiriman Express Seluruh Indonesia*</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Gratis Pengembalian</h3>
                            <p class="text-sm text-gray-600 font-nunito">Gratis Pengembalian Selama 7 Hari Kerja</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito">Hubungi Kami</h3>
                            <p class="text-sm text-gray-600 font-nunito">Whatsapp +62 821-3716-1033</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function increaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    const maxValue = parseInt(quantityInput.max);
    
    if (currentValue < maxValue) {
        quantityInput.value = currentValue + 1;
    }
}

function decreaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    const minValue = parseInt(quantityInput.min);
    
    if (currentValue > minValue) {
        quantityInput.value = currentValue - 1;
    }
}
</script>

@endsection

@extends('layouts.ecommerce')

@section('title', $product->name_item . ' - Gentle Living')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
@endpush

@section('content')
@php
// Define product images based on product ID (local array for demo)
$productImages = [
    // Gentle Baby Products (Category 1)
    10 => [
        'main' => 'images/products/gentle-baby/variants/bye-bugs.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/bye-bugs.jpg',
        ]
    ],
    11 => [
        'main' => 'images/products/gentle-baby/variants/cough-flu.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/CNF-10-ml.jpg',
            'images/products/gentle-baby/variants/CNF-30-ml.jpg',
            'images/products/gentle-baby/variants/CNF-100-ml.jpg',
            'images/products/gentle-baby/variants/CNF-250-ml.jpg'
        ]
    ],
    12 => [
        'main' => 'images/products/gentle-baby/variants/deep-sleep.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/DS-10-ml.jpg',
            'images/products/gentle-baby/variants/DS-30-ml.jpg',
            'images/products/gentle-baby/variants/DS-100-ml.jpg',
            'images/products/gentle-baby/variants/DS-250-ml.jpg'
        ]
    ],
    13 => [
        'main' => 'images/products/gentle-baby/variants/gimme-food.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/GF-10-ml.jpg',
            'images/products/gentle-baby/variants/GF-30-ml.jpg',
            'images/products/gentle-baby/variants/GF-100-ml.jpg',
            'images/products/gentle-baby/variants/GF-250-ml.jpg'
        ]
    ],
    14 => [
        'main' => 'images/products/gentle-baby/variants/immboost.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/IB-10-ml.jpg',
            'images/products/gentle-baby/variants/IB-30-ml.jpg',
            'images/products/gentle-baby/variants/IB-100-ml.jpg',
            'images/products/gentle-baby/variants/IB-250-ml .jpg'
        ]
    ],
    15 => [
        'main' => 'images/products/gentle-baby/variants/joy.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/JOY-10-ml.jpg',
            'images/products/gentle-baby/variants/JOY-30-ml.jpg',
            'images/products/gentle-baby/variants/JOY-100-ml.jpg',
            'images/products/gentle-baby/variants/JOY-250-ml.jpg'
        ]
    ],
    16 => [
        'main' => 'images/products/gentle-baby/variants/ldr-booster.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/LDR-10-ml.jpg',
            'images/products/gentle-baby/variants/LDR-30-ml.jpg',
            'images/products/gentle-baby/variants/LDR-100-ml.jpg',
            'images/products/gentle-baby/variants/LDR-250-ml.jpg'
        ]
    ],
    17 => [
        'main' => 'images/products/gentle-baby/variants/massage-your-baby.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/MYB-10-ml.jpg',
            'images/products/gentle-baby/variants/MYB-30-ml.jpg',
            'images/products/gentle-baby/variants/MYB-100-ml.jpg',
            'images/products/gentle-baby/variants/MYB-250-ml.jpg'
        ]
    ],
    18 => [
        'main' => 'images/products/gentle-baby/variants/tummy-calmer.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/TC-10-ml.jpg',
            'images/products/gentle-baby/variants/TC-30-ml.jpg',
            'images/products/gentle-baby/variants/TC-100-ml.jpg',
            'images/products/gentle-baby/variants/TC-250-ml.jpg'
        ]
    ],
    19 => [
        'main' => 'images/products/gentle-baby/variants/TP-CC.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/TP-CC.jpg',
        ]
    ],
    20 => [
        'main' => 'images/products/gentle-baby/variants/TP-NB.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/TP-NB.jpg',
        ]
    ],
    21 => [
        'main' => 'images/products/gentle-baby/variants/TP-TV.jpg',
        'thumbnails' => [
            'images/products/gentle-baby/variants/TP-TV.jpg',
        ]
    ],
        // Aromatherapy Products (Category 2)
    22 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    23 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    // Health Oils (Category 3)
    24 => [
        'main' => 'images/products/nyam/nyam.png',
        'thumbnails' => [
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png'
        ]
    ],
    25 => [
        'main' => 'images/products/nyam/nyam.png',
        'thumbnails' => [
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png'
        ]
    ],
    26 => [
        'main' => 'images/products/nyam/nyam.png',
        'thumbnails' => [
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png',
            'images/products/nyam/nyam.png'
        ]
    ],
    // Skincare Products (Category 4)
    27 => [
        'main' => 'images/products/gentle-baby/gentle-baby.png',
        'thumbnails' => [
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png'
        ]
    ],
    28 => [
        'main' => 'images/products/gentle-baby/gentle-baby.png',
        'thumbnails' => [
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png'
        ]
    ],
    29 => [
        'main' => 'images/products/gentle-baby/gentle-baby.png',
        'thumbnails' => [
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png',
            'images/products/gentle-baby/gentle-baby.png'
        ]
    ],
    // Essential Oils (Category 5)
    30 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    31 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    32 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    33 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ],
    34 => [
        'main' => 'images/products/mamina/mamina.png',
        'thumbnails' => [
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png',
            'images/products/mamina/mamina.png'
        ]
    ]
];

// Get current product images
$currentImages = $productImages[$product->item_id] ?? [
    'main' => 'images/products/gentle-baby/gentle-baby.png',
    'thumbnails' => []
];
@endphp

<div class="min-h-screen bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm text-gray-500 font-nunito">
                <a href="{{ route('beranda') }}" class="hover:text-teal-600 transition-colors duration-200">Home</a>
                <span>/</span>
                <a href="{{ route('belanja.produk', ['category' => $product->category->slug]) }}" class="hover:text-teal-600 transition-colors duration-200">{{ $product->category->name }}</a>
                <span>/</span>
                <span class="text-gray-800 font-medium">{{ $product->name_item }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Product Image -->
                <div class="bg-white rounded-xl overflow-hidden aspect-square border border-gray-200 shadow-sm">
                    <img id="mainProductImage" 
                         src="{{ asset($currentImages['main']) }}" 
                         alt="{{ $product->name_item }}" 
                         class="w-full h-full object-cover cursor-pointer image-zoom transition-transform duration-300"
                         onerror="this.onerror=null; this.src='{{ asset('images/products/gentle-baby/gentle-baby.png') }}'">
                </div>

                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-3">
                    @if(count($currentImages['thumbnails']) > 0)
                        @foreach($currentImages['thumbnails'] as $index => $thumbnail)
                            <div class="bg-white rounded-lg aspect-square border border-gray-200 overflow-hidden cursor-pointer hover:border-teal-500 transition-all duration-200 product-thumbnail {{ $index === 0 ? 'border-teal-500 border-2' : '' }}" 
                                 onclick="changeMainImage('{{ asset($thumbnail) }}', this)">
                                <img src="{{ asset($thumbnail) }}" 
                                     alt="{{ $product->name_item }} - Image {{ $index + 1 }}" 
                                     class="w-full h-full object-cover transition-transform duration-200"
                                     onerror="this.style.display='none'; this.parentNode.innerHTML='<div class=\'flex items-center justify-center h-full\'><svg class=\'w-8 h-8 text-gray-400\' fill=\'currentColor\' viewBox=\'0 0 20 20\'><path fill-rule=\'evenodd\' d=\'M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z\' clip-rule=\'evenodd\' /></svg></div>'">
                            </div>
                        @endforeach
                    @else
                        <!-- Default thumbnail placeholders -->
                        @for($i = 1; $i <= 4; $i++)
                            <div class="bg-gray-200 rounded-lg aspect-square flex items-center justify-center cursor-pointer hover:bg-gray-300 transition-colors duration-200">
                                <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Product Name -->
                <div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2 font-nunito">{{ $product->name_item }}</h1>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-nunito">Deskripsi</h3>
                    <p class="text-gray-600 leading-relaxed font-nunito text-sm">
                        {{ $product->description_item }}
                    </p>
                </div>

                <!-- Variants -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3 font-nunito">Varian</h3>
                    <div class="flex flex-wrap gap-3">
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-teal-500 hover:bg-teal-50 transition-colors duration-200 font-nunito text-sm border-teal-500 bg-teal-50" onclick="selectVariant(this)">
                            Varian 1
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-teal-500 hover:bg-teal-50 transition-colors duration-200 font-nunito text-sm" onclick="selectVariant(this)">
                            Varian 2
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:border-teal-500 hover:bg-teal-50 transition-colors duration-200 font-nunito text-sm" onclick="selectVariant(this)">
                            Varian 3
                        </button>
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
                        <span class="text-gray-600 font-nunito text-sm">Stok {{ $product->stock }}</span>
                    </div>
                </div>

                <!-- Price -->
                <div class="mb-8">
                    <p class="text-3xl font-bold text-teal-600 font-nunito">{{ $product->formatted_price }}</p>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="flex-1 bg-white border-2 border-teal-600 text-teal-600 py-3 px-6 rounded-lg font-semibold hover:bg-teal-50 transition-colors duration-200 font-nunito flex items-center justify-center" onclick="addToCart()">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0L17 18m0 0v3a1 1 0 01-1 1H8a1 1 0 01-1-1v-3m10 0a1 1 0 01-1 1H8a1 1 0 01-1-1"></path>
                        </svg>
                        Masukkan Keranjang
                    </button>
                    <button class="flex-1 bg-teal-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-teal-700 transition-colors duration-200 font-nunito" onclick="buyNow()">
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </div>

        <!-- Tentang Produk Section -->
        <div class="mt-12">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito">Tentang Produk</h2>
                    
                    <div class="space-y-4 text-gray-700 font-nunito">
                        <p class="leading-relaxed">
                            Gentle Baby Oil New Gen !!! Gentle Baby Oil menjadi Essential Oil, salah satu bentuk Essential Oil Khusus untuk pijat atau membasahi ruakan pada perukaan kulit.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Bahan Alami, AMAN untuk BAYI mulai usia 0-4th</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">MINYAK PIJAT BAYI BALITA</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">FREE konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">FREE Konsultasi seputar kesehatan bayi/balita dan ibu menyusui</span>
                            </div>
                        </div>

                        <!-- Variant Details -->
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 font-nunito">VARIAN TERSEDIA</h3>
                            <div class="space-y-2 text-sm">
                                <div>1. COUGH N FLU : Meredakan flu pada bayi balita</div>
                                <div>2. DEEP SLEEP : Meningkatkan kualitas tidur bayi balita</div>
                                <div>3. GIMME FOOD : Melancarkan pencernaan & Menambah nafsu makan si kecil</div>
                                <div>4. TUMMY CALMER : Meredakan masalah perut bayi balita (kolik, sembelt, kembung, dll)</div>
                                <div>5. JOY : Meredakan stress dan ceri kembali si kecil</div>
                                <div>6. IMBOOST : Meningkatkan daya tahan tubuh si kecil</div>
                                <div>7. MASSAGE YOUR BABY : Media pijat</div>
                                <div>8. LUV BOOSTER : Merelakskan & memperbaharui produksi Asi (khusus ibu)</div>
                                <div>9. BYE BUGS : Melindungi kulit dr gigitan nyamuk & meredakan gatal akibat gigitan serangga</div>
                            </div>
                        </div>

                        <div class="mt-6 space-y-2 text-sm">
                            <div><strong>UKURAN</strong>: 30 ml/botol</div>
                            <div><strong>PEMAKAIAN</strong>: Oleskan, pijat lembut dipermukaan kulit bayi</div>
                            <div><strong>MASA KEDALUWARSA</strong>: 12 Bulan</div>
                            <div><strong>NOTE</strong>:</div>
                            <div>- Produk ini menggunakan essential oil yang murni baik dari aroma</div>
                            <div>- Hari Minggu dan hari libur nasional tidak ada pengiriman</div>
                            <div>- Mohon pastikan yang menerima tahu produk adalah resep yang didapat</div>
                            <div>dari kami. Efek atau reaksi terhadap aroma tidak ada/efek samping tidak akan ada reaksi/efek</div>
                            <div>samping</div>
                            <div>- No UMOT (diproses by Kementrian Kesehatan) LAGT3OOG7306 15/12/2020</div>
                            <div>- No UMKM adalah 1-513-07661-31017 23/07/2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Penilaian Produk Section -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito">Penilaian Produk</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Review 1 -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user01</span>
                                <div class="flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Sangat berkualitas baik, sangat potent. Prrim tertingkat sangat Aupel, cara pengiriman agak lama, dan proses pesanan pasket roulit bngt. Nvnya padakar se sed lengthnya. Masjed pyyitin rekomendasi kuliit, semekut dijanglung, abtil.
                            </p>
                        </div>
                        
                        <!-- Review 2 -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user01</span>
                                <div class="flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Sangat berkualitas baik, sangat potent. Prrim tertingkat sangat Aupel, cara pengiriman agak lama, dan proses pesanan pasket roulit bngt. Nvnya padakar se sed lengthnya. Masjed pyyitin rekomendasi kuliit, semekut dijanglung, abtil.
                            </p>
                        </div>
                        
                        <!-- Review 3 -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-semibold text-gray-800 font-nunito">user03</span>
                                <div class="flex items-center">
                                    @for($star = 1; $star <= 5; $star++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm font-nunito leading-relaxed">
                                Sangat berkualitas baik, sangat potent. Prrim tertingkat sangat Aupel, cara pengiriman agak lama, dan proses pesanan pasket roulit bngt. Nvnya padakar se sed lengthnya. Masjed pyyitin rekomendasi kuliit, semekut dijanglung, abtil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Serupa Section -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito text-center">Kategori Serupa</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @forelse($similarProducts as $similarProduct)
                        @php
                            $similarProductImages = $productImages[$similarProduct->item_id] ?? [
                                'main' => 'images/products/gentle-baby/gentle-baby.png'
                            ];
                        @endphp
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow duration-200 product-card">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset($similarProductImages['main']) }}" 
                                     alt="{{ $similarProduct->name_item }}" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                     onerror="this.onerror=null; this.src='{{ asset('images/products/gentle-baby/gentle-baby.png') }}'">
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito text-sm line-clamp-2">{{ $similarProduct->name_item }}</h3>
                                <p class="text-teal-600 font-bold mb-3 font-nunito">{{ $similarProduct->formatted_price }}</p>
                                <a href="{{ route('produk.detail', $similarProduct->item_id) }}" class="block w-full bg-teal-600 text-white text-center py-2 rounded-lg hover:bg-teal-700 transition-colors duration-200 font-nunito text-sm">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                        @empty
                        @for($i = 1; $i <= 4; $i++)
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                            <div class="bg-gray-200 h-48 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-teal-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M9 9l6 6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito text-sm">Produk {{ $i }}</h3>
                                <p class="text-teal-600 font-bold mb-3 font-nunito">Rp100.000</p>
                                <button class="block w-full bg-teal-600 text-white text-center py-2 rounded-lg hover:bg-teal-700 transition-colors duration-200 font-nunito text-sm">
                                    Lihat Produk
                                </button>
                            </div>
                        </div>
                        @endfor
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Produk Lainnya Section -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 font-nunito text-center">Produk Lainnya</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @forelse($otherProducts as $otherProduct)
                        @php
                            $otherProductImages = $productImages[$otherProduct->item_id] ?? [
                                'main' => 'images/products/gentle-baby/gentle-baby.png'
                            ];
                        @endphp
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow duration-200 product-card">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset($otherProductImages['main']) }}" 
                                     alt="{{ $otherProduct->name_item }}" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                     onerror="this.onerror=null; this.src='{{ asset('images/products/gentle-baby/gentle-baby.png') }}'">
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito text-sm line-clamp-2">{{ $otherProduct->name_item }}</h3>
                                <p class="text-teal-600 font-bold mb-3 font-nunito">{{ $otherProduct->formatted_price }}</p>
                                <a href="{{ route('produk.detail', $otherProduct->item_id) }}" class="block w-full bg-teal-600 text-white text-center py-2 rounded-lg hover:bg-teal-700 transition-colors duration-200 font-nunito text-sm">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                        @empty
                        @for($i = 1; $i <= 4; $i++)
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                            <div class="bg-gray-200 h-48 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M9 9l6 6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 font-nunito text-sm">Produk {{ $i }}</h3>
                                <p class="text-teal-600 font-bold mb-3 font-nunito">Rp100.000</p>
                                <button class="block w-full bg-teal-600 text-white text-center py-2 rounded-lg hover:bg-teal-700 transition-colors duration-200 font-nunito text-sm">
                                    Lihat Produk
                                </button>
                            </div>
                        </div>
                        @endfor
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="mt-8 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="bg-teal-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito text-sm">Percayakan pada EXPERT-nya!</h3>
                            <p class="text-xs text-gray-600 font-nunito">Dikembangkan oleh Dokter Anak, Dokter Kulit, dan Psikolog Anak</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-teal-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito text-sm">Gratis Ongkir</h3>
                            <p class="text-xs text-gray-600 font-nunito">Pengiriman Express Seluruh Indonesia*</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-teal-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito text-sm">Gratis Pengembalian</h3>
                            <p class="text-xs text-gray-600 font-nunito">Gratis Pengembalian Selama 7 Hari Kerja</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-teal-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-1 font-nunito text-sm">Hubungi Kami</h3>
                            <p class="text-xs text-gray-600 font-nunito">Whatsapp +62 821-3716-1033</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Image gallery functionality
function changeMainImage(imageSrc, thumbnailElement) {
    const mainImage = document.getElementById('mainProductImage');
    mainImage.src = imageSrc;
    
    // Remove active state from all thumbnails
    const thumbnails = document.querySelectorAll('.grid.grid-cols-4 > div');
    thumbnails.forEach(thumb => {
        thumb.classList.remove('border-teal-500', 'border-2');
        thumb.classList.add('border-gray-200');
    });
    
    // Add active state to clicked thumbnail
    thumbnailElement.classList.remove('border-gray-200');
    thumbnailElement.classList.add('border-teal-500', 'border-2');
}

// Quantity controls
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

// Variant selection
function selectVariant(button) {
    // Remove active class from all variant buttons
    const variantButtons = button.parentNode.querySelectorAll('button');
    variantButtons.forEach(btn => {
        btn.classList.remove('border-teal-500', 'bg-teal-50');
        btn.classList.add('border-gray-300');
    });
    
    // Add active class to clicked button
    button.classList.remove('border-gray-300');
    button.classList.add('border-teal-500', 'bg-teal-50');
}

// Add to cart functionality
function addToCart() {
    const quantity = document.getElementById('quantity').value;
    const productId = {{ $product->item_id }};
    
    // Get selected variant
    const selectedVariant = document.querySelector('button.border-teal-500');
    const variantName = selectedVariant ? selectedVariant.textContent.trim() : 'Varian 1';
    
    // Here you would typically make an AJAX call to add to cart
    // For now, just show an alert
    alert(`Menambahkan ${quantity} item ${variantName} ke keranjang`);
    
    // You can implement actual cart functionality here
    /*
    fetch('{{ route("belanja.keranjang.add") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            product_id: productId,
            quantity: quantity,
            variant: variantName
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Produk berhasil ditambahkan ke keranjang!');
        }
    });
    */
}

// Buy now functionality
function buyNow() {
    const quantity = document.getElementById('quantity').value;
    const productId = {{ $product->item_id }};
    
    // Get selected variant
    const selectedVariant = document.querySelector('button.border-teal-500');
    const variantName = selectedVariant ? selectedVariant.textContent.trim() : 'Varian 1';
    
    // Here you would typically redirect to checkout with this product
    // For now, just show an alert
    alert(`Membeli ${quantity} item ${variantName} sekarang`);
    
    // You can implement actual buy now functionality here
    // window.location.href = '{{ route("belanja.checkout") }}?direct_buy=true&product_id=' + productId + '&quantity=' + quantity + '&variant=' + encodeURIComponent(variantName);
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    // Set first thumbnail as active if thumbnails exist
    const firstThumbnail = document.querySelector('.grid.grid-cols-4 > div:first-child');
    if (firstThumbnail && firstThumbnail.querySelector('img')) {
        firstThumbnail.classList.add('border-teal-500', 'border-2');
        firstThumbnail.classList.remove('border-gray-200');
    }
});
</script>

@endsection

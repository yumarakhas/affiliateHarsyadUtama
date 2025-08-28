@extends('layouts.admin.app')

@section('title', 'Tambah Varian Produk')

@section('content')
<div class="p-6">
    <!-- Content Navigation -->
    <div class="mb-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-900" style="font-family: 'Nunito', sans-serif;">
                Kelola Konten Landing Page
            </h1>
            <a href="{{ route('admin.content.index') }}" 
               class="text-gray-600 hover:text-gray-800 text-sm">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Dashboard
            </a>
        </div>
        
        <!-- Horizontal Menu Navigation -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-6">
            <div class="flex space-x-1 overflow-x-auto">
                <!-- Carousel Produk -->
                <a href="{{ route('admin.content.carousel-produk') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.carousel-produk*') ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Carousel Produk
                </a>

                <!-- Benefits -->
                <a href="{{ route('admin.content.benefits') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.benefits*') ? 'bg-green-500 text-white shadow-md' : 'text-gray-600 hover:text-green-600 hover:bg-green-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Benefits
                </a>

                <!-- Carousel Varian (Active) -->
                <a href="{{ route('admin.content.carousel-varian') }}" 
                   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                          {{ Request::routeIs('admin.content.carousel-varian*') || Request::routeIs('admin.products*') ? 'bg-purple-500 text-white shadow-md' : 'text-gray-600 hover:text-purple-600 hover:bg-purple-50' }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Carousel Varian
                </a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold text-gray-900">
                    Tambah Varian Produk Baru
                    @if(request('category'))
                        <span class="text-base font-normal text-gray-600">
                            - 
                            @if(request('category') == 'gentle-baby') 
                                <span class="text-blue-600 font-semibold">Gentle Baby</span>
                            @elseif(request('category') == 'mamina') 
                                <span class="text-pink-600 font-semibold">Mamina</span>
                            @elseif(request('category') == 'nyam') 
                                <span class="text-orange-600 font-semibold">Nyam! MPASI</span>
                            @endif
                        </span>
                    @endif
                </h2>
                <p class="text-gray-600 mt-1">Buat varian produk baru untuk carousel varian di halaman utama</p>
                
                @if(request('category'))
                    <div class="mt-2 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                {{ request('category') == 'gentle-baby' ? 'bg-blue-100 text-blue-800' : 
                                   (request('category') == 'mamina' ? 'bg-pink-100 text-pink-800' : 
                                   (request('category') == 'nyam' ? 'bg-orange-100 text-orange-800' : '')) }}">
                        <div class="w-2 h-2 rounded-full mr-2 
                                    {{ request('category') == 'gentle-baby' ? 'bg-blue-400' : 
                                       (request('category') == 'mamina' ? 'bg-pink-400' : 
                                       (request('category') == 'nyam' ? 'bg-orange-400' : '')) }}"></div>
                        Kategori: 
                        @if(request('category') == 'gentle-baby') Gentle Baby
                        @elseif(request('category') == 'mamina') Mamina  
                        @elseif(request('category') == 'nyam') Nyam! MPASI
                        @endif
                    </div>
                @endif
            </div>
            <a href="{{ route('admin.content.carousel-varian') }}{{ request('category') ? '?category=' . request('category') : '' }}" 
               class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.content.carousel-varian.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div>
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Nama Produk *
                        </label>
                        <input type="text" id="name" name="name" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]"
                               value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi
                        </label>
                        <textarea id="description" name="description" rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                            Kategori *
                        </label>
                        <select id="category" name="category" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]" required>
                            <option value="">Pilih Kategori</option>
                            <option value="gentle-baby" {{ old('category', request('category')) == 'gentle-baby' ? 'selected' : '' }}>Gentle Baby</option>
                            <option value="mamina" {{ old('category', request('category')) == 'mamina' ? 'selected' : '' }}>Mamina</option>
                            <option value="nyam" {{ old('category', request('category')) == 'nyam' ? 'selected' : '' }}>Nyam! MPASI</option>
                            <option value="general" {{ old('category', request('category')) == 'general' ? 'selected' : '' }}>Umum</option>
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                            Gambar Produk
                        </label>
                        <input type="file" id="image" name="image" accept="image/*"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB.</p>
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Status & Order -->
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                                Status
                            </label>
                            <select id="status" name="status" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                                <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                        </div>
                        <div>
                            <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                                Urutan
                            </label>
                            <input type="number" id="order" name="order" min="0"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]"
                                   value="{{ old('order', 0) }}">
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Manfaat/Keunggulan
                        </label>
                        <div id="benefits-container">
                            <div class="flex mb-2 benefit-item">
                                <input type="text" name="benefits[]" placeholder="Masukkan manfaat produk"
                                       class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                                <button type="button" onclick="removeBenefit(this)" 
                                        class="ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" onclick="addBenefit()" 
                                class="mt-2 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                            <i class="fas fa-plus mr-2"></i>Tambah Manfaat
                        </button>
                    </div>

                    <!-- Variants -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Varian Produk
                        </label>
                        <div id="variants-container">
                            <div class="mb-2 variant-item">
                                <input type="text" name="variants[0][name]" placeholder="Nama varian"
                                       class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                                <textarea name="variants[0][description]" placeholder="Deskripsi varian" rows="2"
                                          class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]"></textarea>
                                <button type="button" onclick="removeVariant(this)" 
                                        class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </div>
                        </div>
                        <button type="button" onclick="addVariant()" 
                                class="mt-2 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                            <i class="fas fa-plus mr-2"></i>Tambah Varian
                        </button>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end space-x-4 mt-6 pt-6 border-t">
                <a href="{{ route('admin.content.carousel-varian') }}{{ request('category') ? '?category=' . request('category') : '' }}" 
                   class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition-colors">
                    Simpan Varian Produk
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let variantCount = 1;

function addBenefit() {
    const container = document.getElementById('benefits-container');
    const div = document.createElement('div');
    div.className = 'flex mb-2 benefit-item';
    div.innerHTML = `
        <input type="text" name="benefits[]" placeholder="Masukkan manfaat produk"
               class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
        <button type="button" onclick="removeBenefit(this)" 
                class="ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
            <i class="fas fa-trash"></i>
        </button>
    `;
    container.appendChild(div);
}

function removeBenefit(button) {
    const container = document.getElementById('benefits-container');
    if (container.children.length > 1) {
        button.parentElement.remove();
    }
}

function addVariant() {
    const container = document.getElementById('variants-container');
    const div = document.createElement('div');
    div.className = 'mb-2 variant-item';
    div.innerHTML = `
        <input type="text" name="variants[${variantCount}][name]" placeholder="Nama varian"
               class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
        <textarea name="variants[${variantCount}][description]" placeholder="Deskripsi varian" rows="2"
                  class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]"></textarea>
        <button type="button" onclick="removeVariant(this)" 
                class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-sm">
            <i class="fas fa-trash"></i> Hapus
        </button>
    `;
    container.appendChild(div);
    variantCount++;
}

function removeVariant(button) {
    const container = document.getElementById('variants-container');
    if (container.children.length > 1) {
        button.parentElement.remove();
    }
}
</script>
@endsection

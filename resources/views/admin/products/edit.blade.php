@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900" style="font-family: 'Nunito', sans-serif;">
                    Edit Produk: {{ $product->name }}
                </h1>
                <p class="text-gray-600 mt-1">Edit informasi produk yang akan ditampilkan di halaman produk</p>
            </div>
            <a href="{{ route('admin.products.index') }}" 
               class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
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
                               value="{{ old('name', $product->name) }}" required>
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
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">{{ old('description', $product->description) }}</textarea>
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
                            <option value="gentle-baby" {{ old('category', $product->category) == 'gentle-baby' ? 'selected' : '' }}>Gentle Baby</option>
                            <option value="mamina" {{ old('category', $product->category) == 'mamina' ? 'selected' : '' }}>Mamina</option>
                            <option value="nyam" {{ old('category', $product->category) == 'nyam' ? 'selected' : '' }}>Nyam! MPASI</option>
                            <option value="general" {{ old('category', $product->category) == 'general' ? 'selected' : '' }}>Umum</option>
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Image -->
                    @if($product->image)
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Gambar Saat Ini
                            </label>
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" 
                                 class="w-32 h-32 object-cover rounded-lg border">
                        </div>
                    @endif

                    <!-- Image -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $product->image ? 'Ganti Gambar Produk' : 'Gambar Produk' }}
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
                                <option value="1" {{ old('status', $product->status ? '1' : '0') == '1' ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ old('status', $product->status ? '1' : '0') == '0' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                        </div>
                        <div>
                            <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                                Urutan
                            </label>
                            <input type="number" id="order" name="order" min="0"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]"
                                   value="{{ old('order', $product->order) }}">
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Manfaat/Keunggulan
                        </label>
                        <div id="benefits-container">
                            @php
                                $benefits = old('benefits', $product->content['benefits'] ?? ['']);
                                if (empty($benefits)) $benefits = [''];
                            @endphp
                            @foreach($benefits as $index => $benefit)
                                <div class="flex mb-2 benefit-item">
                                    <input type="text" name="benefits[]" placeholder="Masukkan manfaat produk"
                                           value="{{ $benefit }}"
                                           class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                                    <button type="button" onclick="removeBenefit(this)" 
                                            class="ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endforeach
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
                            @php
                                $variants = old('variants', $product->content['variants'] ?? [['name' => '', 'description' => '']]);
                                if (empty($variants)) $variants = [['name' => '', 'description' => '']];
                            @endphp
                            @foreach($variants as $index => $variant)
                                <div class="mb-2 variant-item">
                                    <input type="text" name="variants[{{ $index }}][name]" placeholder="Nama varian"
                                           value="{{ $variant['name'] ?? '' }}"
                                           class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">
                                    <textarea name="variants[{{ $index }}][description]" placeholder="Deskripsi varian" rows="2"
                                              class="w-full mb-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#528B89]">{{ $variant['description'] ?? '' }}</textarea>
                                    <button type="button" onclick="removeVariant(this)" 
                                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-sm">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </div>
                            @endforeach
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
                <a href="{{ route('admin.products.index') }}" 
                   class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Batal
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-brand-500 text-white rounded-md hover:bg-brand-600 transition-colors">
                    Update Produk
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let variantCount = {{ count($variants) }};

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

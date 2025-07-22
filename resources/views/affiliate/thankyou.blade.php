@extends('layouts.app')

@section('title', 'Terima Kasih - Gentle Living')

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center py-12">
    <div class="max-w-md mx-auto px-6">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center">
            <!-- Success Icon -->
            <div class="w-20 h-20 mx-auto mb-6 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <!-- Thank You Message -->
            <h1 style="font-family: 'Fredoka One', cursive;" class="text-2xl md:text-3xl text-[#528B89] mb-4">
                Terima Kasih!
            </h1>
            
            <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600 mb-6 leading-relaxed">
                Pendaftaran Anda sebagai affiliator telah berhasil dikirim. Tim kami akan segera memproses pendaftaran Anda.
            </p>

            <div class="bg-[#528B89]/10 rounded-lg p-4 mb-6">
                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-[#528B89] font-semibold mb-2">
                    Untuk proses yang lebih cepat, silakan hubungi admin kami langsung melalui WhatsApp.
                </p>
            </div>

            @php
                $adminWhatsApp = '6285183252514'; // GANTI dengan nomor WhatsApp admin Gentle Living yang sebenarnya
                $namaLengkap = session('nama_lengkap', 'Calon Affiliate');
                $message = "Halo Admin Gentle Living! Saya " . $namaLengkap . " baru saja mendaftar sebagai affiliate partner melalui website. Mohon konfirmasi pendaftaran saya. Terima kasih!";
                $whatsappUrl = "https://wa.me/" . $adminWhatsApp . "?text=" . urlencode($message);
            @endphp

            <!-- Action Buttons -->
            <div class="space-y-3">
                <a href="{{ $whatsappUrl }}" 
                   target="_blank"
                   class="block w-full px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                    Hubungi Admin via WhatsApp
                </a>
                
                <a href="{{ route('affiliate.form') }}" 
                   class="block w-full px-6 py-3 bg-[#528B89] text-white font-semibold rounded-lg hover:bg-[#446b6a] transition-colors duration-300">
                    Daftar Lagi
                </a>
                
                <a href="{{ url('/') }}" 
                   class="block w-full px-6 py-3 border-2 border-[#528B89] text-[#528B89] font-semibold rounded-lg hover:bg-[#528B89] hover:text-white transition-colors duration-300">
                    Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-6">
            <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-500">
                Dengan menghubungi admin via WhatsApp, proses verifikasi akun affiliate Anda akan lebih cepat.
            </p>
        </div>
    </div>
</div>
@endsection

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
            <h1 style="font-family: 'Fredoka One', cursive;" class="text-2xl md:text-3xl text-brand-500 mb-4">
                Terima Kasih!
            </h1>
            
            <p style="font-family: 'Nunito', sans-serif;" class="text-gray-600 mb-6 leading-relaxed">
                Pendaftaran Anda telah berhasil dikirim. Tim kami akan menghubungi Anda untuk proses selanjutnya.
            </p>

            <div class="bg-brand-500/10 rounded-lg p-4 mb-6">
                <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-brand-500 font-semibold">
                    Admin akan menghubungi Anda melalui kontak yang telah diberikan.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3">
                
                <a href="{{ url('/partner') }}" 
                   class="block w-full px-6 py-3 border-2 border-brand-500 text-brand-500 font-semibold rounded-lg hover:bg-brand-500 hover:text-white transition-colors duration-300">
                    Kembali ke Halaman Awal
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-6">
            <p style="font-family: 'Nunito', sans-serif;" class="text-sm text-gray-500">
                Terima kasih telah bergabung dengan Gentle Living!
            </p>
        </div>
    </div>
</div>
@endsection

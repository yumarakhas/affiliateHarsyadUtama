<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffiliateRegistration;
use App\Models\AffiliateInfo;
use Illuminate\Support\Facades\DB;

class AffiliateController extends Controller
{
    public function showForm()
    {
        return view('affiliate.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:affiliate_registrations,email',
            'nama_lengkap' => 'required|string|max:255',
            'kontak_whatsapp' => 'required|string|max:255',
            'kota_domisili' => 'required|string|max:255',
            'akun_instagram' => 'nullable|string|max:255',
            'akun_tiktok' => 'nullable|string|max:255',
            'profesi_kesibukan' => 'required|string',
            'info_darimana' => 'required|array|min:1',
            'yang_lain_text' => 'nullable|string|max:255',
            'persetujuan' => 'required|accepted'
        ], [
            'persetujuan.required' => 'Anda harus menyetujui syarat dan ketentuan untuk melanjutkan pendaftaran.',
            'persetujuan.accepted' => 'Anda harus menyetujui syarat dan ketentuan untuk melanjutkan pendaftaran.'
        ]);

        // Validasi minimal salah satu akun sosial media harus diisi
        if (empty($request->akun_instagram) && empty($request->akun_tiktok)) {
            return redirect()->back()->withInput()->withErrors([
                'akun_sosmed' => 'Minimal salah satu akun Instagram atau TikTok harus diisi.'
            ]);
        }

        // Validasi untuk "Yang lain" - jika dipilih harus ada keterangan
        if (in_array('Yang lain', $request->info_darimana) && empty($request->yang_lain_text)) {
            return redirect()->back()->withInput()->withErrors([
                'yang_lain_text' => 'Silakan isi keterangan untuk pilihan "Yang lain".'
            ]);
        }

        try {
            DB::beginTransaction();

            // Proses data info_darimana untuk menggabungkan "Yang lain" dengan teksnya
            $infoDarimana = $request->info_darimana;
            if (in_array('Yang lain', $infoDarimana) && !empty($request->yang_lain_text)) {
                // Ganti "Yang lain" dengan "Yang lain: [teks keterangan]"
                $key = array_search('Yang lain', $infoDarimana);
                $infoDarimana[$key] = 'Yang lain: ' . $request->yang_lain_text;
            }

            // Simpan data registrasi
            $registration = AffiliateRegistration::create([
                'email' => $request->email,
                'nama_lengkap' => $request->nama_lengkap,
                'kontak_whatsapp' => $request->kontak_whatsapp,
                'kota_domisili' => $request->kota_domisili,
                'akun_instagram' => $request->akun_instagram,
                'akun_tiktok' => $request->akun_tiktok,
                'profesi_kesibukan' => $request->profesi_kesibukan,
            ]);

            // Simpan info tambahan
            AffiliateInfo::create([
                'affiliate_registration_id' => $registration->id,
                'info_darimana' => $infoDarimana
            ]);

            DB::commit();

            return redirect()->route('affiliate.thankyou')->with([
                'success' => 'Pendaftaran Anda berhasil disimpan!',
                'nama_lengkap' => $request->nama_lengkap
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function thankYou()
    {
        return view('affiliate.thankyou');
    }
}

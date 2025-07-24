<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AffiliateRegistration;
use App\Models\AffiliateInfo;

class TestAffiliateSeeder extends Seeder
{
    public function run(): void
    {
        // Create test affiliate registration
        $affiliate1 = AffiliateRegistration::create([
            'email' => 'mama@gmail.com',
            'nama_lengkap' => 'mamala',
            'kontak_whatsapp' => '085634567890',
            'kota_domisili' => 'Pasuruan',
            'profesi_kesibukan' => 'Ibu Rumah Tangga & Content Creator',
            'info_darimana' => 'Instagram',
            'yang_lain_text' => null,
            'status' => 'Aktif'
        ]);

        // Create affiliate info
        AffiliateInfo::create([
            'affiliate_registration_id' => $affiliate1->id,
            'akun_instagram' => '@mama',
            'akun_tiktok' => null
        ]);

        // Create second test data
        $affiliate2 = AffiliateRegistration::create([
            'email' => 'sasa@gmail.com',
            'nama_lengkap' => 'saaa',
            'kontak_whatsapp' => '087345678901',
            'kota_domisili' => 'Kediri',
            'profesi_kesibukan' => 'Mahasiswa & Freelancer',
            'info_darimana' => 'TikTok',
            'yang_lain_text' => null,
            'status' => 'Aktif'
        ]);

        AffiliateInfo::create([
            'affiliate_registration_id' => $affiliate2->id,
            'akun_instagram' => null,
            'akun_tiktok' => '@sasa'
        ]);

        // Create third test data
        $affiliate3 = AffiliateRegistration::create([
            'email' => 'lala@gmail.com',
            'nama_lengkap' => 'lalaya',
            'kontak_whatsapp' => '08523476523',
            'kota_domisili' => 'Malang',
            'profesi_kesibukan' => 'Digital Marketing Specialist',
            'info_darimana' => 'Instagram, Teman',
            'yang_lain_text' => null,
            'status' => 'Aktif'
        ]);

        AffiliateInfo::create([
            'affiliate_registration_id' => $affiliate3->id,
            'akun_instagram' => '@lalaya',
            'akun_tiktok' => '@lalaya'
        ]);

        $this->command->info('Successfully created 3 test affiliates!');
    }
}

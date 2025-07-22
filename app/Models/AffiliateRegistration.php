<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliateRegistration extends Model
{
    protected $fillable = [
        'email',
        'nama_lengkap',
        'kontak_whatsapp',
        'kota_domisili',
        'akun_instagram',
        'akun_tiktok',
        'profesi_kesibukan'
    ];

    public function affiliateInfo()
    {
        return $this->hasOne(AffiliateInfo::class);
    }
}

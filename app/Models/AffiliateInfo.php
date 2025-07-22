<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliateInfo extends Model
{
    protected $table = 'affiliate_info';
    
    protected $fillable = [
        'affiliate_registration_id',
        'info_darimana'
    ];

    protected $casts = [
        'info_darimana' => 'array'
    ];

    public function affiliateRegistration()
    {
        return $this->belongsTo(AffiliateRegistration::class);
    }
}

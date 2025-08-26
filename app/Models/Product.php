<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
        'price',
        'stock',
        'status',
        'order',
        'content'
    ];

    protected $casts = [
        'content' => 'array',
        'status' => 'boolean'
    ];

    // Scope untuk produk aktif
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // Scope untuk urutan
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at');
    }
}

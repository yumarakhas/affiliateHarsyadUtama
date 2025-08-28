<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'item_id';
    
    protected $fillable = [
        'category_id',
        'name_item',
        'description_item',
        'ingredient_item', 
        'netweight_item',
        'contain_item',
        'costprice_item',
        'sell_price',
        'stock',
        'unit_item'
    ];

    protected $casts = [
        'costprice_item' => 'float',
        'sell_price' => 'float',
        'stock' => 'integer',
        'category_id' => 'integer'
    ];

    // Relationship dengan kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Scope untuk produk yang tersedia (stock > 0)
    public function scopeAvailable($query)
    {
        return $query->where('stock', '>', 0);
    }

    // Scope untuk produk berdasarkan kategori
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    // Accessor untuk format harga
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->sell_price, 0, ',', '.');
    }

    // Accessor untuk status stok
    public function getStockStatusAttribute()
    {
        if ($this->stock <= 0) {
            return 'out_of_stock';
        } elseif ($this->stock <= 5) {
            return 'low_stock';
        } else {
            return 'in_stock';
        }
    }
}

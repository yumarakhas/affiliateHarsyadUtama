<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Minyak Bayi',
                'slug' => 'minyak-bayi',
                'description' => 'Minyak esensial dan produk perawatan khusus untuk bayi',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'id' => 2,
                'name' => 'Aromaterapi',
                'slug' => 'aromaterapi',
                'description' => 'Produk aromaterapi untuk relaksasi dan terapi',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'id' => 3,
                'name' => 'Kesehatan',
                'slug' => 'kesehatan',
                'description' => 'Produk minyak untuk mendukung kesehatan tubuh',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'id' => 4,
                'name' => 'Perawatan Kulit',
                'slug' => 'perawatan-kulit',
                'description' => 'Produk perawatan kulit alami',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'id' => 5,
                'name' => 'Essential Oil',
                'slug' => 'essential-oil',
                'description' => 'Minyak esensial murni untuk berbagai kebutuhan',
                'is_active' => true,
                'sort_order' => 5
            ]
        ];

        foreach ($categories as $category) {
            // Check if category already exists
            $existingCategory = Category::where('id', $category['id'])->orWhere('slug', $category['slug'])->first();
            
            if (!$existingCategory) {
                Category::create($category);
            }
        }
    }
}

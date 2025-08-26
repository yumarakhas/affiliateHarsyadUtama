<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcommerceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing products
        Product::truncate();
        
        $products = [
            [
                'name' => 'Anti-Aging Face Oil',
                'description' => 'Natural anti-aging face oil untuk perawatan kulit wajah',
                'category' => 'gentle-baby',
                'price' => 380000,
                'stock' => 6,
                'status' => true,
                'order' => 1,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Anti-aging', 'Melembapkan', 'Mencerahkan kulit']
                ]
            ],
            [
                'name' => 'Digestive Support Oil',
                'description' => 'Minyak untuk mendukung sistem pencernaan bayi',
                'category' => 'gentle-baby',
                'price' => 175000,
                'stock' => 14,
                'status' => true,
                'order' => 2,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Mendukung pencernaan', 'Mengurangi kolik', 'Aman untuk bayi']
                ]
            ],
            [
                'name' => 'Energizing Citrus Blend',
                'description' => 'Blend citrus yang memberikan energi dan kesegaran',
                'category' => 'aromatherapy',
                'price' => 125000,
                'stock' => 18,
                'status' => true,
                'order' => 3,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Memberikan energi', 'Aroma segar', 'Mood booster']
                ]
            ],
            [
                'name' => 'Calming Lavender Oil',
                'description' => 'Minyak lavender untuk ketenangan dan relaksasi',
                'category' => 'aromatherapy',
                'price' => 220000,
                'stock' => 12,
                'status' => true,
                'order' => 4,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Menenangkan', 'Mengurangi stress', 'Aromaterapi']
                ]
            ],
            [
                'name' => 'Sleep Blend Essential Oil',
                'description' => 'Campuran essential oil untuk tidur yang lebih nyenyak',
                'category' => 'aromatherapy',
                'price' => 195000,
                'stock' => 8,
                'status' => true,
                'order' => 5,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Meningkatkan kualitas tidur', 'Relaksasi', 'Natural']
                ]
            ],
            [
                'name' => 'Immunity Boost Oil',
                'description' => 'Minyak untuk meningkatkan daya tahan tubuh',
                'category' => 'gentle-baby',
                'price' => 285000,
                'stock' => 7,
                'status' => true,
                'order' => 6,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Meningkatkan imunitas', 'Mencegah penyakit', 'Aman untuk anak']
                ]
            ],
            // Additional products to reach 19 total
            [
                'name' => 'Gentle Baby Massage Oil',
                'description' => 'Minyak pijat khusus untuk bayi',
                'category' => 'gentle-baby',
                'price' => 165000,
                'stock' => 20,
                'status' => true,
                'order' => 7,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Minyak pijat aman', 'Melembapkan kulit', 'Menenangkan bayi']
                ]
            ],
            [
                'name' => 'Eucalyptus Decongestant',
                'description' => 'Minyak eucalyptus untuk melegakan pernafasan',
                'category' => 'aromatherapy',
                'price' => 145000,
                'stock' => 15,
                'status' => true,
                'order' => 8,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Melegakan pernafasan', 'Mengurangi kongesti', 'Antibakteri']
                ]
            ],
            [
                'name' => 'Peppermint Fresh Oil',
                'description' => 'Minyak peppermint untuk kesegaran alami',
                'category' => 'aromatherapy',
                'price' => 135000,
                'stock' => 25,
                'status' => true,
                'order' => 9,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Aroma menyegarkan', 'Menghilangkan bau', 'Cooling effect']
                ]
            ],
            [
                'name' => 'Tea Tree Antiseptic',
                'description' => 'Minyak tea tree dengan sifat antiseptik',
                'category' => 'aromatherapy',
                'price' => 180000,
                'stock' => 10,
                'status' => true,
                'order' => 10,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Antiseptik alami', 'Mengobati jerawat', 'Antibakteri']
                ]
            ],
            [
                'name' => 'Chamomile Calming Oil',
                'description' => 'Minyak chamomile untuk menenangkan kulit sensitif',
                'category' => 'gentle-baby',
                'price' => 210000,
                'stock' => 9,
                'status' => true,
                'order' => 11,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Menenangkan kulit', 'Anti-inflamasi', 'Aman untuk bayi']
                ]
            ],
            [
                'name' => 'Orange Citrus Blend',
                'description' => 'Blend citrus jeruk untuk mood positif',
                'category' => 'aromatherapy',
                'price' => 115000,
                'stock' => 22,
                'status' => true,
                'order' => 12,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Mood booster', 'Aroma manis', 'Energizing']
                ]
            ],
            [
                'name' => 'Rose Hydrating Oil',
                'description' => 'Minyak mawar untuk hidrasi kulit optimal',
                'category' => 'skincare',
                'price' => 320000,
                'stock' => 5,
                'status' => true,
                'order' => 13,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Hidrasi mendalam', 'Anti-aging', 'Aromaterapi']
                ]
            ],
            [
                'name' => 'Lemon Fresh Cleaner',
                'description' => 'Pembersih alami dengan aroma lemon',
                'category' => 'aromatherapy',
                'price' => 95000,
                'stock' => 30,
                'status' => true,
                'order' => 14,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Pembersih alami', 'Aroma segar', 'Antibakteri']
                ]
            ],
            [
                'name' => 'Frankincense Premium',
                'description' => 'Minyak frankincense premium untuk meditasi',
                'category' => 'essential-oil',
                'price' => 450000,
                'stock' => 3,
                'status' => true,
                'order' => 15,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Meditasi', 'Spiritual healing', 'Premium quality']
                ]
            ],
            [
                'name' => 'Ylang Ylang Romantic',
                'description' => 'Minyak ylang ylang untuk suasana romantis',
                'category' => 'aromatherapy',
                'price' => 265000,
                'stock' => 6,
                'status' => true,
                'order' => 16,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Aroma romantis', 'Aphrodisiac', 'Menenangkan']
                ]
            ],
            [
                'name' => 'Bergamot Earl Grey',
                'description' => 'Minyak bergamot dengan aroma Earl Grey',
                'category' => 'aromatherapy',
                'price' => 185000,
                'stock' => 11,
                'status' => true,
                'order' => 17,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Aroma khas', 'Mood enhancer', 'Stress relief']
                ]
            ],
            [
                'name' => 'Sandalwood Meditation',
                'description' => 'Minyak cendana untuk meditasi dan ketenangan',
                'category' => 'essential-oil',
                'price' => 380000,
                'stock' => 4,
                'status' => true,
                'order' => 18,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Meditasi', 'Spiritual', 'Ketenangan jiwa']
                ]
            ],
            [
                'name' => 'Jasmine Night Bloom',
                'description' => 'Minyak melati untuk aroma malam yang mewah',
                'category' => 'aromatherapy',
                'price' => 340000,
                'stock' => 7,
                'status' => true,
                'order' => 19,
                'content' => [
                    'size' => 'Standard',
                    'benefits' => ['Aroma mewah', 'Romantic', 'Premium quality']
                ]
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

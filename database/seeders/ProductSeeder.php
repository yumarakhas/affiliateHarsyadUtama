<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Gentle Baby - Cough n Flu',
                'description' => 'Minyak oles flu, pilek untuk balita',
                'category' => 'gentle-baby',
                'status' => true,
                'order' => 1,
                'content' => [
                    'benefits' => [
                        'MINYAK PIJAT BAYI BALITA',
                        'Bahan Alami, AMAN untuk BAYI mulai usia 0-4th',
                        'FREE Konsultasi seputar kesehatan bayi/balita dan ibu menyusui'
                    ],
                    'variants' => [
                        [
                            'name' => 'Cough n Flu',
                            'description' => 'Minyak oles flu, pilek untuk balita'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ],
            [
                'name' => 'Gentle Baby - Deep Sleep',
                'description' => 'Minyak aromaterapi untuk tidur nyenyak',
                'category' => 'gentle-baby',
                'status' => true,
                'order' => 2,
                'content' => [
                    'benefits' => [
                        'Membantu bayi tidur lebih nyenyak',
                        'Aromaterapi yang menenangkan',
                        'Bahan alami dan aman'
                    ],
                    'variants' => [
                        [
                            'name' => 'Deep Sleep',
                            'description' => 'Aromaterapi untuk tidur nyenyak'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ],
            [
                'name' => 'Gentle Baby - Gimme Food',
                'description' => 'Minyak aromaterapi untuk meningkatkan nafsu makan',
                'category' => 'gentle-baby',
                'status' => true,
                'order' => 3,
                'content' => [
                    'benefits' => [
                        'Meningkatkan nafsu makan anak',
                        'Aromaterapi yang menyegarkan',
                        'Membantu pencernaan'
                    ],
                    'variants' => [
                        [
                            'name' => 'Gimme Food',
                            'description' => 'Untuk meningkatkan nafsu makan'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ],
            [
                'name' => 'Gentle Baby - Joy',
                'description' => 'Minyak aromaterapi untuk mood booster',
                'category' => 'gentle-baby',
                'status' => true,
                'order' => 4,
                'content' => [
                    'benefits' => [
                        'Meningkatkan mood bayi',
                        'Memberikan ketenangan',
                        'Aromaterapi yang menyenangkan'
                    ],
                    'variants' => [
                        [
                            'name' => 'Joy',
                            'description' => 'Mood booster untuk si kecil'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ],
            [
                'name' => 'Mamina ASI Booster',
                'description' => 'Pelancar ASI dari bahan Rempah Alami',
                'category' => 'mamina',
                'status' => true,
                'order' => 5,
                'content' => [
                    'benefits' => [
                        'Meningkatkan produksi ASI',
                        'Bahan rempah alami',
                        'Aman untuk ibu menyusui',
                        'Konsultasi gratis dengan ahli laktasi'
                    ],
                    'variants' => [
                        [
                            'name' => 'Original',
                            'description' => 'Formula original dengan rempah pilihan'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ],
            [
                'name' => 'Nyam! MPASI',
                'description' => 'Makanan Pendamping ASI (MPASI)',
                'category' => 'nyam',
                'status' => true,
                'order' => 6,
                'content' => [
                    'benefits' => [
                        'Nutrisi lengkap untuk bayi 6+ bulan',
                        'Bahan organik berkualitas tinggi',
                        'Mudah dicerna',
                        'Berbagai varian rasa'
                    ],
                    'variants' => [
                        [
                            'name' => 'Bubur Beras Merah',
                            'description' => 'MPASI pertama dengan beras merah organik'
                        ],
                        [
                            'name' => 'Bubur Sayuran',
                            'description' => 'Kombinasi sayuran segar untuk nutrisi optimal'
                        ]
                    ],
                    'features' => [],
                    'reviews' => []
                ]
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menjalankan seeder sederhana untuk membuat admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gentleliving.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Kebon Jeruk No. 10, Jakarta Barat, DKI Jakarta'
        ]);

        // Menjalankan seeder untuk data affiliate dummy
        $this->call([
            CategorySeeder::class,
            MasterItemSeeder::class,
            AffiliateWithSocialMediaSeeder::class,
            CustomerSeeder::class,
        ]);
    }
}

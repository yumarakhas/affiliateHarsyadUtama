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
        // Menjalankan seeder sederhana untuk membuat admin (cek dulu apakah sudah ada)
        $adminExists = User::where('email', 'admin@gentleliving.com')->first();
        
        if (!$adminExists) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gentleliving.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin123'),
                'role' => 'admin',
                'phone' => '081234567890',
                'address' => 'Jl. Kebon Jeruk No. 10, Jakarta Barat, DKI Jakarta'
            ]);
            User::create([
                'name' => 'Test',
                'email' => 'test@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('test1234'),
                'role' => 'user',
                'phone' => '081234567890',
                'address' => 'Jl. Kebon Jeruk No. 10, Jakarta Barat, DKI Jakarta'
            ]);
        }

        // Menjalankan seeder untuk data affiliate dummy
        $this->call([
            CategorySeeder::class,
            MasterItemSeeder::class,
            AffiliateWithSocialMediaSeeder::class,
            CustomerSeeder::class,
        ]);
    }
}

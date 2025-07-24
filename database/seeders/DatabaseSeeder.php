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
        ]);

        // Menjalankan seeder untuk data affiliate dummy
        $this->call([
            AffiliateWithSocialMediaSeeder::class,
        ]);
    }
}

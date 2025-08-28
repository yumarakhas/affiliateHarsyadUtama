<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@gentleliving.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'name' => 'Admin Gentle Living',
            'email' => 'admin2@gentleliving.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);
    }
}

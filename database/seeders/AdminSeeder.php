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
        // Check if admin already exists before creating
        $superAdminExists = Admin::where('email', 'admin@gentleliving.com')->first();
        
        if (!$superAdminExists) {
            Admin::create([
                'name' => 'Super Admin',
                'email' => 'admin@gentleliving.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
            ]);
        }

        $admin2Exists = Admin::where('email', 'admin2@gentleliving.com')->first();
        
        if (!$admin2Exists) {
            Admin::create([
                'name' => 'Admin Gentle Living',
                'email' => 'admin2@gentleliving.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
            ]);
        }
    }
}

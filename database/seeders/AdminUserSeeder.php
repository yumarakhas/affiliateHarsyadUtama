<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if not exists
        $adminExists = User::where('email', 'admin@gentleliving.com')->first();
        
        if (!$adminExists) {
            User::create([
                'name' => 'Admin Gentle Living',
                'email' => 'admin@gentleliving.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'phone' => '081234567890',
                'address' => 'Jakarta, Indonesia'
            ]);
        }

        // Create regular user for testing if not exists
        $userExists = User::where('email', 'user@example.com')->first();
        
        if (!$userExists) {
            User::create([
                'name' => 'User Test',
                'email' => 'user@example.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
                'phone' => '081234567891',
                'address' => 'Bandung, Indonesia'
            ]);
        }
    }
}

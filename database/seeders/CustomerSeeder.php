<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'siti.nurhaliza@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567892',
                'address' => 'Jl. Merdeka No. 15, Jakarta Pusat, DKI Jakarta'
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567893',
                'address' => 'Jl. Sudirman No. 25, Surabaya, Jawa Timur'
            ],
            [
                'name' => 'Rina Dewi',
                'email' => 'rina.dewi@yahoo.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567894',
                'address' => 'Jl. Ahmad Yani No. 8, Bandung, Jawa Barat'
            ],
            [
                'name' => 'Ahmad Fauzi',
                'email' => 'ahmad.fauzi@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567895',
                'address' => 'Jl. Gajah Mada No. 12, Medan, Sumatera Utara'
            ],
            [
                'name' => 'Maya Sari',
                'email' => 'maya.sari@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567896',
                'address' => 'Jl. Diponegoro No. 20, Yogyakarta, DI Yogyakarta'
            ],
            [
                'name' => 'Dedi Kurniawan',
                'email' => 'dedi.kurniawan@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567897',
                'address' => 'Jl. Pemuda No. 18, Semarang, Jawa Tengah'
            ],
            [
                'name' => 'Lisa Permata',
                'email' => 'lisa.permata@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567898',
                'address' => 'Jl. Panglima Sudirman No. 30, Palembang, Sumatera Selatan'
            ],
            [
                'name' => 'Rio Prasetyo',
                'email' => 'rio.prasetyo@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567899',
                'address' => 'Jl. Cut Nyak Dien No. 5, Denpasar, Bali'
            ],
            [
                'name' => 'Indah Lestari',
                'email' => 'indah.lestari@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567900',
                'address' => 'Jl. Pattimura No. 22, Makassar, Sulawesi Selatan'
            ],
            [
                'name' => 'Bambang Wijaya',
                'email' => 'bambang.wijaya@gmail.com',
                'password' => Hash::make('customer123'),
                'role' => 'user',
                'phone' => '081234567901',
                'address' => 'Jl. Veteran No. 14, Malang, Jawa Timur'
            ]
        ];

        foreach ($customers as $customer) {
            // Check if customer already exists
            $existingCustomer = User::where('email', $customer['email'])->first();
            
            if (!$existingCustomer) {
                User::create($customer);
                $this->command->info("Customer {$customer['name']} created successfully.");
            } else {
                $this->command->info("Customer {$customer['email']} already exists.");
            }
        }
    }
}

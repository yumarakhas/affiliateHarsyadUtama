# Customer Accounts - Test Users

## Overview
CustomerSeeder telah berhasil membuat 10 customer dengan role 'user' untuk testing aplikasi.

## Default Password
Semua customer menggunakan password yang sama:
- **Password**: `customer123`

## List Customer Accounts

| No | Nama | Email | Phone | Alamat |
|----|------|-------|-------|---------|
| 1 | Siti Nurhaliza | siti.nurhaliza@gmail.com | 081234567892 | Jl. Merdeka No. 15, Jakarta Pusat, DKI Jakarta |
| 2 | Budi Santoso | budi.santoso@gmail.com | 081234567893 | Jl. Sudirman No. 25, Surabaya, Jawa Timur |
| 3 | Rina Dewi | rina.dewi@yahoo.com | 081234567894 | Jl. Ahmad Yani No. 8, Bandung, Jawa Barat |
| 4 | Ahmad Fauzi | ahmad.fauzi@gmail.com | 081234567895 | Jl. Gajah Mada No. 12, Medan, Sumatera Utara |
| 5 | Maya Sari | maya.sari@gmail.com | 081234567896 | Jl. Diponegoro No. 20, Yogyakarta, DI Yogyakarta |
| 6 | Dedi Kurniawan | dedi.kurniawan@gmail.com | 081234567897 | Jl. Pemuda No. 18, Semarang, Jawa Tengah |
| 7 | Lisa Permata | lisa.permata@gmail.com | 081234567898 | Jl. Panglima Sudirman No. 30, Palembang, Sumatera Selatan |
| 8 | Rio Prasetyo | rio.prasetyo@gmail.com | 081234567899 | Jl. Cut Nyak Dien No. 5, Denpasar, Bali |
| 9 | Indah Lestari | indah.lestari@gmail.com | 081234567900 | Jl. Pattimura No. 22, Makassar, Sulawesi Selatan |
| 10 | Bambang Wijaya | bambang.wijaya@gmail.com | 081234567901 | Jl. Veteran No. 14, Malang, Jawa Timur |

## Database Summary
- **Total Users**: 11
- **Admin Users**: 1 (admin@gentleliving.com) - Role: admin
- **Customer Users**: 10 (dari CustomerSeeder)

## Usage
Customer-customer ini dapat digunakan untuk:
- Testing fitur login/logout
- Testing shopping cart dan checkout
- Testing role-based access control
- Testing user dashboard dan profile

## Running the Seeder

Untuk menjalankan seeder:
```bash
php artisan db:seed --class=CustomerSeeder
```

Atau untuk reset dan seeding ulang:
```bash
php artisan migrate:fresh --seed
```

## Notes
- Semua customer memiliki role 'user' yang dapat mengakses halaman belanja
- Customer tidak dapat mengakses halaman admin (role restriction)
- Database menggunakan kolom 'role' dengan enum value: 'admin', 'user'
- Default role untuk user baru adalah 'user'

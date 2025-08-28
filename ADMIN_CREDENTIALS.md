# Admin Account - Role Based Access Control

## Admin Credentials
Setelah perbaikan, admin account sudah dibuat dengan role yang benar:

### Admin Login
- **Email**: `admin@gentleliving.com`
- **Password**: `admin123`
- **Role**: `admin`
- **Name**: Admin

## Akses Admin
Admin dengan role 'admin' dapat mengakses:
- ✅ Halaman admin dashboard
- ✅ Halaman belanja (seperti user biasa)
- ✅ Semua fitur user + fitur admin khusus

## Role Restrictions
- Customer dengan role 'user' **TIDAK DAPAT** mengakses halaman admin
- Sistem menggunakan CheckRole middleware untuk proteksi

## Database Seeder Updates
DatabaseSeeder.php telah diperbaiki untuk membuat admin dengan role yang benar:

```php
User::create([
    'name' => 'Admin',
    'email' => 'admin@gentleliving.com',
    'email_verified_at' => now(),
    'password' => bcrypt('admin123'),
    'role' => 'admin', // ← Fixed: Role admin ditambahkan
]);
```

## Current Database Status
- **Total Users**: 11
- **Admin**: 1 (dengan role 'admin')
- **Customers**: 10 (dengan role 'user')

## Testing
Untuk testing role-based access:
1. Login sebagai admin → dapat akses halaman admin
2. Login sebagai customer → ditolak akses halaman admin (403 error)

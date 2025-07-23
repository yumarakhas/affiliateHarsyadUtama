# Halaman Admin - Data Affiliator (Updated)

Halaman admin ini telah diperbarui untuk mengelola data affiliator dengan sistem status yang lebih sederhana dan aksi yang lebih fokus.

## Perubahan Utama

### 1. **Sistem Status Baru**
- ✅ **Aktif**: Affiliator dalam status aktif (default untuk semua pendaftar baru)
- ❌ **Tidak Aktif**: Affiliator yang dinonaktifkan oleh admin
- **Auto-Approval**: Semua affiliator yang mendaftar otomatis berstatus "Aktif"
- **Toggle Switch**: Admin dapat mengubah status dengan toggle switch yang mudah

### 2. **Aksi Terbaru pada Tabel**
- 👁️ **View Detail**: Melihat informasi lengkap affiliator dalam modal popup
- ✏️ **Edit**: Mengedit data affiliator (halaman edit terpisah)
- 🗑️ **Hapus**: Menghapus data affiliator dengan konfirmasi

### 3. **Fitur Edit Data**
- Form edit lengkap dengan validasi
- Update data personal, social media, dan informasi tambahan
- Redirect kembali ke halaman data setelah berhasil update

## Fitur-fitur Halaman Admin

### 1. **Dashboard Overview (Updated)**
- Total affiliator
- Jumlah affiliator aktif
- Jumlah affiliator tidak aktif  
- Pendaftaran hari ini

### 2. **Tabel Data Affiliator**
Kolom yang ditampilkan:
- Nomor urut
- Nama lengkap & email
- Kontak WhatsApp & kota domisili
- Akun social media (Instagram & TikTok)
- Status dengan toggle switch
- Tanggal pendaftaran
- **Aksi**: View Detail, Edit, Hapus

### 3. **Fitur Export Excel** (No Change)
- Download data affiliator dalam format CSV/Excel
- File berisi semua data affiliator dengan format yang rapi
- Nama file otomatis dengan timestamp

### 4. **Toggle Status Aktif/Tidak Aktif**
- Switch toggle yang responsif
- Update real-time tanpa reload halaman
- Toast notification untuk feedback
- Perubahan badge status secara otomatis

### 5. **Halaman Edit Affiliator** (New)
- Form edit yang user-friendly
- Validasi form lengkap
- Update data personal dan social media
- Preservasi data saat error

### 6. **Detail Affiliator Modal** (Updated)
- Modal popup dengan informasi lengkap
- Display status "Aktif/Tidak Aktif"
- Informasi terstruktur dan mudah dibaca

## Auto-Approval System

Setiap affiliator yang mendaftar melalui form:
1. ✅ Otomatis mendapat status "Aktif"
2. ✅ Langsung bisa berpartisipasi dalam program
3. ✅ Admin hanya perlu toggle jika ingin menonaktifkan

## Cara Mengakses

1. **Via URL langsung**: 
   ```
   http://your-domain.com/admin/data
   ```

2. **Via link di footer website**:
   - Scroll ke bagian footer
   - Klik "Admin Panel" di bagian "Hubungi Kami"

## Routes yang Tersedia

```php
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/data', [AdminController::class, 'viewData'])->name('view-data');
    Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('export-excel');
    Route::get('/affiliate/{id}/details', [AdminController::class, 'getDetails'])->name('affiliate.details');
    Route::get('/affiliate/{id}/edit', [AdminController::class, 'edit'])->name('affiliate.edit');
    Route::put('/affiliate/{id}', [AdminController::class, 'update'])->name('affiliate.update');
    Route::post('/affiliate/{id}/update-status', [AdminController::class, 'updateStatus'])->name('affiliate.update-status');
    Route::delete('/affiliate/{id}/delete', [AdminController::class, 'delete'])->name('affiliate.delete');
});
```

## Keamanan

⚠️ **PENTING**: Halaman admin ini masih belum memiliki sistem autentikasi. Untuk production, pastikan untuk:

1. Menambahkan middleware auth
2. Implementasi login admin
3. Role-based access control
4. Rate limiting untuk API endpoints
5. CSRF protection (sudah implemented)

## Teknologi yang Digunakan

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, Vanilla JavaScript
- **Database**: MySQL/MariaDB dengan ENUM status
- **Export**: CSV format dengan UTF-8 encoding
- **AJAX**: Native Fetch API untuk real-time updates

## Fitur-fitur Halaman Admin

### 1. **Dashboard Overview**
- Statistik total affiliator
- Jumlah affiliator berdasarkan status (Pending, Approved, Rejected)
- Tampilan yang user-friendly dengan card statistics

### 2. **Tabel Data Affiliator**
Menampilkan informasi lengkap affiliator meliputi:
- Nomor urut
- Nama lengkap & email
- Kontak WhatsApp & kota domisili
- Akun social media (Instagram & TikTok)
- Status pendaftaran
- Tanggal pendaftaran

### 3. **Fitur Export Excel**
- Download data affiliator dalam format CSV/Excel
- File berisi semua data affiliator dengan format yang rapi
- Nama file otomatis dengan timestamp: `data_affiliator_YYYY-MM-DD_HH-MM-SS.csv`

### 4. **Manajemen Status**
- Update status affiliator: Pending, Approved, Rejected
- Dropdown untuk mengubah status langsung dari tabel
- Konfirmasi sebelum mengubah status

### 5. **Detail Affiliator**
- Modal popup untuk melihat detail lengkap affiliator
- Informasi lengkap termasuk profesi, sumber informasi, dll.
- Tampilan yang terstruktur dan mudah dibaca

### 6. **Hapus Data**
- Fitur untuk menghapus data affiliator
- Konfirmasi sebelum penghapusan
- Menghapus data terkait di tabel `affiliate_info` secara otomatis

## Cara Mengakses

1. **Via URL langsung**: 
   ```
   http://your-domain.com/admin/data
   ```

2. **Via link di footer website**:
   - Scroll ke bagian footer
   - Klik "Admin Panel" di bagian "Hubungi Kami"

## File-file yang Dibuat

### 1. Controller
- `app/Http/Controllers/AdminController.php`
  - Menangani semua logic untuk halaman admin
  - Export Excel functionality
  - CRUD operations untuk data affiliator

### 2. View
- `resources/views/admin/view-data.blade.php`
  - Interface halaman admin
  - Tabel data dengan pagination
  - Modal untuk detail data
  - JavaScript untuk interaktivity

### 3. Routes
- Ditambahkan di `routes/web.php`
  ```php
  Route::prefix('admin')->name('admin.')->group(function () {
      Route::get('/data', [AdminController::class, 'viewData'])->name('view-data');
      Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('export-excel');
      Route::get('/affiliate/{id}/details', [AdminController::class, 'getDetails'])->name('affiliate.details');
      Route::post('/affiliate/{id}/update-status', [AdminController::class, 'updateStatus'])->name('affiliate.update-status');
      Route::delete('/affiliate/{id}/delete', [AdminController::class, 'delete'])->name('affiliate.delete');
  });
  ```

### 4. Database Migration
- `2025_07_23_025148_add_missing_fields_to_affiliate_registrations_table.php`
  - Menambah field `info_darimana`, `yang_lain_text`, `status`
  - Memindahkan field social media ke tabel `affiliate_info`

### 5. Model Updates
- Updated `app/Models/AffiliateRegistration.php`
  - Menambah fillable fields yang baru
  - Relasi dengan `AffiliateInfo`

## Keamanan

⚠️ **PENTING**: Halaman admin ini belum memiliki sistem autentikasi. Untuk production, pastikan untuk:

1. Menambahkan middleware auth
2. Implementasi login admin
3. Role-based access control
4. Rate limiting untuk API endpoints

## Teknologi yang Digunakan

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, Vanilla JavaScript
- **Database**: MySQL/MariaDB
- **Export**: CSV format dengan UTF-8 encoding

## Responsive Design

Halaman admin telah dioptimasi untuk:
- Desktop (optimal experience)
- Tablet (responsive layout)
- Mobile (basic functionality)

## Upcoming Features (Saran Pengembangan)

1. **Authentication System**
   - Login/logout admin
   - Multiple admin accounts
   - Role permissions

2. **Advanced Filtering**
   - Filter berdasarkan status
   - Filter berdasarkan tanggal
   - Search functionality

3. **Bulk Operations**
   - Bulk approve/reject
   - Bulk delete
   - Bulk export selected

4. **Email Notifications**
   - Notifikasi ke affiliator saat status berubah
   - Email template customization

5. **Analytics Dashboard**
   - Chart untuk statistik pendaftaran
   - Trend analysis
   - Performance metrics

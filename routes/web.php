<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Main Pages Routes
Route::get('/', [LandingController::class, 'beranda'])->name('beranda');
Route::get('/partner', [LandingController::class, 'partner'])->name('partner');
Route::get('/produk', [LandingController::class, 'produk'])->name('produk');
Route::get('/belanja', [LandingController::class, 'belanja'])->name('belanja');
Route::get('/belanja/produk', [LandingController::class, 'belanjaProduk'])->name('belanja.produk');
Route::get('/belanja/riwayat', [LandingController::class, 'riwayat'])->name('belanja.riwayat');
Route::get('/belanja/keranjang', [LandingController::class, 'keranjang'])->name('belanja.keranjang');
Route::get('/produk/{id}', [LandingController::class, 'produkDetail'])->name('produk.detail');
Route::get('/tentang-kami', [LandingController::class, 'tentangKami'])->name('tentang-kami');

// Affiliate Routes
Route::get('/affiliate/daftar', [AffiliateController::class, 'showForm'])->name('affiliate.form');
Route::post('/affiliate/daftar', [AffiliateController::class, 'store'])->name('affiliate.store');
Route::get('/affiliate/terima-kasih', [AffiliateController::class, 'thankYou'])->name('affiliate.thankyou');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Routes (Protected)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/view-data', [AdminController::class, 'viewData'])->name('admin.view-data');
    Route::get('/affiliate/{id}/details', [AdminController::class, 'getDetails'])->name('admin.affiliate.details');
    Route::put('/affiliate/{id}', [AdminController::class, 'update'])->name('admin.affiliate.update');
    Route::post('/affiliate/{id}/update', [AdminController::class, 'update'])->name('admin.affiliate.update.post');
    Route::delete('/affiliate/{id}/delete', [AdminController::class, 'delete'])->name('admin.affiliate.delete');
    Route::post('/affiliate/{id}/update-status', [AdminController::class, 'updateStatus'])->name('admin.affiliate.update-status');
    Route::get('/affiliate/export', [AdminController::class, 'export'])->name('admin.affiliate.export');
    Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('admin.export-excel');
    
    // Product Management Routes
    Route::get('/products', [AdminController::class, 'manageProducts'])->name('admin.products.index');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::put('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::delete('/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
});

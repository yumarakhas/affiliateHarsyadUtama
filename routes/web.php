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
Route::post('/belanja/keranjang/update', [LandingController::class, 'updateCart'])->name('belanja.keranjang.update');
Route::delete('/belanja/keranjang/remove/{id}', [LandingController::class, 'removeFromCart'])->name('belanja.keranjang.remove');
Route::post('/belanja/keranjang/add', [LandingController::class, 'addToCart'])->name('belanja.keranjang.add');
Route::get('/belanja/checkout', [LandingController::class, 'checkout'])->name('belanja.checkout');
Route::post('/belanja/checkout/process', [LandingController::class, 'processCheckout'])->name('belanja.checkout.process');
Route::get('/produk/{id}', [LandingController::class, 'produkDetail'])->name('produk.detail');
Route::get('/tentang-kami', [LandingController::class, 'tentangKami'])->name('tentang-kami');

// Affiliate Routes
Route::get('/affiliate/daftar', [AffiliateController::class, 'showForm'])->name('affiliate.form');
Route::post('/affiliate/daftar', [AffiliateController::class, 'store'])->name('affiliate.store');
Route::get('/affiliate/terima-kasih', [AffiliateController::class, 'thankYou'])->name('affiliate.thankyou');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Routes (Protected)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Affiliate Management
    Route::get('/view-data', [AdminController::class, 'viewData'])->name('admin.view-data');
    Route::get('/affiliate/{id}/details', [AdminController::class, 'getDetails'])->name('admin.affiliate.details');
    Route::put('/affiliate/{id}', [AdminController::class, 'update'])->name('admin.affiliate.update');
    Route::post('/affiliate/{id}/update', [AdminController::class, 'update'])->name('admin.affiliate.update.post');
    Route::delete('/affiliate/{id}/delete', [AdminController::class, 'delete'])->name('admin.affiliate.delete');
    Route::post('/affiliate/{id}/update-status', [AdminController::class, 'updateStatus'])->name('admin.affiliate.update-status');
    Route::get('/affiliate/export', [AdminController::class, 'export'])->name('admin.affiliate.export');
    Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('admin.export-excel');

    // Content Management Dashboard
    Route::get('/content', [AdminController::class, 'contentManagement'])->name('admin.content.index');
    
    // Carousel Produk Management
    Route::get('/content/carousel-produk', [AdminController::class, 'carouselProduk'])->name('admin.content.carousel-produk');
    Route::get('/content/carousel-produk/create', [AdminController::class, 'createCarouselProduk'])->name('admin.content.carousel-produk.create');
    Route::post('/content/carousel-produk', [AdminController::class, 'storeCarouselProduk'])->name('admin.content.carousel-produk.store');
    Route::get('/content/carousel-produk/{id}/edit', [AdminController::class, 'editCarouselProduk'])->name('admin.content.carousel-produk.edit');
    Route::put('/content/carousel-produk/{id}', [AdminController::class, 'updateCarouselProduk'])->name('admin.content.carousel-produk.update');
    Route::delete('/content/carousel-produk/{id}', [AdminController::class, 'deleteCarouselProduk'])->name('admin.content.carousel-produk.delete');
    
    // Benefits Management
    Route::get('/content/benefits', [AdminController::class, 'benefits'])->name('admin.content.benefits');
    Route::get('/content/benefits/create', [AdminController::class, 'createBenefit'])->name('admin.content.benefits.create');
    Route::post('/content/benefits', [AdminController::class, 'storeBenefit'])->name('admin.content.benefits.store');
    Route::get('/content/benefits/{id}/edit', [AdminController::class, 'editBenefit'])->name('admin.content.benefits.edit');
    Route::put('/content/benefits/{id}', [AdminController::class, 'updateBenefit'])->name('admin.content.benefits.update');
    Route::delete('/content/benefits/{id}', [AdminController::class, 'deleteBenefit'])->name('admin.content.benefits.delete');
    
    // Carousel Varian Management (existing products)
    Route::get('/content/carousel-varian', [AdminController::class, 'manageProducts'])->name('admin.content.carousel-varian');
    Route::get('/content/carousel-varian/create', [AdminController::class, 'createProduct'])->name('admin.content.carousel-varian.create');
    Route::post('/content/carousel-varian', [AdminController::class, 'storeProduct'])->name('admin.content.carousel-varian.store');
    Route::get('/content/carousel-varian/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.content.carousel-varian.edit');
    Route::put('/content/carousel-varian/{id}', [AdminController::class, 'updateProduct'])->name('admin.content.carousel-varian.update');
    Route::delete('/content/carousel-varian/{id}', [AdminController::class, 'deleteProduct'])->name('admin.content.carousel-varian.delete');

    // Legacy routes for backward compatibility
    Route::get('/products', [AdminController::class, 'manageProducts'])->name('admin.products.index');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::put('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::delete('/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
});

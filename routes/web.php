<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

// Affiliate Routes
Route::get('/affiliate/daftar', [AffiliateController::class, 'showForm'])->name('affiliate.form');
Route::post('/affiliate/daftar', [AffiliateController::class, 'store'])->name('affiliate.store');
Route::get('/affiliate/terima-kasih', [AffiliateController::class, 'thankYou'])->name('affiliate.thankyou');
// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout route (requires auth)
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});

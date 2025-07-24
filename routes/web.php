<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

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
    Route::get('/affiliate/{id}/details', [AdminController::class, 'show'])->name('admin.affiliate.details');
    Route::put('/affiliate/{id}', [AdminController::class, 'update'])->name('admin.affiliate.update');
    Route::delete('/affiliate/{id}/delete', [AdminController::class, 'destroy'])->name('admin.affiliate.delete');
    Route::post('/affiliate/{id}/update-status', [AdminController::class, 'updateStatus'])->name('admin.affiliate.update-status');
    Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('admin.export-excel');
});

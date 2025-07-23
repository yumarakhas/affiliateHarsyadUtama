<?php
// Test route untuk debugging
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/test-login', function() {
    return 'Login route works!';
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

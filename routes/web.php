<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Halaman utama (Landing Page)
Route::get('/', [LandingController::class, 'index']);

// Login dan Logout - Hanya untuk user yang belum login (middleware guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout route (untuk logout)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard - Hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'index']); // Untuk menampilkan halaman admin dashboard


    // CRUD Berita (Resource Route untuk berita)
    Route::resource('berita', BeritaController::class);

    // CRUD Prestasi (Resource Route untuk prestasi)
    Route::resource('prestasi', PrestasiController::class);

    // Password reset routes (forgot password)
    Route::get('/forgot-password', [App\Http\Controllers\AuthController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\AuthController::class, 'sendResetLinkEmail'])->name('password.email');
});

?>


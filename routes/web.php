<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Selamat datang di toko Barokah Mart.';
});

Route::get('/products', function () {
    return 'Daftar produk Barokah Mart.';
});

Route::post('/products', function () {
    return 'Data produk berhasil disimpan.';
});

use App\Http\Controllers\DashboardController;
 
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
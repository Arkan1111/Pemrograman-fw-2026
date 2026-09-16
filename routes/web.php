<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Selamat datang di toko Barokah Mart.';
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {

    // php artisan make:controller CategoryController --resource
    Route::resource('categories', CategoryController::class);

    // php artisan make:controller ProductController --resource
    Route::resource('products', ProductController::class);

    // php artisan make:controller ReportController
    Route::get('/reports/sales', [ReportController::class, 'sales'])
        ->name('report.sales');
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {

    // php artisan make:controller PosController
    Route::get('/pos', [PosController::class, 'index'])
        ->name('pos.index');

    // php artisan make:controller PosController
    Route::post('/pos', [PosController::class, 'store'])
        ->name('pos.store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);
    
    Route::get('/reports/sales', [ReportController::class, 'sales'])
        ->name('report.sales');

    Route::resource('users', UserController::class);
});
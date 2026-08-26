<?php

use Illuminate\Support\Facades\Route;

Route::post('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;
 
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
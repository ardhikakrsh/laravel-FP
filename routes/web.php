<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\MahasiswaController;
use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PembelianController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
    Route::get('/about', [DashboardController::class, 'admin'])->name('about');
    Route::get('/product', [DashboardController::class, 'admin'])->name('product');
    Route::get('/contact', [DashboardController::class, 'admin'])->name('contact');
    Route::get('/review', [DashboardController::class, 'admin'])->name('review');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/barang', BarangController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/pembelian', PembelianController::class);
});

require __DIR__.'/auth.php';



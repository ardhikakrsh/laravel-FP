<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MahasiswaController;
use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\admin\PembelianController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class, 'admin']);
Route::resource('barang', BarangController::class);
Route::resouce('pembelian', PembelianController::class);
Route::resource('mahasiswa', MahasiswaController::class);
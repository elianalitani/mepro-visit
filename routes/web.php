<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\AkunController;

/* Routing untuk login dan logout */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:Admin,Satpam,Resepsionis')->group(function(){
        Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.index');
    });
    
    Route::middleware('role:Admin,Satpam')->group(function(){
        Route::get('/kunjungan/tambah', [KunjunganController::class, 'tambahKunjungan'])->name('kunjungan.tambahKunjungan');
    });
    
    Route::middleware('role:Admin')->group(function(){
        Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
    });
    
    Route::middleware('role:Admin')->group(function(){
        Route::get('/akun/tambah', [AkunController::class, 'tambahAkun'])->name('akun.tambahAkun');
    });
    
    Route::middleware('role:Admin')->group(function(){
        Route::get('/akun/detail', [AkunController::class, 'lihatAkun'])->name('akun.lihatAkun');
    });
    
    Route::middleware('role:Admin')->group(function(){
        Route::get('/akun/edit', [AkunController::class, 'editAkun'])->name('akun.editAkun');
    });
});

/* Route untuk kunjungan */
Route::get('/kunjungan/load', [KunjunganController::class, 'loadKunjunganTable'])->name('kunjungan.load');
Route::get('/kunjungan/{id_kunjungan}', [KunjunganController::class, 'lihatKunjungan'])->name('kunjungan.lihatKunjungan');
Route::get('/topKunjungan/load', [KunjunganController::class, 'loadTopKunjunganTable'])->name('topKunjungan.load');
Route::get('/kunjungan/chart/{year}', [DashboardController::class, 'getKunjunganChart'])->name('kunjungan.chart');

/* Route untuk akun */
Route::get('/akun/load', [AkunController::class, 'loadAkunTable'])->name('akun.load');
Route::get('/akun/{id_user}', [AkunController::class, 'lihatAkun'])->name('akun.lihatAkun');
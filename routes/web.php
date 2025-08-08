<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\AkunController;

/* Routing untuk login dan logout */
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:Admin,Satpam,Resepsionis')->group(function(){
        Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.index');
    });
    
    Route::middleware('role:Admin')->group(function(){
        Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
    });
});



/* Routing untuk admin */
Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/daftar-kunjungan', function () {
    return view('admin/daftarKunjungan');
});

Route::get('/admin/form-kunjungan', function () {
    return view('admin/formKunjungan');
});

Route::get('/admin/detail-kunjungan', function () {
    return view('admin/detailKunjungan');
});

Route::get('/admin/daftar-akun', function () {
    return view('admin/daftarAkun');
});

Route::get('/admin/form-akun', function () {
    return view('admin/formAkun');
});

Route::get('/admin/detail-akun', function () {
    return view('admin/detailAkun');
});

Route::get('/admin/edit-akun', function () {
    return view('admin/detailAkun');
});

/* Routing untuk satpam */
Route::get('/satpam', function () {
    return view('security/dashboard');
});

Route::get('/satpam/daftar-kunjungan', function () {
    return view('security/daftarKunjungan');
});

Route::get('/satpam/form-kunjungan', function () {
    return view('security/formKunjungan');
});

Route::get('/satpam/detail-kunjungan', function () {
    return view('security/detailKunjungan');
});

Route::get('/satpam/notifikasi', function () {
    return view('security/notification-mobile');
});

/* Routing untuk resepsionis */
Route::get('/resepsionis', function () {
    return view('receptionist/dashboard');
});

Route::get('/resepsionis/daftar-kunjungan', function () {
    return view('receptionist/daftarKunjungan');
});

Route::get('/resepsionis/form-kunjungan', function () {
    return view('receptionist/formKunjungan');
});

Route::get('/resepsionis/detail-kunjungan', function () {
    return view('receptionist/detailKunjungan');
});
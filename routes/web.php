<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Routing untuk login */
Route::get('/test', function () {
    return view('login');
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
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/daftar-kunjungan', function () {
    return view('admin/daftarKunjungan');
});
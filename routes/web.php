<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/Kelola-Produk', function () {
    return view('pages.owner.inventaris.KelolaProduk');
})->name('owner.kelola-produk');

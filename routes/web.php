<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HalamanController::class, 'beranda'])->name('beranda');
Route::get('/kontak', [HalamanController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [HalamanController::class, 'kirimKontak'])->name('kontak.kirim');
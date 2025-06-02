<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/berita', [PagesController::class, 'berita'])->name('berita');
Route::get('/umkm', [PagesController::class, 'umkm'])->name('umkm');
Route::get('/kepengurusan', [PagesController::class, 'kepengurusan'])->name('kepengurusan');
Route::get('/lembaga', [PagesController::class, 'lembaga'])->name('lembaga');
Route::get('/kesenian', [PagesController::class, 'kesenian'])->name('kesenian');

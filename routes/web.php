<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/berita', [PagesController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [PagesController::class, 'show'])->name('berita.show');
// Route::get('/umkm', [PagesController::class, 'umkm'])->name('umkm');
// Route::get('/kepengurusan', [PagesController::class, 'kepengurusan'])->name('kepengurusan');
// Route::get('/lembaga', [PagesController::class, 'lembaga'])->name('lembaga');
// Route::get('/kesenian', [PagesController::class, 'kesenian'])->name('kesenian');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/berita', [PagesController::class, 'newsIndex'])->name('berita.index');
Route::get('/berita/{slug}', [PagesController::class, 'newsShow'])->name('berita.show');
Route::get('/umkm', [PagesController::class, 'umkmIndex'])->name('umkm.index');
Route::get('/kepengurusan', [PagesController::class, 'kepengurusan'])->name('kepengurusan');
// Route::get('/lembaga', [PagesController::class, 'lembaga'])->name('lembaga');
// Route::get('/kesenian', [PagesController::class, 'kesenian'])->name('kesenian');

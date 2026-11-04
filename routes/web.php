<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

// Halaman sambutan Laravel bawaan dipertahankan (dipakai pada uji halaman awal)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/{kode}', [BukuController::class, 'show']);
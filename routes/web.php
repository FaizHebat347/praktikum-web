<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

// Halaman sambutan bawaan dipertahankan seperti pada Pertemuan 9
Route::get('/', function () {
    return view('welcome');
});

Route::resource('buku', BukuController::class)->except('show');
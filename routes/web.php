<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\TanpaCache;

// Halaman sambutan bawaan dipertahankan seperti pada Pertemuan 9 dan 10
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', TanpaCache::class])->group(function () {
    Route::resource('buku', BukuController::class)->except('show');
});
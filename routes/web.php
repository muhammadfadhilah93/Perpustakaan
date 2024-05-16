<?php

use Illuminate\Support\Facades\Route;




Route::get('/anggota', [\App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota.index');
Route::post('/anggota', [\App\Http\Controllers\AnggotaController::class, 'store'])->name('anggota.store');

Route::get('/buku', [\App\Http\Controllers\BukuController::class, 'index'])->name('buku.index');
Route::post('/buku', [\App\Http\Controllers\BukuController::class, 'store'])->name('buku.store');


Route::get('/', function () {
    return view('welcome');
});

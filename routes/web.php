<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return view('welcome');
});

Route::resource('/fakultas', FakultasController::class);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
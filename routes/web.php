<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return view('welcome');
});

Route::resource('/fakultas', FakultasController::class);

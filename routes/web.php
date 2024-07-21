<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('/pengguna', \App\Http\Controllers\PenggunaController::class);
Route::resource('/kepalasurat', \App\Http\Controllers\KepalaSuratController::class);
Route::resource('/namatandatgn', \App\Http\Controllers\NamaTandaTgnController::class);
Route::resource('/suratkeluar', \App\Http\Controllers\SuratKeluarController::class);
Route::resource('/suratmasuk', \App\Http\Controllers\SuratMasukController::class);

use App\Http\Controllers\UserController;

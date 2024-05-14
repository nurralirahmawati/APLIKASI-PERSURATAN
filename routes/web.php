<?php

use App\Http\Controllers\NamatandatanganController;
use App\Http\Controllers\KepalasuratController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::get('/user/profile/{id}', [UserController::class, 'tampilData'])->name('user.profile');
Route::resource('kepalasurat', KepalasuratController::class);
Route::get('/kepalasurat/create', [KepalasuratController::class, 'create'])->name('kepalasurat.create');
Route::get('/namatandatangan', [NamatandatanganController::class, 'index'])->name('namatandatangan.index');
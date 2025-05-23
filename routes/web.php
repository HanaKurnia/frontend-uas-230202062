<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\matkulController;
use App\Http\Controllers\mahasiswaController;

Route::resource('matkul', matkulController::class);
Route::resource('mahasiswa', mahasiswaController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('dashboard');
});




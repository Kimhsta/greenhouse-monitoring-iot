<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, selamat datang di praktikum Laravel.';
});

Route::get('/halo2', function () {
    return view('halo');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');

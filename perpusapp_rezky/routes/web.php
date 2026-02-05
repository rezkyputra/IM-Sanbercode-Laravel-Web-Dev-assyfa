<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;

Route::get('/', [DashboardController::class, 'utama']);
Route::get('/daftar', [DaftarController::class, 'pendaftar']);

Route::post('/home', [DaftarController::class, 'home']);
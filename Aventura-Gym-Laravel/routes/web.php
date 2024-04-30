<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\NosotrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/locales', [LocalesController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'index']);
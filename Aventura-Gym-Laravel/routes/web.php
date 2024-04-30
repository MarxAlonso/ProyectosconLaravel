<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/locales', [LocalesController::class, 'index']);
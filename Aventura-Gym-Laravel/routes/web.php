<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TerminosController;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/locales', [LocalesController::class, 'index']);
Route::get('/santana', [LocalesController::class, 'localsantana']);
Route::get('/contacto', [ContactoController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'index']);
Route::get('/servicios', [ServicesController::class, 'index']);
Route::get('/terminos-condiciones', [TerminosController::class, 'index']);
<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TerminosController;

Route::get('/', [HomeController::class, 'index'])->name('inicio');

/* Apartado de rutas de los locales */
Route::get('/locales', [LocalesController::class, 'index']);
Route::get('/local-santana', [LocalesController::class, 'localsantana']);
Route::get('/local-naranjal', [LocalesController::class, 'localnaranjal']);
Route::get('/local-universitaria', [LocalesController::class, 'localuniversitaria']);
Route::get('/local-smp', [LocalesController::class, 'localsmp']);
Route::get('/local-santanita', [LocalesController::class, 'localsantaanita']);
/* Fin apartado de rutas de los locales */

Route::get('/contacto', [ContactoController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'index']);
Route::get('/servicios', [ServicesController::class, 'index']);
Route::get('/terminos-condiciones', [TerminosController::class, 'index']);

/* Apartado para validar los formularios */
Route::post('enviar-form-contacto', [ContactoController::class, 'enviarFormulario']);
Route::post('enviar-form-contacto-personal', [ContactoController::class, 'enviarFormularioPersonal']);
/* Fin apartado para validar los formularios */
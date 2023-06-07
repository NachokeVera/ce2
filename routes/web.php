<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Rutas de estudiante */
Route::get('/',[EstudianteController::class,'index'])->name('estudiante.indexEstudiante');
Route::post('/',[EstudianteController::class,'store'])->name('estudiante.indexEstudiante');

Route::get('/inicio',[InicioController::class,'index'])->name('inicio.index');
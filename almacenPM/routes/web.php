<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\almacenController;
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

Route::get('/',[almacenController::class,'metodoRegistro'])->name('paginaRegistro');
Route::get('/almacenActualizar',[almacenController::class,'metodoActualizar'])->name('paginaActualizar');
Route::get('/almacenBuscar',[almacenController::class,'metodoBuscar'])->name('paginaBuscar');
Route::get('/almacenConsultar',[almacenController::class,'metodoConsultar'])->name('paginaConsultar');
Route::post('/guardarRegistro',[almacenController::class,'metodoGuardar'])->name('Guardar');
Route::post('/guardarRegistroAct',[almacenController::class,'metodoGuardarAct'])->name('GuardarAct');
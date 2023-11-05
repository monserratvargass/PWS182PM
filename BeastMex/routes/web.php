<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;

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

Route::get('/',[Controllers::class,'metodoPrincipal'])->name('Principal');

Route::get('/gerenciaRegistroUsuario', function () {
    return view('gerenciaRegistroUsuario');
});

//interfaz de ventas consultar productos
Route::get('/ventasConsultarproducto',[Controllers::class,'metodoMostrarproducto'])->name('Mostrarproducto');

Route::post('Buscarproducto',[Controllers::class,'metodoBuscarproducto'])->name('Buscarproducto');

// interfaz de ventas
Route::get('/ventas',[Controllers::class,'metodoRegistroventa'])->name('Registroventa');

Route::post('Guardartickets',[Controller::class,'metodoGuardartickets'])->name('Guardartickets');

// interfaz de ventas calculo de ganancias
Route::get('/ventasCalculodeganancias',[Controllers::class,'metodoCalculodeganancias'])->name('Calculodeganancias');

Route::post('Mostrarcalculodegancnias',[Controllers::class,'metodoMostrarcalculodegancnias'])->name('Mostrarcalculodegancnias');

// interfaz de ventas consultar tikets
Route::get('/ventasConsultartickets',[Controllers::class,'metodoConsultartickets'])->name('Consultartickets');

Route::post('Mostrartickets',[Controllers::class,'metodoMostrartickets'])->name('Mostrartickets');
// imprimir tikets
Route::post('Imprimirtickets',[Controllers::class,'metodoImprimirtickets'])->name('Imprimirtickets');



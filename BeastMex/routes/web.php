<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastmexcontrollers;

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

Route::get('/',[beastmexcontrollers::class,'metodoPrincipal'])->name('Principal');

Route::get('/gerenciaRegistroUsuario', function () {
    return view('gerenciaRegistroUsuario');
});

//interfaz de ventas consultar productos
Route::get('/ventasConsultarproducto',[beastmexcontrollers::class,'metodoMostrarproducto'])->name('Mostrarproducto');

Route::post('Buscarproducto',[beastmexcontrollers::class,'metodoBuscarproducto'])->name('Buscarproducto');

// interfaz de ventas resgistrar tickets
Route::get('/ventasRegistrartickets',[beastmexcontrollers::class,'metodoRegistroventa'])->name('Registroventa');

Route::post('Guardartickets',[beastmexcontrollers::class,'metodoGuardartickets'])->name('Guardartickets');

// interfaz de ventas calculo de ganancias
Route::get('/ventasCalculodeganancias',[beastmexcontrollers::class,'metodoCalculodeganancias'])->name('Calculodeganancias');

Route::post('Mostrarcalculodegancnias',[beastmexcontrollers::class,'metodoMostrarcalculodegancnias'])->name('Mostrarcalculodegancnias');

// interfaz de ventas consultar tikets
Route::get('/ventasConsultartickets',[beastmexcontrollers::class,'metodoConsultartickets'])->name('Consultartickets');

Route::post('Mostrartickets',[beastmexcontrollers::class,'metodoMostrartickets'])->name('Mostrartickets');
// imprimir tikets
Route::post('Imprimirtickets',[beastmexcontrollers::class,'metodoImprimirtickets'])->name('Imprimirtickets');



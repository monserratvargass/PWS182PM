<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastmexcontroller;


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

/* Route::get('/', function () {
    return view('login');
}); 

Route::get('/gerenciaRegistroUsuario', function () {
    return view('gerenciaRegistroUsuario');
});

Route::get('/consultarOrdenCompra', function () {
    return view('consultarOrdenCompra');
});

Route::get('/buscarProductos', function () {
    return view('buscarProductos');
}); */

Route::get('/', [beastmexcontroller::class, 'metodoLogin']);

Route::get('/consultarOrdenCompra', [beastmexcontroller::class, 'metodoConsultarOC']);

Route::get('/buscarProductos', [beastmexcontroller::class, 'metodoBuscarProductos']);

//Crear una ruta tipo POST
Route::post('/pLogin', [beastmexcontroller::class, 'metodoGuardar']);

Route::post('/pBuscarProductos', [beastmexcontroller::class, 'metodoGuardar']);

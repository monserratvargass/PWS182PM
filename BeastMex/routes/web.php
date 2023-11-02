<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','welcome')->name('rutainicio');
Route::view('/ventas_calculodeganancias','ventas_calculodeganancias')->name('rutacalculodeganancias');
Route::view('/ventas_consultartickets','ventas_consultartickets')->name('rutaconcultartickets');


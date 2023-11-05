<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beastmexcontroller extends Controller
{
    public function metodoLogin(){
        return view('login');
    }

    public function metodoBuscarProductos(){
        return view('buscarProductos');
    }

    public function metodoConsultarOC(){
        return view('consultarOrdenCompra');
    }
}

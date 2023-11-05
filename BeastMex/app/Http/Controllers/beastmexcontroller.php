<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorLogin;

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

    public function metodoGuardar(validadorLogin $req){
        //return 'Se esta procesando tu inicio de sesion';
        return 'Se esta procesando tu busqueda de producto';
    }
}

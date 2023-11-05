<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorAlmacenRegistro;

class almacenController extends Controller
{
    //

    public function metodoRegistro(){
        return view('welcome');
    }

    public function metodoActualizar(){
        return view('almacenActualizar');
    }

    public function metodoBuscar(){
        return view('almacenBuscar');
    }

    public function metodoConsultar(){
        return view('almacenConsultar');
    }

    public function metodoGuardar (validadorAlamcenRegistro $req){
        return "se guardo el registro";
    }

    public function metodoGuardarAct (validadorAlamcenRegistro $req){
        return "se guardo el registro";
    }
}

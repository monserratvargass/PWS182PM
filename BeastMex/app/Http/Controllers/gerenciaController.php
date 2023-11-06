<?php

namespace App\Http\Controllers;

use App\Http\Requests\gerenciaValidador;
use Illuminate\Http\Request;

class gerenciaController extends Controller
{
    public function metodoGerencia(){
        return view('tabmenu');
    }

    public function metodoGuardar(gerenciaValidador $req){

        return redirect('/gerencia')->with('confirmacion','Tu recuerdo llego al controlador');
    }
}

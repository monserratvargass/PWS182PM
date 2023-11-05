<?php

namespace App\Http\Controllers;
use Alert;
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

    public function metodoGuardar (validadorAlmacenRegistro $req){
       /*  return "se guardo el registro"; ---Prueba de funcionamiento */
        
        Alert::success('Registro guardado', 'Éxito')->persistent(true);

        return redirect('/')->with('confirmacion','Todo correcto'); 

    }

    public function metodoGuardarAct (validadorAlmacenRegistro $req){
       /*  return "se guardo el registro"; ---Prueba de funcionamiento */
        Alert::success('Registro guardado', 'Éxito')->persistent(true);

        return redirect('/almacenActualizar')->with('confirmacion','Todo correcto');
    }
}

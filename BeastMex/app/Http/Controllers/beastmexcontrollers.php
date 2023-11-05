<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormbeastmex;

class beastmexcontrollers extends Controller
{
    public function metodoPrincipal(){ //Metodo para regresar a las vistas
        return view('welcome');

    }

// interfaz ventasConsultarproducto

    public function metodoMostrarproducto(){
    return view('ventasConsultarproducto'); 
    }       

    public function metodoBuscarproducto(validadorFormbeastmex $req){

        Alert::success('Buscarproducto','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/ventasConsultarproducto')->with('confirmacion','Mostrar productos');
    }

//interfaz ventas Registrar tickets

    public function metodoRegistroVenta(){
        return view('ventasRegistrartickets'); 
    }

    public function metodoGuardartickets(validadorFormbeastmex $req){

        Alert::success('Guardartickets','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/ventasRegistrartickets')->with('confirmacion','Ticket guardado');
    }

//interfaz calculo de ganancias

    public function metodoCalculodeganancias(){
    return view('ventasCalculodeganancias'); 
    }

    public function metodoMostrarcalculodegancnias(validadorFormbeastmex $req){

        Alert::success('Mostrarcalculodeganancias','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/ventasCalculodeganancias')->with('confirmacion','Mostrar Calculo de Ganancias');
    }

//interfaz Consultar tikects

    public function metodoConsultartickets(){
        return view('ventasConsultartickets'); 
    }

    public function metodoMostrartickets(validadorFormbeastmex $req){

        Alert::success('Mostrartickets','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/ventasConsultartickets')->with('confirmacion','Mostrar Tikets');
    }

    public function metodoImprimirtickets(validadorFormbeastmex $req){

        Alert::success('Imprimir','Tu registro ha sido exitoso')->persistent(true);

        return redirect('/ventasConsultartickets')->with('confirmacion','Imprimiendo Tikets');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    /**
     *
     * Metodo che restituisce tutte le pizze presenti nella tabella pizzas
     */
    public function index(){

        //Recuperiamo tutte le pizze dal database
        $pizzas = Pizza::all();

        //Passiamo tutti i dati alla vista
        return view('pizze', compact('pizzas'));
    }


    public function availablePizzas(){
        $pizzas = Pizza::all()->where('available', '=', 1);

        return view('pizze', compact('pizzas'));
    }


    public function pizzasJson(){
        $pizzas = Pizza::all();

        return $pizzas;
    }

}

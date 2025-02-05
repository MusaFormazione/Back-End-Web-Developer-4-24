<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizze = Pizza::all();

        return view('pages.home',compact('pizze'));
    }

    public function show(int $id){
        $pizza = Pizza::find($id);
        return view('pages.detail', compact('pizza'));
    }

    public function store(Request $request){

        $request->validate([
            'gusto' => 'required|max:255',
            'prezzo' => 'required|numeric|min:0',
            'active' => 'required|numeric|min:0|max:1'
        ]);

        Pizza::create($request->only(['gusto','prezzo','active']));

        return redirect()->route('home')->with('success', 'Pizza creata con successo');
    }

    public function edit(int $id){
        $pizza = Pizza::find($id);

        return view('pages.edit', compact('pizza'));
    }

    public function update(Request $request, int $id){

        Pizza::find($id)->update([
            'gusto' => $request->gusto,
            'prezzo' => $request->prezzo,
            'active' => $request->active
        ]);

        return redirect()->route('home')->with('success',"Pizza $request->gusto aggiornata con successo");
    }

    public function patch(Request $request, int $id){

        $pizza = [];

        if($request->gusto) $pizza['gusto'] = $request->gusto;
        if($request->prezzo) $pizza['prezzo'] = $request->prezzo;
        if($request->active) $pizza['active'] = $request->active;

        Pizza::find($id)->update($pizza);

        return redirect()->route('home')->with('success',"Pizza $request->gusto aggiornata con successo");
    }

    public function destroy(int $id){
        Pizza::destroy($id);

        return redirect()->route('home')->with('success', 'Pizza eliminata con successo');
    }

}

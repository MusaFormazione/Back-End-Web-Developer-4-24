<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    protected $notFoundPizza = ['error' => 'Pizza non trovata'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizze = Pizza::all();
        return response()->json($pizze);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gusto' => 'required|max:255',
            'prezzo' => 'required|numeric|min:0'
        ]);

        $pizza = Pizza::create($validated);

        return response()->json($pizza, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pizza = Pizza::find($id);

        if(!$pizza){
            return response()->json($this->notFoundPizza, 404);
        }

        return response()->json($pizza);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id){

        $pizza = Pizza::find($id);

        if(!$pizza){
            return response()->json($this->notFoundPizza, 404);
        }

        $validated = $request->validate([
            'gusto' => 'required|max:255',
            'prezzo' => 'required|numeric|min:0'
        ]);

        $pizza->update($validated);

        return response()->json($pizza);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $pizza = Pizza::find($id);

        if(!$pizza){
            return response()->json($this->notFoundPizza, 404);
        }

        $pizza->delete();

        return response()->json(['message' => 'Pizza eliminata']);
    }
}

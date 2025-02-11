<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Pizza;

class AvailablePizza
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //Recupero l'ID della pizza dalla rotta.
        $pizzaId = $request->route('id');

        //Recupero la pizza tramite il suo ID.
        $pizza = Pizza::find($pizzaId);

        if(!$pizza){
            return response()->json(['error','Non trovato'], 404);
        }

        if($pizza->available == 0){
            return response()->json(['message' => 'La pizza richiesta non è disponibile'], 403);
            //403 Forbidden
        }

        return $next($request);
    }
}

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Middleware\AvailablePizza;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Questa è la rotta a cui fare le chiamate per poter accedere e ottenere un token, in modo da poter chiamare anche le rotte protette
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

/**
 * Rotte per CRUD pizze
 */
// Route::get('/pizza',[PizzaController::class, 'index']);
// Route::get('/pizza/{id}',[PizzaController::class, 'show']);
// Route::post('/pizza',[PizzaController::class, 'store']);
// Route::put('/pizza/{id}',[PizzaController::class, 'update']);
// Route::delete('/pizza/{id}',[PizzaController::class, 'destroy']);
//Se il tuo controller è RESTful e i metodi hanno i nomi prestabiliti allora scrivere questa riga di codice è come scrivere tutte quelle precedenti
// Route::apiResource('/pizza', PizzaController::class);

//Uso il metodo statico middleware per creare un gruppo di rotte protette.
Route::middleware('auth:sanctum')->group(function(){
    //Posizionando la resource in questo modo, vado a proteggere le rotte di: creazione, modifica o eliminazione delle pizze. Così facendo queste operazioni possono essere fatte da chiunque, ma solo da chi ha effettuato il login e quindi ha i permessi
    Route::apiResource('/pizza', PizzaController::class)->except(['index','show']);
    Route::post('/logout',[AuthController::class,'logout']);
});
//Poniamoci nella situazione in cui si voglia permettere di mostrare le pizze in aree pubbliche
//Ad esempio, abbiamo bisogno di creare una pagina menu per il ristorante, le pizze dovranno essere visibili al pubblico in modo che il frontend possa mostrarle anche agli utenti che sono loggati. Di conseguenza escludo i questi due metodi get dalla protezione
Route::get('/pizza', [PizzaController::class,'index']);//pubblico
Route::get('/pizza/{id}', [PizzaController::class,'show'])->middleware(AvailablePizza::class);//pubblico

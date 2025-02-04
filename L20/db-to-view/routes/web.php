<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizze', [PizzaController::class, 'index']);
Route::get('/pizze-disponibili', [PizzaController::class, 'availablePizzas']);
Route::get('/pizze-api', [PizzaController::class, 'pizzasJson']);

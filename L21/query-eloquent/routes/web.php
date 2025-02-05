<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PizzaController::class, 'index'])->name('home');

Route::view('/create-pizza', 'pages.create')->name('create-pizza');

Route::post('/pizza',[PizzaController::class, 'store'])->name('store-pizza');

Route::get('/pizza/{id}',[PizzaController::class, 'show'])->name('show-pizza');

Route::delete('/pizza/{id}',[PizzaController::class, 'destroy'])->name('destroy-pizza');

Route::get('/pizza/{id}/edit', [PizzaController::class, 'edit'])->name('edit-pizza');
Route::put('/pizza/{id}',[PizzaController::class, 'update'])->name('update-pizza');

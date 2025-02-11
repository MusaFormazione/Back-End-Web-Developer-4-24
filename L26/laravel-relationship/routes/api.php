<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationshipController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/user/{id}/profile',[RelationshipController::class, 'userProfile']);
//Esempio di rotta parametrica con numerosi indici, Occorre sapere lo user ID per poter accedere ad una fattura appartenente a quello user.
// Route::get('/user/{userid}/fatture/{fatturaid}',[RelationshipController::class, 'userProfile']);

Route::get('/user/{id}/orders',[RelationshipController::class, 'userOrders']);
Route::get('/order/{id}/products',[RelationshipController::class, 'orderProducts']);

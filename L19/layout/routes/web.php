<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('v1.pages.home');
});

Route::get('/chi-siamo', function () {
    return view('v1.pages.chi-siamo');
});

Route::get('/contatti', function () {
    return view('v1.pages.contatti');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public-pages.home');
});

Route::view('/dashboard', 'dashboard.home');

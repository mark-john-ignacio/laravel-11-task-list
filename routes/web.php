<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', function ($name){
   return "Wazzup " . $name;
});

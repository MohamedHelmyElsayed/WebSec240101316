<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/multi5', function () {
    return view('Multiplication5');
});

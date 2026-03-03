<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('Home');
});

Route::get('/multi/{number?}', function ($number = 5) {
    return view('Multiplication', ['number' => $number]);
});

Route::get('/even', function () {
    return view('Even');
});

Route::get('/prime', function () {
    return view('Prime');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// create a new route that will serve the test view
Route::get('/test', function () {
    return view('test');
});

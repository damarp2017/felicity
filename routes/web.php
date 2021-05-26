<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('capabilities', 'capabilities');
Route::view('capabilities-inside', 'capabilities_inside');
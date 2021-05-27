<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('capabilities', 'capabilities');
Route::view('capabilities-inside', 'capabilities_inside');
Route::view('opportunities', 'opportunities');
Route::view('about-us', 'about_us');
Route::view('case-studies', 'case_studies');
Route::view('insights', 'insights');
Route::view('our-clients', 'our_clients');
Route::view('press-release', 'press_release');
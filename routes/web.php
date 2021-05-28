<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home'); //responsive
Route::view('capabilities', 'capabilities'); //responsive
Route::view('capabilities-inside', 'capabilities_inside'); //responsive
Route::view('opportunities', 'opportunities'); //responsive
Route::view('about-us', 'about_us'); //responsive
Route::view('case-studies', 'case_studies'); //responsive
Route::view('insights', 'insights'); //responsive
Route::view('our-clients', 'our_clients');
Route::view('press-release', 'press_release');  //responsive
Route::view('contact-us', 'contact_us'); //responsive
Route::view('terms-and-conditions', 'terms_and_conditions'); //responsive
Route::view('capabilities-2', 'capabilities_2'); //responsive
Route::view('case-studies-2', 'case_studies_2'); //responsive
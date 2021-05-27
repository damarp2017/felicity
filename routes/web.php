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
Route::view('contact-us', 'contact_us');
Route::view('terms-and-conditions', 'terms_and_conditions');
Route::view('capabilities-2', 'capabilities_2');
Route::view('case-studies-2', 'case_studies_2');
<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware'=>'App\Http\Middleware\CheckForMaintena'],function(){
	Route::get('/coming-soon',function(){
		return view('coming-soon');
	});
	Route::post('/coming-soon',function(){
		if(request()->input('password')=='myfeli'){
			session()->put('allow',true);
		}
		return redirect('/');
	});
	Route::view('/', 'intro.index');
	Route::view('home', 'home');
	Route::view('capabilities', 'capabilities');
	Route::view('capabilities-inside', 'capabilities_inside');
	Route::view('opportunities', 'opportunities');
	Route::view('about-us', 'about_us');
	Route::view('case-studies', 'case_studies');
	Route::view('insights', 'insights');
	Route::view('terms-and-conditions', 'terms_and_conditions');
	Route::view('privacy', 'privacy');
	Route::view('contact-us', 'contact_us');
	Route::view('press-release', 'press_release'); 
	Route::view('insights-inside', 'insights_inside');
	Route::view('case-studies-2', 'case_studies_2');
	Route::view('our-clients', 'our_clients');	
// });
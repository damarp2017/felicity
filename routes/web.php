<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware'=>'App\Http\Middleware\CheckForMaintena'],function(){
	Route::get('/coming-soon',function(){
		return view('coming-soon');
	});
	Route::post('/have-a-project',function(){
		$fullname=request()->input('fullname');
		$email=request()->input('email');
		$phone=request()->input('phone');
		$reason=request()->input('reason');
		$subject = "New Leads! | ".$fullname." | FelicityMedia";
		$to = 'info@felicitymedia.in';
		// $to = 'official.rifkidermawan@gmail.com';
		$content="
		<!DOCTYPE html>
		<html>
		<body>
			<h5>Detail:</h5>
			Fullname: {$fullname}<br/>
			Email: {$email}<br/>
			Phone: {$phone}<br/>
			Reason: {$reason}<br/>
			<br/>
		</body>
		</html>
		";
		$res= mail($to,$subject,$content,[
            'From'=>'noreply@felicitymedia.in',
            'MIME-Version'=>'1.0',
            'Content-type'=>'text/html; charset=iso-8859-1',
            'X-Priority'=>'1',
            'Reply-To'=>'noreply@ethnicindia.co',
            'X-Mailer'=>'PHP/'.phpversion(),
        ],'-fnoreply@ethnicindia.co');

        return response()->json(['res'=>$res]);
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
	
	Route::view('capabilities/marketing-strategy', 'capabilities.marketing-strategy');
	Route::view('capabilities/branding', 'capabilities.branding');
	Route::view('capabilities/content-production', 'capabilities.content-production');
	Route::view('capabilities/influencer-outreach', 'capabilities.influencer-outreach');
	Route::view('capabilities/technology-design', 'capabilities.technology-design');

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
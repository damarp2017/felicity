<?php

use App\Http\Controllers\BackOffice\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware'=>'App\Http\Middleware\CheckForMaintena'],function(){
Route::get('/coming-soon', function () {
	return view('coming-soon');
});
Route::post('/have-a-project', function () {
	$fullname = request()->input('fullname');
	$email = request()->input('email');
	$phone = request()->input('phone');
	$reason = request()->input('reason');
	$subject = "New Leads! | " . $fullname . " | FelicityMedia";
	$to = 'hello@felicitymedia.in';
	// $to = 'official.rifkidermawan@gmail.com';
	$content = "
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
	$res = mail($to, $subject, $content, [
		'From' => 'noreply@felicitymedia.in',
		'MIME-Version' => '1.0',
		'Content-type' => 'text/html; charset=iso-8859-1',
		'X-Priority' => '1',
		'Reply-To' => 'noreply@felicitymedia.in',
		'X-Mailer' => 'PHP/' . phpversion(),
	], '-fnoreply@felicitymedia.in');

	return response()->json(['res' => $res]);
});
Route::post('/subscribe', function () {
	$fullname = request()->input('fullname');
	$email = request()->input('email');
	$subject = "New Subscriber! | " . $fullname . " | FelicityMedia";
	$to = 'hello@felicitymedia.in';
	// $to = 'official.rifkidermawan@gmail.com';
	$content = "
		<!DOCTYPE html>
		<html>
		<body>
			<h5>Detail:</h5>
			Fullname: {$fullname}<br/>
			Email: {$email}<br/>
			<br/>
		</body>
		</html>
		";
	$res = mail($to, $subject, $content, [
		'From' => 'noreply@felicitymedia.in',
		'MIME-Version' => '1.0',
		'Content-type' => 'text/html; charset=iso-8859-1',
		'X-Priority' => '1',
		'Reply-To' => 'noreply@felicitymedia.in',
		'X-Mailer' => 'PHP/' . phpversion(),
	], '-fnoreply@felicitymedia.in');

	return response()->json(['res' => $res]);
});
Route::post('/coming-soon', function () {
	if (request()->input('secret') == 'myfeli') {
		session()->put('allow', true);
	}
	return redirect('/');
});
Route::view('/', 'home');
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
Auth::routes();

Route::prefix('backoffice')->middleware('auth')->group(function () {
	Route::get('home/', [HomeController::class, 'titleAndSubtitle'])->name('backoffice.home');
	Route::get('home/title-and-subtitle', [HomeController::class, 'titleAndSubtitle'])->name('backoffice.home.titleAndSubtitle');
	Route::get('home/vision-and-manifesto', [HomeController::class, 'visionAndManifesto'])->name('backoffice.home.visionAndManifesto');
	Route::get('home/missions', [HomeController::class, 'missions'])->name('backoffice.home.missions');
	Route::get('home/button1-and-button2', [HomeController::class, 'button1AndButton2'])->name('backoffice.home.button1AndButton2');
	Route::patch('home/updateTitleAndSubtitle', [HomeController::class, 'updateTitleAndSubtitle'])->name('backoffice.home.updateTitleAndSubtitle');
	Route::patch('home/updateVisionAndManifesto', [HomeController::class, 'updateVisionAndManifesto'])->name('backoffice.home.updateVisionAndManifesto');
	Route::post('home/storeMissions', [HomeController::class, 'storeMissions'])->name('backoffice.home.storeMissions');
	Route::patch('home/updateMissions/{arrayIndex}', [HomeController::class, 'updateMissions'])->name('backoffice.home.updateMissions');
	Route::delete('home/deleteMissions/{arrayIndex}', [HomeController::class, 'deleteMissions'])->name('backoffice.home.deleteMissions');
	Route::patch('home/updateButton1AndButton2', [HomeController::class, 'updateButton1AndButton2'])->name('backoffice.home.updateButton1AndButton2');
});

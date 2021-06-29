<?php

use App\Http\Controllers\BackOffice\SettingController;
use App\Http\Controllers\BackOffice\StaticContent\HomeController;
use App\Http\Controllers\BackOffice\StaticContent\StaticAboutController;
use App\Http\Controllers\BackOffice\StaticContent\StaticCapabilityController;
use App\Http\Controllers\BackOffice\StaticContent\StaticOpportunityController;
use App\Http\Controllers\BackOffice\StaticContent\StaticPrivacyController;
use App\Http\Controllers\BackOffice\StaticContent\StaticTermsController;
use App\Http\Controllers\SubscribeController;
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

Route::post('home', [SubscribeController::class, 'insert'])->name('subscribe.insert');

Auth::routes();

Route::prefix('backoffice')->middleware('auth')->group(function () {
	Route::prefix('static')->group(function () {
		Route::prefix('home')->group(function () {
			Route::get('', [HomeController::class, 'titleAndSubtitle'])->name('backoffice.static.home');
			Route::get('title-and-subtitle', [HomeController::class, 'titleAndSubtitle'])->name('backoffice.static.home.titleAndSubtitle');
			Route::get('vision-and-manifesto', [HomeController::class, 'visionAndManifesto'])->name('backoffice.static.home.visionAndManifesto');
			Route::get('missions', [HomeController::class, 'missions'])->name('backoffice.static.home.missions');
			Route::get('button1-and-button2', [HomeController::class, 'button1AndButton2'])->name('backoffice.static.home.button1AndButton2');
			Route::patch('updateTitleAndSubtitle', [HomeController::class, 'updateTitleAndSubtitle'])->name('backoffice.static.home.updateTitleAndSubtitle');
			Route::patch('updateVisionAndManifesto', [HomeController::class, 'updateVisionAndManifesto'])->name('backoffice.static.home.updateVisionAndManifesto');
			Route::post('storeMissions', [HomeController::class, 'storeMissions'])->name('backoffice.static.home.storeMissions');
			Route::patch('updateMissions/{arrayIndex}', [HomeController::class, 'updateMissions'])->name('backoffice.static.home.updateMissions');
			Route::delete('deleteMissions/{arrayIndex}', [HomeController::class, 'deleteMissions'])->name('backoffice.static.home.deleteMissions');
			Route::patch('updateButton1AndButton2', [HomeController::class, 'updateButton1AndButton2'])->name('backoffice.static.home.updateButton1AndButton2');
		});
		Route::prefix('capabilities')->group(function () {
			Route::get('', [StaticCapabilityController::class, 'title'])->name('backoffice.static.capabilities');
			Route::get('title', [StaticCapabilityController::class, 'title'])->name('backoffice.static.capabilities.title');
			Route::patch('updateTitle', [StaticCapabilityController::class, 'updateTitle'])->name('backoffice.static.capabilities.updateTitle');
		});
		Route::prefix('opportunities')->group(function () {
			Route::get('', [StaticOpportunityController::class, 'titleAndSubtitle'])->name('backoffice.static.opportunities');
			Route::get('title-and-subtitle', [StaticOpportunityController::class, 'titleAndSubtitle'])->name('backoffice.static.opportunities.titleAndSubtitle');
			Route::patch('updateTitleAndSubtitle', [StaticOpportunityController::class, 'updateTitleAndSubtitle'])->name('backoffice.static.opportunities.updateTitleAndSubtitle');

			Route::get('benefits', [StaticOpportunityController::class, 'benefits'])->name('backoffice.static.opportunities.benefits');
			Route::patch('updateBenefits/{arrayIndex}', [StaticOpportunityController::class, 'updateBenefits'])->name('backoffice.static.opportunities.updateBenefits');

			Route::get('reasons', [StaticOpportunityController::class, 'reasons'])->name('backoffice.static.opportunities.reasons');
			Route::patch('updateReasons/{arrayIndex}', [StaticOpportunityController::class, 'updateReasons'])->name('backoffice.static.opportunities.updateReasons');
		});
        Route::prefix('about')->group(function () {
			Route::get('', [StaticAboutController::class, 'title'])->name('backoffice.static.about');
			Route::get('title', [StaticAboutController::class, 'title'])->name('backoffice.static.about.title');
			Route::patch('updateTitle', [StaticAboutController::class, 'updateTitle'])->name('backoffice.static.about.updateTitle');

            Route::get('visions', [StaticAboutController::class, 'visions'])->name('backoffice.static.about.visions');
			Route::patch('updateVisions/{arrayIndex}', [StaticAboutController::class, 'updateVisions'])->name('backoffice.static.about.updateVisions');
		});
        Route::prefix('privacy')->group(function () {
			Route::get('', [StaticPrivacyController::class, 'edit'])->name('backoffice.static.privacy');
			Route::get('edit', [StaticPrivacyController::class, 'edit'])->name('backoffice.static.privacy.edit');
			Route::patch('update', [StaticPrivacyController::class, 'update'])->name('backoffice.static.privacy.update');
		});
        Route::prefix('terms')->group(function () {
			Route::get('', [StaticTermsController::class, 'edit'])->name('backoffice.static.terms');
			Route::get('edit', [StaticTermsController::class, 'edit'])->name('backoffice.static.terms.edit');
			Route::patch('update', [StaticTermsController::class, 'update'])->name('backoffice.static.terms.update');
		});

        Route::prefix('settings')->group(function () {
			Route::get('', [SettingController::class, 'edit'])->name('backoffice.setting');
			Route::get('edit', [SettingController::class, 'edit'])->name('backoffice.setting.edit');
			Route::patch('edit', [SettingController::class, 'update'])->name('backoffice.setting.update');
		});

	});
});

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use App\Home;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\Sections\SectionHaveProjectIdea;
use App\Sections\SectionInsightCaseStudy;
use App\Sections\SectionSubscribe;
use App\Setting;
use App\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::first();
        $footer = SectionFooter::first();
        $haveIdea = SectionHaveProjectIdea::first();
        $insightCaseStudy = SectionInsightCaseStudy::first();
        $subscribe = SectionSubscribe::first();
        $setting = Setting::first();
        return view('home', [
            'data' => $data,
            'footer' => $footer,
            'haveIdea' => $haveIdea,
            'insightCaseStudy' => $insightCaseStudy,
            'subscribe' => $subscribe,
            'setting' => $setting
        ]);
    }

    public function insertSubscribe(Request $request)
    {
        Subscribe::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        return redirect()->back()
		->with(["success" => "Subscribe Felicity successfully."]);
    }

    public function insertHaveIdea(Request $request)
    {
        Contact::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'reason' => $request->reason,
        ]);
        return redirect()->back()
		->with(["success" => "Subscribe Felicity successfully."]);
    }

}

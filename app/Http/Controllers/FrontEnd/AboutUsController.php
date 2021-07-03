<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Sections\SectionFooter;
use App\Http\Controllers\Controller;
use App\StaticContent\StaticAboutUs;
use App\DynamicContect\DynamicOurValue;
use App\Setting;
use App\StaticContent\StaticContentAboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = StaticAboutUs::first();
        $contents = StaticContentAboutUs::all();
        $footer = SectionFooter::first();
		$ourValues = DynamicOurValue::all();
        $setting = Setting::first();
        return view('about_us', [
            'data' => $data,
            'contents' => $contents,
            'footer' => $footer,
			'ourValues' => $ourValues,
            'setting' => $setting
        ]);
    }
}

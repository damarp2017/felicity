<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Sections\SectionFooter;
use App\Http\Controllers\Controller;
use App\DynamicContect\DynamicOurValue;
use App\Setting;
use App\StaticContent\StaticOpportunity;

class OpportunityController extends Controller
{
    public function index()
    {
        $data = StaticOpportunity::first();
        $footer = SectionFooter::first();
		$ourValues = DynamicOurValue::all();
        $setting = Setting::first();
        return view('opportunities', [
            'data' => $data,
            'footer' => $footer,
			'ourValues' => $ourValues,
            'setting' => $setting
        ]);
    }
}

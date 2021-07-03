<?php

namespace App\Http\Controllers\FrontEnd;

use App\DynamicContect\DynamicCapability;
use App\DynamicContect\DynamicOurValue;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\Sections\SectionHaveProjectIdea;
use App\Setting;
use App\StaticContent\StaticCapability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    public function index()
    {
        $data = StaticCapability::first();
		$capabilities = DynamicCapability::all();
		$haveIdea = SectionHaveProjectIdea::first();
        $footer = SectionFooter::first();
        $setting = Setting::first();
        return view('capabilities', [
            'data' => $data,
            'footer' => $footer,
            'haveIdea' => $haveIdea,
			'capabilities' => $capabilities,
            'setting' => $setting
        ]);
    }
}

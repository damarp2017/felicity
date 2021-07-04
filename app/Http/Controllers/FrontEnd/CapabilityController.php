<?php

namespace App\Http\Controllers\FrontEnd;

use App\DynamicContect\CapabilityDetail;
use App\DynamicContect\CapabilityDetailOurProccess;
use App\DynamicContect\CapabilityDetailWhatsInclude;
use App\Setting;
use Illuminate\Http\Request;
use App\Sections\SectionFooter;
use App\Http\Controllers\Controller;
use App\DynamicContect\DynamicOurValue;
use App\StaticContent\StaticCapability;
use App\Sections\SectionHaveProjectIdea;
use App\DynamicContect\DynamicCapability;
use App\Sections\SectionInsightCaseStudy;

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

	public function detail($link)
	{
		$data = DynamicCapability::where('link_button', $link)->first();
		$dataDetail = CapabilityDetail::where('dynamic_capability_id', $data->id)->first();
		$insightCaseStudy = SectionInsightCaseStudy::first();
		$haveIdea = SectionHaveProjectIdea::first();
		$footer = SectionFooter::first();
		$ourProcess = CapabilityDetailOurProccess::where('dynamic_capability_id', $data->id)->get();
		$whatIncludes = CapabilityDetailWhatsInclude::where('dynamic_capability_id', $data->id)->get();
		$setting = Setting::first();
		return view('capabilities.detail', [
			'data' => $data,
			'insightCaseStudy' => $insightCaseStudy,
			'haveIdea' => $haveIdea,
			'footer' => $footer,
			'setting' => $setting,
			'dataDetail' => $dataDetail,
			'ourProcess' => $ourProcess,
			'whatIncludes' => $whatIncludes,
		]);
	}
}

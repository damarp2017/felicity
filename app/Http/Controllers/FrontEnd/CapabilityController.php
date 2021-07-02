<?php

namespace App\Http\Controllers\FrontEnd;

use App\DynamicContect\DynamicCapability;
use App\DynamicContect\DynamicOurValue;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticCapability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    public function index()
    {
        $data = StaticCapability::first();
		$capabilities = DynamicCapability::all();
		
        $footer = SectionFooter::first();
        return view('capabilities', [
            'data' => $data,
            'footer' => $footer,
			'capabilities' => $capabilities,
        ]);
    }
}

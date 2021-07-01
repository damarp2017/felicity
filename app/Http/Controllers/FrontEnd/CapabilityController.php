<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticCapability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    public function index()
    {
        $data = StaticCapability::first();
        $footer = SectionFooter::first();
        return view('capabilities', [
            'data' => $data,
            'footer' => $footer
        ]);
    }
}

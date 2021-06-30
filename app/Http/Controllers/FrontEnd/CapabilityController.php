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
        $datas = StaticCapability::all()->last();
        $footer = SectionFooter::all()->last();
        return view('capabilities', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }
}

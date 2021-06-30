<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticOpportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function index()
    {
        $datas = StaticOpportunity::all()->last();
        $footer = SectionFooter::all()->last();
        return view('opportunities', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }
}

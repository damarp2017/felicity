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
        $data = StaticOpportunity::first();
        $footer = SectionFooter::first();
        return view('opportunities', [
            'data' => $data,
            'footer' => $footer
        ]);
    }
}

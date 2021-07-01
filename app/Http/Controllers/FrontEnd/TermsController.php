<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticTerms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $data = StaticTerms::first();
        $footer = SectionFooter::first();
        return view('terms_and_conditions', [
            'data' => $data,
            'footer' => $footer
        ]);
    }
}

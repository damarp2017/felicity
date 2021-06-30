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
        $datas = StaticTerms::all()->last();
        $footer = SectionFooter::all()->last();
        return view('terms_and_conditions', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }
}

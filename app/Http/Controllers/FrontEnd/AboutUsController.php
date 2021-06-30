<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticAboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $datas = StaticAboutUs::all()->last();
        $footer = SectionFooter::all()->last();
        return view('about_us', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }
}

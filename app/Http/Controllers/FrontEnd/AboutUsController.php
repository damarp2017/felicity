<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticAboutUs;
use App\StaticContent\StaticContentAboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = StaticAboutUs::first();
        $contents = StaticContentAboutUs::first();
        $footer = SectionFooter::first();
        return view('about_us', [
            'data' => $data,
            'contents' => $contents,
            'footer' => $footer
        ]);
    }
}

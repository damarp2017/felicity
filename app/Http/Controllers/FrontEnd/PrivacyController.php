<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\StaticContent\StaticPrivacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $datas = StaticPrivacy::all()->last();
        $footer = SectionFooter::all()->last();
        return view('privacy', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }
}

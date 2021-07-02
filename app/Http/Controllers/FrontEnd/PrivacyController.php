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
        $data = StaticPrivacy::first();
        $footer = SectionFooter::first();
        return view('privacy', [
            'data' => $data,
            'footer' => $footer
        ]);
    }
}
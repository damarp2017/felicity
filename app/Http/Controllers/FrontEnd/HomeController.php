<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use App\Home;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::first();
        $footer = SectionFooter::first();
        return view('home', [
            'data' => $data,
            'footer' => $footer
        ]);
    }

    public function insertSubscribe(Request $request)
    {
        Subscribe::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        return redirect()->back()
		->with(["success" => "Subscribe Felicity successfully."]);
    }


}

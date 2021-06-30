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
        $datas = Home::all()->last();
        $footer = SectionFooter::all()->last();
        return view('home', [
            'datas' => $datas,
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

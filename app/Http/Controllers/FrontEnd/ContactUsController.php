<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $datas = Contact::all()->last();
        $footer = SectionFooter::all()->last();
        return view('contact_us', [
            'datas' => $datas,
            'footer' => $footer
        ]);
    }

    public function insertContact(Request $request)
    {
        Contact::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'reason' => $request->reason,
        ]);
        return redirect()->back()
		->with(["success" => "Subscribe Felicity successfully."]);
    }
}

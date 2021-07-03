<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use App\Setting;
use App\StaticContent\ContactUs\Location;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = Contact::first();
        $footer = SectionFooter::first();
		$locations = Location::all();
        $setting = Setting::first();
        return view('contact_us', [
            'data' => $data,
            'footer' => $footer,
			'locations' => $locations,
            'setting' => $setting
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

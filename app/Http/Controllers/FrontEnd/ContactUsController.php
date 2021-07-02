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
        $data = Setting::first();
        $footer = SectionFooter::first();
		$locations = Location::all();
        return view('contact_us', [
            'data' => $data,
            'footer' => $footer,
			'locations' => $locations
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

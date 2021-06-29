<?php

namespace App\Http\Controllers\BackOffice\Report;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function list()
    {
        $contacts = Contact::all();
        return view('backoffice.report.contact-us', compact('contacts'));

    }
}

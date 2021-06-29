<?php

namespace App\Http\Controllers\BackOffice\Report;

use App\Http\Controllers\Controller;
use App\Subscribe;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function list()
    {
        $subscribers = Subscribe::all();
        return view('backoffice.report.subscriber', compact('subscribers'));

    }

    public function insert(Request $request)
    {
        Subscribe::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        return redirect()->back()
		->with(["success" => "Subscribe Felicity successfully."]);
    }
}

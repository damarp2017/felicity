<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
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

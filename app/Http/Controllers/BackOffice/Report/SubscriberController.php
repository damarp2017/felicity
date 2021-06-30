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

}

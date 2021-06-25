<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticCapability;
use Illuminate\Http\Request;

class StaticCapabilityController extends Controller
{
    public function title()
    {
        $capability = StaticCapability::get()->first();
        return view('backoffice.static.capabilities.title', [
            'data' => $capability
        ]);
    }

    public function updateTitle(Request $request)
    {
        $capability = StaticCapability::get()->first();
        $capability->title = $request->title;
        $capability->update();
        return redirect()->route('backoffice.static.capabilities.title')
            ->with(["success" => "Title updated successfully."]);
    }
}

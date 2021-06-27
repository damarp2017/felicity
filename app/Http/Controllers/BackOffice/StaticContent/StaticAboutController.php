<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticAbout;
use Illuminate\Http\Request;

class StaticAboutController extends Controller
{
    public function title()
    {
        $about = StaticAbout::get()->first();
        return view('backoffice.static.about.title', [
            'data' => $about
        ]);
    }

    public function updateTitle(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		$data = StaticAbout::first();
		if(!$data){
			StaticAbout::create([
				'title' => $request->title,
			]);
		}else{
			$data->update([
				'title' => $request->title,
			]);
		}

		return redirect()->route('backoffice.static.about')
		->with(["success" => "About Us updated successfully."]);
	}
}

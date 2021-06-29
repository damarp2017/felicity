<?php

namespace App\Http\Controllers\BackOffice\StaticContent\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StaticContent\StaticAboutUs;

class TitleSubtitleController extends Controller
{
    public function edit()
	{
		return view('backoffice.static.about_us.title_subtitle.edit', [
			'data' => StaticAboutUs::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'subtitle' => 'required'
		]);

		$data = StaticAboutUs::first();
		if(!$data){
			StaticAboutUs::create([
				'title' => $request->title,	
				'subtitle' => $request->subtitle	
			]);
		}else{
			$data->update([
				'title' => $request->title,	
				'subtitle' => $request->subtitle	
			]);
		}

		return redirect()->route('backoffice.static.about.us.title.subtitle')
		->with(["success" => "Title Hero About Us updated successfully."]);
	}
}

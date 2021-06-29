<?php

namespace App\Http\Controllers\BackOffice\StaticContent\AboutUs;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticAboutUs;
use Illuminate\Http\Request;

class TitleHeroController extends Controller
{
    public function edit()
	{
		return view('backoffice.static.about_us.title_hero.edit', [
			'data' => StaticAboutUs::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'title_hero' => 'required',
		]);

		$data = StaticAboutUs::first();
		if(!$data){
			StaticAboutUs::create([
				'title_hero' => $request->title_hero
			]);
		}else{
			$data->update([
				'title_hero' => $request->title_hero,
			]);
		}

		return redirect()->route('backoffice.static.about.us.title.hero')
		->with(["success" => "Title Hero About Us updated successfully."]);
	}
}

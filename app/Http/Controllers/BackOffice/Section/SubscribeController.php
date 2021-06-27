<?php

namespace App\Http\Controllers\BackOffice\Section;

use App\Http\Controllers\Controller;
use App\Sections\SectionSubscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function edit()
	{
		return view('backoffice.section.subscribe.index', [
			'data' => SectionSubscribe::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'subtitle' => 'required',
		]);
		
		$data = SectionSubscribe::first();
		if(!$data){
			SectionSubscribe::create([
				'title' => $request->title,	
				'subtitle' => $request->subtitle,
			]);
		}else{
			$data->update([
				'title' => $request->title,	
				'subtitle' => $request->subtitle,
			]);
		}

		return redirect()->route('backoffice.section.subscribe')
		->with(["success" => "Subscribe updated successfully."]);
	}
}

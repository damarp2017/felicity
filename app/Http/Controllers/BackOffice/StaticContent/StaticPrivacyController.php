<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticPrivacy;
use Illuminate\Http\Request;

class StaticPrivacyController extends Controller
{
    public function edit()
    {
        $privacy = StaticPrivacy::get()->first();
        return view('backoffice.static.privacy.privacy', [
            'data' => $privacy
        ]);
    }

    public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		$data = StaticPrivacy::first();
		if(!$data){
			StaticPrivacy::create([
				'title' => $request->title,
				'description' => $request->description,
			]);
		}else{
			$data->update([
				'title' => $request->title,
				'description' => $request->description,
			]);
		}

		return redirect()->route('backoffice.static.privacy')
		->with(["success" => "Privacy Policy updated successfully."]);
	}
}

<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::get()->first();
        return view('backoffice.settings.setting', [
            'data' => $setting
        ]);
    }

    public function update(Request $request)
	{
		$data = Setting::first();
		if(!$data){
			Setting::create([
				'link' => $request->link,
				'favicon' => $request->favicon,
				'company_name' => $request->company_name,
				'email' => $request->email,
				'facebook' => $request->facebook,
				'twitter' => $request->twitter,
				'instagram' => $request->instagram,
				'linkedin' => $request->linkedin,
				'youtube' => $request->youtube,
			]);
		}else{
			$data->update([
				'link' => $request->link,
                'favicon' => $request->favicon,
				'company_name' => $request->company_name,
				'email' => $request->email,
				'facebook' => $request->facebook,
				'twitter' => $request->twitter,
				'instagram' => $request->instagram,
				'linkedin' => $request->linkedin,
				'youtube' => $request->youtube,
			]);
		}

		return redirect()->route('backoffice.setting')
		->with(["success" => "Setting updated successfully."]);
	}
}

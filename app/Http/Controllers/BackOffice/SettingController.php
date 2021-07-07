<?php

namespace App\Http\Controllers\BackOffice;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hamcrest\Core\Set;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::get()->first();
        return view('backoffice.settings.setting', [
            'data' => $setting
        ]);
    }

	public function updateSite(Request $request)
	{
		$attr = $request->validate([
			'link' => 'required',
			'favicon' => 'image|mimes:jpg,png,jpeg,gif,svg|max:512',
		]);
		$data = Setting::first();
		if($request->favicon){
			$favicon = $request->file('favicon')->store('images/settings');
			$attr['favicon'] = $favicon;
		}else{
			$attr['favicon'] = $data->favicon;
		}
		$data ? $data->update($attr) : Setting::create($attr);

		return redirect()->route('backoffice.setting')
		->with(["success" => "Setting updated successfully."]);
	}

    public function updateContact(Request $request)
	{
		$attr = $request->validate([
			'company_name' => 'required',
			'email' => 'required',
			'facebook' => 'required',
			'twitter' => 'required',
			'instagram' => 'required',
			'linkedin' => 'required',
			'youtube' => 'required',
		]);
		$data = Setting::first();
		$data ? $data->update($attr) : Setting::create($attr);

		return redirect()->route('backoffice.setting')
		->with(["success" => "Setting updated successfully."]);
	}

    public function updateOthers(Request $request)
	{
		$attr = $request->validate([
			'insights_link' => 'required',
			'case_studies_link' => 'required',
			'book_link' => 'required',
		]);
		$data = Setting::first();
		$data ? $data->update($attr) : Setting::create($attr);

		return redirect()->route('backoffice.setting')
		->with(["success" => "Setting updated successfully."]);
	}
}

<?php

namespace App\Http\Controllers\BackOffice\Section;

use App\Http\Controllers\Controller;
use App\Sections\SectionFooter;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function edit()
	{
		return view('backoffice.section.footer.subtitle', [
			'footer' => SectionFooter::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'subtitle' => 'required'
		]);

		$data = SectionFooter::first();
		if(!$data){
			SectionFooter::create([
				'subtitle' => $request->subtitle	
			]);
		}else{
			$data->update([
				'subtitle' => $request->subtitle	
			]);
		}

		return redirect()->route('backoffice.section.footer.subtitle')
		->with(["success" => "Subtitle Footer updated successfully."]);
	}
}

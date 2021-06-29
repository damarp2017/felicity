<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticTerms;
use Illuminate\Http\Request;

class StaticTermsController extends Controller
{
    public function edit()
    {
        $terms = StaticTerms::get()->first();
        return view('backoffice.static.terms.terms', [
            'data' => $terms
        ]);
    }

    public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		$data = StaticTerms::first();
		if(!$data){
			StaticTerms::create([
				'title' => $request->title,
				'description' => $request->description,
			]);
		}else{
			$data->update([
				'title' => $request->title,
				'description' => $request->description,
			]);
		}

		return redirect()->route('backoffice.static.terms')
		->with(["success" => "Terms and Conditions updated successfully."]);
	}
}

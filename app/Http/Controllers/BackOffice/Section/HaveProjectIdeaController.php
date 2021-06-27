<?php

namespace App\Http\Controllers\BackOffice\Section;

use App\Http\Controllers\Controller;
use App\Sections\SectionHaveProjectIdea;
use Illuminate\Http\Request;

class HaveProjectIdeaController extends Controller
{
    public function edit()
	{
		return view('backoffice.section.have_project_idea.index', [
			'data' => SectionHaveProjectIdea::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'subtitle' => 'required'
		]);
		
		$data = SectionHaveProjectIdea::first();
		if(!$data){
			SectionHaveProjectIdea::create([
				'title' => $request->title,
				'subtitle' => $request->subtitle	
			]);
		}else{
			$data->update([
				'title' => $request->title,
				'subtitle' => $request->subtitle	
			]);
		}

		return redirect()->route('backoffice.section.have.project.idea')
		->with(["success" => "Have Project Idea updated successfully."]);
	}
}

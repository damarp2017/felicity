<?php

namespace App\Http\Controllers\BackOffice\Section;

use App\Http\Controllers\Controller;
use App\Sections\SectionJoinTheTeam;
use Illuminate\Http\Request;

class JoinTheTeamController extends Controller
{
    public function edit()
	{
		return view('backoffice.section.join_the_team.index', [
			'data' => SectionJoinTheTeam::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'text_button' => 'required',
			'link_button' => 'required'
		]);
		
		$data = SectionJoinTheTeam::first();
		if(!$data){
			SectionJoinTheTeam::create([
				'title' => $request->title,	
				'subtitle' => $request->subtitle,	
				'link_button' => $request->link_button,	
				'text_button' => $request->text_button,	
			]);
		}else{
			$data->update([
				'title' => $request->title,	
				'subtitle' => $request->subtitle,	
				'link_button' => $request->link_button,	
				'text_button' => $request->text_button,	
			]);
		}

		return redirect()->route('backoffice.section.join.the.team')
		->with(["success" => "Join The Team updated successfully."]);
	}
}

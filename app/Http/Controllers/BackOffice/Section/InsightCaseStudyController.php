<?php

namespace App\Http\Controllers\BackOffice\Section;

use App\Http\Controllers\Controller;
use App\Sections\SectionInsightCaseStudy;
use Illuminate\Http\Request;

class InsightCaseStudyController extends Controller
{
    public function edit()
	{
		return view('backoffice.section.insight_case_study.index', [
			'data' => SectionInsightCaseStudy::first()
		]);
	}


	public function update(Request $request)
	{
		$request->validate([
			'insight_subtitle' => 'required',
			'case_study_subtitle' => 'required'
		]);
		
		$data = SectionInsightCaseStudy::first();
		if(!$data){
			SectionInsightCaseStudy::create([
				'insight_subtitle' => $request->insight_subtitle,	
				'case_study_subtitle' => $request->case_study_subtitle	
			]);
		}else{
			$data->update([
				'insight_subtitle' => $request->insight_subtitle,	
				'case_study_subtitle' => $request->case_study_subtitle	
			]);
		}

		return redirect()->route('backoffice.section.insight.case.study')
		->with(["success" => "Insight and Case Study updated successfully."]);
	}
}

<?php

namespace App\Http\Controllers\BackOffice\DynamicContent;

use App\DynamicContect\CapabilityDetail;
use App\DynamicContect\CapabilityDetailOurProccess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurProcessController extends Controller
{
    public function index($capabilityId)
	{
		$ourProccesses = CapabilityDetailOurProccess::where('dynamic_capability_id', $capabilityId)->get();
		return view('backoffice.dynamic.capabilities_detail.our_proccess.index', [
			'ourProccesses' => $ourProccesses,
			'capabilityId' => $capabilityId
		]);
	}

	public function create($capabilityId)
	{
		return view('backoffice.dynamic.capabilities_detail.our_proccess.create', [
			'capabilityId' => $capabilityId
		]);
	}

	public function edit($capabilityId, $id)
	{
		$data = CapabilityDetailOurProccess::whereId($id)->first();
		return view('backoffice.dynamic.capabilities_detail.our_proccess.edit', [
			'capabilityId' => $capabilityId,
			'data' => $data
		]);
	}

	public function store(Request $request, $capabilityId)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
		]);

		$attr['dynamic_capability_id'] = $capabilityId;

		$detail = CapabilityDetail::first();
		if(!$detail){
			$detail = CapabilityDetail::create([
				'title_detail' => 'null',
				'subtitle' => 'null',
			]);
		}
		$attr['capability_detail_id'] = $capabilityId;
		CapabilityDetailOurProccess::create($attr);
		
		return redirect()->route('backoffice.dynamic.our.process.index', $capabilityId)
            ->with(["success" => "Our Proccess created successfully."]);
	}

	public function update(Request $request, $capabilityId, $id)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
		]);
		CapabilityDetailOurProccess::whereId($id)->update($attr);
		
		return redirect()->route('backoffice.dynamic.our.process.index', $capabilityId)
            ->with(["success" => "Our Proccess updated successfully."]);
	}

	public function delete($capabilityId, $id)
	{
		CapabilityDetailOurProccess::destroy($id);
		return redirect()->route('backoffice.dynamic.our.process.index', $capabilityId)
            ->with(["success" => "Our Proccess delete successfully."]);
	}
}

<?php

namespace App\Http\Controllers\BackOffice\DynamicContent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DynamicContect\CapabilityDetail;

class CapabilityDetailController extends Controller
{
	public function edit($capabilityId)
	{
		$data = CapabilityDetail::where('dynamic_capability_id', $capabilityId)->first();
		return view('backoffice.dynamic.capabilities_detail.title_subtitle.index', [
			'data' => $data,
			'capabilityId' => $capabilityId
		]);
	}
	
    public function update(Request $request, $capabilityId)
	{
		$attr = $request->validate([
			'title_detail' => 'required',
			'subtitle' => 'required',
		]);
		$data = CapabilityDetail::where('dynamic_capability_id', $capabilityId)->first();
		$attr['dynamic_capability_id'] = $capabilityId;
		$data ? $data->update($attr) : CapabilityDetail::create($attr);

		return redirect()->back()
            ->with(["success" => "Capabilities Detail deleted successfully."]);
	}
}

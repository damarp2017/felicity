<?php

namespace App\Http\Controllers\BackOffice\DynamicContent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DynamicContect\CapabilityDetail;
use App\DynamicContect\CapabilityDetailWhatsInclude;

class WhatIncludeController extends Controller
{
    public function index($capabilityId)
	{
		$whatIncludes = CapabilityDetailWhatsInclude::where('dynamic_capability_id', $capabilityId)->get();
		return view('backoffice.dynamic.capabilities_detail.whats_includes.index', [
			'whatIncludes' => $whatIncludes,
			'capabilityId' => $capabilityId
		]);
	}

	public function create($capabilityId)
	{
		return view('backoffice.dynamic.capabilities_detail.whats_includes.create', [
			'capabilityId' => $capabilityId
		]);
	}

	public function edit($capabilityId, $id)
	{
		$data = CapabilityDetailWhatsInclude::whereId($id)->first();
		return view('backoffice.dynamic.capabilities_detail.whats_includes.edit', [
			'capabilityId' => $capabilityId,
			'data' => $data
		]);
	}

	public function store(Request $request, $capabilityId)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
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
		$image = $request->file('image')->store('images/what_includes');
		$attr['image'] = Storage::url($image);
		CapabilityDetailWhatsInclude::create($attr);
		
		return redirect()->route('backoffice.dynamic.what.include.index', $capabilityId)
            ->with(["success" => "Whats Includes created successfully."]);
	}

	public function update(Request $request, $capabilityId, $id)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);
		$whatInclude = CapabilityDetailWhatsInclude::whereId($id)->first();
		if($request->image){
			$image = $request->file('image')->store('images/what_includes');
			$attr['image'] = Storage::url($image);
		}else{
			$attr['image'] = $whatInclude->image;
		}
		$whatInclude->update($attr);
		
		return redirect()->route('backoffice.dynamic.what.include.index', $capabilityId)
            ->with(["success" => "Whats Includes updated successfully."]);
	}

	public function delete($capabilityId, $id)
	{
		CapabilityDetailWhatsInclude::destroy($id);
		return redirect()->route('backoffice.dynamic.what.include.index', $capabilityId)
            ->with(["success" => "Whats Includes delete successfully."]);
	}
}

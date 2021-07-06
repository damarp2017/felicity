<?php

namespace App\Http\Controllers\BackOffice\DynamicContent;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DynamicContect\DynamicCapability;

class CapabilityController extends Controller
{
    public function index()
	{
		$capabilities = DynamicCapability::all();
		return view('backoffice.dynamic.capabilities.index', [
			'capabilities' => $capabilities
		]);
	}

	public function create()
	{
		return view('backoffice.dynamic.capabilities.create');
	}

	public function edit($id)
	{
		$capability = DynamicCapability::whereId($id)->first();
		return view('backoffice.dynamic.capabilities.edit', [
			'capability' => $capability
		]);
	}

	public function store(Request $request)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'text_button' => 'required',
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$image = $request->file('image')->store('images/capabilities');
		$attr['image'] = $image;
		$attr['link_button'] = Str::slug($attr['title']);
		DynamicCapability::create($attr);

		return redirect()->route('backoffice.dynamic.capablities.index')
            ->with(["success" => "Capabilities created successfully."]);
	}

	public function update(Request $request, $id)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'text_button' => 'required',
			// 'link_button' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$attr['link_button'] = Str::slug($attr['title']);
		$capability = DynamicCapability::whereId($id)->first();
		if($request->image){
			$image = $request->file('image')->store('images/capabilities');
			$attr['image'] = $image;
		}else{
			$attr['image'] = $capability->image;
		}
		$capability->update($attr);

		return redirect()->route('backoffice.dynamic.capablities.index')
            ->with(["success" => "Capabilities updated successfully."]);
	}

	public function delete($id)
	{
		DynamicCapability::destroy($id);
		return redirect()->route('backoffice.dynamic.capablities.index')
            ->with(["success" => "Capabilities deleted successfully."]);
	}
}

<?php

namespace App\Http\Controllers\BackOffice\DynamicContent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DynamicContect\DynamicOurValue;
use Illuminate\Support\Facades\Storage;

class OurValueController extends Controller
{
    public function index()
	{
		$ourValues = DynamicOurValue::all();
		return view('backoffice.dynamic.our_values.index', [
			'ourValues' => $ourValues
		]);
	}

	public function create()
	{
		return view('backoffice.dynamic.our_values.create');
	}

	public function edit($id)
	{
		$ourValue = DynamicOurValue::whereId($id)->first();
		return view('backoffice.dynamic.our_values.edit', [
			'ourValue' => $ourValue
		]);
	}

	public function store(Request $request)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$image = $request->file('image')->store('images/our_values');
		$attr['image'] = Storage::url($image);
		DynamicOurValue::create($attr);

		return redirect()->route('backoffice.dynamic.our.value.index')
            ->with(["success" => "Our Value created successfully."]);
	}

	public function update(Request $request, $id)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$ourValues = DynamicOurValue::whereId($id)->first();
		if($request->image){
			$image = $request->file('image')->store('images/our_values');
			$attr['image'] = Storage::url($image);
		}else{
			$attr['image'] = $ourValues->image;
		}
		$ourValues->update($attr);

		return redirect()->route('backoffice.dynamic.our.value.index')
            ->with(["success" => "Our Value updated successfully."]);
	}

	public function delete($id)
	{
		DynamicOurValue::destroy($id);
		return redirect()->route('backoffice.dynamic.our.value.index')
            ->with(["success" => "our Value deleted successfully."]);
	}
}

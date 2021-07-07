<?php

namespace App\Http\Controllers\BackOffice\StaticContent\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\StaticContent\StaticContentAboutUs;

class ContentController extends Controller
{
    public function index()
	{
		$contents = StaticContentAboutUs::all();
		return view('backoffice.static.about_us.content.index', [
			'contents' => $contents
		]);
	}

	public function create()
	{
		return view('backoffice.static.about_us.content.create');
	}

	public function edit($id)
	{
		$content = StaticContentAboutUs::whereId($id)->first();
		return view('backoffice.static.about_us.content.edit', [
			'content' => $content
		]);
	}

	public function store(Request $request)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
		]);

		$image = $request->file('image')->store('images/about_us');
		$attr['image'] = $image;
		StaticContentAboutUs::create($attr);

		return redirect()->route('backoffice.static.about.us.content.index')
            ->with(["success" => "Content About Us created successfully."]);
	}

	public function update(Request $request, $id)
	{
		$attr = $request->validate([
			'title' => 'required',
			'subtitle' => 'required',
			'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$capability = StaticContentAboutUs::whereId($id)->first();
		if($request->image){
			$image = $request->file('image')->store('images/about_us');
			$attr['image'] = $image;
		}else{
			$attr['image'] = $capability->image;
		}
		$capability->update($attr);

		return redirect()->route('backoffice.static.about.us.content.index')
            ->with(["success" => "Content About Us updated successfully."]);
	}

	public function delete($id)
	{
		StaticContentAboutUs::destroy($id);
		return redirect()->route('backoffice.static.about.us.content.index')
            ->with(["success" => "Content About Us deleted successfully."]);
	}
}

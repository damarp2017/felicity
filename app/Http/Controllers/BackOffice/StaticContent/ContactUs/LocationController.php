<?php

namespace App\Http\Controllers\BackOffice\StaticContent\ContactUs;

use App\Http\Controllers\Controller;
use App\StaticContent\ContactUs\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
	{
		$locations = Location::all();
		return view('backoffice.static.contact_us.location.index', [
			'locations' => $locations
		]);
	}

	public function create()
	{
		return view('backoffice.static.contact_us.location.create');
	}

	public function edit($id)
	{
		$location = Location::whereId($id)->first();
		return view('backoffice.static.contact_us.location.edit', [
			'location' => $location
		]);
	}

	public function map($id)
	{
		$location = Location::whereId($id)->first();
		return view('backoffice.static.contact_us.location.map', [
			'location' => $location
		]);
	}

	public function store(Request $request)
	{
		$attr = $request->validate([
			'city' => 'required',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required',
		]);

		Location::create($attr);

		return redirect()->route('backoffice.static.location.index')
            ->with(["success" => "Location created successfully."]);
	}

	public function update(Request $request, $id)
	{
		$attr = $request->validate([
			'city' => 'required',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required',
		]);

		$capability = Location::whereId($id)->first();
		$capability->update($attr);

		return redirect()->route('backoffice.static.location.index')
            ->with(["success" => "Location updated successfully."]);
	}

	public function delete($id)
	{
		Location::destroy($id);
		return redirect()->route('backoffice.static.location.index')
            ->with(["success" => "Location deleted successfully."]);
	}
}

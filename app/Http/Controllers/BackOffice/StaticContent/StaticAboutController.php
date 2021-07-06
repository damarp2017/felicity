<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaticAboutController extends Controller
{
    public function title()
    {
        $about = StaticAbout::get()->first();
        return view('backoffice.static.about.title', [
            'data' => $about
        ]);
    }

    public function updateTitle(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		$data = StaticAbout::first();
		if(!$data){
			StaticAbout::create([
				'title' => $request->title,
			]);
		}else{
			$data->update([
				'title' => $request->title,
			]);
		}

		return redirect()->route('backoffice.static.about')
		->with(["success" => "About Us updated successfully."]);
	}

    public function visions()
    {
        $about = StaticAbout::get()->first();
        return view('backoffice.static.about.visions', [
            'data' => $about
        ]);
    }

    public function updateVisions(Request $request, $arrayIndex)
    {
        $about = StaticAbout::get()->first();
        if ($request->image) {
            // Storage::delete($home->benefits[$arrayIndex]['image']);
            $image = $request->file('image')->store('images/about_us/items');
        } else {
            $image = $about->visions[$arrayIndex]['image'];
        }
        $about->visions = array_replace(
            $about->visions,
            array($arrayIndex => [
                'image' => $image,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ])
        );
        $about->update();
        return redirect()->route('backoffice.static.about.visions')
            ->with(["success" => "Visions updated successfully."]);
    }
}

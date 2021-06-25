<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function titleAndSubtitle()
    {
        $home = Home::get()->first();
        return view('backoffice.static.home.title-and-subtile', [
            'data' => $home
        ]);
    }

    public function visionAndManifesto()
    {
        $home = Home::get()->first();
        return view('backoffice.static.home.vision-and-manifesto', [
            'data' => $home
        ]);
    }

    public function missions()
    {
        $home = Home::get()->first();
        return view('backoffice.static.home.missions', [
            'data' => $home
        ]);
    }

    public function button1AndButton2()
    {
        $home = Home::get()->first();
        return view('backoffice.static.home.button1-and-button2', [
            'data' => $home
        ]);
    }

    public function updateTitleAndSubtitle(Request $request)
    {
        $home = Home::get()->first();

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $home->title = $request->title;
        $home->subtitle = $request->subtitle;
        $home->update();

        return redirect()->route('backoffice.static.home.titleAndSubtitle')
            ->with(["success" => "Title and Subtitle updated successfully."]);
    }

    public function updateVisionAndManifesto(Request $request)
    {
        // dd($request->all());
        $home = Home::get()->first();

        $request->validate([
            'vision' => 'required',
            'vision_description' => 'required',
            'manifesto' => 'required',
            'manifesto_image' => ['image', 'mimes:png,jpg,jpeg'],
            'manifesto_description' => 'required',
        ]);

        $home->vision = $request->vision;
        $home->vision_description = $request->vision_description;
        $home->manifesto = $request->manifesto;
        if ($request->manifesto_image) {
            // Storage::delete($home->manifesto_image);
            $image = $request->file('manifesto_image')->store('images/home');
            $home->manifesto_image = Storage::url($image);
        }
        $home->manifesto_description = $request->manifesto_description;
        $home->update();

        return redirect()->route('backoffice.static.home.visionAndManifesto')
            ->with(["success" => "Vision and Manifesto updated successfully."]);
    }

    public function storeMissions(Request $request)
    {
        // dd($request->all());
        $home = Home::get()->first();
        $logo = $request->file('logo')->store('images/home/items');

        $home->missions = collect($home->missions)->push(collect([
            'logo' => Storage::url($logo),
            'sequence' => $request->sequence,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]));

        $home->update();
        return redirect()->route('backoffice.static.home.missions')
            ->with(["success" => "Missions created successfully."]);
    }

    public function updateMissions(Request $request, $arrayIndex)
    {
        $home = Home::get()->first();
        if ($request->logo) {
            // Storage::delete($home->missions[$arrayIndex]['logo']);
            $logo = Storage::url($request->file('logo')->store('images/home/items'));
        } else {
            $logo = $home->missions[$arrayIndex]['logo'];
        }
        $home->missions = array_replace(
            $home->missions,
            array($arrayIndex => [
                'logo' => $logo,
                'sequence' => $request->sequence,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ])
        );
        $home->update();
        return redirect()->route('backoffice.static.home.missions')
            ->with(["success" => "Missions updated successfully."]);
    }

    public function deleteMissions($arrayIndex)
    {
        $home = Home::get()->first();
        $home->missions = collect($home->missions)->forget($arrayIndex);
        $home->update();
        return redirect()->route('backoffice.static.home.missions')
            ->with(["success" => "Missions deleted successfully."]);
    }

    public function updateButton1AndButton2(Request $request)
    {
        $home = Home::get()->first();

        $request->validate([
            'button_1_title' => 'required',
            'button_1_link' => 'required',
            'button_2_title' => 'required',
            'button_2_link' => 'required',
        ]);

        $home->button_1 = collect(["title" => $request->button_1_title, "link" => $request->button_1_link]);
        $home->button_2 = collect(["title" => $request->button_2_title, "link" => $request->button_2_link]);

        $home->update();

        return redirect()->route('backoffice.static.home.button1AndButton2')
            ->with(["success" => "Button 1 and Button 2 updated successfully."]);
    }
}

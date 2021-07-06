<?php

namespace App\Http\Controllers\BackOffice\StaticContent;

use App\Http\Controllers\Controller;
use App\StaticContent\StaticOpportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaticOpportunityController extends Controller
{
    public function titleAndSubtitle()
    {
        $opportunity = StaticOpportunity::get()->first();
        return view('backoffice.static.opportunities.title-and-subtitle', [
            'data' => $opportunity
        ]);
    }

    public function updateTitleAndSubtitle(Request $request)
    {
        $opportunity = StaticOpportunity::get()->first();

        $opportunity->title = $request->title;
        $opportunity->subtitle = $request->subtitle;
        $opportunity->update();

        return redirect()->route('backoffice.static.opportunities.titleAndSubtitle')
            ->with(["success" => "Title and Subtitle updated successfully."]);
    }

    public function benefits()
    {
        $opportunity = StaticOpportunity::get()->first();
        return view('backoffice.static.opportunities.benefits', [
            'data' => $opportunity
        ]);
    }

    public function updateBenefits(Request $request, $arrayIndex)
    {
        $opportunity = StaticOpportunity::get()->first();
        if ($request->logo) {
            // Storage::delete($home->benefits[$arrayIndex]['logo']);
            $logo = $request->file('logo')->store('images/opportunities/items');
        } else {
            $logo = $opportunity->benefits[$arrayIndex]['logo'];
        }
        $opportunity->benefits = array_replace(
            $opportunity->benefits,
            array($arrayIndex => [
                'logo' => $logo,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ])
        );
        $opportunity->update();
        return redirect()->route('backoffice.static.opportunities.benefits')
            ->with(["success" => "Benefits updated successfully."]);
    }

    public function reasons()
    {
        $opportunity = StaticOpportunity::get()->first();
        return view('backoffice.static.opportunities.reasons', [
            'data' => $opportunity
        ]);
    }

    public function updateReasons(Request $request, $arrayIndex)
    {
        $opportunity = StaticOpportunity::get()->first();
        if ($request->image) {
            // Storage::delete($home->reasons[$arrayIndex]['image']);
            $image = $request->file('image')->store('images/opportunities');
        } else {
            $image = $opportunity->reasons[$arrayIndex]['image'];
        }
        $opportunity->reasons = array_replace(
            $opportunity->reasons,
            array($arrayIndex => [
                'image' => $image,
                'title' => $request->title,
                'description' => $request->description,
            ])
        );
        $opportunity->update();
        return redirect()->route('backoffice.static.opportunities.reasons')
            ->with(["success" => "reasons updated successfully."]);
    }
}

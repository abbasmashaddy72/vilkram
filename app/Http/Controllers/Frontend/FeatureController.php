<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Team;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Team::with('features')->get();

        return view('pages.frontend.feature', compact([
            'features'
        ]));
    }

    public function details($id)
    {
        $data = Feature::findOrFail($id);
        $related = Feature::where('team_id', $data->team_id)->with('team')->limit(3)->get();

        return view('pages.frontend.blog-details', compact('data', 'related'));
    }
}

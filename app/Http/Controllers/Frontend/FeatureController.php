<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::get()->take(4);

        return view('pages.frontend.feature', compact([
            'features'
        ]));
    }
}

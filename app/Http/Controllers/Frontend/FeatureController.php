<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function index()
    {
        return view('pages.frontend.feature');
    }
}

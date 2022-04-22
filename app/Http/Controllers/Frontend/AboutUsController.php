<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_s = About::get();

        return view('pages.frontend.about_us', compact([
            'about_s'
        ]));
    }
}

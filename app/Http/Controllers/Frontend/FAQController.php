<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function index()
    {
        return view('pages.frontend.faq');
    }
}

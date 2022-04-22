<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();

        return view('pages.frontend.faq', compact([
            'faqs'
        ]));
    }
}

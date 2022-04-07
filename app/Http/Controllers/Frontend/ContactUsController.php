<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.contact_us');
    }
}

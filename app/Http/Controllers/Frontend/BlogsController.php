<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.blogs');
    }

    public function details()
    {
        return view('pages.frontend.blog-details');
    }
}

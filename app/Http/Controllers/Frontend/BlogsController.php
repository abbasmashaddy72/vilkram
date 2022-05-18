<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.blogs');
    }

    public function details($id)
    {
        $data = Blog::findOrFail($id);
        $related = Blog::where('team_id', $data->team_id)->with('team')->orderBy('clicks', 'DESC')->limit(3)->get();
        Blog::where('id', $id)->increment('clicks');

        return view('pages.frontend.blog-details', compact('data', 'related'));
    }
}

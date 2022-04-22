<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();

        return view('pages.frontend.team', compact([
            'teams'
        ]));
    }
}

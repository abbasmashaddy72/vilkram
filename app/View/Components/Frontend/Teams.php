<?php

namespace App\View\Components\Frontend;

use App\Models\Team;
use Illuminate\View\Component;

class Teams extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $teams = Team::get();

        return view('components.frontend.teams', compact([
            'teams'
        ]));
    }
}

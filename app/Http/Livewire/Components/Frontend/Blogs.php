<?php

namespace App\Http\Livewire\Components\Frontend;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public function render()
    {
        $blogs = Blog::paginate(9);

        return view('livewire.components.frontend.blogs', compact([
            'blogs'
        ]));
    }
}

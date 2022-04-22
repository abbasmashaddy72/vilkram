<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Team;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $hero_images = [
            'about_images/hPavM789nXfBwQAyo7zJBweC20ALlhr6vQ4ewSBb.jpg',
            'about_images/IlZuriqz2BSafon2RjDdOEgUa9GGV7swlhtIYYND.jpg',
            'about_images/JS7P6HQ8Rp5iJMWIL2CkzTPGDVMqsmb3Dd1yHnxc.jpg',
            'about_images/N7d4aW95Klju181INa2AuUKwfwXzcZcChnGXLFRo.jpg'
        ];
        $features = Feature::get()->take(4);
        $about_us = About::get()->first();
        $faqs = Faq::get()->take(6);
        $reviews = Review::get()->take(3);

        return view('pages.frontend.home_page', compact([
            'hero_images',
            'features',
            'about_us',
            'faqs',
            'reviews',
        ]));
    }
}

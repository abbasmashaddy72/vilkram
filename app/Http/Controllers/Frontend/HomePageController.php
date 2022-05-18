<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Team;
use App\Services\Helper;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __construct()
    {
        view()->share('logo', Helper::get_static_option('logo'));
        view()->share('about', Helper::get_static_option('about'));
        view()->share('twitter', Helper::get_static_option('twitter'));
        view()->share('facebook', Helper::get_static_option('facebook'));
        view()->share('instagram', Helper::get_static_option('instagram'));
        view()->share('linkedin', Helper::get_static_option('linkedin'));
        view()->share('youtube', Helper::get_static_option('youtube'));
        view()->share('google_business', Helper::get_static_option('google_business'));
        view()->share('embed_map_link', Helper::get_static_option('embed_map_link'));
        view()->share('email', Helper::get_static_option('email'));
        view()->share('contact_no', explode(')', Helper::get_static_option('contact_no')));
        view()->share('address', Helper::get_static_option('address'));
    }

    public function index()
    {
        $slider_images = Slider::where('on', 'homepage')->get();
        $features = Feature::with('team')->get()->take(3);
        $about_us = About::get()->first();
        $faqs = Faq::get()->take(6);
        $reviews = Review::with('team')->get()->take(3);
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');

        return view('pages.frontend.home_page', compact([
            'slider_images',
            'features',
            'about_us',
            'faqs',
            'reviews',
            'gr_api',
            'gr_count_api'
        ]));
    }
}

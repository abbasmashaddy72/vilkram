<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Review;
use App\Models\Scheme;
use App\Models\Slider;
use App\Models\Team;
use App\Services\Helper;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('logo', Helper::get_static_option('logo'));
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
        $faqs = Faq::get()->take(6);
        $reviews = Review::with('team')->get()->take(3);
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');
        $features_excerpt = Helper::get_static_option('features_excerpt');
        $faq_excerpt = Helper::get_static_option('faq_excerpt');
        $review_excerpt = Helper::get_static_option('review_excerpt');
        $team_excerpt = Helper::get_static_option('team_excerpt');
        $teams = Team::get();

        return view('pages.frontend.home_page', compact([
            'slider_images',
            'features',
            'faqs',
            'reviews',
            'gr_api',
            'gr_count_api',
            'features_excerpt',
            'faq_excerpt',
            'review_excerpt',
            'team_excerpt',
            'teams'
        ]));
    }

    public function about_us()
    {
        $about_us = About::get();

        return view('pages.frontend.about_us', compact([
            'about_us'
        ]));
    }

    public function teams()
    {
        $teams = Team::get();

        return view('pages.frontend.team', compact([
            'teams'
        ]));
    }

    public function team_single($id)
    {
        $data = Team::with('features', 'blogs')->findOrFail($id);

        return view('pages.frontend.team_single', compact('data'));
    }

    public function features()
    {
        $features = Team::with('features')->get();

        return view('pages.frontend.feature', compact([
            'features'
        ]));
    }

    public function feature_team_collection($team_id)
    {
        $data = Team::with('features')->where('id', $team_id)->get();

        return view('pages.frontend.feature_team_collection', compact('data'));
    }

    public function feature_single($id)
    {
        $data = Feature::findOrFail($id);
        $related = Feature::where('team_id', $data->team_id)->with('team')->whereNotIn('id', [$id])->get();

        return view('pages.frontend.feature_single', compact('data', 'related'));
    }

    public function contact_us()
    {
        return view('pages.frontend.contact_us');
    }

    public function gallery()
    {
        /**
         * @get('/gallery')
         * @name('gallery')
         * @middlewares('web')
         */
        $directories = Storage::disk('public')->directories('files/1');

        return view('pages.frontend.gallery', compact('directories'));
    }

    public function faqs()
    {
        $faqs = Faq::get();
        $faq_excerpt = Helper::get_static_option('faq_excerpt');

        return view('pages.frontend.faq', compact([
            'faqs',
            'faq_excerpt'
        ]));
    }

    public function blogs()
    {
        return view('pages.frontend.blogs');
    }

    public function blog_single($id)
    {
        $data = Blog::findOrFail($id);
        $related = Blog::where('team_id', $data->team_id)->with('team')->orderBy('clicks', 'DESC')->limit(3)->get();
        Blog::where('id', $id)->increment('clicks');

        return view('pages.frontend.blog-details', compact('data', 'related'));
    }

    public function scheme()
    {
        $data = Scheme::get();

        return view('pages.frontend.schemes', compact('data'));
    }

    public function book_appointment($tem_id = null)
    {
        /**
         * @get('/book_appointment')
         * @name('book_appointment')
         * @middlewares('web')
         */
        $team_id = $tem_id;

        return view('pages.frontend.book_appointment', compact('team_id'));
    }
}

<?php

namespace App\Http\Livewire\Form\Backend;

use App\Services\Helper;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomePageCEV extends Component
{
    use WithFileUploads;

    public $logo;
    public $about;
    public $services_excerpt;
    public $count_excerpt;
    public $review_excerpt;
    public $team_excerpt;
    public $counts;
    public $twitter;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $youtube;
    public $google_business;
    public $embed_map_link;
    public $gr_api;
    public $gr_count_api;
    public $address;
    public $email;
    public $contact_no;

    public $logoIsUploaded = false;
    public $CountImageIsUploaded = false;
    public $HeroImageIsUploaded = false;

    public function mount()
    {
        $this->logo = Helper::get_static_option('logo');
        $this->about = Helper::get_static_option('about');
        $this->services_excerpt = Helper::get_static_option('services_excerpt');
        $this->count_excerpt = Helper::get_static_option('count_excerpt');
        $this->review_excerpt = Helper::get_static_option('review_excerpt');
        $this->team_excerpt = Helper::get_static_option('team_excerpt');
        $this->twitter = Helper::get_static_option('twitter');
        $this->facebook = Helper::get_static_option('facebook');
        $this->instagram = Helper::get_static_option('instagram');
        $this->linkedin = Helper::get_static_option('linkedin');
        $this->youtube = Helper::get_static_option('youtube');
        $this->google_business = Helper::get_static_option('google_business');
        $this->embed_map_link = Helper::get_static_option('embed_map_link');
        $this->gr_api = Helper::get_static_option('gr_api');
        $this->gr_count_api = Helper::get_static_option('gr_count_api');
        $this->address = Helper::get_static_option('address');
        $this->email = Helper::get_static_option('email');
        $this->contact_no = Helper::get_static_option('contact_no');
    }

    protected $rules = [
        'logo' => '',
        'about' => '',
        'services_excerpt' => '',
        'count_excerpt' => '',
        'review_excerpt' => '',
        'team_excerpt' => '',
        'twitter' => '',
        'facebook' => '',
        'instagram' => '',
        'linkedin' => '',
        'youtube' => '',
        'google_business' => '',
        'embed_map_link' => '',
        'gr_api' => '',
        'gr_count_api' => '',
        'address' => '',
        'email' => '',
        'contact_no' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->logo) != 'string') {
            $this->logoIsUploaded = true;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($this->logo == null) {
            } elseif (gettype($this->logo) != 'string') {
                $image = $this->logo->store('homepage');
                Helper::set_static_option($key, $image);
            }
            Helper::set_static_option($key, $value);
        }

        return $this->redirectRoute('admin.homepage');
    }

    public function render()
    {
        return view('livewire.form.backend.home-page-c-e-v');
    }
}

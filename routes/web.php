<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('welcome');

    Route::get('about-us', 'FrontendController@about_us')->name('aboutUs');

    Route::get('teams', 'FrontendController@teams')->name('teams');

    Route::get('team/{id}', 'FrontendController@team_single')->name('team_single');

    Route::get('features', 'FrontendController@features')->name('features');

    Route::get('feature-team/{team_id}', 'FrontendController@feature_team_collection')->name('feature_team_collection');

    Route::get('feature/{id}', 'FrontendController@feature_single')->name('feature_single');

    Route::get('contact-us', 'FrontendController@contact_us')->name('contactUs');

    Route::get('faqs', 'FrontendController@faqs')->name('faqs');

    Route::get('gallery', 'FrontendController@gallery')->name('gallery');

    Route::get('blogs', 'FrontendController@blogs')->name('blogs');

    Route::get('blog/{id}', 'FrontendController@blog_single')->name('blog_single');

    Route::get('scheme', 'FrontendController@scheme')->name('scheme');

    Route::get('book_appointment/{team_id?}', 'FrontendController@book_appointment')->name('book_appointment');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('homepage', 'HomePageController@index')->name('homepage');

    Route::get('book-appointment', 'BookAppointmentController@index')->name('book.appointment');

    Route::resource('contact-us', 'ContactUsController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('about', 'AboutController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('faq', 'FaqController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('review', 'ReviewController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('team', 'TeamController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');

    Route::resource('blog', 'BlogController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('feature', 'FeatureController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::resource('slider', 'SliderController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('scheme', 'SchemeController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';

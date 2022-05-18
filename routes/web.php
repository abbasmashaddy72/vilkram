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
    Route::get('/', 'HomePageController@index')->name('welcome');

    Route::get('about-us', 'AboutUsController@index')->name('aboutUs');

    Route::get('teams', 'TeamController@index')->name('teams');

    Route::get('features', 'FeatureController@index')->name('features');

    Route::get('feature/{id}', 'FeatureController@details')->name('feature_single');

    Route::get('contact-us', 'ContactUsController@index')->name('contactUs');

    Route::get('faqs', 'FAQController@index')->name('faq');

    Route::get('blogs', 'BlogsController@index')->name('blogs');

    Route::get('blog/{id}', 'BlogsController@details')->name('blog_single');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('homepage', 'HomePageController@index')->name('homepage');

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

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('setting', 'Backend\SettingController@index')->name('setting.index');
    Route::put('setting/update', 'Backend\SettingController@update')->name('setting.update');

    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
        Route::get('', 'Backend\DashboardController@index')->name('index');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'Backend\MenuController@index')->name('index');
        Route::get('/indexnp', 'Backend\MenuController@indexnp')->name('indexnp');
        Route::post('', 'Backend\MenuController@store')->name('store');
        Route::put('', 'Backend\MenuController@update')->name('update');
        Route::get('{menu}', 'Backend\MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'Backend\MenuController@storeSubMenu')->name('store');
            Route::get('{menu}/subMenu/{subMenu}', 'Backend\MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'Backend\MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'Backend\MenuController@storeChildSubMenu')->name('store');
                Route::get('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'Backend\MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/childsubMenuModal', 'Backend\MenuController@childsubMenuModal')->name('component.childmodal');
            });
        });
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'Backend\PageController@index')->name('index');
        Route::get('create', 'Backend\PageController@create')->name('create');
        Route::post('', 'Backend\PageController@store')->name('store');
        // Route::get('{page}', 'Backend\PageController@show')->name('show');
        Route::get('{page}/edit', 'Backend\PageController@edit')->name('edit');
        Route::put('{page}', 'Backend\PageController@update')->name('update');
        Route::get('{id}', 'Backend\PageController@destroy')->name('destroy');
    });

    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('', 'Backend\SliderController@index')->name('index');
        Route::get('create', 'Backend\SliderController@create')->name('create');
        Route::post('', 'Backend\SliderController@store')->name('store');
        Route::put('{slider}', 'Backend\SliderController@update')->name('update');
        Route::get('{slider}/edit', 'Backend\SliderController@edit')->name('edit');
        Route::get('{id}', 'Backend\SliderController@destroy')->name('destroy');

    });

    Route::group(['as' => 'gallery.', 'prefix' => 'gallery'], function () {
        Route::get('', 'Backend\GalleryController@index')->name('index');
        Route::get('create', 'Backend\GalleryController@create')->name('create');
        Route::post('', 'Backend\GalleryController@store')->name('store');
        Route::put('{gallery}', 'Backend\GalleryController@update')->name('update');
        Route::get('{gallery}/edit', 'Backend\GalleryController@edit')->name('edit');
        Route::get('{id}', 'Backend\GalleryController@destroy')->name('destroy');

    });

    Route::group(['as' => 'album.', 'prefix' => 'album'], function () {
        Route::get('', 'Backend\AlbumController@index')->name('index');
        Route::get('create', 'Backend\AlbumController@create')->name('create');
        Route::post('', 'Backend\AlbumController@store')->name('store');
        Route::put('{album}', 'Backend\AlbumController@update')->name('update');
        Route::get('{album}/edit', 'Backend\AlbumController@edit')->name('edit');
        Route::get('{id}', 'Backend\AlbumController@destroy')->name('destroy');

    });


    Route::group(['as' => 'category.', 'prefix' => 'category'], function () {
        Route::get('', 'Backend\CategoryController@index')->name('index');
        Route::get('create', 'Backend\CategoryController@create')->name('create');
        Route::post('', 'Backend\CategoryController@store')->name('store');
        Route::put('{category}', 'Backend\CategoryController@update')->name('update');
        Route::get('{category}/edit', 'Backend\CategoryController@edit')->name('edit');
        Route::get('{id}', 'Backend\CategoryController@destroy')->name('destroy');

    });

    Route::group(['as' => 'subcategory.', 'prefix' => 'subcategory'], function () {
        Route::get('', 'Backend\SubCategoryController@index')->name('index');
        Route::get('create', 'Backend\SubCategoryController@create')->name('create');
        Route::post('', 'Backend\SubCategoryController@store')->name('store');
        Route::put('{subcategory}', 'Backend\SubCategoryController@update')->name('update');
        Route::get('{subcategory}/edit', 'Backend\SubCategoryController@edit')->name('edit');
        Route::get('{id}', 'Backend\SubCategoryController@destroy')->name('destroy');

    });

    Route::group(['as' => 'package.', 'prefix' => 'package'], function () {
        Route::get('', 'Backend\PackageController@index')->name('index');
        Route::get('create', 'Backend\PackageController@create')->name('create');
        Route::post('', 'Backend\PackageController@store')->name('store');
        Route::get('{package}', 'Backend\PackageController@show')->name('show');
        Route::put('{package}', 'Backend\PackageController@update')->name('update');
        Route::get('{package}/edit', 'Backend\PackageController@edit')->name('edit');
        Route::get('{id}', 'Backend\PackageController@destroy')->name('destroy');
        Route::post('packagecategory', 'Backend\PackageController@packageCategoryAjax')->name('packagecategoryajax');

    });

    Route::group(['as' => 'team.', 'prefix' => 'team'], function () {
        Route::get('', 'Backend\TeamController@index')->name('index');
        Route::get('create', 'Backend\TeamController@create')->name('create');
        Route::post('', 'Backend\TeamController@store')->name('store');
        Route::put('{team}', 'Backend\TeamController@update')->name('update');
        Route::put('', 'Backend\TeamController@teamOrder')->name('update.order');
        Route::get('{team}/edit', 'Backend\TeamController@edit')->name('edit');
        Route::get('{id}', 'Backend\TeamController@destroy')->name('destroy');
    });

    Route::group(['as' => 'testimonial.', 'prefix' => 'testimonial'], function () {
        Route::get('', 'Backend\TestimonialController@index')->name('index');
        Route::get('create', 'Backend\TestimonialController@create')->name('create');
        Route::post('', 'Backend\TestimonialController@store')->name('store');
        Route::put('{testimonial}', 'Backend\TestimonialController@update')->name('update');
        Route::get('{testimonial}/edit', 'Backend\TestimonialController@edit')->name('edit');
        Route::get('{id}', 'Backend\TestimonialController@destroy')->name('destroy');

    });

    Route::group(['as' => 'whychooseus.', 'prefix' => 'whychooseus'], function () {
        Route::get('', 'Backend\WhyChooseUsController@index')->name('index');
        Route::get('create', 'Backend\WhyChooseUsController@create')->name('create');
        Route::post('', 'Backend\WhyChooseUsController@store')->name('store');
        Route::put('{whychooseus}', 'Backend\WhyChooseUsController@update')->name('update');
        Route::get('{whychooseus}/edit', 'Backend\WhyChooseUsController@edit')->name('edit');
        Route::get('{id}', 'Backend\WhyChooseUsController@destroy')->name('destroy');

    });

    Route::group(['as' => 'deal.', 'prefix' => 'deal'], function () {
        Route::get('', 'Backend\DealController@index')->name('index');
        Route::get('create', 'Backend\DealController@create')->name('create');
        Route::post('', 'Backend\DealController@store')->name('store');
        Route::put('{deal}', 'Backend\DealController@update')->name('update');
        Route::put('', 'Backend\DealController@teamOrder')->name('update.order');
        Route::get('{deal}/edit', 'Backend\DealController@edit')->name('edit');
        Route::get('{id}', 'Backend\DealController@destroy')->name('destroy');
    });

    Route::group(['as' => 'booking.', 'prefix' => 'booking'], function () {
        Route::get('', 'Backend\BookingController@index')->name('index');
        Route::get('{booking}', 'Backend\BookingController@destroy')->name('destroy');
    });





});

Route::get('', 'Frontend\FrontendController@homepage')->name('homepage');
Route::get('expedition/', 'Frontend\FrontendController@expedition')->name('expedition');

Route::get('gallery', 'Frontend\FrontendController@gallery')->name('gallery');
Route::get('contact-us/', 'Frontend\FrontendController@contact')->name('contact');
Route::post('contact-us', 'Frontend\FrontendController@sendcontact')->name('send-contact');
Route::post('packagebook', 'Frontend\FrontendController@packagebook')->name('packagebook');
Route::get('faq', 'Frontend\FrontendController@faq')->name('faq');
Route::get('teams', 'Frontend\FrontendController@teams')->name('teams');
Route::get('downloads', 'Frontend\FrontendController@downloads')->name('download');
Route::get('package_category/{category}', 'Frontend\FrontendController@packageCategory')->name('package.category');
Route::get('package/{package}', 'Frontend\FrontendController@packageDetail')->name('package.detail');
Route::get('search/',"Frontend\FrontendController@searchResult")->name('search');
Route::get('{page}', 'Frontend\FrontendController@page')->name('page.detail');



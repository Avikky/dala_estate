<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
}); 
*/
 
Route::get('/', 'LiveController@index')->name('index');
Route::get('/testpage', 'LiveController@test')->name('test');


Route::get('/loan', 'LiveController@loan')->name('loan');
Route::post('/loan', 'LiveController@storeloan')->name('storeloan');
Route::get('/about', 'LiveController@about')->name('about');
Route::get('/board', 'LiveController@board')->name('board');
Route::get('/board/{slug}', 'LiveController@boardview')->name('boardview');
Route::get('/management', 'LiveController@management')->name('management');
Route::get('/management/{slug}', 'LiveController@managementview')->name('managementview');
Route::get('/service', 'LiveController@service')->name('service');
Route::get('/service/{slug}', 'LiveController@serviceview')->name('serviceview');
Route::get('/housing', 'LiveController@housing')->name('housing');
Route::get('/housing/{slug}', 'LiveController@housingview')->name('housingview');
Route::get('/projects', 'LiveController@portfolio')->name('portfolio');
Route::get('/gallery', 'LiveController@gallery')->name('gallery');
Route::get('/galleryview/{slug}', 'LiveController@galleryview')->name('galleryview');
Route::get('/projects/{slug}', 'LiveController@portfolioview')->name('portfolioview');

Route::post('/enquiry', 'LiveController@enquiry')->name('enquiry');
Route::get('/contact', 'LiveController@contact')->name('contact');
Route::get('/product', 'LiveController@product')->name('product');
Route::get('/product/{slug}', 'LiveController@productview')->name('productview');
Route::get('/blog', 'LiveController@blog')->name('blog');
Route::get('/blog/{slug}', 'LiveController@blogview');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function(){
    Route::get('/loan', 'HomeController@showloan');
    Route::get('loan/{id}', 'HomeController@editloan');
    Route::delete('loan/{id}', 'HomeController@destroyloan');

    Route::group(['prefix' => 'setting'], function(){
        Route::get('/', 'SettingController@index')->name('settings');
        Route::put('{id}', 'SettingController@update');

        Route::post('admin', 'SettingController@create_admin');
        Route::put('/admin/{id}', 'SettingController@update_admin');
        Route::delete('admin/{id}', 'SettingController@destroy_admin');
        Route::put('logo/{id}', 'SettingController@logoupdate');
        Route::get('/password', 'SettingController@passwordget')->name('password');
        Route::post('/password', 'SettingController@password')->name('changePassword');
    });

        Route::group(['prefix' => 'messages'], function(){
            Route::get('/', 'EnquiryController@index');
            Route::get('{id}', 'EnquiryController@show');
            Route::delete('{id}', 'EnquiryController@destroy');
        });

        Route::group(['prefix' => 'slider'], function(){
            Route::get('/', 'SliderController@index');
            Route::post('', 'SliderController@create');
            Route::put('{id}', 'SliderController@update');
            Route::delete('{id}', 'SliderController@destroy');
        });

        Route::group(['prefix' => 'services'], function(){
            Route::get('/', 'ServiceController@index');
            Route::post('', 'ServiceController@create');
            Route::put('{id}', 'ServiceController@update');
            Route::delete('{id}', 'ServiceController@destroy');
        });

        Route::group(['prefix' => 'gallery'], function(){
            Route::get('/', 'GalleryController@index')->name('g.index');
            Route::post('', 'GalleryController@create')->name('g.create');
            Route::put('{id}', 'GalleryController@update')->name('g.update');
            Route::delete('{id}', 'GalleryController@destroy')->name('g.delete');
        });

        Route::group(['prefix' => 'housing'], function(){
            Route::get('/', 'HousingController@index');
            Route::post('', 'HousingController@create');
            Route::put('{id}', 'HousingController@update');
            Route::get('{id}', 'HousingController@destroy');
        });

        Route::group(['prefix' => 'products'], function(){
            Route::get('/', 'ProductController@index');
            Route::post('', 'ProductController@create');
            Route::put('{id}', 'ProductController@update');
            Route::delete('{id}', 'ProductController@destroy');
        });

        Route::group(['prefix' => 'project'], function(){
            Route::get('/', 'ProjectController@index')->name('allprojects');
            Route::get('create', 'ProjectController@create');
            Route::post('', 'ProjectController@store');
            Route::get('{id}', 'ProjectController@show');
            Route::put('{id}', 'ProjectController@update');
            Route::delete('{id}', 'ProjectController@destroy');
        });

        Route::group(['prefix' => 'blog'], function(){
            Route::group(['prefix' => 'tag'], function(){
            Route::get('/', 'TagController@index');
            Route::post('', 'TagController@create');
            Route::delete('{id}', 'TagController@destroy');
        });

        Route::group(['prefix' => 'category'], function(){
            Route::get('/', 'CategoryController@index');
            Route::post('', 'CategoryController@create');
            Route::put('{id}', 'CategoryController@update');
            Route::delete('{id}', 'CategoryController@destroy');
        });

        Route::get('/', 'BlogController@index');
        Route::get('create', 'BlogController@create');
        Route::post('', 'BlogController@store');
        Route::get('{id}', 'BlogController@show');
        Route::put('{id}', 'BlogController@update');
        Route::delete('{id}', 'BlogController@destroy');
    });

    Route::group(['prefix' => 'faq'], function(){
            Route::get('/', 'FaqController@index');
            Route::post('/create', 'FaqController@create');
            Route::get('/allfaq', 'FaqController@allfaq');
    });

    Route::group(['prefix' => 'faq'], function(){
        Route::group(['prefix' => 'faqcat'], function(){
            Route::get('/', 'FaqCatController@index');
            Route::post('/create', 'FaqCatController@create');
        });
    });

    Route::group(['prefix' => 'team'], function(){
        Route::get('/', 'SettingController@team');
        Route::group(['prefix' => 'management'], function(){
            Route::get('/', 'ManagementController@index');
            Route::post('', 'ManagementController@create');
            Route::put('{id}', 'ManagementController@update');
            Route::delete('{id}', 'ManagementController@destroy');
        });

        Route::group(['prefix' => 'board'], function(){
            Route::get('/', 'BoardController@index');
            Route::post('', 'BoardController@create');
            Route::put('{id}', 'BoardController@update');
            Route::delete('{id}', 'BoardController@destroy');
        });
    });

    Route::group(['prefix' => 'testimonial'], function(){
        Route::get('/', 'TestimonialController@index');
        Route::post('', 'TestimonialController@create');
        Route::put('{id}', 'TestimonialController@update');
        Route::delete('{id}', 'TestimonialController@destroy');
    });

    Route::group(['prefix' => 'partners'], function(){
        Route::get('/', 'PartnerController@index');
        Route::post('', 'PartnerController@store');
        Route::put('{id}', 'PartnerController@update');
        Route::delete('{id}', 'PartnerController@destroy');
    });

    Route::group(['prefix' => 'contact'], function(){
        Route::get('/', 'ContactController@index');
        Route::post('/create', 'ContactController@store');
    });
});
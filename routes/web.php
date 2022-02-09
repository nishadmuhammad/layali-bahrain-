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
*/
// admin routes
//                             v 


//Front end routes
Route::get('/', 'front\HomeController@index')->name('home');
Route::post('/enquiry', 'front\EnquiryController@store')->name('enquire');
Route::get('/services', 'admin\DashboardController@services')->name('services');
Route::get('/contact', 'admin\DashboardController@contact')->name('contact');

Route::get('/portfolio', 'front\HomeController@showPortfolios')->name('portfolio');
Route::get('/about-us', 'front\StaffController@index')->name('about');
Route::get('/blog', 'front\BlogController@index')->name('blog');
Route::get('/careers', 'front\CareerController@index')->name('careers');
Route::post('/subscribe', 'front\SubscriptionController@subscribe')->name('subscribe');
Route::post('/application', 'front\CareerController@store')->name('application');
Route::get('/gallery', 'front\GalleryController@index')->name('gallery.index');
//Auth Routes

// Route::resource('password','admin\PasswordController')->only(['edit','update']);

Auth::routes();
Route::get('/logout', 'admin\DashboardController@logout');
Route::get('/admin', 'HomeController@index')->name('admin');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'admin\NewsfeedController@index')->name('homebeta');

    Route::get('/company', 'admin\CompanyController@index')->name('company');
    Route::get('/companies', 'admin\CompanyController@show')->name('company.index');
    Route::get('/company-search', 'admin\CompanyController@search')->name('company.search');
    Route::post('/company-register', 'admin\CompanyController@register')->name('company.register');

    Route::get('/news', 'admin\NewsfeedController@all')->name('news.all');
    Route::get('/news-feeds', 'admin\NewsfeedController@index')->name('news.index');
    Route::get('/news-feed', 'admin\NewsfeedController@create')->name('news.create');
    Route::post('/add-news-feed', 'admin\NewsfeedController@store')->name('add.news');
});

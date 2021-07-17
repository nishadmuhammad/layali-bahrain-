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


//Front end routes
Route::get('/', 'front\HomeController@index')->name('home');
Route::post('/enquiry','front\EnquiryController@store')->name('enquire');
Route::get('/services',function (){return view('front.services.index');})->name('services');
Route::get('/portfolio','front\HomeController@showPortfolios')->name('portfolio');
Route::get('/about-us','front\StaffController@index')->name('about');
Route::get('/blog','front\BlogController@index')->name('blog');
Route::get('/blog/{slug}','front\BlogController@show')->name('showBlog');
Route::get('/careers','front\CareerController@index')->name('careers');
Route::get('/careers/{slug}','front\CareerController@show')->name('careersShow');
Route::get('/contact/',function (){return view('front.contact');})->name('contact');
Route::get('/services/{slug}','front\ServiceController@show')->name('servicesShow');
Route::post('/subscribe','front\SubscriptionController@subscribe')->name('subscribe');
Route::post('/application','front\CareerController@store')->name('application');
Route::get('/gallery','front\GalleryController@index')->name('gallery.index');
//Auth Routes

// Route::resource('password','admin\PasswordController')->only(['edit','update']);


Auth::routes();
Route::get('/logout', 'admin\DashboardController@logout');
Route::get('/admin', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

Route::get('/company', 'admin\CompanyController@index')->name('company');
Route::get('/companies', 'admin\CompanyController@show')->name('company.index');
Route::get('/company-search', 'admin\CompanyController@search')->name('company.search');
Route::post('/company-register','admin\CompanyController@register')->name('company.register');

});





<?php

/*
|--------------------------------------------------------------------------
| Web Routes style="width: 700px;"
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@Index')->name('home');
Route::get('/cleaning', 'FrontController@Indexclean')->name('home.clean');
Route::get('/contactus', 'FrontController@contact')->name('home.contact');
Route::get('/facility-management', 'FrontController@property')->name('home.property');
Route::get('/cowork', 'FrontController@cowork')->name('home.cowork');
Route::get('/booking', 'FrontController@booking')->name('home.booking');
Route::get('/coming-soon', 'FrontController@news')->name('home.news');
Route::get('/gallery', 'FrontController@gallery')->name('home.gallery');
Route::get('/testimonial', 'FrontController@testimonial')->name('home.testimonial');
Route::get('/clients', 'FrontController@clients')->name('home.clients');

Route::post('/store-cowork', 'FrontController@storecowork')->name('store.cowork');
Route::post('/store-property', 'FrontController@storeproperty')->name('store.property');
Route::post('/store-contact', 'FrontController@storecontact')->name('store.contact');
Route::post('/store-clean', 'FrontController@storeclean')->name('store.clean');
Route::post('/store-news', 'FrontController@storenews')->name('store.news');



Route::get('/Allcleaning', 'AdminController@Allclean')->name('admin.allclean');
Route::get('/facility', 'AdminController@Allfacility')->name('admin.facility');


Route::get('about', function () {
    return 'About content goes here';
});


Route::get('about/directions', function () {
    return 'Directions goes here';
});
//Route::get('coming-soon', function () {
   // return view('front.coming-soon');
//});


Route::get('about/directions/class/{color}', function ($color) {
    return 'Directions goes here: {$color}';
});



Route::group(['middleware'=> 'guest'], function(){

    Route::get('/signup', [
    'uses'=>'UserController@getSignup',
    'as' => 'user.signup'
    ]);
    
Route::post('/signup', [
    'uses'=>'UserController@postSignup',
    'as' => 'user.signup'
    ]);

Route::get('/signin', [
    'uses'=>'UserController@getSignin',
    'as' => 'user.signin'
    ]);

Route::post('/signin', [
    'uses'=>'UserController@postSignin',
    'as' => 'user.signin'
    ]);
});

Route::group(['middleware'=> 'auth'], function(){

Route::get('/profile', [
    'uses'=>'UserController@getProfile',
    'as' => 'user.profile'
    ]);
Route::get('/admin', 'AdminController@Index')->name('admin.home');

Route::get('/Logout', [
    'uses'=>'UserController@getLogout',
    'as' => 'user.logout'
    ]);
});



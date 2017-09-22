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

// Mail Routes

Route::get('/', function () {

    Mail::to('8999c0477c-8e76b3@inbox.mailtrap.io')->send(new NewUser);

    return view('pages.contact');
});


// Authentication Routes

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');



// Password reset link request routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Password Reset Routes

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');


// Contact Route

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as' => 'contactus.store', 'uses' => 'ContactUSController@contactUSPost']);



Route::get('/about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');





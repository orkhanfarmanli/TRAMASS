<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@home');


Route::get('/about','PagesController@about');
//
// Route::get('/login','PagesController@login');
// Route::get('/register','PagesController@register');
// Route::get('/forgot_password', 'PagesController@forgot_password');

    Route::auth();

Route::group(['middleware' => 'auth'],function(){

    Route::get('/profile-id=','PagesController@profile');
    Route::get('/profile/cnprofile-id=','PagesController@cnprofile');
});

//Route::get('/home', 'HomeController@index');

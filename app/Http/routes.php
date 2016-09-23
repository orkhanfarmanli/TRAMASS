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
Route::get('/home','PagesController@home');
Route::get('/about','PagesController@about');



Route::auth();
Route::group(['middleware' => 'auth'],function(){

    Route::get('/profile/{user}','ProfileController@show');
    // Route::get('/profile/{user}','ProfileController@showMenu');

    Route::get('/profile/cnprofile','PagesController@cnprofile');
    Route::get('/product', 'PagesController@product');
    Route::get('/product_single', 'PagesController@product_single');




});

//Route::get('/home', 'HomeController@index');

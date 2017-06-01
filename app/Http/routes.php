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

Route::get('/', 'home\StaticPagesController@index')->name('index');
Route::get('/help', 'home\StaticPagesController@help')->name('help');
Route::get('/about', 'home\StaticPagesController@about')->name('about');
Route::get('/signup', 'home\UsersController@create')->name('signup');

// Route::get('/home', function(){
//      return view('home.home');
// });
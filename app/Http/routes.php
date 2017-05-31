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

Route::get('/', 'home\StaticPagesController@index');
Route::get('/help', 'home\StaticPagesController@help');
Route::get('/about', 'home\StaticPagesController@about');

// Route::get('/about', function(){
//      return view('home.about');
// });
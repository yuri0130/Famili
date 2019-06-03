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

if (App::environment('production')) {
    URL::forceScheme('https');
}


Auth::routes();

// Home Route
Route::get('/', 'HomeController@index')->name('home');

// Business Route
Route::resource('businesses', 'BusinessController');

// Review Routes
Route::post('/businesses/{business_id}/review', 'ReviewController@store');
Route::get('/businesses/{business_id}/review/create', 'ReviewController@create');

//Search Route
Route::get('/search', 'SearchController@index');

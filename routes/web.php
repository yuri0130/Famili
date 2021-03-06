<?php


if (App::environment('production')) {
    URL::forceScheme('https');
}


Auth::routes();

// Home Route
Route::get('/', 'HomeController@index')->name('home');

// Business Route
Route::resource('businesses', 'BusinessController');

// Review Routes
Route::group(['middleware' => 'auth'], function () {
    Route::post('/businesses/{business_id}/review', 'ReviewController@store');
    Route::get('/businesses/{business_id}/review/create', 'ReviewController@create');
});


//Search Route
Route::get('/search', 'SearchController@index');

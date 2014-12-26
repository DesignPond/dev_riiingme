<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'SiteController@index'));
Route::get('about', array('as' => 'about', 'uses' => 'SiteController@about'));
Route::get('contact', array('as' => 'contact', 'uses' => 'SiteController@contact'));

Route::group(array('prefix' => 'v1','before' => 'check-authorization-params'), function()
{
    Route::resource('labels', 'LabelsController');
});

Route::post('oauth/access_token', 'OAuthController@access_token');
Route::get('access', 'OAuthController@access');


Route::get('attempt', function()
{
    if (Auth::attempt(array('email' => 'cindy.leschaud@gmail.com', 'password' => ''), true))
    {
        return Auth::id();
    }
});





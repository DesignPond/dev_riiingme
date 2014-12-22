<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'SiteController@index'));
Route::get('about', array('as' => 'about', 'uses' => 'SiteController@about'));
Route::get('contact', array('as' => 'contact', 'uses' => 'SiteController@contact'));

Route::group(array('prefix' => 'v1/REST'), function()
{
    Route::resource('labels', 'LabelsController');
});

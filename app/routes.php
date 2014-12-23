<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'SiteController@index'));
Route::get('about', array('as' => 'about', 'uses' => 'SiteController@about'));
Route::get('contact', array('as' => 'contact', 'uses' => 'SiteController@contact'));

Route::group(array('prefix' => 'v1'), function()
{
    Route::get('labels/{user_id}', 'LabelsController@index');
    Route::get('labels/single/{id}', 'LabelsController@show');

    Route::resource('labels', 'LabelsController');
});

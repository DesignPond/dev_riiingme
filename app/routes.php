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
    Route::resource('labels', 'LabelsController');
    Route::resource('metas', 'MetasController');
});

// filter before "'before' => 'oauth'"
Route::post('access_token', 'OAuthController@access_token');



Route::get('test', function()
{
    $user_1 = Riiingme\Meta\Entities\Meta::where('riiinglink_id','=',1)->with(array('labels'))->get();

    echo '<pre>';
    foreach($user_1 as $label){
        print_r( $label->labels->label);

    }
    echo '</pre>';
});





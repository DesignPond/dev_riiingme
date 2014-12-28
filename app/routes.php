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
    $user_1 = Riiingme\Riiinglink\Entities\Riiinglink::with(array('invited','labels' => function ($query)
    {
        $query->join('types','types.id','=','labels.type_id')->select('labels.*','types.titre');

    }))->find(1);

    echo '<pre>';
    print_r($user_1->labels->lists('label','titre'));
    echo '</pre>';
});

/**
 * LOG
 */
Event::listen('illuminate.query', function($query, $bindings, $time, $name)
{
    $data = compact('bindings', 'time', 'name');

    // Format binding data for sql insertion
    foreach ($bindings as $i => $binding)
    {
        if ($binding instanceof \DateTime)
        {
            $bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
        }
        else if (is_string($binding))
        {
            $bindings[$i] = "'$binding'";
        }
    }

    // Insert bindings into query
    $query = str_replace(array('%', '?'), array('%%', '%s'), $query);
    $query = vsprintf($query, $bindings);

    Log::info($query, $data);
});





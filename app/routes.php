<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'SiteController@index'));
Route::get('about', array('as' => 'about', 'uses' => 'SiteController@about'));
Route::get('contact', array('as' => 'contact', 'uses' => 'SiteController@contact'));

Route::resource('user', 'UserController');

Route::group(array('prefix' => 'v1'), function()
{
    Route::resource('labels', 'LabelsController');
    Route::resource('metas', 'MetasController');

    Route::get('riiinglinks/invite', 'RiiinglinksController@invite');
    Route::resource('riiinglinks', 'RiiinglinksController');
});

// filter before "'before' => 'oauth'"
Route::post('access_token', 'OAuthController@access_token');


use League\Fractal;
use Riiingme\Api\Transformer\RiiinglinkLabelTransformer;

Route::get('test', function()
{
    $user_1 = Riiingme\Riiinglink\Entities\Riiinglink::with(array('invited','labels' => function ($query)
    {
        $query->join('types','types.id','=','labels.type_id');
        $query->join('groupes','groupes.id','=','labels.groupe_id')->select('labels.*','types.titre as type','groupes.titre as groupe');

    }))->find(1);

    $labels = $user_1->labels;

    $resource = new Fractal\Resource\Collection($labels, new RiiinglinkLabelTransformer);

    echo '<pre>';
    print_r((array) $resource);
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





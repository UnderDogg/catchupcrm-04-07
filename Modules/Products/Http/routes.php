<?php

Route::group(['middleware' => 'web', 'prefix' => 'products', 'namespace' => 'Modules\Products\Http\Controllers'], function()
{
    Route::get('/', 'ProductsController@index');
});

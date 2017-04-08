<?php

Route::group(['middleware' => 'web', 'prefix' => 'calendar', 'namespace' => 'Modules\Calendar\Http\Controllers'], function()
{
    Route::get('/', 'CalendarController@index');
});

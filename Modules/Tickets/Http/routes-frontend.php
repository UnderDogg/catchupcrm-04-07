<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'tickets',
    'namespace' => 'Tickets',
    //'Modules\leads\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'tickets.manager', 'uses' => 'TicketsController@manager']);
});


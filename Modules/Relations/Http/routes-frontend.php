<?php
use Illuminate\Routing\Router;

// URI: /{backend}/relations
$router->group([
    'prefix' => 'relations',
    'namespace' => 'Relations',
    //'Modules\Relations\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'relations.manager', 'uses' => 'RelationsController@manager']);
});


<?php
use Illuminate\Routing\Router;

// URI: /{backend}/Opportunitys
$router->group([
    'prefix' => 'opportunities',
    'namespace' => 'Opportunities',
    //'Modules\Opportunitys\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'opportunities.manager', 'uses' => 'OpportunitiesController@manager']);
});


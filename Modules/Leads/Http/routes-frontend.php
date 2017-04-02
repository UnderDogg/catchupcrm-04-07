<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'leads',
    'namespace' => 'Leads',
    //'Modules\leads\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'leads.manager', 'uses' => 'LeadsController@manager']);
});


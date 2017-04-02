<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'invoices',
    'namespace' => 'Invoices',
    //'Modules\leads\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'invoices.manager', 'uses' => 'InvoicesController@manager']);
});


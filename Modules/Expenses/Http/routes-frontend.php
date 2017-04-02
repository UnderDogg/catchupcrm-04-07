<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'expenses',
    'namespace' => 'Expenses',
    //'Modules\leads\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'expenses.manager', 'uses' => 'ExpensesController@manager']);
});


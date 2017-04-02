<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'projects',
    'namespace' => 'Projects',
    //'Modules\leads\Http\Controllers'
    //'middleware' => 'hasPermission',
    //'hasPermission' => 'manage@admin_modules',
], function (Router $router) {

$router->get('/', ['as' => 'project.manager', 'uses' => 'ProjectsController@manager']);
});


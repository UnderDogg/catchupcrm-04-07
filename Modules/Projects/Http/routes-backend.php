<?php
use Illuminate\Routing\Router;

// URI: /{backend}/project
$router->group([
    'prefix' => 'projects',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_project',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_project'
    $router->group(['prefix' => 'add', 'namespace' => 'Project'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.project.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.project.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_project'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.project.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.project.index', 'uses' => function ($project_id) {
        return redirect(route('admin.project.edit', $project_id));
    }]);


    $router->get('/', ['as' => 'admin.project.manager', 'uses' => 'ProjectManagerController@projectManager']);
});

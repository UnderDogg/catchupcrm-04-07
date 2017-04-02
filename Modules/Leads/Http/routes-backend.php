<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'leads',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_relation',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_relation'
    $router->group(['prefix' => 'add', 'namespace' => 'Relation'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.relation.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.relation.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_relation'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.relation.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.relation.index', 'uses' => function ($relation_id) {
        return redirect(route('admin.relation.edit', $relation_id));
    }]);


    $router->get('/', ['as' => 'admin.relation.manager', 'uses' => 'RelationManagerController@relationManager']);
});

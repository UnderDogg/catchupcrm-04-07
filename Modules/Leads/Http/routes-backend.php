<?php
use Illuminate\Routing\Router;

// URI: /{backend}/leads
$router->group([
    'prefix' => 'leads',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_lead',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_lead'
    $router->group(['prefix' => 'add', 'namespace' => 'Lead'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.lead.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.lead.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_lead'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.lead.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.lead.index', 'uses' => function ($lead_id) {
        return redirect(route('admin.lead.edit', $lead_id));
    }]);


    $router->get('/', ['as' => 'admin.lead.manager', 'uses' => 'LeadManagerController@leadManager']);
});

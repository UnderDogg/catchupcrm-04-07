<?php
use Illuminate\Routing\Router;

// URI: /{backend}/Opportunitys
$router->group([
    'prefix' => 'opportunities',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_Opportunity',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_Opportunity'
    $router->group(['prefix' => 'add', 'namespace' => 'Opportunity'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.opportunity.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.opportunity.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_opportunity'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.opportunity.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.opportunity.index', 'uses' => function ($opportunity_id) {
        return redirect(route('admin.opportunity.edit', $opportunity_id));
    }]);


    $router->get('/', ['as' => 'admin.opportunity.manager', 'uses' => 'opportunityManagerController@opportunityManager']);
});

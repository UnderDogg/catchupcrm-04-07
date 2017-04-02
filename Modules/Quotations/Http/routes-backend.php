<?php
use Illuminate\Routing\Router;

// URI: /{backend}/quotations
$router->group([
    'prefix' => 'quotations',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_quotation',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_quotation'
    $router->group(['prefix' => 'add', 'namespace' => 'Quotation'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.quotation.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.quotation.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_quotation'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.quotation.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.quotation.index', 'uses' => function ($quotation_id) {
        return redirect(route('admin.quotation.edit', $quotation_id));
    }]);


    $router->get('/', ['as' => 'admin.quotation.manager', 'uses' => 'QuotationManagerController@quotationManager']);
});

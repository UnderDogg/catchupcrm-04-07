<?php
use Illuminate\Routing\Router;

// URI: /{backend}/invoices
$router->group([
    'prefix' => 'invoices',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_invoice',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_invoice'
    $router->group(['prefix' => 'add', 'namespace' => 'Invoice'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.invoice.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.invoice.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_invoice'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.invoice.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.invoice.index', 'uses' => function ($invoice_id) {
        return redirect(route('admin.invoice.edit', $invoice_id));
    }]);


    $router->get('/', ['as' => 'admin.invoice.manager', 'uses' => 'InvoiceManagerController@invoiceManager']);
});

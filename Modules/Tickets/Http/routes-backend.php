<?php
use Illuminate\Routing\Router;

// URI: /{backend}/tickets
$router->group([
    'prefix' => 'tickets',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_ticket',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_ticket'
    $router->group(['prefix' => 'add', 'namespace' => 'Ticket'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.ticket.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.ticket.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_ticket'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.ticket.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.ticket.index', 'uses' => function ($ticket_id) {
        return redirect(route('admin.ticket.edit', $ticket_id));
    }]);


    $router->get('/', ['as' => 'admin.ticket.manager', 'uses' => 'TicketManagerController@ticketManager']);
});

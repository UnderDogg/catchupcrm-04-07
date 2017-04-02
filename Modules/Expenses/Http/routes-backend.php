<?php
use Illuminate\Routing\Router;

// URI: /{backend}/expenses
$router->group([
    'prefix' => 'expenses',
    //'middleware' => ['hasPermission'],
    //'hasPermission' => 'manage@auth_expense',
], function (Router $router) {

    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.create@auth_expense'
    $router->group(['prefix' => 'add', 'namespace' => 'Expense'], function (Router $router) {

        $router->post('/', ['uses' => 'CreateController@postForm']);
        $router->get('/', ['as' => 'admin.expense.add', 'uses' => 'CreateController@getForm']);
    });


    $router->group(['prefix' => 'edit'], function (Router $router) {
        $router->post('/', ['uses' => 'InfoController@postForm']);
        $router->get('/', ['as' => 'admin.expense.edit', 'uses' => 'InfoController@getForm']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_expense'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.expense.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.expense.index', 'uses' => function ($expense_id) {
        return redirect(route('admin.expense.edit', $expense_id));
    }]);


    $router->get('/', ['as' => 'admin.expense.manager', 'uses' => 'ExpenseManagerController@expenseManager']);
});

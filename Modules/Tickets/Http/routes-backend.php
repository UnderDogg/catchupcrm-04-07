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
        $router->get('/', ['as' => 'admin.ticket.edit', 'uses' => 'TickettasController@editTicket']);
    });


    //'middleware' => 'hasPermission', 'hasPermission' => 'manage.read@auth_ticket'
    $router->group(['prefix' => 'view'], function (Router $router) {
        $router->get('/', ['as' => 'admin.ticket.view', 'uses' => 'InfoController@getIndex']);
    });

    $router->get('/', ['as' => 'admin.ticket.index', 'uses' => function ($ticket_id) {
        return redirect(route('admin.ticket.edit', $ticket_id));
    }]);


    $router->get('/', ['as' => 'admin.ticket.manager', 'uses' => 'TicketManagerController@ticketManager']);


        Route::resource('sla', 'Admin\helpdesk\SlaController'); // in SLA Plan module, for CRUD

Route::get('getticket', ['as' => 'getticket', 'uses' => 'Admin\helpdesk\SettingsController@getticket']); // direct to ticket setting page
Route::patch('postticket/{id}', 'Admin\helpdesk\SettingsController@postticket'); // Updating the Ticket table with requests


        Route::get('getresponder', ['as' => 'getresponder', 'uses' => 'Admin\helpdesk\SettingsController@getresponder']); // direct to responder setting page

        Route::patch('postresponder/{id}', 'Admin\helpdesk\SettingsController@postresponder'); // Updating the Responder table with requests
        Route::get('getalert', ['as' => 'getalert', 'uses' => 'Admin\helpdesk\SettingsController@getalert']); // direct to alert setting page

        Route::patch('postalert/{id}', 'Admin\helpdesk\SettingsController@postalert'); // Updating the Alert table with requests
        Route::get('setting-status', ['as' => 'statuss.index', 'uses' => 'Admin\helpdesk\SettingsController@getStatuses']); // direct to status setting page



        Route::get('status/edit/{id}', ['as' => 'status.edit', 'uses' => 'Admin\helpdesk\SettingsController@getEditStatuses']);
        Route::post('status-create', ['as' => 'statuss.create', 'uses' => 'Admin\helpdesk\SettingsController@createStatuses']);
        Route::get('status-delete/{id}', ['as' => 'statuss.delete', 'uses' => 'Admin\helpdesk\SettingsController@deleteStatuses']);
        Route::get('ticket/status/{id}/{state}', ['as' => 'statuss.state', 'uses' => 'Agent\helpdesk\TicketController@updateStatuses']);
Route::get('/inbox/data', ['as' => 'api.inbox', 'uses' => 'Agent\helpdesk\TicketController@get_inbox']);
Route::get('ticket/status/{id}/{state}', ['as' => 'statuss.state', 'uses' => 'Agent\helpdesk\TicketController@updateStatuses']);
Route::get('/ticket', ['as' => 'ticket', 'uses' => 'Agent\helpdesk\TicketController@ticket_list']); /*  Get Ticket */
        Route::get('/ticket/inbox', ['as' => 'inbox.ticket', 'uses' => 'Agent\helpdesk\TicketController@inbox_ticket_list']); /*  Get Inbox Ticket */

        Route::get('/ticket/get-inbox', ['as' => 'get.inbox.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_inbox']);  /* Get tickets in datatable */
        Route::get('/ticket/open', ['as' => 'open.ticket', 'uses' => 'Agent\helpdesk\TicketController@open_ticket_list']); /*  Get Open Ticket */

        Route::get('/ticket/get-open', ['as' => 'get.open.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_open']);  /* Get tickets in datatable */
        Route::get('/ticket/answered', ['as' => 'answered.ticket', 'uses' => 'Agent\helpdesk\TicketController@answered_ticket_list']); /*  Get Answered Ticket */

        Route::get('/ticket/get-answered', ['as' => 'get.answered.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_answered']);  /* Get tickets in datatable */
        Route::get('/ticket/myticket', ['as' => 'myticket.ticket', 'uses' => 'Agent\helpdesk\TicketController@myticket_ticket_list']); /*  Get Tickets Assigned to logged user */

        Route::get('/ticket/get-myticket', ['as' => 'get.myticket.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_myticket']);  /* Get tickets in datatable */
        Route::get('/ticket/overdue', ['as' => 'overdue.ticket', 'uses' => 'Agent\helpdesk\TicketController@overdue_ticket_list']); /*  Get Overdue Ticket */

        Route::get('/ticket/get-overdue', ['as' => 'get.overdue.ticket', 'uses' => 'Agent\helpdesk\TicketController@getOverdueTickets']); /*  Get Overdue Ticket */
        Route::get('/ticket/closed', ['as' => 'closed.ticket', 'uses' => 'Agent\helpdesk\TicketController@closed_ticket_list']); /*  Get Closed Ticket */

        Route::get('/ticket/get-closed', ['as' => 'get.closed.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_closed']);  /* Get tickets in datatable */
        Route::get('/ticket/assigned', ['as' => 'assigned.ticket', 'uses' => 'Agent\helpdesk\TicketController@assigned_ticket_list']); /*  Get Assigned Ticket */

        Route::get('/ticket/get-assigned', ['as' => 'get.assigned.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_assigned']);  /* Get tickets in datatable */
        Route::get('/newticket', ['as' => 'newticket', 'uses' => 'Agent\helpdesk\TicketController@newticket']); /*  Get Create New Ticket */

        Route::get('/newticket/autofill', ['as' => 'post.newticket.autofill', 'uses' => 'Agent\helpdesk\TicketController@autofill']);

        Route::post('/newticket/post', ['as' => 'post.newticket', 'uses' => 'Agent\helpdesk\TicketController@post_newticket']); /*  Post Create New Ticket */
        Route::get('/thread/{id}', ['as' => 'ticket.thread', 'uses' => 'Agent\helpdesk\TicketController@thread']); /*  Get Thread by ID */

        Route::post('/thread/reply/{id}', ['as' => 'ticket.reply', 'uses' => 'Agent\helpdesk\TicketController@reply']); /*  Patch Thread Reply */
        Route::patch('/internal/note/{id}', ['as' => 'Internal.note', 'uses' => 'Agent\helpdesk\TicketController@InternalNote']); /*  Patch Internal Note */
        Route::patch('/ticket/assign/{id}', ['as' => 'assign.ticket', 'uses' => 'Agent\helpdesk\TicketController@assign']); /*  Patch Ticket assigned to whom */
        Route::patch('/ticket/post/edit/{id}', ['as' => 'ticket.post.edit', 'uses' => 'Agent\helpdesk\TicketController@ticketEditPost']); /*  Patchi Ticket Edit */
        Route::get('/ticket/print/{id}', ['as' => 'ticket.print', 'uses' => 'Agent\helpdesk\TicketController@ticket_print']); /*  Get Print Ticket */
        Route::get('/ticket/close/{id}', ['as' => 'ticket.close', 'uses' => 'Agent\helpdesk\TicketController@close']); /*  Get Ticket Close */
        Route::get('/ticket/resolve/{id}', ['as' => 'ticket.resolve', 'uses' => 'Agent\helpdesk\TicketController@resolve']); /*  Get ticket Resolve */
        Route::get('/ticket/open/{id}', ['as' => 'ticket.open', 'uses' => 'Agent\helpdesk\TicketController@open']); /*  Get Ticket Open */
        Route::get('/ticket/delete/{id}', ['as' => 'ticket.delete', 'uses' => 'Agent\helpdesk\TicketController@delete']); /*  Get Ticket Delete */
        Route::get('/email/ban/{id}', ['as' => 'ban.email', 'uses' => 'Agent\helpdesk\TicketController@ban']); /*  Get Ban Email */
        Route::get('/ticket/surrender/{id}', ['as' => 'ticket.surrender', 'uses' => 'Agent\helpdesk\TicketController@surrender']); /*  Get Ticket Surrender */
        Route::get('/aaaa', 'Client\helpdesk\GuestController@ticket_number');
        Route::get('trash', ['as' => 'get-trash', 'uses' => 'Agent\helpdesk\TicketController@trash']); /* To show Deleted Tickets */

        Route::get('/ticket/trash', ['as' => 'get.trash.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_trash']);  /* Get tickets in datatable */
        Route::get('unassigned', ['as' => 'unassigned', 'uses' => 'Agent\helpdesk\TicketController@unassigned']); /* To show Unassigned Tickets */

        Route::get('/ticket/unassigned', ['as' => 'get.unassigned.ticket', 'uses' => 'Agent\helpdesk\TicketController@get_unassigned']);  /* Get tickets in datatable */
        Route::post('canned/{id}', 'Agent\helpdesk\CannedController@get_canned');
        // Department ticket
        Route::get('/{dept}/open', ['as' => 'dept.open.ticket', 'uses' => 'Agent\helpdesk\TicketController@deptopen']); // Open
        Route::get('tickets/{dept}/{status}', ['as' => 'dept.ticket', 'uses' => 'Agent\helpdesk\TicketController@deptTicket']); // Open

        Route::get('/{dept}/assigned', ['as' => 'dept.inprogress.ticket', 'uses' => 'Agent\helpdesk\TicketController@deptinprogress']); // Inprogress

        Route::get('/{dept}/closed', ['as' => 'dept.closed.ticket', 'uses' => 'Agent\helpdesk\TicketController@deptclose']); // Closed
        //To merge tickets
        Route::get('/get-merge-tickets/{id}', ['as' => 'get.merge.tickets', 'uses' => 'Agent\helpdesk\TicketController@getMergeTickets']);
        Route::get('/check-merge-ticket/{id}', ['as' => 'check.merge.tickets', 'uses' => 'Agent\helpdesk\TicketController@checkMergeTickets']);
        Route::get('/get-parent-tickets/{id}', ['as' => 'get.parent.ticket', 'uses' => 'Agent\helpdesk\TicketController@getParentTickets']);
        Route::patch('/merge-tickets/{id}', ['as' => 'merge.tickets', 'uses' => 'Agent\helpdesk\TicketController@mergeTickets']);
        //To get department tickets data
        //open tickets of department
        Route::get('/get-open-tickets/{id}', ['as' => 'get.dept.open', 'uses' => 'Agent\helpdesk\Ticket2Controller@getOpenTickets']);
        //close tickets of deartment
        Route::get('/get-closed-tickets/{id}', ['as' => 'get.dept.close', 'uses' => 'Agent\helpdesk\Ticket2Controller@getCloseTickets']);
        //in progress ticket of department
        Route::get('/get-under-process-tickets/{id}', ['as' => 'get.dept.inprocess', 'uses' => 'Agent\helpdesk\Ticket2Controller@getInProcessTickets']);
        /*
         * Approval
         */
        Route::get('approval/settings', ['as' => 'approval.settings', 'uses' => 'Agent\helpdesk\TicketController@settingsApproval']);
        Route::post('settingsUpdateApproval/settings', ['as' => 'settingsUpdateApproval.settings', 'uses' => 'Agent\helpdesk\TicketController@settingsUpdateApproval']);

        Route::get('/ticket/approval/closed', ['as' => 'closed.approvel.ticket', 'uses' => 'Agent\helpdesk\TicketController@approverClosedTicketList']); /*  Get Closed Ticket */

        Route::get('/ticket/get-approval', ['as' => 'get.approval.ticket', 'uses' => 'Agent\helpdesk\TicketController@getApproval']);  /* Get tickets in datatable */
        Route::get('/ticket/close/get-approval/{id}', ['as' => 'get.close.approval.ticket', 'uses' => 'Agent\helpdesk\TicketController@getCloseapproval']);  /* Get tickets in datatable */

        /*
         * Followup tickets
         */
        Route::get('/ticket/followup', ['as' => 'followup.ticket', 'uses' => 'Agent\helpdesk\TicketController@followupTicketList']); //  Get Closed Ticket /

        Route::get('/ticket/get-followup', ['as' => 'get.followup.ticket', 'uses' => 'Agent\helpdesk\TicketController@getFollowup']);  // Get tickets in datatable /
        Route::get('/ticket/close/get-approval/{id}', ['as' => 'get.close.approval.ticket', 'uses' => 'Agent\helpdesk\TicketController@getCloseapproval']);  // Get tickets in datatable /




            Route::get('help-topic', 'Api\v1\ApiController@getHelpTopic');
            Route::get('sla-plan', 'Api\v1\ApiController@getSlaPlan');
            Route::get('priority', 'Api\v1\ApiController@getPriority');
            Route::get('department', 'Api\v1\ApiController@getDepartment');
            Route::get('tickets', 'Api\v1\ApiController@getTickets');
            Route::get('ticket', 'Api\v1\ApiController@getTicketById');
            Route::get('inbox', 'Api\v1\ApiController@inbox');
            Route::get('trash', 'Api\v1\ApiController@getTrash');
            Route::get('my-tickets-agent', 'Api\v1\ApiController@getMyTicketsAgent');
    /*
     * Ticket_Priority Settings
     */
    Route::get('ticket/priority', ['as' => 'priority.index', 'uses' => 'Admin\helpdesk\PriorityController@priorityIndex']);
    Route::post('user/ticket/priority', ['as' => 'user.priority.index', 'uses' => 'Admin\helpdesk\PriorityController@userPriorityIndex']);


    Route::get('get_index', ['as' => 'priority.index1', 'uses' => 'Admin\helpdesk\PriorityController@priorityIndex1']);
    Route::get('ticket/priority/create', ['as' => 'priority.create', 'uses' => 'Admin\helpdesk\PriorityController@priorityCreate']);
    Route::post('ticket/priority/create1', ['as' => 'priority.create1', 'uses' => 'Admin\helpdesk\PriorityController@priorityCreate1']);
    Route::post('ticket/priority/edit1', ['as' => 'priority.edit1', 'uses' => 'Admin\helpdesk\PriorityController@priorityEdit1']);
    Route::get('ticket/priority/{ticket_priority}/edit', ['as' => 'priority.edit', 'uses' => 'Admin\helpdesk\PriorityController@priorityEdit']);
    Route::get('ticket/priority/{ticket_priority}/destroy', ['as' => 'priority.destroy', 'uses' => 'Admin\helpdesk\PriorityController@destroy']);


   //due today ticket
   Route::get('duetoday', ['as' => 'ticket.duetoday',  'uses' =>'Agent\helpdesk\TicketController@dueTodayTicketlist']);

  // Route::post('duetoday/list/ticket', ['as' => 'ticket.post.duetoday',  'uses' =>'Agent\helpdesk\TicketController@getDueToday']);
 Route::get('duetoday/list/ticket', ['as' => 'ticket.post.duetoday',  'uses' =>'Agent\helpdesk\TicketController@getDueToday']); /*  Get Open Ticket */


        /*
         * Labels
         */

        Route::resource('labels', 'Admin\helpdesk\Label\LabelController');
        Route::get('labels-ajax', ['as'=>'labels.ajax', 'uses'=>'Admin\helpdesk\Label\LabelController@ajaxTable']);
        Route::get('labels/delete/{id}', ['as' => 'labels.destroy', 'uses' => 'Admin\helpdesk\Label\LabelController@destroy']);
});

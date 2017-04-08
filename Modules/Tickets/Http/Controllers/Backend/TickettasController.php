<?php

namespace Modules\Tickets\Http\Controllers\Backend;

use Modules\Tickets\Datatables\TicketManager;
use Modules\Auth\Http\Controllers\Frontend\ControlPanel\BaseController;
use Modules\Admin\Http\Controllers\Backend\BaseAdminController;
use Modules\Admin\Traits\DataTableTrait;
use Modules\Tickets\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TickettasController extends BaseController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new TicketManager())->boot());
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('tickets::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('tickets::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    /*public function edit()
    {
        return view('tickets::edit');
    }*/

    /**
     * Shows the ticket thread details.
     *
     * @param type $id
     *
     * @return type response
     */
    public function edit($id)
    {
        if (Auth::user()->role == 'agent') {
            //$dept = Department::where('id', '=', Auth::user()->primary_dpt)->first();
            $tickets = Tickets::where('id', '=', $id)->first();
            /*if ($tickets->dept_id == $dept->id) {
                $tickets = $tickets;
            } elseif ($tickets->assigned_to == Auth::user()->id) {
                $tickets = $tickets;
            } else {
                $tickets = null;
            }*/
//            $tickets = $tickets->where('dept_id', '=', $dept->id)->orWhere('assigned_to', Auth::user()->id)->first();
//            dd($tickets);
        } elseif (Auth::user()->role == 'admin') {
            $tickets = Tickets::where('id', '=', $id)->first();
        } elseif (Auth::user()->role == 'user') {
            /*$thread = Ticket_Thread::where('ticket_id', '=', $id)->first();
            $ticket_id = \Crypt::encrypt($id);

            return redirect()->route('check_ticket', compact('ticket_id'));*/
        }
        /*if ($tickets == null) {
            return redirect()->route('inbox.ticket')->with('fails', \Lang::get('lang.invalid_attempt'));
        }*/

        //$thread = Ticket_Thread::where('ticket_id', '=', $id)->first();
        //$fileupload = new FileuploadController();
        //$fileupload = $fileupload->file_upload_max_size();
        //$max_size_in_bytes = $fileupload[0];
        //$max_size_in_actual = $fileupload[1];
        //$tickets_approval = Tickets::where('id', '=', $id)->first();

        return view('themes.default1.agent.helpdesk.ticket.timeline', compact('tickets', compact('thread', 'avg_rating')));
    }



    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

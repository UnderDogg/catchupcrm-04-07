<?php

namespace Modules\Invoices\Http\Controllers\Frontend\Invoices;

use Modules\Invoices\Datatables\InvoiceManager;
use Modules\Auth\Http\Controllers\Frontend\ControlPanel\BaseController;
use Modules\Admin\Http\Controllers\Backend\BaseAdminController;
use Modules\Admin\Traits\DataTableTrait;
use Modules\Invoices\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class InvoicesController extends BaseController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new InvoiceManager())->boot());
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('invoices::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('invoices::create');
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
    public function edit()
    {
        return view('invoices::edit');
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

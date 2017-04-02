<?php

namespace Modules\Expenses\Http\Controllers\Frontend\Expenses;

use Modules\Expenses\Datatables\ExpenseManager;
use Modules\Auth\Http\Controllers\Frontend\ControlPanel\BaseController;
use Modules\Admin\Http\Controllers\Backend\BaseAdminController;
use Modules\Admin\Traits\DataTableTrait;
use Modules\v\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ExpensesController extends BaseController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new ExpenseManager())->boot());
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('expenses::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('expenses::create');
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
        return view('expenses::edit');
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

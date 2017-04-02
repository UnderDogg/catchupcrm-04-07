<?php

namespace Modules\Opportunities\Http\Controllers\Frontend\Opportunities;

use Modules\Opportunities\Datatables\OpportunityManager;
use Modules\Admin\Http\Controllers\Backend\BaseAdminController;
use Modules\Admin\Traits\DataTableTrait;
use Modules\Opportunities\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class OpportunitiesController extends BaseAdminController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new OpportunityManager())->boot());
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('opportunities::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('opportunities::create');
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
        return view('opportunities::edit');
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

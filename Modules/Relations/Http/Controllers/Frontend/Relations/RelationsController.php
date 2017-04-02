<?php

namespace Modules\Relations\Http\Controllers\Frontend\Relations;

use Modules\Relations\Datatables\RelationManager;
use Modules\Admin\Http\Controllers\Backend\BaseAdminController;
use Modules\Admin\Traits\DataTableTrait;
use Modules\Relations\Models\Relation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class RelationsController extends BaseAdminController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new RelationManager())->boot());
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('relations::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('relations::create');
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
        return view('relations::edit');
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

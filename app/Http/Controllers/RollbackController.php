<?php

namespace App\Http\Controllers;

use App\Models\rollback;
use App\Http\Requests\StorerollbackRequest;
use App\Http\Requests\UpdaterollbackRequest;

class RollbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerollbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerollbackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rollback  $rollback
     * @return \Illuminate\Http\Response
     */
    public function show(rollback $rollback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rollback  $rollback
     * @return \Illuminate\Http\Response
     */
    public function edit(rollback $rollback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterollbackRequest  $request
     * @param  \App\Models\rollback  $rollback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterollbackRequest $request, rollback $rollback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rollback  $rollback
     * @return \Illuminate\Http\Response
     */
    public function destroy(rollback $rollback)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemographicRequest;
use App\Http\Requests\UpdateDemographicRequest;
use App\Models\Demographic;

class DemographicController extends Controller
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
     * @param  \App\Http\Requests\StoreDemographicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemographicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demographic  $demographic
     * @return \Illuminate\Http\Response
     */
    public function show(Demographic $demographic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demographic  $demographic
     * @return \Illuminate\Http\Response
     */
    public function edit(Demographic $demographic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDemographicRequest  $request
     * @param  \App\Models\Demographic  $demographic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemographicRequest $request, Demographic $demographic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demographic  $demographic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demographic $demographic)
    {
        //
    }
}

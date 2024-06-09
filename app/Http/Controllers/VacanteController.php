<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevacanteRequest;
use App\Http\Requests\UpdatevacanteRequest;
use App\Models\vacante;

class VacanteController extends Controller
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
     * @param  \App\Http\Requests\StorevacanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevacanteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(vacante $vacante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(vacante $vacante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevacanteRequest  $request
     * @param  \App\Models\vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevacanteRequest $request, vacante $vacante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacante $vacante)
    {
        //
    }
}

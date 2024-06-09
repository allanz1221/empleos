<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresolicitanteRequest;
use App\Http\Requests\UpdatesolicitanteRequest;
use App\Models\solicitante;

class SolicitanteController extends Controller
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
     * @param  \App\Http\Requests\StoresolicitanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresolicitanteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function show(solicitante $solicitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function edit(solicitante $solicitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesolicitanteRequest  $request
     * @param  \App\Models\solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesolicitanteRequest $request, solicitante $solicitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitante $solicitante)
    {
        //
    }
}

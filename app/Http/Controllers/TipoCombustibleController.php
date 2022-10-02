<?php

namespace App\Http\Controllers;

use App\Models\tipo_combustible;
use App\Http\Requests\Storetipo_combustibleRequest;
use App\Http\Requests\Updatetipo_combustibleRequest;

class TipoCombustibleController extends Controller
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
     * @param  \App\Http\Requests\Storetipo_combustibleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_combustibleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_combustible  $tipo_combustible
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_combustible $tipo_combustible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_combustible  $tipo_combustible
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_combustible $tipo_combustible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_combustibleRequest  $request
     * @param  \App\Models\tipo_combustible  $tipo_combustible
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_combustibleRequest $request, tipo_combustible $tipo_combustible)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_combustible  $tipo_combustible
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_combustible $tipo_combustible)
    {
        //
    }
}

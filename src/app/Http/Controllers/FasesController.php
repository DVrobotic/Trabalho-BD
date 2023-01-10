<?php

namespace App\Http\Controllers;

use App\Models\Fases;
use App\Http\Requests\StoreFasesRequest;
use App\Http\Requests\UpdateFasesRequest;

class FasesController extends Controller
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
     * @param  \App\Http\Requests\StoreFasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function show(Fases $fases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function edit(Fases $fases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasesRequest  $request
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFasesRequest $request, Fases $fases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fases $fases)
    {
        //
    }
}

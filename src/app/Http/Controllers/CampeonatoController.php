<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Http\Requests\StoreCampeonatoRequest;
use App\Http\Requests\UpdateCampeonatoRequest;

class CampeonatoController extends Controller
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
     * @param  \App\Http\Requests\StoreCampeonatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampeonatoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function show(Campeonato $campeonato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function edit(Campeonato $campeonato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampeonatoRequest  $request
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampeonatoRequest $request, Campeonato $campeonato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campeonato $campeonato)
    {
        //
    }
}

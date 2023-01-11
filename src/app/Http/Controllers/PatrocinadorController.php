<?php

namespace App\Http\Controllers;

use App\Models\Patrocinador;
use App\Http\Requests\StorePatrocinadorRequest;
use App\Http\Requests\UpdatePatrocinadorRequest;

class PatrocinadorController extends Controller
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
     * @param  \App\Http\Requests\StorePatrocinadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatrocinadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatrocinadorRequest  $request
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatrocinadorRequest $request, Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrocinador $patrocinador)
    {
        //
    }
}

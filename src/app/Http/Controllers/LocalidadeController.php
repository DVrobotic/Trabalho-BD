<?php

namespace App\Http\Controllers;

use App\Models\Localidade;
use App\Http\Requests\StoreLocalidadeRequest;
use App\Http\Requests\UpdateLocalidadeRequest;

class LocalidadeController extends Controller
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
     * @param  \App\Http\Requests\StoreLocalidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function show(Localidade $localidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidade $localidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalidadeRequest  $request
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalidadeRequest $request, Localidade $localidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localidade $localidade)
    {
        //
    }
}

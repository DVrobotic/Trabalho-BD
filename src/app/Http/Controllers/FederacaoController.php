<?php

namespace App\Http\Controllers;

use App\Models\Federacao;
use App\Http\Requests\StoreFederacaoRequest;
use App\Http\Requests\UpdateFederacaoRequest;

class FederacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreFederacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFederacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Federacao  $federacao
     * @return \Illuminate\Http\Response
     */
    public function show(Federacao $federacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Federacao  $federacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Federacao $federacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFederacaoRequest  $request
     * @param  \App\Models\Federacao  $federacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFederacaoRequest $request, Federacao $federacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Federacao  $federacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Federacao $federacao)
    {
        //
    }
}

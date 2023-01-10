<?php

namespace App\Http\Controllers;

use App\Models\TipoEquipamento;
use App\Http\Requests\StoreTipoEquipamentoRequest;
use App\Http\Requests\UpdateTipoEquipamentoRequest;

class TipoEquipamentoController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoEquipamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoEquipamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEquipamento $tipoEquipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEquipamento $tipoEquipamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoEquipamentoRequest  $request
     * @param  \App\Models\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoEquipamentoRequest $request, TipoEquipamento $tipoEquipamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEquipamento $tipoEquipamento)
    {
        //
    }
}

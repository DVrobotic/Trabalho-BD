<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use App\Http\Requests\StoreModalidadeRequest;
use App\Http\Requests\UpdateModalidadeRequest;

class ModalidadeController extends Controller
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
     * @param  \App\Http\Requests\StoreModalidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModalidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modalidade  $modalidade
     * @return \Illuminate\Http\Response
     */
    public function show(Modalidade $modalidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modalidade  $modalidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Modalidade $modalidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModalidadeRequest  $request
     * @param  \App\Models\Modalidade  $modalidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModalidadeRequest $request, Modalidade $modalidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modalidade  $modalidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modalidade $modalidade)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Premiacao;
use App\Http\Requests\StorePremiacaoRequest;
use App\Http\Requests\UpdatePremiacaoRequest;

class PremiacaoController extends Controller
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
     * @param  \App\Http\Requests\StorePremiacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePremiacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Premiacao  $premiacao
     * @return \Illuminate\Http\Response
     */
    public function show(Premiacao $premiacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Premiacao  $premiacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Premiacao $premiacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePremiacaoRequest  $request
     * @param  \App\Models\Premiacao  $premiacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePremiacaoRequest $request, Premiacao $premiacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Premiacao  $premiacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Premiacao $premiacao)
    {
        //
    }
}

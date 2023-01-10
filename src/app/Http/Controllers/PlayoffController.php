<?php

namespace App\Http\Controllers;

use App\Models\Playoff;
use App\Http\Requests\StorePlayoffRequest;
use App\Http\Requests\UpdatePlayoffRequest;

class PlayoffController extends Controller
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
     * @param  \App\Http\Requests\StorePlayoffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayoffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playoff  $playoff
     * @return \Illuminate\Http\Response
     */
    public function show(Playoff $playoff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playoff  $playoff
     * @return \Illuminate\Http\Response
     */
    public function edit(Playoff $playoff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayoffRequest  $request
     * @param  \App\Models\Playoff  $playoff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayoffRequest $request, Playoff $playoff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playoff  $playoff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playoff $playoff)
    {
        //
    }
}

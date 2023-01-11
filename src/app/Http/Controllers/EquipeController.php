<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipeRequest;
use App\Models\Campeonato;
use App\Models\Equipe;
use App\Http\Requests\StoreEquipeRequest;
use App\Models\Modalidade;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipe = new Equipe();
        $modalidades = Modalidade::all();
        $campeonatos = Campeonato::all();
        return view('equipes.create',compact('equipe', 'modalidades', 'campeonatos'));
    }


    public function store(EquipeRequest $request)
    {
        $data = $request->validated();
        $equipe = Equipe::create($data);
        $equipe->modalidade()->associate($data['modalidade_id']);
        $equipe->campeonatos()->sync($data['campeonato_id']);
        return redirect()->route('equipes.index')->with('success',true);
    }


    public function show(Equipe $equipe)
    {
        $modalidades = Modalidade::all();
        $campeonatos = Campeonato::all();
        return view('equipes.show', compact('equipe', 'modalidades', 'campeonatos'));
    }

    public function edit(Equipe $equipe)
    {
        $modalidades = Modalidade::all();
        $campeonatos = Campeonato::all();
        return view('equipes.edit',compact('equipe', 'modalidades', 'campeonatos'));
    }


    public function update(EquipeRequest $request, Equipe $equipe)
    {
        $data = $request->validated();
        $equipe->update(['nome' => $data['nome']]);
        $equipe->modalidade()->associate($data['modalidade_id']);
        $equipe->campeonatos()->sync($data['campeonato_id']);

        return redirect()->back()->with('success', true);
    }

    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipes.index');
    }
}

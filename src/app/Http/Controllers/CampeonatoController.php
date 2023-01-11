<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampeonatoRequest;
use App\Models\Campeonato;
use App\Http\Requests\StoreCampeonatoRequest;
use App\Models\Modalidade;
use App\Models\Orcamento;

class CampeonatoController extends Controller
{
    public function index()
    {
        $campeonatos = Campeonato::all();
        return view('campeonatos.index', compact('campeonatos'));
    }

    public function create()
    {
        $campeonato = new Campeonato();
        $modalidades = Modalidade::all();
        return view('campeonatos.create',compact('campeonato', 'modalidades'));
    }

    public function store(CampeonatoRequest $request)
    {
        $data = $request->validated();
        $campeonato = Campeonato::create($data);

        return redirect()->route('campeonatos.index')->with('success',true);
    }

    public function show(Campeonato $campeonato)
    {
        $modalidades = Modalidade::all();
        return view('campeonatos.show', compact('campeonato', 'modalidades'));
    }

    public function edit(Campeonato $campeonato)
    {
        $modalidades = Modalidade::all();
        return view('campeonatos.edit',compact('campeonato', 'modalidades'));
    }


    public function update(CampeonatoRequest $request, Campeonato $campeonato)
    {
        $data = $request->validated();
        $campeonato->update(['nome' => $data['nome']]);

        return redirect()->back()->with('success', true);
    }

    public function destroy(Campeonato $campeonato)
    {
        $campeonato->delete();
        return redirect()->route('campeonatos.index');
    }
}

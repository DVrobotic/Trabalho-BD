<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\Equipe;
use App\Models\Partida;
use Illuminate\Support\Facades\DB;

class QueryMakerController extends Controller
{
   public function Test()
   {
       $campeonatoId = Campeonato::first()->id;

       //query para buscar vitorias/partida
       //query para fazer inner join de (vitorias) com equipe que ganhou
       $test = DB::select(DB::raw
       (
            value:
            "
            select
                 e.nome,
                 subquery.partidaId
            from equipes e
            inner join
            (
                select
                    p.id as partidaId,
                    r.vencedor_id as vencedorId
                from partidas as p
                inner join resultados as r on r.partida_id = p.id
                where p.campeonato_id = {$campeonatoId}
                group by p.id, r.vencedor_id
                having count(*) * 2 >
                (
                    select
                        count(r2.id)
                    from partidas p2
                    inner join resultados r2 on r2.id = p2.id
                    where p2.campeonato_id = {$campeonatoId} and
                    p.id = p2.id and
                    r2.vencedor_id != r.vencedor_id
                    group by p2.id
                )
            ) as subquery
            on subquery.vencedorId = e.id
            "
       ));

       dd($test, Campeonato::first()->partidas());



       return view('queryMaker');
   }
}

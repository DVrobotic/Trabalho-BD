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
       //query para buscar vitorias/partida
       //query para fazer inner join de (vitorias) com equipe que ganhou

       return view('queryMaker');
   }
}

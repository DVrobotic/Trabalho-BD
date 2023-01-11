<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\Equipe;
use App\Models\Partida;
use Illuminate\Support\Facades\DB;

class QueryMakerController extends Controller
{
   public function queryMaker()
   {
       $test = DB::select(DB::raw
       (value:
       "
            select * from localidades_torneio
       "
       ));

       dd($test);

       return view('queryMaker');
   }
}

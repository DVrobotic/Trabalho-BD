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
       return view('queryMaker');
   }
}

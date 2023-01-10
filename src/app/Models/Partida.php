<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'campeonato_id',
        'fase_id',
        'equipe1_id',
        'equipe2_id',
        'datahora',
        'tipo',
        'localidade_id'
    ];
}

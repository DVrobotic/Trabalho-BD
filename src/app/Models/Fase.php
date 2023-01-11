<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        "numero",
        "nome",
        "quantidadePartidas",
        "campeonato_id",
    ];

    public function campeonato()
    {
        return $this->belongsTo
        (
          Campeonato::class,
          'campeonato_id',
          'id',
        );
    }

    public function partidas()
    {
        return $this->hasMany
        (
            Partida::class,
            'fase_id',
            'id',
        );
    }
}

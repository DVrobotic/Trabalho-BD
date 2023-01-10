<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidade extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'tipo'
    ];

    public function campeonatios()
    {
        return $this->hasMany
        (
          Campeonato::class,
          'modalidade_id',
            'id',
        );
    }


    public function equipes()
    {
        return $this->hasMany
        (
            Equipe::class,
            'modalidade_id',
            'id',
        );
    }
}

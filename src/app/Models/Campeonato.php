<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'inicio',
        'final',
    ];

    public function equipes()
    {
        return $this->belongsToMany
        (
          Equipe::class,
          'campeonatos_equipes',
          'campeonato_id',
          'equipe_id',
            'id',
            'id'
        );
    }

    public function playoff()
    {
        return $this->hasOne
        (
            Playoff::class,
            'campeonato_id',
            'id',
        );
    }

    public function campeonatoComGrupo()
    {
        return $this->hasOne
        (
            CampeonatoComGrupo::class,
            'campeonato_id',
            'id',
        );
    }

}

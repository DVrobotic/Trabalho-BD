<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emissora extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'plataforma',
    ];

    public function campeonatos()
    {
        return $this->belongsToMany
        (
            Campeonato::class,
            'campeonatos_emissoras',
            'emissora_id',
            'campeonato_id',
            'id',
            'id'
        );
    }

    public function partidas()
    {
        return $this->belongsToMany
        (
            Partida::class,
            'emissoras_partidas',
            'emissora_id',
            'partida_id',
            'id',
            'id'
        );
    }
}

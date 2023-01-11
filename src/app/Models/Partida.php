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

    public function emissoras()
    {
        return $this->belongsToMany
        (
            Emissora::class,
            'emissoras_partidas',
            'partida_id',
            'emissora_id',
            'id',
            'id'
        );
    }

    public function resultados()
    {
        return $this->hasMany
        (
            Resultado::class,
            'partida_id',
            'id'
        );
    }

    public function fase()
    {
        return $this->belongsTo
        (
            Fase::class,
            'fase_id',
            'id',
        );
    }

    public function equipe1()
    {
        return $this->belongsTo
        (
            Equipe::class,
            'equipe1_id',
            'id',
        );
    }

    public function equipe2()
    {
        return $this->belongsTo
        (
            Equipe::class,
            'equipe2_id',
            'id',
        );
    }

    public function localidade()
    {
        return $this->belongsTo
        (
            Localidade::class,
            'localidade_id',
            'id',
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'equipe_id',
        'modalidade_id',
    ];

    public function partidasComoEquipe1()
    {
        return $this->hasMany
        (
            Partida::class,
            'equipe1_id',
            'id',
        );
    }

    public function partidasComoEquipe2()
    {
        return $this->hasMany
        (
            Partida::class,
            'equipe2_id',
            'id',
        );
    }

    public function partidas()
    {
        return ;
    }


    public function modalidade()
    {
        return $this->belongsTo
        (
            Modalidade::class,
            'modalidade_id',
            'id',
        );
    }

    public function jogadores()
    {
        return $this->belongsToMany
        (
            User::class,
            'equipes_users',
            'equipe_id',
            'user_id',
            'id',
            'id',
        );
    }

    public function campeonatos()
    {
        return $this->belongsToMany
        (
            Campeonato::class,
            'campeonatos_equipes',
            'equipe_id',
            'campeonato_id',
            'id',
            'id'
        );
    }

    public function federacao()
    {
        return $this->belongsTo
        (
            Federacao::class,
            'federacao_id',
            'id',
        );
    }
}

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
        'fedaracao_id',
    ];

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

    public function cameponatos()
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

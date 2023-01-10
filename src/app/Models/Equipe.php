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
}

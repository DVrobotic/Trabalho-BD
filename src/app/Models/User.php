<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'sobrenome',
        'email',
        'password',
        'tipo',
        'cpf',
        'endereço',
    ];

    public function equipamentos()
    {
        return $this->belongsToMany
        (
            Equipamento::class,
            'equipamentos_users',
            'user_id',
            'equipamento_id',
            'id',
            'id',
        );
    }

    public function equipes()
    {
        return $this->belongsToMany
        (
            Equipe::class,
            'equipes_users',
            'user_id',
            'equipe_id',
            'id',
            'id',
        );
    }
}

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

    public function tipoEquipamentos()
    {
        return $this->belongsToMany
        (
            TipoEquipamento::class,
            'modalidades_tipo_equipamentos',
            'modalidade_id',
            'tipo_equipamento_id',
            'id',
            'id'
        );
    }

    public function campeonatos()
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

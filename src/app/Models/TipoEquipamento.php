<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEquipamento extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        "Id",
        "Nome",
        "modalidade_id",
    ];

    public function modalidades()
    {
        return $this->belongsToMany
        (
            Modalidade::class,
            'modalidades_tipo_equipamentos',
            'tipo_equipamento_id',
            'modalidade_id',
            'id',
            'id'
        );
    }

    public function equipamentos()
    {
        return $this->hasMany
        (
          Equipamento::class,
          'tipo_equipamento_id',
          'id',
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'tipo_equipamento_id',
        'nome',
        'modelo',
        'marca',
    ];

    public function equipamentos()
    {
        return $this->belongsToMany
        (
            User::class,
            'equipamentos_users',
            'equipamento_id',
            'user_id',
            'id',
            'id',
        );
    }

    public function tipoEquipmaneto()
    {
        return $this->belongsTo
        (
            TipoEquipamento::class,
            'tipo_equipamento_id',
            'id'
        );
    }
}

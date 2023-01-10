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

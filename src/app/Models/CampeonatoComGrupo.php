<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampeonatoComGrupo extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'tamanhoGrupo',
        'cameponato_id'
    ];

    public function campeonato()
    {
        return $this->belongsTo
        (
            Campeonato::class,
            'campeonato_id',
            'id'
        );
    }
}

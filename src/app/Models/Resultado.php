<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'partida_id',
        'pontos',
        'vencedor_id',
        'empate',
    ];

    public function partida()
    {
        return $this->belongsto
        (
            Partida::class,
            'partida_id',
            'id'
        );
    }

    public function vencedor()
    {
        return $this->belongsTo
        (
          Equipe::class,
          'vencedor_id',
          'id'
        );
    }
}

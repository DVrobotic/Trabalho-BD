<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federacao extends ModelHelper
{
    use HasFactory;

    protected $table = 'federacoes';

    protected $fillable =
    [
        'Nome',
        'Estado',
        'NomePresidente',
    ];

    public function equipes()
    {
        return $this->hasMany
        (
            Equipe::class,
            'federacao_id',
            'id',
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrocinador extends ModelHelper
{
    use HasFactory;

    protected $table = 'patrocinadores';

    protected $fillable =
    [
        'nome',
        'identificacao',
        'tipoPessoa',
    ];

    public function orcamentos()
    {
        return $this->belongsToMany
        (
            Orcamento::class,
            'orcamentos_patrocinadores',
            'patrocinador_id',
            'orcamento_id',
            'id',
            'id'
        );
    }
}

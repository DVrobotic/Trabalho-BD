<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premiacao extends ModelHelper
{
    use HasFactory;

    protected $table = 'premiacoes';

    protected $fillable =
    [
        'campeonato_id',
        'tipo',
        'valor',
    ];

    public function campeonato()
    {
        return $this->belongsTo
        (
            Campeonato::class,
            'campeonato_id',
            'id',
        );
    }
}

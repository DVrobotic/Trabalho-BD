<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playoff extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'temRepescagem',
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

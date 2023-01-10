<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidade extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'tipo',
        'endereço',
        'porte',
    ];
}

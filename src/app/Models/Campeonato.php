<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Campeonato extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        'nome',
        'inicio',
        'final',
    ];

    public function partidas()
    {
        return $this->hasMany
        (
            Partida::class,
            'campeonato_id',
            'id',
        );
    }

    public function fases()
    {
        return $this->hasMany
        (
            Fase::class,
            'campeonato_id',
            'id'
        );
    }

    public function modalidade()
    {
        return $this->belongsTo
        (
          Modalidade::class,
                'modalidade_id',
            'id',
        );
    }

    public function equipes()
    {
        return $this->belongsToMany
        (
          Equipe::class,
          'campeonatos_equipes',
          'campeonato_id',
          'equipe_id',
            'id',
            'id'
        );
    }

    public function playoff()
    {
        return $this->hasOne
        (
            Playoff::class,
            'campeonato_id',
            'id',
        );
    }

    public function campeonatoComGrupo()
    {
        return $this->hasOne
        (
            CampeonatoComGrupo::class,
            'campeonato_id',
            'id',
        );
    }

    public function totalDeEquipes()
    {
        return $this->equipes()->count();
    }

    public function numeroDeFases() : int
    {
        return (int) ceil(log($this->totalDeEquipes(), 2));
    }

    public function numeroPartidas(int $fase) : int
    {
        return (int) ceil($this->totalDeEquipes()/pow(2, $fase));
    }

    public function instanciarFasesFactory()
    {
        $total = $this->numeroDeFases();

        for($i = 1; $i <= $total; $i++)
        {
            Fase::factory()->create
            ([
                'campeonato_id' => $this->id,
                'numero' => $i,
                'quanidadePartidas' => $this->numeroPartidas($i),
            ]);
        }
    }

    public function instanciarPartidas()
    {
        $fases = $this->fases()->orderBy('numero', 'asc')->get();

        foreach($fases as $fase)
        {
            $equipes = $this->equipes()->pluck('id');
            for($i = 0; $i < $fase->quanidadePartidas; $i++)
            {

                Partida::factory()->create
                ([
                    'campeonato_id' => $this->id,
                    'fase_id' => $fase->id,
                    'equipe1_id' => $equipes->pop(),
                    'equipe2_id' => $equipes->pop(),
                ]);
            }
        }
    }


}

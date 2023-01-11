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
        'orcamento_id',
    ];

    public function emissoras()
    {
        return $this->belongsToMany
        (
            Emissora::class,
            'campeonatos_emissoras',
            'campeonato_id',
            'emissora_id',
            'id',
            'id'
        );
    }

    public function orcamento()
    {
        return $this->belongsTo
        (
            Orcamento::class,
            'orcamento_id',
            'id',
        );
    }

    public function premiacoes()
    {
        return $this->hasMany
        (
            Premiacao::class,
            'campeonato_id',
            'id',
        );
    }

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
                'quantidadePartidas' => $this->numeroPartidas($i),
            ]);
        }
    }

    public function instanciarPartidas()
    {
        $fases = $this->fases()->orderBy('numero', 'asc')->get();

        foreach($fases as $fase)
        {
            $equipes = $this->equipes()->get();

            for($i = 0; $i < $fase->quantidadePartidas; $i++)
            {

                $times = [$equipes->pop()->id, $equipes->pop()->id];
                $partida = Partida::factory()->create
                ([
                    'campeonato_id' => $this->id,
                    'fase_id' => $fase->id,
                    'equipe1_id' => $times[0],
                    'equipe2_id' => $times[1],
                ]);

                Resultado::factory()
                    ->count(fake()->numberBetween(0, 3))
                    ->create
                    ([
                        'partida_id' => $partida->id,
                        'empate' => $bool = fake()->boolean(),
                        'vencedor_id' => $bool ? null : fake()->randomElement($times),
                    ]);

                $emissoras = $this->emissoras()->pluck('id');
                if($emissoras->isNotEmpty())
                {
                    $partida->emissoras()->sync(fake()->randomElements($emissoras->toArray()));
                }
            }
        }
    }


}

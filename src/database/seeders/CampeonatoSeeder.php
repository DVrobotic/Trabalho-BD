<?php

namespace Database\Seeders;

use App\Models\Campeonato;
use App\Models\CampeonatoComGrupo;
use App\Models\Equipe;
use App\Models\Modalidade;
use App\Models\Playoff;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampeonatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campeonato::factory()
            ->count(3)
            ->has(Playoff::factory()->count(1), 'playoff')
            ->has
            (
                Equipe::factory()
                ->count(4)
                ->has(User::factory()->count(4), 'jogadores')
                ->state(fn(array $attributes, Campeonato $campeonato) =>
                    ['modalidade_id' => $campeonato->modalidade_id]
                )
            )
            ->create();

        Campeonato::factory()
            ->count(3)
            ->has
            (
                Equipe::factory()
                    ->count(4)
                    ->has(User::factory()->count(2), 'jogadores')
                    ->state(fn(array $attributes, Campeonato $campeonato) =>
                        ['modalidade_id' => $campeonato->modalidade_id]
                    )
            )
            ->has(CampeonatoComGrupo::factory()->count(1), 'campeonatoComGrupo')
            ->create();

        Campeonato::factory()
            ->count(2)
            ->has
            (
                Equipe::factory()
                    ->count(4)
                    ->has(User::factory()->count(2), 'jogadores')
                    ->state(fn(array $attributes, Campeonato $campeonato) =>
                        ['modalidade_id' => $campeonato->modalidade_id]
                    )
            )
            ->has(Playoff::factory()->count(1), 'playoff')
            ->has(CampeonatoComGrupo::factory()->count(1), 'campeonatoComGrupo')
            ->create();
    }
}

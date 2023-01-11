<?php

namespace Database\Seeders;

use App\Models\Orcamento;
use App\Models\Patrocinador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orcamento::factory()
            ->count(10)
            ->hasAttached
            (
                Patrocinador
                    ::factory()
                    ->count(2),
                    ['valor' => fake()->randomFloat(2, 0,10000)],
                    'patrocinadores'
            )
            ->create();
    }
}

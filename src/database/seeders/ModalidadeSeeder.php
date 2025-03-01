<?php

namespace Database\Seeders;

use App\Models\Modalidade;
use App\Models\TipoEquipamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::factory()
            ->count(20)
            ->has(TipoEquipamento::factory()->count(2))
            ->create();
    }
}

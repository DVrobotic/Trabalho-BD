<?php

namespace Database\Seeders;

use App\Models\Patrocinador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatrocinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patrocinador::factory()->count(5)->create();
    }
}

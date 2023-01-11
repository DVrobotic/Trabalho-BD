<?php

namespace Database\Seeders;

use App\Models\Campeonato;
use App\Models\Emissora;
use App\Models\Patrocinador;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmissoraSeeder::class);
        $this->call(PatrocinadorSeeder::class);
        $this->call(ModalidadeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalidadeSeeder::class);
        $this->call(CampeonatoSeeder::class);
    }
}

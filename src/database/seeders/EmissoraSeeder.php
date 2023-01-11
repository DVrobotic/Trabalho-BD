<?php

namespace Database\Seeders;

use App\Models\Emissora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmissoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emissora::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipe::factory()->count(10)->create()->each(function ($equipe) {
            $equipe->jogadores()->sync(User::factory()->count(5)->create());
        });
    }
}

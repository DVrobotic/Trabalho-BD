<?php

namespace Database\Factories;

use App\Models\Campeonato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CampeonatoComGrupo>
 */
class CampeonatoComGrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tamanhoGrupo' => fake()->numberBetween(2, 20),
//            'campeonato_id' => Campeonato::factory()->create()->id,
        ];
    }
}

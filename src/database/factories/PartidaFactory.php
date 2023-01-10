<?php

namespace Database\Factories;

use App\Models\Localidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partida>
 */
class PartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
        [
            'tipo' => fake('pt_Br')->word(),
            'datahora' => fake()->dateTimeThisYear(),
            'localidade_id' => fake()->randomElement(Localidade::pluck('id')),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Modalidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campeonato>
 */
class CampeonatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $final = fake()->date();
        return
        [
            'nome' => fake('pt_BR')->word(),
            'inicio' => fake()->date(max: $final),
            'final' => $final,
            'modalidade_id' => fake()->randomElement(Modalidade::pluck('id')),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Localidade>
 */
class LocalidadeFactory extends Factory
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
            'nome' => fake('pt_BR')->city(),
            'tipo' => fake('pt_BR')->word(),
            'endereço' => fake('pt_BR')->address(),
            'porte' => fake()->numberBetween(1000, 50000),
        ];
    }
}

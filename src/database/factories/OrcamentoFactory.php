<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orcamento>
 */
class OrcamentoFactory extends Factory
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
            "gasto_localidade" => fake()->randomFloat(2, 0,100000),
            "gasto_premio" => fake()->randomFloat(2, 0,100000),
            "lucro_esperado" => fake()->randomFloat(2, 0,100000),
            "preco_ingresso" => fake()->randomFloat(2, 0,100000),
            "preco_transmissao" => fake()->randomFloat(2, 0,100000),
        ];
    }
}

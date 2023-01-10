<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Federacao>
 */
class FederacaoFactory extends Factory
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
            'Nome' => fake('pt_BR')->text(10),
            'Estado' => fake('pt_BR')->word(),
            'NomePresidente' => fake('pt_BR')->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Federacao;
use App\Models\Modalidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
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
            'nome' => fake('pt_BR')->word(),
            'federacao_id' => Federacao::factory()->create()->id,
        ];
    }
}

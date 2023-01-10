<?php

namespace Database\Factories;

use App\Models\TipoEquipamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipamento>
 */
class EquipamentoFactory extends Factory
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
            'tipo_equipamento_id' => fake()->randomElement(TipoEquipamento::pluck('id')),
            'nome' => fake('pt_BR')->word(),
            'modelo' => fake('pt_BR')->word(),
            'marca' => fake('pt_BR')->word(),
        ];
    }
}

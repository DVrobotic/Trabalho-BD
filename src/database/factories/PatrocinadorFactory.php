<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patrocinador>
 */
class PatrocinadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipo = fake()->randomElement(['0', '1']);
        return
        [
            'nome' => $tipo ? fake()->word() : fake('pt_Br')->name(),
            'identificacao' => $tipo ? fake('pt_BR')->cnpj : fake('pt_BR')->cpf,
            'tipoPessoa' => $tipo,
        ];
    }
}

<?php

namespace Database\Factories;

use Faker\Extension\Helper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'nome' => fake('pt_BR')->firstName(),
            'sobrenome' => fake('pt_BR')->lastName,
            'email' => fake('pt_BR')->unique()->email(),
            'senha' => hash::make(fake('pt_BR')->password()), // password
            'tipo' => fake()->randomElement([1,2]),
            'cpf' => fake('pt_BR')->cpf,
            'endereço' => fake('pt_BR')->address(),
        ];
    }
}

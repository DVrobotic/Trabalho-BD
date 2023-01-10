<?php

namespace Database\Factories;

use App\Models\Campeonato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playoff>
 */
class PlayoffFactory extends Factory
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
            'temRepescagem' => fake()->boolean(),
        ];
    }
}

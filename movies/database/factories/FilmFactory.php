<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'year' => $this->faker->numberBetween(1900, 2023),
            'minutes' => $this->faker->numberBetween(60, 180),
            'director_id' => User::factory(),
        ];
    }
}

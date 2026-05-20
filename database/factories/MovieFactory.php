<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_name' => fake()->sentence(2),
            'rating' => fake()->numberBetween(1, 10),
            'description' => fake()->paragraph(),
            'release_date' => fake()->date(),
            'category' => fake()->randomElement(['Action', 'Comedy', 'Drama', 'Sci-Fi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

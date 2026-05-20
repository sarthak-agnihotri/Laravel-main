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
        //php artisan make:factory MovieFactory
        //php artisan tinker to run the factory and insert data into database
        //> \App\Models\Movie::factory()->count(10)->create() random data for 10 movies
        return [
            'movie_name' => fake()->words(2, true),
            'rating' => fake()->numberBetween(1, 10),
            'description' => fake()->paragraph(),
            'release_date' => fake()->date(),
            'category' => fake()->randomElement(['Action', 'Comedy', 'Drama', 'Sci-Fi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

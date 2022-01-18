<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_id' => Movie::factory(),
            'name' => $this->faker->sentence(),
            'thumbnail' => $this->faker->sentence(),
        ];
    }
}

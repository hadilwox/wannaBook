<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(100),
            'like' => fake()->numberBetween(0, 100),
            'publication' => fake()->numberBetween(1920, 2024),
            'image' => fake()->text(10),
            'author_id' => fake()->numberBetween(int1: 1, int2: 5)
        ];
    }
}

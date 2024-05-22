<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(rand(1,3), true),
            'image' => $this->faker->url(),
            'price' => $this->faker->numberBetween(3, 5) * 3500,
            'description' => $this->faker->sentences(rand(4, 7), true),
        ];
    }
}

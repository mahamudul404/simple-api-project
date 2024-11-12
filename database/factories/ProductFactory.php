<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productName = $this->faker->text('10');
        return [
            'name' => $productName,
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 10000),
        ];
    }
}

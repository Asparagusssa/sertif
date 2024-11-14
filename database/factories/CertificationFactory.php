<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certification>
 */
class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paid = fake()->boolean('80');
        $price = $paid ? fake()->randomElement([50000, 90000, 150000]) : 0;

        return [
            'name' => fake('ru_RU')->company(),
            'url' => fake()->url(),
            'paid' => $paid,
            'price' => $price,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{

    public function definition(): array
    {
        $createdAt = fake()->dateTimeBetween('-2 years', 'now');
        $updatedAt = fake()->dateTimeBetween($createdAt, 'now');

        return [
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'created_at' => $createdAt,
            'updated_at' => $updatedAt
        ];
    }
}

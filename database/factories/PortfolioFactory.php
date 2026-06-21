<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'category' => fake()->randomElement(['LCD', 'Battery', 'Software', 'Hardware']),
            'before_image' => null,
            'after_image' => null,
            'description' => fake()->paragraph(2),
        ];
    }
}

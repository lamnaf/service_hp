<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'customer_name' => fake()->name(),
            'photo' => null,
            'rating' => fake()->numberBetween(4, 5),
            'message' => fake()->paragraph(2),
        ];
    }
}

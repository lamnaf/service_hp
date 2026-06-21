<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $title = fake()->randomElement([
            'Ganti LCD',
            'Ganti Battery',
            'Service IC Power',
            'Software Repair',
            'Service Kamera',
            'Charging Problem',
            'Ganti Touchscreen',
            'Service Motherboard',
            'Water Damage Repair',
            'Data Recovery',
        ]);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'icon' => 'fas fa-tools',
            'description' => fake()->paragraph(3),
            'price' => fake()->randomElement([100000, 150000, 200000, 250000, 350000, 500000]),
            'image' => null,
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            ['title' => 'iPhone 12 Pro Max', 'category' => 'LCD', 'description' => 'Penggantian LCD iPhone 12 Pro Max dengan kualitas original.'],
            ['title' => 'Samsung S23 Ultra', 'category' => 'LCD', 'description' => 'Perbaikan LCD retak pada Samsung S23 Ultra.'],
            ['title' => 'Xiaomi Note 12', 'category' => 'Battery', 'description' => 'Penggantian baterai Xiaomi Note 12 yang mengembung.'],
            ['title' => 'Oppo Reno 8', 'category' => 'Battery', 'description' => 'Service penggantian baterai Oppo Reno 8.'],
            ['title' => 'Vivo V21', 'category' => 'Software', 'description' => 'Mengatasi bootloop pada Vivo V21.'],
            ['title' => 'Samsung A52s', 'category' => 'Software', 'description' => 'Upgrade OS dan perbaikan software Samsung A52s.'],
            ['title' => 'iPhone 11', 'category' => 'Hardware', 'description' => 'Perbaikan IC power iPhone 11 mati total.'],
            ['title' => 'Realme 8 Pro', 'category' => 'Hardware', 'description' => 'Service charging problem Realme 8 Pro.'],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}

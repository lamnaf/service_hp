<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Ganti LCD',
                'slug' => 'ganti-lcd',
                'icon' => 'fas fa-mobile-alt',
                'description' => 'Layanan penggantian LCD untuk berbagai jenis smartphone dengan kualitas terbaik. Teknisi berpengalaman dan sparepart original.',
                'price' => 250000,
            ],
            [
                'title' => 'Ganti Battery',
                'slug' => 'ganti-battery',
                'icon' => 'fas fa-battery-full',
                'description' => 'Penggantian baterai HP yang cepat dan aman. Menggunakan baterai berkualitas tinggi dengan garansi service.',
                'price' => 150000,
            ],
            [
                'title' => 'Service IC Power',
                'slug' => 'service-ic-power',
                'icon' => 'fas fa-microchip',
                'description' => 'Perbaikan IC power pada motherboard smartphone. Solusi untuk HP yang mati total atau tidak bisa charging.',
                'price' => 350000,
            ],
            [
                'title' => 'Software Repair',
                'slug' => 'software-repair',
                'icon' => 'fas fa-code',
                'description' => 'Perbaikan masalah software seperti bootloop, hang logo, lupa password, update OS, dan instal ulang sistem.',
                'price' => 100000,
            ],
            [
                'title' => 'Service Kamera',
                'slug' => 'service-kamera',
                'icon' => 'fas fa-camera',
                'description' => 'Perbaikan kamera depan dan belakang yang buram, error, atau tidak berfungsi. Penggantian lensa kamera tersedia.',
                'price' => 200000,
            ],
            [
                'title' => 'Charging Problem',
                'slug' => 'charging-problem',
                'icon' => 'fas fa-plug',
                'description' => 'Mengatasi masalah charging lambat, tidak bisa charging, atau port charging longgar. Perbaikan port dan komponen terkait.',
                'price' => 150000,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

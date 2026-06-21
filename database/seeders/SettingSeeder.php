<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'business_name', 'value' => 'HP Service Pro'],
            ['key' => 'logo', 'value' => null],
            ['key' => 'address', 'value' => 'Jl. Teknologi No. 123, Jakarta Selatan'],
            ['key' => 'phone', 'value' => '021-12345678'],
            ['key' => 'whatsapp', 'value' => '6281234567890'],
            ['key' => 'instagram', 'value' => 'https://instagram.com/hpservicepro'],
            ['key' => 'facebook', 'value' => 'https://facebook.com/hpservicepro'],
            ['key' => 'meta_title', 'value' => 'HP Service Pro - Service HP Cepat & Bergaransi, Selesai 1 Hari'],
            ['key' => 'meta_description', 'value' => 'Perbaikan smartphone profesional oleh teknisi berpengalaman. Layanan ganti LCD, battery, IC power, dan software repair. Bergaransi!'],
            ['key' => 'open_hours', 'value' => 'Senin - Sabtu: 09:00 - 18:00'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}

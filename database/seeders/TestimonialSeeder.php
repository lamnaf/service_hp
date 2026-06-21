<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'Ahmad Rizki',
                'rating' => 5,
                'message' => 'Pelayanan sangat cepat dan profesional. HP saya yang mati total bisa hidup kembali dalam 1 hari. Teknisi ramah dan komunikatif.',
            ],
            [
                'customer_name' => 'Siti Nurhaliza',
                'rating' => 5,
                'message' => 'Ganti LCD iPhone saya dengan harga terjangkau. Kualitas LCD bagus dan bergaransi. Sangat recommended!',
            ],
            [
                'customer_name' => 'Budi Santoso',
                'rating' => 4,
                'message' => 'Service battery HP Oppo saya. Prosesnya cepat, hanya 2 jam selesai. Harganya pun transparan tanpa biaya tersembunyi.',
            ],
            [
                'customer_name' => 'Dian Permata',
                'rating' => 5,
                'message' => 'Sudah 3 kali service disini, hasilnya selalu memuaskan. Teknisinya berpengalaman dan tahu persis apa yang rusak.',
            ],
            [
                'customer_name' => 'Rudi Hermawan',
                'rating' => 5,
                'message' => 'HP Samsung saya bermasalah dengan charging. Setelah dicek ada masalah di port. Langsung diperbaiki dan sekarang normal kembali. Thanks!',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}

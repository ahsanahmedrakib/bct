<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            'gallery_10_1.jpg',
            'gallery_10_2.jpg',
            'gallery_10_3.jpg',
            'gallery_10_4.jpg',
            'gallery_10_5.jpg',
            'gallery_10_6.jpg',
            'gallery_10_7.jpg',
            'gallery_10_8.jpg',
            'gallery_10_9.jpg',
            'gallery_11.jpg',
            'gallery_11_1.jpg',
        ];

        foreach ($images as $index => $image) {
            GalleryImage::firstOrCreate(
                ['image' => '/images/pages/gallery/'.$image],
                [
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
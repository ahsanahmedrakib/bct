<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            ['subtitle' => 'Reliable IT. Real-Time Results.', 'title' => 'Comprehensive IT Solutions for Digital World', 'description' => 'Our IT solutions combine modern technologies, expert strategies, and reliable services to meet the evolving technological needs of businesses and organizations.', 'image' => '/images/home/hero/hero_1.jpg'],
            ['subtitle' => 'Design. Develop. Deliver.', 'title' => 'Your Vision, Our Web And App Mastery', 'description' => 'Transform your ideas into powerful digital experiences with innovative web and app solutions designed to streamline operations, improve efficiency, and drive growth.', 'image' => '/images/home/hero/hero_2.jpg'],
            ['subtitle' => 'Code. Create. Conquer.', 'title' => 'Unlocking the Future with Digital Solutions', 'description' => 'Embrace digital transformation with smart technologies and innovative solutions that improve business processes, enhance customer experiences, and create lasting growth.', 'image' => '/images/home/hero/hero_3.jpg'],
            ['subtitle' => 'Internet', 'title' => 'BCT & Business Internet', 'description' => 'High-speed, redundant pipelines keeping your office fast and reliable.', 'image' => '/images/home/hero/hero_4.jpg'],
            ['subtitle' => 'Cyber Security', 'title' => 'Cyber Security & Data Protection', 'description' => 'Proactive real-time monitoring and defenses to keep your data safe.', 'image' => '/images/home/hero/hero_5.jpg'],
            ['subtitle' => 'Cloud Services', 'title' => 'Microsoft 365 & Cloud Services', 'description' => 'Secure email, collaboration and cloud services — set up the right way.', 'image' => '/images/home/hero/hero_6.jpg'],
        ];

        foreach ($slides as $index => $slide) {
            HeroSlide::firstOrCreate(
                ['title' => $slide['title']],
                [
                    'subtitle' => $slide['subtitle'],
                    'description' => $slide['description'],
                    'image' => $slide['image'],
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}

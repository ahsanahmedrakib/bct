<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'image' => '/images/home/blog/blog-01.jpg',
                'category' => 'CLOUD',
                'title' => 'Cloud solutions for scalable IT infrastructure.',
                'description' => '<p>Cloud computing has transformed how businesses build and scale their IT infrastructure. From shared storage to on-demand compute, organisations can now provision resources in minutes instead of months.</p><p>With the right cloud strategy, businesses reduce capital expenditure, improve resilience and unlock the flexibility needed to grow. Explore how managed cloud services can keep your operations agile.</p>',
                'author' => 'Admin',
                'published_date' => '2026-04-09',
            ],
            [
                'image' => '/images/home/blog/blog-02.jpg',
                'category' => 'SOFTWARE',
                'title' => 'Innovative software solutions for businesses.',
                'description' => '<p>Modern software streamlines operations, automates repetitive tasks and delivers insights that drive better decisions. Choosing the right tools makes all the difference.</p><p>Whether it is custom development or integrating proven platforms, the goal is the same: software that works for your people and your goals.</p>',
                'author' => 'Admin',
                'published_date' => '2026-04-09',
            ],
            [
                'image' => '/images/home/blog/blog-03.jpg',
                'category' => 'CYBERSAFE',
                'title' => 'Practical tips for secure it systems checklist.',
                'description' => '<p>Security is not a one-off project — it is an ongoing process. A practical IT security checklist keeps employees safe, systems patched and data protected.</p><p>Start with the fundamentals: strong passwords, multi-factor authentication, regular backups and keeping software up to date.</p>',
                'author' => 'Admin',
                'published_date' => '2026-04-09',
            ],
        ];

        foreach ($posts as $index => $post) {
            BlogPost::firstOrCreate(
                ['title' => $post['title']],
                [
                    'category' => $post['category'],
                    'image' => $post['image'],
                    'description' => $post['description'],
                    'author' => $post['author'],
                    'published_date' => $post['published_date'],
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
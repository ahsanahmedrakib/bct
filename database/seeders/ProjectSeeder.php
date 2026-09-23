<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['title' => 'Rizqin Abd', 'url' => 'https://rizqinabd.com', 'category' => 'Fashion & Retail', 'image' => '/images/web/portfolio/rizqinabd.png'],
            ['title' => 'Blue Arc Sourcing', 'url' => 'https://bluearcsourcing.net', 'category' => 'Business & Corporate', 'image' => '/images/web/portfolio/bluearcsourcing.png'],
            ['title' => 'Mahatex BD', 'url' => 'https://mahatexbd.com', 'category' => 'Textile & Garments', 'image' => '/images/web/portfolio/mahatexbd.png'],
            ['title' => 'Ahead Solar', 'url' => 'https://aheadsolarbd.com', 'category' => 'IT & Engineering', 'image' => '/images/web/portfolio/aheadsolarbd.png'],
            ['title' => 'Bismillah Computer & Technology', 'url' => 'https://bct.com.bd', 'category' => 'IT & Engineering', 'image' => '/images/web/portfolio/bct.png'],
            ['title' => 'TS Network', 'url' => 'https://tsnetwork.net.bd', 'category' => 'IT & Engineering', 'image' => '/images/web/portfolio/tsnetwork.png'],
            ['title' => 'Trax Textile', 'url' => 'https://traxtextile.com', 'category' => 'Textile & Garments', 'image' => '/images/web/portfolio/traxtextile.png'],
            ['title' => 'Texman BD', 'url' => 'https://texman-bd.com', 'category' => 'Textile & Garments', 'image' => '/images/web/portfolio/texman.png'],
            ['title' => 'Limbs Engineering', 'url' => 'https://limbsengineering.com', 'category' => 'IT & Engineering', 'image' => '/images/web/portfolio/limbsengineering.png'],
            ['title' => 'Ignite Global Ltd', 'url' => 'https://ignitegloballtd.com', 'category' => 'Business & Corporate', 'image' => '/images/web/portfolio/ignitegloballtd.png'],
            ['title' => 'Flatknit Sourcing', 'url' => 'https://flatknitsourcing.com', 'category' => 'Textile & Garments', 'image' => '/images/web/portfolio/flatknitsourcing.png'],
            ['title' => 'BD Paradise', 'url' => 'https://bdparadise.com', 'category' => 'Healthcare & Hospitality', 'image' => '/images/web/portfolio/bdparadise.png'],
            ['title' => 'RM Nursing BD', 'url' => 'https://rmnursingbd.com', 'category' => 'Healthcare & Hospitality', 'image' => '/images/web/portfolio/rmnursingbd.png'],
            ['title' => 'Brand Tex BD', 'url' => 'https://brandtexbd.com', 'category' => 'Textile & Garments', 'image' => '/images/web/portfolio/brandtexbd.png'],
            ['title' => 'Design Hub BD', 'url' => 'https://designhub-bd.com', 'category' => 'Business & Corporate', 'image' => '/images/web/portfolio/designhubbd.png'],
            ['title' => 'Lenient Fashion', 'url' => 'https://lenientfashion.com', 'category' => 'Fashion & Retail', 'image' => '/images/web/portfolio/lenientfashion.png'],
        ];

        foreach ($projects as $project) {
            $category = Category::firstOrCreate(['name' => $project['category']], ['seed' => true]);
            Project::firstOrCreate(
                ['title' => $project['title']],
                [
                    'url' => $project['url'],
                    'category_id' => $category->id,
                    'image' => $project['image'],
                    'seed' => true,
                ]
            );
        }
    }
}
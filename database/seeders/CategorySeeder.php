<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Textile & Garments',
            'Fashion & Retail',
            'IT & Engineering',
            'Business & Corporate',
            'Healthcare & Hospitality',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(['name' => $name], ['seed' => true]);
        }
    }
}
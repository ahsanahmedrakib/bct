<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@bct.com',
            'password' => 'admin123',
        ]);

        $this->call(CategorySeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TeamMemberSeeder::class);
        $this->call(HeroSlideSeeder::class);
        $this->call(MarqueeItemSeeder::class);
        $this->call(GalleryImageSeeder::class);
        $this->call(BlogPostSeeder::class);
        $this->call(PricingPlanSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(FaqSeeder::class);
    }
}

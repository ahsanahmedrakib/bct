<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Tamzid Hasan', 'role' => 'IT Consultant', 'label' => 'Consultant', 'image' => '/images/home/team/thp.png'],
            ['name' => 'Tanzim Hasan Anik', 'role' => 'Director', 'label' => 'Director', 'image' => '/images/home/team/tha.jpg'],
            ['name' => 'Nazmul Apple', 'role' => 'System Engineer', 'label' => 'Engineer', 'image' => '/images/home/team/na.jpeg'],
            ['name' => 'Habibullah Mezbah', 'role' => 'Web Developer', 'label' => 'Developer', 'image' => '/images/home/team/hm.png'],
            ['name' => 'Ahsan Ahmed Rakib', 'role' => 'Software Engineer', 'label' => 'Engineer', 'image' => '/images/home/team/aar.jpg'],
            ['name' => 'Md. Tarikul Islam', 'role' => 'Technical Support Engineer', 'label' => 'Engineer', 'image' => '/images/home/team/ti.jfif'],
            ['name' => 'Rizwan Sadat', 'role' => 'IT Executive', 'label' => 'Executive', 'image' => '/images/home/team/rs.jpeg'],
            ['name' => 'Chandra Barai', 'role' => 'Marketing Executive & Customer Support', 'label' => 'Executive', 'image' => '/images/home/team/cb.jpeg'],
        ];

        foreach ($members as $index => $member) {
            TeamMember::firstOrCreate(
                ['name' => $member['name']],
                [
                    'role' => $member['role'],
                    'label' => $member['label'],
                    'image' => $member['image'],
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
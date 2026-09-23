<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic Package',
                'price' => '৳199.00',
                'period' => '/Monthly',
                'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                'featured' => false,
            ],
            [
                'name' => 'Standard Package',
                'price' => '৳299.00',
                'period' => '/Monthly',
                'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                'featured' => true,
            ],
            [
                'name' => 'Premium Package',
                'price' => '৳399.00',
                'period' => '/Monthly',
                'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                'featured' => false,
            ],
        ];

        foreach ($plans as $index => $plan) {
            PricingPlan::firstOrCreate(
                ['name' => $plan['name']],
                [
                    'price' => $plan['price'],
                    'period' => $plan['period'],
                    'features' => $plan['features'],
                    'featured' => $plan['featured'],
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\MarqueeItem;
use Illuminate\Database\Seeder;

class MarqueeItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'NETWORK SETUP',
            'SOLUTIONS',
            'CONSULTING',
            'IT SERVICES',
        ];

        foreach ($items as $index => $text) {
            MarqueeItem::firstOrCreate(
                ['text' => $text],
                [
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How can IT solutions benefit my business?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'How do I know which IT solution is right for my business?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'What is your approach to risk management?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'What is IT Managed Services, and how does it work?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'How do you ensure data security in IT solutions?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'Can you integrate IT solutions with my existing systems?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
            [
                'question' => 'How do you optimize IT infrastructure for scalability?',
                'answer' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
            ],
        ];

        foreach ($faqs as $index => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                array_merge($faq, [
                    'seed' => true,
                    'sort_order' => $index + 1,
                ])
            );
        }
    }
}

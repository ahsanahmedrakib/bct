@extends('layouts.app')

@section('title', 'FAQs - Bismillah Computer & Technology')
@section('description', 'Frequently Asked Questions about Bismillah Computer & Technology IT solutions and services.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'FAQs', 'eyebrow' => 'FAQ'])

    {{-- FAQ Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16">
                {{-- Left Side: Info --}}
                <div>
                    <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Need Any
                        Help?</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-heading mb-6">Frequently Asked Question</h2>
                    <p class="text-body-muted text-lg mb-4">If you have an issue or question that requires immediate
                        assistance, please <a href="{{ route('contact') }}"
                            class="text-brand-blue font-semibold hover:underline">contact us</a> and our team will get back
                        to you as soon as possible.</p>
                    <p class="text-sm text-body-muted italic">Please allow 06 – 12 business days from the time your package
                        arrives back to us for a refund to be issued.</p>

                    <a href="{{ route('contact') }}"
                        class="mt-8 inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                        <i class="fa-solid fa-envelope"></i>
                        Contact Us
                    </a>
                </div>

                {{-- Right Side: Accordion --}}
                <div class="space-y-4">
                    @php
                        $faqs = $faqs ?? [
                            'How can IT solutions benefit my business?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do I know which IT solution is right for my business?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'What is your approach to risk management?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'What is IT Managed Services, and how does it work?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do you ensure data security in IT solutions?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'Can you integrate IT solutions with my existing systems?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do you optimize IT infrastructure for scalability?' =>
                                'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                        ];
                    @endphp
                    @foreach ($faqs as $question => $answer)
                        <div class="bg-brand-light-bg rounded-xl overflow-hidden" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between p-6 text-left hover:bg-brand-light-bg/80 transition-colors">
                                <span class="font-semibold text-heading pr-4">{{ $question }}</span>
                                <svg class="w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse x-cloak>
                                <div class="px-6 pb-6 text-body-muted leading-relaxed">{{ $answer }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

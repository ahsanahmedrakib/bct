@extends('layouts.app')

@section('title', 'FAQs | Bismillah Computer & Technology')
@section('description', 'Frequently Asked Questions about Bismillah Computer & Technology IT solutions and services.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'FAQs', 'eyebrow' => 'FAQ'])

    {{-- FAQ Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16">
                {{-- Left Side: Info --}}
                <div>
                    <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Need Any Help?</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-heading mb-6">Frequently Asked Question</h2>
                    <p class="text-body-muted text-lg mb-6">If you have an issue or question that requires immediate assistance, you can click the button below to chat live with a Customer Service representative.</p>
                    <p class="text-sm text-body-muted mb-8 italic">Please allow 06 – 12 business days from the time your package arrives back to us for a refund to be issued.</p>

                    {{-- Contact Form --}}
                    <form class="space-y-4" x-data="{ submitting: false }" @submit.prevent="submitting = true">
                        <input type="text" placeholder="First Name" class="w-full px-4 py-3 rounded-xl border border-brand-subtle-border focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all" />
                        <textarea rows="4" placeholder="Your Message" class="w-full px-4 py-3 rounded-xl border border-brand-subtle-border focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all resize-none"></textarea>
                        <button type="submit" class="bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                            Ask Question Now
                        </button>
                    </form>
                </div>

                {{-- Right Side: Accordion --}}
                <div class="space-y-4">
                    @php
                        $faqs = [
                            'How can IT solutions benefit my business?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do I know which IT solution is right for my business?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'What is your approach to risk management?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'What is IT Managed Services, and how does it work?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do you ensure data security in IT solutions?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'Can you integrate IT solutions with my existing systems?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                            'How do you optimize IT infrastructure for scalability?' => 'In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',
                        ];
                    @endphp
                    @foreach ($faqs as $question => $answer)
                        <div class="bg-brand-light-bg rounded-xl overflow-hidden" x-data="{ open: false }">
                            <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left hover:bg-brand-light-bg/80 transition-colors">
                                <span class="font-semibold text-heading pr-4">{{ $question }}</span>
                                <svg class="w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
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

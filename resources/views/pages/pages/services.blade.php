@extends('layouts.app')

@section('title', 'Our Services | Bismillah Computer & Technology')
@section('description', 'Explore our comprehensive range of IT services including web development, cloud consulting, IT
    strategy, and more.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Our Services', 'eyebrow' => 'Our Services'])

    {{-- Services Area --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16 max-w-3xl mx-auto">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">What We're
                    Offering</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading mb-6">Dealing in all professional IT services
                </h2>
                <p class="text-body-muted text-lg">IT solutions refer to a broad range of services and technologies designed
                    to address specific business needs, streamline operations, and drive growth.</p>
            </div>
            <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $services = [
                        [
                            'title' => 'IT Strategy & Planning',
                            'image' => '/images/pages/services/sv-1.jpg',
                            'icon' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z',
                            'desc' =>
                                'Assessing current IT infrastructure and aligning it with business goals. Developing a roadmap for technology adoption and growth.',
                        ],
                        [
                            'title' => 'Web Development',
                            'image' => '/images/pages/services/sv-2.jpg',
                            'icon' =>
                                'M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z',
                            'desc' =>
                                'Designing and building fast, secure, and scalable websites tailored to your brand and business goals.',
                        ],
                        [
                            'title' => 'Cloud Consulting',
                            'image' => '/images/pages/services/sv-3.jpg',
                            'icon' =>
                                'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z',
                            'desc' =>
                                'Planning, migrating, and optimising your infrastructure on the cloud for performance and cost efficiency.',
                        ],
                        [
                            'title' => 'Machine Learning',
                            'image' => '/images/pages/services/sv-4.jpg',
                            'icon' =>
                                'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z',
                            'desc' =>
                                'Building AI-driven models and intelligent automation to extract insights and drive smarter decisions.',
                        ],
                        [
                            'title' => 'House Renovation',
                            'image' => '/images/pages/services/sv-5.jpg',
                            'icon' =>
                                'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25',
                            'desc' =>
                                'Complete planning and execution of renovation projects with expert management and quality delivery.',
                        ],
                        [
                            'title' => 'Material Supply',
                            'image' => '/images/pages/services/sv-6.jpg',
                            'icon' =>
                                'M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z',
                            'desc' =>
                                'Reliable supply of high-quality materials to keep your projects on schedule and within budget.',
                        ],
                        [
                            'title' => 'General Contracting',
                            'image' => '/images/pages/services/sv-7.jpg',
                            'icon' => 'M11.42 15.17l-5.1-5.1m0 0L11.42 4.97m-5.1 5.1H21M3 3h.01M3 21h.01',
                            'desc' =>
                                'End-to-end management of construction and delivery projects from concept to completion.',
                        ],
                        [
                            'title' => 'Architecture Design',
                            'image' => '/images/pages/services/sv-8.jpg',
                            'icon' =>
                                'M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3H21m-3.75 3H21',
                            'desc' =>
                                'Creative, functional architectural designs that bring your vision to life with precision and style.',
                        ],
                    ];
                @endphp
                @foreach ($services as $service)
                    <div
                        class="bg-brand-light-bg rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300 group text-center flex flex-col">
                        <div class="relative aspect-4/3 bg-brand-blue/5 overflow-hidden">
                            @if (!empty($service['image']))
                                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-14 h-14 text-brand-blue/40" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $service['icon'] }}" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-8 flex-1">
                            <h3 class="text-lg font-bold text-heading mb-3">{{ $service['title'] }}</h3>
                            <p class="text-sm text-body-muted leading-relaxed">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 bg-brand-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Have any project to work with us</h2>
                <p class="text-white/60 text-lg mb-8">Grab up to 35% off — Limited time offer, don't miss the opportunity
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                    Contact With Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.app')

@section('title', 'Our Portfolio | Bismillah Computer & Technology')
@section('description',
    'Explore our collection of websites designed and developed for businesses across various
    industries.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Our <span
                        class="text-brand-blue">Portfolio</span></h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Explore our collection
                    of websites designed and developed for businesses across various industries. Each project showcases our
                    commitment to quality, creativity, and delivering results for our clients.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Our Portfolio" loading="lazy" class="rounded-lg" src="/images/web/web.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="portfolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Our Portfolio</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @php
                    $portfolios = [
                        [
                            'title' => 'Ahead Solar BD',
                            'img' => '/images/web/portfolio/aheadsolar.png',
                            'href' => 'https://www.aheadsolarbd.com',
                        ],
                        [
                            'title' => 'Bismillah IT',
                            'img' => '/images/web/portfolio/bismillah-it.png',
                            'href' => 'https://it-solution-theta.com',
                        ],
                    ];
                @endphp
                @foreach ($portfolios as $portfolio)
                    <a href="{{ $portfolio['href'] }}" target="_blank"
                        class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-sm border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300">
                        <div class="relative h-80 w-full overflow-hidden">
                            <img src="{{ $portfolio['img'] }}" alt="{{ $portfolio['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-xl text-brand-blue mb-3">{{ $portfolio['title'] }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="what-we-create">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">What We Create</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $categories = [
                        [
                            'title' => 'Business Websites',
                            'desc' =>
                                'Professional corporate websites that establish credibility and drive growth for businesses of all sizes.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />',
                        ],
                        [
                            'title' => 'eCommerce Stores',
                            'desc' =>
                                'Feature-rich online stores designed to maximize conversions and provide a seamless shopping experience.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />',
                        ],
                        [
                            'title' => 'Portfolio Sites',
                            'desc' =>
                                'Creative portfolio websites that showcase your work and help you stand out from the competition.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v14.25a1.5 1.5 0 001.5 1.5z" />',
                        ],
                        [
                            'title' => 'Responsive Design',
                            'desc' =>
                                'Every website we build looks and performs flawlessly on all devices, from desktop to mobile.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'User Experience',
                            'desc' =>
                                'Intuitive navigation and engaging interfaces designed to keep visitors on your site longer.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                        ],
                        [
                            'title' => 'Quality Assurance',
                            'desc' =>
                                'Thorough testing and quality checks to ensure your website launches without a hitch.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($categories as $category)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $category['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $category['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $category['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @php
                    $stats = [
                        ['number' => '100+', 'label' => 'Projects Delivered'],
                        ['number' => '50+', 'label' => 'Happy Clients'],
                        ['number' => '5+', 'label' => 'Years Experience'],
                        ['number' => '98%', 'label' => 'Client Satisfaction'],
                    ];
                @endphp
                @foreach ($stats as $stat)
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-2">{{ $stat['number'] }}</div>
                        <div class="text-slate-600 text-sm">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center order-1 lg:order-2">
                <img src="/images/web/portfolio/portfolio.png" alt="Working seamlessly online" class="w-full max-w-md"
                    loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up order-1 lg:order-2 space-y-6">
                <h2 class="text-3xl font-bold text-blue-900">See What We Can Build For You</h2>
                <p class="text-slate-600 leading-relaxed">Every project in our portfolio represents a unique challenge
                    solved with creativity and technical expertise. We take pride in delivering websites that not only look
                    great but also achieve measurable results for our clients.</p>
                <p class="text-slate-600 leading-relaxed">Whether you need a simple business website or a complex eCommerce
                    platform, our team has the skills and experience to bring your vision to life.</p>
                <a href="/contact" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    Start Your Project
                </a>
            </div>
        </div>
    </section>


@endsection

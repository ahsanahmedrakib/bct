@extends('layouts.app')

@section('title', 'Portfolio | Bismillah Computer & Technology')
@section('description',
    'Explore our portfolio of websites designed and developed for businesses across various
    industries.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-356 mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Our
                    <span class="text-blue-600 block mt-2">Portfolio</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Explore our collection
                    of websites designed and developed for businesses across various industries.</p>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">Each project
                    showcases our commitment to quality, creativity, and delivering results for our clients.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Portfolio" src="/images/web/web.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ==================== PORTFOLIO ==================== --}}
    <section class="py-20 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Our Work</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Transforming Ideas into Digital Experiences
                </h2>
            </div>

            <div x-data="{ active: 'all' }">
                {{-- Filter Buttons --}}
                <div class="reveal reveal-fade-up flex flex-wrap items-center justify-center gap-3 mb-12">
                    @php
                        $filters = [
                            'Textile & Garments',
                            'Fashion & Retail',
                            'IT & Engineering',
                            'Business & Corporate',
                            'Healthcare & Hospitality',
                        ];
                    @endphp
                    <button @click="active = 'all'"
                        :class="active === 'all' ? 'bg-brand-blue text-white shadow-md' :
                            'bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white'"
                        class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">All</button>
                    @foreach ($filters as $filter)
                        <button @click="active = '{{ $filter }}'"
                            :class="active === '{{ $filter }}' ? 'bg-brand-blue text-white shadow-md' :
                                'bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white'"
                            class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">{{ $filter }}</button>
                    @endforeach
                </div>

                <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $portfolio = [
                            [
                                'title' => 'Rizqin Abd',
                                'url' => 'https://rizqinabd.com',
                                'category' => 'Fashion & Retail',
                                'image' => '/images/web/portfolio/rizqinabd.png',
                            ],
                            [
                                'title' => 'Blue Arc Sourcing',
                                'url' => 'https://bluearcsourcing.net',
                                'category' => 'Business & Corporate',
                                'image' => '/images/web/portfolio/bluearcsourcing.png',
                            ],
                            [
                                'title' => 'Mahatex BD',
                                'url' => 'https://mahatexbd.com',
                                'category' => 'Textile & Garments',
                                'image' => '/images/web/portfolio/mahatexbd.png',
                            ],
                            [
                                'title' => 'Ahead Solar',
                                'url' => 'https://aheadsolarbd.com',
                                'category' => 'IT & Engineering',
                                'image' => '/images/web/portfolio/aheadsolarbd.png',
                            ],
                            [
                                'title' => 'Bismillah Computer & Technology',
                                'url' => 'https://bct.com.bd',
                                'category' => 'IT & Engineering',
                                'image' => '/images/web/portfolio/bct.png',
                            ],
                            [
                                'title' => 'TS Network',
                                'url' => 'https://tsnetwork.net.bd',
                                'category' => 'IT & Engineering',
                                'image' => '/images/web/portfolio/tsnetwork.png',
                            ],
                            [
                                'title' => 'Trax Textile',
                                'url' => 'https://traxtextile.com',
                                'category' => 'Textile & Garments',
                                'image' => '/images/web/portfolio/traxtextile.png',
                            ],
                            [
                                'title' => 'Texman BD',
                                'url' => 'https://texman-bd.com',
                                'category' => 'Textile & Garments',
                                'image' => '/images/web/portfolio/texman.png',
                            ],
                            [
                                'title' => 'Limbs Engineering',
                                'url' => 'https://limbsengineering.com',
                                'category' => 'IT & Engineering',
                                'image' => '/images/web/portfolio/limbsengineering.png',
                            ],
                            [
                                'title' => 'Ignite Global Ltd',
                                'url' => 'https://ignitegloballtd.com',
                                'category' => 'Business & Corporate',
                                'image' => '/images/web/portfolio/ignitegloballtd.png',
                            ],
                            [
                                'title' => 'Flatknit Sourcing',
                                'url' => 'https://flatknitsourcing.com',
                                'category' => 'Textile & Garments',
                                'image' => '/images/web/portfolio/flatknitsourcing.png',
                            ],
                            [
                                'title' => 'BD Paradise',
                                'url' => 'https://bdparadise.com',
                                'category' => 'Healthcare & Hospitality',
                                'image' => '/images/web/portfolio/bdparadise.png',
                            ],
                            [
                                'title' => 'RM Nursing BD',
                                'url' => 'https://rmnursingbd.com',
                                'category' => 'Healthcare & Hospitality',
                                'image' => '/images/web/portfolio/rmnursingbd.png',
                            ],
                            [
                                'title' => 'Brand Tex BD',
                                'url' => 'https://brandtexbd.com',
                                'category' => 'Textile & Garments',
                                'image' => '/images/web/portfolio/brandtexbd.png',
                            ],
                            [
                                'title' => 'Design Hub BD',
                                'url' => 'https://designhub-bd.com',
                                'category' => 'Business & Corporate',
                                'image' => '/images/web/portfolio/designhubbd.png',
                            ],
                            [
                                'title' => 'Lenient Fashion',
                                'url' => 'https://lenientfashion.com',
                                'category' => 'Fashion & Retail',
                                'image' => '/images/web/portfolio/lenientfashion.png',
                            ],
                        ];
                    @endphp
                    @foreach ($portfolio as $item)
                        <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer"
                            x-show="active === 'all' || active === '{{ $item['category'] }}'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="group relative overflow-hidden rounded-2xl cursor-pointer">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-500" />
                            <div
                                class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <div>
                                    <span class="text-brand-blue text-sm font-semibold">{{ $item['category'] }}</span>
                                    <h3 class="text-xl font-bold text-white mt-1">{{ $item['title'] }}</h3>
                                    <span class="text-white/70 text-sm mt-2 inline-flex items-center gap-1">
                                        {{ $item['url'] }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
                                            <path d="M15 3h6v6"></path>
                                            <path d="M10 14 21 3"></path>
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

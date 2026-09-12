@extends('layouts.app')

@section('title', 'Blogs | Bismillah Computer & Technology')
@section('description', 'Stay updated with the latest insights, tips, and news from Bismillah Computer & Technology on cloud, software, cyber security, and more.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Our Blogs', 'eyebrow' => 'Blogs'])

    {{-- Blogs Grid --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $blogs = [
                    [
                        'image' => '/images/home/blog/blog-01.jpg',
                        'category' => 'CLOUD',
                        'title' => 'Cloud solutions for scalable IT infrastructure.',
                        'day' => '09',
                        'month' => 'APR',
                        'author' => 'Admin',
                    ],
                    [
                        'image' => '/images/home/blog/blog-02.jpg',
                        'category' => 'SOFTWARE',
                        'title' => 'Innovative software solutions for businesses.',
                        'day' => '09',
                        'month' => 'APR',
                        'author' => 'Admin',
                    ],
                    [
                        'image' => '/images/home/blog/blog-03.jpg',
                        'category' => 'CYBERSAFE',
                        'title' => 'Practical tips for secure it systems checklist.',
                        'day' => '09',
                        'month' => 'APR',
                        'author' => 'Admin',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($blogs as $b)
                    <article
                        class="group relative flex flex-col h-full bg-white rounded-2xl shadow-[0_4px_25px_-5px_rgba(0,0,0,0.04)] duration-300 outline-none overflow-hidden border border-blue-200 hover:border-blue-400 hover:shadow-lg hover:-translate-y-1 transition-all">
                        <div class="relative w-full aspect-4/3 bg-gray-100 overflow-hidden">
                            <img src="{{ $b['image'] }}" alt="{{ $b['title'] }}" loading="lazy"
                                class="object-cover transition-transform duration-500 group-hover:scale-105 w-full h-full" />
                            <div
                                class="absolute bottom-4 left-4 z-20 flex flex-col items-center justify-center bg-brand-secondary text-white w-16 h-16 rounded-xl shadow-lg">
                                <span
                                    class="text-lg font-black tracking-tight leading-none">{{ $b['day'] }}</span>
                                <span
                                    class="text-[10px] font-bold tracking-wider uppercase mt-0.5">{{ $b['month'] }}</span>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 p-6 sm:p-8 pt-8">
                            <span
                                class="text-xs font-bold text-brand-secondary tracking-wider uppercase mb-3">{{ $b['category'] }}</span>
                            <h3
                                class="text-xl font-bold text-gray-900 leading-snug tracking-tight transition-colors cursor-pointer mb-6 hover:text-brand-blue">
                                {{ $b['title'] }}</h3>
                            <div
                                class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between text-sm text-gray-500 font-medium">
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="text-brand-blue/60">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span>{{ $b['author'] }}</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="text-brand-blue/60">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22z"></path>
                                    </svg>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

@endsection

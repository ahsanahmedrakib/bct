@extends('layouts.app')

@section('title', 'Team Members | Bismillah Computer & Technology')
@section('description', 'Meet our expert team members at Bismillah Computer & Technology.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Team Members', 'eyebrow' => 'Our Team'])

    {{-- ======================== OUR TEAM ======================== --}}
    <section class="bg-white py-16 px-4 sm:px-6 lg:px-8 font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal fade-up text-center max-w-2xl mx-auto mb-16">
                <span class="inline-flex items-center gap-3 text-theme-blue text-lg sm:text-xl font-medium tracking-wide">
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-border"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-blue"></span></span>
                    <span class="font-bold uppercase">Our Team</span>
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-blue"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-border"></span></span>
                </span>
                <h2
                    class="text-3xl sm:text-4xl md:text-[44px] xl:text-5xl font-bold text-theme-navy tracking-tight leading-tight mt-4">
                    Meet our expert team members</h2>
            </div>
            @php
                $team = [
                    [
                        'name' => 'Tamzid Hasan',
                        'role' => 'IT Consultant',
                        'label' => 'Consultant',
                        'image' => '/images/home/team/thp.png',
                    ],
                    [
                        'name' => 'Tanzim Hasan Anik',
                        'role' => 'Director',
                        'label' => 'Director',
                        'image' => '/images/home/team/tha.jpg',
                    ],
                    [
                        'name' => 'Nazmul Apple',
                        'role' => 'System Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/na.jpeg',
                    ],
                    [
                        'name' => 'Habibullah Mezbah',
                        'role' => 'Web Developer',
                        'label' => 'Developer',
                        'image' => '/images/home/team/hm.png',
                    ],
                    [
                        'name' => 'Ahsan Ahmed Rakib',
                        'role' => 'Software Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/aar.jpg',
                    ],
                    [
                        'name' => 'Md. Tarikul Islam',
                        'role' => 'Technical Support Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/ti.jfif',
                    ],
                    [
                        'name' => 'Rizwan Sadat',
                        'role' => 'IT Executive',
                        'label' => 'Executive',
                        'image' => '/images/home/team/rs.jpeg',
                    ],
                    [
                        'name' => 'Chandra Barai',
                        'role' => 'Marketing Executive & Customer Support',
                        'label' => 'Executive',
                        'image' => '/images/home/team/cb.jpeg',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($team as $index => $member)
                    <div class="reveal fade-up">
                        <div class="group cursor-pointer flex flex-col h-full">
                            <div class="relative w-full aspect-4/5 rounded-xl bg-gray-100">
                                <div class="absolute inset-0 rounded-xl overflow-hidden">
                                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                        class="object-cover transition-transform duration-500 group-hover:scale-105 w-full h-full"
                                        loading="lazy" />
                                    <div
                                        class="absolute inset-0 bg-linear-to-t from-dark-hero/90 via-dark-hero/20 to-transparent transition-opacity duration-300">
                                    </div>
                                </div>
                                <div class="absolute -right-4 bottom-1 select-none pointer-events-none">
                                    <span class="text-5xl font-bold tracking-normal uppercase text-white"
                                        style="writing-mode:vertical-rl">{{ $member['label'] }}</span>
                                </div>
                            </div>
                            <div class="mt-5 space-y-1">
                                <p class="text-[13px] font-semibold text-gray-500 tracking-wide">/{{ $member['role'] }}/
                                </p>
                                <h3
                                    class="text-xl font-bold text-dark-hero transition-colors duration-300 group-hover:text-accent-orange">
                                    {{ $member['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
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

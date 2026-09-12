@extends('layouts.app')

@section('title', 'Case Studies | Bismillah Computer & Technology')
@section('description', 'Explore our case studies showing how we transform ideas into innovations for our clients.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Case Studies', 'eyebrow' => 'Case Studies'])

    {{-- Case Studies --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Case Studies</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Transforming Ideas into Innovations</h2>
            </div>

            <div x-data="{ active: 'all' }">
                {{-- Filter Buttons --}}
                <div class="reveal reveal-fade-up flex flex-wrap items-center justify-center gap-3 mb-12">
                    @php
                        $filters = ['Development', 'Woo Commerce', 'CRM Solutions', 'Web Design', 'IT Support'];
                    @endphp
                    <button @click="active = 'all'"
                        :class="active === 'all' ? 'bg-brand-blue text-white shadow-md' : 'bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white'"
                        class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">All</button>
                    @foreach ($filters as $filter)
                        <button @click="active = '{{ $filter }}'"
                            :class="active === '{{ $filter }}' ? 'bg-brand-blue text-white shadow-md' : 'bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white'"
                            class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">{{ $filter }}</button>
                    @endforeach
                </div>

                <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $caseStudies = [
                            ['title' => 'Custom Web Platform', 'category' => 'Development', 'image' => '/images/pages/case-study/case_4_1.jpg'],
                            ['title' => 'E-Commerce Store Build', 'category' => 'Woo Commerce', 'image' => '/images/pages/case-study/case_4_2.jpg'],
                            ['title' => 'Sales CRM Integration', 'category' => 'CRM Solutions', 'image' => '/images/pages/case-study/case_4_3.jpg'],
                            ['title' => 'Corporate Website Redesign', 'category' => 'Web Design', 'image' => '/images/pages/case-study/case_4_4.jpg'],
                            ['title' => 'Managed IT Support', 'category' => 'IT Support', 'image' => '/images/pages/case-study/case_4_5.jpg'],
                            ['title' => 'Mobile App Development', 'category' => 'Development', 'image' => '/images/pages/case-study/case_4_6.jpg'],
                            ['title' => 'Brand Landing Page', 'category' => 'Web Design', 'image' => '/images/pages/case-study/case_4_7.jpg'],
                        ];
                    @endphp
                    @foreach ($caseStudies as $study)
                        <div x-show="active === 'all' || active === '{{ $study['category'] }}'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="group relative overflow-hidden rounded-2xl cursor-pointer">
                            <img src="{{ $study['image'] }}" alt="{{ $study['title'] }}" class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <div>
                                    <span class="text-brand-blue text-sm font-semibold">{{ $study['category'] }}</span>
                                    <h3 class="text-xl font-bold text-white mt-1">{{ $study['title'] }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.app')

@section('title', 'Projects | Bismillah Computer & Technology')
@section('description', 'Explore our portfolio of successful projects including web development, UI/UX design, and more.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Projects', 'eyebrow' => 'Projects'])

    {{-- Projects Grid --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $projects = [
                        ['title' => 'Web & Mobile Development', 'category' => 'Development', 'image' => '/images/pages/projects/project-inner1.jpg'],
                        ['title' => 'UI/UX Design', 'category' => 'Design', 'image' => '/images/pages/projects/project-inner2.jpg'],
                        ['title' => 'Website Design', 'category' => 'Management', 'image' => '/images/pages/projects/project-inner3.jpg'],
                        ['title' => 'WordPress Development', 'category' => 'Project Analysis', 'image' => '/images/pages/projects/project-inner4.jpg'],
                        ['title' => 'Game Development', 'category' => 'Designer', 'image' => '/images/pages/projects/project-inner5.jpg'],
                        ['title' => 'Python Development', 'category' => 'Developer', 'image' => '/images/pages/projects/project-inner6.jpg'],
                        ['title' => 'Java Development', 'category' => 'Engineer', 'image' => '/images/pages/projects/project-inner7.jpg'],
                        ['title' => 'PHP Development', 'category' => 'Backend', 'image' => '/images/pages/projects/project-inner8.jpg'],
                        ['title' => 'PHP Development', 'category' => 'Backend', 'image' => '/images/pages/projects/project-inner9.jpg'],
                    ];
                @endphp
                @foreach ($projects as $project)
                    <div class="group relative overflow-hidden rounded-2xl cursor-pointer">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div>
                                <span class="text-brand-blue text-sm font-semibold">{{ $project['category'] }}</span>
                                <h3 class="text-xl font-bold text-white mt-1">{{ $project['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Pagination --}}
            <div class="reveal reveal-fade-up flex items-center justify-center gap-2 mt-12">
                <a href="#" class="w-10 h-10 rounded-full bg-brand-blue text-white flex items-center justify-center font-semibold text-sm">1</a>
                <a href="#" class="w-10 h-10 rounded-full bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white flex items-center justify-center font-semibold text-sm transition-colors">2</a>
                <a href="#" class="w-10 h-10 rounded-full bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white flex items-center justify-center font-semibold text-sm transition-colors">3</a>
                <a href="#" class="w-10 h-10 rounded-full bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white flex items-center justify-center font-semibold text-sm transition-colors">4</a>
                <a href="#" class="w-10 h-10 rounded-full bg-brand-light-bg text-heading hover:bg-brand-blue hover:text-white flex items-center justify-center font-semibold text-sm transition-colors">Next</a>
            </div>
        </div>
    </section>

@endsection

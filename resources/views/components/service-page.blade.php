@extends('layouts.page')

@section('title', $pageTitle . ' | Bismillah Computer & Technology')
@section('description', $pageDescription ?? '')

@section('content')

<section class="relative bg-linear-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
        <div class="space-y-6">
            @if(!empty($tagline))
                <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">{{ $tagline }}</span>
            @endif
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">{{ $pageTitle }}</h1>
            @if(!empty($heroSubtitle))
                <p class="text-lg md:text-xl text-slate-700 leading-relaxed">{{ $heroSubtitle }}</p>
            @endif
            @if(!empty($heroButtons))
                <div class="flex flex-wrap gap-4 pt-2">
                    @foreach($heroButtons as $btn)
                        <a href="{{ $btn['href'] }}" class="inline-flex items-center gap-2 {{ $btn['primary'] ?? false ? 'bg-brand-blue text-white hover:bg-brand-hover' : 'bg-white text-brand-blue border-2 border-brand-blue hover:bg-brand-blue hover:text-white' }} font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                            {{ $btn['label'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
        @if(!empty($heroImage))
            <div class="flex justify-center lg:justify-end">
                <img alt="{{ $pageTitle }}" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="{{ $heroImage }}"/>
            </div>
        @endif
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
        </svg>
    </div>
</section>

@if(!empty($sections))
    @foreach($sections as $section)
        @if(($section['type'] ?? 'content') === 'features-grid')
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(!empty($section['title']))
        <div class="text-center mb-16 reveal reveal-fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $section['title'] }}</h2>
            @if(!empty($section['subtitle']))
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">{{ $section['subtitle'] }}</p>
            @endif
        </div>
        @endif
        <div class="grid md:grid-cols-2 lg:grid-cols-{{ $section['cols'] ?? 3 }} gap-8">
            @foreach($section['items'] ?? [] as $i => $item)
            <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group" style="animation-delay: {{ $i * 0.05 }}s">
                @if(!empty($item['icon']))
                <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition-colors">
                    <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                    </svg>
                </div>
                @endif
                <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $item['title'] }}</h3>
                <p class="text-slate-600 leading-relaxed">{{ $item['description'] }}</p>
                @if(!empty($item['links']))
                    <ul class="mt-4 space-y-2">
                        @foreach($item['links'] as $link)
                        <li class="flex items-start gap-2 text-sm text-slate-600">
                            <svg class="w-4 h-4 text-brand-blue shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            {{ $link }}
                        </li>
                        @endforeach
                    </ul>
                @endif
                @if(!empty($item['href']))
                <a href="{{ $item['href'] }}" class="inline-flex items-center text-brand-blue font-semibold mt-4 hover:text-brand-hover transition-colors text-sm">
                    {{ $item['linkText'] ?? 'Learn More' }}
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                </a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

        @elseif($section['type'] === 'content-list')
<section class="py-20 {{ $section['bg'] ?? 'bg-slate-50' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(!empty($section['title']))
        <div class="text-center mb-16 reveal reveal-fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $section['title'] }}</h2>
        </div>
        @endif
        <div class="grid lg:grid-cols-2 gap-12">
            @foreach($section['items'] ?? [] as $i => $item)
            <div class="reveal reveal-fade-up flex gap-4" style="animation-delay: {{ $i * 0.1 }}s">
                <div class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $item['title'] }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        @elseif($section['type'] === 'info-block')
<section class="py-20 {{ $section['bg'] ?? 'bg-white' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            @if(!empty($section['image']))
            <div class="reveal reveal-fade-up">
                <img src="{{ $section['image'] }}" alt="{{ $section['title'] ?? '' }}" class="rounded-2xl shadow-lg w-full" loading="lazy"/>
            </div>
            @endif
            <div class="reveal reveal-fade-up">
                @if(!empty($section['badge']))
                    <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full mb-4">{{ $section['badge'] }}</span>
                @endif
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">{{ $section['title'] }}</h2>
                <div class="text-slate-600 leading-relaxed space-y-4">
                    {!! $section['content'] !!}
                </div>
            </div>
        </div>
    </div>
</section>

        @elseif($section['type'] === 'check-list')
<section class="py-20 {{ $section['bg'] ?? 'bg-slate-50' }}">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(!empty($section['title']))
        <div class="text-center mb-12 reveal reveal-fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">{{ $section['title'] }}</h2>
        </div>
        @endif
        <div class="grid sm:grid-cols-2 gap-4">
            @foreach($section['items'] ?? [] as $i => $item)
            <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-4 shadow-sm border border-slate-100" style="animation-delay: {{ $i * 0.05 }}s">
                <svg class="w-5 h-5 text-brand-blue shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                <span class="text-slate-700 text-sm font-medium">{{ $item }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
        @endif
    @endforeach
@endif



@endsection

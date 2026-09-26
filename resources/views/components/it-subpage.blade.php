@props([
    'headline' => '',
    'headlineAccent' => '',
    'intro' => '',
    'image' => '',
    'imageAlt' => '',
    'anchors' => [],
    'sections' => [],
])

@php
    $hasAccordion = collect($sections)->contains(fn($section) => ($section['type'] ?? '') === 'accordion');
@endphp

<main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

    {{-- ==================== HERO SECTION ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    {{ $headline }}
                    @if ($headlineAccent)
                        <span class="text-blue-600 block mt-2">{{ $headlineAccent }}</span>
                    @endif
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">{{ $intro }}
                </p>

                @if (!empty($anchors))
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        @foreach ($anchors as $anchor)
                            <a href="{{ $anchor['href'] }}"
                                class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                                {{ strtoupper($anchor['label']) }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor"
                                    class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                @endif

                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img src="{{ $image }}" alt="{{ $imageAlt ?: $headline }}" height="400" width="600"
                    class="rounded-lg w-full max-w-md lg:max-w-lg" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    @foreach ($sections as $section)
        @php $type = $section['type'] ?? 'overview'; @endphp

        {{-- ==================== OVERVIEW ==================== --}}
        @if ($type === 'overview')
            <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full text-justify">
                <div class="reveal reveal-fade-up">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-start gap-4 mb-4">
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-lg shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    {!! $section['icon'] ?? '<circle cx="12" cy="12" r="10"></circle>' !!}
                                </svg>
                            </div>
                            <div>
                                <h2
                                    class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 uppercase tracking-tight">
                                    {{ $section['title'] }}
                                </h2>
                                @if (!empty($section['subtitle']))
                                    <span class="text-blue-500 font-bold text-sm tracking-wide mt-1 block">
                                        {{ $section['subtitle'] }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="space-y-4 text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed">
                            @foreach ($section['paragraphs'] ?? [] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            {{-- ==================== FEATURE CARDS GRID ==================== --}}
        @elseif ($type === 'cards')
            <section
                class="py-12 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full @if (!empty($section['bg'])) bg-white @endif"
                id="{{ $section['id'] ?? '' }}">
                <div class="reveal reveal-fade-up">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center mb-4">
                        {{ $section['title'] }}
                    </h2>
                    @if (!empty($section['subtitle']))
                        <p class="text-slate-500 text-sm leading-relaxed max-w-3xl mx-auto mb-12 text-justify">
                            {{ $section['subtitle'] }}
                        </p>
                    @endif
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-{{ $section['cols'] ?? 3 }} gap-8">
                        @foreach ($section['items'] ?? [] as $item)
                            <div
                                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3 border-b border-blue-100 pb-3">
                                        <span class="p-2 bg-blue-50 text-blue-600 rounded-lg shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                {!! $item['icon'] ?? '<circle cx="12" cy="12" r="10"></circle>' !!}
                                            </svg>
                                        </span>
                                        <h3 class="text-sm sm:text-base font-bold text-slate-800">{{ $item['title'] }}
                                        </h3>
                                    </div>
                                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed text-justify">
                                        {{ $item['description'] }}</p>
                                    @if (!empty($item['href']))
                                        <a href="{{ $item['href'] }}"
                                            class="inline-flex items-center text-blue-600 font-semibold text-xs uppercase tracking-wider hover:text-blue-800 transition-colors">
                                            Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-4 h-4 ml-2">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- ==================== IMAGE + BULLET CARD (SPLIT) ==================== --}}
        @elseif ($type === 'split')
            <section
                class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full @if (!empty($section['bg'])) bg-white @endif"
                id="{{ $section['id'] ?? '' }}">
                @php
                    $isReverse = !empty($section['reverse']);
                    $contentOrder = $isReverse ? 'order-1 lg:order-2' : 'order-2 lg:order-1';
                @endphp
                <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    @if (!empty($section['image']) && ! $isReverse)
                        <div class="order-1 lg:order-2 flex justify-center items-center">
                            <img src="{{ $section['image'] }}" alt="{{ $section['imageAlt'] ?? $section['title'] }}"
                                height="400" width="600" class="object-cover rounded-xl w-full h-auto" />
                        </div>
                    @endif
                    <div class="{{ $contentOrder }}">
                        <div
                            class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-start gap-4 mb-4">
                                @if (!empty($section['icon']))
                                    <div class="p-3 bg-blue-50 text-blue-600 rounded-lg shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            {!! $section['icon'] !!}
                                        </svg>
                                    </div>
                                @endif
                                <div>
                                    @if (!empty($section['label']))
                                        <span class="text-blue-500 font-bold text-sm tracking-wide block">
                                            {{ $section['label'] }}</span>
                                    @endif
                                    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 leading-tight">
                                        {{ $section['title'] }}
                                    </h2>
                                </div>
                            </div>
                            <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                                @foreach ($section['paragraphs'] ?? [] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                            @if (!empty($section['points']))
                                <ul class="space-y-3 text-xs sm:text-sm text-slate-600">
                                    @foreach ($section['points'] as $point)
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                            <span>
                                                <strong
                                                    class="text-blue-600 font-semibold">{{ $point['title'] }}:</strong>
                                                {{ $point['description'] }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            @if (!empty($section['link']))
                                <a href="{{ $section['link']['href'] }}"
                                    class="text-blue-600 font-medium flex items-center hover:text-blue-800 mt-6">
                                    {{ $section['link']['label'] }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                    @if (!empty($section['image']) && $isReverse)
                        <div class="order-2 lg:order-1 flex justify-center items-center">
                            <img src="{{ $section['image'] }}" alt="{{ $section['imageAlt'] ?? $section['title'] }}"
                                height="400" width="600" class="object-cover rounded-xl w-full h-auto" />
                        </div>
                    @endif
                </div>
            </section>

            {{-- ==================== NUMBERED STEPS ==================== --}}
        @elseif ($type === 'steps')
            <section class="pt-6 pb-12 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full"
                id="{{ $section['id'] ?? '' }}">
                <div class="reveal reveal-fade-up">
                    @if (!empty($section['title']))
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center mb-4">
                            {{ $section['title'] }}
                        </h2>
                    @endif
                    @if (!empty($section['subtitle']))
                        <p
                            class="text-slate-500 text-sm leading-relaxed max-w-3xl mx-auto mb-10 text-justify">
                            {{ $section['subtitle'] }}
                        </p>
                    @endif
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-{{ $section['cols'] ?? 4 }} gap-8 text-justify">
                        @foreach ($section['items'] ?? [] as $index => $item)
                            <div
                                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2 border-b border-blue-100 pb-2">
                                        <span
                                            class="w-7 h-7 rounded-full bg-blue-600 text-white text-xs font-bold flex items-center justify-center shrink-0">
                                            {{ $index + 1 }}
                                        </span>
                                        <h3 class="text-sm sm:text-base font-bold text-slate-800">{{ $item['title'] }}
                                        </h3>
                                    </div>
                                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                        {{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- ==================== HEADING + BULLET POINTS ==================== --}}
        @elseif ($type === 'points')
            <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full" id="{{ $section['id'] ?? '' }}">
                <div class="reveal reveal-fade-up">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h2
                            class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4 uppercase tracking-tight">
                            {{ $section['title'] }}
                        </h2>
                        @if (!empty($section['paragraphs']))
                            <div
                                class="space-y-4 text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed text-justify mb-6">
                                @foreach ($section['paragraphs'] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        @endif
                        @if (!empty($section['points']))
                            <ul class="space-y-4 text-xs sm:text-sm text-slate-600">
                                @foreach ($section['points'] as $point)
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                                        <span>
                                            <strong class="text-blue-600 font-semibold uppercase">
                                                {{ $point['title'] }}:
                                            </strong>
                                            {{ $point['description'] }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        @if (!empty($section['closing']))
                            <p
                                class="text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-blue-100 pt-4 mt-6 text-justify">
                                {!! $section['closing'] !!}
                            </p>
                        @endif
                    </div>
                </div>
            </section>

            {{-- ==================== ACCORDION ==================== --}}
        @elseif ($type === 'accordion')
            <section class="py-12 sm:py-16 bg-white px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full"
                id="{{ $section['id'] ?? '' }}">
                <div class="reveal reveal-fade-up">
                    <h2 class="text-2xl sm:text-3xl font-bold text-center text-slate-900 mb-12">
                        {{ $section['title'] }}
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                        <div class="flex flex-col justify-center w-full order-2 lg:order-1">
                            <div class="space-y-4">
                                @foreach ($section['items'] as $index => $item)
                                    <div
                                        class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                        <button onclick="toggleFaq({{ $index }})"
                                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                            <span class="font-medium text-slate-900 pr-4">{{ $item['title'] }}</span>
                                            <span id="faq-icon-{{ $index }}"
                                                class="text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300 faq-icon">+</span>
                                        </button>
                                        <div id="faq-answer-{{ $index }}" class="faq-answer">
                                            <div class="overflow-hidden">
                                                <p
                                                    class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">
                                                    {{ $item['description'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @if (!empty($section['image']))
                            <div
                                class="relative h-64 md:h-150 rounded-2xl order-1 lg:order-2 overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                                <img src="{{ $section['image'] }}"
                                    alt="{{ $section['imageAlt'] ?? $section['title'] }}"
                                    class="absolute inset-0 w-full h-full object-cover" />
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            {{-- ==================== CONTACT ==================== --}}
        @elseif ($type === 'contact')
            <section class="pt-6 pb-16 px-4 sm:px-6 lg:px-8 max-w-365 mx-auto w-full">
                <div class="reveal reveal-fade-up">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">Contact Us</h2>
                        <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                            @foreach ($section['paragraphs'] ?? [] as $paragraph)
                                <p>{!! $paragraph !!}</p>
                            @endforeach
                        </div>
                        <a href="{{ route('contact') }}"
                            class="group mt-6 inline-flex cursor-pointer items-center justify-between gap-6 px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            {{ strtoupper($section['label'] ?? 'Contact Us') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
</main>

@if ($hasAccordion)
    @push('head')
        <style>
            .faq-answer {
                display: grid;
                grid-template-rows: 0fr;
                opacity: 0;
                transition: grid-template-rows 0.3s ease-in-out, opacity 0.3s ease-in-out;
            }

            .faq-answer.open {
                grid-template-rows: 1fr;
                opacity: 1;
            }

            .faq-icon {
                transition: transform 0.3s ease-in-out;
            }

            .faq-icon.rotated {
                transform: rotate(45deg);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            if (typeof window.toggleFaq !== 'function') {
                window.toggleFaq = function(index) {
                    const answer = document.getElementById('faq-answer-' + index);
                    const icon = document.getElementById('faq-icon-' + index);
                    const isOpen = answer.classList.contains('open');

                    // Close all other FAQs
                    document.querySelectorAll('.faq-answer').forEach(function(el) {
                        el.classList.remove('open');
                    });
                    document.querySelectorAll('.faq-icon').forEach(function(el) {
                        el.classList.remove('rotated');
                    });

                    // Toggle current FAQ
                    if (!isOpen) {
                        answer.classList.add('open');
                        icon.classList.add('rotated');
                    }
                };
            }
        </script>
    @endpush
@endif

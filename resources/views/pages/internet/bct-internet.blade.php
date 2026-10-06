@extends('layouts.app')

@section('title', 'BCT Internet - Broadband Pricing | Bismillah Computer & Technology')
@section('description',
    'BCT is a licensed ISP by BTRC. Super speed optical fibre internet with real IP, unlimited BDIX
    bandwidth, public IPv4 & IPv6 and 24/7 support in Uttara, Dhaka.')
@section('canonical', route('bct-internet'))

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            {{-- Hero Content --}}
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider">Made for
                    Entertainment</span>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Great Broadband <br />
                    <span class="text-blue-600 block mt-2">with Great Price</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Bismillah Computer
                    &amp; Technology is a Licensed ISP by the Bangladesh Telecommunication Regulatory Commission providing
                    internet service. As the best internet service provider in Uttara, Dhaka, we provide a fully
                    dedicated, super-fast, cost-effective and secured internet connection. We're committed to meeting your
                    needs and delivering industry-leading customer service.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#pricing"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        View Pricing
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Know More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </div>

                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img src="/images/internet/bct/bct-hero.png" alt="BG Image" height="400" width="600"
                    class="rounded-lg w-full max-w-md lg:max-w-lg" />
            </div>
        </div>

        {{-- Curved bottom shape --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ==================== GOOD REASONS ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="w-full rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden">
                    <img src="/images/internet/bct/section.jpg" alt="Connectivity and communication"
                        class="w-full h-auto object-cover rounded-2xl" />
                </div>
                {{-- Reasons --}}
                <div
                    class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Some Good Reasons To Choose Broadband</h2>
                    <p class="text-slate-600 leading-relaxed text-justify mb-10">Secured internet connection with a fully
                        dedicated network — you can watch anything without buffering.</p>
                    <div class="grid sm:grid-cols-2 gap-8">
                        @php
                            $reasons = [
                                [
                                    'title' => 'Ultra Fast',
                                    'desc' => 'Symmetric fibre throughput delivered right to your door step.',
                                    'icon' =>
                                        '<path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path>',
                                ],
                                [
                                    'title' => 'Entertainment',
                                    'desc' => 'Unlimited BDIX bandwidth for 4K YouTube and Facebook streaming.',
                                    'icon' =>
                                        '<rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>',
                                ],
                                [
                                    'title' => 'Ultra Reliable',
                                    'desc' => 'A dedicated network engineered for consistent uptime, day or night.',
                                    'icon' =>
                                        '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>',
                                ],
                                [
                                    'title' => 'Lag Free Gaming',
                                    'desc' => 'Low ping latency and access to the largest FTP servers in the region.',
                                    'icon' =>
                                        '<path d="M6 11h4M8 9v4M15 12h.01"></path><rect x="2" y="6" width="20" height="12" rx="2"></rect>',
                                ],
                            ];
                        @endphp
                        @foreach ($reasons as $reason)
                            <div class="flex gap-4">
                                <div
                                    class="mt-1 shrink-0 w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-icon-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        {!! $reason['icon'] !!}
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $reason['title'] }}</h3>
                                    <p class="text-slate-600 leading-relaxed">{{ $reason['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== WHY CHOOSE US ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $whyUs = [
                        [
                            'title' => 'We Are Best Available',
                            'desc' =>
                                'A fully dedicated, super-fast and secured connection delivered by a BTRC licensed ISP — built for both homes and businesses.',
                        ],
                        [
                            'title' => 'Priority Always To Clients',
                            'desc' =>
                                'Our promise is simple: meet your needs first and deliver industry-leading customer service with every installation.',
                        ],
                        [
                            'title' => 'Local Support That Knows You',
                            'desc' =>
                                '24/7 phone and online support from a local team, so help is always one call away.',
                        ],
                    ];
                @endphp
                @foreach ($whyUs as $item)
                    <div
                        class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-4 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 20h.01"></path>
                                <path d="M2 8.82a15 15 0 0 1 20 0"></path>
                                <path d="M5 12.859a10 10 0 0 1 14 0"></path>
                                <path d="M8.5 16.429a5 5 0 0 1 7 0"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 text-center mb-3">{{ $item['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== FEATURES ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Explore Our Best Features</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'Home Broadband',
                            'desc' =>
                                'Super speed optical fibre internet connectivity with real IP, right to your door steps.',
                            'icon' =>
                                '<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>',
                        ],
                        [
                            'title' => 'WiFi Connection',
                            'desc' =>
                                'Seamless Wi-Fi across every room of your home or office, backed by a dedicated fibre line.',
                            'icon' =>
                                '<path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path>',
                        ],
                        [
                            'title' => 'Set Top Box Connection',
                            'desc' =>
                                'Connect your set top box and stream live television on the same connection as your internet.',
                            'icon' =>
                                '<path d="M4 5h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1z"></path><path d="M8 21h8"></path><path d="M12 17v4"></path>',
                        ],
                        [
                            'title' => 'Fire Stick TV',
                            'desc' =>
                                'Turn any TV into a smart streaming device with apps, games and on-demand entertainment.',
                            'icon' =>
                                '<path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"></path><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"></path><circle cx="12" cy="12" r="2"></circle><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"></path><path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"></path>',
                        ],
                        [
                            'title' => 'Mobile Connection',
                            'desc' => 'Stay connected on the move with a mobile data solution on the same BCT network.',
                            'icon' =>
                                '<rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path>',
                        ],
                        [
                            'title' => 'Security Services',
                            'desc' =>
                                'A secured connection with public IPv4 & IPv6 addressing so your network stays protected.',
                            'icon' =>
                                '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>',
                        ],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div
                        class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-4 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                {!! $feature['icon'] !!}
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 text-center mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify leading-relaxed">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== PRICING PLANS (managed from admin panel) ==================== --}}
    <section id="pricing" class="py-16 lg:py-24 bg-white scroll-mt-24">
        <div class="max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-6">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Pick The Best
                    Option For You</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Pricing</h2>
                <p class="text-slate-600 max-w-3xl mx-auto mt-4 text-justify">Connectivity with real IP, right to your door
                    steps. All prices are excluding VAT.</p>
            </div>

            <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($plans as $plan)
                    <div
                        class="group relative rounded-3xl bg-white p-8 flex flex-col h-full border border-blue-100 shadow-[0_12px_30px_-16px_rgba(21,124,193,0.30)] transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-blue/40 hover:shadow-[0_28px_50px_-20px_rgba(21,124,193,0.45)]">
                        <span class="pointer-events-none absolute inset-0 overflow-hidden rounded-3xl">
                            <span
                                class="absolute inset-x-0 top-0 h-1 bg-linear-to-r from-transparent via-brand-blue/60 to-transparent">
                            </span>
                            <span class="absolute -top-20 -right-20 h-52 w-52 rounded-full bg-brand-blue/10 blur-2xl">
                            </span>
                            <span class="absolute -bottom-24 -left-20 h-44 w-44 rounded-full bg-sky-300/10 blur-2xl">
                            </span>
                        </span>

                        @if ($plan->featured)
                            <span
                                class="absolute -top-3.5 left-1/2 z-10 -translate-x-1/2 rounded-full bg-brand-secondary px-5 py-1.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-brand-secondary/40">Popular</span>
                        @endif

                        <div class="relative flex items-start justify-between gap-3 mb-5">
                            <h3 class="text-xl font-bold text-heading">{{ $plan->name }}</h3>
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-brand-blue/10 text-brand-blue transition-all duration-300 group-hover:bg-brand-blue group-hover:text-white group-hover:shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h.01"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2 8.82a15 15 0 0 1 20 0">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12.859a10 10 0 0 1 14 0">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 16.429a5 5 0 0 1 7 0">
                                    </path>
                                </svg>
                            </span>
                        </div>

                        <div class="relative mb-6">
                            <span
                                class="text-5xl font-extrabold tracking-tight text-transparent bg-clip-text bg-linear-to-r from-brand-blue to-brand-active">{{ $plan->price }}</span>
                            BDT
                            <span class="block mt-1 text-sm font-medium text-body-muted">
                                {{ $plan->period ?: 'Per Month' }}</span>
                        </div>

                        <div class="relative mb-6 h-px bg-linear-to-r from-brand-blue/50 via-blue-100 to-transparent">
                        </div>

                        @if (!empty($plan->features))
                            <ul class="relative space-y-3.5 mb-8 flex-1">
                                @foreach ($plan->features as $feature)
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-blue/10">
                                            <svg class="w-3 h-3 text-brand-blue" fill="none" stroke="currentColor"
                                                stroke-width="3" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </span>
                                        <span class="text-sm text-body-muted">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <p class="relative text-[11px] text-slate-800 mb-5">*Excluding VAT</p>

                        <a href="{{ route('contact') }}"
                            class="relative mt-auto block text-center font-semibold rounded-full px-8 py-3.5 text-white bg-linear-to-r from-brand-blue to-brand-hover shadow-lg shadow-brand-blue/25 transition-all duration-300 hover:from-brand-hover hover:to-brand-active hover:shadow-xl hover:-translate-y-0.5">
                            Know More
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-center">
                        <div
                            class="rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 px-8 py-16 flex flex-col items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="w-10 h-10 text-blue-300">
                                <path d="M12 20h.01"></path>
                                <path d="M2 8.82a15 15 0 0 1 20 0"></path>
                                <path d="M5 12.859a10 10 0 0 1 14 0"></path>
                                <path d="M8.5 16.429a5 5 0 0 1 7 0"></path>
                            </svg>
                            <p class="text-blue-300 font-medium text-sm">Pricing is being updated. Please check back
                                soon.</p>
                            <a href="{{ route('contact') }}"
                                class="text-blue-600 font-medium text-sm hover:text-blue-800 transition-colors">Contact
                                us for a custom quote</a>
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="reveal reveal-fade-up mt-10 flex flex-wrap items-center justify-center gap-4 text-sm">
                <a href="https://drive.google.com/file/d/1feql-w4f4Gv3HDVswQcRdFPaGM-WtF3L/view?usp=sharing"
                    target="_blank" rel="noopener"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all border border-blue-700 bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                    BTRC Approved Tariff
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </a>
                <a href="https://user.bct-bd.com/" target="_blank" rel="noopener"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all border border-blue-700 bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                    Selfcare Portal
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================== MEMBERS ==================== --}}
    <section class="py-16 lg:py-20 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-365 mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-blue-900 mb-10">We Are Proud Members Of</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                @php
                    $members = [
                        '/images/internet/bct/member-1.png',
                        '/images/internet/bct/member-2.png',
                        '/images/internet/bct/member-3.png',
                    ];
                @endphp
                @foreach ($members as $member)
                    @if (file_exists(public_path($member)))
                        <div
                            class="aspect-3/2 rounded-xl border border-blue-100 bg-white flex items-center justify-center p-4 shadow-sm transition-all hover:shadow-md hover:-translate-y-0.5">
                            <img src="{{ $member }}" alt="Member logo" loading="lazy"
                                class="max-h-full max-w-full object-contain">
                        </div>
                    @else
                        <div
                            class="aspect-3/2 rounded-xl border-2 border-dashed border-blue-200 bg-white flex flex-col items-center justify-center gap-1 px-3">
                            <span class="text-blue-300 font-medium text-xs">Add logo here</span>
                            <span class="text-blue-200 text-[10px] break-all">{{ $member }}</span>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-16 lg:py-24 bg-brand-dark-bg">
        <div class="max-w-365 mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal reveal-fade-up">
                <span class="inline-block text-sky-300 font-bold text-sm uppercase tracking-wider mb-3">Experience the
                    magic of technology</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Best Internet Service Provider For One
                    Stop Smart Internet Solutions.</h2>
                <p class="text-white/60 text-lg mb-8 max-w-2xl mx-auto">Tell us your address and requirements and our
                    team will get you connected.</p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                    Contact Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.app')

@section('title', 'Home | Bismillah Computer & Technology')
@section('description',
    'Bismillah Computer & Technology - Your trusted partner for web design, cloud solutions, voice
    systems, internet connectivity, and managed IT support across Bangladesh.')
@section('keywords',
    'IT services,managed IT support,cyber security,cloud services,Microsoft 365,Azure,web design,web
    development,SEO,business phone systems,VoIP,NBN,internet service provider,Uttara Dhaka,Bismillah Computer & Technology')
@section('canonical', 'https://bct.com.bd/')

@section('content')

    {{-- ======================== HERO SLIDER ======================== --}}
    <section class="relative w-full overflow-hidden bg-white py-8 md:pt-16">
        <div class="reveal reveal-fade-up px-4 sm:px-6 lg:px-8">
            <div class="swiper hero-swiper w-full">
                <div class="swiper-wrapper">
                    {{-- Slide 1: Cloud --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">Quick
                                    Support &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    Microsoft 365 &amp;
                                    Cloud Services</h1>
                                <p class="max-w-md text-base text-body-muted md:text-lg">Secure email, collaboration and
                                    cloud services — set up the right way.</p>
                                <a href="{{ route('cloud') }}"><button
                                        class="rounded-full bg-blue-500 px-8 cursor-pointer py-3.5 text-sm font-bold text-white tracking-wide shadow-md transition-all hover:bg-blue-600 hover:shadow-lg focus:outline-none">FIND
                                        OUT MORE &gt;</button></a>
                            </div>
                            <div class="flex justify-center order-1 md:order-2">
                                <div
                                    class="relative w-full aspect-4/3 max-w-85 sm:max-w-105 md:max-w-full h-75 sm:h-87.5 md:h-112.5">
                                    <img alt="Microsoft 365 &amp; Cloud Services" decoding="async" class="object-contain"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                        src="/images/home/hero/cloud-hero.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 2: IT --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">IT
                                    Services &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    IT Services for Business
                                    and Home</h1>
                                <p class="max-w-md text-base text-body-muted md:text-lg">Professional, reliable tech support
                                    and system engineering when you need it.</p>
                                <a href="{{ route('it-support') }}"><button
                                        class="rounded-full bg-blue-500 px-8 cursor-pointer py-3.5 text-sm font-bold text-white tracking-wide shadow-md transition-all hover:bg-blue-600 hover:shadow-lg focus:outline-none">FIND
                                        OUT MORE &gt;</button></a>
                            </div>
                            <div class="flex justify-center order-1 md:order-2">
                                <div
                                    class="relative w-full aspect-4/3 max-w-85 sm:max-w-105 md:max-w-full h-75 sm:h-87.5 md:h-112.5">
                                    <img alt="IT Services for Business and Home" loading="lazy" decoding="async"
                                        class="object-contain"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                        src="/images/home/hero/administrator-hero.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 3: Cyber Security --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">Cyber
                                    Security &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    Cyber Security &amp;
                                    Data Protection</h1>
                                <p class="max-w-md text-base text-body-muted md:text-lg">Proactive real-time monitoring and
                                    defenses to keep your data safe.</p>
                                <a href="{{ route('it-support.cyber-security') }}"><button
                                        class="rounded-full bg-blue-500 px-8 cursor-pointer py-3.5 text-sm font-bold text-white tracking-wide shadow-md transition-all hover:bg-blue-600 hover:shadow-lg focus:outline-none">FIND
                                        OUT MORE &gt;</button></a>
                            </div>
                            <div class="flex justify-center order-1 md:order-2">
                                <div
                                    class="relative w-full aspect-4/3 max-w-85 sm:max-w-105 md:max-w-full h-75 sm:h-87.5 md:h-112.5">
                                    <img alt="Cyber Security &amp; Data Protection" loading="lazy" decoding="async"
                                        class="object-contain"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                        src="/images/home/hero/cybersecurity-hero.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 4: Telecoms --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">Telecoms
                                    &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    Telecommunications &amp;
                                    Phone Systems</h1>
                                <p class="max-w-md text-base text-body-muted md:text-lg">Modern voice solutions configured
                                    seamlessly for modern remote workflows.</p>
                                <a href="{{ route('voice') }}"><button
                                        class="rounded-full bg-blue-500 px-8 cursor-pointer py-3.5 text-sm font-bold text-white tracking-wide shadow-md transition-all hover:bg-blue-600 hover:shadow-lg focus:outline-none">FIND
                                        OUT MORE &gt;</button></a>
                            </div>
                            <div class="flex justify-center order-1 md:order-2">
                                <div
                                    class="relative w-full aspect-4/3 max-w-85 sm:max-w-105 md:max-w-full h-75 sm:h-87.5 md:h-112.5">
                                    <img alt="Telecommunications &amp; Phone Systems" loading="lazy" decoding="async"
                                        class="object-contain"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                        src="/images/home/hero/telecom-hero.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Slide 5: Internet --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">Internet
                                    &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    NBN &amp; Business
                                    Internet</h1>
                                <p class="max-w-md text-base text-body-muted md:text-lg">High-speed, redundant pipelines
                                    keeping your office fast and reliable.</p>
                                <a href="{{ route('internet.nbn') }}"><button
                                        class="rounded-full bg-blue-500 px-8 cursor-pointer py-3.5 text-sm font-bold text-white tracking-wide shadow-md transition-all hover:bg-blue-600 hover:shadow-lg focus:outline-none">FIND
                                        OUT MORE &gt;</button></a>
                            </div>
                            <div class="flex justify-center order-1 md:order-2">
                                <div
                                    class="relative w-full aspect-4/3 max-w-85 sm:max-w-105 md:max-w-full h-75 sm:h-87.5 md:h-112.5">
                                    <img alt="NBN &amp; Business Internet" loading="lazy" decoding="async"
                                        class="object-contain"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                        src="/images/home/hero/internet-hero.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Hero Indicators --}}
            <div class="mt-4 border-t border-gray-100 pt-4">
                <div
                    class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:flex md:items-stretch md:justify-between md:gap-0 divide-x-0 md:divide-x divide-gray-200">
                    <button onclick="heroSwiper.slideToLoop(0)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-brand-blue"
                        data-index="0">
                        <span class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-full bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">Cloud
                            Services &amp; Microsoft 365</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-blue-500">Modern cloud
                            tools</span>
                    </button>
                    <button onclick="heroSwiper.slideToLoop(1)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="1">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">IT
                            Services for Business and Home</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Fully Managed &amp;
                            AdHoc</span>
                    </button>
                    <button onclick="heroSwiper.slideToLoop(2)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="2">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">Cyber
                            Security &amp; Data Protection</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Proactive
                            Security</span>
                    </button>
                    <button onclick="heroSwiper.slideToLoop(3)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="3">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">Telecommunications
                            &amp; Phone Systems</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Modern voice
                            solutions</span>
                    </button>
                    <button onclick="heroSwiper.slideToLoop(4)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="4">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">NBN
                            &amp; Business Internet</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Internet, Home &amp;
                            Business</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================== ABOUT SECTION ======================== --}}
    <section id="about-sec" class="relative bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="absolute top-32 right-0 w-125 h-125 rounded-full pointer-events-none"
            style="background:radial-gradient(circle, rgba(11,89,219,0.08) 0%, transparent 70%)"></div>
        <div class="absolute bottom-24 left-0 w-125 h-125 rounded-full pointer-events-none"
            style="background:radial-gradient(circle, rgba(11,89,219,0.08) 0%, transparent 70%)"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            {{-- Section Title --}}
            <div class="reveal reveal-fade-up text-center max-w-3xl mx-auto -mt-2 sm:-mt-6">
                <span class="inline-flex items-center gap-3 text-theme-blue text-lg sm:text-xl font-medium tracking-wide">
                    <span class="relative inline-block h-5 w-5 shrink-0" aria-hidden="true">
                        <span class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-border"></span>
                        <span class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-blue"></span>
                    </span>
                    <span class="font-bold uppercase">About Us Our Company</span>
                    <span class="relative inline-block h-5 w-5 shrink-0" aria-hidden="true">
                        <span class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-blue"></span>
                        <span class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-border"></span>
                    </span>
                </span>
                <h2
                    class="text-3xl sm:text-4xl md:text-[44px] xl:text-5xl font-bold text-theme-navy tracking-tight leading-tight mt-4 mb-12 md:mb-16">
                    Empowering Businesses Through Smart IT Solutions</h2>
            </div>

            {{-- Main Layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-[298px_minmax(0,1fr)_minmax(0,1fr)] gap-14 lg:gap-12 items-start">
                {{-- Left: circular progress card + image --}}
                <div class="reveal reveal-fade-right w-full">
                    <div class="flex flex-col">
                        <div class="bg-theme-navy rounded-2xl px-11.5 py-10 text-center">
                            <div class="relative inline-flex items-center justify-center">
                                <svg width="178" height="178" viewBox="0 0 178 178" class="-rotate-90"
                                    aria-hidden="true">
                                    <circle cx="89" cy="89" r="86" fill="none"
                                        stroke="rgba(255,255,255,0.14)" stroke-width="6"></circle>
                                    <circle cx="89" cy="89" r="86" fill="none" stroke="#0b59db"
                                        stroke-width="6" stroke-linecap="round" stroke-dasharray="540.35"
                                        stroke-dashoffset="108.07"></circle>
                                </svg>
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white text-[34px] font-medium tracking-wide">80<span
                                        class="text-[0.6em]">%</span></span>
                            </div>
                            <h3 class="text-white text-lg font-semibold leading-snug mt-8">Empowering Innovation One
                                Solution at a Time</h3>
                        </div>
                        <div class="rounded-2xl overflow-hidden mt-6 shadow-[0_15px_40px_-15px_rgba(11,20,34,0.25)]">
                            <img alt="Bismillah Computer &amp; Technology" loading="lazy" width="298" height="152"
                                class="w-full h-auto object-cover" src="/images/home/about/about_13_3.png" />
                        </div>
                    </div>
                </div>

                {{-- Middle: description + features + CTA --}}
                <div class="reveal reveal-fade-up w-full max-w-139.75 mx-auto lg:mx-6 xl:mx-10">
                    <p class="text-[#6e7070] text-base leading-6.5 mb-8">Bismillah Computer &amp; Technology delivers
                        secure, scalable, and affordable IT solutions — from network consultancy and website development to
                        ISP, hardware, and software support. With over 10 years of trusted experience, we help businesses
                        stay connected, reliable, and future-ready.</p>
                    <div class="flex flex-col gap-10">
                        {{-- Feature 1 --}}
                        <div class="reveal reveal-fade-up">
                            <div class="group flex items-start gap-4">
                                <div
                                    class="shrink-0 flex items-center justify-center w-18 h-18 rounded-[20px] bg-blue-50 transition-colors duration-500 group-hover:bg-theme-navy">
                                    <img alt="Innovation at our core" loading="lazy" width="34" height="34"
                                        class="object-contain transition-transform duration-500 group-hover:transform-[rotateY(180deg)]"
                                        src="/images/home/about/about_13_1.svg" />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-[22px] font-semibold tracking-wide text-theme-navy leading-snug">
                                        Innovation at our core</h3>
                                    <p class="text-[#6e7070] text-base leading-relaxed mt-1.5">Driving growth through
                                        smart, reliable, and future-ready IT solutions.</p>
                                </div>
                            </div>
                        </div>
                        {{-- Feature 2 --}}
                        <div class="reveal reveal-fade-up">
                            <div class="group flex items-start gap-4">
                                <div
                                    class="shrink-0 flex items-center justify-center w-18 h-18 rounded-[20px] bg-blue-50 transition-colors duration-500 group-hover:bg-theme-navy">
                                    <img alt="Internal Networking" loading="lazy" width="34" height="34"
                                        class="object-contain transition-transform duration-500 group-hover:transform-[rotateY(180deg)]"
                                        src="/images/home/about/about_13_2.svg" />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-[22px] font-semibold tracking-wide text-theme-navy leading-snug">
                                        Internal Networking</h3>
                                    <p class="text-[#6e7070] text-base leading-relaxed mt-1.5">Streamline communication and
                                        data sharing with secure, high-performance internal networks.</p>
                                </div>
                            </div>
                        </div>
                        {{-- Feature 3 --}}
                        <div class="reveal reveal-fade-up">
                            <div class="group flex items-start gap-4">
                                <div
                                    class="shrink-0 flex items-center justify-center w-18 h-18 rounded-[20px] bg-blue-50 transition-colors duration-500 group-hover:bg-theme-navy">
                                    <img alt="Simplifying complexity" loading="lazy" width="34" height="34"
                                        class="object-contain transition-transform duration-500 group-hover:transform-[rotateY(180deg)]"
                                        src="/images/home/about/about_13_3.svg" />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-[22px] font-semibold tracking-wide text-theme-navy leading-snug">
                                        Simplifying complexity</h3>
                                    <p class="text-[#6e7070] text-base leading-relaxed mt-1.5">Turning complicated
                                        technology into simple, effective solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="group mt-10 inline-flex items-center gap-3 bg-theme-navy hover:bg-theme-blue text-white font-semibold text-base rounded-[50px] px-9 py-4 transition-colors duration-300"
                        href="{{ route('it-support') }}">
                        Discover More
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="transition-transform duration-300 group-hover:translate-x-1">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                {{-- Right: image + spinning badge + blue stat card --}}
                <div class="reveal reveal-fade-left w-full">
                    <div class="relative max-w-md mx-auto lg:max-w-none">
                        <div class="pt-28 pr-28 sm:pt-32 sm:pr-32">
                            <div class="rounded-2xl overflow-hidden shadow-[0_25px_60px_-25px_rgba(11,89,219,0.35)]">
                                <img alt="Bismillah Computer &amp; Technology" loading="lazy" width="305"
                                    height="335" class="w-full h-auto object-cover"
                                    src="/images/home/about/about_13_2.png" />
                            </div>
                        </div>
                        {{-- Spinning badge --}}
                        <div class="absolute top-0 right-0">
                            <div class="relative flex items-center justify-center rounded-full bg-[#F3F7FD] h-50 w-50">
                                <div class="absolute inset-0 animate-[spin-badge_10s_linear_infinite_alternate] motion-reduce:animate-none"
                                    style="will-change:transform">
                                    @php
                                        $text = 'BISMILLAH COMPUTER & TECHNOLOGY * *';
                                        $chars = str_split($text);
                                        $step = 360 / count($chars);
                                    @endphp
                                    @foreach ($chars as $i => $char)
                                        <span
                                            class="absolute left-1/2 top-1/2 text-theme-navy font-bold uppercase leading-none"
                                            style="font-size:clamp(9px, 1.4vw, 13px);transform:translate(-50%, -50%) rotate({{ $i * $step }}deg) translateY(-4.8em)">{{ $char }}</span>
                                    @endforeach
                                </div>
                                <div class="relative w-[45%] h-[45%]">
                                    <img alt="Bismillah Computer &amp; Technology" loading="lazy" width="88"
                                        height="88" class="w-full h-full object-contain"
                                        src="/images/home/about/logo3.svg" />
                                </div>
                            </div>
                        </div>
                        {{-- Blue stat card --}}
                        <div
                            class="absolute -bottom-30 right-0 w-[min(258px,65%)] bg-theme-blue rounded-2xl px-6 py-7 flex flex-col items-center text-center shadow-2xl">
                            <div class="relative inline-flex items-center justify-center">
                                <svg width="118" height="118" viewBox="0 0 118 118" class="-rotate-90"
                                    aria-hidden="true">
                                    <circle cx="59" cy="59" r="56.5" fill="none"
                                        stroke="rgba(255,255,255,0.22)" stroke-width="5"></circle>
                                    <circle cx="59" cy="59" r="56.5" fill="none" stroke="#ffffff"
                                        stroke-width="5" stroke-linecap="round" stroke-dasharray="355"
                                        stroke-dashoffset="28.4"></circle>
                                </svg>
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white text-[34px] font-medium tracking-wide">92<span
                                        class="text-[0.6em]">%</span></span>
                            </div>
                            <h3 class="text-white text-lg font-semibold leading-snug mt-4">Reliable IT. Real-Time Results.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================== WHAT WE OFFER (Dark Section) ======================== --}}
    <section class="bg-linear-to-b from-gray-50 via-white to-gray-50 py-10 px-4 sm:px-6 lg:px-8 overflow-hidden relative">
    </section>
    <div class="reveal reveal-fade-up text-start -mt-2 sm:-mt-6 max-w-7xl mx-auto flex justify-between">
        <div>
            <span class="inline-flex items-center gap-3 text-theme-blue text-lg sm:text-xl font-medium tracking-wide">
                <span class="relative inline-block h-5 w-5 shrink-0" aria-hidden="true">
                    <span class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-border"></span>
                    <span class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-blue"></span>
                </span>
                <span class="font-bold uppercase">What We Offer</span>
                <span class="relative inline-block h-5 w-5 shrink-0" aria-hidden="true">
                    <span class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-blue"></span>
                    <span class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-border"></span>
                </span>
            </span>
            <h2
                class="text-3xl sm:text-4xl md:text-[44px] xl:text-5xl font-bold text-theme-navy tracking-tight leading-tight mt-4 mb-12 md:mb-16">
                Explore Our Services</h2>
        </div>
        <div>
            <p class="text-gray-500 max-w-xl text-sm sm:text-base font-light leading-relaxed">Expert guidance on digital
                transformation, infrastructure planning, and technology roadmaps aligned with business goals. Design,
                installation, and management.</p>
        </div>
    </div>
    <section class="what-we-offer relative min-h-150 w-full overflow-hidden bg-slate-900 text-white" data-active="0">
        <div class="absolute inset-0 z-0 transition-all duration-700 ease-in-out">
            <div class="wwog-bg absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100" data-index="0">
                <img alt="IT Consulting &amp; Strategy" decoding="async" class="object-cover object-center"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1600" />
            </div>
            <div class="wwog-bg absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0" data-index="1">
                <img alt="Website Design &amp; Development" loading="lazy" decoding="async"
                    class="object-cover object-center"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1600" />
            </div>
            <div class="wwog-bg absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0" data-index="2">
                <img alt="Domain &amp; Hosting Services" loading="lazy" decoding="async"
                    class="object-cover object-center"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&q=80&w=1600" />
            </div>
            <div class="absolute inset-0 bg-black/20"></div>
        </div>
        <div
            class="relative z-10 grid min-h-150 w-full grid-cols-1 divide-y divide-white/20 border-t border-b border-white/20 md:grid-cols-3 md:divide-x md:divide-y-0">
            {{-- Card 1 --}}
            <div class="wwog-card group flex flex-col justify-between p-8 md:p-10 transition-all duration-500 ease-in-out bg-slate-950/75 backdrop-blur-sm"
                data-index="0">
                <div>
                    <h3 class="whitespace-pre-line text-2xl font-bold leading-snug tracking-tight text-white md:text-3xl">
                        IT Consulting &amp;
                        Strategy</h3>
                </div>
                <div class="wwog-content flex flex-col gap-6 pt-12 transition-all duration-500 opacity-100 translate-y-0">
                    <p class="text-sm font-light leading-relaxed text-gray-200 md:text-base">We help businesses plan,
                        manage, and scale their IT infrastructure with expert guidance and on-site support.</p>
                    <a href="{{ route('it-support') }}"><button
                            class="cursor-pointer inline-flex items-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-slate-900 transition-transform duration-300 hover:bg-gray-100 hover:scale-105 active:scale-95"><span>View
                                Details</span><svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></button></a>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="wwog-card group flex flex-col justify-between p-8 md:p-10 transition-all duration-500 ease-in-out bg-transparent hover:bg-slate-950/50 hover:backdrop-blur-sm"
                data-index="1">
                <div>
                    <h3 class="whitespace-pre-line text-2xl font-bold leading-snug tracking-tight text-white md:text-3xl">
                        Website Design
                        &amp; Development</h3>
                </div>
                <div
                    class="wwog-content flex flex-col gap-6 pt-12 transition-all duration-500 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                    <p class="text-sm font-light leading-relaxed text-gray-200 md:text-base">Crafting stunning, responsive
                        websites tailored to elevate your brand identity and drive user engagement.</p>
                    <a href="{{ route('web.development') }}"><button
                            class="cursor-pointer inline-flex items-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-slate-900 transition-transform duration-300 hover:bg-gray-100 hover:scale-105 active:scale-95"><span>View
                                Details</span><svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></button></a>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="wwog-card group flex flex-col justify-between p-8 md:p-10 transition-all duration-500 ease-in-out bg-transparent hover:bg-slate-950/50 hover:backdrop-blur-sm"
                data-index="2">
                <div>
                    <h3 class="whitespace-pre-line text-2xl font-bold leading-snug tracking-tight text-white md:text-3xl">
                        Domain &amp;
                        Hosting Services</h3>
                </div>
                <div
                    class="wwog-content flex flex-col gap-6 pt-12 transition-all duration-500 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                    <p class="text-sm font-light leading-relaxed text-gray-200 md:text-base">Reliable, high-speed cloud
                        hosting and domain registration solutions to keep your web apps online 24/7.</p>
                    <a href="{{ route('web.hosting') }}"><button
                            class="cursor-pointer inline-flex items-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-slate-900 transition-transform duration-300 hover:bg-gray-100 hover:scale-105 active:scale-95"><span>View
                                Details</span><svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></button></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================== MARQUEE ======================== --}}
    <div class="py-10">
        <div class="w-full overflow-hidden bg-white select-none">
            <div class="flex w-max animate-marquee items-center gap-12">
                @php
                    $marqueeItems = ['NETWORK SETUP', 'SOLUTIONS', 'CONSULTING', 'IT SERVICES'];
                    $allItems = array_merge($marqueeItems, $marqueeItems, $marqueeItems);
                @endphp
                @foreach ($allItems as $index => $item)
                    <div class="flex items-center gap-12 whitespace-nowrap">
                        <span
                            class="text-5xl text-[#D1D5DB] font-black uppercase tracking-wider md:text-7xl lg:text-8xl transition-colors duration-500 ease-out hover:text-[#0B132A] p-0 w-fit">{{ $item }}</span>
                        <div class="relative flex h-16 w-16 items-center justify-center md:h-20 md:w-20">
                            <svg class="h-full w-full animate-spin-slow text-gray-400" viewBox="0 0 100 100">
                                <path id="textPath-{{ $index }}"
                                    d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none" />
                                <text class="text-[10.5px] font-medium tracking-[2.2px] uppercase fill-gray-400">
                                    <textPath href="#textPath-{{ $index }}">Best Services • Best Services •
                                    </textPath>
                                </text>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center text-blue-600">
                                <svg class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07l14.14-14.14" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ======================== BLOG SECTION ======================== --}}
    <section class="bg-linear-to-b from-gray-50 via-white to-gray-50 py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-flex items-center gap-3 text-theme-blue text-lg sm:text-xl font-medium tracking-wide">
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-border"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-blue"></span></span>
                    <span class="font-bold uppercase">Our Blog</span>
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-blue"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-border"></span></span>
                </span>
                <h2
                    class="text-3xl sm:text-4xl md:text-[44px] xl:text-5xl font-bold text-theme-navy tracking-tight leading-tight mt-4">
                    Innovations shaping the digital world</h2>
            </div>
            <div class="swiper blog-swiper">
                <div class="swiper-wrapper">
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
                    @foreach (array_merge($blogs, $blogs) as $b)
                            <div class="swiper-slide h-auto">
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
                            </div>
                        @endforeach
                </div>
            </div>
            {{-- Blog Navigation & Pagination --}}
            <div class="mt-10 flex items-center justify-center gap-6">
                <button
                    class="blog-swiper-prev p-2.5 rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm transition-all cursor-pointer hover:text-white hover:bg-brand-secondary hover:border-brand-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M19 12H5"></path>
                        <path d="m12 19-7-7 7-7"></path>
                    </svg>
                </button>
                <div class="flex items-center space-x-2">
                    @foreach ($blogs as $i => $blog)
                        <button aria-label="Go to slide {{ $i + 1 }}" data-index="{{ $i }}"
                            class="blog-custom-bullet w-2 h-2 rounded-full bg-gray-600 cursor-pointer transition-all {{ $i === 0 ? 'blog-bullet-active' : '' }}"></button>
                    @endforeach
                </div>
                <button
                    class="blog-swiper-next p-2.5 rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm transition-all cursor-pointer hover:text-white hover:bg-brand-secondary hover:border-brand-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- ======================== WHAT WE DO ======================== --}}
    <section class="bg-linear-to-b from-gray-50 via-white to-gray-50 py-20 px-4 sm:px-6 lg:px-8 overflow-hidden relative">
        <div class="absolute top-20 left-1/2 -translate-x-1/2 w-125 h-125 rounded-full pointer-events-none"
            style="background:radial-gradient(circle, rgba(191,219,254,0.15) 0%, transparent 70%);will-change:transform">
        </div>
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative z-10">
            <div class="mb-24">
                <div class="reveal fade-up flex flex-col md:flex-row md:items-end justify-between mb-16">
                    <div>
                        <span
                            class="text-xs font-bold tracking-widest text-blue-600 uppercase bg-blue-50 px-3 py-1.5 rounded-md ring-1 ring-blue-600/10">Capabilities</span>
                        <h2 class="text-3xl sm:text-4xl font-black text-gray-900 tracking-tight mt-4">What we do.</h2>
                    </div>
                    <p class="text-gray-500 max-w-md mt-4 md:mt-0 text-sm sm:text-base font-light leading-relaxed">We
                        engineer tailor-made network frameworks, telephony setups, and secure operational logic pipelines
                        optimized for peak availability.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @php
                        $services = [
                            [
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-light-bg"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>',
                                'title' => 'IT Support',
                                'description' =>
                                    'Plan, design, implement and manage IT infrastructure for small business, medium-sized business and residential.',
                            ],
                            [
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-light-bg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                                'title' => 'Phone Systems',
                                'description' =>
                                    'Providing on-demand service for supply, installation and maintenance of telephone systems.',
                            ],
                            [
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-light-bg"><circle cx="12" cy="12" r="10"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path></svg>',
                                'title' => 'Internet',
                                'description' =>
                                    'See what we provide in terms of internet services, including NBN, Cel-Fi, Starlink and LTE solutions.',
                            ],
                            [
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-light-bg"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>',
                                'title' => 'Cloud Services',
                                'description' =>
                                    'Managed cloud & data solutions, securely managed across hybrid, private or public cloud platforms.',
                            ],
                        ];
                    @endphp
                    @foreach ($services as $index => $service)
                        <div class="reveal fade-up h-full" style="transition-delay:{{ ($index % 2) * 120 }}ms">
                            <div
                                class="group relative rounded-2xl p-0.5 transition-all duration-500 bg-linear-to-br from-gray-200/80 via-gray-100 to-gray-200/40 hover:from-blue-500 hover:via-indigo-500 hover:to-cyan-400 hover:shadow-[0_20px_40px_-15px_rgba(59,130,246,0.25)] hover:-translate-y-1.5 border border-brand-blue h-full">
                                <div
                                    class="relative flex items-start space-x-5 p-6 sm:p-8 bg-white rounded-[14px] h-full w-full">
                                    <div
                                        class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl ring-1 ring-blue-100 bg-brand-active group-hover:bg-linear-to-br group-hover:shadow-md transition-all duration-300 shadow-sm">
                                        <div class="transition-colors duration-300 group-hover:text-white">
                                            {!! $service['icon'] !!}</div>
                                    </div>
                                    <div class="space-y-2">
                                        <h3
                                            class="text-xl font-bold text-gray-900 tracking-tight transition-colors duration-300 group-hover:text-brand-active">
                                            {{ $service['title'] }}</h3>
                                        <p class="text-gray-500 text-sm sm:text-base font-light leading-relaxed">
                                            {{ $service['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ======================== HOW WE DO (Partner Logos) ======================== --}}
    <section class="bg-linear-to-b from-gray-50 via-white to-gray-50 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden relative">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative z-10">
            <div class="reveal fade-up text-center md:text-left mb-12">
                <span
                    class="text-xs font-bold tracking-widest text-blue-600 uppercase bg-blue-50 px-3 py-1.5 rounded-md ring-1 ring-blue-600/10">Ecosystem</span>
                <h2 class="text-3xl font-black text-gray-900 tracking-tight mt-3">How we do it.</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
                @php
                    $partners = [
                        ['name' => 'MikroTik', 'logo' => '/images/home/how-we-do/mikrotik.png'],
                        ['name' => 'N-Able', 'logo' => '/images/home/how-we-do/nable.png'],
                        ['name' => 'Grandstream', 'logo' => '/images/home/how-we-do/grandstream.png'],
                        ['name' => 'WordPress', 'logo' => '/images/home/how-we-do/wordpress.png'],
                        ['name' => 'Microsoft 365', 'logo' => '/images/home/how-we-do/microsoft365.png'],
                        ['name' => 'Ingram', 'logo' => '/images/home/how-we-do/ingram.png'],
                        ['name' => 'Cellfi', 'logo' => '/images/home/how-we-do/cellfi.png'],
                        ['name' => 'Ipecs', 'logo' => '/images/home/how-we-do/ipecs.png'],
                        ['name' => 'HPE', 'logo' => '/images/home/how-we-do/hpe.png'],
                        ['name' => 'Avaya', 'logo' => '/images/home/how-we-do/avaya.png'],
                        ['name' => 'Cove', 'logo' => '/images/home/how-we-do/cove.png'],
                        ['name' => 'Veeam', 'logo' => '/images/home/how-we-do/veeam.png'],
                        ['name' => 'Datto', 'logo' => '/images/home/how-we-do/datto.png'],
                        ['name' => 'Recaptcha', 'logo' => '/images/home/how-we-do/recaptcha.png'],
                        ['name' => 'Woo', 'logo' => '/images/home/how-we-do/woo.png'],
                    ];
                @endphp
                @foreach ($partners as $index => $partner)
                    <div class="reveal fade-up" style="transition-delay:{{ ($index % 5) * 80 }}ms">
                        <div
                            class="flex items-center justify-center bg-white rounded-xl border border-gray-400 opacity-100 hover:grayscale-0 hover:opacity-100 hover:border-brand-hover hover:shadow-md hover:scale-[1.02] transition-all duration-300 cursor-pointer aspect-square">
                            <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}"
                                class="object-contain max-w-full max-h-full p-2 sm:p-0.5" loading="lazy" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ======================== OUR APPROACH ======================== --}}
    <section class="bg-dark-deep text-white py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full pointer-events-none"
            style="background:radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);will-change:transform">
        </div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full pointer-events-none"
            style="background:radial-gradient(circle, rgba(16,185,129,0.04) 0%, transparent 70%);will-change:transform">
        </div>
        <div class="max-w-7xl mx-auto relative z-10 px-4 sm:px-6 lg:px-8">
            <div class="reveal fade-up text-center max-w-3xl mx-auto mb-16 md:mb-24">
                <h2 class="text-xl font-bold tracking-wider text-blue-500 uppercase mb-3">Our Approach</h2>
                <p
                    class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight bg-linear-to-r from-white via-gray-200 to-gray-400 bg-clip-text text-transparent mb-6">
                    Complete 360° Care of Your IT.</p>
                <p class="text-gray-400 text-base md:text-lg leading-relaxed font-light text-justify">At Total Solutions
                    IT, we take a proactive, end-to-end approach to managing your technology. Our proven three-stage
                    framework transforms IT from a constant frustration into a reliable, secure, and scalable business
                    asset.</p>
            </div>
            @php
                $approach = [
                    [
                        'step' => '1. Stabilise',
                        'title' => 'Bringing your IT up to standard',
                        'desc' =>
                            'We start by gaining a deep understanding of your business and your existing IT environment. From there, we address gaps, risks, and inefficiencies to create a stable, secure foundation.',
                        'heading' => 'How we stabilise:',
                        'points' => [
                            'Comprehensive IT audit and health check',
                            'Review of your current systems and workflows',
                            'Identification of risks and problem areas',
                            'Clear, prioritised recommendations',
                            'Development of a practical IT roadmap',
                        ],
                    ],
                    [
                        'step' => '2. Optimise',
                        'title' => 'Fine-tuning your operations',
                        'desc' =>
                            'Once your IT is stable, we focus on proactive management and continuous improvement. Our team monitors, maintains, and supports your systems.',
                        'heading' => 'How we optimise:',
                        'points' => [
                            '24/7 system monitoring',
                            'Proactive maintenance and patching',
                            'Continuous efficiency improvements',
                        ],
                    ],
                    [
                        'step' => '3. Enhance',
                        'title' => 'Accelerating your growth',
                        'desc' =>
                            'With a solid and optimised IT environment in place, we work with you to align technology with your business goals.',
                        'heading' => 'How we enhance:',
                        'points' => [
                            'Alignment of IT with business strategy',
                            'Technology planning and future-proofing',
                            'Scalable infrastructure upgrades',
                        ],
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                @foreach ($approach as $index => $item)
                    <div class="reveal fade-up h-full" style="transition-delay:{{ $index * 120 }}ms">
                        <div
                            class="group relative flex flex-col h-full rounded-2xl bg-linear-to-b from-dark-card to-dark-card-alt border border-gray-800 p-8 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500/50 hover:shadow-[0_10px_30px_-10px_rgba(59,130,246,0.2)]">
                            <div
                                class="absolute top-0 left-0 w-full h-0.5 bg-linear-to-r from-transparent via-gray-700 to-transparent rounded-t-2xl transition-all duration-500 group-hover:via-blue-500">
                            </div>
                            <div class="flex justify-center mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-brand-blue">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="text-center mb-6">
                                <span
                                    class="text-xs font-bold tracking-widest text-blue-400 uppercase bg-blue-500/10 px-3 py-1 rounded-full">Stage
                                    0{{ $index + 1 }}</span>
                                <h3 class="text-2xl font-bold text-white mt-4 mb-2 tracking-tight">{{ $item['step'] }}
                                </h3>
                                <h4
                                    class="text-lg font-semibold text-gray-300 px-2 min-h-14 flex items-center justify-center">
                                    {{ $item['title'] }}</h4>
                            </div>
                            <p class="text-gray-400 text-sm leading-relaxed font-light mb-8 text-justify">
                                {{ $item['desc'] }}</p>
                            <div class="mt-auto pt-6 border-t border-gray-800/60">
                                <h5 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">
                                    {{ $item['heading'] }}</h5>
                                <ul class="space-y-3 text-sm text-gray-300">
                                    @foreach ($item['points'] as $point)
                                        <li class="flex items-start space-x-3">
                                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-2 shrink-0"></span>
                                            <span class="leading-tight font-light">{{ $point }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                        'image' => '/images/home/team/1.png',
                    ],
                    [
                        'name' => 'Tanzim Hasan Anik',
                        'role' => 'Director',
                        'label' => 'Director',
                        'image' => '/images/home/team/2.jpg',
                    ],
                    [
                        'name' => 'Habibullah Mezbah',
                        'role' => 'Web Developer',
                        'label' => 'Developer',
                        'image' => '/images/home/team/3.png',
                    ],
                    [
                        'name' => 'Ahsan Ahmed Rakib',
                        'role' => 'Software Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/4.jpg',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                @foreach ($team as $index => $member)
                    <div class="reveal fade-up h-full" style="transition-delay:{{ ($index % 4) * 100 }}ms">
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
                                <p class="text-[13px] font-semibold text-gray-500 tracking-wide">/ {{ $member['role'] }} /
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

    {{-- ======================== TESTIMONIALS ======================== --}}
    <section class="bg-dark-hero text-white py-16 md:py-24 font-sans overflow-hidden">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            {{-- Left Column --}}
            <div class="reveal fade-up lg:col-span-5 space-y-8">
                <div class="flex items-center space-x-2 text-brand-blue font-semibold text-xl tracking-widest uppercase">
                    <span>OUR TESTIMONIALS</span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight leading-[1.1] text-white">What our clients
                    <br />say about us
                </h2>
                <div class="pt-4 space-y-2">
                    <div
                        class="text-6xl sm:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-linear-to-b from-white/90 to-white/20">
                        25+</div>
                    <p class="text-gray-300 font-medium text-base sm:text-lg">Successful IT Projects</p>
                    <div class="flex items-center space-x-1 pt-1 text-brand-secondary">
                        @for ($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="currentColor" stroke="none" class="w-5 h-5">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>
            {{-- Right Column --}}
            <div class="reveal fade-left lg:col-span-7 relative w-full">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        @php
                            $testimonials = [
                                [
                                    'quote' =>
                                        'Their IT solutions greatly improved our workflow and enhanced productivity across teams. Reliable technology services we can always trust. The team delivered innovative strategies.',
                                    'name' => 'Bisirat Futsum',
                                    'role' => 'Digital Manager',
                                    'avatar' => '/images/home/avatar-01.jpg',
                                ],
                                [
                                    'quote' =>
                                        'Working with this team transformed our digital operations. Their proactive support and seamless implementation exceeded all our initial expectations.',
                                    'name' => 'Marcus Vance',
                                    'role' => 'CTO, TechCorp',
                                    'avatar' => '/images/home/avatar-02.jpg',
                                ],
                                [
                                    'quote' =>
                                        'Exceptional quality of work and incredible communication. They guided us every step of the way to complete our cloud migration smoothly.',
                                    'name' => 'Sarah Jenkins',
                                    'role' => 'Operations Lead',
                                    'avatar' => '/images/home/avatar-03.jpg',
                                ],
                            ];
                        @endphp
                        @foreach ($testimonials as $item)
                            <div class="swiper-slide pb-12">
                                <div class="space-y-8">
                                    <p
                                        class="text-xl sm:text-2xl md:text-[26px] font-normal leading-relaxed text-gray-200 text-justify">
                                        &quot;{{ $item['quote'] }}&quot;</p>
                                    <div class="flex items-center space-x-4">
                                        <div class="relative">
                                            <div
                                                class="relative w-14 h-14 rounded-full overflow-hidden border-2 border-white/10 shadow-lg">
                                                <img src="{{ $item['avatar'] }}" alt="{{ $item['name'] }}"
                                                    class="object-cover w-full h-full" />
                                            </div>
                                            <div
                                                class="absolute -bottom-1 -right-1 bg-brand-secondary text-white p-1 rounded-full shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 24 24" fill="currentColor" stroke="none">
                                                    <path
                                                        d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21z">
                                                    </path>
                                                    <path
                                                        d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-white text-base sm:text-lg leading-tight">
                                                {{ $item['name'] }}</h4>
                                            <p class="text-gray-400 text-xs sm:text-sm font-medium">{{ $item['role'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex items-center space-x-4 pt-4 border-t border-gray-800/60">
                    <button
                        class="testimonial-prev p-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-800/80 transition-colors cursor-pointer focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-6 h-6">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </button>
                    <div class="testimonial-pagination flex items-center space-x-2"></div>
                    <button
                        class="testimonial-next p-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-800/80 transition-colors cursor-pointer focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-6 h-6">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hero slider with indicators
            var heroSwiper = new Swiper('.hero-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                onSlideChange: function(swiper) {
                    updateHeroIndicators(swiper.realIndex);
                }
            });
            window.heroSwiper = heroSwiper;
            updateHeroIndicators(0);

            function updateHeroIndicators(activeIndex) {
                document.querySelectorAll('.hero-indicator').forEach(function(btn, idx) {
                    var active = idx === activeIndex;
                    btn.classList.toggle('border-t-brand-blue', active);
                    btn.classList.toggle('border-t-white', !active);
                    var bar = btn.querySelector('span:first-child');
                    if (bar) {
                        bar.className = active ?
                            'absolute top-0 left-0 h-0.75 transition-all duration-300 w-full bg-blue-500' :
                            'absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500';
                    }
                    var label = btn.querySelector('span:last-child');
                    if (label) {
                        label.className = active ?
                            'mt-1 text-xs font-bold leading-tight md:text-sm text-blue-500' :
                            'mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500';
                    }
                });
            }

            setInterval(function() {
                if (window.heroSwiper) {
                    updateHeroIndicators(window.heroSwiper.realIndex);
                }
            }, 500);

            // What We Offer - hover active state
            var wwoSection = document.querySelector('.what-we-offer');
            if (wwoSection) {
                var wwoCards = wwoSection.querySelectorAll('.wwog-card');
                var wwoBgs = wwoSection.querySelectorAll('.wwog-bg');

                wwoCards.forEach(function(card) {
                    card.addEventListener('mouseenter', function() {
                        var idx = card.getAttribute('data-index');

                        wwoCards.forEach(function(c) {
                            c.classList.remove('bg-slate-950/75', 'backdrop-blur-sm');
                            c.classList.add('bg-transparent');
                            var content = c.querySelector('.wwog-content');
                            if (content) {
                                content.classList.remove('opacity-100', 'translate-y-0');
                                content.classList.add('opacity-0', 'translate-y-4');
                            }
                        });

                        card.classList.remove('bg-transparent');
                        card.classList.add('bg-slate-950/75', 'backdrop-blur-sm');
                        var activeContent = card.querySelector('.wwog-content');
                        if (activeContent) {
                            activeContent.classList.remove('opacity-0', 'translate-y-4');
                            activeContent.classList.add('opacity-100', 'translate-y-0');
                        }

                        wwoBgs.forEach(function(bg) {
                            bg.classList.toggle('opacity-0', bg.getAttribute(
                                'data-index') !== idx);
                            bg.classList.toggle('opacity-100', bg.getAttribute(
                                'data-index') === idx);
                        });
                    });
                });
            }

            // Blog slider with navigation & pagination
            var blogBullets = document.querySelectorAll('.blog-custom-bullet');
            window.blogSwiper = new Swiper('.blog-swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 32,
                navigation: {
                    prevEl: '.blog-swiper-prev',
                    nextEl: '.blog-swiper-next'
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });

            function updateBlogIndicators(realIndex) {
                var idx = realIndex % 3;
                blogBullets.forEach(function(b, i) {
                    if (i === idx) {
                        b.classList.add('blog-bullet-active');
                    } else {
                        b.classList.remove('blog-bullet-active');
                    }
                });
            }

            window.blogSwiper.on('slideChange', function(swiper) {
                updateBlogIndicators(swiper.realIndex);
            });

            setInterval(function() {
                if (window.blogSwiper) {
                    updateBlogIndicators(window.blogSwiper.realIndex);
                }
            }, 500);

            blogBullets.forEach(function(bullet) {
                bullet.addEventListener('click', function() {
                    var idx = parseInt(bullet.getAttribute('data-index'));
                    window.blogSwiper.slideToLoop(idx);
                    updateBlogIndicators(idx);
                });
            });

            // Testimonial slider
            new Swiper('.testimonial-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                    prevEl: '.testimonial-prev',
                    nextEl: '.testimonial-next'
                },
                pagination: {
                    el: '.testimonial-pagination',
                    clickable: true,
                    bulletClass: 'w-2 h-2 rounded-full bg-gray-600 cursor-pointer transition-all',
                    bulletActiveClass: '!w-6 !bg-brand-secondary'
                },
            });
        });
    </script>
    <style>
        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 50%;
            background-color: #64748b;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .swiper-pagination-bullet-active {
            width: 24px;
            height: 8px;
            border-radius: 9999px;
            background-color: #da3825 !important;
        }

        .hero-indicator:hover {
            border-top-color: #157cc1 !important;
        }

        .hero-indicator:hover span:last-child {
            color: #157cc1 !important;
        }

        .blog-custom-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 50%;
            background-color: #64748b;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .blog-bullet-active {
            width: 24px;
            height: 8px;
            border-radius: 9999px;
            background-color: #da3825 !important;
        }
    </style>
@endpush

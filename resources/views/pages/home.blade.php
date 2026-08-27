@extends('layouts.app')

@section('title', 'Home | Bismillah Computer & Technology')
@section('description',
    'Bismillah Computer & Technology - Your trusted partner for web design, cloud solutions, voice
    systems, internet connectivity, and managed IT support across Bangladesh.')
@section('keywords',
    'IT services,managed IT support,cyber security,cloud services,Microsoft 365,Azure,web design,web
    development,SEO,business phone systems,VoIP,BCT,internet service provider,Uttara Dhaka,Bismillah Computer & Technology')
@section('canonical', 'https://bct.com.bd/')

@section('content')

    {{-- ======================== HERO SLIDER ======================== --}}
    <section class="relative w-full overflow-hidden bg-white py-8 md:pt-16">
        <div class="reveal reveal-fade-up px-4 sm:px-6 lg:px-8">
            <div class="swiper hero-swiper w-full">
                <div class="swiper-wrapper">

                    {{-- Slide 1: IT --}}
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
                    {{-- Slide 2: Internet --}}
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2 pb-8">
                            <div class="flex flex-col items-start space-y-4 md:space-y-6 text-left order-2 md:order-1">
                                <span
                                    class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm hover:bg-brand-green-hover transition-colors">Internet
                                    &gt;</span>
                                <h1
                                    class="whitespace-pre-line text-xl font-extrabold tracking-tight text-heading sm:text-4xl md:text-5xl lg:text-5xl leading-tight">
                                    BCT &amp; Business
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
                    {{-- Slide 4: Cloud --}}
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
                    {{-- Slide 5: Telecoms --}}
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
                </div>
            </div>

            {{-- Hero Indicators --}}
            <div class="mt-4 border-t border-gray-100 pt-4">
                <div
                    class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:flex md:items-stretch md:justify-between md:gap-0 divide-x-0 md:divide-x divide-gray-200">
                    {{-- 1 IT --}}
                    <button onclick="heroSwiper.slideToLoop(0)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="1">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">IT
                            Services for Business and Home</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Fully Managed &amp;
                            AdHoc</span>
                    </button>
                    {{-- 2 INTERNET  --}}
                    <button onclick="heroSwiper.slideToLoop(1)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-white"
                        data-index="4">
                        <span
                            class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-0 bg-transparent group-hover:w-full group-hover:bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">BCT
                            &amp; Business Internet</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-gray-500">Internet, Home &amp;
                            Business</span>
                    </button>
                    {{-- 3 CYBER  --}}
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
                    {{-- 4 Cloud  --}}
                    <button onclick="heroSwiper.slideToLoop(4)"
                        class="hero-indicator group relative flex flex-col items-start p-3 text-left transition-all outline-none md:flex-1 md:px-4 border-t border-t-brand-blue"
                        data-index="0">
                        <span class="absolute top-0 left-0 h-0.75 transition-all duration-300 w-full bg-blue-500"></span>
                        <span
                            class="text-[11px] leading-tight text-gray-400 font-medium md:text-xs line-clamp-2 min-h-8">Cloud
                            Services &amp; Microsoft 365</span>
                        <span class="mt-1 text-xs font-bold leading-tight md:text-sm text-blue-500">Modern cloud
                            tools</span>
                    </button>
                    {{-- 5 TELECOM  --}}
                    <button onclick="heroSwiper.slideToLoop(4)"
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
                </div>
            </div>
        </div>
    </section>

    {{-- ======================== HERO V2 – BCT hero-8 Match ======================== --}}
    @php
        $heroV2Slides = [
            [
                'subtitle' => 'Reliable IT. Real-Time Results.',
                'title' => 'Comprehensive IT Solutions for a Digital World',
                'desc' => 'IT Solutions encompass a wide range of services, technologies, and strategies designed to address the technological needs of businesses and organizations.',
                'image' => '/images/home/hero/hero_1.jpg',
            ],
            [
                'subtitle' => 'Design. Develop. Deliver.',
                'title' => 'Your Vision, Our Web And App Mastery',
                'desc' => 'Streamline operations, increase efficiency, and drive growth with our innovative IT solutions.',
                'image' => '/images/home/hero/hero_2.jpg',
            ],
            [
                'subtitle' => 'Code. Create. Conquer.',
                'title' => 'Unlocking the Future with Digital Solutions',
                'desc' => 'Digital transformation is the process of integrating digital technology into all aspects of a business, fundamentally changing how it operates.',
                'image' => '/images/home/hero/hero_3.jpg',
            ],
        ];
    @endphp

    <div class="th-hero-wrapper hero-8 relative overflow-hidden" style="background-image:url('/images/home/hero/hero_bg_8_1.png');background-size:cover;background-position:center">
        <div class="hero-v2-swiper swiper relative w-full h-[600px] sm:h-[650px] md:h-[720px] lg:h-[820px]"
            data-slider-options='{"effect":"fade","pagination":{"el":".hero-v2-pagination","clickable":true}}'>
            <div class="swiper-wrapper">
                @foreach ($heroV2Slides as $slide)
                    <div class="swiper-slide">
                        <div class="hero-inner relative w-full h-full">
                            <div class="container mx-auto px-6 sm:px-12 lg:px-16 xl:px-20 relative z-20 h-full">
                                <div class="hero-v2-content max-w-[632px] h-full flex flex-col justify-center text-left"
                                    style="padding:120px 0">
                                    <span class="block text-white text-2xl sm:text-3xl font-bold mb-4"
                                        data-swiper-parallax="-150">{{ $slide['subtitle'] }}</span>
                                    <h1 class="text-white text-4xl sm:text-5xl lg:text-[74px] font-bold leading-[1.15] mb-5 capitalize"
                                        data-swiper-parallax="-250">{{ $slide['title'] }}</h1>
                                    <p class="text-white/80 text-lg leading-relaxed mb-8 max-w-[530px]"
                                        data-swiper-parallax="-350">{{ $slide['desc'] }}</p>
                                    <div data-swiper-parallax="-450">
                                        <a href="{{ route('it-support') }}"
                                            class="inline-flex items-center gap-3 bg-[#1d65f5] hover:bg-[#1450c9] text-white text-base font-semibold rounded-full px-12 py-5 transition-all duration-300 shadow-xl shadow-blue-600/25 group">
                                            <span>Get Started</span>
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Hero image with mask shape --}}
                            <div class="absolute top-0 right-0 h-full z-10" style="width:55%">
                                <div class="hero-img-mask w-full h-full" style="mask-image:url('/images/home/hero/hero-8-shape.png');-webkit-mask-image:url('/images/home/hero/hero-8-shape.png');mask-size:100% 100%;-webkit-mask-size:100% 100%;mask-repeat:no-repeat;-webkit-mask-repeat:no-repeat">
                                    <img src="{{ $slide['image'] }}" alt="" class="w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Vertical pagination (Swiper populates bullets) --}}
            <div class="hero-v2-pagination absolute left-[80px] top-[33%] z-40 w-[5px] hidden lg:block"></div>
        </div>

        {{-- Dashed decorative line --}}
        <div class="dash-shape absolute hidden xl:block" style="right:22%;bottom:21%;z-index:1">
            <svg width="955" height="342" viewBox="0 0 955 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M2.26882 224.167C2.36103 224.571 2.76314 224.823 3.16696 224.731L9.74758 223.229C10.1514 223.136 10.404 222.734 10.3118 222.33C10.2196 221.927 9.81747 221.674 9.41365 221.766L3.56422 223.102L2.22852 217.252C2.13631 216.849 1.7342 216.596 1.33038 216.688C0.926558 216.78 0.673949 217.183 0.76616 217.586L2.26882 224.167ZM298 313L298.269 313.7L298.287 313.693L298.305 313.685L298 313ZM654 218L654.685 218.305L654.698 218.276L654.708 218.247L654 218ZM947 24C947 26.2091 948.791 28 951 28C953.209 28 955 26.2091 955 24C955 21.7909 953.209 20 951 20C948.791 20 947 21.7909 947 24ZM389.784 297.463L389.51 298.161L389.784 297.463ZM447.41 320.682L447.54 319.943L447.41 320.682ZM143.886 257.411L144.588 257.676L143.886 257.411ZM131.262 283.172L130.553 282.928L131.262 283.172ZM93.9817 176.519L93.8798 177.262L93.9817 176.519ZM143.871 218.581L143.156 218.807L143.871 218.581ZM3.63508 224.399C3.96628 223.872 4.3106 223.337 4.66788 222.796L3.41594 221.969C3.05259 222.52 2.70219 223.064 2.36492 223.601L3.63508 224.399ZM6.84473 219.642C7.57227 218.631 8.34035 217.605 9.14805 216.566L7.96413 215.645C7.14517 216.698 6.36597 217.74 5.62748 218.765L6.84473 219.642ZM11.5593 213.577C12.3638 212.614 13.2005 211.645 14.0686 210.673L12.9502 209.674C12.0709 210.658 11.2233 211.639 10.4082 212.615L11.5593 213.577ZM16.6777 207.849C17.551 206.934 18.4515 206.02 19.3785 205.111L18.3278 204.04C17.389 204.961 16.4771 205.887 15.5927 206.813L16.6777 207.849ZM22.1605 202.468C23.0935 201.61 24.0501 200.758 25.0298 199.916L24.0516 198.779C23.0592 199.632 22.0903 200.495 21.1453 201.364L22.1605 202.468ZM27.9836 197.46C28.9746 196.664 29.9867 195.878 31.0195 195.106L30.121 193.905C29.0742 194.688 28.0484 195.484 27.0442 196.29L27.9836 197.46ZM34.1354 192.86C35.1811 192.134 36.2459 191.422 37.3293 190.728L36.5195 189.465C35.4204 190.17 34.3404 190.891 33.2801 191.627L34.1354 192.86ZM40.5966 188.717C41.6932 188.071 42.8072 187.443 43.9383 186.834L43.2277 185.513C42.079 186.131 40.948 186.769 39.835 187.425L40.5966 188.717ZM47.3514 185.086C48.4959 184.528 49.6565 183.992 50.8327 183.479L50.2329 182.104C49.0371 182.626 47.8576 183.171 46.6947 183.737L47.3514 185.086ZM54.3782 182.022C55.5651 181.564 56.7669 181.13 57.9831 180.722L57.506 179.3C56.2683 179.715 55.0455 180.157 53.8382 180.622L54.3782 182.022ZM61.6422 179.586C62.8644 179.238 64.1001 178.916 65.3491 178.622L65.0057 177.162C63.7335 177.461 62.475 177.789 61.2307 178.144L61.6422 179.586ZM69.0968 177.835C70.3447 177.604 71.605 177.401 72.8775 177.229L72.6767 175.743C71.3798 175.918 70.0954 176.124 68.8238 176.36L69.0968 177.835ZM76.6827 176.81C77.9452 176.703 79.2189 176.626 80.5036 176.58L80.4505 175.081C79.1408 175.127 77.8424 175.206 76.5554 175.316L76.6827 176.81ZM84.331 176.539C85.5959 176.557 86.8709 176.606 88.1557 176.688L88.2507 175.191C86.9413 175.108 85.6416 175.058 84.3522 175.04L84.331 176.539ZM91.9689 177.024C92.6036 177.095 93.2406 177.174 93.8798 177.262L94.0835 175.776C93.4323 175.687 92.7834 175.606 92.1367 175.533L91.9689 177.024ZM93.8798 177.262C94.5037 177.348 95.1252 177.443 95.7442 177.549L95.9963 176.07C95.3613 175.962 94.7236 175.864 94.0835 175.776L93.8798 177.262ZM99.44 178.303C100.666 178.595 101.879 178.925 103.08 179.294L103.52 177.859C102.289 177.482 101.044 177.143 99.7872 176.844L99.44 178.303ZM106.649 180.514C107.827 180.959 108.99 181.441 110.135 181.958L110.752 180.59C109.578 180.061 108.387 179.567 107.179 179.111L106.649 180.514ZM113.525 183.616C114.638 184.204 115.732 184.826 116.806 185.481L117.587 184.2C116.487 183.53 115.366 182.892 114.226 182.29L113.525 183.616ZM119.967 187.544C120.999 188.264 122.009 189.015 122.996 189.796L123.927 188.621C122.917 187.82 121.882 187.051 120.825 186.314L119.967 187.544ZM125.882 192.229C126.819 193.069 127.73 193.938 128.614 194.833L129.682 193.779C128.776 192.862 127.843 191.972 126.883 191.112L125.882 192.229ZM131.182 197.599C132.009 198.547 132.807 199.52 133.575 200.518L134.764 199.603C133.977 198.581 133.159 197.583 132.312 196.613L131.182 197.599ZM135.783 203.578C136.486 204.62 137.157 205.684 137.795 206.77L139.088 206.01C138.435 204.897 137.747 203.806 137.026 202.739L135.783 203.578ZM139.601 210.082C140.167 211.203 140.697 212.343 141.192 213.502L142.572 212.913C142.064 211.725 141.52 210.555 140.94 209.406L139.601 210.082ZM142.559 217.017C142.767 217.61 142.967 218.206 143.156 218.807L144.587 218.355C144.392 217.739 144.188 217.127 143.974 216.519L142.559 217.017ZM143.156 218.807C143.352 219.428 143.541 220.053 143.723 220.682L145.164 220.267C144.979 219.625 144.786 218.988 144.587 218.355L143.156 218.807ZM144.71 224.474C145.004 225.74 145.265 227.019 145.489 228.31L146.967 228.053C146.738 226.734 146.471 225.427 146.171 224.134L144.71 224.474ZM146.045 232.182C146.191 233.473 146.297 234.772 146.36 236.078L147.859 236.005C147.794 234.666 147.685 233.335 147.536 232.014L146.045 232.182ZM146.419 239.983C146.394 241.279 146.324 242.578 146.205 243.88L147.699 244.016C147.821 242.678 147.893 241.342 147.919 240.012L146.419 239.983ZM145.708 247.748C145.496 249.021 145.234 250.294 144.919 251.565L146.375 251.926C146.699 250.616 146.969 249.305 147.188 247.995L145.708 247.748ZM143.836 255.309C143.632 255.922 143.415 256.535 143.184 257.147L144.588 257.676C144.825 257.046 145.049 256.414 145.259 255.782L143.836 255.309ZM143.184 257.147C142.976 257.698 142.758 258.245 142.53 258.789L143.913 259.369C144.147 258.81 144.373 258.245 144.588 257.676L143.184 257.147ZM141.058 262.015C140.537 263.079 139.99 264.132 139.427 265.182L140.748 265.891C141.318 264.83 141.874 263.759 142.405 262.675L141.058 262.015ZM137.703 268.317C137.121 269.359 136.532 270.406 135.951 271.454L137.263 272.181C137.842 271.136 138.427 270.097 139.013 269.049L137.703 268.317ZM134.235 274.628C133.676 275.697 133.134 276.777 132.622 277.873L133.98 278.508C134.481 277.437 135.013 276.378 135.564 275.324L134.235 274.628ZM131.183 281.215C130.962 281.78 130.752 282.351 130.553 282.928L131.971 283.417C132.163 282.86 132.366 282.308 132.58 281.76L131.183 281.215ZM130.553 282.928C130.333 283.565 130.119 284.209 129.912 284.857L131.341 285.313C131.545 284.676 131.755 284.044 131.971 283.417L130.553 282.928ZM128.767 288.764C128.417 290.072 128.099 291.395 127.817 292.727L129.285 293.037C129.561 291.733 129.873 290.435 130.216 289.151L128.767 288.764ZM127.087 296.74C126.882 298.089 126.719 299.443 126.604 300.795L128.098 300.923C128.211 299.605 128.37 298.284 128.57 296.965L127.087 296.74ZM126.403 304.879C126.388 306.254 126.428 307.622 126.528 308.977L128.024 308.866C127.927 307.556 127.888 306.231 127.903 304.896L126.403 304.879ZM127.029 313.053C127.266 314.412 127.573 315.75 127.957 317.063L129.397 316.641C129.029 315.386 128.734 314.102 128.507 312.795L127.029 313.053ZM129.361 320.944C129.91 322.203 130.543 323.428 131.266 324.612L132.546 323.83C131.86 322.706 131.258 321.543 130.736 320.345L129.361 320.944ZM133.671 327.983C134.533 329.025 135.482 330.024 136.522 330.973L137.533 329.865C136.544 328.963 135.644 328.015 134.827 327.027L133.671 327.983ZM139.749 333.548C140.842 334.31 142.012 335.028 143.261 335.697L143.97 334.375C142.77 333.732 141.651 333.045 140.607 332.317L139.749 333.548ZM146.99 337.449C148.208 337.949 149.488 338.41 150.834 338.829L151.28 337.397C149.974 336.99 148.735 336.544 147.559 336.062L146.99 337.449ZM154.778 339.894C156.061 340.191 157.396 340.454 158.783 340.682L159.027 339.202C157.67 338.979 156.367 338.722 155.116 338.432L154.778 339.894ZM162.822 341.23C164.13 341.372 165.481 341.486 166.875 341.571L166.966 340.073C165.594 339.99 164.267 339.879 162.983 339.739L162.822 341.23ZM170.934 341.73C171.613 341.743 172.302 341.75 173 341.75V340.25C172.311 340.25 171.632 340.244 170.962 340.231L170.934 341.73ZM173 341.75C173.694 341.75 174.383 341.749 175.066 341.747L175.061 340.247C174.38 340.249 173.693 340.25 173 340.25V341.75ZM179.098 341.722C180.481 341.709 181.841 341.692 183.178 341.67L183.153 340.17C181.82 340.192 180.464 340.209 179.083 340.222L179.098 341.722ZM187.209 341.589C188.586 341.556 189.938 341.518 191.265 341.475L191.216 339.976C189.894 340.019 188.546 340.057 187.173 340.089L187.209 341.589ZM195.332 341.326C196.706 341.269 198.052 341.206 199.371 341.138L199.294 339.64C197.98 339.708 196.639 339.77 195.27 339.827L195.332 341.326ZM203.399 340.909C204.785 340.822 206.141 340.729 207.469 340.629L207.356 339.133C206.035 339.233 204.685 339.325 203.305 339.412L203.399 340.909ZM211.52 340.298C212.898 340.175 214.244 340.046 215.559 339.909L215.404 338.417C214.096 338.553 212.758 338.682 211.388 338.804L211.52 340.298ZM219.589 339.456C220.963 339.289 222.304 339.115 223.613 338.932L223.405 337.446C222.105 337.628 220.774 337.801 219.409 337.967L219.589 339.456ZM227.629 338.329C228.998 338.109 230.332 337.879 231.634 337.64L231.364 336.165C230.072 336.402 228.749 336.63 227.391 336.848L227.629 338.329ZM235.626 336.858C236.982 336.574 238.304 336.28 239.597 335.975L239.252 334.515C237.972 334.817 236.663 335.109 235.319 335.389L235.626 336.858ZM243.541 334.989C244.873 334.636 246.176 334.272 247.454 333.896L247.031 332.457C245.766 332.829 244.476 333.19 243.157 333.539L243.541 334.989ZM251.337 332.696C252.641 332.274 253.924 331.839 255.192 331.393L254.694 329.978C253.438 330.42 252.167 330.851 250.875 331.269L251.337 332.696ZM259.009 329.999C260.278 329.52 261.537 329.029 262.794 328.527L262.237 327.134C260.989 327.633 259.738 328.12 258.479 328.596L259.009 329.999ZM266.55 326.994C267.788 326.479 269.03 325.953 270.283 325.418L269.694 324.039C268.444 324.572 267.206 325.096 265.973 325.609L266.55 326.994ZM274.005 323.815C275.228 323.286 276.467 322.748 277.725 322.202L277.128 320.826C275.868 321.372 274.631 321.91 273.409 322.439L274.005 323.815ZM281.432 320.601C282.646 320.079 283.882 319.55 285.146 319.015L284.561 317.634C283.294 318.17 282.055 318.7 280.839 319.223L281.432 320.601ZM288.872 317.456C290.09 316.951 291.335 316.442 292.611 315.928L292.051 314.537C290.77 315.053 289.521 315.564 288.298 316.07L288.872 317.456ZM296.365 314.438C296.992 314.193 297.627 313.947 298.269 313.7L297.731 312.3C297.086 312.548 296.448 312.795 295.819 313.041L296.365 314.438ZM298.305 313.685C298.906 313.418 299.522 313.132 300.152 312.829L299.502 311.477C298.883 311.775 298.281 312.054 297.695 312.315L298.305 313.685ZM303.777 311C304.926 310.401 306.117 309.765 307.349 309.105L306.64 307.783C305.409 308.443 304.224 309.075 303.083 309.671L303.777 311ZM310.9 307.204C312.056 306.588 313.245 305.96 314.467 305.328L313.778 303.996C312.549 304.632 311.354 305.262 310.194 305.88L310.9 307.204ZM318.054 303.512C319.235 302.929 320.443 302.349 321.678 301.776L321.047 300.415C319.799 300.993 318.58 301.58 317.39 302.167L318.054 303.512ZM325.342 300.14C326.556 299.619 327.795 299.11 329.058 298.619L328.513 297.221C327.234 297.719 325.98 298.234 324.751 298.761L325.342 300.14ZM332.813 297.234C334.062 296.801 335.332 296.387 336.623 295.996L336.19 294.561C334.877 294.957 333.588 295.377 332.321 295.817L332.813 297.234ZM340.483 294.921C341.761 294.595 343.059 294.295 344.376 294.024L344.074 292.554C342.733 292.831 341.412 293.136 340.112 293.467L340.483 294.921ZM348.31 293.313C349.614 293.11 350.936 292.938 352.276 292.799L352.121 291.307C350.755 291.448 349.408 291.624 348.08 291.831L348.31 293.313ZM356.265 292.49C357.578 292.423 358.908 292.389 360.255 292.391L360.257 290.891C358.884 290.889 357.528 290.923 356.188 290.992L356.265 292.49ZM364.245 292.504C365.557 292.576 366.883 292.683 368.225 292.828L368.386 291.337C367.018 291.189 365.665 291.08 364.327 291.006L364.245 292.504ZM372.184 293.361C373.48 293.57 374.789 293.815 376.112 294.098L376.425 292.631C375.078 292.343 373.744 292.093 372.423 291.881L372.184 293.361ZM379.999 295.03C381.267 295.367 382.546 295.739 383.838 296.148L384.291 294.718C382.977 294.302 381.675 293.923 380.384 293.58L379.999 295.03ZM387.622 297.443C388.249 297.674 388.878 297.913 389.51 298.161L390.058 296.765C389.416 296.513 388.777 296.27 388.139 296.035L387.622 297.443ZM389.51 298.161C390.111 298.397 390.71 298.637 391.308 298.881L391.875 297.492C391.271 297.246 390.666 297.003 390.058 296.765L389.51 298.161ZM394.88 300.389C396.065 300.905 397.245 301.433 398.423 301.971L399.046 300.607C397.862 300.066 396.673 299.534 395.479 299.014L394.88 300.389ZM401.945 303.61C403.116 304.163 404.285 304.723 405.453 305.287L406.105 303.936C404.934 303.371 403.762 302.809 402.586 302.254L401.945 303.61ZM408.955 306.984C410.123 307.551 411.291 308.119 412.46 308.684L413.113 307.334C411.946 306.77 410.779 306.202 409.611 305.635L408.955 306.984ZM415.976 310.37C417.152 310.928 418.331 311.481 419.512 312.024L420.139 310.661C418.964 310.121 417.791 309.571 416.62 309.015L415.976 310.37ZM423.075 313.627C424.27 314.151 425.469 314.663 426.673 315.16L427.245 313.773C426.052 313.281 424.863 312.774 423.678 312.253L423.075 313.627ZM430.312 316.603C431.534 317.067 432.762 317.512 433.997 317.936L434.483 316.517C433.265 316.099 432.052 315.66 430.845 315.201L430.312 316.603ZM437.732 319.136C438.984 319.512 440.245 319.862 441.516 320.184L441.884 318.729C440.635 318.414 439.395 318.069 438.163 317.7L437.732 319.136ZM445.348 321.056C445.99 321.186 446.634 321.307 447.281 321.421L447.54 319.943C446.906 319.832 446.274 319.713 445.645 319.586L445.348 321.056ZM447.281 321.421C447.936 321.536 448.595 321.648 449.258 321.759L449.504 320.279C448.846 320.169 448.191 320.058 447.54 319.943L447.281 321.421ZM453.278 322.391C454.596 322.587 455.928 322.773 457.272 322.949L457.467 321.462C456.131 321.287 454.808 321.102 453.498 320.907L453.278 322.391ZM461.296 323.441C462.63 323.592 463.976 323.733 465.333 323.864L465.476 322.371C464.129 322.241 462.791 322.101 461.465 321.95L461.296 323.441ZM469.357 324.216C470.698 324.322 472.048 324.417 473.406 324.501L473.498 323.004C472.148 322.92 470.807 322.826 469.475 322.721L469.357 324.216ZM477.447 324.715C478.789 324.774 480.138 324.823 481.494 324.859L481.534 323.36C480.187 323.323 478.846 323.276 477.514 323.216L477.447 324.715ZM485.554 324.933C486.895 324.946 488.242 324.946 489.595 324.935L489.582 323.435C488.238 323.446 486.9 323.446 485.568 323.433L485.554 324.933ZM493.653 324.865C494.996 324.83 496.344 324.782 497.696 324.722L497.63 323.224C496.286 323.283 494.947 323.33 493.613 323.366L493.653 324.865ZM501.743 324.505C503.087 324.42 504.435 324.323 505.787 324.213L505.665 322.718C504.323 322.827 502.984 322.924 501.649 323.008L501.743 324.505ZM509.818 323.845C511.161 323.71 512.506 323.561 513.854 323.399L513.675 321.91C512.337 322.071 511.001 322.218 509.668 322.352L509.818 323.845ZM517.864 322.876C519.2 322.689 520.539 322.488 521.878 322.273L521.64 320.792C520.311 321.005 518.982 321.205 517.656 321.391L517.864 322.876ZM525.868 321.591C527.194 321.35 528.522 321.095 529.851 320.826L529.553 319.356C528.234 319.623 526.917 319.876 525.6 320.115L525.868 321.591ZM533.813 319.979C535.128 319.684 536.443 319.374 537.758 319.049L537.398 317.593C536.094 317.915 534.789 318.223 533.484 318.516L533.813 319.979ZM541.685 318.033C542.985 317.682 544.285 317.316 545.584 316.934L545.161 315.495C543.873 315.873 542.584 316.237 541.294 316.585L541.685 318.033ZM549.465 315.746C550.748 315.337 552.03 314.913 553.309 314.473L552.822 313.055C551.553 313.491 550.282 313.911 549.01 314.316L549.465 315.746ZM557.136 313.109C558.398 312.643 559.658 312.161 560.915 311.662L560.363 310.268C559.116 310.762 557.867 311.24 556.616 311.702L557.136 313.109ZM564.675 310.121C565.913 309.595 567.149 309.054 568.381 308.496L567.763 307.13C566.542 307.683 565.317 308.219 564.089 308.74L564.675 310.121ZM572.062 306.777C573.274 306.193 574.483 305.592 575.687 304.975L575.003 303.64C573.81 304.251 572.612 304.847 571.411 305.426L572.062 306.777ZM579.279 303.078C580.461 302.434 581.639 301.775 582.812 301.098L582.062 299.799C580.9 300.469 579.733 301.123 578.562 301.76L579.279 303.078ZM586.305 299.025C587.453 298.324 588.596 297.606 589.734 296.871L588.921 295.611C587.793 296.339 586.661 297.05 585.523 297.745L586.305 299.025ZM593.119 294.625C594.23 293.867 595.335 293.092 596.435 292.301L595.559 291.083C594.469 291.867 593.374 292.635 592.274 293.385L593.119 294.625ZM599.703 289.886C600.773 289.073 601.838 288.244 602.896 287.398L601.959 286.226C600.911 287.065 599.856 287.886 598.796 288.691L599.703 289.886ZM606.039 284.819C607.066 283.955 608.087 283.074 609.101 282.176L608.106 281.053C607.102 281.942 606.091 282.815 605.073 283.672L606.039 284.819ZM612.114 279.439C613.095 278.526 614.069 277.596 615.036 276.65L613.987 275.578C613.028 276.516 612.063 277.437 611.092 278.342L612.114 279.439ZM617.915 273.762C618.847 272.804 619.772 271.829 620.691 270.838L619.591 269.819C618.68 270.801 617.763 271.767 616.84 272.716L617.915 273.762ZM623.424 267.816C624.309 266.813 625.187 265.795 626.058 264.76L624.911 263.794C624.047 264.82 623.177 265.829 622.3 266.823L623.424 267.816ZM628.64 261.618C629.479 260.572 630.31 259.51 631.135 258.433L629.943 257.521C629.126 258.59 628.301 259.642 627.47 260.679L628.64 261.618ZM633.561 255.185C634.354 254.098 635.14 252.995 635.919 251.877L634.688 251.02C633.916 252.129 633.136 253.223 632.349 254.301L633.561 255.185ZM638.189 248.538C638.938 247.41 639.68 246.267 640.413 245.108L639.146 244.305C638.418 245.455 637.682 246.589 636.939 247.708L638.189 248.538ZM642.527 241.693C643.224 240.54 643.914 239.372 644.596 238.189L643.297 237.44C642.62 238.614 641.935 239.772 641.243 240.917L642.527 241.693ZM646.581 234.665C647.227 233.492 647.865 232.305 648.496 231.104L647.168 230.407C646.542 231.599 645.908 232.778 645.267 233.942L646.581 234.665ZM650.36 227.469C650.955 226.281 651.543 225.079 652.123 223.864L650.77 223.217C650.193 224.424 649.61 225.617 649.019 226.797L650.36 227.469ZM653.843 220.178C654.125 219.557 654.406 218.932 654.685 218.305L653.315 217.695C653.037 218.319 652.758 218.939 652.477 219.556L653.843 220.178ZM654.708 218.247C654.922 217.635 655.138 217.02 655.357 216.402L653.943 215.901C653.723 216.521 653.506 217.138 653.292 217.753L654.708 218.247ZM656.704 212.66C657.164 211.402 657.634 210.133 658.116 208.853L656.712 208.325C656.229 209.609 655.756 210.882 655.295 212.145L656.704 212.66ZM659.524 205.164C660.002 203.928 660.489 202.684 660.987 201.432L659.592 200.879C659.094 202.135 658.604 203.383 658.125 204.622L659.524 205.164ZM662.491 197.693C662.986 196.478 663.489 195.256 664.002 194.027L662.618 193.45C662.103 194.682 661.598 195.908 661.102 197.127L662.491 197.693ZM665.566 190.323C666.088 189.102 666.618 187.875 667.157 186.643L665.782 186.042C665.242 187.278 664.71 188.509 664.187 189.734L665.566 190.323ZM668.765 183.005C669.309 181.787 669.861 180.564 670.422 179.337L669.057 178.714C668.495 179.945 667.941 181.171 667.395 182.393L668.765 183.005ZM672.099 175.705C672.658 174.508 673.224 173.306 673.798 172.101L672.444 171.456C671.868 172.665 671.3 173.87 670.74 175.071L672.099 175.705ZM675.542 168.478C676.123 167.284 676.711 166.087 677.307 164.887L675.963 164.22C675.366 165.423 674.776 166.624 674.194 167.822L675.542 168.478ZM679.094 161.323C679.696 160.133 680.306 158.941 680.923 157.748L679.59 157.059C678.971 158.256 678.36 159.452 677.755 160.646L679.094 161.323ZM682.776 154.197C683.393 153.024 684.018 151.851 684.649 150.677L683.327 149.967C682.694 151.145 682.068 152.322 681.449 153.497L682.776 154.197ZM686.562 147.152C687.203 145.983 687.85 144.813 688.504 143.643L687.195 142.911C686.539 144.085 685.889 145.258 685.246 146.431L686.562 147.152ZM690.464 140.171C691.123 139.013 691.789 137.856 692.462 136.699L691.165 135.945C690.49 137.106 689.822 138.267 689.161 139.428L690.464 140.171ZM694.494 133.236C695.171 132.095 695.853 130.954 696.542 129.815L695.258 129.039C694.567 130.182 693.883 131.326 693.204 132.471L694.494 133.236ZM698.627 126.399C699.328 125.262 700.035 124.126 700.748 122.992L699.478 122.194C698.763 123.332 698.053 124.471 697.35 125.612L698.627 126.399ZM702.888 119.622C703.607 118.502 704.332 117.383 705.063 116.267L703.808 115.445C703.074 116.565 702.347 117.688 701.626 118.812L702.888 119.622ZM707.273 112.924C708.013 111.816 708.759 110.711 709.51 109.609L708.271 108.764C707.516 109.87 706.768 110.979 706.025 112.091L707.273 112.924ZM711.778 106.317C712.54 105.222 713.307 104.131 714.081 103.043L712.858 102.174C712.082 103.266 711.312 104.361 710.547 105.46L711.778 106.317ZM716.416 99.7927C717.199 98.7145 717.988 97.6399 718.782 96.5693L717.577 95.6755C716.78 96.7503 715.988 97.829 715.202 98.9114L716.416 99.7927ZM721.182 93.3696C721.988 92.3072 722.799 91.249 723.616 90.1954L722.431 89.2762C721.61 90.3341 720.796 91.3966 719.987 92.4632L721.182 93.3696ZM726.085 87.0471C726.914 86.0024 727.748 84.9626 728.588 83.9279L727.423 82.9826C726.58 84.0217 725.742 85.0659 724.91 86.1149L726.085 87.0471ZM731.124 80.8395C731.977 79.813 732.836 78.7919 733.7 77.7765L732.558 76.8043C731.69 77.8242 730.827 78.8498 729.971 79.8809L731.124 80.8395ZM736.311 74.7461C737.187 73.7419 738.068 72.7438 738.955 71.7521L737.837 70.7521C736.946 71.7486 736.061 72.7513 735.181 73.7601L736.311 74.7461ZM741.64 68.7883C742.543 67.8044 743.451 66.8272 744.365 65.8571L743.273 64.8286C742.355 65.8035 741.442 66.7855 740.535 67.7742L741.64 68.7883ZM747.124 62.9681C748.05 62.0106 748.982 61.0605 749.92 60.1181L748.857 59.0602C747.914 60.0076 746.977 60.9626 746.046 61.9249L747.124 62.9681ZM752.765 57.2989C753.719 56.3671 754.678 55.4434 755.643 54.528L754.611 53.4398C753.64 54.3602 752.676 55.289 751.717 56.2259L752.765 57.2989ZM758.554 51.8072C759.539 50.901 760.529 50.0037 761.524 49.1155L760.526 47.9962C759.524 48.8896 758.528 49.7922 757.538 50.7036L758.554 51.8072ZM764.527 46.4786C765.534 45.609 766.546 44.7489 767.564 43.8986L766.602 42.7476C765.578 43.6032 764.559 44.4686 763.547 45.3435L764.527 46.4786ZM770.657 41.3578C771.695 40.5194 772.74 39.6913 773.789 38.8739L772.868 37.6904C771.811 38.5133 770.76 39.3468 769.715 40.1906L770.657 41.3578ZM776.955 36.4537C778.023 35.6528 779.096 34.863 780.174 34.0846L779.296 32.8683C778.21 33.6522 777.13 34.4475 776.055 35.2538L776.955 36.4537ZM783.439 31.7755C784.532 31.0175 785.632 30.2713 786.737 29.5374L785.906 28.2879C784.793 29.0274 783.686 29.7791 782.584 30.5426L783.439 31.7755ZM790.083 27.3626C791.21 26.6465 792.342 25.9433 793.48 25.2531L792.702 23.9706C791.555 24.6662 790.414 25.375 789.278 26.0966L790.083 27.3626ZM796.91 23.2222C798.062 22.5566 799.22 21.9045 800.384 21.2663L799.662 19.9511C798.489 20.5947 797.322 21.2523 796.16 21.9233L796.91 23.2222ZM803.91 19.3838C805.091 18.7706 806.277 18.1717 807.469 17.5875L806.809 16.2406C805.606 16.8299 804.409 17.4341 803.218 18.0526L803.91 19.3838ZM811.067 15.8769C812.277 15.3192 813.493 14.7769 814.714 14.2501L814.12 12.8727C812.888 13.4044 811.661 13.9518 810.439 14.5145L811.067 15.8769ZM818.395 12.7169C819.628 12.2214 820.866 11.7419 822.11 11.2788L821.587 9.87303C820.331 10.3407 819.08 10.8249 817.835 11.3251L818.395 12.7169ZM825.866 9.93609C827.123 9.50517 828.386 9.09099 829.654 8.69391L829.206 7.26243C827.925 7.66354 826.649 8.08189 825.379 8.51712L825.866 9.93609ZM833.474 7.55469C834.751 7.19299 836.033 6.84868 837.32 6.52211L836.951 5.06817C835.65 5.39818 834.355 5.74608 833.065 6.11152L833.474 7.55469ZM841.197 5.59597C842.494 5.30538 843.797 5.03287 845.105 4.77879L844.819 3.30631C843.497 3.56313 842.18 3.83856 840.869 4.13224L841.197 5.59597ZM849.015 4.07711C850.324 3.86161 851.637 3.66461 852.956 3.48647L852.756 1.99997C851.422 2.18006 850.094 2.3792 848.771 2.59705L849.015 4.07711ZM856.929 3.00897C858.24 2.87087 859.555 2.75144 860.876 2.65102L860.762 1.15533C859.427 1.25687 858.097 1.37761 856.772 1.51722L856.929 3.00897ZM864.851 2.40716C866.181 2.34507 867.516 2.30231 868.856 2.2792L868.83 0.77942C867.476 0.802786 866.126 0.846021 864.781 0.908787L864.851 2.40716ZM872.818 2.26828C874.138 2.28374 875.463 2.31832 876.793 2.37234L876.854 0.873574C875.51 0.818974 874.17 0.784016 872.836 0.768384L872.818 2.26828ZM880.796 2.593C882.111 2.68452 883.431 2.79509 884.755 2.92501L884.901 1.43218C883.563 1.30088 882.229 1.18913 880.9 1.09662L880.796 2.593ZM888.694 3.36723C890.012 3.53373 891.334 3.71942 892.66 3.9246L892.889 2.44223C891.549 2.23494 890.214 2.04731 888.882 1.87906L888.694 3.36723ZM896.608 4.59076C897.894 4.82581 899.184 5.0792 900.478 5.35121L900.787 3.88328C899.48 3.60857 898.177 3.35263 896.878 3.1152L896.608 4.59076ZM904.373 6.22332C905.675 6.53281 906.982 6.86118 908.292 7.20867L908.676 5.7588C907.354 5.40799 906.035 5.07647 904.72 4.76397L904.373 6.22332ZM912.086 8.26539C913.347 8.63327 914.611 9.01888 915.879 9.42247L916.334 7.99311C915.055 7.58588 913.779 7.19672 912.506 6.82544L912.086 8.26539ZM919.695 10.6874C920.953 11.1212 922.215 11.5728 923.48 12.0422L924.002 10.6359C922.726 10.1624 921.453 9.70696 920.184 9.26932L919.695 10.6874ZM927.147 13.4497C928.373 13.9356 929.602 14.4384 930.834 14.9583L931.417 13.5762C930.175 13.0522 928.936 12.5452 927.7 12.0553L927.147 13.4497ZM934.541 16.5691C935.746 17.1084 936.955 17.664 938.166 18.2362L938.807 16.8798C937.586 16.3033 936.368 15.7434 935.153 15.1999L934.541 16.5691ZM941.707 19.9512C942.891 20.5386 944.077 21.1418 945.266 21.7609L945.958 20.4305C944.761 19.807 943.566 19.1994 942.374 18.6077L941.707 19.9512ZM948.841 23.6663C949.438 23.9919 950.036 24.3215 950.635 24.6551L951.365 23.3449C950.762 23.0089 950.16 22.6771 949.559 22.3492L948.841 23.6663Z" fill="white" />
            </svg>
        </div>

        {{-- Video circle with spinning badge --}}
        <div class="video-circle absolute hidden lg:block" style="bottom:13%;left:38%;z-index:2">
            <div class="relative">
                <a href="https://www.youtube.com/watch?v=pQpFebyALV0" target="_blank"
                    class="relative z-10 flex items-center justify-center w-16 h-16 rounded-full bg-[#1a1b1d] border border-white/20 shadow-2xl hover:scale-110 transition-transform duration-300">
                    <img src="/images/home/hero/play.svg" alt="Play" class="w-6 h-6 ml-1" />
                </a>
                <div class="discount-wrapp absolute -top-[70px] -left-[70px] w-[180px] h-[180px] rounded-full border-[1.5px] border-dashed border-white/50 flex items-center justify-center">
                    <div class="discount-tag relative w-[150px] h-[150px] rounded-full flex items-center justify-center" style="animation:spin 10s infinite alternate-reverse">
                        @php
                            $spinText = 'BEST IT SOLUTION COMPANY * ';
                            $chars = mb_str_split($spinText);
                            $total = count($chars);
                        @endphp
                        @foreach ($chars as $idx => $char)
                            <span class="absolute left-1/2 top-1/2 text-white font-bold uppercase tracking-widest"
                                style="font-size:10px;transform:translate(-50%,-50%) rotate({{ ($idx * 360) / $total }}deg) translateY(-52px)">
                                {{ $char }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    'See what we provide in terms of internet services, including BCT, Cel-Fi, Starlink and LTE solutions.',
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
    {{-- <section class="bg-linear-to-b from-gray-50 via-white to-gray-50 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden relative">
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
    </section> --}}

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

        {{-- Team Video --}}
        <div class="reveal fade-up mt-16">
            <div class="relative w-full overflow-hidden rounded-2xl cursor-pointer group" id="teamVideoWrapper">
                <div class="relative w-full aspect-16/7 bg-gray-900">
                    <img src="/images/home/video.jpg" alt="BCT Team at work"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black/40 transition-opacity duration-300 group-hover:bg-black/50">
                    </div>

                    {{-- Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="relative flex items-center justify-center w-20 h-20 sm:w-24 sm:h-24 rounded-full border-2 border-white/60 transition-all duration-300 group-hover:scale-110 group-hover:border-white">
                            <div class="absolute inset-0 rounded-full bg-white/10 animate-pulse"></div>
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Bottom Label --}}
                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                        <span
                            class="inline-block bg-brand-green text-white text-xs font-semibold px-3 py-1.5 rounded-sm mb-3">BCT
                            Team</span>
                        <h3 class="text-white text-xl sm:text-2xl font-bold tracking-tight">Meet the people behind our
                            success</h3>
                    </div>
                </div>
            </div>

            {{-- Video Modal --}}
            <div id="teamVideoModal"
                class="fixed inset-0 z-9999 hidden items-center justify-center bg-black/80 backdrop-blur-sm p-4">
                <div class="relative w-full max-w-4xl">
                    <button id="closeTeamVideo"
                        class="absolute -top-12 right-0 text-white/70 hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                    <video id="teamVideo" class="w-full rounded-xl" controls preload="none">
                        <source src="/videos/bct.mp4" type="video/mp4" />
                    </video>
                </div>
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

            // ── Hero V2 Swiper ──────────────────────────────
            var heroV2El = document.querySelector('.hero-v2-swiper');
            if (heroV2El) {
                window.heroV2Swiper = new Swiper('.hero-v2-swiper', {
                    loop: true,
                    effect: 'fade',
                    parallax: true,
                    fadeEffect: { crossFade: true },
                    speed: 900,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.hero-v2-pagination',
                        clickable: true
                    }
                });
            }

            // ── Hero (original) slider with indicators ─────
            var heroSwiperEl = document.querySelector('.hero-swiper');
            if (heroSwiperEl) {
                var heroSwiper = new Swiper('.hero-swiper', {
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
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
            }

            // ── What We Offer hover ─────────────────────────
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
                            bg.classList.toggle('opacity-0', bg.getAttribute('data-index') !== idx);
                            bg.classList.toggle('opacity-100', bg.getAttribute('data-index') === idx);
                        });
                    });
                });
            }

            // ── Blog slider ─────────────────────────────────
            var blogBullets = document.querySelectorAll('.blog-custom-bullet');
            var blogSwiperEl = document.querySelector('.blog-swiper');
            if (blogSwiperEl) {
                window.blogSwiper = new Swiper('.blog-swiper', {
                    loop: true,
                    autoplay: { delay: 4000, disableOnInteraction: false },
                    slidesPerView: 1,
                    spaceBetween: 32,
                    navigation: { prevEl: '.blog-swiper-prev', nextEl: '.blog-swiper-next' },
                    breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
                });

                function updateBlogIndicators(realIndex) {
                    var idx = realIndex % 3;
                    blogBullets.forEach(function(b, i) {
                        b.classList.toggle('blog-bullet-active', i === idx);
                    });
                }

                window.blogSwiper.on('slideChange', function(swiper) {
                    updateBlogIndicators(swiper.realIndex);
                });

                setInterval(function() {
                    if (window.blogSwiper) updateBlogIndicators(window.blogSwiper.realIndex);
                }, 500);

                blogBullets.forEach(function(bullet) {
                    bullet.addEventListener('click', function() {
                        var idx = parseInt(bullet.getAttribute('data-index'));
                        window.blogSwiper.slideToLoop(idx);
                        updateBlogIndicators(idx);
                    });
                });
            }

            // ── Team video modal ────────────────────────────
            var teamVideoWrapper = document.getElementById('teamVideoWrapper');
            var teamVideoModal = document.getElementById('teamVideoModal');
            var teamVideo = document.getElementById('teamVideo');
            var closeTeamVideo = document.getElementById('closeTeamVideo');
            if (teamVideoWrapper && teamVideoModal) {
                teamVideoWrapper.addEventListener('click', function() {
                    teamVideoModal.classList.remove('hidden');
                    teamVideoModal.classList.add('flex');
                    teamVideo.play();
                });
                closeTeamVideo.addEventListener('click', function() {
                    teamVideo.pause();
                    teamVideo.currentTime = 0;
                    teamVideoModal.classList.add('hidden');
                    teamVideoModal.classList.remove('flex');
                });
                teamVideoModal.addEventListener('click', function(e) {
                    if (e.target === teamVideoModal) {
                        teamVideo.pause();
                        teamVideo.currentTime = 0;
                        teamVideoModal.classList.add('hidden');
                        teamVideoModal.classList.remove('flex');
                    }
                });
            }

            // ── Testimonial slider ──────────────────────────
            var testEl = document.querySelector('.testimonial-swiper');
            if (testEl) {
                new Swiper('.testimonial-swiper', {
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
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
                    }
                });
            }

        }); // end DOMContentLoaded
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

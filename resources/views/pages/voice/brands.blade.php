@extends('layouts.app')

@section('title', 'Phone System Brands | Bismillah Computer & Technology')
@section('description',
    'We supply and support leading phone system brands including Vodia, Grandstream, Avaya and LG
    iPECS. Find the right Unified Communications platform for your business.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Phone System
                    <span class="text-blue-600 block mt-2">Brands</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We partner with leading
                    manufacturers to deliver reliable, feature-rich phone systems that suit businesses of every size.
                    Explore
                    the brands we supply, install, and support.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Not sure which brand is right for you?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" src="/images/voice/brands/hero.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

    {{-- ==================== BRAND CARDS ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Brands We Support</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up h-full">
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="/images/voice/vodia.png" alt="Cloud Phone System - Vodia"
                                class="object-cover transition-transform duration-700 group-hover:scale-105"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">Cloud Phone System – Vodia</h3>
                            <p class="text-sm text-slate-600 mb-4">Vodia Networks Inc. offers unified communications
                                solutions for enterprises, contact centers and service providers.</p>
                            <a href="{{ route('voice.brand-vodia') }}"
                                class="mt-auto inline-flex items-center text-blue-600 font-semibold text-sm hover:underline">Learn
                                More
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-fade-up h-full">
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="/images/voice/grandstream.png" alt="Grandstream"
                                class="object-cover transition-transform duration-700 group-hover:scale-105"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">Grandstream</h3>
                            <p class="text-sm text-slate-600 mb-4">Grandstream is an award-winning solutions provider of
                                Unified Communications (UC) at an affordable price point with extreme flexibility.</p>
                            <a href="{{ route('voice.brand-grandstream') }}"
                                class="mt-auto inline-flex items-center text-blue-600 font-semibold text-sm hover:underline">Learn
                                More
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-fade-up h-full">
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="/images/voice/avaya.png" alt="Avaya"
                                class="object-cover transition-transform duration-700 group-hover:scale-105"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">Avaya</h3>
                            <p class="text-sm text-slate-600 mb-4">Avaya's IP Office systems are a long-established
                                all-in-one solution for Unified Communications (UC).</p>
                            <a href="{{ route('voice.brand-avaya') }}"
                                class="mt-auto inline-flex items-center text-blue-600 font-semibold text-sm hover:underline">Learn
                                More
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-fade-up h-full">
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="/images/voice/ipecs.jpg" alt="iPECS"
                                class="object-cover transition-transform duration-700 group-hover:scale-105"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">iPECS</h3>
                            <p class="text-sm text-slate-600 mb-4">iPECS phones and phone systems are LG's solution for
                                Unified Communications (UC) platform focusing on the basics of reliability and scalability.
                            </p>
                            <a href="{{ route('voice.brand-lg-ipecs') }}"
                                class="mt-auto inline-flex items-center text-blue-600 font-semibold text-sm hover:underline">Learn
                                More
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-fade-up h-full">
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="/images/voice/celfi.png" alt="Cel-Fi"
                                class="object-cover transition-transform duration-700 group-hover:scale-105"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">Cel-Fi</h3>
                            <p class="text-sm text-slate-600 mb-4">Cel-Fi products are the first carrier-class cellular
                                coverage solution for industry-leading signal gain.</p>
                            <a href="{{ route('voice.hardware-celfi') }}"
                                class="mt-auto inline-flex items-center text-blue-600 font-semibold text-sm hover:underline">Learn
                                More
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== WHY BRANDS MATTER ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">The Right Brand for Your Business</h2>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Every business is different, and so is
                        every
                        phone
                        system. Our team helps you evaluate cost, features, scalability, and support to recommend the brand
                        that
                        best fits your needs.</p>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Whether you want a flexible cloud-based
                        platform, a
                        reliable all-in-one solution, or an affordable entry point, we have a brand that delivers.</p>
                    <a href="{{ route('contact') }}"
                        class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                        Get In Touch
                    </a>
                </div>
            </div>
            <div class="w-full order-1 lg:order-2">
                <img src="/images/voice/brands/choose.webp" alt="Section" class="w-full h-auto object-cover" />
            </div>
        </div>
    </section>

@endsection

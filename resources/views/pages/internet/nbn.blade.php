@extends('layouts.app')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">NBN Services</h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Australia's National
                    Broadband Network delivers high-speed internet to businesses across the country. Choose the right plan
                    for your needs.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="NBN Services" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg" src="/images/internet/nbn.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">NBN Speed Tiers</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Choose the right speed tier for your business
                    requirements.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-green/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">NBN 25</h3>
                    <p class="text-sm text-brand-blue font-semibold mb-4">Up to 25/5 Mbps</p>
                    <p class="text-slate-600 leading-relaxed mb-6">Perfect for small businesses with basic internet needs,
                        email, and light browsing.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            1-5 users
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Email & browsing
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Basic cloud apps
                        </li>
                    </ul>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-lg border-2 border-brand-blue relative hover:shadow-xl transition-shadow"
                    style="animation-delay: 0.1s">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-blue text-white text-sm font-bold px-4 py-1 rounded-full">
                        Popular</div>
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">NBN 50</h3>
                    <p class="text-sm text-brand-blue font-semibold mb-4">Up to 50/20 Mbps</p>
                    <p class="text-slate-600 leading-relaxed mb-6">Ideal for growing businesses with multiple users and
                        video conferencing needs.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            5-10 users
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Video conferencing
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Cloud applications
                        </li>
                    </ul>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">NBN 100</h3>
                    <p class="text-sm text-brand-blue font-semibold mb-4">Up to 100/40 Mbps</p>
                    <p class="text-slate-600 leading-relaxed mb-6">High-speed connection for businesses with heavy data
                        usage and multiple concurrent users.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            10-20 users
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Heavy data usage
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-brand-blue mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Multiple locations
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
@endsection

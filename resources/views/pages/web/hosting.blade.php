@extends('layouts.app')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Web Hosting</h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Reliable, secure, and
                    high-performance web hosting solutions. From shared hosting to dedicated servers, we have the right plan
                    for you.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Web Hosting" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg" src="/images/web/hosting.png" />
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
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Hosting Plans</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Choose the right hosting plan for your website
                    needs.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Shared Hosting</h3>
                    <p class="text-sm text-slate-500 mb-4">Perfect for small websites</p>
                    <p class="text-slate-600 leading-relaxed mb-6">Affordable hosting for personal websites and small blogs
                        with easy-to-use control panel.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-green mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            10GB SSD Storage
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-green mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            100GB Bandwidth
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-green mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Free SSL Certificate
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-green mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            cPanel Access
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-hover transition-colors">
                        Get Started
                    </a>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-lg border-2 border-brand-blue relative hover:shadow-xl transition-shadow"
                    style="animation-delay: 0.1s">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-blue text-white text-sm font-bold px-4 py-1 rounded-full">
                        Popular</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Business Hosting</h3>
                    <p class="text-sm text-slate-500 mb-4">For growing businesses</p>
                    <p class="text-slate-600 leading-relaxed mb-6">Enhanced performance and resources for business websites
                        with priority support.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            50GB SSD Storage
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Unlimited Bandwidth
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Free SSL & Domain
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Daily Backups
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-hover transition-colors">
                        Get Started
                    </a>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">VPS Hosting</h3>
                    <p class="text-sm text-slate-500 mb-4">For high-performance needs</p>
                    <p class="text-slate-600 leading-relaxed mb-6">Virtual private servers with dedicated resources and
                        full root access for advanced users.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            200GB SSD Storage
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            4 vCPU / 8GB RAM
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Full Root Access
                        </li>
                        <li class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 text-brand-blue mr-3 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Choice of OS
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-hover transition-colors">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection

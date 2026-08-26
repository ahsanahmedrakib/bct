@extends('layouts.page')

@section('title', 'NBN Order | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="space-y-6">
                <span
                    class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Internet</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Order
                    Your NBN</h1>
                <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Order your NBN connection quickly and easily
                    with Bismillah Computer & Technology.</p>
            </div>
            <div class="flex justify-center lg:justify-end">
                <img alt="Order NBN" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full"
                    src="/images/internet/hero.png" />
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
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Get Connected in 3 Simple Steps</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We make getting connected simple. Our team handles
                    everything from checking eligibility to installation and activation.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow text-center">
                    <div class="w-16 h-16 bg-brand-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-brand-blue">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Check Eligibility</h3>
                    <p class="text-slate-600 leading-relaxed">Enter your address to check which NBN technology is available
                        at your premises and find the best plans.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow text-center"
                    style="animation-delay: 0.1s">
                    <div class="w-16 h-16 bg-brand-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-brand-blue">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Choose Your Plan</h3>
                    <p class="text-slate-600 leading-relaxed">Select from a range of NBN plans with different speeds and
                        data options to suit your needs and budget.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow text-center"
                    style="animation-delay: 0.2s">
                    <div class="w-16 h-16 bg-brand-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-brand-blue">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Get Connected</h3>
                    <p class="text-slate-600 leading-relaxed">We arrange the installation and get you online. Most
                        connections are activated within 5-10 business days.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Order With Us?</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">Free Eligibility Check</h4>
                        <p class="text-slate-600 text-sm">We check your address at no cost to confirm what NBN technology is
                            available.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50"
                    style="animation-delay: 0.1s">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">No Activation Fees</h4>
                        <p class="text-slate-600 text-sm">We waive the standard activation fee for new NBN connections
                            ordered through us.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50"
                    style="animation-delay: 0.2s">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">Free Modem</h4>
                        <p class="text-slate-600 text-sm">Receive a free modem with your plan, just return it if you cancel
                            your service.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">Expert Guidance</h4>
                        <p class="text-slate-600 text-sm">Our team helps you choose the right plan and manages the entire
                            connection process.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50"
                    style="animation-delay: 0.1s">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">Fast Connection</h4>
                        <p class="text-slate-600 text-sm">Most new connections are activated within 5-10 business days of
                            ordering.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up flex items-start gap-4 p-6 rounded-2xl bg-slate-50"
                    style="animation-delay: 0.2s">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-1">Ongoing Support</h4>
                        <p class="text-slate-600 text-sm">Australian-based support available 7 days a week for any issues
                            after connection.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

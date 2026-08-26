@extends('layouts.page')

@section('title', 'Headsets | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="space-y-6">
                <span
                    class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Voice
                    Hardware</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Headsets</h1>
                <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Professional headsets for call centres, offices,
                    and remote workers. Crystal-clear audio with noise cancellation for productive conversations.</p>
            </div>
            <div class="flex justify-center lg:justify-end">
                <img alt="Professional Headsets" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full"
                    src="/images/voice/hero.png" />
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
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Choose the Right Headset</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">From mono to stereo, wired to wireless, find the
                    perfect headset for your work style and environment.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Mono Headsets</h3>
                    <p class="text-slate-600 leading-relaxed">Single-ear design keeps one ear free for awareness of your
                        surroundings. Ideal for busy offices and reception areas.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Stereo Headsets</h3>
                    <p class="text-slate-600 leading-relaxed">Dual-ear design for immersive audio and maximum noise
                        isolation. Perfect for call centres and focused work.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Wireless Headsets</h3>
                    <p class="text-slate-600 leading-relaxed">DECT or Bluetooth wireless freedom. Walk and talk without
                        being tethered to your desk. Up to 100m range.</p>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Noise Cancelling</h3>
                    <p class="text-slate-600 leading-relaxed">Active noise cancellation blocks out background noise for
                        clearer conversations. Essential for open-plan offices.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">USB & Bluetooth</h3>
                    <p class="text-slate-600 leading-relaxed">Connect to computers, phones, and tablets via USB or
                        Bluetooth. One headset for all your devices.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Video Headsets</h3>
                    <p class="text-slate-600 leading-relaxed">Headsets with integrated cameras for video conferencing.
                        All-in-one solution for Teams and Zoom calls.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why the Right Headset Matters</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Investing in quality headsets pays dividends in
                    productivity and employee satisfaction.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up flex items-start">
                    <div
                        class="w-10 h-10 bg-brand-green/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <svg class="w-5 h-5 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-1">Reduced Fatigue</h4>
                        <p class="text-slate-600">Ergonomic designs and lightweight materials mean all-day comfort for your
                            team.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start">
                    <div
                        class="w-10 h-10 bg-brand-green/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <svg class="w-5 h-5 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-1">Better Call Quality</h4>
                        <p class="text-slate-600">Noise cancellation and HD audio mean clearer conversations with fewer
                            misunderstandings.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start">
                    <div
                        class="w-10 h-10 bg-brand-green/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <svg class="w-5 h-5 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-1">Increased Productivity</h4>
                        <p class="text-slate-600">Hands-free operation lets you type, take notes, and multitask during
                            calls.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start">
                    <div
                        class="w-10 h-10 bg-brand-green/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <svg class="w-5 h-5 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-1">Professional Appearance</h4>
                        <p class="text-slate-600">Quality headsets project a professional image during client and customer
                            calls.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Top Headset Brands</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We stock and support the leading headset
                    manufacturers for business communications.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-brand-blue font-bold text-lg">JP</span>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-1">Jabra</h3>
                    <p class="text-sm text-slate-600">Premium business headsets</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.1s">
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-brand-blue font-bold text-lg">PL</span>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-1">Poly (Plantronics)</h3>
                    <p class="text-sm text-slate-600">Enterprise-grade audio</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-brand-blue font-bold text-lg">YG</span>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-1">Yealink</h3>
                    <p class="text-sm text-slate-600">VoIP-optimised headsets</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.3s">
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-brand-blue font-bold text-lg">GS</span>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-1">Grandstream</h3>
                    <p class="text-sm text-slate-600">Cost-effective solutions</p>
                </div>
            </div>
        </div>
    </section>


@endsection

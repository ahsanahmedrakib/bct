@extends('layouts.page')

@section('title', 'Microsoft Teams Integration | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="space-y-6">
                <span
                    class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Voice
                    Features</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Microsoft Teams Integration</h1>
                <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Seamlessly connect your phone system with
                    Microsoft Teams for a unified communication experience your team already knows and loves.</p>
            </div>
            <div class="flex justify-center lg:justify-end">
                <img alt="Microsoft Teams Integration" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full"
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
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Teams-First Communication</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Get the most out of your Microsoft 365 investment
                    by integrating your phone system directly into Teams.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Direct Routing</h3>
                    <p class="text-slate-600 leading-relaxed">Connect your existing phone system to Teams via SIP trunking.
                        Make and receive external calls without leaving the Teams interface.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Teams-Enabled Phones</h3>
                    <p class="text-slate-600 leading-relaxed">Deploy certified Teams IP phones for shared spaces, reception
                        areas, and hot-desking environments.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Operator Connect</h3>
                    <p class="text-slate-600 leading-relaxed">Simplified phone system management through Microsoft's
                        Operator Connect programme for easier carrier management.</p>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cloud Calling</h3>
                    <p class="text-slate-600 leading-relaxed">Microsoft Teams Phone with calling plans for a fully
                        cloud-based solution. No on-premise hardware required.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17l-5.1-5.1m0 0L11.42 4.97m-5.1 5.1H21M3 3h18v18H3V3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">SBC Configuration</h3>
                    <p class="text-slate-600 leading-relaxed">Session Border Controller setup and configuration for secure,
                        reliable connectivity between your phone system and Teams.</p>
                </div>

                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow"
                    style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Number Porting</h3>
                    <p class="text-slate-600 leading-relaxed">Keep your existing phone numbers when migrating to Teams. We
                        handle the porting process with zero downtime.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Microsoft Solutions Partner</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">As a certified Microsoft Solutions Partner, we
                    have the expertise to deploy and manage Teams voice solutions for your organisation.</p>
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
                        <h4 class="font-semibold text-slate-900 mb-1">Teams Phone Assessment</h4>
                        <p class="text-slate-600">Evaluate your readiness for Teams voice and identify the best migration
                            path.</p>
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
                        <h4 class="font-semibold text-slate-900 mb-1">Licensing Guidance</h4>
                        <p class="text-slate-600">Navigate Microsoft licensing to get the right Teams Phone plan for your
                            needs.</p>
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
                        <h4 class="font-semibold text-slate-900 mb-1">Full Deployment</h4>
                        <p class="text-slate-600">End-to-end setup including SBC, direct routing, auto-attendants, and call
                            queues.</p>
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
                        <h4 class="font-semibold text-slate-900 mb-1">Ongoing Management</h4>
                        <p class="text-slate-600">Proactive monitoring and management of your Teams voice environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

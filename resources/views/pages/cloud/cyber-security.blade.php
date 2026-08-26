@extends('layouts.app')

@section('title', 'Cloud Cyber Security | Bismillah Computer & Technology')
@section('description',
    'Protect your cloud environment with advanced security solutions. From threat detection to compliance, we keep your data safe in the cloud.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Cloud Cyber
                    <span class="text-blue-600 block mt-2">Security</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Protect your cloud
                    environment with advanced security solutions. From threat detection to compliance, we keep your data
                    safe in the cloud.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#services"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        SERVICES
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
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
                <img src="/images/home/hero/cybersecurity-hero.png" alt="Cloud Cyber Security" class="rounded-lg" />
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

    <section id="services" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900">Cloud Security Services</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <a href="{{ route('cloud.cs-essential-eight') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/cyber-security/essential-eight/section-1.jpg" alt="Essential Eight"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">ACSC Essential Eight</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Comprehensive compliance with the Australian
                            Cyber Security Centre's Essential Eight mitigation strategies.</p>
                    </div>
                </a>

                <a href="{{ route('cloud.cs-secure-score') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/cyber-security/secure-score/section-1.jpg" alt="Secure Score"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Microsoft Secure Score</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Assess and improve your security posture with
                            actionable insights and recommendations.</p>
                    </div>
                </a>

                <a href="{{ route('cloud.cs-disp') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/cyber-security/disp/section-1.png" alt="DISP"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Defence Industry Security Program</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Meet DISP membership requirements with our
                            comprehensive security assessment and compliance solutions.</p>
                    </div>
                </a>

                <a href="{{ route('cloud.cs-m365-security') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/cyber-security/m365-security/section-1.jpg" alt="M365 Security"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Microsoft 365 Security</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Protect your organisation with advanced threat
                            protection, data loss prevention, and security policies.</p>
                    </div>
                </a>

                <a href="{{ route('cloud.cs-backup-recovery') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/cyber-security/backup-recovery/section-1.png" alt="Backup Recovery"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Backup & Recovery</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Protect your critical data with reliable cloud
                            backup solutions and disaster recovery planning.</p>
                    </div>
                </a>

            </div>
        </div>
    </section>
@endsection

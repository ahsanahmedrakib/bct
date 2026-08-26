@extends('layouts.app')

@section('title', 'Exchange Online | Bismillah Computer & Technology')
@section('description', 'Enterprise-class email and calendar hosting with 50GB mailbox and advanced security features.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Microsoft 365
                    <span class="text-blue-600 block mt-2">Exchange Online</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">
                    Microsoft Exchange Online is a cloud-based email and calendaring service that delivers secure, reliable business communication. Part of the Microsoft 365 suite, Exchange Online provides organisations with enterprise-grade email hosting, shared calendars, contacts, and tasks — accessible from any device, anywhere.
                </p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Exchange Online" loading="lazy" class="rounded-lg"
                    src="/images/cloud/microsoft-solutions/exchange-online/exchange.png" />
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

    <section class="py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/exchange-online/section.png" alt="Exchange Online"
                    class="rounded-2xl shadow-lg w-full" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Exchange Online</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">What is Exchange Online?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">
                    Microsoft Exchange Online is a cloud-based messaging platform that delivers email, calendar, contacts, and tasks. It enables organisations to access business email, calendar, and contacts on PC, phone, and web browser with a familiar, easy-to-use interface.
                </p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">
                    Exchange Online provides a 99.9% uptime guarantee with built-in redundancy and disaster recovery. It includes enterprise-grade security features such as encryption at rest and in transit, Multi-Factor Authentication (MFA), and advanced threat protection against phishing, malware, and spam.
                </p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">
                    With a mailbox size of up to 100GB per user, integrated archive mailboxes, and seamless integration with Microsoft Teams, SharePoint, and Outlook, Exchange Online is the foundation of modern business communication. Whether accessed via Outlook desktop, Outlook on the web, or Outlook mobile, your email and calendar are always available.
                </p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    Key Features
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Key Features of Microsoft Exchange Online</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Everything you need for secure, reliable business email and collaboration</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'Secure Business Email',
                            'desc' => 'Enterprise-grade email hosting with encryption, MFA, and advanced threat protection to safeguard your communications.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />',
                        ],
                        [
                            'title' => 'Shared Calendars',
                            'desc' => 'Schedule meetings, book resources, and track RSVPs with shared calendars that show real-time availability.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />',
                        ],
                        [
                            'title' => 'Cloud-Based Access',
                            'desc' => 'Access email, calendar, and contacts from any device — desktop, mobile, or web browser — anywhere in the world.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Advanced Threat Protection',
                            'desc' => 'Built-in protection against phishing, malware, and spam with Microsoft Defender for Office 365.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Email Archiving',
                            'desc' => 'In-place archive mailboxes with unlimited storage for compliance, eDiscovery, and long-term retention.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />',
                        ],
                        [
                            'title' => 'Cross-Platform Support',
                            'desc' => 'Native support for Outlook on Windows, Mac, iOS, Android, and web browsers for a consistent experience everywhere.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                        ],
                        [
                            'title' => 'Data Loss Prevention',
                            'desc' => 'Policies and rules to prevent sensitive information from being shared inappropriately via email.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Team Collaboration',
                            'desc' => 'Seamless integration with Microsoft Teams, SharePoint, and OneDrive for a connected collaboration experience.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />',
                        ],
                        [
                            'title' => 'Disaster Recovery',
                            'desc' => 'Built-in redundancy with geo-distributed data centres ensuring 99.9% uptime and automatic failover.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />',
                        ],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-4 text-blue-600">
                            <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 text-center mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

@extends('layouts.page')

@section('title', 'Microsoft 365 Modern Workplace | Bismillah Computer & Technology')
@section('description', 'Transform your workplace with Microsoft Teams, SharePoint, and modern collaboration tools.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft 365
                    <span class="text-brand-blue">Modern Workplace</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft 365 is a
                    cloud-based productivity and security platform designed to support modern businesses of all sizes. It
                    combines familiar applications with intelligent cloud services that enable secure, flexible, and
                    efficient work from anywhere.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#overview"
                        class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
                    <a href="#core-apps"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">FEATURES</a>
                    <a href="#approach"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">OUR
                        APPROACH</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft 365 Modern Workplace" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/services/modern-workplace/bg.png" />
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

    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/services/modern-workplace/section-1.png" alt="Microsoft 365 Modern Workplace"
                    class="rounded-xl shadow-lg w-full" loading="lazy" />
            </div>
            <div class="border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft 365 Modern Workplace</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft 365 Modern Workplace?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 Modern Workplace is a cloud-first
                    approach to how businesses work, collaborate, and stay secure in today's digital environment. Built on
                    Microsoft 365, it brings together productivity tools, collaboration platforms, security, and device
                    management into a single, integrated solution.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The modern workplace enables employees to work from
                    anywhere, collaborate in real time, and securely access business data across multiple devices. Tools
                    such as Microsoft Teams, SharePoint, OneDrive, and Exchange Online support seamless communication, file
                    sharing, and teamwork.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Security and management are core components of the
                    modern workplace. With identity protection, multi-factor authentication, conditional access, and device
                    management through Intune, businesses can protect users, devices, and data without relying on
                    traditional on-premises infrastructure.</p>
                <a href="#core-apps" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Core
                    Applications <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="core-apps">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Microsoft 365 Core Applications</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Microsoft 365 includes the essential tools
                businesses need to communicate, collaborate, and manage data securely in the cloud</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $apps = [
                        [
                            'title' => 'Microsoft Outlook',
                            'desc' =>
                                'Professional email hosting with advanced security, shared calendars, and seamless integration across all devices.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />',
                        ],
                        [
                            'title' => 'Microsoft Teams',
                            'desc' =>
                                'Secure collaboration platform for chat, video meetings, calling, file sharing, and teamwork in one place.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />',
                        ],
                        [
                            'title' => 'SharePoint Online',
                            'desc' =>
                                'Secure document management, company intranets, and team collaboration sites for seamless content sharing.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />',
                        ],
                        [
                            'title' => 'OneDrive',
                            'desc' =>
                                'Personal cloud storage for files and backups, enabling access from anywhere on any device.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Word, Excel, PowerPoint',
                            'desc' =>
                                'The complete Office suite for creating, editing, and sharing documents, spreadsheets, and presentations.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />',
                        ],
                        [
                            'title' => 'Mobile Apps',
                            'desc' =>
                                'Access email, files, and meetings from anywhere using smartphone and tablet apps.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                    ];
                @endphp
                @foreach ($apps as $app)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $app['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $app['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $app['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="platforms">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Workplace Collaboration Platforms</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Together, these Microsoft 365 essentials create a modern workplace
                platform designed for productivity, collaboration, and secure cloud-based business operations</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $platforms = [
                        [
                            'title' => 'Microsoft Teams',
                            'desc' => 'Central hub for teamwork with chat, video meetings, and file collaboration.',
                            'image' => '/images/cloud/services/modern-workplace/section-2.jpg',
                        ],
                        [
                            'title' => 'SharePoint Online',
                            'desc' => 'Team sites and intranet for document management and collaboration.',
                            'image' => '/images/cloud/services/modern-workplace/section-3.jpg',
                        ],
                        [
                            'title' => 'OneDrive for Business',
                            'desc' => 'Personal cloud storage for file access and sharing from anywhere.',
                            'image' => '/images/cloud/services/modern-workplace/section-4.jpg',
                        ],
                        [
                            'title' => 'Exchange Online',
                            'desc' => 'Enterprise email hosting with calendar and contacts.',
                            'image' => '/images/cloud/services/modern-workplace/section-5.jpg',
                        ],
                    ];
                @endphp
                @foreach ($platforms as $platform)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all overflow-hidden flex flex-col">
                        <div class="relative h-48 w-full overflow-hidden">
                            <img src="{{ $platform['image'] }}" alt="{{ $platform['title'] }}"
                                class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-6 flex flex-col grow">
                            <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $platform['title'] }}</h3>
                            <p class="text-slate-600 text-sm text-justify">{{ $platform['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="advanced">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Advanced Features &amp; Security</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Microsoft 365 Advanced Features provide organisations with powerful
                tools that go beyond everyday productivity, helping businesses improve security, manage devices, automate processes, and maintain compliance</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $advancedFeatures = [
                        [
                            'title' => 'Microsoft Defender',
                            'desc' => 'Advanced threat protection for email, endpoints, and cloud applications.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Microsoft Intune',
                            'desc' => 'Cloud-based device management for Windows, macOS, iOS, and Android.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Conditional Access',
                            'desc' => 'Identity-based access policies for secure resource access.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Microsoft Copilot',
                            'desc' => 'AI-powered assistant for enhanced productivity across Microsoft 365.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />',
                        ],
                    ];
                @endphp
                @foreach ($advancedFeatures as $feature)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $feature['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="benefits">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Microsoft 365 Modern Workplace</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">By combining productivity, flexibility, cyber
                security, and scalability, Microsoft 365 Modern Workplace helps organisations improve efficiency,
                support remote work, and adapt confidently to changing business needs</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        [
                            'title' => 'Work From Anywhere',
                            'desc' =>
                                'Enable employees to work from anywhere, collaborate in real time, and securely access business data across multiple devices.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Enhanced Collaboration',
                            'desc' =>
                                'Microsoft Teams brings chat, video meetings, calling, file sharing, and teamwork into one secure workspace.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />',
                        ],
                        [
                            'title' => 'Advanced Security',
                            'desc' =>
                                'Identity protection, multi-factor authentication, conditional access, and device management protect users, devices, and data.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Device Management',
                            'desc' =>
                                'Microsoft Intune enables centralised device management for Windows, macOS, iOS, and Android from a single cloud console.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Scalability',
                            'desc' =>
                                'Cloud-based infrastructure scales with your business needs without requiring traditional on-premises hardware.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />',
                        ],
                        [
                            'title' => 'Business Continuity',
                            'desc' =>
                                'Reliable cloud services ensure your business operations continue with minimal downtime during unexpected events.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $benefit['icon'] !!}</svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $benefit['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="services-section">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Our Microsoft 365 Consulting Services</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Microsoft 365 Consulting from Total Solutions IT helps businesses
                plan, deploy, and optimise their Microsoft 365 environment to improve productivity, security, and collaboration</p>
            <div class="grid lg:grid-cols-3 gap-8">
                @php
                    $consultingServices = [
                        [
                            'title' => 'Migration & Setup',
                            'desc' => 'Complete Microsoft 365 migration and tenant setup for your organisation.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Security Configuration',
                            'desc' => 'Configure Conditional Access, Defender, and security policies for protection.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Device Management',
                            'desc' => 'Deploy and configure Microsoft Intune for centralised device management.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                    ];
                @endphp
                @foreach ($consultingServices as $service)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $service['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $service['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="teams">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative order-2 lg:order-1">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Team Collaboration</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Microsoft Teams</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Since the 2020 pandemic, Microsoft Teams has become a crucial
                    tool for businesses, with usage soaring. If your business is moving towards permanent remote work arrangements, Total
                    Solutions IT can help you set up Microsoft Teams for seamless collaboration.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft Teams is a powerful collaboration platform within
                    Microsoft 365 that brings chat, video meetings, calling, file sharing, and teamwork into one secure workspace. Designed for
                    modern businesses, Teams helps staff communicate in real time, collaborate on documents, and manage projects without switching
                    between multiple apps.</p>
                <div class="space-y-3 mb-8">
                    @php
                        $teamsFeatures = [
                            'Instant messaging and presence awareness',
                            'Secure online meetings with recording',
                            'Centralised document collaboration',
                            'Business calling capabilities',
                            'Integration with Microsoft 365 apps',
                        ];
                    @endphp
                    @foreach ($teamsFeatures as $feature)
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="#help"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">Get Started
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
            <div class="flex justify-center order-1 lg:order-2">
                <div class="relative h-80 w-full rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/services/modern-workplace/section-5.jpg" alt="Microsoft Teams Collaboration"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="help">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative h-80 lg:h-96 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                <img src="/images/cloud/services/modern-workplace/section-6.jpg" alt="Microsoft 365 Support"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div class="bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-10 text-white">
                <h2 class="text-2xl lg:text-3xl font-bold mb-6">Partner with a Modern Workplace Specialist</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6 text-justify">Total Solutions IT helps
                    businesses unlock the full potential of Microsoft 365. Our experienced consultants work with
                    organisations to ensure Microsoft 365 is configured correctly, aligned with best practices, and
                    delivering maximum value from your cloud investment.</p>
                <div class="space-y-3 mb-6">
                    @php
                        $services = [
                            'Microsoft 365 migration and tenant setup',
                            'Microsoft Teams collaboration and communication',
                            'SharePoint and OneDrive document management',
                            'Security configuration including Conditional Access and Microsoft Defender',
                            'Device management with Microsoft Intune',
                            'Improving Microsoft Secure Score and cyber security posture',
                        ];
                    @endphp
                    @foreach ($services as $service)
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-blue-50 text-sm">{{ $service }}</span>
                        </div>
                    @endforeach
                </div>
                <p class="text-blue-100 text-sm mb-6">With the right strategy and implementation, Microsoft 365 enables
                    businesses to work smarter, collaborate more effectively, and protect critical business data while supporting modern hybrid work
                    environments.</p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Useful Links</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $usefulLinks = [
                        [
                            'title' => 'Microsoft 365',
                            'description' => 'Official Microsoft 365 website for productivity and collaboration solutions.',
                            'href' => 'https://www.microsoft.com/en-us/microsoft-365',
                        ],
                        [
                            'title' => 'Microsoft Teams',
                            'description' => 'Learn more about Microsoft Teams for business communication.',
                            'href' => 'https://www.microsoft.com/en-us/microsoft-teams',
                        ],
                        [
                            'title' => 'Microsoft Intune',
                            'description' => 'Cloud-based device management for your organisation.',
                            'href' => 'https://www.microsoft.com/en-us/security/business/device-security/microsoft-intune',
                        ],
                        [
                            'title' => 'Microsoft Defender',
                            'description' => 'Advanced threat protection for your business.',
                            'href' => 'https://www.microsoft.com/en-us/security/business/security-101/what-is-microsoft-defender',
                        ],
                    ];
                @endphp
                @foreach ($usefulLinks as $link)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $link['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                        <a href="{{ $link['href'] }}" target="_blank"
                            class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600 text-center mb-12">Common questions about Microsoft 365 Modern Workplace</p>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'What is Microsoft 365 Modern Workplace?',
                            'answer' => 'Microsoft 365 Modern Workplace is a cloud-first approach to how businesses work, collaborate, and stay secure. It brings together productivity tools, collaboration platforms, security, and device management into a single, integrated solution.',
                        ],
                        [
                            'question' => 'How does Teams improve collaboration?',
                            'answer' => 'Microsoft Teams provides chat, video meetings, calling, file sharing, and teamwork in one secure workspace. It integrates with all Microsoft 365 apps for seamless collaboration.',
                        ],
                        [
                            'question' => 'What security features are included?',
                            'answer' => 'Microsoft 365 includes identity protection, multi-factor authentication, conditional access policies, Microsoft Defender for threat protection, and device management through Intune.',
                        ],
                        [
                            'question' => 'Can employees work from anywhere?',
                            'answer' => 'Yes, Microsoft 365 enables employees to work from anywhere, on any device, with secure access to business data through cloud-based services.',
                        ],
                        [
                            'question' => 'How does device management work?',
                            'answer' => 'Microsoft Intune provides cloud-based device management for Windows, macOS, iOS, and Android devices from a single console, enabling centralised policy enforcement and compliance.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative faq-item">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="toggleFaq(this)"
                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="faq-chevron w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const answer = item.querySelector('.faq-answer');
            const chevron = item.querySelector('.faq-chevron');
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            document.querySelectorAll('.faq-answer').forEach(el => {
                el.style.maxHeight = '0px';
            });
            document.querySelectorAll('.faq-chevron').forEach(el => {
                el.classList.remove('rotate-180');
            });

            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                chevron.classList.add('rotate-180');
            }
        }
    </script>


@endsection

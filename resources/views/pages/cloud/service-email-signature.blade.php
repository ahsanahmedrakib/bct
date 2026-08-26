@extends('layouts.page')

@section('title', 'Email Signature | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    CodeTwo Email Signature <span class="text-brand-blue">Management</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Centrally manage professional email signatures,
                    legal disclaimers, banners and automatic replies across your Microsoft 365 environment.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#overview"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md transition-all hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                        OVERVIEW
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#features"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md transition-all hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                        FEATURES
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#approach"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md transition-all hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                        OUR APPROACH
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Email Signature" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/services/email-signature/bg.png" />
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

    <section id="overview" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up flex justify-center">
                <img alt="CodeTwo Email Signatures 365" loading="lazy" class="rounded-xl shadow-lg w-full"
                    src="/images/cloud/services/email-signature/section-1.jpg" />
            </div>
            <div class="border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative reveal reveal-fade-up">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Email Signature Management</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is CodeTwo Email Signatures 365?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">CodeTwo Email Signatures 365 helps businesses centrally manage
                    email signatures, legal disclaimers, marketing banners and automatic replies across Microsoft 365.
                    It works with Outlook, Apple devices, mobiles and other email apps, giving organisations a
                    consistent and professional brand experience on every email.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">With cloud-based management, flexible signature rules, and
                    support for Entra ID attributes, CodeTwo makes signature management easier, more scalable, and more
                    professional.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">CodeTwo Email Signatures 365 is a powerful cloud-based email
                    signature management solution for Microsoft 365 that allows organisations to centrally manage email
                    signatures, legal disclaimers, marketing banners and automatic replies across the entire business.
                    Instead of relying on employees to manually update their own Outlook signatures, administrators can
                    control everything from a centralised web-based management portal, ensuring consistent branding and
                    professional communication in every email sent.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">This solution works across Outlook, webmail and mobile
                    devices, allowing businesses to maintain a uniform signature regardless of the device being used.
                    CodeTwo also integrates with Microsoft Entra ID, automatically populating signatures with user
                    information such as names, job titles, departments and contact details.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key
                    Features <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section id="features" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Core Features</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">CodeTwo Email Signatures 365 provides organisations
                    with powerful tools to centrally manage and standardise email signatures across Microsoft 365</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'Centralised Management',
                            'desc' => 'Control signatures for the whole organisation from a single web-based portal. Administrators can update signatures for the entire organisation instantly without needing to configure each user\'s Outlook settings.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />',
                        ],
                        [
                            'title' => 'Consistent Branding',
                            'desc' => 'Ensure consistent company branding across every email sent by employees. Maintain a uniform signature regardless of the device being used.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />',
                        ],
                        [
                            'title' => 'Automatic User Details',
                            'desc' => 'Signatures automatically include user details pulled from Microsoft Entra ID such as names, job titles, departments and contact information.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />',
                        ],
                        [
                            'title' => 'Marketing Banners',
                            'desc' => 'Add marketing banners and promotional messaging in signatures to support campaigns and announcements.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />',
                        ],
                        [
                            'title' => 'Cross-Platform Support',
                            'desc' => 'Supports Windows, Mac, Outlook on the web, iOS, Android and other email apps, depending on the mode used.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Automatic Replies',
                            'desc' => 'Centrally manage out-of-office messages and branded auto replies across the organisation.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        ],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
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

    <section class="py-16 lg:py-24 bg-slate-50" id="scenarios">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Business Scenarios</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">CodeTwo Email Signatures 365 supports a range of
                    business scenarios where organisations need centralised control of email signatures, branding and
                    messaging within Microsoft 365</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $scenarios = [
                        [
                            'title' => 'Company-Wide Standardisation',
                            'desc' => 'Maintain consistent branding across all emails with standardised signatures for the entire organisation.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />',
                        ],
                        [
                            'title' => 'Marketing Campaigns',
                            'desc' => 'Use promotional banners and announcements in email signatures to support marketing campaigns.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />',
                        ],
                        [
                            'title' => 'Centralised IT Management',
                            'desc' => 'Manage signatures, disclaimers and updates from a single platform, reducing administrative burden.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />',
                        ],
                        [
                            'title' => 'Automatic User Details',
                            'desc' => 'Populate signatures automatically from Microsoft Entra ID attributes like names, job titles and departments.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />',
                        ],
                        [
                            'title' => 'Cross-Device Consistency',
                            'desc' => 'Ensure signatures appear correctly regardless of the device used - desktop, web or mobile.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Compliance & Legal',
                            'desc' => 'Automatically add compliance and legal disclaimers to outbound emails.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        ],
                    ];
                @endphp
                @foreach ($scenarios as $scenario)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $scenario['icon'] !!}</svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $scenario['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $scenario['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="modes" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Signature Modes</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Choose the signature mode that best fits your
                    organisation: add signatures in the cloud, directly in Outlook as users type, or both</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $modes = [
                        [
                            'title' => 'Server-Side (Cloud)',
                            'desc' => 'In this mode, a signature is added after an email is sent and does not require the installation of the CodeTwo Signatures add-in. Signatures are added to emails sent from any device or mail application.',
                        ],
                        [
                            'title' => 'Client-Side (Outlook)',
                            'desc' => 'A signature is added as you type an email. This mode requires installation of the CodeTwo Signatures add-in to add signatures directly to Outlook and Outlook Web App.',
                        ],
                        [
                            'title' => 'Combo Mode',
                            'desc' => 'This mode provides the best of both types of processing (client-side and server-side). It requires you to set up Office 365 connectors and the CodeTwo Signatures add-in.',
                        ],
                    ];
                @endphp
                @foreach ($modes as $index => $mode)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 rounded-2xl overflow-hidden relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md z-10"></div>
                        <div class="p-6 flex flex-col grow">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white shrink-0">
                                    <span class="font-bold text-sm">{{ $index + 1 }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $mode['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $mode['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="benefits" class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Benefits</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">CodeTwo Email Signatures 365 is the top email
                    signature software choice for businesses of any size using Microsoft 365</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        [
                            'title' => 'Cloud-Based Solution',
                            'desc' => 'It is cloud-based, so there is no infrastructure to deploy or maintain on-premises. The deployment process is fully automated and based on wizards.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Centralised Management',
                            'desc' => 'It centralises the management of email signatures and disclaimer additions to Microsoft 365 organisations - one person can manage all signatures.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />',
                        ],
                        [
                            'title' => 'Easy Configuration',
                            'desc' => 'It is easy to configure and provision. Just authorise with your Microsoft 365 global admin credentials and you\'ll be ready to create your first email signature.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />',
                        ],
                        [
                            'title' => 'Device Independent',
                            'desc' => 'CodeTwo signatures are not device-specific and work on Windows, Mac, mobile devices, and tablets.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Flexible Templates',
                            'desc' => 'It provides a flexible email signature editor with web-based HTML templates, signature rule automation, and predefined signature layouts.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />',
                        ],
                        [
                            'title' => 'Security & Compliance',
                            'desc' => 'High level of security and compliance with ISO/IEC 27001 and ISO/IEC 27018 certifications. It is the only vendor with a modern signature add-in for Outlook and Outlook Web App.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $benefit['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $benefit['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="help" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative h-80 lg:h-96 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 reveal reveal-fade-up">
                <img alt="Email Signature Support" loading="lazy" class="w-full h-full object-contain p-4"
                    src="/images/cloud/services/email-signature/section-2.png" />
            </div>
            <div class="bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-10 text-white reveal reveal-fade-up">
                <h2 class="text-2xl lg:text-3xl font-bold mb-6">Need Help with Email Signature Management?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6 text-justify">Total Solutions IT provides comprehensive CodeTwo Email
                    Signatures 365 services to help your organisation maintain professional and consistent email
                    signatures across Microsoft 365. Our team can handle the deployment, configuration, and ongoing
                    management of your email signature solution.</p>
                <div class="space-y-3 mb-6">
                    @php
                        $services = [
                            'CodeTwo Email Signatures 365 deployment and configuration',
                            'Microsoft Entra ID integration for automatic user details',
                            'Signature template design and branding setup',
                            'Signature rule configuration for different scenarios',
                            'Outlook add-in deployment across the organisation',
                            'Ongoing support and signature management',
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
                <p class="text-blue-100 text-sm mb-6">Whether you need a complete signature solution or want to improve
                    your existing email signatures, we can help you achieve consistent, professional branding across all your communications.</p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $usefulLinks = [
                        [
                            'title' => 'CodeTwo Email Signatures 365',
                            'description' => 'The official CodeTwo website for email signature management solutions for Microsoft 365.',
                            'href' => 'https://www.codetwo.com/email-signatures/',
                        ],
                        [
                            'title' => 'CodeTwo Getting Started',
                            'description' => 'Learn how to get started with CodeTwo Email Signatures 365 for your Microsoft 365 organisation.',
                            'href' => 'https://www.codetwo.com/userguide/email-signatures-for-office-365/first-steps.htm',
                        ],
                        [
                            'title' => 'CodeTwo Pricing',
                            'description' => 'View pricing plans and licensing options for CodeTwo Email Signatures 365.',
                            'href' => 'https://www.codetwo.com/email-signatures/pricing',
                        ],
                        [
                            'title' => 'CodeTwo Free Trial',
                            'description' => 'Start a 14-day free trial of CodeTwo Email Signatures 365 with no credit card required.',
                            'href' => 'https://login.codetwo.com/account/create',
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about CodeTwo Email Signatures 365</p>
            </div>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'What is CodeTwo Email Signatures 365?',
                            'answer' => 'It is a cloud-based email signature management platform for Microsoft 365 that lets organisations centrally manage signatures, disclaimers, banners and automatic replies.',
                        ],
                        [
                            'question' => 'Does it work with Microsoft 365?',
                            'answer' => 'Yes. It is built for Microsoft 365 and integrates with Microsoft 365 mail flow and Outlook-based deployment options.',
                        ],
                        [
                            'question' => 'What devices are supported?',
                            'answer' => 'CodeTwo signatures work across Windows, Mac, Outlook on the web, iOS, Android and other email apps, depending on the signature mode used.',
                        ],
                        [
                            'question' => 'How does the server-side mode work?',
                            'answer' => 'In server-side mode, signatures are added after an email is sent. This does not require the installation of any add-in and works with emails sent from any device or mail application.',
                        ],
                        [
                            'question' => 'How does the client-side mode work?',
                            'answer' => 'In client-side mode, signatures are added as you type an email. This requires installation of the CodeTwo Signatures add-in for Outlook and Outlook Web App.',
                        ],
                        [
                            'question' => 'What is the combo mode?',
                            'answer' => 'Combo mode provides the best of both processing types. Client-side signatures are added to messages created in Outlook desktop and OWA, while server-side signatures are added to emails sent from other email clients including mobile devices.',
                        ],
                        [
                            'question' => 'How are user details populated in signatures?',
                            'answer' => 'CodeTwo integrates with Microsoft Entra ID (Azure AD) to automatically populate signatures with user information such as names, job titles, departments and contact details.',
                        ],
                        [
                            'question' => 'How can Bismillah Computer & Technology help with CodeTwo?',
                            'answer' => 'Bismillah Computer & Technology provides comprehensive CodeTwo Email Signatures 365 services including deployment, configuration, template design, rule setup, and ongoing support to ensure your organisation maintains professional and consistent email signatures.',
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

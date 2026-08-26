@extends('layouts.app')

@section('title', 'Microsoft Secure Score | Bismillah Computer & Technology')
@section('description',
    'Microsoft Secure Score is a built-in security measurement tool that helps organizations
    identify risks and improve their Microsoft 365 security posture.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Microsoft Secure Score<br>
                    <span class="text-brand-blue block mt-2">Security Posture</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Secure Score
                    is a built-in security measurement tool that helps organizations identify risks, implement recommended
                    security controls, and continuously improve their Microsoft 365 security posture. By reviewing your
                    Secure
                    Score and applying Microsoft's best-practice recommendations, businesses can reduce vulnerabilities,
                    improve
                    compliance, and gain greater visibility into their organization's security health.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#overview"
                        class="group flex items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        OVERVIEW
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#how-it-works"
                        class="group flex items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        HOW IT WORKS
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#improve"
                        class="group flex items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        IMPROVE YOUR SCORE
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Secure Score" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/cyber-security/secure-score/bg.png" />
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

    {{-- ================= OVERVIEW SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <div
                    class="relative h-80 w-full rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/secure-score/section-1.jpg"
                        alt="Microsoft Secure Score Dashboard" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
            <div class="reveal reveal-fade-up h-full">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Secure Score</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft Secure
                        Score?</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft Secure Score is a built-in
                        security
                        measurement tool within Microsoft 365 and Microsoft Defender that helps organisations understand and
                        improve their cybersecurity posture. It provides a numerical score that represents how well your
                        Microsoft 365 environment is protected against common security threats such as phishing, malware,
                        and
                        unauthorised access.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The score is calculated based on the
                        security
                        controls and configurations enabled across your Microsoft 365 services. As recommended security
                        settings
                        are implemented, the score increases, giving businesses a clear way to track improvements and
                        identify
                        areas that require attention.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Microsoft Secure Score is more than
                        just a number —
                        it provides organisations with a clear and measurable view of their Microsoft 365 security posture.
                        By
                        analysing security configurations across identities, devices, applications, and data, Secure Score
                        highlights areas where improvements can significantly reduce cybersecurity risks.</p>
                    <a href="#how-it-works" class="text-blue-600 font-medium flex items-center hover:text-blue-800">How It
                        Works
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= WHY SECURE SCORE MATTERS ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="why-matters">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Why Microsoft Secure Score Matters</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Microsoft Secure Score is more than just a number —
                    it provides organisations with a clear and measurable view of their Microsoft 365 security posture</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        [
                            'title' => 'Visibility',
                            'desc' =>
                                'Understand what security controls are enabled and where improvements are needed across your Microsoft 365 environment.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                        ],
                        [
                            'title' => 'Accountability',
                            'desc' =>
                                'Assign recommended actions to IT teams and track security improvements over time with measurable goals.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                        ],
                        [
                            'title' => 'Continuous Improvement',
                            'desc' =>
                                "Monitor how your organisation's security posture evolves as new protections are implemented across your tenant.",
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />',
                        ],
                        [
                            'title' => 'Benchmarking',
                            'desc' =>
                                'Compare your Secure Score against similar organisations and industry standards to understand your competitive position.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />',
                        ],
                        [
                            'title' => 'Compliance Alignment',
                            'desc' =>
                                'Many recommendations support frameworks such as the ACSC Essential Eight, ISO 27001, NIST, and GDPR.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div
                                class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
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

    {{-- ================= HOW IS IT CALCULATED ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="how-it-works">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up h-full order-2 lg:order-1">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">How It Works</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">How is Microsoft Secure
                        Score Calculated?</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Understanding how your Microsoft
                        Secure Score
                        is calculated is key to improving your Microsoft 365 security posture and strengthening your overall
                        cybersecurity framework. Secure Score provides a measurable benchmark to assess how effectively your
                        organisation protects identities, devices, data, and applications.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Your Microsoft Secure Score is
                        displayed as a
                        percentage that reflects how your current security configuration compares to Microsoft's recommended
                        best
                        practices. The score is calculated based on the security controls and configurations enabled across
                        your
                        Microsoft 365 services.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">While Secure Score isn't a
                        compliance tool,
                        improving your score often aligns with regulatory frameworks like ISO 27001, NIST, and GDPR. It's a
                        solid
                        step in your compliance journey. As recommended security settings are implemented, the score
                        increases,
                        giving businesses a clear way to track improvements and identify areas that require attention.</p>
                    <a href="#improve" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Improve
                        Your Score
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg></a>
                </div>
            </div>
            <div class="flex justify-center order-1 lg:order-2">
                <div
                    class="relative h-80 w-full rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/secure-score/section-2.jpg" alt="Secure Score Calculation"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    {{-- ================= SCORE CATEGORIES ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="categories">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Secure Score Categories</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Secure Score is divided into four main categories
                    that cover the full spectrum of your Microsoft 365 security posture</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $categories = [
                        [
                            'title' => 'Identity Protection',
                            'desc' =>
                                'Multi-Factor Authentication (MFA), secure sign-in policies, Conditional Access, Entra ID Protection, password policies, admin account protection, and legacy authentication blocking.',
                            'image' => '/images/cloud/cyber-security/secure-score/section-1.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z" />',
                        ],
                        [
                            'title' => 'Device Security',
                            'desc' =>
                                'Compliance policies, endpoint protection, Microsoft Intune device management, device health monitoring, and attack surface reduction rules across Windows, macOS, iOS, and Android.',
                            'image' => '/images/cloud/cyber-security/secure-score/section-2.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Data Protection',
                            'desc' =>
                                'Email security, file protection controls, Data Loss Prevention (DLP), sensitivity labels, SharePoint and OneDrive sharing controls, and Microsoft Purview compliance tools.',
                            'image' => '/images/cloud/cyber-security/secure-score/section-3.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />',
                        ],
                        [
                            'title' => 'Application Security',
                            'desc' =>
                                'Safe configuration of Microsoft 365 services, Microsoft Defender for Office 365, Safe Links, Safe Attachments, anti-phishing policies, and impersonation protection.',
                            'image' => '/images/cloud/cyber-security/secure-score/section-4.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($categories as $category)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all overflow-hidden">
                        @if ($category['image'])
                            <div class="relative h-48 w-full">
                                <img src="{{ $category['image'] }}" alt="{{ $category['title'] }}"
                                    class="w-full h-full object-cover" loading="lazy" />
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">{!! $category['icon'] !!}</svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $category['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $category['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= HOW TO IMPROVE ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="improve">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-start">
            <div
                class="relative h-80 lg:h-full min-h-96 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 lg:sticky lg:top-24">
                <img src="/images/cloud/cyber-security/secure-score/section-3.jpg" alt="Improve Your Secure Score"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-4">How to Improve Your Secure Score</h2>
                <p class="text-slate-600 mb-8 text-justify">Microsoft provides specific recommendations to
                    improve your Secure Score. Addressing Identity actions first delivers the highest risk reduction per
                    point. Complete these before moving to other categories.</p>
                <div class="space-y-4">
                    @php
                        $improvements = [
                            [
                                'title' => 'Enable Multi-Factor Authentication (MFA) for all users',
                                'desc' =>
                                    'The single most impactful control in any M365 tenant. Password compromise does not lead to account takeover when MFA is required. Ideally enforced via Conditional Access policy rather than per-user MFA, which gives more granular control and supports phishing-resistant methods.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z" />',
                            ],
                            [
                                'title' => 'Disable legacy authentication protocols',
                                'desc' =>
                                    'Disable legacy authentication protocols (e.g., POP, IMAP, SMTP basic auth). Legacy protocols do not support MFA and represent a significant attack vector for credential theft and account compromise.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                            ],
                            [
                                'title' => 'Apply Intune compliance policies',
                                'desc' =>
                                    'Apply Intune compliance policies for device health and encryption. Ensure only trusted and compliant devices can access company systems through device compliance policies and endpoint protection.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                            ],
                            [
                                'title' => 'Use Microsoft Defender for Office 365',
                                'desc' =>
                                    'Use Microsoft Defender for Office 365 to protect against phishing and malware. Deploy Safe Links and Safe Attachments for real-time content scanning and anti-phishing impersonation protections.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                            ],
                            [
                                'title' => 'Deploy Sensitivity Labels',
                                'desc' =>
                                    'Deploy Sensitivity Labels to classify and protect data across Microsoft 365. Ensure only authorised users access sensitive content, whether stored or shared, supporting zero-trust data protection.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                            ],
                            [
                                'title' => 'Implement Conditional Access',
                                'desc' =>
                                    'Implement Conditional Access to enforce secure access rules. Define policies that evaluate user identity, device compliance, location, risk level, and application type before granting access.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                            ],
                            [
                                'title' => 'Audit privileged roles',
                                'desc' =>
                                    'Audit privileged roles and restrict global admin usage. Enforce least-privilege access with Role-Based Access Control (RBAC) and Privileged Identity Management (PIM).',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                            ],
                            [
                                'title' => 'Enable Safe Links and Safe Attachments',
                                'desc' =>
                                    'Enable Safe Links and Safe Attachments for real-time content scanning. Protect against phishing attempts, malware, and ransomware attacks across email, Teams, and SharePoint.',
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
                            ],
                        ];
                    @endphp
                    @foreach ($improvements as $item)
                        <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="text-blue-600 font-bold text-sm shrink-0">{{ str_pad($loop->index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div
                                        class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">{!! $item['icon'] !!}</svg>
                                    </div>
                                    <h3 class="font-medium text-slate-900 text-sm">{{ $item['title'] }}</h3>
                                </div>
                                <p class="mt-2 text-sm text-slate-600 leading-relaxed text-justify">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================= REVIEW FREQUENCY ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="review">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">How Often Should You Review Your Secure Score?</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Regularly reviewing your Microsoft Secure Score is
                    essential for maintaining a strong Microsoft 365 security posture. We recommend reviewing your Secure
                    Score
                    monthly, or weekly for high-risk industries such as healthcare, finance, or legal services.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white border-2 border-blue-100 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Monthly Reviews</h3>
                    <p class="text-slate-600 text-sm text-justify mb-4">As your environment evolves — adding new users,
                        devices,
                        applications, or licences — new security recommendations may appear. Making Secure Score reviews
                        part of
                        your ongoing IT security checklist ensures continuous improvement and proactive risk management.</p>
                    <ul class="space-y-3">
                        @php
                            $monthlyItems = [
                                'Review all new recommended actions from the previous period',
                                'Revisit Risk accepted items to confirm justification is still valid',
                                'Check whether any previously unlicensed actions have become available',
                                'Export the list to CSV and attach to security review documentation',
                            ];
                        @endphp
                        @foreach ($monthlyItems as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                <span class="text-slate-600 text-sm">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white border-2 border-blue-100 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Key Best Practices</h3>
                    <ul class="space-y-3">
                        @php
                            $bestPractices = [
                                'Address all Identity actions with "Have license? = Yes" first',
                                'Document every "Risk accepted" decision with reason, date, and owner',
                                'Do not treat Secure Score as a substitute for a security assessment',
                                'Review weekly for high-risk industries (healthcare, finance, legal)',
                                'Track changes over time rather than chasing a specific number',
                            ];
                        @endphp
                        @foreach ($bestPractices as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                <span class="text-slate-600 text-sm">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= LIMITATIONS ================= --}}
    <section class="py-8 lg:py-10 bg-white" id="limitations">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up bg-blue-50 border-2 border-blue-100 rounded-2xl p-8">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                    <h3 class="text-lg font-bold text-blue-900">Important Limitations to Consider</h3>
                </div>
                <ul class="space-y-2">
                    @php
                        $limitations = [
                            'Not all third-party security tools are reflected in your score',
                            'Some recommendations may not apply to your licensing or business needs',
                            'Secure Score is not a guarantee of protection — it is a baseline framework to guide stronger cybersecurity resilience',
                            'Secure Score does not evaluate Conditional Access policy quality, RBAC hygiene, incident response capability, or user awareness',
                        ];
                    @endphp
                    @foreach ($limitations as $item)
                        <li class="flex items-start gap-3">
                            <span class="text-blue-400 shrink-0 mt-1">&bull;</span>
                            <span class="text-slate-600 text-sm">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ================= NEED HELP ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="help">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="reveal reveal-fade-up bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-12 text-white">
                <h2 class="text-3xl font-bold mb-6">Need Help Improving Your Secure Score?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-8 max-w-3xl text-justify">Microsoft Secure Score is a
                    powerful tool for organizations looking to enhance their Microsoft 365 security posture. It offers
                    visibility, direction, and measurable goals in a format that's easy to understand. Whether you're an SMB
                    or
                    an enterprise, reviewing your Secure Score regularly and acting on its recommendations should be a core
                    part of your cybersecurity strategy. Partnering with a proven and skilled Microsoft 365 Security partner
                    can help you achieve the best combination between a secure IT environment and a great user experience.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    @php
                        $services = [
                            'Assess your current Secure Score and identify gaps',
                            'Implement best-practice security policies across your tenant',
                            'Remediate high-risk items and prioritise critical actions',
                            'Monitor improvements over time with regular reviews',
                            'Provide Secure Score reports in our quarterly IT reviews',
                            'Microsoft 365 security hardening to improve Secure Score and reduce risk',
                            'Intune device compliance and endpoint management',
                            'Microsoft Defender deployment and monitoring',
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
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    {{-- ================= USEFUL LINKS ================= --}}
    <section class="py-8 lg:py-10 bg-white" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12 reveal reveal-fade-up">Useful Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $usefulLinks = [
                        [
                            'title' => 'Microsoft Secure Score Portal',
                            'desc' =>
                                "Access your organisation's Microsoft Secure Score directly in the Microsoft Defender portal to review recommendations and track improvements.",
                            'href' => 'https://security.microsoft.com/securescore',
                        ],
                        [
                            'title' => 'Microsoft Secure Score Documentation',
                            'desc' =>
                                "Official Microsoft documentation explaining how Secure Score works, how it's calculated, and how to interpret your results.",
                            'href' =>
                                'https://learn.microsoft.com/en-us/microsoft-365/security/defender/microsoft-secure-score',
                        ],
                        [
                            'title' => 'Microsoft 365 Cyber Security',
                            'desc' =>
                                'Learn how Microsoft 365 provides comprehensive cybersecurity features to protect your business from modern threats.',
                            'href' => '#',
                        ],
                        [
                            'title' => 'Essential Eight Maturity Model',
                            'desc' =>
                                'ACSC guidance on the Essential Eight mitigation strategies and maturity levels for Bangladeshi organisations.',
                            'href' =>
                                'https://www.cyber.gov.au/resources-business-and-government/essential-cyber-security/essential-eight',
                        ],
                    ];
                @endphp
                @foreach ($usefulLinks as $link)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $link['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $link['desc'] }}</p>
                        <a href="{{ $link['href'] }}" target="_blank"
                            class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= FAQ SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about Microsoft Secure Score</p>
            </div>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'What is Microsoft Secure Score?',
                            'answer' =>
                                'Microsoft Secure Score is a built-in tool in Microsoft 365 that helps organizations understand and improve their security posture. It analyzes your current configuration and behaviors and provides a score along with recommended actions to enhance security. It provides a numerical score representing how well your Microsoft 365 environment is protected against common security threats.',
                        ],
                        [
                            'question' => 'How is my Secure Score calculated?',
                            'answer' =>
                                "Your Secure Score is displayed as a percentage that reflects how your current security configuration compares to Microsoft's recommended best practices. It is calculated based on the security controls and configurations enabled across your Microsoft 365 services, including identity protection, device security, data protection, and application security.",
                        ],
                        [
                            'question' => 'How often should I review my Secure Score?',
                            'answer' =>
                                "We recommend reviewing your Secure Score at least monthly, or weekly if you're in a regulated industry or working toward compliance. Secure Score updates automatically as your environment changes — adding new users, devices, applications, or licences may trigger new recommendations.",
                        ],
                        [
                            'question' => 'Can Bismillah Computer & Technology help us improve our Secure Score?',
                            'answer' =>
                                'Absolutely. We specialize in Microsoft 365 security, and we can assess your current score, implement best-practice policies, remediate high-risk items, monitor improvements over time, and provide Secure Score reports in our quarterly IT reviews.',
                        ],
                        [
                            'question' => 'Is a higher Secure Score always better?',
                            'answer' =>
                                'While a higher score generally indicates stronger security configurations, Secure Score is not a guarantee of protection. It is a baseline framework to guide cybersecurity improvements. Some recommendations may not apply to your licensing or business needs, and not all third-party security tools are reflected in your score.',
                        ],
                        [
                            'question' => 'Does Secure Score cover all security frameworks?',
                            'answer' =>
                                "While Secure Score isn't a compliance tool, improving your score often aligns with regulatory frameworks like ISO 27001, NIST, and GDPR. Many recommendations also support frameworks such as the ACSC Essential Eight. It's a solid step in your compliance journey.",
                        ],
                        [
                            'question' => 'What are the main categories of Secure Score?',
                            'answer' =>
                                'Secure Score is divided into four main categories: Identity (user accounts, authentication, Conditional Access), Device (endpoint compliance, Defender for Endpoint, Intune), Data (classification, sensitivity labels, DLP policies), and Apps (Defender for Office 365, Exchange Online Protection, Teams, SharePoint).',
                        ],
                        [
                            'question' => 'Can Secure Score detect actual threats?',
                            'answer' =>
                                'No. Secure Score is a configuration score, not a threat score. It measures how many of Microsoft\'s recommended settings are enabled in your tenant. It does not tell you whether you are currently under attack or compromised. Use it as a configuration hygiene baseline alongside other security monitoring tools.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button
                            onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

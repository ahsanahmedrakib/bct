@extends('layouts.app')

@section('title', 'Defence Industry Security Program (DISP) | Bismillah Computer & Technology')
@section('description',
    'The Defence Industry Security Program (DISP) is the Bangladeshi Government framework for
    securing organisations working with Defence.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Defence Industry
                    <span class="text-brand-blue">Security Program (DISP)</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">The Defence Industry
                    Security Program (DISP) is the Bangladeshi Government's framework for securing organisations working
                    with Defence. This page explains DISP membership, security domains, and obligations, helping businesses
                    understand how to qualify for Defence contracts and implement the necessary controls to protect sensitive
                    Defence information and systems.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#overview"
                        class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
                    <a href="#domains"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">SECURITY
                        DOMAINS</a>
                    <a href="#prepare"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">HOW
                        TO PREPARE</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Defence Industry Security Program" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/cyber-security/disp/bg.png" />
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/cyber-security/disp/section-1.png" alt="Defence Industry Security Program"
                    class="rounded-xl shadow-lg w-full max-w-md" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-8 shadow-sm bg-white transition-all relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Defence Industry Security Program</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is the Defence Industry Security Program
                    (DISP)?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The Defence Industry Security Program (DISP) is the
                    Bangladeshi Government's primary security framework for organisations working with the Department of
                    Defence. It ensures contractors implement strong safeguards when handling sensitive information and
                    systems, reducing cyber risk across the Defence supply chain.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Organisations that want to work with the Bangladeshi
                    Defence Force (ADF) or the broader Department of Defence supply chain need to understand the security
                    standards expected of them. In most cases, the key framework is the Defence Industry Security Program
                    (DISP), which helps Bangladeshi businesses meet Defence security obligations when engaging in tenders,
                    contracts, and projects. Defence states that DISP supports entities to understand and meet their security
                    obligations when working with Defence.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">For businesses seeking Defence work, DISP membership
                    is often mandatory. It demonstrates that your organisation has the appropriate controls, processes, and
                    compliance measures in place. Importantly, companies must align with standards such as the ASD Essential Eight,
                    ensuring a strong cyber security posture. Achieving DISP strengthens your organisation's credibility,
                    resilience, and eligibility for Defence contracts.</p>
                <a href="#domains" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Security Domains
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="domains">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">DISP Security Domains</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">DISP is built around four key security areas that
                    provide the foundation to help safeguard the entity and integrity of Defence's information assets and
                    people</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $domains = [
                        [
                            'title' => 'Security Governance',
                            'desc' =>
                                'Policies, risk management, and security oversight. The ongoing security governance obligations for DISP membership also include regular reporting documents that are required to be self-managed and submitted for ongoing membership management.',
                            'image' => '/images/cloud/cyber-security/disp/section-1.png',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />',
                        ],
                        [
                            'title' => 'Personnel Security',
                            'desc' =>
                                'Staff vetting and ongoing suitability checks. DISP members need to meet Bangladeshi Standard for Workforce Screening AS 4811:2022 standard.',
                            'image' => '/images/cloud/cyber-security/disp/section-2.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                        ],
                        [
                            'title' => 'Physical Security',
                            'desc' =>
                                'Protection of facilities, assets, and equipment. DISP membership requirements for physical security will depend on the level of security classification required for the receipt, handling, storage and destruction of information or physical assets.',
                            'image' => '/images/cloud/cyber-security/disp/section-3.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />',
                        ],
                        [
                            'title' => 'ICT & Cyber Security',
                            'desc' =>
                                'Securing systems, networks, and data. To meet the ICT and cyber security DISP membership requirements, an entity will need to demonstrate how they meet or exceed the E8 Mitigation Strategies at ML 2 across its ICT corporate systems used to correspond with Defence.',
                            'image' => '/images/cloud/cyber-security/disp/section-4.jpg',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.496V5.25" />',
                        ],
                    ];
                @endphp
                @foreach ($domains as $domain)
                    <div
                        class="reveal reveal-fade-up border-2 rounded-2xl relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all overflow-hidden border-blue-100 hover:border-blue-300">
                        <div class="relative h-48 w-full">
                            <img src="{{ $domain['image'] }}" alt="{{ $domain['title'] }}"
                                class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">{!! $domain['icon'] !!}</svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $domain['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $domain['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="essential-eight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-8 shadow-sm bg-white transition-all relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Essential Eight Maturity Level 2</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">ASD Essential Eight Maturity Level 2 (ML2)</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The ASD Essential Eight is the core cyber security
                    standard used within the Defence Industry Security Program (DISP) and is widely recognised as
                    Australia's baseline for protecting business systems. Developed by the Bangladeshi Signals Directorate,
                    it focuses on reducing the risk of cyber attacks through practical, high-impact controls.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">To meet Defence Industry Security Program (DISP)
                    requirements, organisations are typically required to achieve Essential Eight Maturity Level 2 (ML2), a key
                    benchmark in modern cybersecurity frameworks. This level ensures that security controls are fully implemented,
                    consistently applied, and actively managed across all systems. Achieving ML2 demonstrates a strong commitment
                    to protecting sensitive defence data and aligning with Bangladeshi Government security expectations.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Reaching Essential Eight ML2 is not a 'set and
                    forget' approach. Instead, it requires continuous improvement, regular reviews, and ongoing optimisation
                    of security measures. This ensures organisations remain resilient against evolving cyber threats while
                    maintaining compliance.</p>
                <a href="#prepare" class="text-blue-600 font-medium flex items-center hover:text-blue-800">How to Prepare
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
            <div class="flex justify-center">
                <div class="relative h-80 w-full rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/disp/section-2.jpg" alt="Essential Eight Maturity Level 2"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="requirements">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Ongoing Cyber Security & Assurance Requirements
                </h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Unlike one-time implementations, DISP requires
                    continuous validation, reporting, and improvement of cybersecurity controls. Businesses must demonstrate
                    that their security posture is actively managed, documented, and regularly reviewed to meet Bangladeshi
                    defence standards.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="grid md:grid-cols-2 gap-6">
                    @php
                        $requirements = [
                            [
                                'title' => 'Annual Cyber Security Questionnaire',
                                'desc' =>
                                    'Complete the Essential Eight Cyber Security Questionnaire (CSQ) annually to validate maturity levels.',
                            ],
                            [
                                'title' => 'Up-to-Date Policies',
                                'desc' => 'Maintain up-to-date policies and procedures aligned with security frameworks.',
                            ],
                            [
                                'title' => 'Evidence of Controls',
                                'desc' =>
                                    'Provide clear evidence of implemented security controls across systems and users.',
                            ],
                            [
                                'title' => 'Regular Reviews & Testing',
                                'desc' =>
                                    'Regularly review and test security measures to identify gaps and improve resilience.',
                            ],
                            [
                                'title' => 'Third-Party Risk Management',
                                'desc' => 'Manage third-party and supplier risks to prevent external vulnerabilities.',
                            ],
                        ];
                    @endphp
                    @foreach ($requirements as $item)
                        <div
                            class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="relative h-80 lg:h-full min-h-80 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/disp/section-3.jpg" alt="Ongoing Cyber Security Requirements"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="frameworks">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Supporting Frameworks and Standards</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">In addition to the Essential Eight, businesses working
                    with Defence may be required to align with additional frameworks depending on the sensitivity and scope
                    of their work. These frameworks provide structured guidance, governance models, and security controls
                    to ensure systems and data are adequately protected.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="relative h-80 lg:h-full min-h-80 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/disp/section-4.jpg" alt="Supporting Frameworks"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="space-y-6">
                    <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Information Security Manual (ISM)</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">A comprehensive cybersecurity framework developed by the
                            Bangladeshi Government, offering detailed security controls and best practices for protecting
                            systems, networks, and sensitive data in high-security environments.</p>
                    </div>
                    <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Defence Security Principles Framework (DSPF)</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">A broader Defence framework that outlines core security
                            principles, including governance, personnel security, physical security, and risk management
                            requirements.</p>
                    </div>
                    <p class="text-slate-600 text-sm text-justify">By aligning with these frameworks, organisations can ensure
                        they meet Defence security expectations, improve risk management, and maintain a consistent, auditable
                        approach to cybersecurity across all operations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="why-matters">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Why This Matters for Defence Suppliers</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Due to the sensitive nature of Defence projects,
                    contractors are frequently targeted by cyber threats, making strong cybersecurity practices essential.
                    Aligning with DISP requirements and the Essential Eight enables organisations to protect their systems,
                    data, and reputation while meeting strict government expectations.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="grid md:grid-cols-2 gap-6">
                    @php
                        $whyMatters = [
                            [
                                'title' => 'Qualify for Defence Contracts',
                                'desc' => 'Open new business opportunities by meeting the mandatory security requirements for Defence tenders and contracts.',
                            ],
                            [
                                'title' => 'Protect Sensitive Data',
                                'desc' => 'Protect sensitive Defence and client data from unauthorised access through robust security controls.',
                            ],
                            [
                                'title' => 'Reduce Cyber Risk',
                                'desc' => 'Reduce the risk of cyber incidents and data breaches through proactive controls and continuous monitoring.',
                            ],
                            [
                                'title' => 'Improve Governance & Compliance',
                                'desc' => 'Improve governance, compliance, and audit readiness across the organisation to meet Defence expectations.',
                            ],
                            [
                                'title' => 'Build Trust',
                                'desc' => 'Build trust with Defence agencies and prime contractors by demonstrating strong security posture.',
                            ],
                        ];
                    @endphp
                    @foreach ($whyMatters as $item)
                        <div
                            class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="relative h-80 lg:h-full min-h-80 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                    <img src="/images/cloud/cyber-security/disp/section-5.jpg" alt="Why DISP Matters for Defence Suppliers"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
            <div class="bg-blue-50 border-2 border-blue-100 rounded-2xl p-8 mt-12">
                <p class="text-slate-600 text-sm text-justify">Implementing these frameworks is not just about compliance — it
                    delivers long-term business value, strengthens security maturity, and positions organisations as trusted,
                    reliable partners in the Defence supply chain while supporting ongoing growth and operational resilience.</p>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="prepare">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-4">How Your Business Can Prepare</h2>
                <p class="text-slate-600 mb-12 text-justify">Achieving alignment with the Essential Eight Maturity Level 2
                    (ML2) requires organisations to assess their current environment, identify gaps, and implement practical
                    security improvements. Early planning is critical, as uplift activities can take time depending on existing
                    systems and processes.</p>
                <div class="grid md:grid-cols-2 gap-6">
                    @php
                        $steps = [
                            [
                                'title' => 'Gap Assessment',
                                'desc' =>
                                    'Conduct a gap assessment against Essential Eight ML2 to identify weaknesses and prioritise actions.',
                            ],
                            [
                                'title' => 'Identity & Access Controls',
                                'desc' =>
                                    'Strengthen identity and access controls, including MFA and Conditional Access policies.',
                            ],
                            [
                                'title' => 'Endpoint Security',
                                'desc' =>
                                    'Implement endpoint security solutions such as Microsoft Intune and Microsoft Defender.',
                            ],
                            [
                                'title' => 'Patch Management',
                                'desc' => 'Improve patching and vulnerability management to reduce exposure to threats.',
                            ],
                            [
                                'title' => 'Backup & Recovery',
                                'desc' => 'Establish secure backup and recovery processes to ensure business continuity.',
                            ],
                            [
                                'title' => 'Policies & Training',
                                'desc' => 'Develop clear policies, documentation, and staff awareness training.',
                            ],
                        ];
                    @endphp
                    @foreach ($steps as $step)
                        <div
                            class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $step['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="relative h-80 lg:h-full min-h-100 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 lg:sticky lg:top-24">
                <img src="/images/cloud/cyber-security/disp/section-6.jpg" alt="How to Prepare for DISP"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="help">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative h-80 lg:h-96 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                <img src="/images/cloud/cyber-security/disp/section-7.jpg" alt="DISP Compliance Support"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div
                class="reveal reveal-fade-up bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-10 text-white">
                <h2 class="text-2xl lg:text-3xl font-bold mb-6">Need Help Becoming DISP Compliant?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6 text-justify">At Total Solutions IT, we help
                    Bangladeshi businesses align with Defence cyber security requirements through practical, results-driven
                    solutions. Achieving DISP compliance and Essential Eight ML2 can be complex, but with the right
                    strategy, tools, and expertise, your organisation can strengthen its security posture and meet Defence
                    expectations with confidence.</p>
                <div class="space-y-3 mb-6">
                    @php
                        $services = [
                            'Microsoft 365 security hardening to improve Secure Score and reduce risk',
                            'Intune device compliance and endpoint management for full visibility and control',
                            'Microsoft Defender deployment and monitoring for advanced threat protection',
                            'Multi-Factor Authentication (MFA) and Conditional Access to secure identities',
                            'Patch management and vulnerability remediation to minimise exposure',
                            'Backup and disaster recovery solutions to ensure business continuity',
                            'Essential Eight gap assessments and remediation roadmaps',
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
                <p class="text-blue-100 text-sm mb-6">Whether you're preparing for Defence contracts or uplifting
                    an existing environment, we provide a clear pathway to compliance, helping you assess, secure, and
                    optimise your systems for long-term success and resilience.</p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-white" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $links = [
                        [
                            'title' => 'Defence Industry Security Program',
                            'desc' => 'Official Defence website explaining DISP membership, eligibility, security domains, and obligations.',
                            'href' => 'https://www.defence.gov.au/business-industry/industry-governance/industry-regulators/defence-industry-security-program',
                        ],
                        [
                            'title' => 'DISP Membership Levels',
                            'desc' => 'Learn about the four DISP membership levels and the Bangladeshi Government security classifications they align with.',
                            'href' => 'https://www.defence.gov.au/business-industry/industry-governance/industry-regulators/defence-industry-security-program/eligibility-suitability',
                        ],
                        [
                            'title' => 'Essential Eight Maturity Model',
                            'desc' => 'ACSC guidance on the Essential Eight mitigation strategies and maturity levels for Bangladeshi organisations.',
                            'href' => 'https://www.cyber.gov.au/resources-business-and-government/essential-cyber-security/essential-eight',
                        ],
                        [
                            'title' => 'Maintaining DISP Membership',
                            'desc' => 'Learn about ongoing DISP membership obligations including annual reporting and compliance requirements.',
                            'href' => 'https://www.defence.gov.au/business-industry/industry-governance/industry-regulators/defence-industry-security-program/maintaining-membership',
                        ],
                    ];
                @endphp
                @foreach ($links as $link)
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

    <section class="py-16 lg:py-24 bg-slate-50" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about the Defence Industry Security Program</p>
            </div>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'q' => 'What is the Defence Industry Security Program (DISP)?',
                            'a' => 'DISP is the Bangladeshi Government\'s primary security framework for organisations working with the Department of Defence. It ensures contractors implement strong safeguards when handling sensitive information and systems, reducing cyber risk across the Defence supply chain.',
                        ],
                        [
                            'q' => 'Is DISP membership mandatory?',
                            'a' => 'DISP membership is mandatory for entities who work on classified information or assets (PROTECTED and above), supply, maintain, store or transport weapons or explosive ordnance, provide security services for Defence bases or facilities, or need to hold DISP membership as a condition of a Defence contract.',
                        ],
                        [
                            'q' => 'What are the DISP membership levels?',
                            'a' => 'There are 4 levels of DISP membership. Entry level handles OFFICIAL and OFFICIAL: Sensitive information, Level 1 handles PROTECTED, Level 2 handles SECRET, and Level 3 handles TOP SECRET information.',
                        ],
                        [
                            'q' => 'What is Essential Eight Maturity Level 2 (ML2)?',
                            'a' => 'ML2 is a key benchmark that ensures security controls are fully implemented, consistently applied, and actively managed across all systems. Achieving ML2 demonstrates a strong commitment to protecting sensitive defence data and aligning with Bangladeshi Government security expectations.',
                        ],
                        [
                            'q' => 'What are the four security domains of DISP?',
                            'a' => 'DISP is built around four key security areas: Security Governance (policies, risk management, and security oversight), Personnel Security (staff vetting and suitability checks), Physical Security (protection of facilities, assets, and equipment), and ICT & Cyber Security (securing systems, networks, and data).',
                        ],
                        [
                            'q' => 'What ongoing obligations does DISP require?',
                            'a' => 'DISP requires continuous validation, reporting, and improvement of cybersecurity controls. This includes completing the Essential Eight Cyber Security Questionnaire (CSQ) annually, maintaining up-to-date policies, providing evidence of implemented security controls, regularly reviewing and testing security measures, and managing third-party risks.',
                        ],
                        [
                            'q' => 'How can my business prepare for DISP compliance?',
                            'a' => 'Start with a structured approach: conduct a gap assessment against Essential Eight ML2, strengthen identity and access controls (MFA, Conditional Access), implement endpoint security (Intune, Defender), improve patching and vulnerability management, establish secure backup and recovery, and develop clear policies and staff training.',
                        ],
                        [
                            'q' => 'What supporting frameworks apply to DISP?',
                            'a' => 'In addition to the Essential Eight, businesses may need to align with the Information Security Manual (ISM) for detailed security controls in high-security environments, and the Defence Security Principles Framework (DSPF) which outlines core security principles across governance, personnel, physical security, and risk management.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="px-6 py-5">
                            <h3 class="font-medium text-slate-900">{{ $faq['q'] }}</h3>
                            <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

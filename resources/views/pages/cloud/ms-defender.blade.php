@extends('layouts.app')

@section('title', 'Microsoft Defender | Bismillah Computer & Technology')
@section('description',
    'Advanced threat protection for endpoints, email, and cloud applications with Microsoft
    Defender.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft
                    Defender
                    <span class="text-blue-600 block mt-2">for Business</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Defender
                    is a comprehensive security solution built into Windows, designed to protect your devices from a wide
                    range of cyber threats. It includes robust antivirus protection, real-time threat detection, and a
                    firewall to safeguard your system against malware, viruses, and ransomware.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Defender" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/defender/defender.png" />
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

    {{-- Overview Section --}}
    <section class="py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/defender/section-1.jpg" alt="Microsoft Defender for Business"
                    class="rounded-xl shadow-lg w-full" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Endpoint Security for SMBs</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft Defender for Business?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">
                    Microsoft Defender for Business is an endpoint security solution based on Microsoft Defender for Endpoint. It is designed for small and medium-sized businesses up to 300 users, offering protection from ransomware, malware, phishing, and other threats on devices.
                </p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">
                    It also offers performance monitoring and privacy controls to ensure safe browsing and system health. Regular updates and seamless integration with Windows make Microsoft Defender a convenient choice for maintaining security without additional software. Its integration with Microsoft 365 provides enhanced security features for enterprise environments, making it a versatile solution for both personal and professional use.
                </p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">
                    Defender for Business is available as a standalone subscription or as part of Microsoft 365 Business Premium. It supports Windows, macOS, iOS, and Android devices, providing enterprise-grade security across your entire device estate from a single, simplified management console.
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

    {{-- What Is Section --}}
    <section class="py-24 bg-white" id="what-is">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 transition-all relative h-full order-2 lg:order-1">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-6">What is Microsoft Defender for Business, and could it suit your Business?</h2>
                <div class="space-y-6">
                    <p class="text-slate-600 text-sm leading-relaxed text-justify">
                        Small and Medium Enterprises (SMEs) form the backbone of the Bangladeshi economy and play a crucial role in the supply chain. However, in today's digital era, this significance also brings challenges. SMEs are increasingly targeted by malicious actors due to a fiercely competitive market and limited budgets for security measures, unlike larger corporations.
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed text-justify">
                        Over recent years, SMEs have embraced cloud technology for their operations, which has enhanced flexibility and mobility, positively impacting our daily lives. Yet, this shift has altered the risk landscape, emphasizing the importance of Endpoints and the necessity for a Zero Trust Architecture. The traditional notion of 'trust, but verify' is outdated, especially in light of current global events.
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed text-justify">
                        As Endpoints gain prominence and attackers become more sophisticated, conventional Endpoint protection methods like antivirus software fall short. SMEs often struggle to afford Enterprise-grade features such as Endpoint Detection and Response (EDR) and Threat and Vulnerability Management. However, the introduction of Microsoft Defender for Business aims to address this issue, offering SMEs a more accessible solution.
                    </p>
                </div>
            </div>
            <div class="flex justify-center order-1 lg:order-2">
                <img src="/images/cloud/microsoft-solutions/defender/section-2.jpg" alt="Microsoft Defender for Business"
                    class="rounded-xl shadow-lg w-full" loading="lazy" />
            </div>
        </div>
    </section>

    {{-- Key Features Section --}}
    <section class="py-24 bg-slate-50" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Key Features of Microsoft Defender for Business</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Comprehensive endpoint security with AI-powered threat protection</p>
            </div>
            @php
                $keyFeatures = [
                    [
                        'title' => 'Next-Generation Protection',
                        'desc' => 'Advanced antivirus and anti-malware protection using cloud-powered intelligence, machine learning, and behavioral heuristics to detect and block new and emerging threats in real time.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                    ],
                    [
                        'title' => 'Endpoint Detection & Response',
                        'desc' => 'AI-powered EDR continuously monitors endpoint activities and generates alerts for suspicious behavior, enabling you to detect, investigate, and respond to advanced threats.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />',
                    ],
                    [
                        'title' => 'Automated Investigation & Remediation',
                        'desc' => 'Automated investigation and remediation capabilities automatically resolve most cyberthreats with minimal IT effort, reducing response time from hours to minutes.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />',
                    ],
                    [
                        'title' => 'Threat & Vulnerability Management',
                        'desc' => 'Discover, prioritize, and remediate software vulnerabilities and misconfigurations that pose the most urgent and highest risk to your business.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />',
                    ],
                    [
                        'title' => 'Attack Surface Reduction',
                        'desc' => 'Block malicious macros, scripts, USB exploits, and other risky actions with built-in attack surface reduction rules that minimize vulnerabilities in devices and applications.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285zM12 15.75h.007v.008H12v-.008z" />',
                    ],
                    [
                        'title' => 'Ransomware Protection',
                        'desc' => 'Built-in ransomware mitigation with controlled folder access, behavior monitoring, and automatic attack disruption to stop ransomware before it encrypts your data.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                    ],
                    [
                        'title' => 'Cross-Platform Support',
                        'desc' => 'Protect Windows, macOS, iOS, and Android devices from a single management console, ensuring consistent security across your entire device estate.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                    ],
                    [
                        'title' => 'Server Protection',
                        'desc' => 'Server security available as an add-on, providing simplified onboarding and management with security policies activated out of the box to quickly secure servers.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                    ],
                    [
                        'title' => 'Monthly Security Summaries',
                        'desc' => 'Receive monthly security summary reports to track your protection status, including threats blocked, device health, and pending vulnerabilities.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($keyFeatures as $feature)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-4 text-brand-active">
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

    {{-- Capabilities Section --}}
    <section class="py-24 bg-white" id="capabilities">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Security Capabilities</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Enterprise-grade protection designed for small and medium-sized businesses</p>
            </div>
            @php
                $capabilities = [
                    [
                        'title' => 'Endpoint Protection',
                        'desc' => 'Defender for Business offers real-time protection against viruses, malware, ransomware, and other threats across all endpoints within the organization. It utilizes machine learning models and behavioral analytics to detect and block malicious activities.',
                    ],
                    [
                        'title' => 'Advanced Threat Protection',
                        'desc' => 'The solution includes advanced threat protection capabilities such as endpoint detection and response (EDR), which allows businesses to detect, investigate, and respond to advanced threats and breaches.',
                    ],
                    [
                        'title' => 'Endpoint Detection and Response (EDR)',
                        'desc' => 'Defender for Business provides EDR capabilities to enable organizations to investigate and respond to advanced threats and security incidents across their endpoints. It allows security teams to analyze endpoint activities, conduct forensic investigations, and take appropriate response actions.',
                    ],
                    [
                        'title' => 'Threat & Vulnerability Management',
                        'desc' => 'Proactively discover, prioritize, and remediate vulnerabilities and misconfigurations early. Get a clear view of your cyberattack surface with actionable security recommendations to strengthen your defenses.',
                    ],
                    [
                        'title' => 'Attack Surface Reduction',
                        'desc' => 'Minimize vulnerabilities with built-in capabilities including ransomware mitigation, application control, web protection, network protection, network firewall, and attack surface reduction rules.',
                    ],
                    [
                        'title' => 'Centralized Management',
                        'desc' => 'Single dashboard in Microsoft 365 Defender to monitor, act, and report across all your endpoints. Wizard-based onboarding and simplified management experience for IT administrators.',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($capabilities as $capability)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $capability['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $capability['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- NIST Framework Section --}}
    <section class="py-24 bg-slate-50" id="nist">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">NIST Cyber Security Framework Alignment</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Defender for Business encompasses functionality across all five key functions outlined in the NIST Cyber Security Framework</p>
            </div>
            @php
                $nistFramework = [
                    [
                        'title' => 'Identify',
                        'desc' => 'Threat & Vulnerability Management provides asset visibility, intelligent assessments, and built-in remediation tools for various platforms, including Windows, macOS, Linux, Android, iOS, and network devices. It prioritizes vulnerabilities on critical assets and offers security recommendations for risk mitigation.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />',
                    ],
                    [
                        'title' => 'Protect',
                        'desc' => 'Attack Surface Reduction helps reduce the attack surface by constraining certain software behaviors that could compromise devices or networks. Next Generation Protection complements the built-in Microsoft Defender Antivirus with additional functionality such as behavior-based, heuristic, and real-time AV protection.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                    ],
                    [
                        'title' => 'Detect',
                        'desc' => 'Endpoint Detection & Response (EDR) offers advanced attack detection capabilities in near real-time. Security analysts can efficiently prioritize alerts, gain visibility into breach scopes, and take response actions to mitigate threats.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 18a6 6 0 100-12 6 6 0 000 12z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 14a2 2 0 100-4 2 2 0 000 4z" /><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12a8.25 8.25 0 0116.5 0" />',
                    ],
                    [
                        'title' => 'Respond',
                        'desc' => 'Auto Investigation & Remediation (AIR) utilizes various inspection algorithms and processes akin to those used by security analysts. AIR examines alerts and promptly takes action to resolve breaches, thereby reducing response times and minimizing damage.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />',
                    ],
                    [
                        'title' => 'Recover',
                        'desc' => 'Defender for Business supports recovery through automated remediation capabilities that restore affected systems and files. The solution helps organizations quickly return to a secure state after a security incident.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($nistFramework as $item)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $item['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- What's Included Section --}}
    <section class="py-24 bg-white" id="included">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">What Does Defender for Business Include?</h2>
                <p class="mt-4 text-slate-600">Defender for Business is a collection of capabilities bundled into a single Managed Security Services offering</p>
            </div>
            @php
                $includedFeatures = [
                    ['feature' => 'Centralized management', 'included' => true],
                    ['feature' => 'Simplified Firewall and Antivirus configuration for Windows', 'included' => true],
                    ['feature' => 'Threat and Vulnerability Management', 'included' => true],
                    ['feature' => 'Attack Surface Reduction', 'included' => true],
                    ['feature' => 'Next-Gen Protection', 'included' => true],
                    ['feature' => 'Endpoint Detection and Response', 'included' => true],
                    ['feature' => 'Automated Investigation and Remediation', 'included' => true],
                    ['feature' => 'Threat Analytics', 'included' => true],
                    ['feature' => 'Cross platform support for Windows, MacOS, iOS, and Android clients', 'included' => true],
                    ['feature' => 'Windows server and Linux server', 'included' => 'Add-on'],
                    ['feature' => 'Partner APIs', 'included' => true],
                    ['feature' => 'Microsoft 365 Lighthouse for viewing security incidents across customers', 'included' => true],
                    ['feature' => 'Threat Hunting and 6-months data retention', 'included' => false],
                    ['feature' => 'Microsoft Threat Experts', 'included' => false],
                ];
            @endphp
            <div class="reveal reveal-fade-up bg-white border-2 border-blue-100 rounded-xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                <div class="grid grid-cols-2 gap-px bg-blue-100">
                    <div class="bg-brand-blue text-white font-bold text-sm px-6 py-3">Feature</div>
                    <div class="bg-brand-blue text-white font-bold text-sm px-6 py-3 text-center">Defender for Business</div>
                </div>
                @foreach ($includedFeatures as $item)
                    <div class="grid grid-cols-2 gap-px {{ $loop->even ? 'bg-blue-50/50' : 'bg-white' }}">
                        <div class="px-6 py-3 text-sm text-slate-700">{{ $item['feature'] }}</div>
                        <div class="px-6 py-3 flex items-center justify-center">
                            @if ($item['included'] === true)
                                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            @elseif ($item['included'] === false)
                                <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            @else
                                <span class="text-xs text-slate-600">{{ $item['included'] }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Feature Comparison Table --}}
    <section class="py-24 bg-slate-50" id="comparison">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Feature Comparison</h2>
                <p class="mt-4 text-slate-600">How Defender for Business compares to Defender for Endpoint P1 and P2</p>
            </div>
            @php
                $featureTable = [
                    ['feature' => 'Threat & vulnerability management', 'db' => true, 'p1' => false, 'p2' => true],
                    ['feature' => 'Attack surface reduction capabilities', 'db' => true, 'p1' => true, 'p2' => true],
                    ['feature' => 'Next-generation protection', 'db' => true, 'p1' => true, 'p2' => true],
                    ['feature' => 'Endpoint detection and response', 'db' => true, 'p1' => false, 'p2' => true],
                    ['feature' => 'Automated investigation and response', 'db' => true, 'p1' => false, 'p2' => true],
                    ['feature' => 'Threat hunting and six months of data retention', 'db' => false, 'p1' => false, 'p2' => true],
                    ['feature' => 'Device discovery', 'db' => true, 'p1' => false, 'p2' => true],
                    ['feature' => 'Custom detections', 'db' => false, 'p1' => false, 'p2' => true],
                    ['feature' => 'Sandbox', 'db' => false, 'p1' => false, 'p2' => true],
                    ['feature' => 'Device timeline events', 'db' => false, 'p1' => false, 'p2' => true],
                    ['feature' => 'Threat analytics', 'db' => 'Optimized for SMBs', 'p1' => false, 'p2' => true],
                    ['feature' => 'Cross-platform support (Windows, macOS, iOS, Android)', 'db' => true, 'p1' => 'Limited', 'p2' => 'Limited'],
                    ['feature' => 'Server support', 'db' => 'Add-on', 'p1' => false, 'p2' => true],
                    ['feature' => 'Microsoft Threat Experts', 'db' => false, 'p1' => false, 'p2' => true],
                    ['feature' => 'Partner APIs', 'db' => true, 'p1' => true, 'p2' => true],
                    ['feature' => 'Microsoft 365 Lighthouse integration', 'db' => true, 'p1' => true, 'p2' => true],
                    ['feature' => 'Stream events to Sentinel', 'db' => true, 'p1' => '?', 'p2' => true],
                ];
            @endphp
            <div class="reveal reveal-fade-up bg-white border-2 border-blue-100 rounded-xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-x-auto">
                <table class="w-full min-w-[800px]">
                    <thead>
                        <tr class="bg-brand-blue text-white">
                            <th class="text-left text-sm font-bold px-6 py-3">Feature</th>
                            <th class="text-center text-sm font-bold px-4 py-3">Defender for Business</th>
                            <th class="text-center text-sm font-bold px-4 py-3">Endpoint P1</th>
                            <th class="text-center text-sm font-bold px-4 py-3">Endpoint P2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($featureTable as $row)
                            <tr class="{{ $loop->even ? 'bg-blue-50/50' : 'bg-white' }}">
                                <td class="px-6 py-3 text-sm text-slate-700">{{ $row['feature'] }}</td>
                                <td class="px-4 py-3 text-center">
                                    @if ($row['db'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    @elseif ($row['db'] === false)
                                        <svg class="w-5 h-5 text-red-400 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    @else
                                        <span class="text-xs text-slate-600">{{ $row['db'] }}</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-center">
                                    @if ($row['p1'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    @elseif ($row['p1'] === false)
                                        <svg class="w-5 h-5 text-red-400 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    @else
                                        <span class="text-xs text-slate-600">{{ $row['p1'] }}</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-center">
                                    @if ($row['p2'] === true)
                                        <svg class="w-5 h-5 text-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    @elseif ($row['p2'] === false)
                                        <svg class="w-5 h-5 text-red-400 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    @else
                                        <span class="text-xs text-slate-600">{{ $row['p2'] }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Useful Links Section --}}
    <section class="py-16 bg-white" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Useful Links</h2>
            </div>
            @php
                $usefulLinks = [
                    [
                        'title' => 'Microsoft Defender for Business Overview',
                        'description' => 'Official Microsoft documentation explaining what Defender for Business is, its features, capabilities, and how it compares to other Defender plans for enterprise environments.',
                        'href' => 'https://learn.microsoft.com/en-us/defender-business/mdb-overview',
                    ],
                    [
                        'title' => 'Microsoft Defender for Business Pricing',
                        'description' => 'View pricing and plan options for Defender for Business. Available as a standalone subscription at $3.00/user/month or included with Microsoft 365 Business Premium.',
                        'href' => 'https://www.microsoft.com/en-us/security/business/endpoint-security/microsoft-defender-business',
                    ],
                    [
                        'title' => 'Defender for Business Deployment Guide',
                        'description' => 'Step-by-step deployment guide for Microsoft Defender for Business, including onboarding devices, configuring policies, and setting up security management.',
                        'href' => 'https://learn.microsoft.com/en-us/defender-business/mdb-overview',
                    ],
                    [
                        'title' => "What's New in Defender for Business",
                        'description' => 'Stay up to date with the latest features, improvements, and enhancements to Microsoft Defender for Business, including new capabilities and release notes.',
                        'href' => 'https://learn.microsoft.com/en-us/defender-business/mdb-whats-new',
                    ],
                ];
            @endphp
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($usefulLinks as $link)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $link['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                        <a href="{{ $link['href'] }}" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Benefits Section --}}
    <section class="py-24 bg-slate-50" id="benefits">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Benefits of Using Microsoft Defender for Business</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Why businesses choose Defender for enterprise-grade endpoint security</p>
            </div>
            @php
                $benefits = [
                    [
                        'title' => 'Enterprise-Grade Security for SMBs',
                        'desc' => 'Access the same powerful endpoint security capabilities used by Fortune 500 companies, optimized and priced for small and medium-sized businesses with up to 300 employees.',
                    ],
                    [
                        'title' => 'Cost-Effective Protection',
                        'desc' => 'At just $3.00 per user/month, Defender for Business provides comprehensive device security including next-gen antivirus, EDR, vulnerability management, and automated remediation.',
                    ],
                    [
                        'title' => 'Reduced IT Overhead',
                        'desc' => 'Automated investigation and remediation capabilities resolve most threats automatically, reducing the burden on IT staff and eliminating the need for a dedicated security operations center.',
                    ],
                    [
                        'title' => 'Proactive Threat Prevention',
                        'desc' => 'Move beyond reactive antivirus to proactive threat hunting with vulnerability management, attack surface reduction rules, and behavioral analysis that catches threats before they execute.',
                    ],
                    [
                        'title' => 'Unified Security Console',
                        'desc' => 'Manage all endpoint security from a single, simplified dashboard in Microsoft 365 Defender, providing complete visibility across Windows, macOS, iOS, and Android devices.',
                    ],
                    [
                        'title' => 'Seamless Microsoft 365 Integration',
                        'desc' => 'Integrates with Microsoft Intune for device compliance, Conditional Access policies, and the wider Microsoft 365 security ecosystem for comprehensive protection.',
                    ],
                ];
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($benefits as $benefit)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $benefit['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Limitations Section --}}
    <section class="py-24 bg-white" id="limitations">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Defender for Business Limitations</h2>
                <p class="mt-4 text-slate-600">While Defender for Business offers robust endpoint protection, certain advanced capabilities available in Defender for Endpoint P2 may not be included</p>
            </div>
            @php
                $limitations = [
                    'No Advanced Hunting or threat hunting capabilities',
                    'No Threat Experts services',
                    'No 6-months data retention (30 days advanced hunting only)',
                    'No device timeline events',
                    'Threat analytics optimized for small and medium-size business (not full enterprise features)',
                    'No sandbox feature',
                    'Limited in hunting and file/remediation capabilities',
                    'No custom device groups support',
                ];
            @endphp
            <div class="reveal reveal-fade-up bg-white border-2 border-blue-100 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                <ul class="space-y-3">
                    @foreach ($limitations as $limitation)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span class="text-slate-600 text-sm">{{ $limitation }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-24 bg-slate-50" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Frequently Asked Questions</h2>
                <p class="mt-4 text-slate-600">Common questions about Microsoft Defender for Business</p>
            </div>
            @php
                $faqs = [
                    [
                        'question' => 'What is Microsoft Defender for Business?',
                        'answer' => 'Defender for Business is an AI-powered, enterprise-grade device security solution that helps businesses with up to 300 employees protect against ransomware and other cyberthreats in an easy-to-use and cost-effective package.',
                    ],
                    [
                        'question' => 'How does Defender for Business differ from standard Microsoft Defender Antivirus?',
                        'answer' => 'Microsoft Defender Antivirus provides next-generation protection built into Windows devices, helping protect them from viruses, malware, and potentially unwanted applications. Defender for Business adds enterprise-grade capabilities including EDR, automated investigation and remediation, vulnerability management, and centralized management across multiple device platforms.',
                    ],
                    [
                        'question' => 'What devices and operating systems are supported?',
                        'answer' => 'Defender for Business supports Windows 10/11, macOS (three most current releases), iOS, and Android devices. You can protect up to 300 users with up to five devices per user, with no minimum device requirement.',
                    ],
                    [
                        'question' => 'Is Defender for Business included in Microsoft 365 Business Premium?',
                        'answer' => 'Yes. Microsoft 365 Business Premium includes Defender for Business, along with Defender for Office 365 Plan 1 for email protection, Azure AD Premium Plan 1, and Microsoft Intune for device management.',
                    ],
                    [
                        'question' => 'Does Defender for Business protect against ransomware?',
                        'answer' => 'Yes. Defender for Business includes multiple layers of ransomware protection including next-generation antivirus, behavior monitoring, controlled folder access, and automatic attack disruption to stop ransomware before it encrypts your data.',
                    ],
                    [
                        'question' => 'Can I add server protection to Defender for Business?',
                        'answer' => 'Yes. Defender for Business servers is an add-on that provides security for Windows and Linux servers with simplified onboarding, out-of-the-box security policies, and threat and vulnerability management.',
                    ],
                    [
                        'question' => 'How do I onboard devices to Defender for Business?',
                        'answer' => 'Defender for Business supports multiple onboarding methods including Microsoft Intune/Endpoint Manager, Local Script, Group Policy, and VDI Onboarding script. The wizard-based setup guides you through the process.',
                    ],
                    [
                        'question' => 'What are the differences between Defender for Business and Defender for Endpoint P2?',
                        'answer' => "Defender for Business includes most features of P2 but lacks Advanced Hunting, Threat Experts, 6-month data retention, device timeline events, sandbox, and custom detections. It's optimized for SMBs with simplified management.",
                    ],
                ];
            @endphp
            <div class="space-y-4">
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-5">
                            <p class="text-sm text-slate-600 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

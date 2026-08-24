@extends('layouts.app')

@section('title', 'EndPoint Security | Bismillah Computer & Technology')
@section('description', 'Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">
        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        EndPoint Security
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches. This protection is vital for securing individual devices and the broader network they connect to.</p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="#why-need" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                            WHY IS IT NEEDED
                        </a>
                        <a href="#defender-for-business" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                            DEFENDER FOR BUSINESS
                        </a>
                        <a href="#sentinel-one" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                            SENTINEL ONE
                        </a>
                        <a href="#bit-defender" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                            BIT DEFENDER
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/cyber-security/cloud-and-network/hero.png" alt="EndPoint Security Hero" height="400" width="600" class="rounded-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- ==================== SECTION 1: Endpoint Security Overview ==================== --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Left Column: Text Overview Card --}}
                <div class="order-2 lg:order-1">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            <p class="text-justify">
                                <strong class="text-blue-600 font-medium">
                                    Endpoint protection
                                </strong>
                                plays a critical role in
                                <strong class="text-blue-600 font-medium">
                                    safeguarding an organization's digital assets
                                </strong>
                                . In an increasingly connected world, every device connected
                                to your network is a potential entry point for cyber threats.
                                Implementing robust endpoint security ensures that all
                                laptops, desktops, mobile devices, and servers are protected
                                against malicious activities.
                            </p>

                            <p class="text-justify">
                                <strong class="text-blue-600 font-medium">
                                    Endpoint protection
                                </strong>
                                encompasses a suite of security tools designed to defend
                                enterprise networks against cyber threats. It focuses on
                                securing individual endpoints—such as workstations, laptops,
                                mobile devices, and servers—that connect to the corporate
                                network. By deploying
                                <strong class="text-blue-600 font-medium">
                                    advanced threat detection, antivirus software, data
                                    encryption, and access controls
                                </strong>
                                , endpoint security prevents unauthorized access and mitigates
                                security risks.
                            </p>

                            <p class="text-justify">
                                At
                                <strong class="text-blue-600 font-medium">Cyber</strong>,
                                our Endpoint Security services are designed to protect every
                                endpoint across your organization. We deliver
                                <strong class="text-blue-600 font-medium">
                                    comprehensive solutions that combine proactive threat
                                    detection, real-time monitoring, and automated response
                                    capabilities
                                </strong>
                                to keep your business safe from ransomware, malware, and
                                sophisticated cyberattacks.
                            </p>

                            <p class="text-justify">
                                Our
                                <strong class="text-blue-600 font-medium">
                                    Endpoint Security Solutions
                                </strong>
                                provide comprehensive coverage against malware, phishing,
                                ransomware, and zero-day exploits. With 24/7 monitoring,
                                automated patch management, and
                                <strong class="text-blue-600 font-medium">
                                    endpoint detection and response (EDR)
                                </strong>
                                , we ensure that your business endpoints remain secure and
                                resilient against evolving cyber threats.
                            </p>

                            <p class="text-justify">
                                We offer tailored solutions that meet the
                                <strong class="text-blue-600 font-medium">
                                    specific needs of your business
                                </strong>
                                , ensuring that your devices and data are protected without
                                compromising productivity.
                                <strong class="text-blue-600 font-medium">
                                    Partner with us to strengthen your endpoint defense and
                                    maintain complete control over your security posture.
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Computer Dashboard Illustration --}}
                <div class="order-1 lg:order-2 flex justify-center items-center">
                    <div class="relative w-full overflow-hidden">
                        <img src="/images/it-support/cyber-security/endpoint-security/section-1.webp" alt="Endpoint Protection Dashboard on Computer Screen" height="400" width="500" class="object-cover rounded-xl" />
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 2: Why do you need EndPoint Protection? ==================== --}}
        <section class="py-10 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="why-need">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Left Column: Phone Lock Key Illustration --}}
                <div class="flex justify-center items-center">
                    <div class="relative w-full max-w-sm aspect-square">
                        <img src="/images/it-support/cyber-security/endpoint-security/section-2.png" alt="Mobile Security and Lock Key Illustration" height="400" width="400" class="object-cover" />
                    </div>
                </div>

                {{-- Right Column: Why Need List Card --}}
                <div>
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-6">
                            Why do you need EndPoint Protection?
                        </h2>

                        <div class="space-y-3">
                            @php
                                $whyNeedItems = [
                                    [
                                        'title' => 'Preventing Unauthorized Access',
                                        'description' => 'Endpoint security helps in preventing unauthorized access to the network and sensitive data by securing each device that connects to the network.',
                                    ],
                                    [
                                        'title' => 'Protecting Against Malware and Cyberattacks',
                                        'description' => 'With the rise of malware, ransomware, and other cyber threats, endpoint security is essential for detecting and blocking these threats before they can compromise the system.',
                                    ],
                                    [
                                        'title' => 'Data Protection',
                                        'description' => 'Endpoints often contain sensitive information. Endpoint security ensures that this data is encrypted and protected from unauthorized access or breaches.',
                                    ],
                                    [
                                        'title' => 'Ensuring Compliance',
                                        'description' => 'Many industries have regulatory requirements for data protection. Endpoint security helps organizations comply with these regulations by providing necessary protections and audit trails.',
                                    ],
                                    [
                                        'title' => 'Maintaining System Integrity',
                                        'description' => 'A compromised endpoint can serve as a gateway for attackers to infiltrate the entire network. Endpoint security helps maintain the integrity of the network by securing each access point.',
                                    ],
                                    [
                                        'title' => 'Preventing Data Loss',
                                        'description' => 'Endpoint security often includes data loss prevention (DLP) features that prevent sensitive data from being transferred outside the organization in an unauthorized manner.',
                                    ],
                                ];
                            @endphp

                            @foreach($whyNeedItems as $index => $item)
                                <div class="faq-item border border-slate-100 rounded-xl bg-slate-50/70 overflow-hidden transition-all">
                                    <button onclick="toggleFaq({{ $index }})" class="w-full flex justify-between items-center px-5 py-3.5 text-left cursor-pointer hover:bg-slate-100/80 transition-colors">
                                        <span class="font-medium text-xs sm:text-sm text-slate-800 flex items-center">
                                            <span class="w-2 h-2 rounded-full bg-blue-500 mr-3 shrink-0"></span>
                                            {{ $item['title'] }}
                                        </span>
                                        <span class="faq-icon text-slate-400 text-xs transition-transform duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                        </span>
                                    </button>
                                    <div class="faq-answer" style="display: none;">
                                        <div class="px-5 pb-3.5 pt-1 text-xs text-slate-600 border-t border-slate-100 bg-white text-justify">
                                            {{ $item['description'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 3: Main Solutions Section Heading ==================== --}}
        <section class="pt-12 pb-6 px-4 text-center">
            <div class="reveal reveal-fade-up">
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                    EndPoint Security Solutions
                </h2>
            </div>
        </section>

        {{-- ==================== SECTION 4: Microsoft Defender for Business ==================== --}}
        <section class="py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="defender-for-business">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Left Column: Solution Card --}}
                <div class="order-2 lg:order-1">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        {{-- Header Icon + Title --}}
                        <div class="flex items-start space-x-3 mb-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0 mt-1">
                                <span class="text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                </span>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">
                                    Microsoft Defender for Business
                                </h3>
                                <h4 class="text-xs sm:text-sm font-semibold text-slate-700 mt-0.5">
                                    Enterprise-grade protection for small- and medium-sized businesses
                                </h4>
                            </div>
                        </div>

                        {{-- Description --}}
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6 text-justify">
                            Microsoft Defender for Business offers enterprise-grade security
                            tailored for small and medium-sized businesses. It provides
                            comprehensive protection against threats, including malware,
                            ransomware, and phishing attacks, empowering businesses to work
                            securely.
                        </p>

                        {{-- Key Features Header --}}
                        <h5 class="font-bold text-slate-900 text-xs sm:text-sm mb-3">
                            Key Features
                        </h5>

                        {{-- Feature Bars --}}
                        @php
                            $defenderFeatures = [
                                'Ransomware Protection',
                                'Automated Investigation and Response',
                                'Threat & Vulnerability Management',
                                'Next-Generation Protection',
                                'Cross-Platform Support',
                                'Integrated Security Controls',
                                'Attack Surface Reduction',
                            ];
                        @endphp
                        <div class="space-y-2 mb-6">
                            @foreach($defenderFeatures as $feature)
                                <div class="bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 text-xs font-medium text-slate-700 flex items-center justify-between">
                                    <span>{{ $feature }}</span>
                                    <span class="text-blue-500 font-bold">&#8250;</span>
                                </div>
                            @endforeach
                        </div>

                        {{-- Action Button --}}
                        <a href="#why-need" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs py-2.5 px-6 rounded-md uppercase tracking-wider transition-colors shadow-sm">
                            LEARN MORE
                        </a>
                    </div>
                </div>

                {{-- Right Column: Microsoft Defender Graphic --}}
                <div class="flex justify-center items-center order-1 lg:order-2">
                    <div class="relative w-56 sm:w-72 aspect-square">
                        <img src="/images/it-support/cyber-security/endpoint-security/defender.png" alt="Microsoft Defender Blue Shield Graphic" height="400" width="400" class="object-cover" />
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 5: Sentinel One ==================== --}}
        <section class="py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="sentinel-one">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Left Column: SentinelOne Logo Graphic --}}
                <div class="flex justify-center items-center">
                    <div class="relative overflow-hidden flex justify-center">
                        <img src="/images/it-support/cyber-security/endpoint-security/sentinel.png" alt="SentinelOne Enterprise AI Security Logo" height="400" width="500" class="object-cover" />
                    </div>
                </div>
                {{-- Right Column: Solution Card --}}
                <div>
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        {{-- Header Icon + Title --}}
                        <div class="flex items-start space-x-3 mb-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-purple-600 shrink-0 mt-1">
                                <span class="text-purple-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M3.27 6.96 12 12.01l8.73-5.05"></path><path d="M12 22.08V12"></path></svg>
                                </span>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">
                                    Sentinel One
                                </h3>
                                <h4 class="text-xs sm:text-sm font-semibold text-slate-700 mt-0.5">
                                    Advanced Enterprise Cyber Security AI Platform
                                </h4>
                            </div>
                        </div>

                        {{-- Description --}}
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6 text-justify">
                            SentinelOne is an autonomous cybersecurity platform that offers
                            real-time threat prevention and response across organization
                            endpoints. It utilizes artificial intelligence to detect,
                            prevent, and respond to cyber attacks in real time across the
                            enterprise.
                        </p>

                        {{-- Key Features Header --}}
                        <h5 class="font-bold text-slate-900 text-xs sm:text-sm mb-3">
                            Key Features
                        </h5>

                        {{-- Feature Bars --}}
                        @php
                            $sentinelFeatures = [
                                'Real-Time Prevention and Protection',
                                'Behavioral AI and Machine Learning',
                                'Automated Threat Response',
                                'Endpoint Detection and Response (EDR)',
                                'Ransomware Rollback',
                                'Cross-Platform Protection',
                                'Visibility and Tracking',
                            ];
                        @endphp
                        <div class="space-y-2 mb-6">
                            @foreach($sentinelFeatures as $feature)
                                <div class="bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 text-xs font-medium text-slate-700 flex items-center justify-between">
                                    <span>{{ $feature }}</span>
                                    <span class="text-purple-500 font-bold">&#8250;</span>
                                </div>
                            @endforeach
                        </div>

                        {{-- Action Button --}}
                        <a href="#why-need" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs py-2.5 px-6 rounded-md uppercase tracking-wider transition-colors shadow-sm">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 6: Bit Defender ==================== --}}
        <section class="py-8 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="bit-defender">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Left Column: Solution Card --}}
                <div class="order-2 lg:order-1">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        {{-- Header Icon + Title --}}
                        <div class="flex items-start space-x-3 mb-4">
                            <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-red-600 shrink-0 mt-1">
                                <span class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                                </span>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">
                                    Bit Defender EndPoint Security
                                </h3>
                                <h4 class="text-xs sm:text-sm font-semibold text-slate-700 mt-0.5">
                                    Global Leader in Cybersecurity
                                </h4>
                            </div>
                        </div>

                        {{-- Description --}}
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6 text-justify">
                            Bitdefender is a world leader in endpoint security, offering
                            advanced cybersecurity solutions to safeguard businesses against
                            modern threats. Its solutions provide multi-layered ransomware
                            protection, behavioral analysis, and threat intelligence to keep
                            your endpoints secure.
                        </p>

                        {{-- Key Features Header --}}
                        <h5 class="font-bold text-slate-900 text-xs sm:text-sm mb-3">
                            Key Features
                        </h5>

                        {{-- Feature Bars --}}
                        @php
                            $bitdefenderFeatures = [
                                'Advanced Threat Defense (ATD)',
                                'Anti-Ransomware Protection',
                                'Behavioral Protection',
                                'Risk Management and Analytics',
                                'Network Threat Prevention',
                                'Endpoint Detection and Response (EDR)',
                                'Centralized Management Console',
                                'Performance Optimization',
                            ];
                        @endphp
                        <div class="space-y-2 mb-6">
                            @foreach($bitdefenderFeatures as $feature)
                                <div class="bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 text-xs font-medium text-slate-700 flex items-center justify-between">
                                    <span>{{ $feature }}</span>
                                    <span class="text-red-500 font-bold">&#8250;</span>
                                </div>
                            @endforeach
                        </div>

                        {{-- Action Button --}}
                        <a href="#why-need" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs py-2.5 px-6 rounded-md uppercase tracking-wider transition-colors shadow-sm">
                            LEARN MORE
                        </a>
                    </div>
                </div>

                {{-- Right Column: Bitdefender Logo Graphic --}}
                <div class="flex justify-center items-center order-1 lg:order-2">
                    <div class="relative overflow-hidden flex justify-center">
                        <img src="/images/it-support/cyber-security/endpoint-security/bitdefender.png" alt="Bitdefender EndPoint Security Logo" height="400" width="400" class="object-cover" />
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('head')
<style>
    .faq-answer {
        display: none;
    }
    .faq-item.active .faq-answer {
        display: block;
    }
    .faq-item.active .faq-icon {
        transform: rotate(45deg);
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleFaq(index) {
        const items = document.querySelectorAll('.faq-item');
        items.forEach(function(item, i) {
            if (i === index) {
                item.classList.toggle('active');
            } else {
                item.classList.remove('active');
            }
        });
    }
</script>
@endpush

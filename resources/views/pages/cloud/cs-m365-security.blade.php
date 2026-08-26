@extends('layouts.app')

@section('title', 'Microsoft 365 Cyber Security | Bismillah Computer & Technology')
@section('description',
    'Comprehensive cybersecurity features built into Microsoft 365 to protect users, devices, email,
    and business data from cyber threats.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft 365
                    <span class="text-brand-blue">Cyber Security</span> Business Protection
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">In today's
                    digital-first world, cybersecurity is no longer optional — it's a necessity. Businesses of all sizes face
                    increasingly sophisticated threats, making robust security solutions critical for safeguarding sensitive
                    data. Microsoft 365 stands out as a comprehensive suite designed to not only enhance productivity but also
                    provide top-tier cybersecurity features.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#overview"
                        class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
                    <a href="#features"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">FEATURES</a>
                    <a href="#approach"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">OUR
                        APPROACH</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft 365 Cyber Security" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/it-support/cyber-security/cloud-and-network/hero.png" />
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
            <div class="flex justify-center h-75">
                <img src="/images/cloud/cyber-security/m365-security/section-1.jpg" alt="Microsoft 365 Cyber Security"
                    class="object-cover rounded-xl" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft 365 Cyber Security</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Why Microsoft 365 Cyber Security Matters</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 is a powerful suite of productivity
                    tools, but its widespread use makes it a prime target for cyberattacks. Without robust cybersecurity
                    measures, businesses face risks such as data breaches, phishing scams, malware infections, and
                    compliance violations.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Cybersecurity in Microsoft 365 is essential to
                    protect your organisation's sensitive data, maintain business continuity, and meet regulatory
                    requirements. The built-in security features provide comprehensive protection across identities,
                    devices, applications, and data.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Microsoft 365 security solutions help businesses
                    strengthen their cyber posture, meet compliance requirements, and operate securely in today's cloud-first world.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="security-areas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Microsoft 365 Security Areas</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Microsoft 365 provides comprehensive protection
                    across four key areas to safeguard your business from modern cyber threats</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $areas = [
                        [
                            'title' => 'Protect Users',
                            'desc' =>
                                'Multi-Factor Authentication, Conditional Access, and identity protection to safeguard user accounts from compromise.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                        ],
                        [
                            'title' => 'Protect Devices',
                            'desc' =>
                                'Endpoint security with Microsoft Defender for Business, device compliance, and Intune device management.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Protect Data',
                            'desc' =>
                                'Data Loss Prevention, encryption, and sensitivity labels to safeguard sensitive business information.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />',
                        ],
                        [
                            'title' => 'Protect Email',
                            'desc' =>
                                'Advanced phishing protection, anti-malware, and email encryption to secure communications.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />',
                        ],
                    ];
                @endphp
                @foreach ($areas as $area)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $area['icon'] !!}</svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $area['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $area['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Essential Cybersecurity Features</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Essential cybersecurity features of Microsoft 365
                    are designed to protect users, devices, identities, and data across today's cloud-first workplace</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'Identity & Access Protection',
                            'desc' =>
                                'Multi-Factor Authentication (MFA), Conditional Access policies, and strong password enforcement significantly reduce the risk of account compromise.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                        ],
                        [
                            'title' => 'Threat Protection',
                            'desc' =>
                                'Microsoft Defender provides advanced antivirus and endpoint protection against malware, ransomware, and phishing attacks.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Data Encryption',
                            'desc' =>
                                'Secure information both at rest and in transit across email, files, and collaboration platforms.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Email Threat Protection',
                            'desc' =>
                                'Advanced phishing protection, malware detection, and real-time threat intelligence for email communications.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />',
                        ],
                        [
                            'title' => 'Device Management',
                            'desc' =>
                                'Microsoft Intune enables mobile device management (MDM), compliance enforcement, and secure access controls.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Data Loss Prevention',
                            'desc' =>
                                'DLP policies automatically detect and prevent unauthorised sharing of confidential data across email, SharePoint, and OneDrive.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
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

    <section class="py-16 lg:py-24 bg-white" id="advanced">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Advanced Cybersecurity Features</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Advanced cybersecurity features in Microsoft 365 are designed to
                    deliver enterprise-grade protection for identities, data, devices, and applications in a modern cloud environment</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full flex flex-col">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Enterprise-Grade Protection</span>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Advanced Threat Protection</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">These capabilities go beyond baseline security, helping
                        organisations proactively defend against advanced cyber threats, targeted attacks, and data breaches.</p>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 text-sm">Conditional Access Policies</h4>
                                <p class="text-slate-600 text-sm text-justify">Enable organisations to enforce security rules based on user roles, device compliance, location, and risk level, significantly reducing the impact of compromised credentials.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 text-sm">Advanced Threat Protection</h4>
                                <p class="text-slate-600 text-sm text-justify">ATP helps identify and respond to zero-day attacks and sophisticated threats with real-time threat intelligence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full flex flex-col">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Visibility & Control</span>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Security Monitoring & Access Management</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Combined with centralised audit logging, continuous
                        monitoring, and security reporting, these advanced Microsoft 365 cybersecurity features provide strong visibility, control,
                        and resilience against today's evolving threat landscape.</p>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 text-sm">Privileged Access Management</h4>
                                <p class="text-slate-600 text-sm text-justify">Protect admin accounts using role-based access controls and enhanced monitoring to prevent unauthorised access.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 text-sm">Centralised Audit Logging</h4>
                                <p class="text-slate-600 text-sm text-justify">Continuous monitoring and security reporting provide strong visibility and control across all endpoints.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Identity Security</span>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Password Policy & Identity Security</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The password policy in Microsoft 365, managed through Azure Active Directory (Azure AD), enforces strong security measures to protect user accounts.</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Supports password complexity requirements including length, special characters, and expiration periods</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Self-service password reset (SSPR) allows users to securely reset passwords without IT intervention</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Azure AD Password Protection prevents weak or commonly used passwords using global banned password lists</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Multi-Factor Authentication (MFA) and Conditional Access Policies for added security</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Aligns with ACSC Essential 8, ensuring compliance and protection against password-related attacks</span>
                        </div>
                    </div>
                    <a href="#data-protection" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Data Protection
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg></a>
                </div>
                <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Compliance & Governance</span>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Data Protection & Compliance</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 data protection is built on enterprise-grade security designed to safeguard business information across emails, files, devices, and cloud applications.</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Microsoft Purview protects sensitive data with encryption, Data Loss Prevention (DLP), and compliance controls</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Azure Active Directory (Entra ID) secures identity management with Multi-Factor Authentication (MFA)</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Microsoft Sentinel provides Security Information and Event Management (SIEM) for real-time threat detection</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Aligns with frameworks like ACSC Essential 8, ensuring secure and compliant cloud operations</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Supports compliance with ISO 27001, SOC 2, and HIPAA requirements</span>
                        </div>
                    </div>
                    <a href="#essential-eight" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Essential Eight
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="essential-eight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">ACSC Essential Eight Alignment</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto mb-6">The ACSC Essential Eight, developed by the Bangladeshi Cyber Security Centre, is a proven framework designed to help organisations protect against cyber attacks, ransomware, and data breaches.</p>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">It focuses on practical, high-impact controls that significantly reduce cybersecurity risk when implemented correctly. Microsoft 365 security features align with these controls to help businesses achieve compliance.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $essentialEight = [
                        [
                            'title' => 'Application Control',
                            'desc' => 'Restrict unauthorised software execution',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Patch Applications',
                            'desc' => 'Address known vulnerabilities',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                        ],
                        [
                            'title' => 'Macro Settings',
                            'desc' => 'Configure Microsoft Office macro settings to prevent malware delivery',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                        ],
                        [
                            'title' => 'User Hardening',
                            'desc' => 'User application hardening to reduce attack surface',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Admin Privileges',
                            'desc' => 'Restrict administrative privileges to limit potential damage',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                        ],
                        [
                            'title' => 'Patch Operating Systems',
                            'desc' => 'Maintain security integrity',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                        ],
                        [
                            'title' => 'Multi-Factor Authentication',
                            'desc' => 'Verify user identities',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                        ],
                        [
                            'title' => 'Regular Backups',
                            'desc' => 'Ensure data recovery capability',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />',
                        ],
                    ];
                @endphp
                @foreach ($essentialEight as $item)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white flex flex-col relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $item['icon'] !!}</svg>
                            </div>
                            <h4 class="font-semibold text-slate-900 text-sm">{{ $item['title'] }}</h4>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="help">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal reveal-fade-up relative h-80 lg:h-96 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                <img src="/images/cloud/cyber-security/m365-security/section-1.jpg" alt="Microsoft 365 Security Support"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-10 text-white">
                <h2 class="text-2xl lg:text-3xl font-bold mb-6">Need Help Securing Your Microsoft 365 Environment?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6 text-justify">At Total Solutions IT, we help
                    businesses configure, monitor, and optimise their Microsoft 365 security. Our cybersecurity reviews
                    ensure that your policies are correctly set, threats are detected and contained quickly, and your
                    environment meets the latest security standards.</p>
                <div class="space-y-3 mb-6">
                    @php
                        $services = [
                            'Microsoft 365 security assessments and reviews',
                            'Conditional Access and MFA configuration',
                            'Microsoft Defender deployment and optimisation',
                            'Data Loss Prevention (DLP) policy implementation',
                            'ACSC Essential Eight alignment and compliance',
                            'Ongoing monitoring and security management',
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
                <p class="text-blue-100 text-sm mb-6">Whether you need a Microsoft Defender health check or a
                    comprehensive Microsoft 365 security review, we're here to help strengthen your organisation's security posture.</p>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $usefulLinks = [
                        [
                            'title' => 'Microsoft Defender for Business',
                            'desc' => 'Enterprise-grade endpoint security solution designed specifically for small and medium-sized businesses.',
                            'href' => 'https://www.microsoft.com/en-us/security/business/endpoint-security/microsoft-defender-for-business',
                        ],
                        [
                            'title' => 'Microsoft Entra ID',
                            'desc' => 'Identity and access management solution with MFA, Conditional Access, and identity protection.',
                            'href' => 'https://www.microsoft.com/en-us/security/business/identity-access/microsoft-entra-id',
                        ],
                        [
                            'title' => 'Microsoft Purview',
                            'desc' => 'Data governance and compliance solution for protecting sensitive information across your organisation.',
                            'href' => 'https://www.microsoft.com/en-us/security/business/sensitivity-labels',
                        ],
                        [
                            'title' => 'ACSC Essential Eight',
                            'desc' => 'Bangladeshi Cyber Security Centre framework for protecting against cyber attacks and data breaches.',
                            'href' => 'https://www.cyber.gov.au/business-and-organisations/essential-cyber-security/essential-eight',
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

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about Microsoft 365 Cyber Security</p>
            </div>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'What is Microsoft 365 Cyber Security?',
                            'answer' => 'Microsoft 365 Cyber Security refers to the comprehensive security features built into Microsoft 365 to protect users, devices, email, and business data from cyber threats. It includes tools like Microsoft Defender, Multi-Factor Authentication, Conditional Access policies, and Data Loss Prevention.',
                        ],
                        [
                            'question' => 'Do I need additional security if I use Microsoft 365?',
                            'answer' => 'While Microsoft 365 includes robust built-in security features, proper configuration is essential. Many businesses benefit from expert guidance to ensure security policies are correctly set up, optimised for their needs, and aligned with frameworks like the ACSC Essential Eight.',
                        ],
                        [
                            'question' => 'What is Microsoft Defender for Business?',
                            'answer' => 'Microsoft Defender for Business is an endpoint security solution included in Microsoft 365 Business Premium. It provides enterprise-grade protection including antivirus, Endpoint Detection and Response (EDR), and automated investigation and remediation to protect against ransomware, phishing, and malware.',
                        ],
                        [
                            'question' => 'How does Conditional Access work?',
                            'answer' => 'Conditional Access policies in Microsoft 365 allow organisations to enforce security rules based on specific conditions such as user role, device compliance, location, and risk level. This helps prevent unauthorised access and strengthens identity protection.',
                        ],
                        [
                            'question' => 'What is the ACSC Essential Eight?',
                            'answer' => 'The ACSC Essential Eight is a framework developed by the Bangladeshi Cyber Security Centre that outlines eight mitigation strategies to protect against cyber attacks. Microsoft 365 security features align with these controls to help businesses achieve compliance and improve their security posture.',
                        ],
                        [
                            'question' => 'How can Total Solutions IT help with Microsoft 365 security?',
                            'answer' => 'Total Solutions IT provides comprehensive Microsoft 365 security services including security assessments, Defender configuration, Conditional Access setup, DLP implementation, and ongoing monitoring. We help businesses align with the ACSC Essential Eight and maintain a strong security posture.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 chevron" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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

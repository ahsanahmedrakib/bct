@extends('layouts.app')

@section('title', 'ACSC Essential Eight Compliance | Bismillah Computer & Technology')
@section('description',
    'Microsoft 365 provides a comprehensive suite of security tools that help organisations achieve
    and maintain compliance with the ACSC Essential Eight framework.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">How Microsoft 365 Achieves
                    <span class="text-blue-600 block mt-2">ACSC Essential 8 Compliance</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft 365 provides
                    a comprehensive suite of security tools and features that help organisations achieve and maintain
                    compliance with the ACSC Essential Eight framework. From identity protection to data backup, Microsoft 365
                    addresses each of the eight mitigation strategies with built-in capabilities.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#overview"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">OVERVIEW
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#strategies"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">THE EIGHT STRATEGIES
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#features"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">MICROSOFT 365 FEATURES
                        <svg class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" loading="lazy" class="rounded-lg"
                    src="/images/cloud/microsoft-solutions/conditional-access/conditional-access.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/it-support/cyber-security/acsc.png" alt="Bangladeshi Cyber Security Centre Logo"
                    class="rounded-xl w-full max-w-md object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">ACSC Essential Eight</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is the ACSC Essential Eight?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The ACSC Essential Eight, developed by the
                    Bangladeshi Cyber Security Centre, is a proven framework designed to help organisations protect against
                    cyber attacks, ransomware, and data breaches. It focuses on practical, high-impact controls that
                    significantly reduce cybersecurity risk when implemented correctly.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The framework includes Application Control, Patch
                    Applications, and Patch Operating Systems, which work together to prevent malicious software from
                    running and reduce exposure to known vulnerabilities. Restrict Administrative Privileges limits
                    high-risk access, while Multi-Factor Authentication (MFA) strengthens identity security and helps
                    prevent unauthorised access.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">To support resilience and recovery, the Essential
                    Eight also mandates regular backups and tested data restoration processes, ensuring business continuity
                    after an incident. When implemented across increasing maturity levels, the ACSC Essential Eight
                    provides a structured, measurable approach to improving cyber security posture, supporting compliance,
                    and safeguarding critical systems in today's evolving threat landscape.</p>
                <a href="#strategies" class="text-blue-600 font-medium flex items-center hover:text-blue-800">The Eight
                    Strategies <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="strategies">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">The ACSC Essential Eight Strategies</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Eight proven mitigation strategies that
                    significantly reduce cybersecurity risk when implemented correctly</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $strategies = [
                        [
                            'title' => 'Application Control',
                            'desc' =>
                                'Application Control restricts execution of unapproved software to prevent malware and unauthorized programs on systems. This relates to the level of application control and constraints you have over user applications and the ability for staff to execute unapproved and malicious programs on workstations. This includes .exe, DLL, scripts and installers.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-1.jpg',
                        ],
                        [
                            'title' => 'Patch Applications',
                            'desc' =>
                                'Application Patching involves updating software to fix vulnerabilities, reducing security risks and preventing exploitation by attackers. Updating third-party applications quickly is essential for ensuring the latest security updates and patches are in place. For example, using the latest version of applications and patches of web browsers, Microsoft Office, Java and PDF viewers.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-2.webp',
                        ],
                        [
                            'title' => 'Configure Microsoft Office Macro Settings',
                            'desc' =>
                                'Office Macro Settings restrict macro execution in Microsoft Office to prevent malicious code from compromising systems. This is the amount of freedom your users have to run macros in Microsoft Office applications. Most users should have macros blocked as default unless they have a specific organisational requirement.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-3.jpg',
                        ],
                        [
                            'title' => 'User Application Hardening',
                            'desc' =>
                                'User Application Hardening configures apps to block unnecessary features, reducing exposure to security threats and exploits. Limitations should be placed on user applications. At its most basic, web browsers should block Flash, ads and Java, with users unable to change these settings.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-4.jpg',
                        ],
                        [
                            'title' => 'Restrict Administrative Privileges',
                            'desc' =>
                                'Restrict Administrative Privileges limits admin access to essential users, reducing potential damage from compromised accounts. Tightly manage administrative privileges and access to operating systems and applications based on user duties. Privileged accounts should not be used for reading email and browsing the web.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-5.jpg',
                        ],
                        [
                            'title' => 'Patch Operating Systems',
                            'desc' =>
                                'Patch Operating Systems involves regularly updating OS to fix vulnerabilities and protect against security threats and exploits. This focuses on keeping operating systems up to date to ensure that OS patches, updates, and security mitigations for internet-facing services are applied within two weeks of release.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-6.jpg',
                        ],
                        [
                            'title' => 'Multi-Factor Authentication',
                            'desc' =>
                                'Multi-Factor Authentication uses two or more verification methods to secure accounts and prevent unauthorized access. Enforce MFA for all privileged access. Turn on MFA for VPNs, RDP, SSH and other remote access, and for all users when they access an important data repository.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-7.jpg',
                        ],
                        [
                            'title' => 'Regular Backups',
                            'desc' =>
                                'Regular Backups involve performing daily backups of important new or changed data, software and configuration settings. Store backups disconnected from the Internet and retain them for at least three months. Test restoration initially, annually and whenever IT infrastructure changes.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                            'image' => '/images/cloud/cyber-security/essential-eight/section-8.jpg',
                        ],
                    ];
                @endphp
                @foreach ($strategies as $strategy)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all overflow-hidden">
                        <div class="relative h-48 w-full">
                            <img src="{{ $strategy['image'] }}" alt="{{ $strategy['title'] }}"
                                class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">{!! $strategy['icon'] !!}</svg>
                                </div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $strategy['title'] }}</h3>
                            </div>
                            <p class="text-slate-600 text-sm text-justify">{{ $strategy['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">How Microsoft 365 Achieves Essential 8 Compliance
                </h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Microsoft 365 provides comprehensive security tools
                    and features that address each of the Essential Eight strategies</p>
            </div>
            <div class="space-y-4">
                @php
                    $features = [
                        [
                            'title' => 'Password Policy',
                            'desc' =>
                                'The password policy in Microsoft 365, managed through Azure Active Directory (Azure AD), enforces strong security measures to protect user accounts. It supports password complexity requirements, including length, special characters, and expiration periods to reduce vulnerabilities. Self-service password reset (SSPR) allows users to securely reset passwords without IT intervention. Azure AD Password Protection prevents weak or commonly used passwords using global banned password lists and custom banned lists. Organizations can also enable Multi-Factor Authentication (MFA) and Conditional Access Policies for added security. These features align with ACSC Essential 8, ensuring compliance and protection against password-related attacks.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                        ],
                        [
                            'title' => 'Multi-Factor Authentication (MFA)',
                            'desc' =>
                                'Multi-Factor Authentication (MFA) in Microsoft 365 enhances security by requiring users to verify their identity using two or more factors — something they know (password), have (device or token), or are (biometrics). It integrates with Azure Active Directory (Azure AD) and supports methods like Microsoft Authenticator, SMS codes, phone calls, and FIDO2 security keys. MFA protects against phishing and unauthorized access, even if passwords are compromised. It also works with Conditional Access Policies to enforce risk-based authentication. By adding an extra layer of defense, MFA helps meet ACSC Essential 8 compliance and secures identities in hybrid and cloud environments.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                        ],
                        [
                            'title' => 'Phishing-Resistant MFA',
                            'desc' =>
                                'Phishing-resistant Multi-Factor Authentication (MFA) in Microsoft 365 provides advanced protection against phishing attacks by eliminating reliance on traditional passwords and one-time codes, which are vulnerable to phishing. Instead, it uses FIDO2-based authentication methods, such as passkeys, Windows Hello for Business, and hardware security keys (e.g., YubiKeys). These methods verify user identities using biometric data or PINs stored locally on devices, making them resistant to credential theft. Microsoft Authenticator also supports number matching and push notifications to combat phishing attempts. Integrated with Azure Active Directory (Azure AD), phishing-resistant MFA enforces Conditional Access Policies for secure, compliant access aligned with ACSC Essential 8 standards.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a48.667 48.667 0 00-1.418 8.773 7.46 7.46 0 01-1.292-6.528M12 10.5a3 3 0 11-6 0 3 3 0 016 0zm0 0v1.5a2.5 2.5 0 002.5 2.5M12 10.5V7.5" />',
                        ],
                        [
                            'title' => 'Passkeys',
                            'desc' =>
                                'Microsoft 365 supports passkeys through Windows Hello for Business, Microsoft Authenticator, and security keys like YubiKeys. These methods integrate with Azure Active Directory to enforce Multi-Factor Authentication (MFA) and Conditional Access Policies, ensuring secure, seamless access while meeting compliance standards like ACSC Essential 8.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                        ],
                        [
                            'title' => 'Entra ID',
                            'desc' =>
                                'Entra ID (formerly Azure Active Directory) in Microsoft 365 is a cloud-based identity and access management (IAM) solution that secures user authentication and enforces access control. It provides Single Sign-On (SSO) for seamless access to apps, Multi-Factor Authentication (MFA) for enhanced security, and Conditional Access Policies to restrict access based on device compliance, location, and risk levels. Privileged Identity Management (PIM) ensures just-in-time admin access, while Identity Protection detects and mitigates identity risks. Entra ID supports hybrid environments, integrates with on-premises AD, and meets compliance standards like ACSC Essential 8 for secure identity management and governance.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />',
                        ],
                        [
                            'title' => 'Conditional Access',
                            'desc' =>
                                'Conditional Access in Microsoft 365 is a key security feature that allows organizations to control how users access corporate resources based on specific conditions. Built into Azure Active Directory (Azure AD), Conditional Access is central to Microsoft\'s Zero Trust security model, helping businesses protect sensitive data while enabling secure, flexible work environments. With Conditional Access, IT admins can define policies that evaluate signals like user identity, device compliance, location, risk level, and application type before granting access. For example, you can require multi-factor authentication (MFA) if a user is signing in from an unfamiliar location or block access if the device isn\'t compliant with company standards.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                        ],
                        [
                            'title' => 'Data Backup',
                            'desc' =>
                                'Data backup in Microsoft 365 ensures data protection through built-in features and third-party solutions. Services like OneDrive, SharePoint Online, and Exchange Online provide versioning, recycle bins, and retention policies to recover deleted or modified data. Microsoft Purview enables data retention and litigation hold for compliance and legal requirements. For enhanced protection, third-party backup solutions such as Veeam, AvePoint, and Commvault offer automated backups, long-term storage, and granular recovery options. These features safeguard against data loss from accidental deletion, ransomware, or corruption, ensuring compliance with standards like ACSC Essential 8 and business continuity requirements.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                        ],
                        [
                            'title' => 'Cloud Security',
                            'desc' =>
                                'Cloud security in Microsoft 365 ensures data protection, threat prevention, and compliance in the cloud. It uses Microsoft Defender for Cloud Apps to monitor and control cloud app usage, detecting threats and enforcing policies. Microsoft Purview protects sensitive data with encryption, Data Loss Prevention (DLP), and compliance controls. Azure Active Directory (Entra ID) secures identity management with Multi-Factor Authentication (MFA) and Conditional Access Policies. Microsoft Sentinel provides Security Information and Event Management (SIEM) for real-time threat detection and response. These features align with frameworks like ACSC Essential 8, ensuring secure and compliant cloud operations.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Zero Trust Framework',
                            'desc' =>
                                'The Zero Trust Framework in Microsoft 365 enforces \'never trust, always verify\' to secure identities, devices, and data. It uses Multi-Factor Authentication (MFA) and Conditional Access Policies in Azure Active Directory (Azure AD) to verify identities and enforce least-privilege access with Role-Based Access Control (RBAC) and Privileged Identity Management (PIM). Microsoft Defender for Endpoint secures devices, while Data Loss Prevention (DLP) and Information Protection safeguard sensitive data. Microsoft Intune manages device compliance, and Microsoft Sentinel provides real-time monitoring and threat detection. This approach ensures robust security and compliance with frameworks like ACSC Essential 8.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Compliance',
                            'desc' =>
                                'Compliance in Microsoft 365 helps organizations meet legal, regulatory, and industry standards through tools in the Microsoft Purview Compliance Portal. It includes Data Loss Prevention (DLP) to protect sensitive data, retention policies for data governance, and audit logs for tracking activities. Information Protection applies labels and encryption, while eDiscovery supports legal data retrieval. Insider Risk Management detects internal threats, and Advanced Threat Protection safeguards against cyberattacks. Microsoft 365 ensures compliance with standards like ACSC Essential 8, ISO 27001, GDPR, and HIPAA, providing organizations with secure, auditable, and policy-driven data management and protection.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'App Protection Policies',
                            'desc' =>
                                'App Protection Policies in Microsoft 365, managed through Microsoft Intune, secure corporate data within apps on both managed and unmanaged devices. They enforce data encryption, prevent copy-paste actions, and enable remote wipe for lost or stolen devices. Policies require PINs, biometric authentication, and Multi-Factor Authentication (MFA) to control access. They also block access on non-compliant or jailbroken devices and integrate with Azure AD Conditional Access for additional security. Supporting apps like Outlook, Teams, and OneDrive, these policies enable secure BYOD scenarios while meeting compliance standards, including ACSC Essential 8, for data protection and regulatory requirements.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />',
                        ],
                        [
                            'title' => 'Azure Sensitivity Labels',
                            'desc' =>
                                'Azure Sensitivity Labels, part of Microsoft Purview Information Protection, empower organizations to classify, label, and protect sensitive data across Microsoft 365. These labels help enforce data security and compliance by identifying and managing sensitive content in apps like Microsoft Teams, SharePoint, OneDrive, Outlook, Word, and Excel. Azure Sensitivity Labels support zero-trust data protection by ensuring only authorized users access sensitive content, whether stored or shared. They help businesses meet regulatory requirements including GDPR, HIPAA, and ISO 27001.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                        ],
                        [
                            'title' => 'Windows Defender Application Control (WDAC)',
                            'desc' =>
                                'Windows Defender Application Control (WDAC) is a powerful security feature in Windows that helps prevent unauthorized or malicious code from running on Windows devices. Designed for enterprise environments, WDAC enforces a strict application control policy by allowing only trusted, signed, and approved applications to execute. WDAC helps organizations implement a zero-trust security model by reducing the attack surface and blocking unapproved executables, scripts, and dynamic-link libraries (DLLs). Policies can be customized to define which apps are permitted based on publisher, file path, hash, or reputation via Microsoft\'s Intelligent Security Graph. Integrated with Microsoft Defender for Endpoint, WDAC offers centralized management and reporting, making it easier to monitor compliance and policy enforcement across your network.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Microsoft Intune',
                            'desc' =>
                                'Microsoft Intune is a cloud-based endpoint management solution that enables organizations to securely manage devices, apps, and user access across Windows, macOS, iOS, and Android platforms. As part of Microsoft Endpoint Manager, Intune simplifies mobile device management (MDM) and mobile application management (MAM) in a single unified platform. With Intune, IT administrators can enforce security policies, deploy software, manage updates, and remotely wipe or lock lost or stolen devices. It integrates with Microsoft 365 and Azure Active Directory, supporting conditional access and compliance-based access controls to protect corporate data. Intune also allows businesses to separate work and personal data on BYOD (Bring Your Own Device) endpoints, enhancing both security and user privacy.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />',
                        ],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">{!! $feature['icon'] !!}</svg>
                                </div>
                                <h3 class="font-medium text-slate-900">{{ $feature['title'] }}</h3>
                            </div>
                            <p class="mt-2 text-sm text-slate-600 leading-relaxed text-justify">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-12">Useful Links</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $links = [
                        [
                            'title' => 'ACSC Essential Eight Overview',
                            'desc' =>
                                'Official ACSC documentation explaining the Essential Eight mitigation strategies and maturity levels for Bangladeshi organisations.',
                            'href' =>
                                'https://www.cyber.gov.au/resources-business-and-government/essential-cyber-security/essential-eight',
                        ],
                        [
                            'title' => 'Microsoft Essential Eight on Microsoft Learn',
                            'desc' =>
                                "Microsoft's official documentation mapping the Essential Eight to Microsoft 365 controls and licensing requirements.",
                            'href' => 'https://learn.microsoft.com/en-us/compliance/anz/e8-overview',
                        ],
                        [
                            'title' => 'Microsoft 365 Cyber Security',
                            'desc' =>
                                'Learn how Microsoft 365 provides comprehensive cybersecurity features to protect your business from modern threats.',
                            'href' => '#',
                        ],
                        [
                            'title' => 'Microsoft Secure Score',
                            'desc' => "Measure your organisation's security posture with Microsoft Secure Score and get recommendations for improvement.",
                            'href' =>
                                'https://www.microsoft.com/en-us/security/business/security-101/what-is-microsoft-secure-score',
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

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center mb-12">Common questions about Microsoft 365 and ACSC Essential Eight
                    compliance</p>
            </div>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'q' => 'What is the ACSC Essential Eight?',
                            'a' =>
                                'The ACSC Essential Eight is a cybersecurity framework developed by the Bangladeshi Cyber Security Centre (ACSC). It outlines eight mitigation strategies designed to help organisations protect against cyber threats, including application control, patching, macro settings, application hardening, administrative privilege restriction, OS patching, multi-factor authentication, and regular backups.',
                        ],
                        [
                            'q' => 'How does Microsoft 365 help with Essential Eight compliance?',
                            'a' =>
                                'Microsoft 365 provides built-in tools and features that address each of the eight strategies. For example, Windows Defender Application Control (WDAC) handles application control, Microsoft Intune manages patching and device compliance, Entra ID provides MFA and conditional access, and OneDrive/SharePoint offer backup capabilities. Together, these tools create a comprehensive compliance framework.',
                        ],
                        [
                            'q' => 'What is Windows Defender Application Control (WDAC)?',
                            'a' =>
                                'WDAC is a security feature in Windows that helps prevent unauthorized or malicious code from running on devices. It enforces a strict application control policy by allowing only trusted, signed, and approved applications to execute. WDAC can be managed through Microsoft Intune and integrates with Microsoft Defender for Endpoint.',
                        ],
                        [
                            'q' => 'How does Multi-Factor Authentication (MFA) help with Essential Eight compliance?',
                            'a' =>
                                'MFA is one of the eight Essential Eight strategies. Microsoft 365 provides MFA through Entra ID, supporting various authentication methods including Microsoft Authenticator, SMS codes, phone calls, and FIDO2 security keys. Phishing-resistant MFA using passkeys and Windows Hello for Business provides even stronger protection aligned with higher maturity levels.',
                        ],
                        [
                            'q' => 'What backup options are available in Microsoft 365?',
                            'a' =>
                                'Microsoft 365 provides built-in data protection through OneDrive, SharePoint Online, and Exchange Online with versioning, recycle bins, and retention policies. Microsoft Purview enables data retention and litigation hold. For enhanced protection, third-party solutions like Veeam, AvePoint, and Commvault offer automated backups, long-term storage, and granular recovery options.',
                        ],
                        [
                            'q' => 'What is the Zero Trust Framework in Microsoft 365?',
                            'a' =>
                                "The Zero Trust Framework in Microsoft 365 follows the 'never trust, always verify' principle. It uses MFA, Conditional Access Policies, Role-Based Access Control (RBAC), Privileged Identity Management (PIM), Microsoft Defender for Endpoint, Data Loss Prevention (DLP), Microsoft Intune, and Microsoft Sentinel to secure identities, devices, and data across the organization.",
                        ],
                        [
                            'q' => 'How does Microsoft Intune support Essential Eight compliance?',
                            'a' =>
                                'Microsoft Intune manages device compliance, enforces security policies, deploys software, and manages updates across Windows, macOS, iOS, and Android. It supports patch management, app protection policies, and conditional access controls. Intune also separates work and personal data on BYOD endpoints while maintaining security standards.',
                        ],
                        [
                            'q' => 'What are Azure Sensitivity Labels?',
                            'a' =>
                                'Azure Sensitivity Labels, part of Microsoft Purview Information Protection, help organizations classify, label, and protect sensitive data across Microsoft 365. They enforce data security and compliance by identifying and managing sensitive content in apps like Teams, SharePoint, OneDrive, Outlook, Word, and Excel, supporting zero-trust data protection.',
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

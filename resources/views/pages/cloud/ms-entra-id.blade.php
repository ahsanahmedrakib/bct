@extends('layouts.app')

@section('title', 'Microsoft Entra ID | Bismillah Computer & Technology')
@section('description', 'Identity and access management with single sign-on, MFA, and conditional access policies.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft
                    <span class="text-blue-600 block mt-2">Entra ID</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Ensuring identity security has become paramount in the evolving work landscape, particularly with the flexibility of remote app access. Establishing secure access to your network and applications starts with Azure Active Directory.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Entra ID" loading="lazy" class="rounded-lg" src="/images/cloud/microsoft-solutions/entra-id/entra-id.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ================= OVERVIEW SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/entra-id/section.png" alt="Microsoft Entra ID" class="object-cover" loading="lazy" />
            </div>
            <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Entra ID</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Identity & Access Management</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Ensuring identity security has become paramount in the evolving work landscape, particularly with the flexibility of remote app access. Establishing secure access to your network and applications starts with Azure Active Directory.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Azure Active Directory (Azure AD) serves as the bedrock of your cloud identity and serves as the security boundary for all Microsoft online services, including Microsoft 365. As an enterprise identity solution, Azure AD offers single sign-on, multi-factor authentication, and conditional access features to safeguard your users against 99.9% of cyber threats.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Microsoft Entra ID provides a comprehensive identity and access management solution that helps you manage user identities, control access to resources, and protect against security threats across your entire organisation.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
            </div>
        </div>
    </section>

    {{-- ================= KEY FEATURES ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features of Microsoft Entra ID</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Everything you need for identity and access management across your organisation</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        ['title' => 'Single Sign-On', 'desc' => 'Connect your workforce to all your apps, from any location, using any device. Simplify access to your apps from anywhere.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />'],
                        ['title' => 'Multi-Factor Authentication', 'desc' => 'Help safeguard access to data and apps and keep it simple for users. Add an extra layer of security to the login process.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />'],
                        ['title' => 'Conditional Access', 'desc' => 'Apply the right access controls to keep your organisation more secure. Enforce policies based on user, location, device, and risk.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />'],
                    ];
                @endphp
                @foreach($features as $i => $feature)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full" style="animation-delay: {{ $i * 0.05 }}s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-6 text-blue-600">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 text-center mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= AZURE AD PLATFORM ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="platform">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Protect your business with a universal identity platform</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-8 text-justify">The Azure Active Directory (Azure AD) enterprise identity service provides single sign-on and multi-factor authentication to help protect your users from 99.9 percent of cybersecurity attacks.</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-slate-700 text-sm">Single sign-on simplifies access to your apps from anywhere</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-slate-700 text-sm">Conditional Access and multi-factor authentication help protect and govern access</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-slate-700 text-sm">A single identity platform lets you engage with internal and external users more securely</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-slate-700 text-sm">Developer tools make it easy to integrate identity into your apps and services</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Azure Active Directory</span>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Universal Identity Platform</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Azure AD is the bedrock of your cloud identity and serves as the security boundary for all Microsoft online services, including Microsoft 365. It provides single sign-on, multi-factor authentication, and conditional access features to safeguard your users.</p>
                    @php
                        $azureFeatures = [
                            ['title' => 'Single sign-on simplifies access to your apps from anywhere', 'desc' => 'Users only need one set of credentials to access all their applications, whether they\'re in the office or working remotely.'],
                            ['title' => 'Conditional Access and multi-factor authentication help protect and govern access', 'desc' => 'Enforce security policies based on user identity, location, device compliance, and risk level to ensure the right people have the right access.'],
                            ['title' => 'A single identity platform lets you engage with internal and external users more securely', 'desc' => 'Manage identities for employees, customers, and partners from a unified platform, extending your security boundary beyond organisational walls.'],
                            ['title' => 'Developer tools make it easy to integrate identity into your apps and services', 'desc' => 'Accelerate adoption of your applications by supporting single sign-on and user provisioning with built-in developer tools and APIs.'],
                        ];
                    @endphp
                    <div class="space-y-4">
                        @foreach($azureFeatures as $feature)
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">{{ $feature['title'] }}</h4>
                            <p class="text-sm text-slate-600 text-justify">{{ $feature['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= FEATURE SECTIONS ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="details">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            @php
                $featureSections = [
                    [
                        'title' => 'Connect your workforce',
                        'description' => 'Whether people are on-site or remote, give them seamless access to all their apps so they can stay productive from anywhere. Automate workflows for user lifecycle and provisioning. Save time and resources with self-service management.',
                        'image' => '/images/cloud/microsoft-solutions/entra-id/connect-workforce.svg',
                        'links' => [
                            ['label' => 'Learn more about single sign-on', 'href' => 'https://azure.microsoft.com/en-us/services/active-directory/sso/'],
                            ['label' => 'Learn how to enable secure access for your remote workforce', 'href' => 'https://docs.microsoft.com/en-us/enterprise-mobility-security/remote-work'],
                        ],
                    ],
                    [
                        'title' => 'Choose from thousands of SaaS apps',
                        'description' => 'Simplify single sign-on. Azure AD supports more than 2,800 pre-integrated software as a service (SaaS) applications.',
                        'image' => '/images/cloud/microsoft-solutions/entra-id/diagram-logos.svg',
                        'links' => [
                            ['label' => 'Browse the Azure Marketplace', 'href' => 'https://azuremarketplace.microsoft.com/en-us/marketplace/apps/category/azure-active-directory-apps'],
                        ],
                    ],
                    [
                        'title' => 'Protect and govern access',
                        'description' => 'Safeguard user credentials by enforcing strong authentication and conditional access policies. Efficiently manage your identities by ensuring that the right people have the right access to the right resources.',
                        'image' => '/images/cloud/microsoft-solutions/entra-id/protect-govern.svg',
                        'links' => [
                            ['label' => 'Learn more about security and governance', 'href' => 'https://azure.microsoft.com/en-us/services/active-directory/security/'],
                        ],
                    ],
                    [
                        'title' => 'Engage with your customers and partners',
                        'description' => 'Secure and manage customers and partners beyond your organisational boundaries, with one identity solution. Customise user journeys and simplify authentication with social identity and more.',
                        'image' => '/images/cloud/microsoft-solutions/entra-id/engage.svg',
                        'links' => [
                            ['label' => 'Learn more about External Identities', 'href' => 'https://azure.microsoft.com/en-us/services/active-directory/customer-partner-identity/'],
                        ],
                    ],
                    [
                        'title' => 'Integrate identity into your apps',
                        'description' => 'Accelerate adoption of your application in the enterprise by supporting single sign-on and user provisioning. Reduce sign-in friction and automate the creation, removal, and maintenance of user accounts.',
                        'image' => '/images/cloud/microsoft-solutions/entra-id/integrate.svg',
                        'links' => [
                            ['label' => 'Learn more about identity integration', 'href' => 'https://azure.microsoft.com/en-us/services/active-directory/integrate/'],
                        ],
                    ],
                ];
            @endphp
            @foreach($featureSections as $index => $section)
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center {{ $index % 2 !== 0 ? 'lg:order-2 order-1' : '' }}">
                    <img src="{{ $section['image'] }}" alt="{{ $section['title'] }}" class="object-cover" loading="lazy" />
                </div>
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full {{ $index % 2 !== 0 ? 'lg:order-1 order-2' : '' }}">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">{{ $section['title'] }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 text-justify">{{ $section['description'] }}</p>
                    <div class="space-y-3">
                        @foreach($section['links'] as $link)
                        <a href="{{ $link['href'] }}" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline block">{{ $link['label'] }} &rarr;</a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ================= USEFUL LINKS ================= --}}
    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Useful Links</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @php
                    $usefulLinks = [
                        ['title' => 'Microsoft Entra ID Overview', 'description' => 'Learn about Microsoft Entra ID — the cloud-based identity and access management service that helps your people sign in and access resources.', 'href' => 'https://www.microsoft.com/en-us/security/business/identity-access/microsoft-entra-id'],
                        ['title' => 'Single Sign-On Documentation', 'description' => 'Technical documentation for Azure AD Single Sign-On — including setup guides, SaaS app integration, and best practices.', 'href' => 'https://learn.microsoft.com/en-us/entra/identity/enterprise-apps/'],
                        ['title' => 'Multi-Factor Authentication', 'description' => 'Learn how to enable and configure Multi-Factor Authentication in Azure AD to protect your organisation from compromised identities.', 'href' => 'https://learn.microsoft.com/en-us/entra/identity/authentication/'],
                        ['title' => 'Conditional Access Overview', 'description' => 'Understand how Conditional Access policies work in Azure AD to enforce access controls based on conditions and signals.', 'href' => 'https://learn.microsoft.com/en-us/entra/identity/conditional-access/overview'],
                    ];
                @endphp
                @foreach($usefulLinks as $link)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; {{ $link['title'] }}</h3>
                    <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                    <a href="{{ $link['href'] }}" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= BENEFITS SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="benefits">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Using Microsoft Entra ID</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Why organisations choose Microsoft Entra ID for identity and access management</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        ['title' => 'Universal Identity Platform', 'desc' => 'Azure AD serves as the bedrock of your cloud identity, providing a single platform to manage identities for employees, customers, and partners across your entire organisation.'],
                        ['title' => '99.9% Threat Protection', 'desc' => 'Enterprise-grade single sign-on, multi-factor authentication, and conditional access features safeguard your users against 99.9% of cybersecurity attacks.'],
                        ['title' => 'Seamless Remote Access', 'desc' => 'Whether people are on-site or remote, Entra ID gives them seamless access to all their apps so they can stay productive from anywhere, on any device.'],
                        ['title' => '2,800+ SaaS Integrations', 'desc' => 'Azure AD supports more than 2,800 pre-integrated SaaS applications, making it easy to connect your workforce to all the tools they need.'],
                        ['title' => 'Granular Access Control', 'desc' => 'Conditional Access policies let you apply the right access controls based on user identity, location, device compliance, and risk level.'],
                        ['title' => 'Developer-Friendly Integration', 'desc' => 'Built-in developer tools make it easy to integrate identity into your apps and services, supporting SSO and automated user provisioning.'],
                    ];
                @endphp
                @foreach($benefits as $benefit)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $benefit['title'] }}</h3>
                    <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= FAQ SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600 text-center mb-12">Common questions about Microsoft Entra ID</p>
            <div class="max-w-3xl mx-auto space-y-4">
                @php
                    $faqs = [
                        ['question' => 'What is Microsoft Entra ID?', 'answer' => 'Microsoft Entra ID (formerly Azure Active Directory) is a cloud-based identity and access management service. It helps your people sign in and access resources, providing single sign-on, multi-factor authentication, and conditional access to protect against cybersecurity threats.'],
                        ['question' => 'How does Single Sign-On work with Entra ID?', 'answer' => 'Single Sign-On (SSO) allows users to authenticate once with Entra ID and then access all their connected applications without needing to sign in again. This works across cloud apps, on-premises apps, and SaaS applications.'],
                        ['question' => 'What is Multi-Factor Authentication?', 'answer' => 'Multi-Factor Authentication (MFA) adds an extra layer of security by requiring users to provide two or more forms of verification when signing in — such as a password plus a code from their phone. This helps protect against 99.9% of identity attacks.'],
                        ['question' => 'How many SaaS apps does Azure AD support?', 'answer' => 'Azure AD supports more than 2,800 pre-integrated software as a service (SaaS) applications through the Azure Marketplace, making it easy to set up single sign-on for the tools your organisation already uses.'],
                        ['question' => 'Can I use Entra ID for external users like customers and partners?', 'answer' => 'Yes. Entra ID supports External Identities, allowing you to securely manage customers and partners beyond your organisational boundaries. You can customise user journeys and simplify authentication with social identity providers and more.'],
                    ];
                @endphp
                @foreach($faqs as $index => $faq)
                <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="toggleFaq({{ $index }})" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                        <span id="faq-icon-{{ $index }}" class="text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300 faq-icon">+</span>
                    </button>
                    <div id="faq-answer-{{ $index }}" class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('head')
<style>
    .faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
    .faq-answer.open {
        grid-template-rows: 1fr;
        opacity: 1;
    }
    .faq-icon {
        transition: transform 0.3s ease-in-out;
    }
    .faq-icon.rotated {
        transform: rotate(45deg);
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleFaq(index) {
        const answer = document.getElementById('faq-answer-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        const isOpen = answer.classList.contains('open');

        document.querySelectorAll('.faq-answer').forEach(function(el) {
            el.classList.remove('open');
        });
        document.querySelectorAll('.faq-icon').forEach(function(el) {
            el.classList.remove('rotated');
        });

        if (!isOpen) {
            answer.classList.add('open');
            icon.classList.add('rotated');
        }
    }
</script>
@endpush

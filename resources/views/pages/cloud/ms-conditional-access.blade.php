@extends('layouts.app')

@section('title', 'Conditional Access | Bismillah Computer & Technology')
@section('description', 'Zero-trust identity and access control policies with Microsoft Entra Conditional Access.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft 365
                    <span class="text-blue-600 block mt-2">Conditional Access</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Conditional Access in
                    Microsoft 365 is a critical security feature that enables organisations to control access to resources
                    based on specific conditions. It evaluates various factors such as user identity, location, device
                    compliance, application being accessed, and risk level before granting access.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Conditional Access" loading="lazy" class="rounded-lg"
                    src="/images/cloud/microsoft-solutions/conditional-access/conditional-access.png" />
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
            <div class="reveal reveal-fade-up flex justify-center">
                <img src="/images/it-support/cyber-security/cloud-and-network/hero.png" alt="Conditional Access"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft 365 Conditional Access</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Conditional Access?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Conditional Access in Microsoft 365 is a
                    critical security feature that enables organisations to control access to resources based on specific
                    conditions. It evaluates various factors such as user identity, location, device compliance, application
                    being accessed, and risk level before granting access.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">By applying Conditional Access policies,
                    organisations can enforce multi-factor authentication (MFA), block access from untrusted locations, restrict
                    access to compliant devices, and tailor access requirements to different user roles. This helps protect
                    against unauthorised access, reduces the risk of data breaches, and ensures that only the right users have
                    the right level of access to corporate resources.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Conditional Access is part of Microsoft
                    Entra ID (formerly Azure AD) and requires an Azure AD Premium license, which is also bundled in the
                    Enterprise Mobility and Security Suite.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features <svg
                        class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features of Conditional Access</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Control who can access what, from where, and under
                    what conditions</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Identity-Based Controls</h3>
                    <p class="text-slate-600 text-sm text-justify">Control access based on user identity, group membership, and
                        role. Include or exclude specific users from policies as needed.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Location-Based Restrictions</h3>
                    <p class="text-slate-600 text-sm text-justify">Block or allow access based on IP addresses and geographic
                        locations — restrict Office 365 to your company offices.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Device Compliance</h3>
                    <p class="text-slate-600 text-sm text-justify">Require devices to be Intune-compliant or Hybrid Azure AD
                        joined before granting access to corporate resources.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Application-Level Control</h3>
                    <p class="text-slate-600 text-sm text-justify">Apply policies to specific cloud apps — control access to
                        Exchange Online, SharePoint, Teams, or all Microsoft 365 apps.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Client App Restrictions</h3>
                    <p class="text-slate-600 text-sm text-justify">Control which applications users can connect from — allow
                        browsers but disable mobile and desktop Outlook apps.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Sign-In Risk Detection</h3>
                    <p class="text-slate-600 text-sm text-justify">Block sign-ins if Azure detects unusual behaviour — such as
                        simultaneous logins from different countries within minutes.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Multi-Factor Authentication</h3>
                    <p class="text-slate-600 text-sm text-justify">Enforce MFA via phone call, text message, or mobile app —
                        adding an extra layer of security to the login process.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Device Filtering</h3>
                    <p class="text-slate-600 text-sm text-justify">Filter devices by ownership (personal vs company) and
                        compliance status to apply granular access controls.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Session Management</h3>
                    <p class="text-slate-600 text-sm text-justify">Control persistent browser sessions and sign-in frequency —
                        ensure sessions are logged out on non-managed PCs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="problem">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div class="reveal reveal-fade-up">
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Why is Conditional Access Needed?</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 offers fantastic
                        benefits over traditional on-premise infrastructure — no costly infrastructure required, 100 GB
                        mailbox, online meetings, document collaboration, 99.9% uptime, flexibility, and anytime/anywhere
                        access to emails, documents, contacts, and calendars on any device.</p>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Security Concerns with Out-of-the-Box Settings:</h3>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Office 365 can be accessed from anywhere — not just in the
                                office, anywhere there is internet access.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Office 365 can be accessed from any device — not just
                                corporate owned devices, any device (Personal Windows/Mac laptop, tablet, phone, any device with
                                a browser or Outlook client installed).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Office 365 can be accessed by just a username and
                                password.</span>
                        </li>
                    </ul>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Data Loss Prevention Issues:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Emails can be cached offline and copied elsewhere on a home
                                PC with Outlook.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Mail can be downloaded to mobile devices and copied to
                                other locations.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">OneDrive for Business can be synced offline to a home PC
                                and all data copied elsewhere/shared.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">SharePoint Online can be synced offline to a home PC and
                                all data copied elsewhere/shared.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-amber-500 shrink-0 mt-0.5 w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Multi-factor is not turned on by default for Office 365 —
                                To login only a username and password is required.</span>
                        </li>
                    </ul>
                </div>
                <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">The Solution</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">Microsoft introduced Conditional Access to resolve
                        this problem. Conditional Access allows administrators to control what Office 365 apps users can gain
                        access to based on if they pass/fail certain conditions.</p>
                    <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/overview" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Learn More from Microsoft &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="conditions">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Policy Conditions</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">The following conditions can be controlled by
                    Conditional Access policies</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Users/Groups</h3>
                    <p class="text-slate-600 text-sm text-justify">What users do you want to control — Users can be
                        included/excluded from the policy if required. You will always get the person who is too important for
                        this policy and wants to access everything from their personal iPad. It also allows you to test policies
                        before rolling out to the wider business avoiding locking everyone out!</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Cloud Apps</h3>
                    <p class="text-slate-600 text-sm text-justify">What apps do you want to control? Conditional Access does
                        not need to apply to all of Office 365, you can be more granular and just control access to specific
                        apps — E.g. Exchange Online.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Client App</h3>
                    <p class="text-slate-600 text-sm text-justify">Control what app/software the user is connecting from to
                        the data — E.g. allow browsers but disable mobile and desktop Outlook apps.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Device Platform</h3>
                    <p class="text-slate-600 text-sm text-justify">Control what devices users can connect from — E.g. allow
                        Windows and iOS but block Android phones.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Location</h3>
                    <p class="text-slate-600 text-sm text-justify">Control what IPs can connect to Office 365 — E.g. could
                        limit this to the office external IP.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Sign-In Risk</h3>
                    <p class="text-slate-600 text-sm text-justify">Control sign-ins if Office 365/Azure thinks the sign-in
                        is not coming from the genuine user — E.g. if someone signs in from London then New York 30 mins
                        later.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="grant-controls">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Access Grant Controls</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Based on the conditions above, access can be allowed
                    with the following controls</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Require Multi-Factor Authentication</h3>
                    <p class="text-slate-600 text-sm text-justify">User is allowed in but will need to complete additional
                        security to log in, e.g. phone call, text message, or mobile app.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Require Device to be Marked as Compliant</h3>
                    <p class="text-slate-600 text-sm text-justify">Device must be Intune compliant — the device must match the
                        Intune compliance policies to be able to connect.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Require Domain Joined (Hybrid Azure AD)</h3>
                    <p class="text-slate-600 text-sm text-justify">Devices must be Hybrid Azure AD joined — Mobile Devices
                        Azure AD registered and domain joined machines are set to automatically register in their Azure AD.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Require Approved App</h3>
                    <p class="text-slate-600 text-sm text-justify">Access is only granted if a connection attempt was made by an
                        approved client app. These apps support Mobile Application Management (MAM) policies, so
                        administrators can wrap security around these apps.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="policies">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Recommended Conditional Access Policies</h2>
                <p class="text-slate-600 text-center">Step-by-step deployment guides for the most common Conditional Access
                    policies</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA01</span>
                            <span class="font-medium text-slate-900">Enforce Multi-Factor Authentication for Users</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Ensure users are only able to access the
                            Microsoft 365 system if they have multi-factor authentication setup for their account.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Sign in to the Entra ID Portal: Go to
                                    https://entra.microsoft.com/ and sign in with an account that has administrative
                                    privileges.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Navigate to Protection: In the left-hand menu, click on
                                    "Protection".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Conditional Access: Under the protection menu, select
                                    "Conditional Access".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">New Policy: Select "New Policy from Template".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Secure Foundation: Select "Secure Foundation" from the top
                                    menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Require multifactor authentication for all users: Select
                                    "Require multifactor authentication for all users" from the items below.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Adjust Policy state and save: Set policy name as per your
                                    requirements (e.g. "CA01 – Require multifactor Authentication for all users"). Set policy
                                    state to off, on, or report only. Save the policy once you are happy with the
                                    settings.</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA02</span>
                            <span class="font-medium text-slate-900">Restrict Access to Specific Countries</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Ensure users are only able to access the
                            Microsoft 365 system from their country, and block access to all other countries.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Sign in to the Entra ID Portal: Go to
                                    https://entra.microsoft.com/ and sign in with an account that has administrative
                                    privileges.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Navigate to Protection: In the left-hand menu, click on
                                    "Protection".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Conditional Access: Under the protection menu, select
                                    "Conditional Access".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Named Locations: Once in the conditional access main menu,
                                    select "Named Locations".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Navigate to Countries location: In the top menu, click on
                                    "Countries location".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Country Selection: Enter the name "Approved Countries". In
                                    the right hand menu, select the countries where your offices are located.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Save Selection: Save your selection by selecting
                                    "create".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Create policy: Select "New Policy" from the top
                                    menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Name Policy: Set name of policy (e.g. "CA02 – Block Access
                                    from Other Countries").</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Users to affect: In the "Users" menu, set the include sub
                                    menu to "all users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">11.</span><span
                                    class="text-sm text-slate-600">Exclude admin account: To ensure you are never locked out of
                                    your Microsoft 365 tenant, select the sub menu "exclude" then select your administrator
                                    account.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">12.</span><span
                                    class="text-sm text-slate-600">Client Apps: Select Client apps. Set configure to yes.
                                    De-select "Exchange ActiveSync Clients" & "Other Clients".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">13.</span><span
                                    class="text-sm text-slate-600">Set Filter for devices: Select the "Filter for devices"
                                    menu. Select yes on the "Configure" menu. Select "exclude filtered devices from policy".
                                    Set property to "IsCompliant", Operator to "equals", Value to "True". Then select
                                    Done.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">14.</span><span
                                    class="text-sm text-slate-600">Block Access: Select "Grant" menu item. Select "block access".
                                    Set "Enable policy" to "on".</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA03</span>
                            <span class="font-medium text-slate-900">Restrict Access to Types of Devices</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Ensure users are only able to access the
                            Microsoft 365 system from specific device types, and block access from un-approved device types.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "Policies" from the Conditional Access Control
                                    Panel.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Select "New Policy" from top menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Name policy "CA03 – Block un-approved Device
                                    types".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Select "Users" Menu and then select "All users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Select "Target Resources" then select "All Cloud
                                    Apps".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Select "Conditions" and then "Device Platforms".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Set Configure to "yes" and then tick "Windows Phone" &
                                    "Linux".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Select "done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Select "Grant" from left hand menu and then set to "Block
                                    Access", click "select" from the bottom.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Set policy to "on".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">11.</span><span
                                    class="text-sm text-slate-600">Select "Create".</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA04</span>
                            <span class="font-medium text-slate-900">Disable Persistent Browser Sessions</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Ensure when users close a browser on a
                            non-managed PC, the session will be logged out from Microsoft 365.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "New Policy".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Name the policy "CA04 – Disable Persistent Browser
                                    sessions".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Select "users" from right hand menu and then select "all
                                    users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Select "Target Resources" then select "All Cloud
                                    Apps".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Select "Conditions" from left hand menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Select "Client Apps" from middle menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Set configure to "yes" and then tick "Browser", then select
                                    "done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Select "Session" from right hand side menu, then tick
                                    "Persistent Browser Session". Then set the drop down menu to "Never Persistent".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Click "Select".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Set Policy to "On" and then click "Create".</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.4s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA05</span>
                            <span class="font-medium text-slate-900">Enforce App Protection Policies</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Ensure that client devices are using an App
                            Protection Policy when accessing your corporate data.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "New Policy".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Name the policy "CA05 – Require App Protection Policy".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Select "users" from right hand menu and then select "all
                                    users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Select "Target Resources" then click "Select Apps".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Click "Select" from the menu items.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">On the right hand menu tick "Office 365" then
                                    "select".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Select "Conditions" from right hand side menu, then select
                                    "Device Platform". Then set the right hand side menu configure option to "yes".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Tick "Android" and "IOS" from the options. Then click
                                    "Done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Select "Client Apps" from the middle menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Set Configure on right hand side menu to "yes", then click
                                    "browser" and "Mobile Apps and Desktop Clients". Select "done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">11.</span><span
                                    class="text-sm text-slate-600">Select "Grant Access" from left hand menu, then select
                                    "Require App protection Policy" from right hand side. Then click "Select".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">12.</span><span
                                    class="text-sm text-slate-600">Set policy to "on" and then click "Create".</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.5s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA06</span>
                            <span class="font-medium text-slate-900">Block Legacy Authentication</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Block older protocols from being able to access
                            your Microsoft 365 tenant.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "New Policy from Template".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Select "Block Legacy Authentication".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Name the policy "CA06 – Block Legacy
                                    Authentication".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Set Policy state to "on".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Click on Create.</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.6s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA07</span>
                            <span class="font-medium text-slate-900">Require MFA for Entra Join</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Enforce multi-factor authentication when users
                            are joining a device to Entra ID.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "New Policy".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Name the policy "CA07 – Require MFA to Join to Entra".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Select "users" from right hand menu and then select "all
                                    users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Select "Target Resources" then click the drop down menu.
                                    Select the "user actions" option, then tick "register or join devices".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Select "Grant" from the left hand menu, then select "grant
                                    access" from right hand menu.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Tick "require multifactor authentication" then
                                    "select".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Set policy to "on" and then click "create".</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.7s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA08</span>
                            <span class="font-medium text-slate-900">Block Personal Computers</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Block access to the Microsoft 365 system from
                            personal computers.</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Select "New Policy".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Name the policy "CA08 – Block Personal Devices".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Select "users" from right hand menu and then select "all
                                    users".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Select the "Exclude" menu, select "users and groups", enter
                                    your admin account.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Select "Target Resources" and select "all cloud
                                    apps".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Select "Conditions" menu, then select "device platforms".
                                    Select "Yes" under the configure option on the right hand side. Then tick "Windows" and
                                    "macOS". Select "done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Select "Client apps", set configure to "yes", tick "browser",
                                    "mobile apps and desktop clients", "exchange Active Sync clients" and "other
                                    clients".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Select "Filter for devices". Set to "yes" under configure. Set
                                    the expressions to: device ownership – equals – personal OR deviceownership – not equals –
                                    company. Select "done".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Select "Grant", select "Block Access" on right hand side. Click
                                    "select".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Set Enable policy to "report only".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">11.</span><span
                                    class="text-sm text-slate-600">Review and enable once settings are confirmed.</span></li>
                        </ol>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.8s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div>
                            <span class="text-blue-600 font-bold text-sm mr-2">CA09</span>
                            <span class="font-medium text-slate-900">Lock Down Access to Company Offices</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Restrict access so that users can only connect to
                            Office 365 if they are coming from the corporate IP range (external).</p>
                        <p class="text-sm font-semibold text-slate-900 mb-3">Steps:</p>
                        <ol class="space-y-2">
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span><span
                                    class="text-sm text-slate-600">Navigate to Azure Active Directory in the Azure
                                    Portal.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span><span
                                    class="text-sm text-slate-600">Under the Manage section, click on Security, then select
                                    Conditional Access.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span><span
                                    class="text-sm text-slate-600">Click the + New Policy button at the top of the
                                    page.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span><span
                                    class="text-sm text-slate-600">Give the policy a meaningful name, such as "Restrict Access
                                    to Company Offices".</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span><span
                                    class="text-sm text-slate-600">Under Assignments, click on Users and groups. Choose all
                                    users or specific security groups.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">6.</span><span
                                    class="text-sm text-slate-600">Under Assignments, select Cloud apps or actions. Choose all
                                    Microsoft 365 apps or All cloud apps.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">7.</span><span
                                    class="text-sm text-slate-600">Under Assignments, click on Conditions, then select
                                    Locations.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">8.</span><span
                                    class="text-sm text-slate-600">Set Configure to Yes. Click on Include, then choose Any
                                    location. Click on Exclude, then select your corporate IP range.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">9.</span><span
                                    class="text-sm text-slate-600">Under Access controls, click Grant. Select Grant access, and
                                    enable Require multi-factor authentication if necessary.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">10.</span><span
                                    class="text-sm text-slate-600">Set the Enable policy switch to On.</span></li>
                            <li class="flex items-start gap-3"><span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">11.</span><span
                                    class="text-sm text-slate-600">Review your settings, then click Create to apply the
                                    policy.</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="gotchas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Gotchas</h2>
                <p class="text-slate-600 text-center">As with most Microsoft solutions, Conditional Access is not without its
                    flaws.</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-amber-200 hover:border-amber-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-amber-500 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Client App Compatibility</h3>
                    <p class="text-slate-600 text-sm text-justify">Not all client apps support Conditional Access — the Client
                        App needs to support Modern Authentication. e.g. Outlook 2016 or Outlook 2013 (with a reg key change).
                        Outlook 2010 will not work with Conditional Access and the user will be allowed to connect in.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-amber-200 hover:border-amber-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-amber-500 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Legacy App Pressure</h3>
                    <p class="text-slate-600 text-sm text-justify">Upgrade to Outlook 2016 if your business is still using
                        this. Any 3rd party apps (e.g. Outlook Plugins) that don't support above Outlook 2010, put pressure on
                        the vendor to fix this. Don't let your Office 365 migration be hindered by a non-future-proof
                        app.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Useful Links</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Conditional Access Overview</h3>
                    <p class="text-slate-600 text-sm mb-4">Learn about Microsoft Entra Conditional Access — the if-then
                        statement engine that controls access to resources based on conditions.</p>
                    <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/overview" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Plan a Conditional Access Deployment</h3>
                    <p class="text-slate-600 text-sm mb-4">Microsoft's guide for planning and deploying Conditional Access
                        policies in your organisation effectively.</p>
                    <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/plan-conditional-access"
                        target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Common Conditional Access Policies</h3>
                    <p class="text-slate-600 text-sm mb-4">Explore common Conditional Access policy examples including
                        requiring MFA, blocking legacy authentication, and more.</p>
                    <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/concept-common-conditional-access-policy-examples"
                        target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Conditional Access Documentation</h3>
                    <p class="text-slate-600 text-sm mb-4">Full Microsoft documentation for Conditional Access — including
                        how-to guides, troubleshooting, and deployment best practices.</p>
                    <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="benefits">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Conditional Access</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Why organisations implement Conditional Access for
                    Microsoft 365</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Protect Against Unauthorised Access</h3>
                    <p class="text-slate-600 text-sm text-justify">Conditional Access ensures that only verified users and
                        compliant devices can access corporate resources, significantly reducing the risk of data breaches.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Enforce Multi-Factor Authentication</h3>
                    <p class="text-slate-600 text-sm text-justify">Require additional verification beyond just a username and
                        password, adding a critical layer of security to the login process.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Control Access by Location</h3>
                    <p class="text-slate-600 text-sm text-justify">Restrict Office 365 access to specific geographic locations
                        or corporate IP ranges, preventing access from untrusted networks.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Device-Level Security</h3>
                    <p class="text-slate-600 text-sm text-justify">Ensure only Intune-compliant and company-owned devices can
                        access corporate data, blocking personal and unmanaged devices.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.4s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Granular Application Control</h3>
                    <p class="text-slate-600 text-sm text-justify">Apply security policies to specific apps rather than all of
                        Office 365, allowing tailored access controls for different business needs.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.5s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Zero Trust Security Model</h3>
                    <p class="text-slate-600 text-sm text-justify">Implement a comprehensive Zero Trust approach by combining
                        identity, location, device, and risk signals to make access decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about Microsoft 365 Conditional Access</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is Conditional Access in Microsoft 365?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Conditional Access is a security feature in Microsoft
                            Entra ID that controls access to resources based on specific conditions such as user identity,
                            location, device compliance, and risk level. It allows organisations to enforce policies like MFA,
                            device compliance, and location-based restrictions.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Do I need a special license for Conditional
                            Access?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. Conditional Access requires an Azure AD Premium
                            license (P1 or P2), which is also included in the Enterprise Mobility and Security Suite (EMS) or
                            Microsoft 365 E3/E5 licenses.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can I exclude specific users from a Conditional Access
                            policy?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. Each policy allows you to include or exclude
                            specific users or groups. It's recommended to always exclude your admin account from block policies
                            to avoid being locked out.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What happens if a user doesn't meet the Conditional
                            Access requirements?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">If a user doesn't meet the conditions defined in the
                            policy, access will be blocked. The user will see an error message indicating they don't meet the
                            requirements to access the resource.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative" style="animation-delay: 0.4s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can I test a Conditional Access policy before
                            enforcing it?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. You can set a policy to "Report-only" mode, which
                            allows you to see the impact of the policy without actually enforcing it. This helps you test and
                            verify before going live.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

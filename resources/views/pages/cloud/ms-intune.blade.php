@extends('layouts.app')

@section('title', 'Microsoft Intune | Bismillah Computer & Technology')
@section('description',
    'Cloud-based endpoint management for mobile devices, laptops, and desktops with Microsoft
    Intune.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft
                    <span class="text-brand-blue block mt-2"> Intune</span></h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Intune is a
                    cloud-based endpoint management solution that helps organisations manage and secure devices, apps, and
                    data across their entire fleet — whether corporate-owned or personal.</p>
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
                    <a href="#all-features"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md transition-all hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                        ALL FEATURES
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
                <img alt="Microsoft Intune" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/intune/intune.svg" />
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
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up flex justify-center">
                <img src="/images/cloud/microsoft-solutions/intune/section.svg" alt="Microsoft Intune"
                    class="w-full max-w-lg object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Intune</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft Intune?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft Intune is a cloud-based endpoint
                    management solution that helps organisations manage and secure devices, apps, and data across their entire
                    fleet — whether corporate-owned or personal. As part of the Microsoft Endpoint Manager suite, Intune provides
                    a unified platform for device configuration, application deployment, compliance enforcement, and security
                    management.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Intune enables IT teams to manage Windows,
                    macOS, iOS, Android, and Linux devices from a single console. It supports both Mobile Device Management (MDM)
                    and Mobile Application Management (MAM), giving organisations flexibility in how they control corporate data on
                    both managed and unmanaged devices.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">With features like Windows Autopilot for
                    zero-touch deployment, Endpoint Analytics for performance insights, and integration with Microsoft Defender for
                    threat detection, Intune provides comprehensive endpoint management that scales with your organisation's needs.</p>
                <a href="#key-features"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features <svg
                        class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    {{-- Key Features Section --}}
    <section class="py-24 bg-white" id="key-features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Key Features of Microsoft Intune</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Everything you need for comprehensive endpoint management and
                    device security</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17l-5.384 3.18A1.5 1.5 0 014 17.097V5.903a1.5 1.5 0 012.036-1.402l5.384 3.18a1.5 1.5 0 010 2.588z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75v10.5M12.75 4.5v15M8.25 6.75v10.5" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Device Configuration</h3>
                    <p class="text-slate-600 text-sm text-justify">Deploy configuration profiles and compliance policies across
                        all device platforms from a single cloud console.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">App Deployment</h3>
                    <p class="text-slate-600 text-sm text-justify">Push, update, and manage applications across your fleet with
                        support for MAM on unmanaged devices.</p>
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
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Windows Autopilot</h3>
                    <p class="text-slate-600 text-sm text-justify">Zero-touch Windows device deployment that configures devices
                        automatically when first powered on.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Endpoint Analytics</h3>
                    <p class="text-slate-600 text-sm text-justify">Monitor device performance, startup times, and user experience
                        with proactive remediation scripts.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Security & Compliance</h3>
                    <p class="text-slate-600 text-sm text-justify">Automated compliance checks, Defender integration, and
                        conditional access to protect corporate resources.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Remote Device Management</h3>
                    <p class="text-slate-600 text-sm text-justify">Full MDM with selective wipe, device categories, and
                        internet-based management for remote workers.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- All Features Section --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Intune Features</h2>
                <p class="mt-4 text-slate-600">Comprehensive endpoint management capabilities across Microsoft Intune</p>
            </div>
            <div class="space-y-4">
                {{-- Device Configuration & Policies --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.42 15.17l-5.384 3.18A1.5 1.5 0 014 17.097V5.903a1.5 1.5 0 012.036-1.402l5.384 3.18a1.5 1.5 0 010 2.588z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75v10.5M12.75 4.5v15M8.25 6.75v10.5" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Device Configuration & Policies</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Configuration Profiles</h4>
                            <p class="text-sm text-slate-600 text-justify">Create and deploy device configuration profiles to
                                enforce settings across Windows, macOS, iOS, and Android devices — including Wi-Fi, VPN, email,
                                and security settings.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Compliance Policies</h4>
                            <p class="text-sm text-slate-600 text-justify">Define compliance rules (e.g., minimum OS version,
                                encryption enabled) and automatically take actions on non-compliant devices such as blocking
                                access or notifying users.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Settings Catalog</h4>
                            <p class="text-sm text-slate-600 text-justify">Use the Settings Catalog to access a comprehensive
                                library of configurable settings, making it easier to find and apply the exact policies you
                                need.</p>
                        </div>
                    </div>
                </div>

                {{-- Application Management --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Application Management</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">App Deployment</h4>
                            <p class="text-sm text-slate-600 text-justify">Deploy, update, and remove applications across
                                managed devices — including Microsoft 365 apps, line-of-business apps, and third-party
                                software.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Mobile Application Management (MAM)</h4>
                            <p class="text-sm text-slate-600 text-justify">Protect corporate data within apps on unmanaged
                                devices with policies like copy/paste restrictions, data encryption, and selective wipe —
                                without requiring full device enrollment.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">App Protection Policies</h4>
                            <p class="text-sm text-slate-600 text-justify">Enforce data loss prevention at the application
                                level, ensuring corporate information is protected even on personal devices.</p>
                        </div>
                    </div>
                </div>

                {{-- Windows Autopilot --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Windows Autopilot</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Zero-Touch Deployment</h4>
                            <p class="text-sm text-slate-600 text-justify">Deploy Windows devices directly to end users without
                                IT needing to physically image or configure them. Devices automatically configure themselves
                                when first powered on.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">User-Driven Mode</h4>
                            <p class="text-sm text-slate-600 text-justify">Users sign in with their corporate credentials and
                                Autopilot applies all necessary configurations, policies, and apps — making the device ready
                                for work in minutes.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Self-Deploying Mode</h4>
                            <p class="text-sm text-slate-600 text-justify">For kiosk or shared device scenarios, Autopilot can
                                automatically deploy and configure devices without any user interaction required.</p>
                        </div>
                    </div>
                </div>

                {{-- Endpoint Analytics --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Endpoint Analytics</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Performance Insights</h4>
                            <p class="text-sm text-slate-600 text-justify">Monitor device boot times, logon performance, and
                                application reliability to identify and resolve issues affecting user productivity.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Startup Score</h4>
                            <p class="text-sm text-slate-600 text-justify">Track and benchmark startup performance across your
                                organisation to ensure devices are booting quickly and efficiently.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Proactive Remediations</h4>
                            <p class="text-sm text-slate-600 text-justify">Create and deploy scripts that automatically detect
                                and fix common issues before they impact end users.</p>
                        </div>
                    </div>
                </div>

                {{-- Security & Compliance --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Security & Compliance</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Device Compliance</h4>
                            <p class="text-sm text-slate-600 text-justify">Ensure all devices meet your organisation's security
                                standards with automated compliance checks and conditional access enforcement.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Integration with Defender</h4>
                            <p class="text-sm text-slate-600 text-justify">Integrate with Microsoft Defender for Endpoint to
                                provide real-time threat detection, vulnerability management, and automated response
                                capabilities.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Conditional Access</h4>
                            <p class="text-sm text-slate-600 text-justify">Enforce access controls based on device compliance,
                                location, user risk level, and other signals to protect corporate resources.</p>
                        </div>
                    </div>
                </div>

                {{-- Mobile Device Management (MDM) --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Mobile Device Management (MDM)</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Full Device Enrollment</h4>
                            <p class="text-sm text-slate-600 text-justify">Enroll corporate-owned and BYOD devices to gain full
                                management capabilities including remote wipe, device encryption, and passcode
                                enforcement.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Selective Wipe</h4>
                            <p class="text-sm text-slate-600 text-justify">Remotely remove only corporate data from a device
                                while leaving personal data intact — ideal for offboarding employees or lost devices.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Device Categories</h4>
                            <p class="text-sm text-slate-600 text-justify">Organise devices into categories based on department,
                                location, or usage to simplify policy and profile assignment.</p>
                        </div>
                    </div>
                </div>

                {{-- Identity & Access Management --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Identity & Access Management</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Azure AD Integration</h4>
                            <p class="text-sm text-slate-600 text-justify">Seamlessly integrate with Azure Active Directory for
                                device registration, user authentication, and group-based policy assignment.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Multi-Factor Authentication</h4>
                            <p class="text-sm text-slate-600 text-justify">Enforce MFA requirements for device enrollment and
                                access to corporate resources, adding an extra layer of security.</p>
                        </div>
                    </div>
                </div>

                {{-- Cloud Management Gateway --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Cloud Management Gateway</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Internet-Based Management</h4>
                            <p class="text-sm text-slate-600 text-justify">Manage devices outside the corporate network without
                                requiring a VPN, enabling remote workers to receive policies and updates directly over the
                                internet.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Co-Management</h4>
                            <p class="text-sm text-slate-600 text-justify">Use Intune alongside Configuration Manager (SCCM) to
                                gradually shift workloads to the cloud while maintaining on-premises management where
                                needed.</p>
                        </div>
                    </div>
                </div>

                {{-- Reporting & Monitoring --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Reporting & Monitoring</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Device Inventory</h4>
                            <p class="text-sm text-slate-600 text-justify">Gain visibility into your entire device fleet with
                                detailed hardware and software inventory reports.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Audit Logs</h4>
                            <p class="text-sm text-slate-600 text-justify">Track all administrative actions and changes made in
                                Intune for compliance auditing and troubleshooting.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Diagnostic Reports</h4>
                            <p class="text-sm text-slate-600 text-justify">Generate diagnostic reports for individual devices to
                                troubleshoot configuration issues and compliance problems.</p>
                        </div>
                    </div>
                </div>

                {{-- Patch Management --}}
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                            </span>
                            <span class="font-medium text-slate-900">Patch Management</span>
                        </div>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5 space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Windows Update for Business</h4>
                            <p class="text-sm text-slate-600 text-justify">Control the deployment of Windows updates across your
                                fleet with deferral rules, maintenance windows, and ring-based rollout strategies.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Feature Updates</h4>
                            <p class="text-sm text-slate-600 text-justify">Manage Windows feature update adoption with phased
                                rollouts and compatibility checks to ensure a smooth upgrade experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Useful Links Section --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Microsoft Intune Overview</h3>
                    <p class="text-slate-600 text-sm mb-4">Learn about Microsoft Intune — a cloud-based endpoint management
                        solution for managing devices, apps, and security across your organisation.</p>
                    <a href="https://www.microsoft.com/en-us/security-business/siem-and-xdr/microsoft-defender-endpoint"
                        target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Intune Documentation</h3>
                    <p class="text-slate-600 text-sm mb-4">Technical documentation for Microsoft Intune — including deployment
                        guides, configuration references, and best practices.</p>
                    <a href="https://learn.microsoft.com/en-us/mem/intune/" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Windows Autopilot Overview</h3>
                    <p class="text-slate-600 text-sm mb-4">Understand how Windows Autopilot simplifies device deployment with
                        zero-touch configuration and user-driven setup.</p>
                    <a href="https://learn.microsoft.com/en-us/windows/deployment/windows-autopilot/" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Intune Pricing & Plans</h3>
                    <p class="text-slate-600 text-sm mb-4">Compare Microsoft Intune plans and pricing — find the right option
                        for your organisation's endpoint management needs.</p>
                    <a href="https://www.microsoft.com/en-us/microsoft-365/enterprise/mobility-security-comparison"
                        target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Section --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Benefits of Using Microsoft Intune</h2>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">Why organisations choose Intune for endpoint management</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Unified Endpoint Management</h3>
                    <p class="text-slate-600 text-sm text-justify">Manage Windows, macOS, iOS, Android, and Linux devices from
                        a single cloud-based console, eliminating the need for multiple management tools.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Zero-Touch Deployment</h3>
                    <p class="text-slate-600 text-sm text-justify">Windows Autopilot enables devices to be configured and
                        deployed directly to end users without IT intervention, reducing setup time from hours to
                        minutes.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Flexible BYOD Support</h3>
                    <p class="text-slate-600 text-sm text-justify">MAM policies protect corporate data on personal devices
                        without requiring full device enrollment, giving employees flexibility while maintaining
                        security.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Proactive Issue Resolution</h3>
                    <p class="text-slate-600 text-sm text-justify">Endpoint Analytics identifies performance issues and
                        proactively remediates common problems before they impact end users.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Simplified Compliance</h3>
                    <p class="text-slate-600 text-sm text-justify">Automated compliance checks and conditional access policies
                        ensure devices always meet your organisation's security standards.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all"
                    style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Reduced IT Overhead</h3>
                    <p class="text-slate-600 text-sm text-justify">Cloud-based management eliminates the need for on-premises
                        infrastructure, while co-management allows gradual migration from Configuration Manager.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Frequently Asked Questions</h2>
                <p class="mt-4 text-slate-600">Common questions about Microsoft Intune</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is Microsoft Intune?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Microsoft Intune is a cloud-based endpoint management
                            solution that helps organisations manage and secure devices, apps, and data across their entire fleet.
                            It provides Mobile Device Management (MDM) and Mobile Application Management (MAM) capabilities from
                            a single console.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What devices can Intune manage?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Intune supports management of Windows, macOS, iOS,
                            Android, and Linux devices. It provides platform-specific features while maintaining a consistent
                            management experience across all operating systems.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is Windows Autopilot?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Windows Autopilot is a collection of technologies used
                            to set up and pre-configure new devices, getting them ready for productive use. It enables zero-touch
                            deployment where devices automatically configure themselves when first powered on, without IT needing
                            to physically image them.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">How does Intune handle BYOD scenarios?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Intune supports BYOD through Mobile Application
                            Management (MAM), which protects corporate data within apps on personal devices without requiring full
                            device enrollment. Users maintain privacy over their personal data while corporate information remains
                            protected.</p>
                    </div>
                </div>

                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can Intune work alongside Configuration Manager?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. Intune supports co-management with Configuration
                            Manager (SCCM), allowing organisations to gradually shift management workloads to the cloud while
                            maintaining on-premises management where needed. This enables a phased migration to cloud-based
                            endpoint management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

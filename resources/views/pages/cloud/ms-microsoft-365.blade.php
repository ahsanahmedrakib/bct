@extends('layouts.app')

@section('title', 'Microsoft 365 | Bismillah Computer & Technology')
@section('description',
    'Complete productivity suite with Word, Excel, PowerPoint, Outlook and cloud storage powered by
    Microsoft 365.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft 365
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Everything your team
                    needs to work, collaborate, and stay secure — anywhere. Microsoft 365 is a cloud-based productivity and
                    security platform designed to support modern businesses of all sizes.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft 365" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/micrsoft-365/microsoft-365.png" />
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
                <img src="/images/cloud/microsoft-solutions/micrsoft-365/office-365.png" alt="Microsoft 365 Suite"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft 365 for Business</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Who is it for?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 is a cloud-based
                    productivity and collaboration platform that includes Microsoft Word, Excel, PowerPoint, Outlook, Teams,
                    SharePoint, and advanced security tools. It enables businesses to work securely from anywhere.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">The platform includes business-class
                    email, cloud file storage, and real-time collaboration tools that allow teams to communicate, share
                    documents, and collaborate seamlessly. With tools like Microsoft Teams, SharePoint Online, and OneDrive,
                    staff can work together effectively across office, remote, and hybrid environments.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Microsoft 365 also delivers built-in
                    cyber security, identity management, and device management to help protect users, devices, and business
                    data. By combining productivity, collaboration, and security into a single platform, Microsoft 365 helps
                    businesses work smarter, stay connected, and remain protected as they grow.</p>
                <a href="#plans" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    View Plans <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="plans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Microsoft 365 Product Bundles</h2>
                <p class="text-slate-600 text-center max-w-3xl mx-auto mb-12 leading-relaxed">Microsoft 365 Business is
                    available in three core product bundles designed to support modern businesses as they grow. Each bundle
                    builds on the last, adding functionality, flexibility, and security.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up relative h-full">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-2xl font-bold mb-6 text-center">Basic</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Exchange</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">OneDrive</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">SharePoint</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Teams</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="reveal reveal-fade-up relative h-full">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-blue-400 text-white text-xs font-bold px-4 py-1 rounded-full">Most Popular</span>
                        <h3 class="text-2xl font-bold mb-6 text-center">Standard</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Exchange</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">OneDrive</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">SharePoint</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Teams</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Outlook</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Word</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Excel</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">PowerPoint</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Publisher</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Access</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Azure</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="reveal reveal-fade-up relative h-full">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-2xl font-bold mb-6 text-center">Premium</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Exchange</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">OneDrive</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">SharePoint</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Teams</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Outlook</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Word</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Excel</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">PowerPoint</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Publisher</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Access</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Azure P2</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 shrink-0 text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="text-slate-600">Intune</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Microsoft 365 Cloud offers a number of benefits for
                    businesses</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Work from Anywhere</h3>
                    <p class="text-slate-600 text-sm text-justify">Access your emails, files, and apps securely from home,
                        the office, or on the road using any internet-connected device at any time.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Professional Business Email</h3>
                    <p class="text-slate-600 text-sm text-justify">Use a reliable business email with shared calendars,
                        contacts, and scheduling tools that help teams stay organised, professional, and connected every
                        day.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Cloud File Storage</h3>
                    <p class="text-slate-600 text-sm text-justify">Store files safely in the cloud and access them instantly
                        from any device, without USB drives, emails, or worrying about losing important documents.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Easy File Sharing</h3>
                    <p class="text-slate-600 text-sm text-justify">Share files and folders with coworkers using simple
                        links, control access permissions, and always work from the latest version without confusion.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Team Chat & Meetings</h3>
                    <p class="text-slate-600 text-sm text-justify">Chat, call, video meet, and collaborate with your team in
                        one place, reducing emails and making communication faster, clearer, and more productive.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Office Apps Included</h3>
                    <p class="text-slate-600 text-sm text-justify">Microsoft 365 Cloud includes Word, Excel, PowerPoint, and
                        other popular Office apps allowing employees to create, edit, and share documents anywhere.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Automatic File Saving</h3>
                    <p class="text-slate-600 text-sm text-justify">Your work saves automatically while you edit, protecting
                        files from crashes, mistakes, or accidental deletion, and allowing easy recovery when needed.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Works on All Devices</h3>
                    <p class="text-slate-600 text-sm text-justify">Use the same apps and files on your desktop, laptop,
                        tablet, or phone, with everything syncing automatically across all your devices.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hover:border-blue-300 transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Built-In Security</h3>
                    <p class="text-slate-600 text-sm text-justify">Protect accounts and data with secure sign-ins, activity
                        monitoring, and safeguards that help keep business information safe from unauthorised access.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="collaboration">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full order-2 lg:order-1">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Team Collaboration</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Microsoft 365 Collaboration
                    Tools</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Microsoft 365 team collaboration tools
                    empower organisations to work smarter, faster, and more securely in today's modern workplace. At the
                    centre is Microsoft Teams, the hub for chat, video meetings, file sharing, and real-time communication.
                    Supporting this is SharePoint Online, which provides structured document management, intranet sites, and
                    team workspaces, while OneDrive for Business enables secure personal file storage and seamless
                    co-authoring.</p>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Microsoft Teams</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>SharePoint Online</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>OneDrive for Business</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Microsoft Planner</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Microsoft To Do</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Microsoft Loop</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Viva Engage</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Microsoft Whiteboard</span>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-fade-up flex justify-center order-1 lg:order-2">
                <img src="/images/cloud/microsoft-solutions/micrsoft-365/collaboration.png" alt="Microsoft 365 Collaboration"
                    class="object-cover" loading="lazy" />
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="sharepoint">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up flex justify-center">
                <img src="/images/cloud/microsoft-solutions/micrsoft-365/microsoft-365.png" alt="SharePoint & OneDrive"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full order-1 lg:order-2">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Cloud File Storage</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">SharePoint & OneDrive</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 SharePoint and OneDrive
                    provide businesses with secure, cloud-based file storage and document management designed for modern
                    work. Together, they replace traditional file servers with a flexible, scalable platform accessible from
                    anywhere.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">OneDrive gives each user their own
                    secure workspace for storing, syncing, and sharing files across devices. SharePoint enables teams to
                    collaborate using shared libraries, structured folders, permissions, and version control.</p>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Secure File Sharing</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Anywhere Access</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Version Control</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Real-Time Co-Authoring</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="copilot">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full order-2 lg:order-1">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">AI-Powered Productivity</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Microsoft Copilot for
                    Microsoft 365</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft 365 Copilot is an AI-powered
                    assistant designed to help users work faster, smarter, and more efficiently using the tools they already
                    know. Embedded directly into Word, Excel, Outlook, Teams, PowerPoint, and SharePoint, Copilot turns
                    everyday work into simple, guided tasks.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Copilot can draft documents, rewrite
                    content, summarise long emails, analyse data, and generate insights from spreadsheets. In Microsoft
                    Teams, it captures meeting summaries, action items, and key discussion points, helping teams stay aligned
                    and productive.</p>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>AI-Powered Productivity</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Work Faster with AI</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Smart Content Creation</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>AI Meeting Summaries</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Data Insights & Analysis</span>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-fade-up flex justify-center order-1 lg:order-2">
                <img src="/images/cloud/microsoft-solutions/micrsoft-365/copilot.png" alt="Microsoft Copilot AI"
                    class="object-cover" loading="lazy" />
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-900 text-white" id="security">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center max-w-3xl mx-auto mb-12">
                <span class="text-blue-400 font-bold text-sm tracking-wide mb-3 block">Advanced Security</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Cyber Security & Advanced Features</h2>
                <p class="text-slate-300 text-sm leading-relaxed">Protect users, devices, and data in the workplace.
                    Microsoft 365 provides a comprehensive, cloud-based security platform designed to protect modern
                    businesses from today's evolving cyber threats.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal reveal-fade-up flex items-start gap-4 bg-slate-800/80 border border-slate-700/60 hover:border-blue-500/50 rounded-xl p-5 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-bold text-white mb-1">Device & User Protection</h3>
                        <p class="text-xs text-slate-300 leading-relaxed text-justify">Protect users, devices, and data in
                            the workplace with advanced threat protection.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-4 bg-slate-800/80 border border-slate-700/60 hover:border-blue-500/50 rounded-xl p-5 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-bold text-white mb-1">Multi-Factor Authentication</h3>
                        <p class="text-xs text-slate-300 leading-relaxed text-justify">Add an extra layer of security with
                            MFA to prevent unauthorised access to accounts.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-4 bg-slate-800/80 border border-slate-700/60 hover:border-blue-500/50 rounded-xl p-5 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-bold text-white mb-1">Conditional Access Policies</h3>
                        <p class="text-xs text-slate-300 leading-relaxed text-justify">Control who can access what, when, and
                            from where with zero-trust access controls.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-4 bg-slate-800/80 border border-slate-700/60 hover:border-blue-500/50 rounded-xl p-5 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-bold text-white mb-1">Endpoint Security</h3>
                        <p class="text-xs text-slate-300 leading-relaxed text-justify">Ensure only trusted and secure devices
                            can access corporate systems.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-4 bg-slate-800/80 border border-slate-700/60 hover:border-blue-500/50 rounded-xl p-5 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a48.667 48.667 0 00-1.418 8.773 7.46 7.46 0 01-1.19-3.467zM12.75 10.5a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm.75 3.75a.75.75 0 100-1.5.75.75 0 000 1.5zm-.75-6a.75.75 0 10-1.5 0 .75.75 0 001.5 0z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-bold text-white mb-1">Data Protection</h3>
                        <p class="text-xs text-slate-300 leading-relaxed text-justify">Classify, encrypt, and prevent the
                            loss of sensitive information across your organisation.</p>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-fade-up mt-12 bg-slate-800/60 border border-slate-700/60 rounded-2xl p-8">
                <h3 class="text-xl font-bold text-white mb-4">Microsoft 365 Data Protection</h3>
                <p class="text-slate-300 text-sm leading-relaxed text-justify mb-4">Microsoft 365 data protection is built on
                    enterprise-grade security designed to safeguard business information across emails, files, devices, and
                    cloud applications. Using Microsoft Defender, Advanced Threat Protection, and anti-phishing policies,
                    Microsoft 365 protects against malware, ransomware, and zero-day attacks in real time.</p>
                <p class="text-slate-300 text-sm leading-relaxed text-justify">Sensitive information is secured through Data
                    Loss Prevention (DLP) policies, which automatically detect and prevent unauthorised sharing of
                    confidential data. Access to data is controlled using Multi-Factor Authentication (MFA) and Conditional
                    Access policies, reducing the risk of unauthorised access.</p>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center mb-12">Common questions about Microsoft 365</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is Microsoft 365?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Microsoft 365 is a cloud-based
                            productivity and collaboration platform that includes Microsoft Word, Excel, PowerPoint, Outlook,
                            Teams, SharePoint, and advanced security tools. It enables businesses to work securely from
                            anywhere.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is included in Microsoft 365 for business?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Microsoft 365 business plans include
                            email hosting (Exchange Online), cloud file storage (OneDrive & SharePoint), Microsoft Teams
                            collaboration, desktop Office apps, device management, and built-in cybersecurity features.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Is Microsoft 365 secure?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Yes. Microsoft 365 includes multi-factor
                            authentication (MFA), conditional access policies, encryption, data loss prevention (DLP), and
                            Microsoft Defender security tools to protect business data.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can Microsoft 365 support remote work?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Absolutely. Microsoft 365 is designed for
                            hybrid and remote work environments, allowing secure access to files, email, and collaboration
                            tools from any device.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is the difference between Business Basic, Standard, and Premium?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Business Basic includes web apps and
                            email, Business Standard adds desktop Office apps, and Business Premium includes advanced security
                            and device management with Microsoft Intune.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Does Microsoft 365 include backup?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Microsoft provides data retention, but many
                            businesses implement third-party backup solutions for enhanced protection and recovery.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.parentElement.classList.toggle('open')" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can Microsoft 365 scale with business growth?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300 faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Yes. Microsoft 365 is highly scalable,
                            making it suitable for small businesses through to enterprise organisations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .open .faq-content {
            max-height: 500px;
        }
        .open .faq-icon {
            transform: rotate(180deg);
        }
    </style>

@endsection

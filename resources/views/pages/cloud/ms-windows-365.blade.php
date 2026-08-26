@extends('layouts.app')

@section('title', 'Windows 365 | Bismillah Computer & Technology')
@section('description',
    'Cloud PC solution streaming your personalised Windows experience to any device with Windows
    365.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <p class="text-blue-600 font-bold text-sm tracking-wide">Microsoft 365</p>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Windows 365</h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Windows 365 is a
                    cloud-based desktop infrastructure service that streams a full Windows experience — apps, data, settings,
                    and security — to any device, anywhere. Known as Cloud PCs, Windows 365 provides a consistent, secure,
                    and always-current computing environment without the need for traditional on-premise hardware.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Windows 365" loading="lazy" class="rounded-lg"
                    src="/images/cloud/microsoft-solutions/windows-365/windows-365.png" />
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

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up flex justify-center">
                <img src="/images/cloud/microsoft-solutions/windows-365/section-1.png" alt="Windows 365 Cloud PC"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Windows 365 Cloud PC</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Windows 365?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Windows 365 is a cloud-based desktop
                    infrastructure (VDI) service from Microsoft that streams a complete Windows experience to any device. It
                    provides organisations with a secure, always-current Cloud PC that can be accessed from anywhere —
                    eliminating the complexity of traditional on-premise VDI solutions.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Unlike traditional hosted environments
                    that are often shared and commoditised, Windows 365 Cloud PCs are customised to your specific needs and
                    hosted in your own private environment, ensuring high levels of performance and availability. Virtual
                    Machines rely less on the horsepower of end-user devices, significantly driving down costs by extending the
                    life of existing PCs or replacing them with more affordable thin and zero clients.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">The simplified management model of
                    Windows 365 further drives down total IT costs by enabling your technology and IT staff to work more
                    efficiently — consolidating control, automating delivery, and protecting user compute resources. Windows 365
                    empowers employees to be more productive by improving desktop reliability and enabling a consistently great
                    experience across devices, locations, media, and connections.</p>
                <a href="#features"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    Key Features <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Key Features of Windows 365 Cloud PC</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Everything you need for a secure, cloud-based desktop experience</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cloud PC Streaming</h3>
                    <p class="text-slate-600 leading-relaxed">Stream a full Windows desktop experience to any device over the internet — no local hardware requirements.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Any Device Access</h3>
                    <p class="text-slate-600 leading-relaxed">Access your Cloud PC from Windows, macOS, iOS, Android, or Linux — consistent experience everywhere.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Centralised Management</h3>
                    <p class="text-slate-600 leading-relaxed">Manage and provision Cloud PCs from a single location using Microsoft Intune — no on-premise infrastructure needed.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Enterprise Security</h3>
                    <p class="text-slate-600 leading-relaxed">Built-in security with data residency, encryption, compliance controls, and integration with Microsoft Defender.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Always Current</h3>
                    <p class="text-slate-600 leading-relaxed">Cloud PCs are always up to date with the latest Windows updates, patches, and security fixes — no manual maintenance required.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Rapid Provisioning</h3>
                    <p class="text-slate-600 leading-relaxed">Deploy new Cloud PCs in minutes rather than days or weeks, enabling faster onboarding and scaling.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-User Support</h3>
                    <p class="text-slate-600 leading-relaxed">Provision different resources and configurations to different users based on role and requirements.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Disaster Recovery</h3>
                    <p class="text-slate-600 leading-relaxed">Virtual desktops that are out of compliance can be effortlessly reverted to their last known good states. Data resides entirely within the data centre.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Data Residency & Compliance</h3>
                    <p class="text-slate-600 leading-relaxed">Data stays within the data centre, improving backup and compliance while reducing inherent security risks.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="why-vdi">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Why Consider Windows 365 Cloud PC?</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">A few reasons to consider cloud-based desktop infrastructure</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Customised Private Environment</h3>
                    <p class="text-slate-600 text-sm text-justify">While a traditional hosted environment is often shared and commoditised, Windows 365 Cloud PCs are customised to your specific needs and hosted in your own private environment, ensuring high levels of performance and availability.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Reduced Hardware Costs</h3>
                    <p class="text-slate-600 text-sm text-justify">Virtual Machines rely less on the horsepower of the end-user devices themselves, significantly driving down costs by extending the life span of your existing PCs or replacing PCs with more affordable thin and zero clients.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Simplified Management</h3>
                    <p class="text-slate-600 text-sm text-justify">The simplified management model further drives down total IT costs by enabling your technology and IT staff to work more efficiently by consolidating control, automating delivery, and protecting user compute resources.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Improved Productivity</h3>
                    <p class="text-slate-600 text-sm text-justify">Empower employees to be more productive by improving desktop reliability and enabling a consistently great experience across devices, locations, media, and connections — reducing downtime and limiting the need to contact tech support.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Enhanced Security</h3>
                    <p class="text-slate-600 text-sm text-justify">Reduces inherent security risks to an organisation by leveraging secure, compliant data centres with built-in security controls.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Simplified Disaster Recovery</h3>
                    <p class="text-slate-600 text-sm text-justify">Disaster recovery is significantly simplified because virtual desktops that are out of compliance can be effortlessly reverted back to their last known good states. Data backup is improved because data resides entirely within the data centre.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="is-it-for-you">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Is Windows 365 Cloud PC for You?</h2>
                <p class="text-slate-600">If you can answer &ldquo;yes&rdquo; to any of these questions, Cloud PC might be a good fit for you!</p>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Are you tired of your slow hosted solution?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.1s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Are you tired of unexplained outages and downtime?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.2s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Are you tired of a lag in performance?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.3s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Are you tired of not getting clear-cut answers from your IT provider as to why there are outages and why things break?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Do you have a need for customised technology?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.1s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Do you have &ldquo;power users&rdquo; with heavy usage requirements?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.2s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Do you require standardisation across workstations?</span>
                </div>
                <div class="reveal reveal-fade-up flex items-start gap-3 border-2 border-blue-100 hover:border-blue-300 rounded-xl p-5 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all" style="animation-delay: 0.3s">
                    <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">Do you require provisioning of different resources to different users?</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="partner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full order-2 lg:order-1">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl font-bold text-blue-900 mb-4">A Partner You Can Trust</h2>
                <p class="text-slate-600 text-sm mb-6 leading-relaxed">Bismillah Computer & Technology's personalised touch and
                    end-to-end support ensures the ongoing success of your Windows 365 solution. As a certified VMware Enterprise
                    Solution provider, Bismillah Computer & Technology retains the technical expertise and business acumen to
                    provide you with a Cloud PC solution to meet your budgetary and performance goals.</p>
                <p class="text-slate-600 text-sm mb-6 leading-relaxed">Working with Bismillah Computer & Technology for your
                    Windows 365 initiative means you enjoy:</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">No hardware or maintenance fees</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">Built-in 24 hour local support</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">A fully managed, turnkey solution</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">Dedicated VMware certified architects</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">Consistent, high-performance end-user experience on any device at anytime and anywhere</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">A company that truly understands every aspect of your business goals, policies and support procedures</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-slate-700 text-sm">An unyielding commitment to providing the best technology and services possible</span>
                    </li>
                </ul>
            </div>
            <div class="reveal reveal-fade-up flex justify-center order-1 lg:order-2">
                <img src="/images/cloud/microsoft-solutions/windows-365/section-2.png" alt="Windows 365 Partner"
                    class="object-cover" loading="lazy" />
            </div>
        </div>
    </section>

    <section class="py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&#8226; Windows 365 Overview</h3>
                    <p class="text-slate-600 text-sm mb-4">Learn about Windows 365 — the cloud PC that streams a full Windows experience to any device, anywhere, with enterprise-grade security and management.</p>
                    <a href="https://www.microsoft.com/en-us/windows-365" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&#8226; Windows 365 Plans & Pricing</h3>
                    <p class="text-slate-600 text-sm mb-4">Explore Windows 365 Business and Enterprise plans — find the right Cloud PC configuration for your organisation's needs and budget.</p>
                    <a href="https://www.microsoft.com/en-us/windows-365/all-plans" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&#8226; Windows 365 Enterprise</h3>
                    <p class="text-slate-600 text-sm mb-4">Windows 365 Enterprise provides advanced management, security, and flexibility for larger organisations using Microsoft Intune.</p>
                    <a href="https://www.microsoft.com/en-us/windows-365/enterprise" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all" style="animation-delay: 0.3s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&#8226; Windows 365 Business</h3>
                    <p class="text-slate-600 text-sm mb-4">Windows 365 Business is designed for small to medium organisations — easy to set up and manage without dedicated IT infrastructure.</p>
                    <a href="https://www.microsoft.com/en-us/windows-365/business" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="benefits">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Benefits of Using Windows 365 Cloud PC</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Why businesses choose Windows 365 for cloud-based desktop infrastructure</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Lower Total Cost of Ownership</h3>
                    <p class="text-slate-600 text-sm text-justify">By reducing reliance on high-end local hardware and eliminating on-premise server maintenance, Windows 365 Cloud PCs significantly lower the total cost of desktop infrastructure.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Work From Anywhere</h3>
                    <p class="text-slate-600 text-sm text-justify">Employees can access their full Windows desktop from any device, anywhere — enabling true remote and hybrid work without compromising the desktop experience.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Simplified IT Management</h3>
                    <p class="text-slate-600 text-sm text-justify">IT teams can provision, manage, and secure Cloud PCs from a single location using Microsoft Intune, eliminating the complexity of traditional on-premise VDI management.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Enterprise-Grade Security</h3>
                    <p class="text-slate-600 text-sm text-justify">Windows 365 provides built-in security with data residency, encryption, compliance controls, and integration with Microsoft Defender — reducing inherent security risks.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.1s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Rapid Scaling & Onboarding</h3>
                    <p class="text-slate-600 text-sm text-justify">Deploy new Cloud PCs in minutes rather than days or weeks, enabling faster onboarding of new employees and rapid scaling for project-based work.</p>
                </div>
                <div class="reveal reveal-fade-up bg-white p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative" style="animation-delay: 0.2s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Extended Hardware Lifespan</h3>
                    <p class="text-slate-600 text-sm text-justify">By streaming the desktop from the cloud, existing PCs and devices can be used longer, significantly reducing hardware refresh costs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600">Common questions about Windows 365 Cloud PC</p>
            </div>
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="reveal reveal-fade-up border border-slate-200 rounded-xl overflow-hidden">
                    <button onclick="this.parentElement.querySelector('.faq-answer').classList.toggle('hidden'); this.querySelector('.faq-icon').classList.toggle('rotate-45')"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-900">What is Windows 365 and how does it work?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 shrink-0 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-slate-600 text-sm leading-relaxed">Windows 365 is a cloud-based desktop infrastructure service from Microsoft that streams a complete Windows experience — including apps, data, settings, and security — to any device. It provides a Cloud PC that is always current and accessible from anywhere.</div>
                </div>
                <div class="reveal reveal-fade-up border border-slate-200 rounded-xl overflow-hidden" style="animation-delay: 0.1s">
                    <button onclick="this.parentElement.querySelector('.faq-answer').classList.toggle('hidden'); this.querySelector('.faq-icon').classList.toggle('rotate-45')"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-900">How is Windows 365 different from traditional VDI?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 shrink-0 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-slate-600 text-sm leading-relaxed">Unlike traditional VDI which requires on-premise servers and infrastructure, Windows 365 is fully managed by Microsoft in the cloud. It eliminates the complexity of managing your own VDI infrastructure while providing a consistent, secure experience.</div>
                </div>
                <div class="reveal reveal-fade-up border border-slate-200 rounded-xl overflow-hidden" style="animation-delay: 0.2s">
                    <button onclick="this.parentElement.querySelector('.faq-answer').classList.toggle('hidden'); this.querySelector('.faq-icon').classList.toggle('rotate-45')"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-900">What devices can I access Windows 365 from?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 shrink-0 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-slate-600 text-sm leading-relaxed">Windows 365 Cloud PCs can be accessed from any device with a web browser — Windows, macOS, iOS, Android, or Linux. Native apps are also available for Windows, macOS, iOS, and Android for an optimised experience.</div>
                </div>
                <div class="reveal reveal-fade-up border border-slate-200 rounded-xl overflow-hidden" style="animation-delay: 0.3s">
                    <button onclick="this.parentElement.querySelector('.faq-answer').classList.toggle('hidden'); this.querySelector('.faq-icon').classList.toggle('rotate-45')"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-900">Is Windows 365 secure for business use?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 shrink-0 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-slate-600 text-sm leading-relaxed">Yes. Windows 365 provides enterprise-grade security including data residency, encryption, compliance controls, integration with Microsoft Defender, and Conditional Access policies managed through Microsoft Intune.</div>
                </div>
                <div class="reveal reveal-fade-up border border-slate-200 rounded-xl overflow-hidden" style="animation-delay: 0.4s">
                    <button onclick="this.parentElement.querySelector('.faq-answer').classList.toggle('hidden'); this.querySelector('.faq-icon').classList.toggle('rotate-45')"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-900">Can I customise Cloud PCs for different users?</span>
                        <svg class="faq-icon w-5 h-5 text-slate-500 shrink-0 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6 text-slate-600 text-sm leading-relaxed">Yes. IT administrators can provision different Cloud PC configurations based on user roles and requirements, ensuring each user has the appropriate resources and performance.</div>
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('layouts.app')

@section('title', 'Backup & Recovery Solutions | Bismillah Computer & Technology')
@section('description',
    'Backup and Data Recovery are essential for protecting your business from data loss, cyber
    attacks, hardware failure, or accidental deletion.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Backup & Recovery
                    <span class="text-brand-blue">Business Continuity</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Backup and Data
                    Recovery are essential for protecting your business from data loss, cyber attacks, hardware failure, or
                    accidental deletion. By creating secure copies of critical files and systems, businesses can quickly
                    restore information and minimise downtime.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#overview"
                        class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
                    <a href="#solutions"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">SOLUTIONS</a>
                    <a href="#approach"
                        class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">OUR
                        APPROACH</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Backup and Recovery Solutions" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/cyber-security/backup-recovery/bg.png" />
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

    <section class="py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/cyber-security/backup-recovery/section-1.png" alt="Backup and Recovery Solutions"
                    class="rounded-xl shadow-lg w-full" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Backup & Recovery</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Backup and Recovery?</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Backup and Data Recovery are critical components of a
                        modern business continuity and cybersecurity strategy. They ensure that important files, systems, and
                        applications can be restored if data is lost due to hardware failure, cyber attacks, accidental
                        deletion, or ransomware incidents.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">By maintaining secure backup copies of business data,
                        organisations can minimise downtime and quickly recover from unexpected disruptions. Modern backup
                        solutions often combine local backups, cloud storage, and offsite replication to provide multiple layers
                        of protection.</p>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Automated backup systems regularly capture and store data
                        so that recovery can occur quickly when needed. This ensures that important data stored on servers,
                        computers, and cloud services can be recovered quickly, helping organisations maintain operations and
                        protect valuable business information.</p>
                    <a href="#solutions" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Our Solutions
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="why-matters">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Why Backup and Recovery Matters</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Data loss can occur due to various reasons
                    including hardware failure, cyber attacks, accidental deletion, or natural disasters. Having a robust
                    backup strategy is essential for business survival.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        [
                            'title' => 'Minimise Downtime',
                            'desc' => 'Quick recovery ensures your business operations continue with minimal interruption when data loss occurs.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        ],
                        [
                            'title' => 'Protect Against Cyber Threats',
                            'desc' => 'Secure backup copies protect your data from ransomware, malware, and other cyber attacks that could compromise business-critical information.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Business Continuity',
                            'desc' => 'Maintain operations and serve customers even during unexpected disruptions with reliable recovery solutions.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                        ],
                        [
                            'title' => 'Data Security',
                            'desc' => 'Protect sensitive business data with encrypted backups stored in secure locations, both on-site and in the cloud.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Compliance Requirements',
                            'desc' => 'Meet regulatory and industry standards for data protection and retention with proper backup strategies.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Peace of Mind',
                            'desc' => 'Know that your important files and systems can be restored quickly, protecting your business from unforeseen events.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">{!! $benefit['icon'] !!}</svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $benefit['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="solutions">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Our Backup & Recovery Solutions</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Total Solutions IT takes backups very seriously.
                    That is why we offer a number of solutions to ensure that your systems and business-critical data can be
                    recovered in the event of a failure.</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                @php
                    $solutions = [
                        [
                            'title' => 'Cove Data Protection',
                            'desc' => 'Cove Backup, now known as Cove Data Protection, is a cloud-first data protection service developed by N-able. It is designed to cater primarily to managed service providers (MSPs) and IT teams, offering a streamlined, appliance-free backup solution that includes both backup and disaster recovery capabilities.',
                            'features' => [
                                'Cloud-first architecture with no local hardware required',
                                'Built-in disaster recovery capabilities',
                                'Designed for MSPs and IT teams',
                                'Streamlined, appliance-free solution',
                            ],
                        ],
                        [
                            'title' => 'Datto Backup',
                            'desc' => 'Datto Backup is a comprehensive data protection solution designed primarily for managed service providers (MSPs) and small to medium-sized businesses (SMBs). It offers a range of features that provide robust backup, disaster recovery, and business continuity services.',
                            'features' => [
                                'Hybrid cloud architecture combining on-site and cloud backups',
                                'Instant virtualization of backups locally or in the cloud',
                                'Image-based backups with offsite replication',
                                'Failover to cloud-based environments',
                            ],
                        ],
                        [
                            'title' => 'StorageCraft ShadowProtect',
                            'desc' => 'StorageCraft ShadowProtect is the next level of on-site backup that we offer. It captures full, differential and incremental backups of your entire system, including the entire operating system, applications, configuration settings, and files.',
                            'features' => [
                                'Full, differential, and incremental backups',
                                'Hardware Independent Restore (HIR) capability',
                                'Recover entire system state to different hardware',
                                'Deploy state backup to another machine',
                            ],
                        ],
                        [
                            'title' => 'Mozy Pro Cloud Backup',
                            'desc' => 'MozyPro is our preferred cloud-based backup solution for your business. Available for both desktops and servers, it ensures peace of mind that your data is stored and archived in the cloud, ready for when you need it restored.',
                            'features' => [
                                'Desktop and server backup solutions',
                                'Cloud-based storage and archiving',
                                'Supplements Windows Server Backup',
                                'Essential for business-critical data',
                            ],
                        ],
                    ];
                @endphp
                @foreach ($solutions as $solution)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $solution['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify mb-4">{{ $solution['desc'] }}</p>
                        <div class="space-y-2">
                            @foreach ($solution['features'] as $feature)
                                <div class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    <span class="text-slate-600 text-sm">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="full-system">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">StorageCraft ShadowProtect</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Full System Backup</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">StorageCraft ShadowProtect captures full, differential and incremental backups of your entire system, including the entire operating system, applications, configuration settings, and files.</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Full System Backup: Complete image of your entire system</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Differential Backups: Changes since the last full backup</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Incremental Backups: Changes since the last backup of any type</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Hardware Independent Restore (HIR): Recover entire system state to different hardware</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed text-justify">Hardware Independent Restore (HIR): Recover an entire system state to a different hardware architecture or virtual machine. This means that if a server's hardware irretrievably fails, we can deploy a state backup of the server to another machine and recover your business processes in hours.</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="relative h-80 w-full rounded-2xl overflow-hidden">
                    <img src="/images/cloud/cyber-security/backup-recovery/section-3.png" alt="Full System Backup"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="mozy-pro">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <div class="relative h-80 w-full rounded-2xl overflow-hidden">
                    <img src="/images/cloud/cyber-security/backup-recovery/section-2.jpg" alt="Mozy Pro Cloud Backup"
                        class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
            <div class="reveal reveal-fade-up">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Cloud-Based Backup</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Mozy Pro Cloud Backup</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">MozyPro is our preferred cloud-based backup solution for your business. Available for both desktops and servers, it ensures peace of mind that your data is stored and archived in the cloud, ready for when you need it restored.</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Desktop and server backup solutions</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Cloud-based storage and archiving</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Can be deployed with Windows Server Backup or ShadowProtect</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm">Essential for business-critical data that cannot be lost</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed text-justify">We often deploy Mozy in conjunction with Windows Server Backup or ShadowProtect to supplement the backups with a file history and archive that is stored in the cloud. Essential for business-critical data that absolutely cannot be lost.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="types">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Types of Backup Solutions</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Modern backup solutions combine local backups,
                    cloud storage, and offsite replication to provide multiple layers of protection.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $types = [
                        [
                            'title' => 'Local Backup',
                            'desc' => 'Store backup copies on local devices or servers for quick access and recovery. This provides immediate recovery options without internet connectivity.',
                        ],
                        [
                            'title' => 'Cloud Backup',
                            'desc' => 'Securely store backup copies in the cloud for offsite protection and accessibility from anywhere. This ensures data is protected even if local infrastructure fails.',
                        ],
                        [
                            'title' => 'Hybrid Backup',
                            'desc' => 'Combine local and cloud backups for maximum protection and flexibility. This provides both quick local recovery and secure offsite redundancy.',
                        ],
                    ];
                @endphp
                @foreach ($types as $type)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $type['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $type['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="how-it-works">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">How Our Backup & Recovery Works</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Our comprehensive approach ensures your data is
                    protected at every step, from initial assessment to ongoing monitoring and support.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $steps = [
                        [
                            'step' => 1,
                            'title' => 'Assessment',
                            'desc' => 'We assess your current backup infrastructure and identify gaps in your data protection strategy.',
                        ],
                        [
                            'step' => 2,
                            'title' => 'Strategy Design',
                            'desc' => 'Our team designs a tailored backup solution that meets your business needs and recovery objectives.',
                        ],
                        [
                            'step' => 3,
                            'title' => 'Implementation',
                            'desc' => 'We implement your backup solution with minimal disruption to your daily operations.',
                        ],
                        [
                            'step' => 4,
                            'title' => 'Monitoring & Support',
                            'desc' => 'Ongoing monitoring ensures your backups are running successfully and can be relied upon when needed.',
                        ],
                    ];
                @endphp
                @foreach ($steps as $step)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div
                                class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white shrink-0">
                                <span class="font-bold">{{ $step['step'] }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $step['title'] }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm text-justify">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="help">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal reveal-fade-up bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-10 text-white order-2 lg:order-1">
                <h2 class="text-2xl lg:text-3xl font-bold mb-6">Need Help with Your Backup Strategy?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6 text-justify">Total Solutions IT provides
                    comprehensive backup and recovery solutions to protect your business data. Our team of experts can
                    assess your current infrastructure, design a tailored backup strategy, and implement solutions that
                    ensure your data is always protected and recoverable.</p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">Comprehensive backup assessments and strategy planning</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">Cloud-first and hybrid backup solutions</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">Disaster recovery planning and implementation</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">24/7 monitoring and management of backup systems</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">Regular testing and validation of backup integrity</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="text-blue-50 text-sm">Quick recovery and data restoration support</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm mb-6">Whether you are looking to implement a new backup solution or
                    improve your existing strategy, we provide the expertise and
                    support needed to keep your business-critical data safe and recoverable.</p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
            <div class="relative h-80 lg:h-96 rounded-2xl overflow-hidden order-1 lg:order-2">
                <img src="/images/cloud/cyber-security/backup-recovery/section-4.png" alt="Backup and Recovery Support"
                    class="w-full h-full object-cover" loading="lazy" />
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Useful Links</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Microsoft Azure Backup</h3>
                    <p class="text-slate-600 text-sm mb-4">Enterprise-grade cloud backup and disaster recovery solutions powered by Microsoft Azure.</p>
                    <a href="https://azure.microsoft.com/en-us/products/backup/" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                </div>
                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">N-able Cove Data Protection</h3>
                    <p class="text-slate-600 text-sm mb-4">Cloud-first data protection service designed for managed service providers and IT teams.</p>
                    <a href="https://www.n-able.com/products/cove-data-protection" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                </div>
                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Datto Backup Solutions</h3>
                    <p class="text-slate-600 text-sm mb-4">Comprehensive data protection and business continuity solutions for SMBs and MSPs.</p>
                    <a href="https://www.datto.com/products" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                </div>
                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">StorageCraft ShadowProtect</h3>
                    <p class="text-slate-600 text-sm mb-4">System-level backup and recovery solution with hardware-independent restore capabilities.</p>
                    <a href="https://www.storagecraft.com/products/shadowprotect" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Frequently Asked Questions</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Common questions about backup and recovery solutions</p>
            </div>
            <div class="space-y-4" x-data>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is the difference between backup and disaster recovery?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Backup refers to creating copies of your data to be restored later, while disaster recovery is a broader strategy that includes the processes and tools to recover entire systems and operations after a major incident. Backup is one component of a complete disaster recovery plan.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">How often should we backup our business data?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">The frequency of backups depends on how critical your data is and how much data loss your business can tolerate. For most businesses, daily backups are essential, with more frequent backups for critical systems. We can help determine the optimal backup schedule for your specific needs.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What types of data should be backed up?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">All business-critical data should be backed up, including databases, email systems, documents, configurations, and application data. We recommend a comprehensive approach that covers all systems essential to your business operations.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">How long does it take to restore from backup?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Recovery time depends on the amount of data, the type of backup solution, and your recovery objectives. Local backups can often be restored quickly, while cloud recoveries depend on internet speeds. We design solutions with your specific recovery time objectives in mind.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Is cloud backup secure?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">Yes, reputable cloud backup providers use enterprise-grade encryption both in transit and at rest. Your data is stored in secure data centres with multiple layers of physical and digital security. We only recommend cloud backup solutions that meet strict security standards.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What happens if we lose our local backup?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="overflow-hidden">
                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">This is why we recommend offsite or cloud backup as part of your strategy. If local backups are lost due to fire, theft, or hardware failure, your data remains protected in the cloud or at an offsite location, ensuring you can still recover your business-critical information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

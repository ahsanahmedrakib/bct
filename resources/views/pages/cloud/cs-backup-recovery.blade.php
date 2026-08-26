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
                <img alt="Backup and Recovery Solutions" loading="lazy" class="rounded-lg"
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
            <div class="reveal reveal-fade-up space-y-6">
                <span class="text-blue-500 font-bold text-sm tracking-wide">Backup & Recovery</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What is Backup and Recovery?</h2>
                <p class="text-slate-600 leading-relaxed text-justify">Backup and Data Recovery are critical components of a
                    modern business continuity and cybersecurity strategy. They ensure that important files, systems, and
                    applications can be restored if data is lost due to hardware failure, cyber attacks, accidental
                    deletion, or ransomware incidents.</p>
                <p class="text-slate-600 leading-relaxed text-justify">By maintaining secure backup copies of business data,
                    organisations can minimise downtime and quickly recover from unexpected disruptions. Modern backup
                    solutions often combine local backups, cloud storage, and offsite replication to provide multiple layers
                    of protection.</p>
                <a href="#solutions" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Our Solutions
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="why-matters">
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
                            'desc' =>
                                'Quick recovery ensures your business operations continue with minimal interruption when data loss occurs.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        ],
                        [
                            'title' => 'Protect Against Cyber Threats',
                            'desc' =>
                                'Secure backup copies protect your data from ransomware, malware, and other cyber attacks that could compromise business-critical information.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Business Continuity',
                            'desc' =>
                                'Maintain operations and serve customers even during unexpected disruptions with reliable recovery solutions.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />',
                        ],
                        [
                            'title' => 'Data Security',
                            'desc' =>
                                'Protect sensitive business data with encrypted backups stored in secure locations, both on-site and in the cloud.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />',
                        ],
                        [
                            'title' => 'Compliance Requirements',
                            'desc' =>
                                'Meet regulatory and industry standards for data protection and retention with proper backup strategies.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Peace of Mind',
                            'desc' =>
                                'Know that your important files and systems can be restored quickly, protecting your business from unforeseen events.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
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

    <section class="py-24 bg-white" id="solutions">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Our Backup & Recovery Solutions</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Total Solutions IT takes backups very seriously.
                    That's why we offer a number of solutions to ensure that your systems and business-critical data can be
                    recovered in the event of a failure.</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                @php
                    $solutions = [
                        [
                            'title' => 'Cove Data Protection',
                            'desc' =>
                                'Cove Backup, now known as Cove Data Protection, is a cloud-first data protection service developed by N-able. It is designed to cater primarily to managed service providers (MSPs) and IT teams.',
                            'features' => [
                                'Cloud-first architecture with no local hardware required',
                                'Built-in disaster recovery capabilities',
                                'Designed for MSPs and IT teams',
                                'Streamlined, appliance-free solution',
                            ],
                        ],
                        [
                            'title' => 'Datto Backup',
                            'desc' =>
                                'Datto Backup is a comprehensive data protection solution designed primarily for managed service providers (MSPs) and small to medium-sized businesses (SMBs).',
                            'features' => [
                                'Hybrid cloud architecture combining on-site and cloud backups',
                                'Instant virtualization of backups locally or in the cloud',
                                'Image-based backups with offsite replication',
                                'Failover to cloud-based environments',
                            ],
                        ],
                        [
                            'title' => 'StorageCraft ShadowProtect',
                            'desc' =>
                                'StorageCraft ShadowProtect is the next level of on-site backup that we offer. It captures full, differential and incremental backups of your entire system.',
                            'features' => [
                                'Full, differential, and incremental backups',
                                'Hardware Independent Restore (HIR) capability',
                                'Recover entire system state to different hardware',
                                'Deploy state backup to another machine',
                            ],
                        ],
                        [
                            'title' => 'Mozy Pro Cloud Backup',
                            'desc' =>
                                'MozyPro is our preferred cloud-based backup solution for your business. Available for both desktops and servers, it ensures peace of mind that your data is stored and archived in the cloud.',
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
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
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

    <section class="py-24 bg-slate-50" id="types">
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
                            'desc' =>
                                'Store backup copies on local devices or servers for quick access and recovery. This provides immediate recovery options without internet connectivity.',
                        ],
                        [
                            'title' => 'Cloud Backup',
                            'desc' =>
                                'Securely store backup copies in the cloud for offsite protection and accessibility from anywhere. This ensures data is protected even if local infrastructure fails.',
                        ],
                        [
                            'title' => 'Hybrid Backup',
                            'desc' =>
                                'Combine local and cloud backups for maximum protection and flexibility. This provides both quick local recovery and secure offsite redundancy.',
                        ],
                    ];
                @endphp
                @foreach ($types as $type)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $type['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $type['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="how-it-works">
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
                            'desc' =>
                                'We assess your current backup infrastructure and identify gaps in your data protection strategy.',
                        ],
                        [
                            'step' => 2,
                            'title' => 'Strategy Design',
                            'desc' =>
                                'Our team designs a tailored backup solution that meets your business needs and recovery objectives.',
                        ],
                        [
                            'step' => 3,
                            'title' => 'Implementation',
                            'desc' =>
                                'We implement your backup solution with minimal disruption to your daily operations.',
                        ],
                        [
                            'step' => 4,
                            'title' => 'Monitoring & Support',
                            'desc' =>
                                'Ongoing monitoring ensures your backups are running successfully and can be relied upon when needed.',
                        ],
                    ];
                @endphp
                @foreach ($steps as $step)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 rounded-2xl p-6 shadow-sm bg-white relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center gap-3 mb-3">
                            <div
                                class="w-10 h-10 bg-brand-blue rounded-full flex items-center justify-center text-white shrink-0">
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

    <section class="py-16 bg-slate-50" id="help">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="reveal reveal-fade-up bg-linear-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-12 text-white">
                <h2 class="text-3xl font-bold mb-6">Need Help with Your Backup Strategy?</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-8 max-w-3xl text-justify">Total Solutions IT provides
                    comprehensive backup and recovery solutions to protect your business data. Our team of experts can
                    assess your current infrastructure, design a tailored backup strategy, and implement solutions that
                    ensure your data is always protected and recoverable.</p>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    @php
                        $services = [
                            'Comprehensive backup assessments and strategy planning',
                            'Cloud-first and hybrid backup solutions',
                            'Disaster recovery planning and implementation',
                            '24/7 monitoring and management of backup systems',
                            'Regular testing and validation of backup integrity',
                            'Quick recovery and data restoration support',
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
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get
                    in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>


@endsection

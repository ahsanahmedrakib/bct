@extends('layouts.app')

@section('title', 'Device Repair | Bismillah Computer & Technology')
@section('description',
    'Fast and affordable computer, laptop, and mobile device repair services for individuals and
    businesses.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div
                class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Computer Repair
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Bismillah IT
                        provides professional computer repair services, helping businesses and home users resolve hardware
                        failures, software issues, virus and malware infections, and system performance problems. Our
                        technicians repair desktops, laptops, and business devices, offering services such as data recovery,
                        hardware upgrades, system optimisation, and network troubleshooting.</p>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">With reliable
                        support, fast diagnostics, and flexible remote or onsite IT assistance, Bismillah IT ensures your
                        technology remains secure, efficient, and running smoothly.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        <a href="#repair-services"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            REPAIR SERVICES
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        <a href="#it-services"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            IT SERVICES
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
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
                    <img src="/images/it-support/device-repair/hero.png" alt="Device Repair" height="400" width="600"
                        class="rounded-lg" />
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

        {{-- ABOUT SECTION --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="flex justify-center items-center">
                    <img src="/images/it-support/device-repair/about.jpg" alt="Repair Services Graphic" height="400"
                        width="600" class="object-cover rounded-xl" />
                </div>
                <div>
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6 text-justify">
                            <span class="text-blue-600 font-medium">Computer Repair Services at Bismillah IT</span>
                            provide
                            <span class="text-blue-600 font-medium">reliable, professional IT support for businesses and
                                home users</span>
                            experiencing technical problems with their devices. Our experienced technicians diagnose and
                            repair
                            <span class="text-blue-600 font-medium">hardware faults, software issues, virus and malware
                                infections,
                                and system performance problems</span>
                            across desktops, laptops, and other business devices. Whether your computer is running slowly,
                            failing to start, or experiencing system errors, our team can quickly identify the cause and
                            restore
                            your device.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Our <span class="text-blue-600 font-medium">computer repair and IT support services</span>
                            include:
                        </p>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                <span><strong class="text-blue-600 font-semibold">Hardware diagnostics and repairs</strong>
                                    for desktops and laptops</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                <span><strong class="text-blue-600 font-semibold">Virus and malware removal</strong> to
                                    restore system security</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                <span><strong class="text-blue-600 font-semibold">Data recovery services</strong> for lost
                                    or corrupted files</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                <span><strong class="text-blue-600 font-semibold">Hardware upgrades and performance
                                        optimisation</strong></span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2 font-bold">&bull;</span>
                                <span><strong class="text-blue-600 font-semibold">Network troubleshooting and system
                                        configuration</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- BRANDS WE REPAIR --}}
        <section class="py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-center">
            <div class="reveal reveal-fade-up">
                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-6">Brands We Repair</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
                    @php
                        $partners = [
                            ['name' => 'HPE', 'logo' => '/images/it-support/device-repair/hpe.png'],
                            ['name' => 'Lenovo', 'logo' => '/images/it-support/device-repair/lenovo.png'],
                            ['name' => 'ASUS', 'logo' => '/images/it-support/device-repair/asus.png'],
                            ['name' => 'Dell', 'logo' => '/images/it-support/device-repair/dell.png'],
                            ['name' => 'Acer', 'logo' => '/images/it-support/device-repair/acer.png'],
                        ];
                    @endphp
                    @foreach ($partners as $partner)
                        <div
                            class="flex items-center justify-center bg-white rounded-xl border border-gray-400 shadow-xs hover:border-brand-hover hover:shadow-md hover:scale-[1.02] transition-all duration-300 cursor-pointer aspect-square">
                            <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}"
                                class="object-contain max-w-full max-h-full p-2 sm:p-0.5" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 1: Repair Services --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="repair-services">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Repair Services
                                </h3>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">Professional Laptop
                                    & PC Repair Services</h2>
                            </div>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            We offer <span class="text-blue-600 font-medium">professional computer repair and maintenance
                                services</span> to keep your devices running smoothly, ensuring fast and reliable solutions
                            for all major brands.
                        </p>
                        <h4 class="font-bold text-slate-800 text-sm mb-3">Key Repair Features:</h4>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Diagnostic & Troubleshooting:</strong>
                                    Comprehensive diagnostics to identify hardware and software issues accurately.</span>
                            </li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Hardware Upgrades:</strong> Upgrading RAM,
                                    SSDs, and replacing damaged components.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Software & System Repair:</strong> Fixing
                                    operating system crashes, driver issues, and blue screen errors.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Virus & Malware Removal:</strong> Thoroughly
                                    cleaning infected systems and installing robust antivirus protection.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Laptop Screen & Keyboard Repair:</strong>
                                    Replacing broken screens, faulty batteries, and damaged keyboards.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex justify-center items-center">
                    <img src="/images/it-support/device-repair/repair.jpg" alt="Repair Services Graphic" height="400"
                        width="600" class="object-cover rounded-xl" />
                </div>
            </div>
        </section>

        {{-- SECTION 2: Security & Cleanup Services --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="flex justify-center items-center">
                    <img src="/images/it-support/device-repair/security.jpg" alt="Security & Cleanup Services"
                        height="400" width="600" class="object-cover rounded-xl" />
                </div>
                <div>
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Security Services
                                </h3>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">Security & Cleanup
                                    Services</h2>
                            </div>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Protect your systems from <span class="text-blue-600 font-medium">malicious threats</span> and
                            optimize performance with our comprehensive security and cleanup services.
                        </p>
                        <h4 class="font-bold text-slate-800 text-sm mb-3">Key Security & Cleanup Features:</h4>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Malware & Spyware Removal:</strong> Complete
                                    elimination of malicious software, spyware, and adware.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Antivirus Setup:</strong> Installing and
                                    configuring industry-standard antivirus and anti-malware software.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">System Optimization:</strong> Cleaning up
                                    temporary files, registry bloat, and optimizing startup programs for speed.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Firewall Configuration:</strong> Setting up and
                                    configuring robust firewalls to block unauthorized network access.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Security Audits:</strong> Regular vulnerability
                                    scans and security health checks to protect your data.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION 3: Data & Backup Services --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M3 5v14a9 3 0 0 0 18 0V5"></path>
                                    <path d="M3 12a9 3 0 0 0 18 0"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Data Solutions
                                </h3>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">Data & Backup
                                    Services</h2>
                            </div>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Ensure your valuable data is <span class="text-blue-600 font-medium">safe, secure, and easily
                                recoverable</span> with our advanced data backup and recovery solutions.
                        </p>
                        <h4 class="font-bold text-slate-800 text-sm mb-3">Key Data & Backup Features:</h4>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Data Recovery Services:</strong> Recovering
                                    lost, deleted, or corrupted data from hard drives, SSDs, and external storage
                                    media.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Cloud Backup Solutions:</strong> Setting up
                                    automated, secure cloud backups for continuous data protection.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Local & External Backups:</strong> Configuring
                                    external hard drives and NAS systems for reliable local backups.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Automated Backup Setup:</strong> Scheduling
                                    automated backup routines to prevent data loss without manual intervention.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Disaster Recovery Planning:</strong> Developing
                                    comprehensive recovery plans to ensure business continuity in case of hardware failure
                                    or cyber attacks.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex justify-center items-center">
                    <img src="/images/it-support/device-repair/data.jpg" alt="Data & Backup Services" height="400"
                        width="600" class="object-cover rounded-xl" />
                </div>
            </div>
        </section>

        {{-- SECTION 4: Networking & Setup Services --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="flex justify-center items-center">
                    <img src="/images/it-support/device-repair/networking.jpg" alt="Networking & Setup Services"
                        height="400" width="600" class="object-cover rounded-xl" />
                </div>
                <div>
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h.01"></path>
                                    <path d="M2 8.82a15 15 0 0 1 20 0"></path>
                                    <path d="M5 12.859a10 10 0 0 1 14 0"></path>
                                    <path d="M8.5 16.429a5 5 0 0 1 7 0"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Network Services
                                </h3>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">Networking & Setup
                                    Services</h2>
                            </div>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Build a <span class="text-blue-600 font-medium">fast, reliable, and secure network
                                infrastructure</span> for your home or office environment.
                        </p>
                        <h4 class="font-bold text-slate-800 text-sm mb-3">Key Networking Features:</h4>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Router & Wi-Fi Setup:</strong> Professional
                                    installation and configuration of routers, switches, and wireless access points for
                                    seamless coverage.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Network Troubleshooting:</strong> Diagnosing
                                    and resolving connectivity drops, slow speeds, and IP conflicts.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">LAN/WAN Configuration:</strong> Setting up
                                    local area networks and wide area networks for efficient communication.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Printer & Peripheral Setup:</strong> Connecting
                                    and configuring printers, scanners, and network-attached storage (NAS).</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Cloud Printing & Sharing:</strong> Setting up
                                    secure file sharing and cloud printing across multiple devices.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION 5: New Computers & Upgrades --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="16" height="16" x="4" y="4" rx="2"></rect>
                                    <rect width="6" height="6" x="9" y="9" rx="1"></rect>
                                    <path d="M15 2v2"></path>
                                    <path d="M15 20v2"></path>
                                    <path d="M2 15h2"></path>
                                    <path d="M2 9h2"></path>
                                    <path d="M20 15h2"></path>
                                    <path d="M20 9h2"></path>
                                    <path d="M9 2v2"></path>
                                    <path d="M9 20v2"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Hardware Services
                                </h3>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">New Computers &
                                    Upgrades</h2>
                            </div>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Looking for a <span class="text-blue-600 font-medium">new computer or custom build</span>? We
                            help you choose and set up the right hardware for your needs.
                        </p>
                        <h4 class="font-bold text-slate-800 text-sm mb-3">Key Hardware Features:</h4>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Custom PC Building:</strong> Designing and
                                    assembling high-performance custom PCs tailored for gaming, editing, or business.</span>
                            </li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Laptop & Desktop Sales:</strong> Expert
                                    guidance in selecting the best pre-built computers and laptops within your
                                    budget.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Data Transfer & Setup:</strong> Transferring
                                    all your files, settings, and applications from your old computer to your new
                                    one.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">Software Installation:</strong> Installing
                                    operating systems, productivity suites, and essential software.</span></li>
                            <li class="flex items-start"><span
                                    class="text-blue-600 mr-2 font-bold">&bull;</span><span><strong
                                        class="text-blue-600 font-semibold">System Tuning:</strong> Optimizing new
                                    computers for peak performance right out of the box.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex justify-center items-center">
                    <img src="/images/it-support/device-repair/computer.jpg" alt="New Computers & Upgrades"
                        height="400" width="600" class="object-cover rounded-xl" />
                </div>
            </div>
        </section>

        {{-- SECTION 6: FAQ --}}
        <section class="py-20 bg-white">
            <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
                <h2 class="text-3xl font-bold text-center text-brand-blue mb-12">Computer Repair FAQ</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="flex flex-col justify-center w-full order-2 lg:order-1">
                        <div class="space-y-4">
                            @php
                                $faqs = [
                                    [
                                        'q' => 'How long does a PC or laptop repair usually take?',
                                        'a' =>
                                            'Most common repairs can be completed within 24-48 hours. Simple fixes like software issues, virus removal, or hardware upgrades (SSD/RAM) are often done the same day. More complex repairs or parts orders may take a little longer.',
                                    ],
                                    [
                                        'q' => 'Do I need to book an appointment?',
                                        'a' =>
                                            'Bookings are recommended so we can assist you faster, but walk-ins are welcome. For onsite or urgent repairs, please contact us first to confirm availability.',
                                    ],
                                    [
                                        'q' => 'How much does a computer repair cost?',
                                        'a' =>
                                            'Costs depend on the issue and required parts. We provide clear, upfront pricing and will always confirm costs before starting any work.',
                                    ],
                                    [
                                        'q' => 'Will my data be safe during the repair?',
                                        'a' =>
                                            'Yes. We take data security seriously. Wherever possible, we back up your data before repairs and never access personal files unless required to fix the issue.',
                                    ],
                                    [
                                        'q' => 'Can you fix a slow computer?',
                                        'a' =>
                                            'Absolutely. Slow performance is one of the most common issues we see. This may be caused by outdated hardware, software problems, malware, or a full hard drive. We will diagnose the cause and recommend the best fix.',
                                    ],
                                    [
                                        'q' => 'Do you repair both laptops and desktop PCs?',
                                        'a' =>
                                            'Yes. We repair Windows PCs and laptops, including desktops, notebooks, and all-in-one systems.',
                                    ],
                                    [
                                        'q' => 'Do you offer virus and malware removal?',
                                        'a' =>
                                            'Yes. We safely remove viruses, malware, and unwanted software, then help secure your system to prevent future infections.',
                                    ],
                                    [
                                        'q' => 'Can you recover lost or deleted files?',
                                        'a' =>
                                            'In many cases, yes. We offer data recovery services for hard drives, SSDs, and USB devices. The success rate depends on the type of damage and how quickly the device is checked.',
                                    ],
                                    [
                                        'q' => 'Do you offer onsite computer repairs?',
                                        'a' =>
                                            'Yes. We provide onsite support for homes and businesses where required, as well as in-store repairs.',
                                    ],
                                    [
                                        'q' => 'What if my computer cannot be repaired?',
                                        'a' =>
                                            'If a repair is not cost-effective, we will be honest and help you choose the best replacement option, including setting up your new computer and transferring your data.',
                                    ],
                                ];
                            @endphp
                            @foreach ($faqs as $faq)
                                <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                    <button onclick="toggleFaq(this)"
                                        class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                        <span class="font-medium text-slate-900 pr-4">{{ $faq['q'] }}</span>
                                        <span
                                            class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                    </button>
                                    <div class="faq-answer">
                                        <div class="overflow-hidden">
                                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">{{ $faq['a'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div
                        class="relative h-64 md:h-150 rounded-2xl order-1 lg:order-2 overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                        <img src="/images/it-support/device-repair/it-services.jpg" alt="Computer Repair"
                            class="object-cover w-full h-full" />
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION 7: IT Services --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full" id="it-services">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="flex justify-center items-center">
                    <img src="/images/it-support/device-repair/it-services.jpg" alt="IT Services" height="400"
                        width="600" class="object-cover rounded-xl" />
                </div>
                <div>
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex items-center space-x-3 mb-6">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="8" x="2" y="2" rx="2" ry="2">
                                    </rect>
                                    <rect width="20" height="8" x="2" y="14" rx="2" ry="2">
                                    </rect>
                                    <line x1="6" x2="6.01" y1="6" y2="6"></line>
                                    <line x1="6" x2="6.01" y1="18" y2="18"></line>
                                </svg>
                            </div>
                            <h2 class="text-xl sm:text-2xl font-bold text-slate-900">IT Services</h2>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">We provide uses leading-edge
                            technologies and infrastructure to deliver a quality service to our clients. This enables us to
                            deliver high-performing, reliable, and secure solutions.</p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed my-4">Our on-demand support team is
                            reactive, knowledgeable, and ready to help at any time of the day. We offer 24/7 support for all
                            of our clients. Our managed-it team also works to ensure that your systems are running at 100%
                            and any problems are anticipated and dealt with before they happen.</p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">We can ensure that your systems are
                            always available to you by offering desktop and laptop repair at low cost. We understand that a
                            system failure should not get in the way of your productivity.</p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-4">Our team of network engineers and
                            support technicians know how your system works. When there is a problem on your network, or with
                            your servers, we can get you back up to speed in no time. Existing systems are also catered for
                            by our team, and we work hard to optimise your network and server infrastructure for your
                            business needs.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @push('head')
        <style>
            .faq-answer {
                display: grid;
                grid-template-rows: 0fr;
                opacity: 0;
                transition: grid-template-rows 0.3s ease, opacity 0.3s ease;
            }

            .faq-answer.faq-open {
                grid-template-rows: 1fr;
                opacity: 1;
            }

            .faq-icon {
                transition: transform 0.3s ease;
            }

            .faq-icon.faq-open {
                transform: rotate(45deg);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            function toggleFaq(button) {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');
                const isOpen = answer.classList.contains('faq-open');

                document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('faq-open'));
                document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('faq-open'));

                if (!isOpen) {
                    answer.classList.add('faq-open');
                    icon.classList.add('faq-open');
                }
            }
        </script>
    @endpush
@endsection

@extends('layouts.app')

@section('title', 'Cyber Security | Bismillah Computer & Technology')
@section('description', 'Protect your business with comprehensive cybersecurity solutions. From threat detection to incident response, we safeguard your digital assets.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Cyber Security
                    <span class="text-blue-600 block mt-2">Stay Secure, Stay Ahead</span>
                </h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#cybersecurity" class="group flex items-center justify-center gap-2 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white font-bold py-3 px-6 rounded-xl transition-all duration-200 text-sm tracking-wide">
                        <span>LEARN MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </a>
                    <a href="{{ route('it-support.cs-essential-eight') }}" class="group flex items-center justify-center gap-2 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white font-bold py-3 px-6 rounded-xl transition-all duration-200 text-sm tracking-wide">
                        <span>ACSC</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Cyber Security" loading="lazy" class="rounded-lg" src="/images/it-support/cyber-security/hero.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="cybersecurity" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
        <div class="reveal reveal-fade-up grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
            {{-- Left Intro --}}
            <div class="col-span-1 sm:col-span-2 lg:col-span-2 pr-0 md:pr-8 flex flex-col justify-start pt-4">
                <h2 class="text-blue-600 font-bold text-xl mb-6 tracking-wide">Cyber Security</h2>
                <p class="text-slate-600 text-sm mb-6 leading-loose text-justify">Managed Cyber Security Services are standard solutions for large businesses, enterprise-level companies, and even Small to Medium Enterprises (SME). Cybersecurity has become essential for modern business operations and continuity.</p>
                <p class="text-slate-600 text-sm leading-loose text-justify">At BCT, information security is prioritized above all else. Cyber Security Services are tailored to safeguard your IT Infrastructure and data against cyber threats. We deliver end-to-end security solutions and 24/7 monitoring to keep your business secure.</p>
            </div>

            {{-- Service Card: Threat Hunting --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Threat Hunting</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Threat hunting is a proactive approach to identifying hidden security threats within a network. It looks for indicators of compromise (IoCs) that may have bypassed automated defenses.</p>
                <a href="{{ route('it-support.cs-cloud-network') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: SIEM --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">IT Security Incident & Event Management</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">SIEM collects and analyzes log data from various sources to provide real-time visibility into security events across your entire IT infrastructure.</p>
                <a href="{{ route('it-support.cs-cloud-network') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Security Assessment --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Assessment</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">A security assessment evaluates your organization's security posture to identify vulnerabilities and risks. It helps you prioritize security improvements and comply with regulations.</p>
            </div>

            {{-- Service Card: Security Advisory --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Advisory</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Expert guidance on developing and implementing security strategies aligned with your business objectives. Stay informed about emerging threats and industry best practices.</p>
                <a href="{{ route('it-support.cs-zero-trust') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Managed Firewalls --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Managed Firewalls</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">24/7 monitoring and management of your firewall infrastructure. We configure, monitor, and update your firewalls to ensure optimal protection against unauthorized access and cyber threats.</p>
                <a href="{{ route('it-support.cs-cloud-network') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Security Awareness Training --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Awareness Training</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Educate your team with engaging cybersecurity training programs to recognize and prevent social engineering attacks. Reduce human error and build a security-conscious culture.</p>
                <a href="{{ route('it-support.cs-security-awareness') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Email Filtering --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Email Filtering</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Advanced email security solutions that block spam, phishing attempts, malware, and malicious attachments before they reach your inbox. Protect your organization from email-borne threats.</p>
                <a href="{{ route('it-support.cs-cloud-network') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Web Filtering --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Web Filtering</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Control and monitor web access to protect users from malicious websites, inappropriate content, and web-based threats. Enforce acceptable use policies across your organization.</p>
                <a href="{{ route('it-support.cs-cloud-network') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Risk Management --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Risk Management</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Identify, assess, and prioritize cybersecurity risks with our comprehensive risk management framework. Develop strategies to mitigate threats and protect your business continuity.</p>
                <a href="{{ route('it-support.cs-zero-trust') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>

            {{-- Service Card: Compliance --}}
            <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Compliance</h4>
                <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Ensure your organization meets industry regulatory requirements including GDPR, HIPAA, ISO 27001, and PCI DSS. We help you navigate complex compliance landscapes with ease.</p>
                <a href="{{ route('it-support.cs-essential-eight') }}" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
            </div>
        </div>
    </section>

    {{-- Security is a Necessity --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Why Cyber Security</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Security is a Necessity, Not a Luxury</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">In an era of increasing digital transformation, cyber security has become a fundamental business requirement. Organizations that fail to prioritize security expose themselves to significant financial, operational, and reputational risks. From small businesses to large enterprises, every organization is a potential target for cybercriminals.</p>
                    <p class="text-slate-500 text-sm leading-relaxed text-justify">A proactive approach to cyber security is essential for maintaining business continuity, protecting sensitive data, and building trust with customers and stakeholders. Investing in robust security measures today can prevent catastrophic losses tomorrow.</p>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center">
                <img alt="Cyber Security Necessity" loading="lazy" class="object-cover rounded-xl max-w-md w-full" src="/images/it-support/cyber-security/section-1.png" />
            </div>
        </div>
    </section>

    {{-- What is Cyber Security --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-1 lg:order-1 flex justify-center">
                <img alt="What is Cyber Security" loading="lazy" class="object-cover rounded-xl max-w-md w-full" src="/images/it-support/cyber-security/section-2.png" />
            </div>
            <div class="order-2 lg:order-2">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Understanding Threats</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Cyber Security?</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Cyber security encompasses the practices, technologies, and processes designed to protect networks, devices, programs, and data from attack, damage, or unauthorized access. It includes everything from firewall management and intrusion detection to employee training and incident response planning.</p>
                    <p class="text-slate-500 text-sm leading-relaxed text-justify">A comprehensive cyber security strategy addresses threats at every level — from the network perimeter to individual endpoints, from cloud infrastructure to human behavior. It's an ongoing process that requires continuous monitoring, updating, and adaptation to stay ahead of evolving threats.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- What We Do --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Our Approach</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What We Do</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">We provide end-to-end cyber security solutions tailored to your organization's specific needs. Our team of certified security professionals works closely with you to understand your unique threat landscape and develop a customized security strategy.</p>
                    <p class="text-slate-500 text-sm leading-relaxed text-justify">From initial security assessments and vulnerability scanning to 24/7 monitoring and incident response, we deliver comprehensive protection that scales with your business. Our proactive approach ensures that potential threats are identified and neutralized before they can impact your operations.</p>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center">
                <img alt="What We Do" loading="lazy" class="object-cover rounded-xl max-w-md w-full" src="/images/it-support/cyber-security/section-3.png" />
            </div>
        </div>
    </section>

    {{-- ACSC Essential Eight --}}
    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-blue-600 mb-6 mt-2 uppercase tracking-tight">ACSC Essential Eight</h2>
            <p class="text-slate-600 text-sm leading-relaxed max-w-3xl mx-auto mb-8">The Australian Cyber Security Centre (ACSC) Essential Eight is a set of prioritized mitigation strategies designed to help organizations protect their systems against a range of cyber threats. Implementing these strategies significantly improves your security posture.</p>
            <a href="{{ route('it-support.cs-essential-eight') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-md transition-colors text-sm">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
            </a>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-brand-blue mb-12">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-4">
                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" data-faq="1">
                            <span class="font-bold text-slate-800 text-sm">What types of cyber threats do you protect against?</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content grid-rows-[0fr] opacity-0 transition-all duration-300">
                            <div class="overflow-hidden">
                                <p class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">We protect against a wide range of threats including ransomware, phishing attacks, malware, advanced persistent threats (APTs), DDoS attacks, insider threats, zero-day exploits, and social engineering attacks. Our solutions provide comprehensive coverage across all attack vectors.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" data-faq="2">
                            <span class="font-bold text-slate-800 text-sm">How quickly can you respond to a security incident?</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content grid-rows-[0fr] opacity-0 transition-all duration-300">
                            <div class="overflow-hidden">
                                <p class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">Our incident response team is available 24/7 and can begin responding to security incidents within minutes. We have established protocols and automated detection systems that enable rapid containment and mitigation of threats to minimize business impact.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" data-faq="3">
                            <span class="font-bold text-slate-800 text-sm">What is the ACSC Essential Eight framework?</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content grid-rows-[0fr] opacity-0 transition-all duration-300">
                            <div class="overflow-hidden">
                                <p class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">The Essential Eight is a set of prioritized mitigation strategies developed by the Australian Cyber Security Centre. It includes strategies like application control, patching, macro settings, user hardening, privilege restriction, OS patching, MFA, and daily backups to help organizations protect against cyber threats.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" data-faq="4">
                            <span class="font-bold text-slate-800 text-sm">Do you offer ongoing security monitoring?</span>
                            <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content grid-rows-[0fr] opacity-0 transition-all duration-300">
                            <div class="overflow-hidden">
                                <p class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">Yes, we provide 24/7 security monitoring through our Security Operations Center (SOC). Our team continuously monitors your infrastructure for suspicious activity, analyzes security events, and responds to threats in real-time to keep your business protected around the clock.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img alt="Cyber Security FAQ" loading="lazy" class="h-64 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 object-cover" src="/images/it-support/cyber-security/essential-eight/faq.jpg" />
                </div>
            </div>
        </div>
    </section>

    {{-- Partners Section --}}
    <section class="py-16 bg-slate-50 border-t border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-slate-500 mb-8 font-medium">Trusted by industry leaders</p>
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-12 opacity-60">
                <span class="text-slate-400 font-bold text-lg">Microsoft</span>
                <span class="text-slate-400 font-bold text-lg">SentinelOne</span>
                <span class="text-slate-400 font-bold text-lg">Bitdefender</span>
                <span class="text-slate-400 font-bold text-lg">CrowdStrike</span>
                <span class="text-slate-400 font-bold text-lg">Fortinet</span>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection

@push('head')
<style>
    .faq-content {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.3s ease, opacity 0.3s ease;
    }
    .faq-content.open {
        grid-template-rows: 1fr;
        opacity: 1;
    }
    .faq-toggle svg {
        transition: transform 0.3s ease;
    }
    .faq-toggle.active svg {
        transform: rotate(180deg);
    }
</style>
@endpush

@push('scripts')
<script>
document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const isOpen = content.classList.contains('open');

        // Close all other FAQs
        document.querySelectorAll('.faq-content').forEach(c => c.classList.remove('open'));
        document.querySelectorAll('.faq-toggle').forEach(b => b.classList.remove('active'));

        if (!isOpen) {
            content.classList.add('open');
            button.classList.add('active');
        }
    });
});
</script>
@endpush

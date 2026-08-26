@extends('layouts.app')

@section('title', 'Cyber Security | Bismillah Computer & Technology')
@section('description', 'Comprehensive cyber security services including zero trust, endpoint security, incident response, and security awareness training.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">
        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Cyber Security <br />
                        <span class="text-blue-600 block mt-2"> Stay Secure, Stay Ahead</span>
                    </h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        <a href="#cybersecurity" class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            LEARN MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"><path d="m9 18 6-6-6-6"></path></svg>
                        </a>
                        <a href="#acsc" class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            ACSC
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"><path d="m9 18 6-6-6-6"></path></svg>
                        </a>
                    </div>
                    <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                        <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/cyber-security/hero.png" alt="BG Image" height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- Section 1: Cyber Security Grid --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
            <div class="reveal reveal-fade-up grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
                <div class="col-span-1 sm:col-span-2 lg:col-span-2 pr-0 md:pr-8 flex flex-col justify-start pt-4">
                    <h2 class="text-blue-600 font-bold text-xl mb-6 tracking-wide">
                        Cyber Security
                    </h2>
                    <p class="text-slate-600 text-sm mb-6 leading-loose text-justify">
                        Managed Cyber Security Services are standard solutions for large
                        businesses, enterprise-level companies, and even Small to Medium
                        Enterprises (SME). Cybersecurity has become essential for modern
                        business operations and continuity.
                    </p>
                    <p class="text-slate-600 text-sm leading-loose text-justify">
                        At Cyber, information security is prioritized above all else.
                        Cyber Security Services are tailored to safeguard your IT
                        Infrastructure and data against cyber threats. We deliver
                        end-to-end security solutions and 24/7 monitoring to keep your
                        business secure.
                    </p>
                </div>

                {{-- Threat Hunting --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Threat Hunting</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Threat hunting is a proactive approach to identifying hidden security threats within a network. It looks for indicators of compromise (IoCs) that may have bypassed automated defenses.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- SIEM --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">IT Security Incident &amp; Event Management</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">SIEM (Security Information and Event Management) collects and analyzes log data from various sources to provide real-time visibility into security events across your entire IT infrastructure.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Security Assessment --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Assessment</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">A security assessment evaluates your organization&#x27;s security posture to identify vulnerabilities and risks. It helps you prioritize security improvements and comply with regulations.</p>
                </div>

                {{-- Security Advisory --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Advisory</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Security advisory services provide expert guidance on security strategy, governance, risk management, and compliance. They help organizations make informed decisions and build a strong security posture.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Managed Firewalls --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Managed Firewalls</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Managed firewalls protect your network from unauthorized access and cyber threats. They are configured, monitored, and maintained by security experts to ensure optimal protection.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Security Awareness Training --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Security Awareness Training</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Security awareness training educates employees on security best practices, such as recognizing phishing attacks and creating strong passwords, reducing the risk of human error.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Email Filtering --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Email Filtering</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Email filtering inspects incoming and outgoing emails to block spam, phishing attempts, malware, and other malicious content before it reaches your inbox or infects your systems.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Web Filtering --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Web Filtering</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Web filtering restricts access to dangerous or inappropriate websites, protecting your network from malware infection and enforcing acceptable use policies.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Risk Management --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Risk Management</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Risk management involves identifying, assessing, and prioritizing risks to minimize their impact on your organization. It helps you allocate resources effectively and build resilience against potential threats.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>

                {{-- Compliance --}}
                <div class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">Compliance</h4>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">Regulatory compliance is essential for meeting industry standards and regulations, such as GDPR, HIPAA, and PCI-DSS. Compliance services help you navigate complex requirements and avoid costly penalties.</p>
                    <a href="#" class="text-blue-600 text-[12px] font-bold flex items-center hover:underline mt-auto tracking-wide"><span class="mr-1">&gt;</span> LEARN MORE</a>
                </div>
            </div>
        </section>

        {{-- Section 2: Security is a Necessity --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto" id="cybersecurity">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Security is a Necessity</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">Ensure Your Business Is<br>Caught Up</h2>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">As businesses expand, their digital exposure increases, making cybersecurity a top priority. Ransomware, data breaches, and insider threats are becoming more sophisticated, posing serious risks to operations, reputation, and financial stability.</p>
                        <p class="text-slate-500 text-sm leading-relaxed text-justify">Proactive cybersecurity measures, such as threat monitoring, data encryption, and employee training, help protect your critical assets. By staying ahead of cyber threats, you can ensure business continuity and maintain the trust of your clients and partners.</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex justify-center">
                    <img src="/images/it-support/cyber-security/section-1.png" alt="Security Shield Illustration" height="400" width="400" class="object-cover" />
                </div>
            </div>
        </section>

        {{-- Section 3: What is Cyber Security --}}
        <section class="bg-white">
            <div class="reveal reveal-fade-up py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="flex justify-center">
                        <img src="/images/it-support/cyber-security/section-2.png" alt="What is Cyber Security Illustration" height="400" width="400" class="object-cover" />
                    </div>
                    <div>
                        <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">What is Cyber Security</span>
                            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">How Does It Work</h2>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. These cyberattacks are usually aimed at accessing, changing, or destroying sensitive information; extorting money from users; or interrupting normal business processes.</p>
                            <p class="text-slate-500 text-sm leading-relaxed text-justify">Implementing effective cybersecurity measures is particularly challenging today because there are more devices than people, and attackers are becoming more innovative. Cybersecurity solutions combine technology, processes, and people to create a multi-layered defense system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 4: What We Do --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">What We Do</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">To Protect Your Data</h2>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Cyber Security is an essential requirement for modern businesses. We offer comprehensive security solutions to protect your IT infrastructure, sensitive data, and business operations against evolving threats.</p>
                        <p class="text-slate-500 text-sm leading-relaxed text-justify">Our end-to-end security services cover everything from risk assessment and vulnerability management to 24/7 monitoring, incident response, and employee awareness training.</p>
                    </div>
                </div>
                <div class="flex justify-center order-1 lg:order-2">
                    <img src="/images/it-support/cyber-security/section-3.png" alt="Protect Your Data Illustration" height="400" width="400" class="object-cover" />
                </div>
            </div>
        </section>

        {{-- Section 5: ACSC Essential Eight --}}
        <section class="bg-white" id="acsc">
            <div class="reveal reveal-fade-up py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="flex justify-center">
                        <img src="/images/it-support/cyber-security/acsc.png" alt="Bangladeshi Cyber Security Centre Logo" height="400" width="400" class="object-cover" />
                    </div>
                    <div>
                        <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <h2 class="text-2xl md:text-3xl font-bold text-blue-600 mb-6 mt-2 uppercase tracking-tight">WHAT IS ACSC ESSENTIAL EIGHT?</h2>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Developed by the Bangladeshi Cyber Security Centre (ACSC), the Essential Eight is a baseline set of strategies designed to help organizations mitigate cyber security threats. Implementing these strategies makes it significantly harder for adversaries to compromise systems.</p>
                            <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">We help businesses implement and maintain the Essential Eight strategies to build a robust defense mechanism. Contact us today to learn more about how we can strengthen your organization&#x27;s cyber security.</p>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-md transition-colors">ESSENTIAL EIGHT STRATEGIES</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 6: FAQ --}}
        <section class="py-20 bg-white">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-brand-blue mb-12">FAQs</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="flex flex-col justify-center w-full order-2 lg:order-1">
                        <div class="space-y-4">
                            {{-- FAQ 1 --}}
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">What is data breach in cyber security?</span>
                                    <span class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                </button>
                                <div class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">A data breach occurs when information is stolen from a system without the owner&#x27;s knowledge or permission. Whether for a small business or a large organization, such an incident can happen to anyone, posing serious risks to data security.</p>
                                    </div>
                                </div>
                            </div>

                            {{-- FAQ 2 --}}
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">What is data security and privacy?</span>
                                    <span class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                </button>
                                <div class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">Data security protects information from unauthorized access by external attackers, malware, or malicious cyber activity. On the other hand, data privacy refers to the rules governing how data is collected, used, and shared.</p>
                                    </div>
                                </div>
                            </div>

                            {{-- FAQ 3 --}}
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">What is multi factor authentication cyber security?</span>
                                    <span class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                </button>
                                <div class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">Multifactor authentication (MFA) is a layered security approach that requires users to provide multiple credentials to verify their identity before accessing a resource.</p>
                                    </div>
                                </div>
                            </div>

                            {{-- FAQ 4 --}}
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">What are the different roles of the Bangladeshi Cyber Security Centre?</span>
                                    <span class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                </button>
                                <div class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">The role of the ACSC is to lead the Bangladeshi Government&#x27;s operational responses to cybersecurity incidents and coordinate national cybersecurity operations and resources. Additionally, it is responsible for raising awareness about the levels of cyber threats facing Australia.</p>
                                    </div>
                                </div>
                            </div>

                            {{-- FAQ 5 --}}
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">Why is Bangladeshi Cyber Security important?</span>
                                    <span class="faq-icon text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300">+</span>
                                </button>
                                <div class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">A cybersecurity strategy is a high-level plan for securing your organization&#x27;s assets over the next three to five years. However, because technology and cyber threats can change unpredictably, you may need to update your strategy sooner than expected, even if it seems unnecessary right now. Consequently, it&#x27;s important to remain flexible and, at the same time, prepared for evolving risks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative h-64 md:h-150 rounded-2xl order-1 lg:order-2 overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                        <img src="/images/it-support/cyber-security/security.jpg" alt="Fiber Optic Server Cables" class="object-cover w-full h-full" />
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 7: Partner Logos --}}
        <section class="py-16 bg-slate-50 border-t border-blue-100">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16">
                    <img src="/images/it-support/cyber-security/cove.png" alt="Partner Logo" width="120" height="36" class="h-7 md:h-9 w-auto object-contain" />
                    <img src="/images/it-support/cyber-security/nable.png" alt="N-ABLE" width="120" height="36" class="h-7 md:h-9 w-auto object-contain" />
                    <img src="/images/it-support/cyber-security/defender.png" alt="Microsoft Defender" width="120" height="36" class="h-7 md:h-9 w-auto object-contain" />
                    <img src="/images/it-support/cyber-security/datto.png" alt="Datto" width="120" height="36" class="h-7 md:h-9 w-auto object-contain" />
                    <img src="/images/it-support/cyber-security/acronis.png" alt="Acronis" width="120" height="36" class="h-7 md:h-9 w-auto object-contain" />
                </div>
            </div>
        </section>
    </main>
@endsection

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

    // Close all other FAQs
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('faq-open'));
    document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('faq-open'));

    if (!isOpen) {
        answer.classList.add('faq-open');
        icon.classList.add('faq-open');
    }
}
</script>
@endpush

@extends('layouts.app')

@section('title', 'Incident Response | Bismillah Computer & Technology')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div
                class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Cyber Security <br />
                        <span class="text-blue-600 block mt-2">Incident Response</span>
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Protect your
                        business from costly and damaging cybersecurity incidents with Total Solutions IT. Our incident
                        response services are designed to swiftly address and mitigate incidents, minimizing and, where
                        possible, reversing the impact of breaches.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        <a href="https://learn.microsoft.com/en-us/defender-office-365/responding-to-a-compromised-email-account"
                            target="_blank"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            MICROSOFT ACCOUNT
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        <a href="#"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            REPORT INCIDENT
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        <a href="#"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            INCIDENT PLAN
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        <a href="#"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            INCIDENT RESPONSE PLAN
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                    <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                        <a href="/contact"
                            class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/cyber-security/incident-response/hero.jpg" alt="Incident Response Hero"
                        height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                        fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- ==================== SECTION 1: Introduction ==================== --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed text-justify">
                        Our experienced incident response team supports Bangladeshi
                        organizations and businesses across various industries in managing
                        complex and sensitive cybersecurity challenges. With deep industry
                        expertise and an in-depth understanding of the local threat
                        landscape, you can trust us to handle every stage of the breach
                        response cycle efficiently.
                    </p>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 2: How Does It Work? ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4 uppercase tracking-tight">
                        HOW DOES IT WORK?
                    </h2>

                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-6 text-justify">
                        Our team offers rapid responses to any suspected IT breach affecting
                        your organization, including malware, unauthorized access,
                        unauthorized payments, data loss or theft, and more.
                    </p>

                    <ul class="space-y-4 text-xs sm:text-sm text-slate-600">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    CONTAINMENT:
                                </strong>
                                Our incident response team swiftly isolates the affected segment
                                of devices to limit damage and prevent further harm, halting the
                                spread and progression of the attack.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    MONITORING:
                                </strong>
                                We collaborate with our partners to help your business regain
                                control and visibility of your network. While restoring affected
                                systems, our team thoroughly validates them to ensure they are
                                free from any compromise.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    ATTACK INVESTIGATION:
                                </strong>
                                Post-attack, we gather crucial information&mdash;such as logs, errors,
                                and resources from intrusion detection systems&mdash;to inform our
                                forensic analysis. Our team examines the causes, impacts, and
                                potential mitigation strategies.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    REPORTING:
                                </strong>
                                We provide detailed analysis and documentation of the incident
                                for both management and technical teams. Our report includes a
                                comprehensive review of the incident, highlighting lessons
                                learned and outlining a step-by-step account of the event.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 3: Customised Remediation Action Plans ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">
                        Customised Remediation Action Plans
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                        Following every incident, we create tailored remediation action
                        plans to enhance your overall security posture and help prevent
                        future breaches.
                    </p>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 4: Benefits of Cyber Incident Response Services ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">
                        Benefits of Cyber Incident Response Services
                    </h2>
                    <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        <p class="text-justify">
                            In today's digital landscape, vigilance in IT security is crucial for organizations and
                            businesses across Bangladesh. Our highly experienced team is equipped to defend against both
                            known and emerging threats, ensuring rapid response to any cyber attacks or security incidents.
                        </p>
                        <p class="text-justify">
                            By acting as an extension of your IT and security teams, we
                            provide peace of mind through swift incident resolution. Our
                            services minimize disruption to your business and offer the
                            support you need when it matters most.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 5: Why Choose Total Solutions IT ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4">
                        Why Choose Total Solutions IT for Cyber Incident Response Services?
                    </h2>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6 text-justify">
                        Total Solutions IT, in collaboration with our industry partners,
                        develops and implements a 24/7 cyber incident response plan tailored
                        to your unique operational needs. Our services protect against:
                    </p>

                    <ul class="space-y-3 text-xs sm:text-sm text-slate-600 mb-6">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    DESTRUCTIVE ATTACKS:
                                </strong>
                                Safeguarding against malware, phishing, denial of service
                                attacks, and insider threats.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    DATA BREACHES:
                                </strong>
                                Preventing the exposure of customer data, personally
                                identifiable information, and other sensitive information.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    FINANCIAL ATTACKS:
                                </strong>
                                Defending against extortion, ransomware, payment card theft, and
                                more.
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 font-bold">&#x2022;</span>
                            <span>
                                <strong class="text-blue-600 font-semibold uppercase">
                                    IP THEFT:
                                </strong>
                                Protecting against the sophisticated theft of intellectual
                                property, including trade secrets and other sensitive data.
                            </span>
                        </li>
                    </ul>

                    <p
                        class="text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-blue-100 pt-4 text-justify">
                        Our incident response services efficiently triage and contain
                        threats, while also offering consultation and forensic
                        investigations of compromised IT infrastructure, services, and
                        networks.
                    </p>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 6: Contact Us ==================== --}}
        <section class="pt-6 pb-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">
                        Contact Us
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                        To learn more about our incident response services, get in touch with us today. We're here to answer
                        your questions and guide you through the process of getting started. Reach out online or call us at
                        <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880
                            1972-721388</a>.
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection

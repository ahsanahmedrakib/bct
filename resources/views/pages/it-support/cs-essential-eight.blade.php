@extends('layouts.app')

@section('title', 'Essential Eight | Bismillah Computer & Technology')
@section('description', 'The ACSC Essential Eight is a cybersecurity framework from Australia\'s Cyber Security Centre, outlining eight strategies to protect against cyber threats.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">
        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Essential Eight <br />
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">The ACSC Essential Eight is a cybersecurity framework from Australia's Cyber Security Centre, outlining eight strategies to protect against cyber threats. These include patching, application control, user access management, backups, and more, aimed at minimizing the risk of cyber attacks and ensuring robust defense for organizations.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        <a href="#what-is-it" class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            WHAT IS IT
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                        </a>
                        <a href="#what-are-essentials" class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            WHAT ARE ESSENTIALS
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                        </a>
                    </div>
                    <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                        <a href="/contact" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact Us</a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/cyber-security/cloud-and-network/hero.png" alt="BG Image" height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- Section 2: ACSC Essential Eight --}}
        <section class="bg-white" id="what-is-it">
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
                            <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">We help businesses implement and maintain the Essential Eight strategies to build a robust defense mechanism. Contact us today to learn more about how we can strengthen your organization's cyber security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 3: FAQ --}}
        <section class="py-20 bg-white" id="what-are-essentials">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">WHAT ARE THE ESSENTIAL EIGHT?</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="flex flex-col justify-center w-full order-2 lg:order-1">
                        <div class="space-y-4">
                            @php
                            $faqs = [
                                ['title' => 'Application Control', 'description' => 'This relates to the level of application control and constraints you have over user applications and the ability for staff to execute unapproved and malicious programs on workstations. This includes .exe, DLL, scripts and installers.'],
                                ['title' => 'Application Patching', 'description' => 'Updating third-party applications quickly is essential for ensuring the latest security updates and patches are in place. For example, using the latest version of applications and patches of web browsers, Microsoft Office, Java and PDF viewers. This requires frequent use of security vulnerability scanners to detect missing patches and updates as well as removing solutions that are no longer supported by their vendors.'],
                                ['title' => 'Configure Microsoft Office Macro Settings', 'description' => 'This is the amount of freedom your users have to run macros in Microsoft Office applications. Most users should have macros blocked as default unless they have a specific organisational requirement. Only allow vetted macros, either in \'trusted locations\' with limited write access or digitally signed with a trusted certificate.'],
                                ['title' => 'User Application Hardening', 'description' => 'Limitations should be placed on user applications. At its most basic, web browsers should block Flash, ads and Java, with users unable to change these settings. Disable unneeded features in Microsoft Office (such as OLE), and in web browsers and PDF viewers. Internet Explorer 11 should also be disabled.'],
                                ['title' => 'Restrict Administrative Privileges', 'description' => 'Tightly manage administrative privileges and access to operating systems and applications based on user duties. This includes regularly revalidating requests for privileged access to systems and applications, blocking privileged accounts from accessing the internet and using separate operating environments for privileged and unprivileged users. Privileged accounts should not be used for reading email and browsing the web.'],
                                ['title' => 'Patch Operating Systems', 'description' => 'This focuses on keeping operating systems up to date to ensure that OS patches, updates, and security mitigations for internet-facing services are applied within two weeks of release. All computers and network devices with \'extreme security risk\' vulnerabilities should be patched within 48 hours. Security Vulnerability scanners should also be used to identify any missing patches, and any OS that is no longer vendor supported should be replaced.'],
                                ['title' => 'Multi-factor Authentication', 'description' => 'Enforce MFA for all privileged access. Turn on MFA for VPNs, RDP, SSH and other remote access, and for all users when they access an important data repository. Maturity starts by enforcing MFA for all users before they access internet-facing services and third-party providers.'],
                                ['title' => 'Daily Bacups', 'description' => 'Perform daily backups of important new or changed data, software and configuration settings. All unprivileged accounts should be restricted to their own backup environments. Store backups disconnected from the Internet and retain them for at least three months. Test restoration initially, annually and whenever IT infrastructure changes.'],
                            ];
                            @endphp
                            @foreach($faqs as $index => $faq)
                            <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                                <button onclick="toggleFaq({{ $index }})" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                                    <span class="font-medium text-slate-900 pr-4">{{ $faq['title'] }}</span>
                                    <span id="faq-icon-{{ $index }}" class="text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300 faq-icon">+</span>
                                </button>
                                <div id="faq-answer-{{ $index }}" class="faq-answer">
                                    <div class="overflow-hidden">
                                        <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">{{ $faq['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative h-64 md:h-150 rounded-2xl order-1 lg:order-2 overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
                        <img src="/images/it-support/cyber-security/essential-eight/faq.jpg" alt="Fiber Optic Server Cables" class="absolute inset-0 w-full h-full object-cover" />
                    </div>
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
        transition: grid-template-rows 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
    .faq-answer.open {
        grid-template-rows: 1fr;
        opacity: 1;
    }
    .faq-icon {
        transition: transform 0.3s ease-in-out;
    }
    .faq-icon.rotated {
        transform: rotate(45deg);
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleFaq(index) {
        const answer = document.getElementById('faq-answer-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        const isOpen = answer.classList.contains('open');

        // Close all other FAQs
        document.querySelectorAll('.faq-answer').forEach(function(el) {
            el.classList.remove('open');
        });
        document.querySelectorAll('.faq-icon').forEach(function(el) {
            el.classList.remove('rotated');
        });

        // Toggle current FAQ
        if (!isOpen) {
            answer.classList.add('open');
            icon.classList.add('rotated');
        }
    }
</script>
@endpush

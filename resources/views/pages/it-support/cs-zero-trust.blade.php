@extends('layouts.app')

@section('title', 'Zero Trust Framework | Bismillah Computer & Technology')
@section('description', 'Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">
        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Zero Trust <br />
                        <span class="text-blue-600 block mt-2">Framework</span>
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches. This protection is vital for securing individual devices and the broader network they connect to.</p>

                    <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                        <a href="/contact" class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/cyber-security/cloud-and-network/hero.png" alt="Zero Trust Framework Hero" height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- ==================== SECTION 1: Header / Overview ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
            <div class="reveal reveal-fade-up">
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex items-start gap-4 mb-4">
                        {{-- Lock Icon --}}
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-lg shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 uppercase tracking-tight">
                                Zero Trust Framework
                            </h2>
                        </div>
                    </div>

                    <div class="space-y-4 text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed">
                        <p>
                            By employing solutions rooted in a Zero Trust Framework, Microsoft
                            consistently adopts a "never trust, always verify" stance towards
                            security.
                        </p>
                        <p>
                            Rather than presuming the safety of everything within a corporate
                            firewall, the Zero Trust model operates on the assumption of
                            breaches, verifies explicitly, and employs the principle of least
                            privileged access.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== SECTION 2: Architecture Diagram ==================== --}}
        <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up flex justify-center items-center overflow-hidden rounded-lg">
                <img src="/images/it-support/cyber-security/zero-trust-framework/zero-trust.png" alt="Description of the image" height="600" width="1300" />
            </div>
        </section>

        {{-- ==================== SECTION 3: Core Principles ==================== --}}
        <section class="pt-6 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-justify">
                {{-- Principle 1 --}}
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 border-b border-blue-100 pb-2">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800">
                                1. Assumes breach
                            </h3>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Reduces the impact area of potential incidents and segments
                            access. Confirms end-to-end encryption and leverages analytics
                            for enhanced visibility, proactive threat detection, and
                            fortified defenses.
                        </p>
                    </div>
                </div>

                {{-- Principle 2 --}}
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 border-b border-blue-100 pb-2">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800">
                                2. Verifies explicitly
                            </h3>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Authenticates and grants authorization based on a comprehensive
                            range of data points, encompassing user identity, location,
                            device condition, service or workload, data classification, and
                            any anomalies detected.
                        </p>
                    </div>
                </div>

                {{-- Principle 3 --}}
                <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 border-b border-blue-100 pb-2">
                            <h3 class="text-sm sm:text-base font-bold text-slate-800">
                                3. Least privileged access
                            </h3>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Restricts user access through just-in-time and
                            just-enough-access (JIT/JEA), adaptive policies based on risk
                            assessment, and data protection measures to safeguard both data
                            integrity and productivity.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

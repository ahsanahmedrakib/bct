@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                4G/5G
                <span class="text-blue-600 block mt-2">Wireless Connectivity</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Fast 4G and 5G wireless
                internet solutions as primary or backup connectivity for your business.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">With seamless
                failover and plug-and-play hardware, stay connected even when your primary connection goes down.</p>

            {{-- Support Link --}}
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ route('contact') }}"
                    class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact
                    Us</a>
            </div>
        </div>

        {{-- Hero Image --}}
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img alt="BG Image" src="/images/internet/connected.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
        </div>
    </div>

    {{-- Curved bottom shape --}}
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                fill="#f8fafc"></path>
        </svg>
    </div>
</section>

{{-- ==================== WIRELESS SOLUTIONS ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Wireless Internet Solutions</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            {{-- Fast Speeds --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Fast Speeds</h3>
                <p class="text-slate-600 text-sm text-justify">Experience high-speed internet with 4G LTE and 5G connectivity, delivering fast download and upload speeds for your business needs.</p>
            </div>

            {{-- Reliable Backup --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Reliable Backup</h3>
                <p class="text-slate-600 text-sm text-justify">Keep your business online even when your primary connection fails. Automatic failover ensures zero downtime.</p>
            </div>

            {{-- Easy Setup --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plug"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v5a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8Z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Easy Setup</h3>
                <p class="text-slate-600 text-sm text-justify">No complicated wiring or infrastructure required. Get connected quickly with plug-and-play wireless hardware.</p>
            </div>

            {{-- Wide Coverage --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Wide Coverage</h3>
                <p class="text-slate-600 text-sm text-justify">Access internet in areas where fixed-line connections are limited or unavailable with extensive wireless coverage.</p>
            </div>

            {{-- Scalable Plans --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Scalable Plans</h3>
                <p class="text-slate-600 text-sm text-justify">Choose from a range of data plans that fit your usage. Scale up or down as your business requirements change.</p>
            </div>

            {{-- Cost Effective --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Cost Effective</h3>
                <p class="text-slate-600 text-sm text-justify">Affordable wireless plans with no long-term contracts. Pay only for what you need with flexible billing options.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHY CHOOSE 4G/5G ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Why Choose 4G/5G Internet?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Instant Connectivity --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Instant Connectivity</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Get online within minutes without waiting for infrastructure installation.</span></div>
            </div>

            {{-- Failover Protection --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Failover Protection</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Automatic switching keeps your business running during outages.</span></div>
            </div>

            {{-- Portable Solution --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Portable Solution</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Take your internet with you to temporary sites or events.</span></div>
            </div>

            {{-- No Lock-In Contracts --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">No Lock-In Contracts</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Flexible month-to-month plans with no long-term commitments.</span></div>
            </div>

        </div>
    </div>
</section>

@endsection

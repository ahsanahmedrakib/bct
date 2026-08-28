@extends('layouts.app')

@section('title', 'Cordless Phone Solutions | Bismillah Computer & Technology')
@section('description', 'Cordless and wireless phone solutions that let your team roam freely while staying connected to the phone system. DECT and Wi-Fi handsets for every workplace.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Hardware</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Cordless Phone
                <span class="text-blue-600 block mt-2">Solutions</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Stay connected anywhere in
                the office. Our cordless and wireless handset solutions give staff the freedom to move while never missing
                an important call.</p>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <div class="w-full max-w-md lg:max-w-lg aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
        </svg>
    </div>
</section>

{{-- ==================== BENEFITS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">The Freedom to Move</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">From shop floors to warehouses and large office
            spaces, cordless phones keep your team connected while they move.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Full Mobility</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Make and receive calls anywhere on the premises with
                    clear, reliable coverage across your building.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Clear Coverage</h3>
                <p class="text-slate-600 text-sm leading-relaxed">DECT and Wi-Fi handsets provide strong, clear coverage
                    throughout offices, warehouses, and retail spaces.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Phones System Ready</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Handsets that integrate seamlessly with your PBX and
                    phone system, including access to extensions and features.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Long Battery Life</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Durable handsets designed for a full day of use, so your
                    team can rely on them shift after shift.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Easy to Manage</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Simple provisioning and management, allowing you to add
                    and configure handsets with ease.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Rugged Options</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Heavy-duty models for demanding environments like
                    warehouses and manufacturing floors.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== IDEAL FOR ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Ideal for Active Workplaces</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Cordless phones shine in workplaces where staff are
                on the move — retail, hospitality, warehouses, healthcare facilities, and large corporate offices.</p>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    <div>
                        <h4 class="font-semibold text-slate-900">Warehouses &amp; Logistics</h4>
                        <p class="text-slate-600 text-sm">Stay in contact while moving goods and coordinating teams.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    <div>
                        <h4 class="font-semibold text-slate-900">Retail &amp; Hospitality</h4>
                        <p class="text-slate-600 text-sm">Answer calls from anywhere on the floor or venue.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    <div>
                        <h4 class="font-semibold text-slate-900">Healthcare &amp; Aged Care</h4>
                        <p class="text-slate-600 text-sm">Reach staff quickly across wards and facilities.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    <div>
                        <h4 class="font-semibold text-slate-900">Large Offices</h4>
                        <p class="text-slate-600 text-sm">Keep management and staff reachable across the building.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Give Your Team Freedom</h2>
            <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Let us help you choose and set up the right
                cordless phone solution for your workplace.</p>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
        </div>
    </div>
</section>

@endsection

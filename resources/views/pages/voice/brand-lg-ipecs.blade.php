@extends('layouts.app')

@section('title', 'LG iPECS Phone Systems | Bismillah Computer & Technology')
@section('description', 'The Ericsson-LG iPECS and eMG100 phone systems are feature rich yet maintain the ease of use LG is synonymous with. Learn your system in minutes.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Ericsson-LG iPECS
                <span class="text-blue-600 block mt-2">Phone Systems</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">The
                Ericsson-LG iPECS and eMG100 phone systems are so popular because they're feature rich but still maintain the
                ease of use that the LG brand is synonymous with. Your staff can learn the system in just minutes and you don't
                need a PhD to operate any of the Ericsson-LG handsets. For more detailed information about the various
                Ericsson-LG phone systems on offer please read below.</p>
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

{{-- ==================== ABOUT ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Who Are Ericsson-LG Phone Systems?</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Let's face it everyone knows LG. They make top
                quality electronics goods at everyday affordable prices. With respect to their phone system division,
                Ericsson-LG has a long-established pedigree (formerly known as LG Nortel and LG Aria). For the past 20
                years LG phone systems have consistently been one of the top-selling solutions nationally. This is
                attributable to LG's easy to use PBX systems and handsets.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Now that LG have been aggressively promoting the
                Ericsson-LG iPECS phone system it has arguably become the biggest selling phone system today. Bismillah
                Computer &amp; Technology is here to help businesses with their iPECS systems and help grow your business.
            </p>
            <p class="text-slate-600 leading-relaxed text-justify">Bismillah Computer &amp; Technology is here to support
                your telephone systems and help grow your business.</p>
        </div>
    </div>
</section>

{{-- ==================== WHAT ARE THEY LIKE ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">What Are the Ericsson-LG Phone Systems Like?</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">In a word…fantastic. The latest iPECS phone system
            range is state of the art and a quantum leap forward from the previous LG offerings. The real standout in the
            range is the brand new LG iPECS eMG100 for SME business. Its incredible price point has made it an instant
            best-seller since it burst on the scene. Other leading brands simply can't or won't compete and will be playing
            catch-up for quite some time!</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Latest IP Technology</h3>
                <p class="text-slate-600 text-sm leading-relaxed">With all the Ericsson-LG iPECS phone systems you get the
                    latest IP technology and a huge array of CTI and productivity-enhancing programs.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Flexible Connectivity</h3>
                <p class="text-slate-600 text-sm leading-relaxed">The new LG phone system solutions allow users to attach
                    ISDN, PSTN and IP phone lines as well as digital and analogue handsets – not just IP &amp; remote
                    working with software apps.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Modular &amp; Scalable</h3>
                <p class="text-slate-600 text-sm leading-relaxed">The LG phone system iPECS platform is Linux based and
                    being modular allows customers to connect multiple systems and grow to almost any size.</p>
            </div>
        </div>
        <p class="text-slate-600 leading-relaxed max-w-4xl mx-auto text-center mb-12">In all there are 2 Ericsson-LG phone
            system solutions designed to meet the needs of every small to medium size business. Both the eMG100 system and
            UCP100 system are also backwards compatible with older generation hardware, therefore ensuring that a cost
            effective solution can be put in place. Simply choose your size below for more information.</p>
    </div>
</section>

{{-- ==================== eMG100 ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Ericsson-LG iPECS-eMG 100</h3>
                <p class="text-slate-500 font-medium text-sm mb-6">Hybrid phone system for small-sized business (up to 74
                    staff)</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Up to 74 users (Handset Capacity – IP 74, Digital 74, DECT 74, IP DECT 74, plus softphone options)</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Designed for small business that need growth and potential multisite networking</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Rack &amp; wall mountable</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Supports up to 74 PSTN, 74 ISDN 2, 74 PRI channels, 74 SIP trunks, 74 H.323 connections</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Choose from a range of Ericsson-LG IP, Digital, Wireless, DECT, IP DECT and Softphones</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Up to 16 port voicemail and auto attendant</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Unified communications platform</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">32 party conferencing</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Call recording</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Mobile phone connectivity and SIP applications</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Range of advanced CTI applications can be added such as Call centre, Conference bridging, PC softphones, Receptionist console and more</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">IP networking for remote users or multi-site deployments</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Open API</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Advanced technology</span></li>
                </ul>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Ericsson-LG UCP 100</h3>
                <p class="text-slate-500 font-medium text-sm mb-6">Phone system for small-medium sized business (up to 199
                    staff)</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Up to 199 users (Handset Capacity – IP 199, Digital 199, DECT 199, IP DECT 199, plus softphone options)</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Designed for small business that need growth and potential multisite networking</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Rack &amp; wall mountable</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Supports up to 199 ISDN 2, 199 PRI channels, 199 SIP trunks, 199 H.323 connections</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Choose from a range of Ericsson-LG IP, Digital, Wireless, DECT, IP DECT and Softphones</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Up to 8 port voicemail and auto attendant</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Unified communications platform</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">32 party conferencing</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Call recording</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Mobile phone connectivity and SIP applications</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Range of advanced CTI applications can be added such as Call centre, Conference bridging, PC softphones, Receptionist console and more</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">IP networking for remote users or multi-site deployments</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Open API</span></li>
                    <li class="flex items-start gap-3"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 mt-2 shrink-0"></span><span class="text-slate-600 text-sm leading-relaxed">Advanced technology</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Request a Free Consultation</h2>
            <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Looking For Help Choosing The Right Phone
                System For Your Business? Not Sure How Broadband Will Affect Your Phone System? Talk To A Phone Systems
                Expert Today (jargon free).</p>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Book Now</a>
        </div>
    </div>
</section>

@endsection

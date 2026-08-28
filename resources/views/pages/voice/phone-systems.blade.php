@extends('layouts.app')

@section('title', 'Phone Systems | Bismillah Computer & Technology')
@section('description', 'Scalable phone systems for small, medium and enterprise businesses. VoIP, cloud and on-premise PBX solutions with automatic call distributor, advanced voice mail, and more.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Phone Systems
                <span class="text-blue-600 block mt-2">for every business</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Phone systems have
                evolved into Unified Communications platforms that bring voice, video, messaging, and collaboration
                together. We help you choose and deploy the right system to keep your team connected and productive.</p>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help choosing a phone system?</p>
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

{{-- ==================== SOLUTIONS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Solutions for Every Business</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Choose the right phone system for your business size
            and requirements.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 flex flex-col">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-1">Small Business</h3>
                <p class="text-slate-500 text-sm mb-4">1 - 20 users</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Simple, affordable phone systems for growing
                    businesses. Easy setup, essential features, and room to scale.</p>
                <ul class="space-y-3 mb-8 text-sm text-slate-600">
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Up to 20 extensions</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Auto attendant</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Voicemail to email</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Mobile app integration</li>
                </ul>
                <a href="{{ route('voice.ps-small-business') }}" class="mt-auto block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-active transition-colors">Learn More</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-300 flex flex-col">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-brand-blue text-white text-xs font-bold px-4 py-1 rounded-full">Popular</div>
                <h3 class="text-xl font-bold text-slate-900 mb-1">Medium Business</h3>
                <p class="text-slate-500 text-sm mb-4">20 - 100 users</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Feature-rich platforms for growing teams and
                    multiple locations, with queues, integration, and advanced features.</p>
                <ul class="space-y-3 mb-8 text-sm text-slate-600">
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Up to 100 extensions</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Call queues &amp; routing</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>CRM integration</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Call recording</li>
                </ul>
                <a href="{{ route('voice.ps-medium-business') }}" class="mt-auto block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-active transition-colors">Learn More</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 flex flex-col">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-1">Enterprise</h3>
                <p class="text-slate-500 text-sm mb-4">100+ users</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Enterprise-grade unified communications for large
                    organisations with mission-critical and multi-site requirements.</p>
                <ul class="space-y-3 mb-8 text-sm text-slate-600">
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited extensions</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Multi-site support</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Advanced analytics</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Dedicated support</li>
                </ul>
                <a href="{{ route('voice.ps-enterprise-business') }}" class="mt-auto block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-active transition-colors">Learn More</a>
            </div>

        </div>
    </div>
</section>

{{-- ==================== FEATURES ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Advanced Features</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Modern phone systems come packed with the features
            your business needs to look professional and work efficiently.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Unified Communications</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Bring voice, video, messaging and collaboration together
                    in one seamless platform.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Automatic Call Distributor</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Intelligently route incoming calls to the right person or
                    team, every time.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Advanced Voice Mail</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Voicemail to email, visual voicemail, and advanced
                    options so messages never get missed.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Conferencing</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Host reliable audio and video conferences with your team
                    and customers.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Softphone</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Make and receive calls from your computer or mobile app,
                    working from anywhere.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Reporting &amp; Analytics</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Track call activity, queue performance, and team
                    productivity with clear dashboards.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHY CHOOSE US ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Phone Systems Done Right</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">We combine telecommunications and IT expertise to
                deploy the right phone system for your business, whether cloud-hosted, on-premise, or hybrid. From
                assessment and planning to seamless migration and ongoing support, we are with you every step of the way.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Our dedicated team provides 24/7 support, number
                porting, device configuration, and staff training so your business stays connected with confidence.</p>
            <a href="{{ route('contact') }}" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                Get In Touch
            </a>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== FAQS ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">FAQs</h2>
        <div class="space-y-4">
            @php
            $faqs = [
                ['q' => 'What types of phone systems do you offer?', 'a' => 'We offer cloud-hosted (VoIP), on-premise, and hybrid phone systems to suit businesses of every size — from small business PBX to enterprise unified communications platforms.'],
                ['q' => 'Can I keep my existing phone numbers?', 'a' => 'Yes. In most cases your numbers can be ported across to the new system with no disruption, so your business keeps working as usual.'],
                ['q' => 'How long does it take to set up a phone system?', 'a' => 'Most small to medium business systems can be up and running within days. We handle configuration, device setup, and staff training to minimise downtime.'],
            ];
            @endphp
            @foreach($faqs as $faq)
            <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                    <span class="font-medium text-slate-900 pr-4">{{ $faq['q'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <div class="px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">{{ $faq['a'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

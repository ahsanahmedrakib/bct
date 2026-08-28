@extends('layouts.app')

@section('title', 'Small Business Phone Systems | Bismillah Computer & Technology')
@section('description', 'Simple, affordable and powerful phone systems for businesses with 1-20 users. Auto attendant, voicemail to email, mobile apps and more.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Phone Systems</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Small Business
                <span class="text-blue-600 block mt-2">Phone Systems</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Simple, affordable, and
                powerful phone systems designed for businesses with 1-20 users. Get up and running in minutes, not days.</p>
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

{{-- ==================== FEATURES ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Everything Your Small Business Needs</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Professional communication without the complexity.
            Our small business phone systems include all the features you need to look big and stay connected.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Auto Attendant</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Create a professional first impression with custom
                    greetings and menu options that route callers to the right department automatically.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Voicemail to Email</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Receive voicemails as audio attachments directly in your
                    email inbox. Never miss an important message when you are away from your desk.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Mobile App Integration</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Make and receive business calls from your mobile phone
                    using your business number. Stay connected wherever you go.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Call Analytics</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Track call volumes, wait times, and response rates with
                    simple dashboards. Understand your communication patterns and improve customer service.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Scalable Setup</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Start with as few as 2 extensions and add more as your
                    team grows. No costly hardware upgrades required.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Affordable Pricing</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Enterprise-grade features at small business prices.
                    Predictable monthly costs with no hidden fees or long-term contracts.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHY CHOOSE US ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Why Small Businesses Choose Us</h2>
            <p class="text-slate-600 leading-relaxed mb-8 text-justify">We understand that small businesses need reliable
                communication solutions that do not break the bank. Our phone systems are designed to give you a
                professional edge from day one.</p>
            <ul class="space-y-5">
                <li class="flex items-start">
                    <span class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </span>
                    <div>
                        <h4 class="font-semibold text-slate-900">Quick Setup</h4>
                        <p class="text-slate-600 text-sm">Get your phone system running in under 24 hours with our guided
                            setup process.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </span>
                    <div>
                        <h4 class="font-semibold text-slate-900">No IT Staff Required</h4>
                        <p class="text-slate-600 text-sm">Cloud-managed system means no expensive on-site equipment to
                            maintain.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </span>
                    <div>
                        <h4 class="font-semibold text-slate-900">Work From Anywhere</h4>
                        <p class="text-slate-600 text-sm">Desktop and mobile apps keep your team connected whether they are
                            in the office or on the road.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </span>
                    <div>
                        <h4 class="font-semibold text-slate-900">Local Support</h4>
                        <p class="text-slate-600 text-sm">Based in Bangladesh with dedicated local support whenever you
                            need it.</p>
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

{{-- ==================== PERFECT FOR ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Perfect For</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Ideal for a wide range of small businesses looking to
            professionalise their communications.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="relative border-2 rounded-2xl p-6 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="font-bold text-slate-900 mb-2">Professional Services</h3>
                <p class="text-sm text-slate-600">Law firms, accountants, consultants</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="font-bold text-slate-900 mb-2">Retail &amp; eCommerce</h3>
                <p class="text-sm text-slate-600">Shops, e-commerce, customer service</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="font-bold text-slate-900 mb-2">Home Services</h3>
                <p class="text-sm text-slate-600">Plumbers, electricians, HVAC</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="font-bold text-slate-900 mb-2">Healthcare</h3>
                <p class="text-sm text-slate-600">Clinics, dental, veterinary</p>
            </div>
        </div>
    </div>
</section>

@endsection

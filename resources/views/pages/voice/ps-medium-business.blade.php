@extends('layouts.app')

@section('title', 'Medium Business Phone Systems | Bismillah Computer & Technology')
@section('description', 'Feature-rich phone systems for growing businesses with 20-100 users and multiple locations. Call queues, CRM integration, call recording and more.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Phone Systems</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Medium Business
                <span class="text-blue-600 block mt-2">Phone Systems</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Feature-rich
                communication platforms for growing businesses with 20-100 users and multiple locations.</p>
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
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Built for Growing Teams</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">As your business expands, your phone system should
            scale effortlessly. Our medium business solutions offer advanced features with easy management.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Call Queues &amp; Routing</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Intelligent call distribution ensures callers reach the
                    right team member. Set up skills-based routing, time-of-day rules, and overflow queues.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">CRM Integration</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Automatically log calls and pop customer records when
                    calls come in. Integrates with popular CRM platforms to boost productivity.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Call Recording</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Record calls for quality assurance, training, and
                    compliance. Search and playback recordings from an intuitive dashboard.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Multi-Location Support</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Connect multiple offices under one phone system. Transfer
                    calls seamlessly between locations and manage everything from a single dashboard.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Advanced IVR</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Build complex menu systems with multi-level IVR,
                    conditional routing, and database lookups to automate caller handling.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Real-Time Dashboard</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Monitor live call activity, queue status, and agent
                    performance with real-time dashboards and wallboards.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== HOW WE DELIVER ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="flex justify-center order-2 lg:order-1">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Scale With Confidence</h2>
            <p class="text-slate-600 leading-relaxed mb-8 text-justify">Our medium business phone systems grow with your
                company. Add users, locations, and features as you need them — without costly infrastructure changes.</p>
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <span class="text-brand-blue font-bold">1</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Assessment &amp; Planning</h4>
                        <p class="text-slate-600 text-sm">We analyse your current communication needs and design a system
                            that fits your workflow.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <span class="text-brand-blue font-bold">2</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Seamless Migration</h4>
                        <p class="text-slate-600 text-sm">We handle the full setup including number porting, device
                            configuration, and staff training.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                        <span class="text-brand-blue font-bold">3</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Ongoing Support</h4>
                        <p class="text-slate-600 text-sm">Dedicated account management and 24/7 technical support keep your
                            system running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

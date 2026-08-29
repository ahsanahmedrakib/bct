@extends('layouts.app')

@section('title', 'Voice & Telecom Systems | Bismillah Computer & Technology')
@section('description', 'Professional voice and phone system solutions for businesses. VoIP, cloud phone systems, Unified Communications, and hardware from Vodia, Grandstream, Avaya and LG iPECS.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Telecom Systems to help
                <span class="text-blue-600 block mt-2">simplify your business</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We support small
                businesses in flourishing by installing affordable, future-ready phone systems that guarantee secure
                operations with 24/7 support and service from our dedicated team.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">Modern phone
                system solutions require an in-depth understanding of both telecommunications and IT infrastructure. We
                combine both of these fields to ensure the appropriate unified communications solution is made available
                to your business.</p>

            {{-- Brand links --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="{{ route('voice.brand-vodia') }}" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    VODIA
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="{{ route('voice.brand-grandstream') }}" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    GRANDSTREAM
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="{{ route('voice.brand-avaya') }}" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    AVAYA
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="{{ route('voice.brand-lg-ipecs') }}" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    IPECS
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="{{ route('voice.hardware-celfi') }}" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    CEL-FI
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
            </div>

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

{{-- ==================== PHONE SYSTEMS SUPPORT ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Phone Systems Support</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">We support businesses in flourishing by installing
            affordable, future-ready phone systems that guarantee secure operations with 24/7 support and service from
            our dedicated team.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-blue-600">V</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Cloud Phone System – Vodia</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Vodia Networks Inc. offers unified communications
                    solutions for enterprises, contact centers and service providers.</p>
                <a href="{{ route('voice.brand-vodia') }}" class="inline-block mt-4 text-blue-600 font-semibold text-sm hover:underline">Learn More &rarr;</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-blue-600">G</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Grandstream</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Grandstream is an award-winning solutions provider of
                    Unified Communications (UC) at an affordable price point with extreme flexibility.</p>
                <a href="{{ route('voice.brand-grandstream') }}" class="inline-block mt-4 text-blue-600 font-semibold text-sm hover:underline">Learn More &rarr;</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-blue-600">A</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Avaya</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Avaya's IP Office systems are a long-established
                    all-in-one solution for Unified Communications (UC).</p>
                <a href="{{ route('voice.brand-avaya') }}" class="inline-block mt-4 text-blue-600 font-semibold text-sm hover:underline">Learn More &rarr;</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-blue-600">L</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">iPECS</h3>
                <p class="text-slate-600 text-sm leading-relaxed">iPECS phones and phone systems are LG's solution for
                    Unified Communications (UC) platform focusing on the basics of reliability and scalability.</p>
                <a href="{{ route('voice.brand-lg-ipecs') }}" class="inline-block mt-4 text-blue-600 font-semibold text-sm hover:underline">Learn More &rarr;</a>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <span class="text-2xl font-bold text-blue-600">C</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Cel-Fi</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Cel-Fi products are the first carrier-class cellular
                    coverage solution for industry-leading signal gain.</p>
                <a href="{{ route('voice.hardware-celfi') }}" class="inline-block mt-4 text-blue-600 font-semibold text-sm hover:underline">Learn More &rarr;</a>
            </div>

        </div>
    </div>
</section>

{{-- ==================== TRUST / WHY CHOOSE US ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Hundreds of businesses rely on us for their phone system needs.</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Cost Effective Solutions</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We provide clear pricing with no hidden charges,
                    allowing you to budget with confidence and invest in your business growth without unexpected costs.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Future Proof Phone System</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Cloud-based solutions designed to adapt to your
                    business's growth, enabling you to scale your communication with confidence.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Personalised Service &amp; Support</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Receive prompt and reliable support from our dedicated
                    team for all your communication needs.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Specialised Support Services</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Our in-house network engineering team ensures prompt
                    support services for your critical voice infrastructure.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== SECURE CONNECTIONS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Ensure Secure Connections with Dependable Support</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Guarantee that every interaction with your
                clients and customers is safe, smooth, and reliable, thereby enhancing your business reputation.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Get prompt and reliable support from our dedicated
                team, keeping your business communications running around the clock.</p>
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

{{-- ==================== FEATURES ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Enhance Your Business and Boost Productivity with These Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Work Anywhere</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Use your phone from home, a cafe, or the office, staying
                    connected wherever you are.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Easy Calling</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Make calls easily from your phone or computer with
                    powerful softphone applications.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Simple Setup</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Manage everything online with a few clicks – no tech
                    headaches required.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Keep Numbers</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Easily port current numbers to the cloud, avoiding
                    disruption to your business.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Safe &amp; Secure</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Keep your business calls and information protected with
                    robust security protocols.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Cost Saving</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Cut costs on office equipment and phone bills with
                    affordable cloud solutions.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== ONBOARDING TABS ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">A Simple, Stress-Free Process from Day One</h2>

        <div class="flex flex-wrap justify-center gap-4 mb-12" role="tablist">
            <button onclick="switchTab(this, 'tab-onboarding')" class="px-6 py-3 border-2 rounded-xl font-semibold text-sm bg-brand-blue text-white border-brand-blue shadow-sm cursor-pointer">Onboarding</button>
            <button onclick="switchTab(this, 'tab-training')" class="px-6 py-3 border-2 rounded-xl font-semibold text-sm border-blue-100 bg-white text-slate-700 hover:border-blue-300 cursor-pointer">Training Your Team</button>
            <button onclick="switchTab(this, 'tab-programming')" class="px-6 py-3 border-2 rounded-xl font-semibold text-sm border-blue-100 bg-white text-slate-700 hover:border-blue-300 cursor-pointer">Phone Programming</button>
            <button onclick="switchTab(this, 'tab-transfer')" class="px-6 py-3 border-2 rounded-xl font-semibold text-sm border-blue-100 bg-white text-slate-700 hover:border-blue-300 cursor-pointer">Knowledge Transfer</button>
            <button onclick="switchTab(this, 'tab-support')" class="px-6 py-3 border-2 rounded-xl font-semibold text-sm border-blue-100 bg-white text-slate-700 hover:border-blue-300 cursor-pointer">Support Services</button>
        </div>

        <div id="tab-onboarding" class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Onboarding, Your Way</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Implementation can be completed in as
                        little as 3 business days. We will move at your preferred pace, but if there are no obstacles to
                        porting, this process can be expedited. Many of our customers opt for a longer timeline, which is
                        perfectly acceptable.</p>
                    <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                        <span class="text-blue-300 font-medium text-sm">Add image here</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-training" class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hidden">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Training Your Team</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Implementation can be done in as little
                        as 3 business days. We'll move at your pace, but if there are no barriers to porting, this
                        process can happen quickly. Many of our customers prefer a longer timeline, and that is perfectly
                        acceptable.</p>
                    <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                        <span class="text-blue-300 font-medium text-sm">Add image here</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-programming" class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hidden">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Phone Programming</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">If you decide to keep your existing
                        phones, we will log in remotely to program them. Most unlocked, modern phones can be easily
                        programmed. It's a simple process for you.</p>
                    <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                        <span class="text-blue-300 font-medium text-sm">Add image here</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-transfer" class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hidden">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Knowledge Transfer</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Simply provide us with information on the
                        number of phones/people, their identities, and their locations. We will handle everything from
                        there. Our onboarding team will take on the workload, not you.</p>
                    <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                        <span class="text-blue-300 font-medium text-sm">Add image here</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-support" class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 hidden">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Support Services</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Our post-activation support and account
                        management are as exceptional as our onboarding. We uphold high service standards, including live
                        24/7/365 support, a 20-second answer time, and a 94% first contact resolution rate. With dedicated
                        support, account management, and regular service reviews and evaluations, we guarantee your needs
                        will be met to your complete satisfaction.</p>
                    <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                        <span class="text-blue-300 font-medium text-sm">Add image here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function switchTab(btn, id) {
    document.querySelectorAll('[role="tablist"] button').forEach(b => {
        b.classList.remove('bg-brand-blue', 'text-white', 'border-brand-blue');
        b.classList.add('bg-white', 'text-slate-700', 'border-blue-100');
    });
    btn.classList.add('bg-brand-blue', 'text-white', 'border-brand-blue');
    btn.classList.remove('bg-white', 'text-slate-700', 'border-blue-100');
    ['tab-onboarding','tab-training','tab-programming','tab-transfer','tab-support'].forEach(t => {
        document.getElementById(t).classList.add('hidden');
    });
    document.getElementById(id).classList.remove('hidden');
}
</script>

{{-- ==================== SUPPORT SERVICES ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Support Services</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Our post-activation support and account management
                are as exceptional as our onboarding. We uphold high service standards, including live 24/7/365 support, a
                20-second answer time, and a 94% first contact resolution rate. With dedicated support, account management,
                and regular service reviews and evaluations, we guarantee your needs will be met to your complete
                satisfaction.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="border-2 border-blue-100 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-blue-600 mb-1">24/7/365</p>
                    <p class="text-sm text-slate-600">Live Support</p>
                </div>
                <div class="border-2 border-blue-100 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-blue-600 mb-1">20s</p>
                    <p class="text-sm text-slate-600">Answer Time</p>
                </div>
                <div class="border-2 border-blue-100 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-blue-600 mb-1">94%</p>
                    <p class="text-sm text-slate-600">First Contact Resolution</p>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
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
                ['q' => 'What is a Small Business Phone System?', 'a' => 'A small business phone system is a telecommunications solution designed specifically for businesses with fewer employees or locations. It provides features like voicemail, call forwarding, and multiple line functionalities to enhance communication within the company and with clients.'],
                ['q' => 'How does a VoIP Phone System differ from a Traditional Phone System?', 'a' => 'A VoIP (Voice over Internet Protocol) phone system uses the internet to transmit voice calls, while traditional phone systems use landlines or cellular networks. VoIP systems often offer more flexibility, scalability, and features at a lower cost than traditional systems.'],
                ['q' => 'Can I keep my Existing Phone Number when Switching to a New Phone System?', 'a' => 'Yes, most service providers offer number portability, allowing businesses to retain their existing phone numbers when transitioning to a new phone system.'],
                ['q' => 'How can a Small Business Phone System benefit my Company?', 'a' => 'A small business phone system can enhance communication, improve customer service, offer scalability as your business grows, and often comes with features like call analytics, conferencing, and integration with other business tools.'],
                ['q' => 'Is it Expensive to Set up a Phone System for my Small Business?', 'a' => 'The cost of setting up a phone system varies based on the type of system, features required, and the number of users. However, with the advent of cloud-based and VoIP solutions, many affordable options are available for small businesses.'],
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

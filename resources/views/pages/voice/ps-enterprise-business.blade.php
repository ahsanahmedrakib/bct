@extends('layouts.app')

@section('title', 'Enterprise Phone Systems | Bismillah Computer & Technology')
@section('description', 'Enterprise phone systems tailored to the intricate demands of today\'s businesses, featuring advanced capabilities, scalability, and strong performance.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Phone Systems</span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Enterprise
                <span class="text-blue-600 block mt-2">Phone Systems</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Bismillah Computer &amp;
                Technology delivers cutting-edge enterprise phone systems tailored to the intricate demands of today's
                businesses, featuring advanced capabilities, scalability, and strong performance.</p>
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

{{-- ==================== UNDERSTANDING ENTERPRISE PHONE SYSTEMS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Understanding Enterprise Phone Systems</h2>
        <p class="text-slate-600 leading-relaxed mb-10 text-justify max-w-4xl">Enterprise phone systems are advanced
            telecommunication solutions designed to manage high call volumes, support numerous extensions, and provide a
            variety of features customized for large organizations. These systems can be implemented on-premises, in the
            cloud, or as a hybrid solution, blending the advantages of both approaches.</p>
        <div class="flex justify-center mb-12">
            <div class="w-full max-w-3xl aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== ON-PREMISES ADVANTAGES ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Advantages of On-Premises PBX Systems</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">On-premises PBX systems also present unique benefits,
            especially for businesses that need greater control over their telecommunication infrastructure:</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Control</h3>
                <p class="text-slate-600 text-sm leading-relaxed">On-premises systems grant businesses full control over
                    their phone system, allowing for customization and seamless integration with their existing IT
                    infrastructure.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Security</h3>
                <p class="text-slate-600 text-sm leading-relaxed">With on-premises systems, businesses can implement their
                    own security protocols, ensuring that sensitive communications are securely protected.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Reliability</h3>
                <p class="text-slate-600 text-sm leading-relaxed">On-premises systems operate independently of internet
                    connectivity, ensuring reliable performance even during internet outages.</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== WHY CHOOSE US ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Why Choose Bismillah Computer &amp; Technology?</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Opting for us for your enterprise phone system needs
            guarantees top-tier products and outstanding service. Here's why partnering with us is the right choice:</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Expertise and Experience</h3>
                <p class="text-slate-600 text-sm leading-relaxed">With years of experience in the telecommunications
                    industry, our team possesses the knowledge and expertise to deliver the best enterprise phone system
                    solutions.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tailored Solutions</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We recognize that every business is unique. Our solutions
                    are customized to meet your specific needs and requirements, ensuring optimal performance and
                    efficiency.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Reliable Support</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Our dedicated support team is always on hand to assist
                    with installation, maintenance, and any technical issues, ensuring your system operates seamlessly.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Cutting-Edge Technology</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We stay at the forefront of technological advancements to
                    provide you with the most effective and reliable communication solutions.</p>
            </div>
        </div>
        <div class="mt-12 text-center">
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
        </div>
    </div>
</section>

{{-- ==================== ONBOARDING / SUPPORT SERVICES ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">A Simple, Stress-Free Process from Day One</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Onboarding, Your Way</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Implementation can be completed in as little as 3
                    business days. We will move at your preferred pace, but if there are no obstacles to porting, this
                    process can be expedited. Many of our customers opt for a longer timeline, which is perfectly
                    acceptable.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Training Your Team</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Implementation can be done in as little as 3 business
                    days. We'll move at your pace, but if there are no barriers to porting, this process can happen
                    quickly. Many of our customers prefer a longer timeline, and that is perfectly acceptable.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Phone Programming</h3>
                <p class="text-slate-600 text-sm leading-relaxed">If you decide to keep your existing phones, we will log
                    in remotely to program them. Most unlocked, modern phones can be easily programmed. It's a simple
                    process for you.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Knowledge Transfer</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Simply provide us with information on the number of
                    phones/people, their identities, and their locations. We will handle everything from there. Our
                    onboarding team will take on the workload, not you.</p>
            </div>
        </div>
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 mt-8">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Support Services</h3>
            <p class="text-slate-600 leading-relaxed mb-8 text-justify">Our post-activation support and account management
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
<section class="py-16 lg:py-24 bg-white">
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
            <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative bg-white">
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

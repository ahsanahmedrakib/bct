@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Professional
                <span class="text-blue-600 block mt-2">Web Development</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Custom-built websites
                designed to elevate your business and engage your audience.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">From sleek designs
                to powerful functionality, we bring your vision to life with cutting-edge technology.</p>

            {{-- Action Buttons --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="{{ route('web.portfolio') }}"
                    class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                    View Our Work
                    <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>

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
            <img alt="BG Image" src="/images/web/development/hero.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== OUR WEB DEVELOPMENT SERVICES ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Our Web Development Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            {{-- Custom Development --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code"><path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Custom Development</h3>
                <p class="text-slate-600 text-sm text-justify">Tailored solutions built from scratch to match your unique business requirements and goals.</p>
            </div>

            {{-- Responsive Design --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Responsive Design</h3>
                <p class="text-slate-600 text-sm text-justify">Websites that look and perform flawlessly on every device, from desktop to mobile.</p>
            </div>

            {{-- UI/UX Design --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">UI/UX Design</h3>
                <p class="text-slate-600 text-sm text-justify">Intuitive and visually stunning interfaces that enhance user engagement and satisfaction.</p>
            </div>

            {{-- SEO Optimized --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">SEO Optimized</h3>
                <p class="text-slate-600 text-sm text-justify">Built with search engine best practices to help you rank higher and attract more visitors.</p>
            </div>

            {{-- Secure & Reliable --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Secure & Reliable</h3>
                <p class="text-slate-600 text-sm text-justify">Robust security measures and reliable hosting to keep your website safe and online.</p>
            </div>

            {{-- Fast Performance --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Fast Performance</h3>
                <p class="text-slate-600 text-sm text-justify">Optimized for speed with fast load times and smooth interactions for the best user experience.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHAT WE OFFER ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Web Application Development --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Web Application Development</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Full-stack web application development</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Progressive Web Apps (PWA)</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Single Page Applications (SPA)</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">API development and integration</span></div>
            </div>

            {{-- Frontend Development --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Frontend Development</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">React, Next.js, and modern frameworks</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Responsive and mobile-first design</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Interactive UI components</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Cross-browser compatibility</span></div>
            </div>

            {{-- Backend Development --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Backend Development</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Server-side logic and APIs</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Database design and management</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Authentication and authorization</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Cloud deployment and scaling</span></div>
            </div>

            {{-- Maintenance & Support --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Maintenance & Support</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Regular updates and patches</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Performance monitoring</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">Bug fixes and troubleshooting</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg><span class="text-slate-600 text-sm">24/7 technical support</span></div>
            </div>

        </div>
    </div>
</section>

{{-- ==================== BUILDING DIGITAL EXPERIENCES ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <div
                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Building Digital Experiences That Matter</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">We craft custom websites that are not only visually stunning
                    but also highly functional. Our development team uses the latest technologies to ensure your website
                    stands out in the digital landscape.</p>
                <p class="text-slate-600 mb-6 leading-relaxed">From concept to launch, we work closely with you to understand
                    your goals and deliver a website that exceeds expectations. Every project is treated with the same level
                    of dedication and attention to detail.</p>
                <a href="{{ route('contact') }}"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    Start Your Project
                </a>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img src="/images/web/development/laptop.jpg" alt="Understanding Network Security Shield Graphic"
                class="object-cover rounded-xl w-full max-w-lg" />
        </div>
    </div>
</section>

{{-- ==================== PARTNER LOGOS ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center">
        <img src="/images/web/wp.png" alt="WordPress" class="h-auto w-auto object-contain h-16 opacity-60 hover:opacity-100 transition">
        <img src="/images/web/cpanel.png" alt="cPanel" class="h-auto w-auto object-contain h-16 opacity-60 hover:opacity-100 transition">
        <img src="/images/web/yoast.png" alt="Yoast" class="h-auto w-auto object-contain h-16 opacity-60 hover:opacity-100 transition">
        <img src="/images/web/synergy.png" alt="Synergy" class="h-auto w-auto object-contain h-16 opacity-60 hover:opacity-100 transition">
        <img src="/images/web/cloudfare.png" alt="Cloudflare" class="h-auto w-auto object-contain h-16 opacity-60 hover:opacity-100 transition">
    </div>
</section>

@endsection

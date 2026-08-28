@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Our
                <span class="text-blue-600 block mt-2">Portfolio</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Explore our collection
                of websites designed and developed for businesses across various industries.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">Each project
                showcases our commitment to quality, creativity, and delivering results for our clients.</p>

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
            <img alt="BG Image" src="/images/web/web.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== OUR PORTFOLIO ==================== --}}
<section class="py-20 bg-slate-50" id="services">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Our Portfolio</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

            {{-- Ahead Solar BD --}}
            <a href="https://www.aheadsolarbd.com" target="_blank" rel="noopener noreferrer"
                class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 flex flex-col group transition-all duration-300 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative h-80 w-full overflow-hidden">
                    <img src="/images/web/portfolio/aheadsolar.png" alt="Ahead Solar BD"
                        class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-bold text-xl text-brand-blue mb-3">Ahead Solar BD</h3>
                </div>
            </a>

            {{-- Bismillah IT --}}
            <a href="https://it-solution-theta.com" target="_blank" rel="noopener noreferrer"
                class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 flex flex-col group transition-all duration-300 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative h-80 w-full overflow-hidden">
                    <img src="/images/web/portfolio/bismillah-it.png" alt="Bismillah IT"
                        class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-bold text-xl text-brand-blue mb-3">Bismillah IT</h3>
                </div>
            </a>

        </div>
    </div>
</section>

{{-- ==================== WHAT WE CREATE ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">What We Create</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            {{-- Business Websites --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Business Websites</h3>
                <p class="text-slate-600 text-sm text-justify">Professional corporate websites that establish credibility and drive growth for businesses of all sizes.</p>
            </div>

            {{-- eCommerce Stores --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">eCommerce Stores</h3>
                <p class="text-slate-600 text-sm text-justify">Feature-rich online stores designed to maximize conversions and provide a seamless shopping experience.</p>
            </div>

            {{-- Portfolio Sites --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Portfolio Sites</h3>
                <p class="text-slate-600 text-sm text-justify">Creative portfolio websites that showcase your work and help you stand out from the competition.</p>
            </div>

            {{-- Responsive Design --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Responsive Design</h3>
                <p class="text-slate-600 text-sm text-justify">Every website we build looks and performs flawlessly on all devices, from desktop to mobile.</p>
            </div>

            {{-- User Experience --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">User Experience</h3>
                <p class="text-slate-600 text-sm text-justify">Intuitive navigation and engaging interfaces designed to keep visitors on your site longer.</p>
            </div>

            {{-- Quality Assurance --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Quality Assurance</h3>
                <p class="text-slate-600 text-sm text-justify">Thorough testing and quality checks to ensure your website launches without a hitch.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== STATS ==================== --}}
<section class="py-16 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                <div class="text-slate-600 text-sm">Projects Delivered</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-slate-600 text-sm">Happy Clients</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">5+</div>
                <div class="text-slate-600 text-sm">Years Experience</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
                <div class="text-slate-600 text-sm">Client Satisfaction</div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SEE WHAT WE CAN BUILD FOR YOU ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="flex justify-center order-1 lg:order-2">
            <img src="/images/web/portfolio/portfolio.png" alt="Working seamlessly online" class="object-cover w-full max-w-md" />
        </div>
        <div class="order-2 lg:order-1">
            <div
                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">See What We Can Build For You</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Every project in our portfolio represents a unique challenge
                    solved with creativity and technical expertise. We take pride in delivering websites that not only look
                    great but also achieve measurable results for our clients.</p>
                <p class="text-slate-600 mb-6 leading-relaxed">Whether you need a simple business website or a complex
                    eCommerce platform, our team has the skills and experience to bring your vision to life.</p>
                <a href="{{ route('contact') }}"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    Start Your Project
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

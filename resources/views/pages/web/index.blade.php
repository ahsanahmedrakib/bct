@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="reveal reveal-fade-up">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-blue-900 leading-tight">
                {{ 'All your website' }}<br>
                <span class="text-blue-600">{{ 'development needs' }}</span>
            </h1>
        </div>
        <div class="reveal reveal-fade-up mt-8 flex flex-wrap justify-center gap-3">
            <a href="{{ route('web.development') }}" class="px-5 py-2.5 rounded-xl bg-navy text-white text-sm font-medium hover:bg-navy/90 transition">Web Development</a>
            <a href="{{ route('web.seo') }}" class="px-5 py-2.5 rounded-xl bg-navy text-white text-sm font-medium hover:bg-navy/90 transition">SEO</a>
            <a href="{{ route('web.hosting') }}" class="px-5 py-2.5 rounded-xl bg-navy text-white text-sm font-medium hover:bg-navy/90 transition">Domain &amp; Hosting</a>
            <a href="{{ route('web.ecommerce') }}" class="px-5 py-2.5 rounded-xl bg-navy text-white text-sm font-medium hover:bg-navy/90 transition">Ecommerce</a>
            <a href="{{ route('web.portfolio') }}" class="px-5 py-2.5 rounded-xl bg-navy text-white text-sm font-medium hover:bg-navy/90 transition">Portfolio</a>
        </div>
        <div class="reveal reveal-fade-up mt-6 text-sm text-gray-500">
            Need help?
            <a href="#" class="text-blue-600 font-medium hover:underline ml-1">Contact Us</a>
        </div>
        <div class="reveal reveal-fade-up mt-8">
            <img src="/images/web/hero.png" alt="Web Development" class="mx-auto w-full max-w-2xl" loading="eager">
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" fill="#f8fafc" class="w-full h-auto block">
            <path d="M0,120L48,108C96,96,192,72,288,66C384,60,480,72,576,78C672,84,768,84,864,78C960,72,1056,60,1152,60C1248,60,1344,72,1392,78L1440,84V120H0Z"></path>
        </svg>
    </div>
</section>

{{-- Icon Feature Cards --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12 reveal reveal-fade-up">
            Services that make your Website Perform
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            {{-- Web Design --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m18 8 4 4-4 4"></path><path d="m6 16-4-4 4-4"></path><path d="m14.5 4-5 16"></path></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Web Design</h3>
                <p class="text-gray-600 text-justify text-sm">Crafting visually appealing, user-friendly websites that leave a lasting impression on your visitors.</p>
            </div>

            {{-- Ecommerce --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Ecommerce</h3>
                <p class="text-gray-600 text-justify text-sm">Building secure, scalable online stores that drive sales and deliver seamless shopping experiences.</p>
            </div>

            {{-- Accessible --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 13h4"></path><path d="M15 13h2"></path><path d="M7 9h2"></path><path d="M3 21h18"></path><path d="M12 20h4"></path><path d="m2 7 20 0"></path><path d="M12 20v-8"></path></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Accessible</h3>
                <p class="text-gray-600 text-justify text-sm">Creating inclusive websites that everyone can use, regardless of ability or device.</p>
            </div>

            {{-- CMS --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">CMS</h3>
                <p class="text-gray-600 text-justify text-sm">Powerful content management systems that let you update and manage your site with ease.</p>
            </div>

            {{-- SEO --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">SEO</h3>
                <p class="text-gray-600 text-justify text-sm">Optimizing your website to rank higher on search engines and attract more organic traffic.</p>
            </div>

            {{-- Logo Design --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="text-blue-600 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" x2="2" y1="8" y2="22"></line><line x1="17.5" x2="9" y1="15" y2="15"></line></svg>
                </div>
                <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Logo Design</h3>
                <p class="text-gray-600 text-justify text-sm">Designing memorable, professional logos that capture the essence of your brand identity.</p>
            </div>

        </div>
    </div>
</section>

{{-- Split Section 1 --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="reveal reveal-fade-up">
                <img src="/images/web/web.png" alt="Web Development" class="w-full h-auto rounded-2xl">
            </div>
            <div class="reveal reveal-fade-up">
                <x-hoverable-content-card
                    heading="Your website represents your company."
                    text="In today's digital age, your website is often the first impression potential customers have of your business. A well-designed, professional website builds trust, showcases your expertise, and converts visitors into loyal clients. We craft websites that not only look stunning but also deliver results."
                    link="#"
                    link-text="More"
                />
            </div>
        </div>
    </div>
</section>

{{-- Split Section 2 --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="reveal reveal-fade-up order-2 lg:order-1">
                <x-hoverable-content-card
                    heading="Keeping you online, without the hassle."
                    text="Reliable hosting and domain management are the backbone of your online presence. We handle all the technical complexities so you can focus on what matters most &mdash; running your business. From fast load times to secure connections, we keep your website running smoothly around the clock."
                    link="#"
                    link-text="More"
                />
            </div>
            <div class="reveal reveal-fade-up order-1 lg:order-2">
                <img src="/images/web/seo.png" alt="SEO" class="w-full h-auto rounded-2xl">
            </div>
        </div>
    </div>
</section>

{{-- Service List Cards --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Website Development --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Website Development</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Regular backups</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">SSL</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">User-friendly design</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Security</span>
                    </li>
                </ul>
            </div>

            {{-- Hosting + Domains --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Hosting + Domains</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Speed</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Bangladeshi hosting</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">User-friendly design</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Data sovereignty</span>
                    </li>
                </ul>
            </div>

            {{-- SEO + Analytics --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">SEO + Analytics</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Keywords</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Backlinks</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">SEO</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Data tracking</span>
                    </li>
                </ul>
            </div>

            {{-- eCommerce + Portfolio --}}
            <div class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">eCommerce + Portfolio</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Professional design</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Mobile responsiveness</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Secure ecommerce</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                        <span class="text-gray-600">Showcase</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- Partner Logos --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center">
            <div class="reveal reveal-fade-up">
                <img src="/images/web/wp.png" alt="WordPress" class="h-12 w-auto opacity-60 hover:opacity-100 transition">
            </div>
            <div class="reveal reveal-fade-up">
                <img src="/images/web/cpanel.png" alt="cPanel" class="h-12 w-auto opacity-60 hover:opacity-100 transition">
            </div>
            <div class="reveal reveal-fade-up">
                <img src="/images/web/yoast.png" alt="Yoast" class="h-12 w-auto opacity-60 hover:opacity-100 transition">
            </div>
            <div class="reveal reveal-fade-up">
                <img src="/images/web/synergy.png" alt="Synergy" class="h-12 w-auto opacity-60 hover:opacity-100 transition">
            </div>
            <div class="reveal reveal-fade-up">
                <img src="/images/web/cloudfare.png" alt="Cloudflare" class="h-12 w-auto opacity-60 hover:opacity-100 transition">
            </div>
        </div>
    </div>
</section>

@endsection

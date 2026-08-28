@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Search Engine
                <span class="text-blue-600 block mt-2">Optimisation (SEO)</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We help your business get
                found on Google with data-driven SEO strategies that deliver measurable results.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">From keyword
                research to technical optimization, we ensure your website ranks for the right terms.</p>

            {{-- Action Buttons --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="{{ route('contact') }}"
                    class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                    Get SEO Audit
                    <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="{{ route('web.seo') }}"
                    class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                    Our Services
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
            <img alt="BG Image" src="/images/web/seo.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== OUR SEO SERVICES ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Our SEO Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

            {{-- Analytics and Reporting --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart-3"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Analytics and Reporting</h3>
                <p class="text-slate-600 text-sm text-justify">Gain valuable insights into your SEO performance with our monthly reporting enabling data-driven decision-making and continuous improvement.</p>
            </div>

            {{-- Local SEO Strategies --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Local SEO Strategies</h3>
                <p class="text-slate-600 text-sm text-justify">Target local customers with tailored SEO strategies, enhancing your presence in specific regions and dominate search in your area.</p>
            </div>

            {{-- SEO Content --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">SEO Content</h3>
                <p class="text-slate-600 text-sm text-justify">We write SEO content tailored to increasing your authority on targeted words proving to Google your website is about that topic.</p>
            </div>

            {{-- Link Building --}}
            <div class="border-2 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Link Building</h3>
                <p class="text-slate-600 text-sm text-justify">Getting other websites to link to your website is like someone voting for you. These are called back links and we do the hard work in creating them for you.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== CHOOSING THE RIGHT SEARCH TERMS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1">
            <div
                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Choosing the right search terms to optimise</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Selecting the right phrases and words to optimise your
                    website is very important. We research and track the most appropriate search terms to make sure people
                    are googling them so you don't waste time trying to be found for something nobody is searching for.</p>
            </div>
        </div>
        <div class="flex justify-center order-1 lg:order-2">
            <img src="/images/web/seo/seo.png" alt="Working seamlessly online" class="object-cover w-full max-w-md" />
        </div>
    </div>
</section>

{{-- ==================== INTRODUCING YOAST ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="flex justify-center">
            <img src="/images/web/yoast.png" alt="Yoast SEO Plugin" class="object-contain w-full max-w-xs" />
        </div>
        <div>
            <div
                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Introducing Yoast.</h2>
                <p class="text-slate-600 mb-4 leading-relaxed">Yoast is Search Engine Optimisation (SEO) for everyone.
                    Whether you're a beginner, a blogger or a big business, Yoast gets your website into perfect shape to
                    compete in the search results.</p>
                <p class="text-slate-600 mb-6 leading-relaxed">Over 13 million users have the Yoast SEO plugin installed on
                    their WordPress website to get more visitors from Google and social media.</p>
                <div class="flex items-center gap-2 text-blue-600 font-medium text-sm mb-4">
                    <span>HOW WE USE THIS</span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed">yoast, seo, search engine optimisation, search engine,
                    search engines, online store, ecommerce</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== HOW DOES IT WORK ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">How does it work?</h2>
        <p class="text-center text-slate-600 mb-12 max-w-3xl mx-auto">Search Engine Optimization (SEO) works by optimizing
            various elements of a website to improve its visibility and ranking in search engine results. Here's a
            simplified explanation of how SEO works:</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Adds structured data --}}
            <div class="relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-3 mb-4">
                    <svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    <h3 class="font-bold text-slate-900">Adds structured data to help Google.</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">Adding structured data is one of the most effective ways
                    of getting your site noticed by search engines. Yoast SEO automatically adds the right structured data
                    and comes with options for you to enrich your site with extra structured data. Increases your chances
                    to get rich results!</p>
            </div>

            {{-- Streamlines your SEO strategy --}}
            <div class="relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-3 mb-4">
                    <svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    <h3 class="font-bold text-slate-900">Streamlines your SEO strategy.</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">Bid farewell to the complexities of SEO. Yoast SEO handles
                    the technical aspects, such as canonical URLs and meta tags, automating essential optimizations behind
                    the scenes. Unleash your focus on creating captivating content that connects with your audience.</p>
            </div>

            {{-- Climbs those rankings --}}
            <div class="relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-3 mb-4">
                    <svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    <h3 class="font-bold text-slate-900">Climbs those rankings.</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed">Take advantage of advanced features like XML sitemaps,
                    title and meta description templating, and Schema.org structured data integration. Empower search
                    engines to fully understand and appreciate your website, helping you reach the top of search results.</p>
            </div>

        </div>
        <div class="text-center mt-10">
            <a href="https://yoast.com" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold text-sm hover:bg-blue-700 transition-colors">
                VISIT YOAST
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ==================== SEO POINTERS ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Search Engine Optimisation (SEO) pointers.</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">

            {{-- Keyword Research --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">Keyword Research</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Identify relevant keywords that users are likely to search for when looking for information related to your website.</p>
                </div>
            </div>

            {{-- On-Page SEO --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19 7-7 3 3-7 7-3-3z"/><path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="m2 2 7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">On-Page SEO</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Optimize individual pages of your website for selected keywords. This involves including keywords in titles, headings, meta descriptions, and throughout the content.</p>
                </div>
            </div>

            {{-- Quality Content --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">Quality Content</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Create high-quality, relevant, and valuable content. Search engines aim to provide users with the best possible results, so quality content is crucial for ranking.</p>
                </div>
            </div>

            {{-- User Experience --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">User Experience</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Ensure a positive user experience by having a well-designed and user-friendly website. This includes fast loading times, mobile responsiveness, and easy navigation.</p>
                </div>
            </div>

            {{-- Backlinks --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">Backlinks</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Acquire high-quality backlinks from reputable websites. Backlinks act as a vote of confidence for your content, contributing to higher search engine rankings.</p>
                </div>
            </div>

            {{-- Technical SEO --}}
            <div class="flex gap-4 relative items-start border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 mb-2">Technical SEO</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Optimize technical aspects of your website, such as improving site speed, using clean URL structures, and having a sitemap. This helps search engines crawl and index your site more efficiently.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

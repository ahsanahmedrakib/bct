@extends('layouts.app')

@section('title', 'Web Development | Bismillah Computer & Technology')
@section('description', 'Professional web development, hosting, SEO, and ecommerce solutions by Bismillah Computer &
    Technology.')

@section('content')

    {{-- Hero --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-356 mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    All your website<br>
                    <span class="text-blue-600 block mt-2">development needs</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We craft professional,
                    high-performing websites that build trust, showcase your expertise, and convert visitors into loyal
                    clients. From design to development, SEO to hosting — we handle it all.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="{{ route('web.development') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Web Development
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="{{ route('web.seo') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        SEO
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="{{ route('web.hosting') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Domain &amp; Hosting
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="{{ route('web.ecommerce') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Ecommerce
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img src="/images/web/hero.png" alt="Web Development" height="400" width="600"
                    class="rounded-lg w-full max-w-md lg:max-w-lg" loading="eager">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- Icon Feature Cards --}}
    <section class="py-20 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12 reveal reveal-fade-up">
                Services that make your Website Perform
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                {{-- Web Design --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 8 4 4-4 4"></path>
                            <path d="m6 16-4-4 4-4"></path>
                            <path d="m14.5 4-5 16"></path>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Web Design</h3>
                    <p class="text-gray-600 text-justify text-sm">Crafting visually appealing, user-friendly websites that
                        leave a lasting impression on your visitors.</p>
                </div>

                {{-- Ecommerce --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                            <path d="M3 6h18"></path>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Ecommerce</h3>
                    <p class="text-gray-600 text-justify text-sm">Building secure, scalable online stores that drive sales
                        and deliver seamless shopping experiences.</p>
                </div>

                {{-- Accessible --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M7 13h4"></path>
                            <path d="M15 13h2"></path>
                            <path d="M7 9h2"></path>
                            <path d="M3 21h18"></path>
                            <path d="M12 20h4"></path>
                            <path d="m2 7 20 0"></path>
                            <path d="M12 20v-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Accessible</h3>
                    <p class="text-gray-600 text-justify text-sm">Creating inclusive websites that everyone can use,
                        regardless of ability or device.</p>
                </div>

                {{-- CMS --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                            <path d="M21 3v5h-5"></path>
                            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                            <path d="M8 16H3v5"></path>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">CMS</h3>
                    <p class="text-gray-600 text-justify text-sm">Powerful content management systems that let you update
                        and manage your site with ease.</p>
                </div>

                {{-- SEO --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">SEO</h3>
                    <p class="text-gray-600 text-justify text-sm">Optimizing your website to rank higher on search engines
                        and attract more organic traffic.</p>
                </div>

                {{-- Logo Design --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="text-blue-600 mb-4 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                            <line x1="16" x2="2" y1="8" y2="22"></line>
                            <line x1="17.5" x2="9" y1="15" y2="15"></line>
                        </svg>
                    </div>
                    <h3 class="text-blue-900 text-center font-semibold text-lg mb-2">Logo Design</h3>
                    <p class="text-gray-600 text-justify text-sm">Designing memorable, professional logos that capture the
                        essence of your brand identity.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- Split Section 1 --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/web.png" alt="Web Development" class="w-full h-auto rounded-2xl">
                </div>
                <div class="reveal reveal-fade-up">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Your website represents your company.</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">In today's digital age, your website is often the
                            first impression potential customers have of your business. A well-designed, professional
                            website builds trust, showcases your expertise, and converts visitors into loyal clients. We
                            craft websites that not only look stunning but also deliver results.</p>
                        <a href="#" class="text-blue-600 font-medium flex items-center hover:text-blue-800">More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Split Section 2 --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="reveal reveal-fade-up order-2 lg:order-1">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Keeping you online, without the hassle.</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">Reliable hosting and domain management are the
                            backbone of your online presence. We handle all the technical complexities so you can focus on
                            what matters most &mdash; running your business. From fast load times to secure connections, we
                            keep your website running smoothly around the clock.</p>
                        <a href="#" class="text-blue-600 font-medium flex items-center hover:text-blue-800">More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </div>
                <div class="reveal reveal-fade-up order-1 lg:order-2">
                    <img src="/images/web/seo.png" alt="SEO" class="w-full h-auto rounded-2xl">
                </div>
            </div>
        </div>
    </section>

    {{-- Service List Cards --}}
    <section class="py-20 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- Website Development --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Website Development</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Regular backups</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">SSL</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">User-friendly design</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Security</span>
                        </li>
                    </ul>
                </div>

                {{-- Hosting + Domains --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Hosting + Domains</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Speed</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Bangladeshi hosting</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">User-friendly design</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Data sovereignty</span>
                        </li>
                    </ul>
                </div>

                {{-- SEO + Analytics --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">SEO + Analytics</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Keywords</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Backlinks</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">SEO</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Data tracking</span>
                        </li>
                    </ul>
                </div>

                {{-- eCommerce + Portfolio --}}
                <div
                    class="reveal reveal-fade-up relative border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 pt-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">eCommerce + Portfolio</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Professional design</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Mobile responsiveness</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Secure ecommerce</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                            <span class="text-gray-600">Showcase</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- Partner Logos --}}
    <section class="py-20 bg-white">
        <div class="max-w-356 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center">
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/wp.png" alt="WordPress"
                        class="h-12 w-auto opacity-60 hover:opacity-100 transition">
                </div>
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/cpanel.png" alt="cPanel"
                        class="h-12 w-auto opacity-60 hover:opacity-100 transition">
                </div>
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/yoast.png" alt="Yoast"
                        class="h-12 w-auto opacity-60 hover:opacity-100 transition">
                </div>
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/synergy.png" alt="Synergy"
                        class="h-12 w-auto opacity-60 hover:opacity-100 transition">
                </div>
                <div class="reveal reveal-fade-up">
                    <img src="/images/web/cloudfare.png" alt="Cloudflare"
                        class="h-12 w-auto opacity-60 hover:opacity-100 transition">
                </div>
            </div>
        </div>
    </section>

@endsection

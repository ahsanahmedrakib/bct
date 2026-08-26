@extends('layouts.app')

@section('title', 'Managed IT Services | Bismillah Computer & Technology')
@section('description', 'Proactive managed IT services including monitoring, maintenance, helpdesk, and strategic IT
    planning for your business.')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div
                class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Managed Services that reduce downtime
                        <span class="text-blue-600 block mt-2">and enhance productivity</span>
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Collaborate with
                        Bismillah IT to craft, deploy, and oversee your IT solution. Our solutions are designed to fuel your
                        success, foster growth, and ensure business continuity by equipping your team with cutting-edge
                        technology. We provide a diverse array of IT solutions, encompassing Cloud, Networking, WiFi, and
                        Server infrastructure solutions, all supported by top-tier Managed IT Services.</p>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">If your current IT
                        solution falls short of meeting your business's competitive needs and growth aspirations, reach out
                        to a Bismillah IT consultant to explore enhancements for your systems.</p>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/managed-it.png" alt="Managed IT Services" height="400" width="600"
                        class="rounded-lg" />
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

        {{-- WHY CHOOSE US SECTION --}}
        <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-6">Why Choose Us?</h2>
                <p class="text-slate-600 mb-12 leading-relaxed text-center max-w-3xl mx-auto">
                    Bismillah IT is committed to meeting the IT needs of your business.
                    Our dedication to providing exceptional managed IT services stems from
                    an extensive understanding of the unique obstacles faced by small to
                    medium-sized businesses (SMBs).
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @php
                        $features = [
                            [
                                'title' => 'Access to Expertise',
                                'desc' =>
                                    'Tap into our deep pool of IT expertise and cutting-edge technologies to keep your business at the forefront of innovation and efficiency.',
                                'icon' => 'user',
                            ],
                            [
                                'title' => 'Increase Business Productivity & Efficiency',
                                'desc' =>
                                    'Experience seamless IT operations that enable your team to focus on core business activities without the distractions of technical issues.',
                                'icon' => 'star',
                            ],
                            [
                                'title' => 'Scalable & Growth-Focused Solutions',
                                'desc' =>
                                    'Our services are designed to grow with your business, ensuring your IT environment can support your expanding requirements and scale as you need.',
                                'icon' => 'ruler',
                            ],
                            [
                                'title' => 'Cost Management & Control',
                                'desc' =>
                                    'Benefit from predictable IT spending with our fixed monthly plans, allowing for better financial planning and control over your IT budget.',
                                'icon' => 'dollar',
                            ],
                            [
                                'title' => 'Enhance User Experience',
                                'desc' =>
                                    'Gain fast, reliable IT support that minimises downtime and keeps your operations running smoothly, delivering a positive experience for your team and your customers.',
                                'icon' => 'users',
                            ],
                            [
                                'title' => 'Improve Compliance & Risk Management',
                                'desc' =>
                                    'Stay ahead of compliance requirements and reduce your risk profile with our proactive security measures and industry-best practices.',
                                'icon' => 'briefcase',
                            ],
                        ];
                    @endphp
                    @foreach ($features as $feature)
                        <div
                            class="relative bg-white rounded-xl shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 p-6 pt-10 text-center flex flex-col items-center z-10 transition-all duration-300 border-blue-100 hover:border-blue-300 hover:-translate-y-1">
                            <div
                                class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-white">
                                    @if ($feature['icon'] === 'user')
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    @elseif ($feature['icon'] === 'star')
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    @elseif ($feature['icon'] === 'ruler')
                                        <path
                                            d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z">
                                        </path>
                                        <path d="m14.5 12.5 2-2"></path>
                                        <path d="m11.5 9.5 2-2"></path>
                                        <path d="m8.5 6.5 2-2"></path>
                                        <path d="m17.5 15.5 2-2"></path>
                                    @elseif ($feature['icon'] === 'dollar')
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    @elseif ($feature['icon'] === 'users')
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    @elseif ($feature['icon'] === 'briefcase')
                                        <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                    @endif
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-800 mb-3 text-[15px] leading-tight">{{ $feature['title'] }}</h4>
                            <p class="text-[13px] text-slate-500 leading-relaxed mb-5 grow text-justify">
                                {{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 3: Harness Decades of IT Excellence --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="networking">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-12 items-center my-12">
                <div class="order-2 lg:order-1">
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Managed IT Services</span>
                        <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Harness Decades of IT Excellence to Enhance
                            Your Business Operations</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">With over 20 years of experience providing managed IT
                            services
                            to businesses, Bismillah IT delivers unparalleled expertise and accountability. We recognize the
                            vital role IT systems play in your operations and take the time to understand their
                            complexities.</p>
                        <p class="text-slate-600 mb-6 leading-relaxed">Our team offers 24/7 system monitoring to ensure
                            seamless
                            business continuity, proactively identifying and resolving
                            potential issues before they cause disruptions. With unlimited
                            support, we're always available to provide swift solutions to
                            your IT challenges.</p>
                        <p class="text-slate-600 mb-6 leading-relaxed">Our managed IT plans go beyond basic support—they
                            transform your
                            IT environment into a strategic asset that propels your business
                            forward.</p>
                        <a href="{{ route('contact') }}"
                            class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                            Book a free consultation
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative h-75 w-full order-1 lg:order-2">
                    <img src="/images/it-support/managed-it/section-1.jpg" alt="Servers" height="1600" width="1200"
                        class="object-cover rounded-2xl w-full h-full" />
                </div>
            </div>
        </section>

        {{-- SECTION 4: Drive Your Digital Transformation --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="it">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-12 items-center mb-12">
                <div class="relative h-75 w-full">
                    <img src="/images/it-support/managed-it/section-2.jpg" alt="Managed Services" height="1600"
                        width="1200" class="object-cover rounded-2xl w-full h-full" />
                </div>
                <div>
                    <div
                        class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Cost-Effective Managed
                            Services</span>
                        <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Drive Your Digital Transformation with
                            Cost-Effective Managed Services</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">At Bismillah IT, we believe your IT systems should
                            align
                            with your business needs—not be constrained by your service
                            provider's limitations.</p>
                        <p class="text-slate-600 mb-6 leading-relaxed">We take the time to gain a thorough understanding of
                            your
                            business, including your IT infrastructure, long-term
                            strategies, objectives, and daily operations. With this insight,
                            we craft a tailored service level agreement (SLA) that delivers
                            the right technology solutions—rather than a generic,
                            one-size-fits-all approach.</p>
                        <p class="text-slate-600 mb-6 leading-relaxed">Our commitment to exceptional customer service has
                            earned us
                            prestigious awards, highlighting our dedication to consistently
                            exceeding your expectations.</p>
                        <a href="{{ route('contact') }}"
                            class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                            Book a free consultation
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

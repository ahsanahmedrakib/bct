@extends('layouts.app')

@section('title', 'Small Business Phone Systems | Bismillah Computer & Technology')
@section('description',
    'Cloud-based phone systems for small businesses reduce costs while improving flexibility. Auto
    attendants, call routing, voicemail to email, mobile apps and more.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Small Business
                    <span class="text-blue-600 block mt-2">Phone System</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Cloud-based phone
                    systems
                    help small businesses reduce costs while improving flexibility.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="{{ route('voice.ps-medium-business') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        FIND OUT MORE
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        CONTACT US
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
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
                <img alt="BG Image" src="/images/voice/phone-systems/small-business/hero.png"
                    class="rounded-lg w-full max-w-md lg:max-w-lg" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ==================== WHO IS THE CLOUD PHONE SYSTEM FOR ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="w-full">
                <img src="/images/voice/phone-systems/small-business/cloud.png" alt="Section"
                    class="w-full h-auto object-cover" />
            </div>
            <div
                class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Cloud Phone System, who is it for?</h2>
                <p class="text-slate-600 leading-relaxed mb-6 text-justify"><strong>Cloud-based phone systems</strong> are
                    ideal for <strong>small and medium-sized businesses</strong> that want a modern communication solution
                    without the cost and complexity of traditional phone infrastructure. Instead of installing and
                    maintaining
                    expensive onsite PBX hardware, cloud phone systems operate over the internet using <strong>VoIP
                        technology</strong>, making them more flexible and cost-effective. Businesses that have remote
                    staff,
                    multiple locations, or plans to grow often benefit the most from cloud-based communication systems. They
                    provide the tools businesses need to stay connected while keeping costs predictable and manageable.</p>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Cloud phone systems help businesses save money by:</h3>
                <ul class="space-y-3 text-slate-600">
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span><strong>Reducing upfront hardware costs</strong> – no expensive phone servers
                            required</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span><strong>Lowering call charges</strong> with modern VoIP technology</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span><strong>Providing predictable monthly pricing</strong> for easier budgeting</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span><strong>Allowing easy scalability</strong> as staff are added or removed</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span><strong>Reducing maintenance costs</strong> through cloud-hosted infrastructure</span>
                    </li>
                </ul>
                <p class="text-slate-600 leading-relaxed mt-6 text-justify">By combining flexibility, modern communication
                    features, and lower operational costs, <strong>cloud-based phone systems provide an affordable and
                        scalable solution for growing businesses.</strong></p>
            </div>
        </div>
    </section>

    {{-- ==================== CLOUD PHONE SYSTEM BENEFITS ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Cloud Phone System Benefits</h2>
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify"><strong>Cloud-based phone systems</strong>
                        provide <strong>small businesses</strong> with a modern, flexible way to manage communications
                        without
                        the cost and complexity of traditional on-site phone systems. Instead of expensive PBX hardware,
                        calls
                        are handled through the internet, making it easier to scale, manage, and support as your business
                        grows.</p>
                    <p class="text-slate-600 leading-relaxed text-justify">With a <strong>cloud phone system</strong>,
                        businesses can benefit from improved productivity, lower operating costs, and a more professional
                        customer experience.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Key benefits include:</h3>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Lower upfront costs</strong> – No expensive phone system hardware or
                                maintenance contracts</span></li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Work from anywhere</strong> – Staff can make and receive calls from laptops,
                                desk phones, or mobile apps</span></li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Professional call handling</strong> – Features like <strong>auto attendants,
                                    call routing, and voicemail to email</strong></span></li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Easy scalability</strong> – Quickly add or remove users as your business
                                grows</span></li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Business continuity</strong> – Calls can be redirected during outages or
                                remote work situations</span></li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg><span><strong>Advanced features</strong> – Integration with <strong>CRM systems, Microsoft
                                    Teams, and AI call analytics</strong></span></li>
                    </ul>
                    <p class="text-slate-600 text-sm leading-relaxed mt-6">For growing organisations, <strong>cloud
                            telephony</strong> delivers enterprise-level functionality while remaining simple and affordable
                        to
                        manage.</p>
                </div>
            </div>
            <div class="mt-10 flex flex-wrap gap-4 justify-center">
                <a href="{{ route('voice.feature-microsoft-teams') }}"
                    class="inline-flex px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Find
                    Out More</a>
                <a href="{{ route('contact') }}"
                    class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact
                    Us</a>
            </div>
        </div>
    </section>

    {{-- ==================== CLOUD PHONE SYSTEM FEATURES ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Cloud Phone System Features</h2>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-4">A <strong>cloud-based phone system</strong>
                provides
                <strong>small businesses</strong> with powerful communication features that were traditionally only
                available
                to large organisations. Because the system runs over the internet, businesses can access advanced tools
                without the need for expensive on-site phone infrastructure.
            </p>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Modern <strong>VoIP phone systems</strong> are
                designed to improve efficiency, customer experience, and team collaboration.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Auto Attendants &amp; Digital Receptionists</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Professionally answer and direct calls.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Smart Call Routing</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Send calls to the right person, department, or
                        location.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Voicemail to Email</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Messages can be received and managed anywhere.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Mobile &amp; Desktop Apps</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Staff can make and receive calls from any device.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Call Recording &amp; Analytics</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Monitor service quality and improve performance.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Conferencing &amp; Video Meetings</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Better collaboration with teams and clients.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 md:col-span-2 lg:col-span-3">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">CRM &amp; Business Software Integration</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Link calls with customer records.</p>
                </div>
            </div>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mt-10">These features help <strong>small
                    businesses operate more professionally, stay connected from anywhere, and deliver a better customer
                    experience.</strong></p>
            <div class="mt-10 flex flex-wrap gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact
                    Us</a>
            </div>
        </div>
    </section>

    {{-- ==================== SUPPORT ==================== --}}
    <section class="py-16 lg:py-24 big-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">

            <div
                class="order-2 lg:order-1bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Ensure Secure Connections with Dependable
                    Support</h2>
                <p class="text-slate-600 leading-relaxed mb-6 text-justify"><strong>Bismillah Computer &amp;
                        Technology</strong> provides reliable <strong>ongoing support for business phone systems</strong>,
                    ensuring
                    your communication platform continues to operate smoothly and efficiently. A dependable phone system is
                    essential for daily operations, and our team is available to assist with system management,
                    configuration
                    changes, and troubleshooting when needed. We support businesses using modern <strong>VoIP and
                        cloud-based
                        phone systems</strong>, helping them adapt as their teams grow and communication needs evolve.</p>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Our phone system support services include:</h3>
                <ul class="space-y-3 text-sm text-slate-600">
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span>Technical support and troubleshooting</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span>User and extension management</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span>Call routing and configuration updates</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span>System monitoring and maintenance</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 text-blue-600 mr-3 shrink-0 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span>Advice on improving communication systems</span></li>
                </ul>
                <p class="text-slate-600 leading-relaxed mt-6 text-justify">With <strong>Bismillah Computer &amp;
                        Technology
                        support</strong>, businesses can rely on consistent and professional communication.</p>
            </div>

            <div class="w-full order-1 lg:order-2">
                <img src="/images/industries/section.png" alt="Section" class="w-full h-auto object-cover" />
            </div>
        </div>
    </section>

    {{-- ==================== ONBOARDING / SUPPORT SERVICES ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">A Simple, Stress-Free Process from Day One</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Onboarding, Your Way</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Implementation can be completed in as little as 3
                        business days. We will move at your preferred pace, but if there are no obstacles to porting, this
                        process can be expedited. Many of our customers opt for a longer timeline, which is perfectly
                        acceptable.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Training Your Team</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Implementation can be done in as little as 3 business
                        days. We'll move at your pace, but if there are no barriers to porting, this process can happen
                        quickly. Many of our customers prefer a longer timeline, and that is perfectly acceptable.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Phone Programming</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">If you decide to keep your existing phones, we will
                        log
                        in remotely to program them. Most unlocked, modern phones can be easily programmed. It's a simple
                        process for you.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Knowledge Transfer</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Simply provide us with information on the number of
                        phones/people, their identities, and their locations. We will handle everything from there. Our
                        onboarding team will take on the workload, not you.</p>
                </div>
            </div>
            <div
                class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 mt-8">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Support Services</h3>
                <p class="text-slate-600 leading-relaxed mb-8 text-justify">Our post-activation support and account
                    management
                    are as exceptional as our onboarding. We uphold high service standards, including live 24/7/365 support,
                    a
                    20-second answer time, and a 94% first contact resolution rate. With dedicated support, account
                    management,
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
                <a href="{{ route('contact') }}"
                    class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact
                    Us</a>
            </div>
        </div>
    </section>

    {{-- ==================== FAQS ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Small Business Phone System FAQs</h2>
            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'q' => 'What is a Small Business Phone System?',
                            'a' =>
                                'A small business phone system is a telecommunications solution designed specifically for businesses with fewer employees or locations. It provides features like voicemail, call forwarding, and multiple line functionalities to enhance communication within the company and with clients.',
                        ],
                        [
                            'q' => 'How does a VoIP Phone System differ from a Traditional Phone System?',
                            'a' =>
                                'A VoIP (Voice over Internet Protocol) phone system uses the internet to transmit voice calls, while traditional phone systems use landlines or cellular networks. VoIP systems often offer more flexibility, scalability, and features at a lower cost than traditional systems.',
                        ],
                        [
                            'q' => 'Can I keep my Existing Phone Number when Switching to a New Phone System?',
                            'a' =>
                                'Yes, most service providers offer number portability, allowing businesses to retain their existing phone numbers when transitioning to a new phone system.',
                        ],
                        [
                            'q' => 'How can a Small Business Phone System benefit my Company?',
                            'a' =>
                                'A small business phone system can enhance communication, improve customer service, offer scalability as your business grows, and often comes with features like call analytics, conferencing, and integration with other business tools.',
                        ],
                        [
                            'q' => 'Is it Expensive to Set up a Phone System for my Small Business?',
                            'a' =>
                                'The cost of setting up a phone system varies based on the type of system, features required, and the number of users. However, with the advent of cloud-based and VoIP solutions, many affordable options are available for small businesses.',
                        ],
                    ];
                @endphp
                @foreach ($faqs as $faq)
                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative bg-white">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button
                            onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['q'] }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">{{ $faq['a'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

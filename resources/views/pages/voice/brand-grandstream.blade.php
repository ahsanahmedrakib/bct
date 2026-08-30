@extends('layouts.app')

@section('title', 'Grandstream | Bismillah Computer & Technology')
@section('description', 'Grandstream makes state-of-the-art telephony devices more accessible and easier to deploy than
    ever before. IP PBX, phones, gateways and more.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Grandstream
                    <span class="text-blue-600 block mt-2">Telephony</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Developing
                    a powerful solution that is customized for every individual streamlines communication and workload
                    efficiency.
                    Grandstream makes state-of-the-art telephony devices more accessible and easier to deploy than ever
                    before.
                    Take a look into our wide range of telephony endpoints and construct the perfect network with
                    Grandstream,
                    today.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="{{ route('voice.ps-small-business') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        PHONE SYSTEMS
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('voice.brand-avaya') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        AVAYA SOLUTIONS
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('voice.brand-lg-ipecs') }}"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        LG IPECS
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
                <img alt="BG Image" src="/images/voice/brands/grandstream/hero.png"
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

    {{-- ==================== PBX INTRO ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <div
                class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 mb-12">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">New Business Phone Systems</h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">Bismillah Computer &amp; Technology is your one
                    stop shop for new phone systems. Whether you're looking for your first small business phone system or a
                    national rollout deploying the latest VoIP technology we have the expertise to make it simple, on time
                    and
                    on budget.</p>
                <p class="text-slate-600 leading-relaxed text-justify"><strong>VoIP SIP Trunk:</strong> Enterprise SIP
                    Trunks
                    for IP Enabled Phone Systems.</p>
            </div>
        </div>
    </section>

    {{-- ==================== UCM6200 SERIES ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="w-full">
                <img src="/images/voice/brands/grandstream/grandstream.png" alt="Section"
                    class="w-full h-auto object-cover" />
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>

                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Grandstream Phone Systems</h2>
                <h3 class="text-xl font-bold text-slate-900 mb-4">UCM6200 Series IP PBX</h3>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">This IP PBX series allows businesses to unify
                    multiple communication technologies, such as voice, video calling, video conferencing, video
                    surveillance,
                    data tools, mobility options and facility access management onto one common network.</p>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">Designed to provide a centralized solution for
                    the
                    communication needs of businesses, the UCM6200 series IP PBX appliance combines enterprise-grade voice,
                    video, data, and mobility features in an easy-to-manage solution. This IP PBX series allows businesses
                    to
                    unify multiple communication technologies, such as voice, video calling, video conferencing, video
                    surveillance, data tools, mobility options and facility access management onto one common network that
                    can
                    be managed and/or accessed remotely. The secure and reliable UCM6200 series delivers enterprise-grade
                    features without any licensing fees, costs-per-feature or recurring fees.</p>
                <p class="text-slate-600 leading-relaxed text-justify">The same industry-leading platform that we designed
                    for
                    the UCM6100 series, which continues to be enhanced month by month with more and more features and
                    functionalities, will be extended to the UCM6200 series. Looking for a more powerful upgrade? We have
                    redesigned our 8 FXO port model, the UCM6208, to offer the ability to support more users and more
                    concurrent calls, as it supports up to 800 users and up to 100 concurrent calls.</p>
            </div>
        </div>
        </div>
    </section>

    {{-- ==================== UCM FEATURES ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">UCM6200 Series Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">UCM6202 and UCM6204 support up to 500 users and 50/75
                        concurrent calls, UCM6208 supports up to 800 users and 100 concurrent calls.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Auto Discovery and Zero Configuration of Grandstream
                        SIP
                        endpoints.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Integrated 2/4/8 PSTN trunk FXO ports, 2 analog
                        telephone
                        FXS ports with lifeline capability and up to 50 SIP trunk accounts.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Gigabit network ports with integrated PoE, USB, SD
                        card.
                    </p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Supports up to a 5-level IVR (Interactive Voice
                        Response).</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Built-in call recordings server; recordings
                        accessible via
                        web user interface.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Built-in Call Detail Records (CDR) for tracking phone
                        usage
                        by line, date, etc.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Supports multi-language auto-attendant and call queue
                        to
                        efficiently handle incoming calls.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Strongest possible security protection using SRTP,
                        TLS and
                        HTTPS encryption.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-600 text-sm leading-relaxed">Supports any SIP video endpoint that uses the H.264,
                        H.263
                        or H.263+ codecs.</p>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact
                    Us</a>
            </div>
        </div>
    </section>

@endsection

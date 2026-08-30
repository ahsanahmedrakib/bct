@extends('layouts.app')

@section('title', 'Headset Solutions | Bismillah Computer & Technology')
@section('description', 'Premium business headsets from Jabra, Sennheiser, iPECS and Avaya — wired, cordless and
    wireless options for every role.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Headsets
                    <span class="text-blue-600 block mt-2">For Every Role</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Whether you spend your
                    day
                    on the phone, at a call centre or managing a busy office, the right headset makes all the difference —
                    comfort,
                    clear audio and the freedom to move while you talk.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" src="/images/voice/hardware/headsets/hero.png"
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

    {{-- ==================== INTRO ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <div
                class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">The Right Headset Makes All the Difference</h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">A comfortable, high-quality headset helps you
                    stay
                    focused, reduces distraction from background noise and lets you talk with hands free while you type,
                    search or move around the office.</p>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">We supply headsets from the world's leading
                    brands —
                    Jabra, Sennheiser, iPECS and Avaya — covering wired, cordless and wireless options and a range for every
                    user in your organisation.</p>
                <p class="text-slate-600 leading-relaxed">Please feel free to contact us if you require further info.</p>
            </div>
        </div>
    </section>

    {{-- ==================== BRANDS GRID ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Headset Brands We Supply</h2>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Dependable headsets from market-leading brands,
                matched to your phone system and the way your team works.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-full">
                        <img src="/images/voice/hardware/headsets/hs-1.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Jabra Headsets</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">Jabra is a world leader in professional headsets,
                        delivering superb audio quality, all-day comfort and advanced noise-cancelling technology. From
                        desktop office headsets through to Bluetooth wireless options for the truly mobile worker, Jabra has
                        a
                        headset to suit every role.</p>
                    <p class="text-slate-600 text-sm leading-relaxed">Their range includes around-the-ear and in-ear models,
                        with options featuring Active Noise Cancellation, reliable call connectivity and long battery life
                        for
                        all-day performance.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-full">
                        <img src="/images/voice/hardware/headsets/hs-2.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Sennheiser Headsets</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">Sennheiser is renowned for exceptional sound
                        quality
                        and engineering precision. Their business headsets combine renowned audio performance with ergonomic
                        comfort, making them a favourite for receptionists, executives and call centre teams.</p>
                    <p class="text-slate-600 text-sm leading-relaxed">Choose from wired, cordless and Bluetooth models
                        offering crystal-clear voice pickup and outstanding noise reduction for professional communication.
                    </p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                     <div class="w-full">
                        <img src="/images/voice/hardware/headsets/hs-3.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">iPECS Headsets</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Engineered to work seamlessly with the Ericsson-LG
                        iPECS
                        phone systems, iPECS headsets offer plug-and-play compatibility, dependable call quality and
                        comfortable design for everyday use across your business.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                     <div class="w-full">
                        <img src="/images/voice/hardware/headsets/hs-4.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Avaya Headsets</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Purpose-built to pair perfectly with Avaya IP Office
                        systems, Avaya headsets deliver reliable performance, clear audio and a comfortable fit — ideal for
                        switchboard operators, managers and customer service teams.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <div
                class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Find the Perfect Headset</h2>
                <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Talk to us about the right headset for your
                    team and your phone system — we'll help you choose and set it up.</p>
                <a href="{{ route('contact') }}"
                    class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact
                    Us</a>
            </div>
        </div>
    </section>

@endsection

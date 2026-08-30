@extends('layouts.app')

@section('title', 'Conferencing Solutions | Bismillah Computer & Technology')
@section('description', 'Konftel teleconferencing IP phones, Logitech GROUP video conferencing and Barco ClickShare wireless presentation for your phone system.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Conferencing
                <span class="text-blue-600 block mt-2">Solutions</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We specialize in both Avaya
                and iPECS phone systems. A key part of these solutions is ensuring an appropriate conferencing system can be
                integrated with your phone system.</p>
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

{{-- ==================== INTRO ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Effective Distance Meetings</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">We specialize in both Avaya and iPECS Phone
                Systems, a key part of these solutions is ensuring an appropriate conferencing system can be integrated
                with your phone system.</p>
            <p class="text-slate-600 leading-relaxed">We can supply and install teleconferencing IP Phones from Konftel and
                integrate with your phone system.</p>
        </div>
    </div>
</section>

{{-- ==================== KONFTEL ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-bold tracking-wider uppercase text-blue-600 mb-3">Konftel 300IP</p>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Conferencing Solutions</h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">The Konftel 300IP is perfect for both
                    cloud-based and traditional IP platforms, giving you everything you need for effective, top-quality
                    distance meetings. Konftel's OmniSound® audio technology delivers crystal-clear, natural HD audio.</p>
                <ul class="space-y-2 mt-6">
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>SIP</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Built-in bridging function</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Zero Touch Installation</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Meeting size: more than 20 people</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>OmniSound® with HD audio</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Recording on memory card</li>
                </ul>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== LOGITECH GROUP ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center order-2 lg:order-1">
                <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <p class="text-xs font-bold tracking-wider uppercase text-blue-600 mb-3">Logitech GROUP</p>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Perfect For Larger Rooms</h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">GROUP, our video conferencing solution for
                    rooms that seat 14–20 people, delivers high quality HD video and crystal clear audio, allowing any
                    meeting place to be a video conferencing space. With advanced features like acoustic echo
                    cancellation, noise reduction technology, and intuitive controls, it's easier than ever to include
                    everyone in the conversation.</p>
                <ul class="space-y-2 mt-6">
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Speakerphone with Bluetooth</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Certified for Business &amp; Teams</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Convenient controls</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Available expansion mics</li>
                    <li class="flex items-center gap-3 text-slate-700"><span class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></span>Cabling made easy</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ==================== BARCO CLICKSHARE ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-bold tracking-wider uppercase text-blue-600 mb-3">Barco ClickShare</p>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-2">ClickShare CX-20</h2>
                <p class="text-slate-500 font-medium mb-4">Transform small meeting rooms and huddle spaces into inspiring
                    conference facilities.</p>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">The modern world of enterprise requires smooth
                    collaboration and flexibility, especially when it comes to team meetings in huddle rooms, and this is
                    exactly what Barco ClickShare CX-20 provides. Encouraging creative innovation through seamless
                    wireless conferencing, ClickShare CX-20 can make meetings more inspiring and more productive.</p>
                <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active mt-4">Enquire About Conferencing</a>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

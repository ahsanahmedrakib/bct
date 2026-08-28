@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                4G/5G
                <span class="text-blue-600 block mt-2">Fixed Wireless Internet</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Traditionally, fixed
                wireless technology has been used in rural areas where setting up the infrastructure for other services
                such as DSL or Fibre is expensive given an area's small or sparse population.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">However, in
                residential areas, 4G/5G fixed wireless modems are now also being used as a faster and cheaper
                alternative to the NBN. Our technicians possess the skills and experience required to install Fixed
                Wireless 4G/5G in your home or business.</p>

            {{-- Action Button --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="{{ route('contact') }}"
                    class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                    Get Connected Today
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
            <img alt="BG Image" src="/images/internet/connected.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== ABOUT FIXED WIRELESS ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">A Faster, Cheaper Alternative to NBN</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Instead of using cable, fixed wireless is
                delivered by 4G radio signals sent from the nearest transmission tower. These signals are then captured
                by a built-in high gain antenna installed on a client's roof.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Once the antenna has been installed, our
                technicians will then neatly run concealed cabling to connect the external antenna to your internet
                router, bringing you fast and reliable access to the web.</p>
            <a href="{{ route('contact') }}"
                class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                Get Connected Today
            </a>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-[4/3] rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== INSTALLATION PROCESS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">What Does the 4G/5G Installation Process Involve?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Step 1 --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">1</span>
                    <h3 class="text-xl font-bold text-slate-900 pt-2">Site Survey / Assessment</h3>
                </div>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">A Total Solutions IT technician will come
                    to your home or business to provide an onsite, no obligation quote. When assessing your location our
                    experienced technicians will carry out an obstruction test which determines the mounting location and
                    height to receive the best possible signal. Other things they will consider are; safely accessing
                    your roof, mounting options, possible cable routes and the location of your Router, including options
                    to ensure adequate WiFi.</p>
            </div>

            {{-- Step 2 --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">2</span>
                    <h3 class="text-xl font-bold text-slate-900 pt-2">Installation</h3>
                </div>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">We securely mount the 4G/5G equipment to
                    the appropriate location on the property and run cabling that connects the antenna to the main
                    router. We will create an interior outlet (if required) near where the new router is located. Our
                    technicians will then help you set up your new internet connection and WiFi network. Any additional
                    WiFi products you've requested can be installed at the same time.</p>
            </div>

            {{-- Step 3 --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">3</span>
                    <h3 class="text-xl font-bold text-slate-900 pt-2">Assessment of Efficiency</h3>
                </div>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">Once complete, your technician will run an
                    internet speed test to check the download and upload speed, and to ensure that your new internet
                    connection is fast and reliable.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHY CHOOSE ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Why Choose 4G/5G Fixed Wireless?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Faster & Cheaper --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Faster & Cheaper than NBN</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">High-speed wireless delivered without the long wait or high cost of cable infrastructure.</span></div>
            </div>

            {{-- Fast Installation --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Rapid, Neat Setup</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Concealed cabling and a tidy internal outlet, connected and configured by certified technicians.</span></div>
            </div>

            {{-- High Gain Antenna --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">High Gain Antenna Performance</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">A built-in high gain antenna on your roof captures strong, reliable signal from the nearest tower.</span></div>
            </div>

            {{-- Backed by Experts --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Expert Installation & Support</h3>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">From site survey to speed test, our team ensures your connection is fast and reliable.</span></div>
            </div>

        </div>
    </div>
</section>

@endsection

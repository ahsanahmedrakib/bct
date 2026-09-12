@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Starlink
                <span class="text-blue-600 block mt-2">Satellite Internet</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Starlink is a satellite
                internet constellation project developed by SpaceX, aiming to provide high-speed internet access to
                underserved areas globally.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">It involves a
                network of small satellites in low Earth orbit, offering low-latency broadband connectivity. Users can
                access the internet through a satellite dish receiver installed at their location.</p>

            {{-- Support Link --}}
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help getting connected?</p>
                <a href="{{ route('contact') }}"
                    class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact
                    Us</a>
            </div>
        </div>

        {{-- Hero Image --}}
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img alt="BG Image" src="/images/internet/starlink.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== ABOUT STARLINK ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Connectivity for the Underserved</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Starlink promises to deliver fast internet
                speeds, potentially revolutionizing connectivity in remote regions where traditional infrastructure is
                lacking.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Its deployment is ongoing, with thousands of
                satellites launched and plans for further expansion, with the goal of creating a robust network that
                could eventually serve millions of users worldwide.</p>
            <a href="{{ route('contact') }}"
                class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                Get Started Today
            </a>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== INSTALLATION PROCESS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">What Does the Antenna Installation Process Involve?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Step 1 --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-4 mb-4">
                    <span class="shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">1</span>
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
                    <span class="shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">2</span>
                    <h3 class="text-xl font-bold text-slate-900 pt-2">Installation</h3>
                </div>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">We securely mount the Starlink satellite
                    dish to the roof of the property (or other suitable location) and run cabling that connects the
                    Starlink satellite dish to the router. We will create an interior outlet (if required) near where the
                    new router is located. Our technicians will then help you set up your new internet connection and
                    WiFi network, using the Starlink app. Any additional WiFi products you've requested can be installed
                    at the same time.</p>
            </div>

            {{-- Step 3 --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex items-start gap-4 mb-4">
                    <span class="shrink-0 w-11 h-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">3</span>
                    <h3 class="text-xl font-bold text-slate-900 pt-2">Assessment of Efficiency</h3>
                </div>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">Once complete, your technician will run an
                    internet speed test to check the download and upload speed, and to ensure that your new internet
                    connection is fast and reliable.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== INSTALLATION Q&A ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Starlink Installation Q&A</h2>
        <div class="space-y-8">

            {{-- Cost factors --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">What factors need to be considered for the cost of install?</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">There are a few factors to consider when determining the price of professional Starlink Installation:</p>
                <ul class="space-y-3">
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Where the Starlink satellite is going to be located — how difficult it is to access and how far it is from where you require internet access.</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">What obstructions exist that may interfere with signal reception and what height is required to avoid them — such as tall trees, structures or buildings.</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">The construction of your house — flat or pitched roof, crawl space or wall cavities, single or double story, tile or metal roof, and more.</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Where the Starlink Router will be located within the house and whether the Starlink-supplied cable will be long enough.</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Whether you need to boost your WiFi signal inside the house, or to other buildings, once Starlink is installed.</span></li>
                    <li class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Where you are located — such as near the coastline where corrosion is a major factor, or in a high wind area.</span></li>
                </ul>
            </div>

            {{-- Roof & mounts --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Can I Install Starlink on my Roof?</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Yes, in most circumstances the Starlink satellite is
                    best installed somewhere on your roof, which may assist in avoiding obstructions as well as keep the
                    cabling protected and out of harm's way. The construction material of your roof will determine the
                    type of mount required and therefore the price. Additionally, the Starlink dish has a unique,
                    proprietary-designed mounting pole stem which requires purpose-built hardware specifically designed
                    for the Starlink satellite.</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">If the dish is unable to be mounted on your roof for
                    any reason, we will do our best to come up with a bespoke design to ensure you receive the best
                    possible reception for your new Starlink system. This would be specifically quoted only after an
                    on-site visit or in consultation with your technician.</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">The following types of mounts are some examples of those used for Starlink Installations:</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Tin Roof Mount</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Gutter Mount</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Tile/Flashing Mount</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Universal Wall Mounting</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Bespoke / Guy-Masted Pole (3m+)</span>
                </div>
            </div>

            {{-- WiFi range --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Can I Extend the WiFi Range?</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">If you require additional Ethernet ports to plug
                    into, you can use any reliable switching device. For properties where Internet/WiFi is required in
                    external buildings to where the Starlink Router is situated, there are some excellent products
                    available to achieve this wirelessly, even over long distances.</p>
                <p class="text-slate-600 text-sm leading-relaxed">There are outdoor WiFi Access Points along with Point to
                    Point (PtP) and Point to Multiple Point (PtMP) systems available. You can chat with your installation
                    technician about the best solution for your WiFi needs.</p>
            </div>

            {{-- The installation process --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">What Is the Installation Process?</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">We suggest you do some research to ensure that the
                    Starlink service is available at your location and that it is the right service for your needs. This
                    should include the Starlink service/dish you require, expected download speeds and costs to purchase
                    as well as ongoing fees.</p>
                <p class="text-slate-600 text-sm leading-relaxed">Prior to placing your order, we recommend getting in
                    touch with a professional installer to work alongside you with the project. Does Starlink Offer
                    Installation? Starlink does not offer installation services, but does come pre-connected with
                    everything you need to access the internet, as well as their app (Starlink app) to direct you with
                    the set-up. Whilst Starlink is made to be a self-installed system, it can be very complex to install
                    nonetheless. We provide services to help install your Starlink satellite.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== RELIABILITY VS NBN ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Reliability Compared to NBN</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Faster than NBN --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Faster Than Fixed Wireless</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Starlink speeds are significantly faster than the NBN
                    fixed wireless connections and often faster than NBN solutions relying on old copper wiring (i.e.
                    fibre to the node).</p>
            </div>

            {{-- When to choose --}}
            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">When NBN Is Better</h3>
                <p class="text-slate-600 text-sm leading-relaxed">If you have NBN Satellite or NBN fixed wireless you will
                    most likely have increased performance through upgrading to Starlink. However if you currently have
                    fibre to the curb or fibre to the premises, then NBN would be the better option.</p>
            </div>

        </div>
    </div>
</section>

@endsection

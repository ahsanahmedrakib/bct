@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div
        class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Cel-Fi
                <span class="text-blue-600 block mt-2">Boost Your Coverage</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">There's nothing more
                frustrating than struggling to find cell phone reception, especially during important calls. While there
                are numerous options out there, we offer the remedy: a mobile network repeater.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">Cel-Fi is an
                intelligent signal amplifier engineered to eradicate indoor dead zones and enhance 4G and 5G voice and
                data reception on mobile phones. Our team comprises specialists in mobile network repeaters, who have
                earned the trust of our customers over the years, ensuring optimal reception.</p>

            {{-- Action Button --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="{{ route('contact') }}"
                    class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                    Learn More
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
            <img alt="BG Image" src="/images/internet/celfi.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

{{-- ==================== STATE OF THE ART ==================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-6">State of the Art</h2>
        <p class="text-slate-600 text-center max-w-3xl mx-auto mb-12 text-justify">Supporting configurations that are
            perfect for small to medium-sized buildings, operator approved, unconditionally network safe, and offers the
            flexibility to support various 2G/3G/4G and 5G cellular networks.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

            {{-- Keep connected --}}
            <div class="border-2 rounded-2xl p-8 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wifi"><path d="M12 20h.01"/><path d="M2 8.82a15 15 0 0 1 20 0"/><path d="M5 12.859a10 10 0 0 1 14 0"/><path d="M8.5 16.429a5 5 0 0 1 7 0"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Keeping Customers & Families Connected</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">Whether you're a business proprietor aiming
                    to enhance connectivity for both customers and staff, or reside in a rural location requiring signal
                    amplification at home, Cel-Fi simplifies the process of outfitting your premises with dependable
                    coverage.</p>
            </div>

            {{-- WAVE app --}}
            <div class="border-2 rounded-2xl p-8 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 text-center mb-3">Nextivity WAVE App</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">The Nextivity WAVE App allows you to choose
                    and enhance your preferred operator signal via Bluetooth connection. Switching carriers is effortless
                    and instantaneous.</p>
                <a href="{{ route('contact') }}"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800 justify-center mt-4">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    Learn More
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ==================== LET'S TALK CEL-FI ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Let's Talk Cel-Fi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- How it works --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">How Does It Work?</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Often called mobile boosters, a repeater is designed to
                    detect and amplify a weak 3G, 4G, or 5G signal, allowing it to be rebroadcast at full strength
                    throughout the building. It is the most effective way to improve mobile voice and data services.</p>
            </div>

            {{-- Range --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">How Is the Range Impacted?</h3>
                <p class="text-slate-600 text-sm leading-relaxed">The Cel-Fi range of repeaters take a weak cellular signal
                    and add up to 100 dB of boost which can be output inside the house or distributed throughout a
                    building using one or many antennas.</p>
            </div>

            {{-- Trust --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">How Can We Trust Your Product?</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Powertec is also the largest developer of Off-Air
                    Repeater systems, leading in-building coverage projects across Australia and New Zealand which are
                    installed using specialist employees.</p>
            </div>

            {{-- Industries --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">What Type of Industries Are Supported?</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Powertec specialises in the development of creative and
                    unusual repeater systems for our clients in mining, energy, and defence, along with long range relay
                    systems for isolated farms and communities.</p>
                <a href="{{ route('contact') }}"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800 mt-6">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    Let's Talk
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ==================== SOLUTIONS FOR EVERY SITUATION ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Solutions for Every Situation</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- GO G41 --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-satellite-dish"><path d="M4 10a7.31 7.31 0 0 0 10 10Z"/><path d="m9 15 3-3"/><path d="M17 13a6 6 0 0 0-6-6"/><path d="M21 13A10 10 0 0 0 11 3"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 text-center mb-1">CEL-FI GO G41</h3>
                <p class="text-center text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">Powered by Powertec</p>
                <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">The Cel-Fi GO series are a type of
                    inline repeater that picks up weak signal from an external antenna and rebroadcasts it at full
                    strength from its service antenna.</p>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Dual band — boost 3G and 4G simultaneously, or two 4G channels through carrier aggregation.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Carrier switching — change instantly between networks, making it the first 'unlocked' repeater of its kind.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">More power — the unit has an output power of +20 dBm, an increase from +16 dBm with the previous GO models. That's an incredible 250% increase in output power.</span></div>
                <a href="https://totalsolutionsit.com/wp-content/uploads/2024/03/CEL-FI-GO-4-Flyer.pdf" target="_blank" rel="noopener"
                    class="mt-2 inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                    Download Brochure
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                </a>
            </div>

            {{-- GO G51 --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal"><path d="M2 20h.01"/><path d="M7 20v-4"/><path d="M12 20v-8"/><path d="M17 20V8"/><path d="M22 4v16"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 text-center mb-1">CEL-FI GO G51</h3>
                <p class="text-center text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">Powered by Powertec</p>
                <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">Experience unmatched 5G connectivity
                    with the Nextivity GO G51 Stationary Repeater! Boost both 4G and 5G signals indoors with up to 100 dB
                    signal gain.</p>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Incredible coverage and carrier switching — covers up to 3000 m2.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Better, faster, stronger — powered by the 4th generation IntelliBoost chip.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Ideal mobile signal boosting — large homes, commercial buildings, government, medical, nursing, underground parking, warehousing and more!</span></div>
                <div class="mt-2 flex flex-wrap gap-2">
                    <a href="https://totalsolutionsit.com/wp-content/uploads/2024/03/GOG51_datasheet.pdf" target="_blank" rel="noopener"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                        Data Sheet
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                    </a>
                    <a href="https://totalsolutionsit.com/wp-content/uploads/2024/03/GOG51_qsg.pdf" target="_blank" rel="noopener"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                        Quick Start
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                    </a>
                </div>
            </div>

            {{-- ROAM R41 --}}
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="flex justify-center pb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 text-center mb-1">CEL-FI ROAM R41</h3>
                <p class="text-center text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">Powered by Powertec</p>
                <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">Tailored for nomadic use, this
                    plug-and-play solution guarantees uninterrupted voice and data transmission, whether you're on a road
                    trip, boat adventure, or managing a fleet.</p>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Extend your coverage — improve 3G, 4G, and 5G DSS in your car, boat, fleet or any roaming vehicle.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Carrier switching — select which operator signal to boost and change anytime via the WAVE App.</span></div>
                <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg><span class="text-slate-600 text-sm">Plug and play — quick and easy set up for enhancing connectivity in minutes.</span></div>
                <a href="https://totalsolutionsit.com/wp-content/uploads/2024/03/CELFI-ROAM-R41Brochure-1.pdf" target="_blank" rel="noopener"
                    class="mt-2 inline-flex items-center px-5 py-2.5 text-sm font-semibold rounded-xl shadow-sm transition-all bg-blue-50 text-blue-700 hover:bg-navy hover:text-white">
                    Download Brochure
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection

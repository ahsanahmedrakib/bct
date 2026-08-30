@extends('layouts.app')

@section('title', 'Cel-Fi Signal Repeaters | Bismillah Computer & Technology')
@section('description',
    'Cel-Fi intelligent signal amplifiers eradicate indoor mobile dead zones and enhance 4G and 5G
    voice and data reception. Solutions for homes, offices and buildings.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
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
                    data reception on mobile phones.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" src="/images/voice/hardware/cel-fi/hero.png"
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

    {{-- ==================== STATE OF THE ART ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-6">State of the Art</h2>
            <p class="text-slate-600 text-center max-w-3xl mx-auto mb-12">Supporting configurations that are
                perfect for small to medium-sized buildings, operator approved, unconditionally network safe, and offering
                the flexibility to support various 2G/3G/4G and 5G cellular networks.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 text-center mb-3">Keeping Customers &amp; Families Connected
                    </h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">Whether you're a business proprietor
                        aiming
                        to enhance connectivity for both customers and staff, or reside in a rural location requiring signal
                        amplification at home, Cel-Fi simplifies the process of outfitting your premises with dependable
                        coverage.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 text-center mb-3">WAVE App Control</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">The Nextivity WAVE App allows you to
                        choose
                        and enhance your preferred operator signal via Bluetooth connection. Switching carriers is
                        effortless
                        and instantaneous.</p>
                    <a href="{{ route('contact') }}"
                        class="text-blue-600 font-medium flex items-center hover:text-blue-800 justify-center mt-4">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                        Learn More
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== HOW IT WORKS ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Let's Talk Cel-Fi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">How Does It Work?</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Often called mobile boosters, a repeater is designed
                        to
                        detect and amplify a weak 3G, 4G, or 5G signal, allowing it to be rebroadcast at full strength
                        throughout the building. It is the most effective way to improve mobile voice and data services.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">How Is the Range Impacted?</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">The Cel-Fi range of repeaters take a weak cellular
                        signal
                        and add up to 100 dB of boost which can be output inside the house or distributed throughout a
                        building using one or many antennas.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Safe &amp; Network Friendly</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Cel-Fi repeaters are designed to be operator approved
                        and
                        unconditionally network safe, supporting a variety of cellular networks without disruption.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">What Environments Are Supported?</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Commonly used in homes, offices, retail, and
                        commercial
                        buildings. Solutions exist for small to medium buildings as well as larger and more unusual
                        environments.</p>
                    <a href="{{ route('contact') }}"
                        class="text-blue-600 font-medium flex items-center hover:text-blue-800 mt-6">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                        Let's Talk
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== SOLUTIONS ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Solutions for Every Situation</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">CEL-FI GO G41</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">The Cel-Fi GO series are a type of
                        inline repeater that picks up weak signal from an external antenna and rebroadcasts it at full
                        strength from its service antenna.</p>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Dual band — boost 3G and 4G simultaneously, or two 4G
                            channels through carrier aggregation.</span></div>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Carrier switching — change instantly between networks,
                            making it the first 'unlocked' repeater of its kind.</span></div>
                    <div class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Improved output power for enhanced indoor
                            coverage.</span></div>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">CEL-FI GO G51</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">Experience strong 5G connectivity
                        with
                        the GO G51 stationary repeater, boosting both 4G and 5G signals indoors with up to 100 dB signal
                        gain.</p>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Incredible coverage — covers up to 3000 m2 with carrier
                            switching.</span></div>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Ideal for large homes, commercial buildings, and retail
                            spaces.</span></div>
                    <div class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Powered by advanced booster technology for dependable 5G
                            signal.</span></div>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">CEL-FI ROAM R41</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed mb-4">Tailored for nomadic use, this
                        plug-and-play solution guarantees uninterrupted voice and data transmission, whether you're on a
                        road
                        trip, boat adventure, or managing a fleet.</p>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Extend your coverage — improve 3G, 4G, and 5G in your
                            vehicle, boat, or fleet.</span></div>
                    <div class="flex items-start mb-3"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Carrier switching — select which operator signal to
                            boost and change anytime.</span></div>
                    <div class="flex items-start"><svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg><span class="text-slate-600 text-sm">Plug and play — quick and easy set up for enhancing
                            connectivity in minutes.</span></div>
                </div>

            </div>
        </div>
    </section>

@endsection

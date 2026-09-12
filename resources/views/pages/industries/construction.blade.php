@extends('layouts.app')

@section('content')
    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            {{-- Hero Content --}}
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    IT for Construction
                    <span class="text-blue-600 block mt-2">Builders, Contractors &amp; Projects</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">IT services for the
                    construction industry have transformed the way projects are planned, managed and delivered, providing
                    innovative solutions that enhance collaboration, streamline project administration, and ensure reliable
                    and secure operations.</p>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">From project
                    management and estimating software to site connectivity and mobile collaboration, we deliver the
                    technology your construction business depends on.</p>

                {{-- Support Link --}}
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help with IT for your construction business?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Get
                        In Touch</a>
                </div>
            </div>

            {{-- Hero Image --}}
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" src="/images/industries/hero-2.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

    {{-- ==================== FOCUS ON YOUR SPECIFIC NEEDS ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">A focus on your specific needs.</h2>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Delivering specialized IT support for construction
                businesses by ensuring reliable systems, secure project data and efficient site operations.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Security orientated.</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Our I.T support is laser-focused on security,
                        implementing advanced measures to protect your project and client data with continuous monitoring,
                        updates, and rigorous access controls.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Construction expertise.</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">We understand the unique technology needs of builders,
                        contractors and project teams, from site to office, keeping projects moving.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Proven experience.</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">We bring proven track record in delivering reliable,
                        efficient IT solutions to the construction industry.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== WHAT WE'LL DO FOR YOU ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">What we'll do for you</h2>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Our services cover the full range of outsourced IT
                services for construction businesses. Here are just a few examples of how you'll benefit from working with
                us.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Get instant tech support – anytime</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">Construction projects run around the
                        clock
                        and your team simply can't wait if there's a tech issue. We provide flexible options for
                        out-of-hours support. And you'll always have direct and instant access to our Australian-based
                        frontline support desk – where you get to set the urgency that our team responds to an issue.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">We become an integrated part of your business</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">From project management and estimating to
                        accounting and on-site communications, we get to know your workflows and business needs. That
                        ensures
                        we act appropriately at each and every step of your IT journey.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Complete IT management</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">From software to security to phone
                        systems,
                        whatever your IT needs are, we are here to be your full-service IT department. With a team of 10+
                        certified specialists, there's nothing we can't handle.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Ensure security and data protection</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">Our security solutions protect you
                        against
                        hacking, malware, data breaches – and downtime. We have deep understanding of the security risks
                        involved in the construction industry.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">No surprises with fixed cost IT</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">We know you need to watch your margins,
                        so
                        we make your IT investment fixed and predictable. Combined with no lock-in contracts, you also gain
                        complete freedom.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Keep IT assets performing</h3>
                    <p class="text-slate-600 text-sm text-justify leading-relaxed">From purchasing, provisioning, using,
                        maintenance and disposal, we make sure your IT assets are efficient and effective so your teams can
                        stay focused on delivering projects.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== SPECIALISATION ==================== --}}
    <section class="py-20 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div
                    class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Specialisation in reliable services.</h2>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">We offer ongoing technical assistance and
                        training
                        to ensure smooth integration and utilization of IT tools across your construction projects. By
                        leveraging
                        our expertise in IT support, we empower project teams to maximize productivity and deliver
                        outstanding
                        outcomes.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Project
                            management
                            software support</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Site
                            connectivity
                            &amp; mobility</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">24/7
                            Australian-based support team</span>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">We understand the critical role reliability
                        plays
                        in the smooth running of your construction projects. Our team is committed to ensuring the security
                        and
                        seamless functionality of your IT infrastructure, contributing to the efficiency and safety of your
                        operations.</p>
                    <p class="text-slate-600 leading-relaxed mb-6 text-justify">Cybersecurity is crucial in protecting
                        sensitive
                        information related to project documentation and client data. We provide robust security protocols,
                        regular audits, and continuous monitoring to safeguard against cyber threats.</p>
                    <a href="{{ route('contact') }}"
                        class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                        Get In Touch
                    </a>
                </div>
            </div>
            <div class="w-full order-1 lg:order-2">
                <img src="/images/industries/section.png" alt="Section" class="w-full h-auto object-cover" />
            </div>
        </div>
    </section>
@endsection

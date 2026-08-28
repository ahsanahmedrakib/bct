@extends('layouts.app')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        {{-- Hero Content --}}
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                IT for Engineering
                <span class="text-blue-600 block mt-2">Consultants, Design &amp; Drafting</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">IT support for
                engineering firms ensures your design software, file servers and collaboration tools run reliably and
                securely, so your engineers can focus on delivering outstanding projects.</p>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">From CAD and BIM
                workstations to document control and project management, we keep your engineering technology working
                smoothly and efficiently.</p>

            {{-- Support Link --}}
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help with IT for your engineering firm?</p>
                <a href="{{ route('contact') }}"
                    class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Get
                    In Touch</a>
            </div>
        </div>

        {{-- Hero Image --}}
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img alt="BG Image" src="/images/industry/hero.png" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Delivering specialized IT support for engineering
            firms by ensuring powerful workstations, reliable systems and secure project data.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Security orientated.</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Our I.T support is laser-focused on security,
                    implementing advanced measures to protect your proprietary designs and project data with continuous
                    monitoring, updates, and rigorous access controls.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Engineering expertise.</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We understand the demanding technology needs of design,
                    CAD and engineering firms, from high-performance workstations to specialised file management.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Proven experience.</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We bring proven track record in delivering reliable,
                    efficient IT solutions to engineering firms.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== WHAT WE'LL DO FOR YOU ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">What we'll do for you</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">Our services cover the full range of outsourced IT
            services for engineering firms. Here are just a few examples of how you'll benefit from working with us.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Get instant tech support – anytime</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">Engineering projects have tight deadlines
                    and your team can't wait if there's a tech issue. We provide flexible options for out-of-hours
                    support. And you'll always have direct and instant access to our Australian-based frontline support
                    desk – where you get to set the urgency that our team responds to an issue.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">We become an integrated part of your business</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">From CAD workstations to document control
                    and project collaboration, we get to know your workflows and business needs. That ensures we act
                    appropriately at each and every step of your IT journey.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Complete IT management</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">From software to security to phone systems,
                    whatever your IT needs are, we are here to be your full-service IT department. With a team of 10+
                    certified specialists, there's nothing we can't handle.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Ensure security and data protection</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">Our security solutions protect you against
                    hacking, malware, data breaches – and downtime. We have deep understanding of the security risks
                    involved in protecting proprietary designs and project data.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">No surprises with fixed cost IT</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">We know you need to watch your margins, so
                    we make your IT investment fixed and predictable. Combined with no lock-in contracts, you also gain
                    complete freedom.</p>
            </div>

            <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Keep IT assets performing</h3>
                <p class="text-slate-600 text-sm text-justify leading-relaxed">From high-performance workstations to
                    render farms and file storage, we make sure your IT assets are efficient and effective so your
                    engineers can stay productive.</p>
            </div>

        </div>
    </div>
</section>

{{-- ==================== SPECIALISATION ==================== --}}
<section class="py-20 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-6">Specialisation in reliable services.</h2>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">We offer ongoing technical assistance and training
                to ensure smooth integration and utilization of IT tools within your engineering environment. By
                leveraging our expertise in IT support, we empower engineers to maximize productivity and deliver
                outstanding outcomes for clients.</p>
            <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">CAD &amp; BIM workstation support</span>
                <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Document control experience</span>
                <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">24/7 Australian-based support team</span>
            </div>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">We understand the critical role reliability plays
                in the smooth running of your engineering projects. Our team is committed to ensuring the security and
                seamless functionality of your IT infrastructure, contributing to the efficiency and safety of your
                operations.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">Cybersecurity is crucial in protecting sensitive
                information related to proprietary designs and project data. We provide robust security protocols,
                regular audits, and continuous monitoring to safeguard against cyber threats.</p>
            <a href="{{ route('contact') }}"
                class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                Get In Touch
            </a>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

@endsection

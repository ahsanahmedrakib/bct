@extends('layouts.app')

@section('title', 'Unified Communications | Bismillah Computer & Technology')
@section('description', 'Unified Communications solutions from iPECS UCP and Avaya IP Office — integrate IP telephony, video, instant messaging and more.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Unified
                <span class="text-blue-600 block mt-2">Communications</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Break down barriers to
                inter-office, intra-office, and external communications, and allow your business to connect with each other
                across multiple platforms.</p>
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
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Unified Communications</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Unified Communications offers many benefits to
                your business. The essence of Unified Communications is to break down barriers to inter-office,
                intra-office, and external communications, and allow businesses to connect with each other across multiple
                platforms.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">We offer a solution that can improve the
                productivity of your business and generate a more efficient work load.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Operating efficiently. Staying close to customers.
                Carefully managing scarce resources. Focusing on what really matters. These are essential tasks for small
                and medium businesses.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">What they may lack in scale, growing companies make
                up for with innovation, determination, and by getting the most from their resources. That's what makes
                them competitive and successful. That's also the reason why making smart use of the latest real-time
                mobile collaboration capabilities has never been more important.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify"><strong>Mobile collaboration</strong> – the ability
                to communicate and stay productive from anywhere – is reshaping every aspect of business operations today,
                from sales to customer service to hiring and budgeting. To remain competitive, small and midsize companies
                need to match their communications to the new realities of the marketplace.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Unified Communications can integrate IP telephony,
                instant messaging, videoconferencing, contact management, and media sharing. A unified communications
                system is feature-rich and scalable, and can grow as your business does.</p>
            <p class="text-slate-700 font-medium">Our Unified Comms Solutions</p>
        </div>
    </div>
</section>

{{-- ==================== IPECS UCP ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">iPECS UCP</h2>
        <p class="text-slate-600 leading-relaxed mb-8 max-w-4xl">iPECS UCP is Ericsson-LG Enterprise's unified
            communications platform and is designed to help organisations communicate and collaborate with all of their
            stakeholders. iPECS Unified Communications helps people across your business be more productive and efficient
            regardless of their location or chosen device.</p>

        <h3 class="text-2xl text-left font-bold text-blue-900 mb-6">Features</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                'Mobile Client (Android/iOS)',
                'Video Conferencing',
                'Presence and Instant Messaging',
                'Outlook Integration',
                'Built-In Voicemail and Auto Attendant',
                'Built-in Automatic Call Distribution',
                'Mobile Extension',
                'Powerful Call Handling Features',
                'Embedded SIP',
                'Embedded Hotel Features',
                'Centralised Control Transport Network (T-NET)',
            ] as $feature)
                <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-6 w-12 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-700 font-medium">{{ $feature }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== IPECS BENEFITS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Product Benefits</h2>
        <p class="text-slate-500 font-medium mb-8">Simple Unified Communications</p>
        <p class="text-slate-600 leading-relaxed mb-6 max-w-4xl text-justify">iPECS Unified Communications (UC) capability
            is built-in. Use voice, video, instant messaging, conference calls, visual voicemail, all on one simple and
            easy to use platform. Designed to be intuitive and provide your team easy to use tools and features. Increase
            reliability and flexibility with distribution architecture.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach([
                ['Total reliability', 'Complete resilience through geographic redundancy and inherent modular architecture.'],
                ['Integrated applications tailored to your needs', 'Offers a range of enhanced applications from Ericsson-LG and other specialist application providers. Integrates into standard office applications such as Microsoft Outlook or Lync and others.'],
                ['Leverage the latest standards based technologies', 'Makes the most of the latest network technologies such as SIP. Optimise call costs using WiFi. Use in-built voice conferencing to save on external conference services.'],
                ['Scale with your growth', 'Delivers the flexibility you need as your organisation grows and easily adapts to meet changing needs.'],
                ['Anytime and anywhere connectivity', 'Access the power of your iPECS UCP your way regardless of your device or location using smartphone, tablet or PC applications.'],
            ] as [$title, $desc])
                <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $title }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>

        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 mt-8">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h3 class="text-2xl text-left font-bold text-blue-900 mb-4">Virtualise Your Business Communications</h3>
            <p class="text-slate-600 leading-relaxed text-justify">iPECS vUCP as a software base call server is running on
                VMware or AWS virtual environment. The software is the same as on-premise iPECS UCP and all the system
                features as well. It delivers an innovative way to manage diverse business applications and collaborate
                cost-effectively, so you can leverage business communications while keeping all the advantages of iPECS
                UCP.</p>
        </div>
    </div>
</section>

{{-- ==================== AVAYA + LYNC ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Avaya IP Office</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Let a powerful Avaya IP Office solution produce
                better engagement among your employees, and stronger relationships with partners and
                customers—facilitating faster, smarter decisions and better business.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify"><strong>Flexible Configurations:</strong> Choose a
                deployment model that matches your infrastructure objectives–from a simple appliance to virtualized
                software in your data center, with options in between.</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify"><strong>Complete Collaboration Solution:</strong>
                Enjoy the peace of mind that comes with a complete, integrated solution—collaboration software plus
                multichannel contact centers, networking, security, and video—from a single source.</p>

            <h3 class="text-2xl text-left font-bold text-blue-900 mt-8 mb-4">Add Microsoft Lync</h3>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">We can include Microsoft Lync as an incredibly
                low-cost solution to supplement your phone system with a unified communications add-on. Microsoft Lync
                provides businesses:</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                @foreach(['Instant messaging between users', 'Videoconferencing', 'Screen sharing', 'IP telephony', 'Online meetings', 'File transfers', 'Skype integration'] as $item)
                    <div class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                        <div class="absolute top-0 left-6 w-12 h-1 bg-blue-600 rounded-b-md"></div>
                        <p class="text-slate-700 font-medium text-sm">{{ $item }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection

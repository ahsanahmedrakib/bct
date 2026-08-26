@extends('layouts.app')

@section('content')
    <main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

        {{-- HERO SECTION --}}
        <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
            <div
                class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
                <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Servers &
                        <span class="text-blue-600 block mt-2"> Networking</span>
                    </h1>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Our server and
                        networking solutions are designed to empower businesses with seamless connectivity and robust
                        infrastructure. With a focus on reliability, scalability, and security, our tailored solutions
                        ensure optimized performance for your organization's digital ecosystem.</p>
                    <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed mt-2">From deploying
                        efficient server configurations to implementing high-speed networking protocols, we provide
                        comprehensive support to enhance productivity and streamline operations. Our expertise lies in
                        crafting customized solutions that align with your unique requirements, enabling you to stay agile
                        in a rapidly evolving technological landscape while maximizing the potential of your IT
                        infrastructure.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                        <a href="#networking-solutions"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            NETWORKING SOLUTIONS
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        <a href="#server-solutions"
                            class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                            SERVER SOLUTIONS
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                    <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                        <a href="/contact"
                            class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                    <img src="/images/it-support/servers-and-networking/hero.png" alt="Servers and Networking Hero"
                        height="400" width="600" class="rounded-lg" />
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                        fill="#f8fafc"></path>
                </svg>
            </div>
        </section>

        {{-- TESTIMONIALS SECTION --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <h2 class="text-center text-3xl font-black text-slate-900 tracking-tight mb-12">What people are talking
                    about us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        class="bg-dark-section text-gray-200 p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
                        <span class="text-5xl text-blue-600 absolute top-6 left-6 font-serif">&ldquo;</span>
                        <p class="mt-8 mb-6 text-sm leading-relaxed">TSIT have great professional response. Very impressed
                            with their availability to respond to issues. Helped to migrate 30 staff from an onsite server
                            to Microsoft 365, Email services, User account management and SharePoint. Everything went very
                            smoothly and communication was excellent.</p>
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Aaron Smith | Stadelmann
                            Enterprises</p>
                    </div>
                    <div
                        class="bg-dark-section text-gray-200 p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
                        <span class="text-5xl text-blue-600 absolute top-6 left-6 font-serif">&ldquo;</span>
                        <p class="mt-8 mb-6 text-sm leading-relaxed">Joel and his team make it all so easy. Assisted with
                            implementation of Defence Industry Security Program (DISP) accreditation for over 50 staff. Made
                            it easy to understand each step of the process and ensured minimal interruption to staff during
                            deployment.</p>
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Chris | Construction Company
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- PARTNERS SECTION --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div class="mb-12">
                    <h2 class="text-center text-3xl font-black text-slate-900 tracking-tight mt-3">Our Technology Partners
                        include</h2>
                    <p class="text-gray-800 mt-4 text-lg font-light leading-relaxed">Bismillah IT has forged strategic
                        partnerships with leading network and server hardware providers in the industry to ensure that their
                        clients receive top-notch technology solutions tailored to their needs.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
                    @php
                        $partners = [
                            ['name' => 'MikroTik', 'logo' => '/images/home/how-we-do/mikrotik.png'],
                            ['name' => 'Ubiquiti', 'logo' => '/images/it-support/servers-and-networking/ubiquiti.png'],
                            ['name' => 'Grandstream', 'logo' => '/images/home/how-we-do/grandstream.png'],
                            ['name' => 'HPE', 'logo' => '/images/home/how-we-do/hpe.png'],
                            ['name' => 'Microsoft 365', 'logo' => '/images/home/how-we-do/microsoft365.png'],
                        ];
                    @endphp
                    @foreach ($partners as $partner)
                        <div
                            class="flex items-center justify-center bg-white rounded-xl border border-gray-400 shadow-xs hover:border-brand-hover hover:shadow-md hover:scale-[1.02] transition-all duration-300 cursor-pointer aspect-square">
                            <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}"
                                class="object-contain max-w-full max-h-full p-2 sm:p-0.5" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 1: Intro / Top Feature Cards --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 leading-tight mb-6">
                        Modern technologies powered by the cloud are fundamentally altering our methods of work and
                        communication.
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4 text-justify">This digital
                        transformation relies on robust, reliable, and secure networking infrastructure &mdash; the backbone
                        of any modern enterprise.</p>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">At <strong
                            class="text-blue-600 font-medium">Bismillah IT</strong>, we offer comprehensive networking
                        solutions tailored to meet your business needs, ensuring seamless communication and connectivity
                        across your organization.</p>
                </div>
                <div class="space-y-4">
                    @php
                        $topFeatureCards = [
                            [
                                'title' => 'The Road to Transformation',
                                'description' =>
                                    'Transforming your organization requires a strategy that aligns IT with business goals. Our team guides you through every step of this journey, ensuring your network infrastructure supports digital initiatives, improves efficiency, and fosters innovation.',
                            ],
                            [
                                'title' => 'The Power of Cloud',
                                'description' =>
                                    'Cloud computing offers unprecedented scalability, flexibility, and efficiency. We help you leverage cloud-based networking solutions, such as SD-WAN and cloud-managed Wi-Fi, to streamline management, enhance performance, and support remote work environments.',
                            ],
                            [
                                'title' => 'Connecting Securely',
                                'description' =>
                                    'Security is paramount in today connected world. Our networking solutions integrate advanced security measures, including firewalls, encryption, and access controls, to protect your data and network from cyber threats, ensuring safe and reliable connectivity.',
                            ],
                        ];
                    @endphp
                    @foreach ($topFeatureCards as $card)
                        <div
                            class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0 mt-1">
                                    <span class="text-blue-600"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                                        </svg></span>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-slate-900 mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">
                                        {{ $card['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 2: Solutions Overview --}}
        <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center mb-10">Solutions</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
                    <div class="space-y-3">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 pb-2 border-b border-slate-200">Networking
                            Solutions</h3>
                        @php
                            $networkingSolutions = [
                                'Network Design and Implementation',
                                'Network Security',
                                'Wireless Networking',
                                'Network Optimization and Performance Management',
                                'Cloud Networking Integration',
                                'Managed Networking Services',
                                'Wireless Network',
                                'WAN & Advanced Networking Solutions',
                            ];
                        @endphp
                        @foreach ($networkingSolutions as $solution)
                            <a href="#networking-solutions"
                                class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">
                                <span class="flex justify-between items-end">{{ $solution }} <svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor"
                                        class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg></span>
                            </a>
                        @endforeach
                        <div class="pt-4">
                            <span
                                class="text-xs font-semibold uppercase text-slate-500 tracking-wider block mb-2">Ethernet</span>
                            <a href="#"
                                class="px-6 py-2.5 bg-white border border-brand text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy hover:text-white transition-colors">LEARN
                                MORE</a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="relative w-full overflow-hidden">
                            <img src="/images/it-support/servers-and-networking/solutions.jpg"
                                alt="Networking Cables and Fiber Connectors" height="500" width="600"
                                class="object-cover w-full h-auto rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION 3: Networking Solutions (Dark Theme) --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 bg-slate-900 text-white w-full" id="networking-solutions">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">Networking Solutions</h2>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed text-justify">Our networking solutions
                            are designed to build a solid foundation for your IT environment. We focus on creating
                            high-performance, resilient, and secure networks that support your operational needs and drive
                            business growth.</p>
                    </div>
                    <div class="flex justify-center lg:justify-end">
                        <img src="/images/it-support/servers-and-networking/networking.jpg"
                            alt="Network Server Rack Hardware" height="160" width="320"
                            class="rounded-lg object-cover" />
                    </div>
                </div>
                @php
                    $networkingDetails = [
                        [
                            'title' => 'Network Design and Implementation',
                            'description' =>
                                'We design and implement custom network architectures tailored to your business requirements. Whether you are setting up a new network or upgrading an existing one, our experts ensure seamless integration, optimal performance, and scalability to accommodate future growth.',
                            'icon' => 'servers',
                        ],
                        [
                            'title' => 'Network Security',
                            'description' =>
                                'Protecting your network from unauthorized access and cyber threats is critical. We provide robust security solutions, including firewalls, intrusion detection and prevention systems (IDPS), and secure access controls, to safeguard your critical data and maintain compliance.',
                            'icon' => 'shield',
                        ],
                        [
                            'title' => 'Wireless Networking',
                            'description' =>
                                'In today mobile-first world, reliable Wi-Fi is essential. We offer high-density, secure wireless solutions that provide seamless coverage, high speed, and secure access for employees and guests alike, supporting productivity across your facilities.',
                            'icon' => 'wifi',
                        ],
                        [
                            'title' => 'Network Optimization and Performance Management',
                            'description' =>
                                'Slow networks can hinder business operations. We continuously monitor, analyze, and optimize your network performance to ensure fast data transmission, minimize downtime, and resolve issues before they impact your business.',
                            'icon' => 'chart',
                        ],
                        [
                            'title' => 'Cloud Networking Integration',
                            'description' =>
                                'Integrating your local network with cloud services requires careful planning. We provide cloud networking solutions that seamlessly connect your on-premises infrastructure with public, private, or hybrid clouds, ensuring secure and high-speed data transfer.',
                            'icon' => 'cloud',
                        ],
                        [
                            'title' => 'Managed Networking Services',
                            'description' =>
                                'Outsource your network management to Bismillah IT. Our team delivers 24/7 proactive monitoring, regular maintenance, patch management, and rapid troubleshooting, allowing your internal team to focus on strategic business initiatives while maintaining top network efficiency.',
                            'icon' => 'gear',
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($networkingDetails as $card)
                        <div
                            class="bg-slate-800/80 border border-slate-700/60 rounded-xl p-6 hover:border-blue-500/50 transition-all">
                            <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                                <div
                                    class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                                    @if ($card['icon'] === 'servers')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="20" height="8" x="2" y="2" rx="2"
                                                ry="2" />
                                            <rect width="20" height="8" x="2" y="14" rx="2"
                                                ry="2" />
                                            <line x1="6" x2="6.01" y1="6" y2="6" />
                                            <line x1="6" x2="6.01" y1="18" y2="18" />
                                        </svg>
                                    @elseif($card['icon'] === 'shield')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                    @elseif($card['icon'] === 'wifi')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20h.01" />
                                            <path d="M2 8.82a15 15 0 0 1 20 0" />
                                            <path d="M5 12.859a10 10 0 0 1 14 0" />
                                            <path d="M8.5 16.429a5 5 0 0 1 7 0" />
                                        </svg>
                                    @elseif($card['icon'] === 'chart')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 3v18h18" />
                                            <path d="m19 9-5 5-4-4-3 3" />
                                        </svg>
                                    @elseif($card['icon'] === 'cloud')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z" />
                                        </svg>
                                    @elseif($card['icon'] === 'gear')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="text-sm sm:text-base font-bold text-white mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-xs text-slate-300 leading-relaxed text-justify">
                                        {{ $card['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 4: Wireless Network --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
            <div class="reveal reveal-fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-4">Wireless Network</h2>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify">Our wireless networking
                            solutions deliver reliable, high-speed, and secure connectivity across your organization. From
                            office spaces to enterprise campuses, we design and deploy Wi-Fi infrastructure tailored to
                            support your operational needs and modern workplace demands.</p>
                    </div>
                    <div class="flex justify-center lg:justify-end">
                        <img src="/images/it-support/servers-and-networking/wireless.jpg"
                            alt="Ceiling Wireless Access Point Device" height="160" width="320"
                            class="rounded-lg object-cover" />
                    </div>
                </div>
                @php
                    $wirelessCards = [
                        [
                            'title' => 'Wireless Network Design and Planning',
                            'description' =>
                                'We perform comprehensive site surveys and heat mapping to design optimal Wi-Fi layouts. This ensures maximum coverage, eliminates dead zones, and provides seamless connectivity for high-density user environments, guaranteeing reliable network access across your entire facility.',
                        ],
                        [
                            'title' => 'Access Point Deployment and Configuration',
                            'description' =>
                                'Our team handles the professional installation and configuration of enterprise-grade Access Points (APs). We optimize channel allocation and transmission power to prevent interference and maximize network throughput, delivering consistent performance everywhere.',
                        ],
                        [
                            'title' => 'Guest Wi-Fi Solutions',
                            'description' =>
                                'Provide secure Internet access for visitors without compromising your primary corporate network. We create isolated guest networks with customizable splash pages, terms-of-use acceptance, and bandwidth controls to protect your internal resources while maintaining a welcoming experience.',
                        ],
                        [
                            'title' => 'Wireless Security and Compliance',
                            'description' =>
                                'Protecting wireless networks requires advanced security protocols. We implement WPA3 encryption, 802.1X authentication, network segmentation, and wireless intrusion detection systems (WIDS) to safeguard data against eavesdropping, unauthorized access, and cyber threats.',
                        ],
                        [
                            'title' => 'Wireless Performance Optimization',
                            'description' =>
                                'Slow speeds or dropped connections can disrupt productivity. We continuously monitor wireless performance, analyze traffic patterns, and optimize RF configurations to deliver high-speed access, low latency, and seamless roaming across all connected devices.',
                        ],
                        [
                            'title' => 'Integration with Modern Technologies',
                            'description' =>
                                'Modern wireless networks support more than laptops and smartphones. We integrate Wi-Fi solutions with IoT devices, smart building technologies, location services, and VoIP applications to empower smart workplace capabilities and improve operational agility.',
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($wirelessCards as $card)
                        <div
                            class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 transition-all relative h-full border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                            <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                                <div
                                    class="w-9 h-9 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0">
                                    <span class="text-blue-600 font-bold -mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20h.01" />
                                            <path d="M2 8.82a15 15 0 0 1 20 0" />
                                            <path d="M5 12.859a10 10 0 0 1 14 0" />
                                            <path d="M8.5 16.429a5 5 0 0 1 7 0" />
                                            <path d="M3 15h2m4 0h8" />
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-sm sm:text-base font-bold text-slate-900 mb-2">{{ $card['title'] }}
                                    </h3>
                                    <p class="text-xs text-slate-600 leading-relaxed text-justify">
                                        {{ $card['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 5: WAN & Advanced Networking (Dark Theme) --}}
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 bg-slate-900 text-white w-full">
            <div class="reveal reveal-fade-up max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">WAN & Advanced networking solutions</h2>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed text-justify">At Bismillah IT, we
                            deliver Wide Area Network (WAN) and advanced networking solutions designed to connect multiple
                            office locations, cloud environments, and remote employees seamlessly and securely.</p>
                    </div>
                    <div class="flex justify-center lg:justify-end">
                        <img src="/images/it-support/servers-and-networking/advanced.jpg"
                            alt="Router Fiber Ports and Ethernet Cables" height="160" width="320"
                            class="rounded-lg object-cover" />
                    </div>
                </div>
                @php
                    $wanTopCards = [
                        [
                            'title' => 'Internet Service',
                            'description' =>
                                'A reliable internet connection is fundamental to any business operation. We help you source, implement, and manage high-speed, enterprise-grade Internet Service Provider (ISP) connections, including dedicated fiber, broadband, and wireless links, tailored to meet your bandwidth demands and performance SLAs.',
                            'icon' => 'globe',
                        ],
                        [
                            'title' => 'Redundant Internet Systems',
                            'description' =>
                                'Downtime can disrupt productivity and lead to lost revenue. We implement redundant Internet solutions featuring automatic failover mechanisms, combining multiple ISP connections or cellular backup (LTE/5G). This ensures continuous uptime so your business remains online even if a primary provider experiences an outage.',
                            'icon' => 'refresh',
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    @foreach ($wanTopCards as $card)
                        <div class="bg-slate-800/80 border border-slate-700/60 rounded-xl p-6">
                            <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                                <div
                                    class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                                    @if ($card['icon'] === 'globe')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                            <path d="M2 12h20" />
                                        </svg>
                                    @elseif($card['icon'] === 'refresh')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                                            <path d="M3 3v5h5" />
                                            <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" />
                                            <path d="M16 16h5v5" />
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="text-sm sm:text-base font-bold text-white mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-xs text-slate-300 leading-relaxed text-justify">
                                        {{ $card['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="max-w-2xl mx-auto mb-10">
                    <div class="bg-slate-800/90 border border-slate-700 rounded-xl p-6">
                        <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                            <div
                                class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-white mb-2">Advanced Networking Solutions
                                </h3>
                                <p class="text-xs text-slate-300 leading-relaxed text-justify">Explore our WAN and advanced
                                    networking solutions below, engineered to deliver reliable, secure, and high-performance
                                    connectivity tailored to your enterprise needs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $wanAdvancedCards = [
                        [
                            'title' => 'SD-WAN (Software-Defined Wide Area Network)',
                            'description' =>
                                'Simplify WAN management with Software-Defined WAN technology. SD-WAN dynamically routes traffic across the best available paths (MPLS, broadband, LTE), optimizing application performance, reducing connection costs, and providing centralized control over your distributed network.',
                            'icon' => 'sdwan',
                        ],
                        [
                            'title' => 'Virtual Private Networks (VPNs)',
                            'description' =>
                                'Secure remote access and site-to-site connectivity with robust VPN solutions. We deploy IPsec and SSL VPNs that encrypt data in transit, ensuring remote employees and branch offices can securely connect to company resources.',
                            'icon' => 'vpn',
                        ],
                        [
                            'title' => 'Load Balancing and Traffic Management',
                            'description' =>
                                'Optimize bandwidth utilization and guarantee application availability with intelligent load balancing. Our traffic management solutions distribute data evenly across multiple paths to avoid bottlenecks and improve user experience.',
                            'icon' => 'loadbal',
                        ],
                        [
                            'title' => 'Network Virtualization and Segmentation',
                            'description' =>
                                'Enhance security and manageability by segmenting your network into isolated virtual subnetworks (VLANs). Network virtualization limits threat propagation and enforces granular access control across departments.',
                            'icon' => 'virtual',
                        ],
                        [
                            'title' => 'Unified Threat Management (UTM)',
                            'description' =>
                                'Consolidate your security functions into a single platform. UTM combines firewalls, VPN, antivirus, content filtering, and intrusion prevention to deliver end-to-end protection against complex cyber threats across your WAN.',
                            'icon' => 'utm',
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($wanAdvancedCards as $i => $card)
                        <div
                            class="bg-slate-800/80 border border-slate-700/60 rounded-xl p-6 {{ $i === 4 ? 'md:col-span-2 max-w-2xl mx-auto w-full' : '' }}">
                            <div class="flex items-start flex-col sm:flex-row space-x-4 space-y-4">
                                <div
                                    class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                                    @if ($card['icon'] === 'sdwan')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20h.01" />
                                            <path d="M2 8.82a15 15 0 0 1 20 0" />
                                            <path d="M5 12.859a10 10 0 0 1 14 0" />
                                            <path d="M8.5 16.429a5 5 0 0 1 7 0" />
                                        </svg>
                                    @elseif($card['icon'] === 'vpn')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                        </svg>
                                    @elseif($card['icon'] === 'loadbal')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 3v18h18" />
                                            <path d="m19 9-5 5-4-4-3 3" />
                                        </svg>
                                    @elseif($card['icon'] === 'virtual')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="18" x="3" y="3" rx="2" />
                                            <path d="M3 9h18" />
                                            <path d="M9 21V9" />
                                        </svg>
                                    @elseif($card['icon'] === 'utm')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="text-sm sm:text-base font-bold text-white mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-xs text-slate-300 leading-relaxed text-justify">
                                        {{ $card['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection

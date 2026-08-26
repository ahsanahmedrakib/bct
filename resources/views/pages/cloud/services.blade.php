@extends('layouts.page')

@section('title', 'Cloud Services | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    <span class="text-blue-600">Ask us about</span><br>
                    Microsoft 365 for your business
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">If you are considering migrating to the
                    cloud, let Total Solutions IT guide you on your journey. Our team of accredited specialists have the
                    expertise and reputation to support a smooth and successful cloud transition. We will work closely with
                    you to assess your needs and choose the platform that is right for you. Our team will assist with each
                    step of the journey - from implementation, through adoption and to optimisation.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#benefits"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">BENEFITS <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                    <a href="#services"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">SERVICES <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-slate-200 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Cloud Services" loading="lazy" class="rounded-lg w-full"
                    src="/images/cloud/hero.png" />
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

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto" id="benefits">
        <div class="reveal reveal-fade-up">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Right application, right scale, right cost</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @php
                    $benefits = [
                        [
                            'title' => 'Scalability',
                            'desc' => 'Scale infrastructure up or down easily based on point in time needs. Whether it\'s increasing storage capacity, computing power, or network bandwidth, the cloud provides flexibility to meet fluctuating demands without the need for significant upfront investments.',
                        ],
                        [
                            'title' => 'Accessibility',
                            'desc' => 'The cloud enables employees to access data, applications, and resources - anytime, from anywhere. This fosters remote work, collaboration across distributed teams, and increases productivity by eliminating geographical constraints.',
                        ],
                        [
                            'title' => 'Enhanced security',
                            'desc' => 'Cloud provides advanced security protocols, encryption techniques, and monitoring systems to ensure data privacy and protection against unauthorised access.',
                        ],
                        [
                            'title' => 'Cost efficiencies',
                            'desc' => 'Rather than investing in expensive hardware and software upfront, organisations can pay for cloud resources on a subscription or consumption basis – eliminating the need for maintaining and upgrading expensive infrastructure.',
                        ],
                        [
                            'title' => 'Business continuity',
                            'desc' => 'By leveraging the cloud, enterprises can implement effective disaster recovery plans, ensuring that critical data and applications are protected and can be quickly restored in the event of an outage or other unforeseen circumstance.',
                        ],
                        [
                            'title' => 'Rapid deployment',
                            'desc' => 'Quickly deploy applications and services, reducing time-to-market for new products or features. Ready-to-use infrastructure and development tools, allows developers to focus on coding rather than setting up and configuring hardware and software.',
                        ],
                        [
                            'title' => 'Innovation and agility',
                            'desc' => 'Experiment and innovate at a faster pace with cutting-edge technologies, such as artificial intelligence, machine learning, and big data analytics.',
                        ],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; {{ $benefit['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $benefit['desc'] }}</p>
                        <a href="#"
                            class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50" id="services">
        <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Cloud Services for the modern business</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'title' => 'Microsoft 365',
                            'img' => '/images/cloud/microsoft365.jpg',
                            'desc' => 'Total Solutions IT will help you get the most out of your Microsoft 365 service.',
                        ],
                        [
                            'title' => 'Windows 365',
                            'img' => '/images/cloud/windows365.jpg',
                            'desc' => 'Virtual windows machines hosted on the Microsoft Azure service.',
                        ],
                        [
                            'title' => 'Microsoft Azure',
                            'img' => '/images/cloud/azure.png',
                            'desc' => 'Cloud Based hosting for IAAS(infrastructure as a service)',
                        ],
                        [
                            'title' => 'Entra ID',
                            'img' => '/images/cloud/entra.jpg',
                            'desc' => 'Microsoft Entra ID is a cloud-based identity and access management solution.',
                        ],
                        [
                            'title' => 'Data Backup',
                            'img' => '/images/cloud/backup.jpg',
                            'desc' => 'Protecting your data, both onsite and cloud based solutions.',
                        ],
                        [
                            'title' => 'Email Signature Management',
                            'img' => '/images/cloud/email.jpg',
                            'desc' => 'Easily manage your email signatures from a central location',
                        ],
                    ];
                @endphp
                @foreach ($services as $service)
                    <div
                        class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-lg transition-shadow border border-slate-100">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ $service['img'] }}" alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $service['title'] }}</h3>
                            <p class="text-slate-600 text-sm">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

@extends('layouts.app')

@section('title', 'Microsoft Azure | Bismillah Computer & Technology')
@section('description', 'Enterprise cloud computing platform for building, deploying, and managing applications.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft
                    <span class="text-blue-600 block mt-2"> Azure</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Azure is
                    an ever-expanding set of cloud services to help your organization meet your business challenges. It's
                    the freedom to build, manage, and deploy applications on a massive, global network using your favorite
                    tools and frameworks.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-blue-600 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-blue-600 hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Azure" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/azure/azure.png" />
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

    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/azure/section.png" alt="Microsoft Azure"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-xl p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Azure Cloud Platform</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft Azure?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft Azure is an ever-expanding set
                    of cloud services to help your organization meet your business challenges. It's the freedom to build,
                    manage, and deploy applications on a massive, global network using your favorite tools and frameworks.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Find answers to the business challenges
                    you face with an Azure solution that brings together everything you need — related products, services,
                    and third-party applications. From DevOps to business analytics to the Internet of Things, you'll be up
                    and running quickly with a scalable, cost-effective solution that works with your existing investments.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Total Solutions IT is a long-standing
                    Microsoft Gold Certified Partner with high-levels of expertise in implementing and supporting Azure
                    solutions for our clients.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features of Microsoft Azure</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Everything you need for cloud computing, storage,
                    and enterprise solutions</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $keyFeatures = [
                        [
                            'title' => 'Cloud Computing',
                            'desc' => 'Access virtual machines, containers, and serverless computing resources on-demand — scale up or down based on your needs.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />',
                        ],
                        [
                            'title' => 'Global Network',
                            'desc' => "Deploy applications across Microsoft's global network of datacentres for low latency and high availability worldwide.",
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                        ],
                        [
                            'title' => 'Pay-As-You-Go',
                            'desc' => 'Only pay for the resources you actually use with flexible pricing models — no large upfront capital expenditure required.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        ],
                        [
                            'title' => 'Enterprise Security',
                            'desc' => 'Built-in security features including encryption, identity management, and compliance certifications to protect your data.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                        [
                            'title' => 'Hybrid Capability',
                            'desc' => 'Extend your on-premises infrastructure to the cloud with hybrid solutions that give you the best of both worlds.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                        ],
                        [
                            'title' => 'Managed Databases',
                            'desc' => 'Fully managed database services including SQL Database, Cosmos DB, and MySQL — with built-in intelligence and automation.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />',
                        ],
                    ];
                @endphp
                @foreach ($keyFeatures as $feature)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-4 text-blue-600">
                            <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 text-center mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="vpc-reasons">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div class="reveal reveal-fade-up">
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Reasons a VPC May Suit Your Business</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-8 text-justify">A Virtual Private Cloud (VPC) on
                        Microsoft Azure provides a secure, isolated environment for your infrastructure. Here are key
                        reasons it may be right for your organisation:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-slate-700 text-sm">Your business has multiple sites.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-slate-700 text-sm">You need to access your infrastructure on the road.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-slate-700 text-sm">You need to be able to upgrade the hardware on your server instantly.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-slate-700 text-sm">You don't want huge upfront costs.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="text-blue-600 shrink-0 mt-0.5 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-slate-700 text-sm">You only want to pay for the bandwidth and hardware that you use.</span>
                        </li>
                    </ul>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-xl p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative h-full">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Virtual Private Cloud</span>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Why Choose a VPC?</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">A Virtual Private Cloud on Microsoft
                        Azure provides a secure, isolated environment for your infrastructure. You get the flexibility of cloud
                        computing with the control and security of a private network — all without the overhead of managing
                        physical hardware.</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">1.</span>
                            <span class="text-sm text-slate-600">Your business has multiple sites.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">2.</span>
                            <span class="text-sm text-slate-600">You need to access your infrastructure on the road.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">3.</span>
                            <span class="text-sm text-slate-600">You need to be able to upgrade the hardware on your server instantly.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">4.</span>
                            <span class="text-sm text-slate-600">You don't want huge upfront costs.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-blue-600 font-bold text-sm shrink-0 mt-0.5">5.</span>
                            <span class="text-sm text-slate-600">You only want to pay for the bandwidth and hardware that you use.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="benefits">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Virtual Private Cloud</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Why organisations choose Azure VPC for their cloud
                    infrastructure</p>
            </div>
            @php
                $benefits = [
                    [
                        'title' => 'Pay for What You Use',
                        'desc' => 'With a cloud server, you pay a fixed rate monthly for the services you use. No surprises, no hidden fees — just transparent, predictable costs.',
                    ],
                    [
                        'title' => 'Mobility',
                        'desc' => "You can access your cloud server from anywhere with an internet connection. Your team stays productive whether they're in the office, at home, or on the road.",
                    ],
                    [
                        'title' => 'Scalability',
                        'desc' => 'As your business grows, so can your hardware — without downtime or physical work. Scale resources up or down instantly to match demand.',
                    ],
                    [
                        'title' => 'No Upfront Hardware Costs',
                        'desc' => 'There is no infrastructure put in place on your site — it is all stored in another datacentre. Eliminate capital expenditure on physical servers.',
                    ],
                    [
                        'title' => "Bangladesh's Best Datacentres",
                        'desc' => 'Total Solutions IT uses the Telstra cloud server datacentre — the most stable and available service in the country. Your infrastructure is hosted in world-class facilities.',
                    ],
                    [
                        'title' => 'Data Availability',
                        'desc' => 'Telstra cloud servers are maintained at the physical level by Telstra technicians — as part of your monthly fixed cost. You can ensure that your system will always be available.',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $benefit['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12 reveal reveal-fade-up">Useful Links</h2>
            @php
                $usefulLinks = [
                    [
                        'title' => 'Azure DevOps',
                        'description' => 'Plan, develop, and deliver software faster with Azure DevOps — the set of development tools for CI/CD pipelines, repos, and project management.',
                        'href' => 'https://azure.microsoft.com/en-us/solutions/devops/',
                    ],
                    [
                        'title' => 'Azure Business Analytics',
                        'description' => "Turn your data into actionable insights with Azure's business analytics services — including Power BI, Data Factory, and Synapse Analytics.",
                        'href' => 'https://azure.microsoft.com/en-us/solutions/big-data/',
                    ],
                    [
                        'title' => 'Azure Internet of Things',
                        'description' => 'Build IoT solutions with Azure — connect, monitor, and manage IoT devices at scale with comprehensive cloud services.',
                        'href' => 'https://azure.microsoft.com/en-us/overview/iot/',
                    ],
                    [
                        'title' => 'Azure Documentation',
                        'description' => 'Official Microsoft Azure documentation — tutorials, API references, and guides for building and managing cloud solutions.',
                        'href' => 'https://learn.microsoft.com/en-us/azure/',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($usefulLinks as $link)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; {{ $link['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                        <a href="{{ $link['href'] }}" target="_blank"
                            class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center mb-12">Common questions about Microsoft Azure</p>
            </div>
            @php
                $faqs = [
                    [
                        'question' => 'What is Microsoft Azure?',
                        'answer' => 'Microsoft Azure is a cloud computing platform and service from Microsoft that provides a wide range of cloud services including compute, storage, networking, databases, and more. It allows organisations to build, deploy, and manage applications through Microsoft-managed datacentres worldwide.',
                    ],
                    [
                        'question' => 'Why should my business use Azure?',
                        'answer' => 'Azure provides scalable, cost-effective cloud infrastructure without the need for large upfront hardware investments. It offers enterprise-grade security, global reach, hybrid capabilities, and pay-as-you-go pricing that scales with your business needs.',
                    ],
                    [
                        'question' => 'How does Azure pricing work?',
                        'answer' => 'Azure uses a pay-as-you-go pricing model — you only pay for the resources you actually consume. There are no upfront costs, and you can scale resources up or down as needed. Various pricing calculators and cost management tools help you estimate and control your spend.',
                    ],
                    [
                        'question' => 'What is a Virtual Private Cloud (VPC)?',
                        'answer' => 'A Virtual Private Cloud is an isolated section of a cloud environment where you can launch resources in a virtual network that you define. It provides control over your virtual networking environment including IP address ranges, subnets, route tables, and network gateways.',
                    ],
                    [
                        'question' => 'Can Azure work with my existing infrastructure?',
                        'answer' => 'Yes. Azure offers extensive hybrid capabilities through Azure Arc and Azure Stack, allowing you to connect your on-premises infrastructure to the cloud. You can extend, manage, and govern resources across any infrastructure — on-premises, at the edge, or in multi-cloud environments.',
                    ],
                ];
            @endphp
            <div class="space-y-4 mx-auto">
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="chevron w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

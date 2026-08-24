@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal reveal-fade-up">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight mb-6">
                    {{ $title1 ?? 'Industry-Specific' }}
                    <span class="text-blue-600 block">{{ $title2 ?? 'IT Solutions' }}</span>
                </h1>
                <p class="text-lg text-slate-600 mb-8 max-w-xl">
                    {{ $description ?? 'Tailored technology support designed to meet the unique demands of your industry, ensuring compliance, efficiency, and growth.' }}
                </p>
                <div class="flex flex-wrap gap-3 mb-8">
                    @foreach($actionButtons ?? ['Healthcare', 'Construction', 'Logistics', 'Accounting'] as $button)
                        <a href="#industries" class="px-5 py-2.5 bg-navy hover:bg-navy/90 text-white rounded-full text-sm font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                            {{ $button }}
                        </a>
                    @endforeach
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-slate-500 text-sm">Need help?</span>
                    <a href="{{ $contactUrl ?? '/contact' }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-full font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="reveal reveal-fade-up hidden lg:block" style="transition-delay:200ms">
                <div class="relative w-full aspect-square max-w-lg mx-auto">
                    <img src="{{ $heroImage ?? '/images/industry/hero.png' }}" alt="Industry-Specific IT Solutions" class="object-contain drop-shadow-2xl" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
                </div>
            </div>
        </div>
    </div>
    <!-- Curved Bottom SVG -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<!-- Industries Grid Section -->
<section id="industries" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal reveal-fade-up">
            <h2 class="text-3xl font-bold text-blue-900 mb-12">Industries We Serve</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            @php
                $industries = [
                    [
                        'title' => 'Professional Services',
                        'image' => '/images/industry/industry-1.png',
                        'description' => 'Specialized IT solutions for law firms, consultancies, and professional service providers to enhance productivity and client management.',
                    ],
                    [
                        'title' => 'Freight + Logistics',
                        'image' => '/images/industry/industry-2.png',
                        'description' => 'Technology infrastructure and systems to optimize supply chain operations, fleet management, and real-time tracking.',
                    ],
                    [
                        'title' => 'Agriculture, farming, breeding + microbials',
                        'image' => '/images/industry/industry-3.png',
                        'description' => 'Smart farming solutions, IoT integration, and data-driven agriculture technology for modern farming operations.',
                    ],
                    [
                        'title' => 'Community + aged care facilities',
                        'image' => '/images/industry/industry-4.png',
                        'description' => 'Secure, compliant IT systems for aged care and community facilities supporting resident care and administration.',
                    ],
                    [
                        'title' => 'Vet, healthcare, fertility + medical',
                        'image' => '/images/industry/industry-5.png',
                        'description' => 'HIPAA-compliant healthcare IT solutions including EHR systems, telehealth platforms, and secure data management.',
                    ],
                    [
                        'title' => 'Real estate + storage facilities',
                        'image' => '/images/industry/industry-6.png',
                        'description' => 'Property management systems, smart storage solutions, and digital platforms for real estate operations.',
                    ],
                    [
                        'title' => 'Engineering + Science',
                        'image' => '/images/industry/industry-7.png',
                        'description' => 'High-performance computing, CAD/CAM integration, and specialized scientific software infrastructure.',
                    ],
                    [
                        'title' => 'Accounting, bookkeeping + financial',
                        'image' => '/images/industry/industry-8.png',
                        'description' => 'Secure financial systems, cloud accounting platforms, and compliance tools for financial service providers.',
                    ],
                    [
                        'title' => 'Construction + project management',
                        'image' => '/images/industry/industry-9.png',
                        'description' => 'Project management software, BIM integration, and on-site technology solutions for construction firms.',
                    ],
                    [
                        'title' => 'Non-profit, government + professional',
                        'image' => '/images/industry/industry-10.png',
                        'description' => 'Affordable, scalable IT solutions meeting compliance requirements for government and non-profit organizations.',
                    ],
                ];
            @endphp

            @foreach($industries as $i => $item)
                <div class="reveal reveal-fade-up h-full" style="transition-delay:{{ $i * 80 }}ms">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="object-cover transition-transform duration-700 group-hover:scale-105" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-3">{{ $item['title'] }}</h3>
                            <p class="text-sm text-slate-600">{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

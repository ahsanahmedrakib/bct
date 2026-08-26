@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32 overflow-hidden">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                {{ $title1 ?? 'Industry-Specific' }}
                <br/>
                <span class="text-blue-600 block mt-2">{{ $title2 ?? 'IT Solutions' }}</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">
                {{ $description ?? 'Tailored technology support designed to meet the unique demands of your industry, ensuring compliance, efficiency, and growth.' }}
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                @foreach($actionButtons ?? ['Healthcare', 'Construction', 'Logistics', 'Accounting'] as $button)
                    <a href="#industries"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">{{ $button }} <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                @endforeach
            </div>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ $contactUrl ?? '/contact' }}"
                    class="px-6 py-2.5 bg-white border border-slate-200 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Contact Us</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img src="{{ $heroImage ?? '/images/industry/hero.png' }}" alt="Industry-Specific IT Solutions" class="rounded-lg w-full" />
        </div>
    </div>
    <!-- Curved Bottom SVG -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
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
                        'description' => 'Delivering specialized IT support for the legal profession by integrating technologies like Smokeball, providing trust for lawyers and legal services.',
                    ],
                    [
                        'title' => 'Freight + Logistics',
                        'image' => '/images/industry/industry-2.png',
                        'description' => 'Empowering the efficiency of freight and logistics services with industry-specific IT support for streamlined operations and enhanced logistics management.',
                    ],
                    [
                        'title' => 'Agriculture, farming, breeding + microbials',
                        'image' => '/images/industry/industry-3.png',
                        'description' => 'Cultivating growth in agriculture and microbial services through specialized IT support, fostering technological resiliency and innovation in the field.',
                    ],
                    [
                        'title' => 'Community + aged care facilities',
                        'image' => '/images/industry/industry-4.png',
                        'description' => 'Compassionate and reliable IT support tailored to enhance the well-being of individuals and organizations in this sector.',
                    ],
                    [
                        'title' => 'Vet, healthcare, fertility + medical',
                        'image' => '/images/industry/industry-5.png',
                        'description' => 'Experienced with Genie and MedicalDirector, providing for a seamless blend of technology and compassion for enhanced patient care.',
                    ],
                    [
                        'title' => 'Real estate + storage facilities',
                        'image' => '/images/industry/industry-6.png',
                        'description' => 'Operational excellence in real estate and storage facilities through specialized IT support services.',
                    ],
                    [
                        'title' => 'Engineering + Science',
                        'image' => '/images/industry/industry-7.png',
                        'description' => 'IT support services catering to the distinctive requirements of smooth, reliable operation and compliance within the engineering industry.',
                    ],
                    [
                        'title' => 'Accounting, bookkeeping + financial',
                        'image' => '/images/industry/industry-8.png',
                        'description' => 'Explore our security-focused IT support services, elevating efficiency and compliance for accounting and financial sectors.',
                    ],
                    [
                        'title' => 'Construction + project management',
                        'image' => '/images/industry/industry-9.png',
                        'description' => 'Discover our specialized IT support services catering to ensuring seamless operations and efficiency in the building industry.',
                    ],
                    [
                        'title' => 'Non-profit, government + professional',
                        'image' => '/images/industry/industry-10.png',
                        'description' => 'Driving meaningful impact and success to organizations of all sizes, budgets and institutions.',
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

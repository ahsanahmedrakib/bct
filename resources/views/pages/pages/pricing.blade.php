@extends('layouts.app')

@section('title', 'Pricing Plans | Bismillah Computer & Technology')
@section('description', 'Explore our flexible pricing plans for IT solutions and services.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Pricing Plans', 'eyebrow' => 'Pricing Plans'])

    {{-- Pricing Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Our Pricing Plan</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Explore Our Flexible Pricing Plans</h2>
            </div>
            <div class="reveal reveal-fade-up grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @php
                    $plans = [
                        [
                            'name' => 'Basic Package',
                            'price' => '৳199.00',
                            'period' => '/Monthly',
                            'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                            'featured' => false,
                        ],
                        [
                            'name' => 'Standard Package',
                            'price' => '৳299.00',
                            'period' => '/Monthly',
                            'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                            'featured' => true,
                        ],
                        [
                            'name' => 'Premium Package',
                            'price' => '৳399.00',
                            'period' => '/Monthly',
                            'features' => ['Community Support', 'Dedicated Tech Experts', 'Unlimited Storage', 'Custom Domains', '24/7 System Monitoring'],
                            'featured' => false,
                        ],
                    ];
                @endphp
                @foreach ($plans as $plan)
                    <div class="rounded-2xl p-8 {{ $plan['featured'] ? 'bg-brand-blue text-white ring-4 ring-brand-blue shadow-xl scale-105 relative' : 'bg-brand-light-bg text-heading' }}">
                        @if ($plan['featured'])
                            <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-secondary text-white text-xs font-bold px-4 py-1.5 rounded-full">Popular</span>
                        @endif
                        <h3 class="text-xl font-bold mb-2 {{ $plan['featured'] ? 'text-white' : 'text-heading' }}">{{ $plan['name'] }}</h3>
                        <div class="mb-6">
                            <span class="text-4xl font-extrabold">{{ $plan['price'] }}</span>
                            <span class="text-sm {{ $plan['featured'] ? 'text-white/70' : 'text-body-muted' }}">{{ $plan['period'] }}</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-center gap-3">
                                    <svg class="w-5 h-5 {{ $plan['featured'] ? 'text-white' : 'text-brand-blue' }} flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm {{ $plan['featured'] ? 'text-white/90' : 'text-body-muted' }}">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}" class="block text-center font-semibold rounded-full px-8 py-3.5 transition-all duration-300 {{ $plan['featured'] ? 'bg-white text-brand-blue hover:bg-white/90' : 'bg-brand-blue text-white hover:bg-brand-hover' }}">
                            Choose Package
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 bg-brand-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Have any project to work with us</h2>
                <p class="text-white/60 text-lg mb-8">Grab up to 35% off — Limited time offer, don't miss the opportunity</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                    Contact With Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Testimonial</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">What Clients Say About Us</h2>
            </div>
            <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $testimonials = [
                        ['name' => 'Maria Doe', 'role' => 'UI/UX Designer'],
                        ['name' => 'Andrew Simon', 'role' => 'Front-End Developer'],
                        ['name' => 'Alex Jordan', 'role' => 'Backend Engineer'],
                        ['name' => 'Maria Doe', 'role' => 'Python Developer'],
                    ];
                @endphp
                @foreach ($testimonials as $t)
                    <div class="bg-brand-light-bg rounded-2xl p-6">
                        <div class="flex items-center gap-1 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-sm text-body-muted leading-relaxed mb-4 italic">"In today's fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals."</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-brand-blue/20 flex items-center justify-center">
                                <span class="text-brand-blue font-bold text-sm">{{ substr($t['name'], 0, 2) }}</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-heading text-sm">{{ $t['name'] }}</h5>
                                <p class="text-xs text-body-muted">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

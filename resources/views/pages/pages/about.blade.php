@extends('layouts.app')

@section('title', 'About Us | Bismillah Computer & Technology')
@section('description', 'Learn about Bismillah Computer & Technology - empowering businesses through smart IT solutions with over 10 years of trusted experience.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'About Us', 'eyebrow' => 'About Us'])

    {{-- About Area --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider">About Us</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-heading leading-tight">Empowering Businesses Through Smart IT Solutions</h2>
                    <p class="text-body-muted text-lg leading-relaxed">Bismillah Computer & Technology delivers secure, scalable, and affordable IT solutions — from network consultancy and website development to ISP, hardware, and software support. With over 10 years of trusted experience, we help businesses stay connected, reliable, and future-ready.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                        Discover More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-brand-light-bg rounded-2xl p-8 relative overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-heading">Innovation at our core</h4>
                                    <p class="text-sm text-body-muted">Driving growth through smart, reliable, and future-ready IT solutions.</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-heading">Internal Networking</h4>
                                    <p class="text-sm text-body-muted">Streamline communication and data sharing with secure, high-performance internal networks.</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-heading">Simplifying complexity</h4>
                                    <p class="text-sm text-body-muted">Turning complicated technology into simple, effective solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-brand-blue/5 rounded-full"></div>
                        <div class="absolute -top-10 -left-10 w-32 h-32 bg-brand-blue/5 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Counter Area --}}
    <section class="py-16 bg-brand-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2">8K+</div>
                    <p class="text-white/60 text-sm uppercase tracking-wider">Projects Completed</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2">260+</div>
                    <p class="text-white/60 text-sm uppercase tracking-wider">Skilled Experts</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2">60K+</div>
                    <p class="text-white/60 text-sm uppercase tracking-wider">Media Activities</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2">19K+</div>
                    <p class="text-white/60 text-sm uppercase tracking-wider">Happy Clients</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Work Process --}}
    <section class="py-20 bg-brand-light-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Work Process</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Managed IT Services That Keep You Moving Forward</h2>
            </div>
            <div class="reveal reveal-fade-up grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 text-center group">
                    <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-blue group-hover:text-white transition-all duration-300">
                        <span class="text-xl font-extrabold text-brand-blue group-hover:text-white transition-colors">01</span>
                    </div>
                    <h3 class="text-xl font-bold text-heading mb-3">Consultation & Assessment</h3>
                    <p class="text-body-muted leading-relaxed">We begin with a deep understanding of your business needs, current IT environment, and growth objectives.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 text-center group">
                    <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-blue group-hover:text-white transition-all duration-300">
                        <span class="text-xl font-extrabold text-brand-blue group-hover:text-white transition-colors">02</span>
                    </div>
                    <h3 class="text-xl font-bold text-heading mb-3">Implementation & Integration</h3>
                    <p class="text-body-muted leading-relaxed">Our team ensures seamless integration of new solutions into your existing infrastructure, minimizing disruption.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 text-center group">
                    <div class="w-16 h-16 rounded-full bg-brand-blue/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-blue group-hover:text-white transition-all duration-300">
                        <span class="text-xl font-extrabold text-brand-blue group-hover:text-white transition-colors">03</span>
                    </div>
                    <h3 class="text-xl font-bold text-heading mb-3">Ongoing Support & Optimization</h3>
                    <p class="text-body-muted leading-relaxed">We provide continuous support and regularly assess performance to enhance system efficiency.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Preview --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Team Members</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Meet Our Expert Members</h2>
            </div>
            <div class="reveal reveal-fade-up grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $teamMembers = [
                        ['name' => 'Tamzid Hasan', 'role' => 'IT Consultant', 'image' => '/images/home/team/team_1_1.jpg'],
                        ['name' => 'Habibullah Mezbah', 'role' => 'Web Developer', 'image' => '/images/home/team/team_1_2.jpg'],
                        ['name' => 'Tanzim Hasan Anik', 'role' => 'Director', 'image' => '/images/home/team/team_1_3.jpg'],
                        ['name' => 'Tamzid Hasan', 'role' => 'IT Consultant', 'image' => '/images/home/team/team_1_4.jpg'],
                    ];
                @endphp
                @foreach ($teamMembers as $member)
                    <div class="group text-center">
                        <div class="relative overflow-hidden rounded-2xl mb-4">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <h4 class="text-lg font-bold text-heading">{{ $member['name'] }}</h4>
                        <p class="text-sm text-body-muted">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-brand-light-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up grid lg:grid-cols-2 gap-16">
                <div>
                    <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">FAQ</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-heading mb-6">Frequently Asked Questions</h2>
                    <p class="text-body-muted text-lg mb-8">With years of experience in the IT industry, our certified professionals bring deep knowledge and proven solutions to every project.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                        Asked Questions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
                <div class="space-y-4">
                    @php
                        $faqs = [
                            'Can You Help Migrate Our Data To The Cloud?' => 'Absolutely. We provide secure and seamless cloud migration services with minimal downtime and full data integrity. Our team handles everything from planning and assessment to execution and post-migration support.',
                            'How Do You Ensure Our Data And Systems Are Secure?' => 'Absolutely. We provide secure and seamless cloud migration services with minimal downtime and full data integrity. Our team handles everything from planning and assessment to execution and post-migration support.',
                            'What If We Already Have An In-House IT Team?' => 'Absolutely. We provide secure and seamless cloud migration services with minimal downtime and full data integrity. Our team handles everything from planning and assessment to execution and post-migration support.',
                            'How Do I Know Which IT Services My Business Needs?' => 'Absolutely. We provide secure and seamless cloud migration services with minimal downtime and full data integrity. Our team handles everything from planning and assessment to execution and post-migration support.',
                        ];
                    @endphp
                    @foreach ($faqs as $question => $answer)
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm" x-data="{ open: false }">
                            <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left hover:bg-brand-light-bg transition-colors">
                                <span class="font-semibold text-heading pr-4">{{ $question }}</span>
                                <svg class="w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="open" x-collapse x-cloak>
                                <div class="px-6 pb-6 text-body-muted leading-relaxed">{{ $answer }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-16">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Real Feedback from Real Clients</h2>
            </div>
            <div class="reveal reveal-fade-up grid md:grid-cols-2 gap-8">
                <div class="bg-brand-light-bg rounded-2xl p-8">
                    <div class="flex items-center gap-1 mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-body-muted leading-relaxed mb-6 italic">"Bismillah Computer & Technology has been an invaluable partner for our IT needs. Their team delivered exceptional results on time and within budget."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-brand-blue/20 flex items-center justify-center">
                            <span class="text-brand-blue font-bold">MA</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-heading">Michel Andric</h5>
                            <p class="text-sm text-body-muted">CEO & Founder, Company ABC</p>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-light-bg rounded-2xl p-8">
                    <div class="flex items-center gap-1 mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-body-muted leading-relaxed mb-6 italic">"Their professionalism and expertise in cloud solutions and cyber security have significantly improved our business operations. Highly recommended!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-brand-blue/20 flex items-center justify-center">
                            <span class="text-brand-blue font-bold">AS</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-heading">Andrew Simon</h5>
                            <p class="text-sm text-body-muted">CEO & Founder, Company ABC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

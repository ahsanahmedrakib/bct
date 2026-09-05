@extends('layouts.app')

@section('title', 'Team Members | Bismillah Computer & Technology')
@section('description', 'Meet our expert team members at Bismillah Computer & Technology.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Team Members', 'eyebrow' => 'Our Team'])

    {{-- ======================== OUR TEAM ======================== --}}
    <section class="bg-white py-16 px-4 sm:px-6 lg:px-8 font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal fade-up text-center max-w-2xl mx-auto mb-16">
                <span class="inline-flex items-center gap-3 text-theme-blue text-lg sm:text-xl font-medium tracking-wide">
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-border"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-blue"></span></span>
                    <span class="font-bold uppercase">Our Team</span>
                    <span class="relative inline-block h-5 w-5 shrink-0"><span
                            class="absolute left-0 top-0 h-2.5 w-2.5 bg-theme-blue"></span><span
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-theme-border"></span></span>
                </span>
                <h2
                    class="text-3xl sm:text-4xl md:text-[44px] xl:text-5xl font-bold text-theme-navy tracking-tight leading-tight mt-4">
                    Meet our expert team members</h2>
            </div>
            @php
                $team = [
                    [
                        'name' => 'Tamzid Hasan',
                        'role' => 'IT Consultant',
                        'label' => 'Consultant',
                        'image' => '/images/home/team/thp.png',
                    ],
                    [
                        'name' => 'Tanzim Hasan Anik',
                        'role' => 'Director',
                        'label' => 'Director',
                        'image' => '/images/home/team/tha.jpg',
                    ],
                    [
                        'name' => 'Nazmul Apple',
                        'role' => 'System Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/na.jpeg',
                    ],
                    [
                        'name' => 'Habibullah Mezbah',
                        'role' => 'Web Developer',
                        'label' => 'Developer',
                        'image' => '/images/home/team/hm.png',
                    ],
                    [
                        'name' => 'Ahsan Ahmed Rakib',
                        'role' => 'Software Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/aar.jpg',
                    ],
                    [
                        'name' => 'Md. Tarikul Islam',
                        'role' => 'Technical Support Engineer',
                        'label' => 'Engineer',
                        'image' => '/images/home/team/ti.jfif',
                    ],
                ];
            @endphp
            <div class="swiper team-swiper overflow-hidden pb-2">
                <div class="swiper-wrapper">
                    @foreach ($team as $index => $member)
                        <div class="swiper-slide h-auto">
                            <div class="reveal fade-up h-full">
                                <div class="group cursor-pointer flex flex-col h-full">
                                    <div class="relative w-full aspect-4/5 rounded-xl bg-gray-100">
                                        <div class="absolute inset-0 rounded-xl overflow-hidden">
                                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                                class="object-cover transition-transform duration-500 group-hover:scale-105 w-full h-full"
                                                loading="lazy" />
                                            <div
                                                class="absolute inset-0 bg-linear-to-t from-dark-hero/90 via-dark-hero/20 to-transparent transition-opacity duration-300">
                                            </div>
                                        </div>
                                        <div class="absolute -right-4 bottom-1 select-none pointer-events-none">
                                            <span class="text-5xl font-bold tracking-normal uppercase text-white"
                                                style="writing-mode:vertical-rl">{{ $member['label'] }}</span>
                                        </div>
                                    </div>
                                    <div class="mt-5 space-y-1">
                                        <p class="text-[13px] font-semibold text-gray-500 tracking-wide">/
                                            {{ $member['role'] }} /
                                        </p>
                                        <h3
                                            class="text-xl font-bold text-dark-hero transition-colors duration-300 group-hover:text-accent-orange">
                                            {{ $member['name'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- Team Navigation --}}
            <div class="mt-10 flex items-center justify-center">
                <div class="team-pagination flex items-center space-x-2"></div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 bg-brand-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Have any project to work with us</h2>
                <p class="text-white/60 text-lg mb-8">Grab up to 35% off — Limited time offer, don't miss the opportunity
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-hover text-white font-semibold rounded-full px-8 py-3.5 transition-all duration-300">
                    Contact With Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ── Team slider ─────────────────────────────────
            var teamSwiperEl = document.querySelector('.team-swiper');
            if (teamSwiperEl) {
                var teamPaginationEl = document.querySelector('.team-pagination');

                function teamPerView() {
                    var w = window.innerWidth;
                    if (w >= 1280) return 4;
                    if (w >= 1024) return 3;
                    if (w >= 640) return 2;
                    return 1;
                }

                function renderTeamBullets() {
                    if (!teamPaginationEl || !window.teamSwiper) return;
                    var total = window.teamSwiper.slides.length;
                    var groups = Math.ceil(total / teamPerView());
                    teamPaginationEl.innerHTML = '';
                    for (var i = 0; i < groups; i++) {
                        var b = document.createElement('button');
                        b.className =
                            'team-bullet w-2.5 h-2.5 rounded-full bg-gray-400 cursor-pointer transition-all';
                        b.setAttribute('data-slide', (i * teamPerView()) % total);
                        b.addEventListener('click', function() {
                            window.teamSwiper.slideToLoop(parseInt(this.getAttribute('data-slide')));
                        });
                        teamPaginationEl.appendChild(b);
                    }
                    updateTeamBullets();
                }

                function updateTeamBullets() {
                    if (!teamPaginationEl || !window.teamSwiper) return;
                    var bullets = teamPaginationEl.querySelectorAll('.team-bullet');
                    var idx = window.teamSwiper.realIndex;
                    var group = Math.floor(idx / teamPerView());
                    bullets.forEach(function(b, i) {
                        b.classList.toggle('team-bullet-active', i === group);
                    });
                }

                window.teamSwiper = new Swiper('.team-swiper', {
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    },
                    slidesPerView: 1,
                    spaceBetween: 24,
                    on: {
                        slideChange: function() {
                            updateTeamBullets();
                        },
                        init: function() {
                            renderTeamBullets();
                        }
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2
                        },
                        1024: {
                            slidesPerView: 3
                        },
                        1280: {
                            slidesPerView: 4
                        }
                    }
                });

                renderTeamBullets();
                window.addEventListener('resize', renderTeamBullets);
            }
        }); // end DOMContentLoaded
    </script>
    <style>
        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 50%;
            background-color: #64748b;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .swiper-pagination-bullet-active {
            width: 24px;
            height: 8px;
            border-radius: 9999px;
            background-color: #da3825 !important;
        }

        .hero-indicator:hover {
            border-top-color: #157cc1 !important;
        }

        .hero-indicator:hover span:last-child {
            color: #157cc1 !important;
        }

        .blog-custom-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 50%;
            background-color: #64748b;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .blog-bullet-active {
            width: 24px;
            height: 8px;
            border-radius: 9999px;
            background-color: #da3825 !important;
        }

        .team-bullet {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #0b59db;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .team-bullet-active {
            width: 24px;
            height: 8px;
            border-radius: 9999px;
            background-color: #da3825 !important;
        }
    </style>
@endpush

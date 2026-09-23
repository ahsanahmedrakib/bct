@extends('layouts.app')

@section('title', 'Our Locations')

@section('content')
    @include('partials.page-hero', ['pageTitle' => 'Our Locations'])

    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-365 mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span
                    class="inline-flex items-center gap-2 px-5 py-1.5 rounded-full bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-wider mb-4">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    Visit Us
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Our Locations</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Visit our modern office facilities in Dhaka, Bangladesh. We welcome you to meet our team in person.
                </p>
            </div>

            @php
                $locations = $locations ?? [
                    [
                        'name' => 'Head Office',
                        'region' => 'Dhaka, Bangladesh',
                        'address' => 'House# 86, Road# Lake Drive, Sector#7, Uttara, Dhaka, Bangladesh',
                        'phone1' => '+880 1313010180',
                        'phone2' => '+880 9666777009',
                        'email' => 'contact@bct.com.bd',
                        'directions_link' => 'https://www.google.com/maps/search/House+86+Road+Lake+Drive+Sector+7+Uttara+Dhaka+Bangladesh',
                        'color' => 'blue',
                        'directions_label' => 'Get Directions',
                    ],
                    [
                        'name' => 'Branch Office',
                        'region' => 'Dhaka, Bangladesh',
                        'address' => 'House#6, Road# Shera Bangal Avenue, Block#B, Dolipara, Uttara, Dhaka-1230',
                        'phone1' => '+880 1313010180',
                        'phone2' => '+880 9666777009',
                        'email' => 'contact@bct.com.bd',
                        'directions_link' => 'https://www.google.com/maps/search/House+6+Road+Shera+Bangal+Avenue+Block+B+Dolipara+Uttara+Dhaka+1230',
                        'color' => 'purple',
                        'directions_label' => 'Get Directions',
                    ],
                ];
            @endphp

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($locations as $loc)
                    @php
                        $isBlue = ($loc['color'] ?? 'blue') === 'blue';
                        $bar = $isBlue ? 'bg-blue-600' : 'bg-purple-600';
                        $iconBg = $isBlue ? 'bg-blue-600' : 'bg-purple-600';
                        $iconColor = $isBlue ? 'text-blue-600' : 'text-purple-600';
                        $border = $isBlue ? 'border-blue-100 hover:border-blue-300' : 'border-purple-100 hover:border-purple-300';
                        $glow = $isBlue ? 'hover:shadow-blue-200' : 'hover:shadow-purple-200';
                        $btnFont = $isBlue
                            ? 'bg-blue-50 text-blue-700 border-blue-200 hover:bg-blue-600 hover:text-white hover:border-blue-600'
                            : 'bg-purple-50 text-purple-700 border-purple-200 hover:bg-purple-600 hover:text-white hover:border-purple-600';
                    @endphp
                    <div
                        class="relative bg-white rounded-2xl border-2 {{ $border }} hover:shadow-lg {{ $glow }} group transition-all duration-300 overflow-hidden">
                        <div class="absolute top-0 left-8 w-16 h-1.5 {{ $bar }} rounded-b-md"></div>

                        <div class="flex items-center gap-4 mb-6 mt-6 px-8 pt-2">
                            <div class="w-12 h-12 rounded-xl {{ $iconBg }} flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2" />
                                    <line x1="9" y1="22" x2="9" y2="22.01" />
                                    <line x1="15" y1="22" x2="15" y2="22.01" />
                                    <line x1="9" y1="6" x2="9" y2="6.01" />
                                    <line x1="15" y1="6" x2="15" y2="6.01" />
                                    <line x1="9" y1="10" x2="9" y2="10.01" />
                                    <line x1="15" y1="10" x2="15" y2="10.01" />
                                    <line x1="9" y1="14" x2="9" y2="14.01" />
                                    <line x1="15" y1="14" x2="15" y2="14.01" />
                                    <line x1="9" y1="18" x2="9" y2="18.01" />
                                    <line x1="15" y1="18" x2="15" y2="18.01" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">{{ $loc['name'] }}</h3>
                                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">{{ $loc['region'] }}</span>
                            </div>
                        </div>

                        <div class="px-8 pb-8">
                            <ul class="space-y-4 mb-6">
                                <li class="flex items-start gap-3">
                                    <svg class="w-4.5 h-4.5 {{ $iconColor }} mt-0.5 shrink-0" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <span class="text-sm text-slate-700 leading-relaxed">{{ $loc['address'] }}</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-4.5 h-4.5 {{ $iconColor }} mt-0.5 shrink-0" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.58 2.81.7A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                    <div class="text-sm text-slate-700 leading-relaxed">
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $loc['phone1']) }}"
                                            class="hover:underline">{{ $loc['phone1'] }}</a>
                                        @if (!empty($loc['phone2']))
                                            <br>
                                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $loc['phone2']) }}"
                                                class="hover:underline">{{ $loc['phone2'] }}</a>
                                        @endif
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-4.5 h-4.5 {{ $iconColor }} mt-0.5 shrink-0" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                    <a href="mailto:{{ $loc['email'] }}"
                                        class="text-sm text-slate-700 hover:{{ $isBlue ? 'text-blue-600' : 'text-purple-600' }} transition-colors leading-relaxed">{{ $loc['email'] }}</a>
                                </li>
                            </ul>

                            <a href="{{ $loc['directions_link'] }}" target="_blank" rel="noopener"
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold {{ $btnFont }} transition-all duration-300">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="3 11 22 2 13 21 11 13 3 11" />
                                </svg>
                                {{ $loc['directions_label'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Map --}}
            <div class="mt-12 rounded-2xl overflow-hidden border-2 border-slate-100 shadow-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4366.22184000837!2d90.38987879999999!3d23.860799300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41ec0492547%3A0x9d72192863d92047!2sBismillah%20Computer%20%26%20Technology!5e1!3m2!1sen!2sbd!4v1789211900464!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>
@endsection

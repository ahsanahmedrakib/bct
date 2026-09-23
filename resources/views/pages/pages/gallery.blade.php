@extends('layouts.app')

@section('title', 'Gallery - Bismillah Computer & Technology')
@section('description', 'Browse our recent project gallery at Bismillah Computer & Technology.')

@section('content')

    @include('partials.page-hero', ['pageTitle' => 'Gallery', 'eyebrow' => 'Gallery'])

    {{-- Gallery Section --}}
    <section class="py-20 bg-white" x-data="{ open: false, current: 0 }"
        @keydown.escape.window="open = false">
        <div class="max-w-365 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">Our Gallery</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-heading">Our Recent Project Gallery</h2>
            </div>
            <div class="reveal reveal-fade-up grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @php
                    // Admin-added (non-seed) images from the DB are shown when
                    // present. When the DB has no gallery images, the array below
                    // serves as the seed fallback content on the public page.
                    $galleryImages = $galleryImages ?? [
                        '/images/pages/gallery/gallery_10_1.jpg',
                        '/images/pages/gallery/gallery_10_2.jpg',
                        '/images/pages/gallery/gallery_10_3.jpg',
                        '/images/pages/gallery/gallery_10_4.jpg',
                        '/images/pages/gallery/gallery_10_5.jpg',
                        '/images/pages/gallery/gallery_10_6.jpg',
                        '/images/pages/gallery/gallery_10_7.jpg',
                        '/images/pages/gallery/gallery_10_8.jpg',
                        '/images/pages/gallery/gallery_10_9.jpg',
                        '/images/pages/gallery/gallery_11.jpg',
                        '/images/pages/gallery/gallery_11_1.jpg',
                    ];
                @endphp
                @foreach ($galleryImages as $index => $image)
                    <div role="button" tabindex="0"
                        @click="current = {{ $index }}; open = true"
                        @keydown.enter="current = {{ $index }}; open = true"
                        class="group relative overflow-hidden rounded-xl cursor-pointer {{ $index % 5 === 0 ? 'md:col-span-2 md:row-span-2' : '' }}">
                        <img src="{{ $image }}" alt="Gallery Image {{ $index + 1 }}"
                            class="w-full {{ $index % 5 === 0 ? 'h-64 md:h-full' : 'h-48 md:h-56' }} object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div
                            class="absolute inset-0 bg-brand-blue/0 group-hover:bg-brand-blue/20 transition-colors duration-300 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Full View Modal --}}
        <div x-show="open" x-cloak x-transition.opacity.duration.200ms
            class="fixed inset-0 z-[100] bg-black/90 flex items-center justify-center p-4 sm:p-8"
            @click.self="open = false">
            <button type="button" @click="open = false"
                class="absolute top-5 right-5 w-11 h-11 text-[16px] text-white bg-white/10 hover:bg-white/25 rounded-full transition-colors"
                aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <button type="button"
                @click="current = (current - 1 + {{ count($galleryImages) }}) % {{ count($galleryImages) }}"
                class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 w-11 h-11 text-[16px] text-white bg-white/10 hover:bg-white/25 rounded-full transition-colors"
                aria-label="Previous image">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <img :src="`{{ '' }}` + ({{ json_encode($galleryImages) }}[current])"
                x-transition.opacity.duration.200ms
                :alt="'Gallery image ' + (current + 1)"
                class="max-w-full max-h-[85vh] w-auto h-auto object-contain rounded-lg shadow-2xl" />

            <button type="button"
                @click="current = (current + 1) % {{ count($galleryImages) }}"
                class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 w-11 h-11 text-[16px] text-white bg-white/10 hover:bg-white/25 rounded-full transition-colors"
                aria-label="Next image">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </section>

@endsection

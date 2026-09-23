@extends('layouts.app')

@section('title', ($blog->title ?? 'Blog Post').' - Bismillah Computer & Technology')
@section('description', $blog->description ? Str::limit(strip_tags($blog->description), 155) : 'Read this post from Bismillah Computer & Technology.')

@section('content')

    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('pages.blogs') }}"
                class="inline-flex items-center gap-2 text-brand-blue hover:text-brand-hover font-semibold mb-8 transition-colors">
                <i class="fa-solid fa-arrow-left text-sm"></i>
                Back to Blogs
            </a>

            <article>
                <span
                    class="inline-block text-xs font-bold text-brand-secondary tracking-wider uppercase mb-4">{{ $blog->category }}</span>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-snug tracking-tight mb-6">{{ $blog->title }}</h1>

                <div class="flex items-center gap-4 text-sm text-gray-500 font-medium mb-10">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-user text-brand-blue/60"></i>
                        <span>{{ $blog->author ?: 'Admin' }}</span>
                    </div>
                    @if ($blog->published_date)
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar text-brand-blue/60"></i>
                            <span>{{ $blog->published_date->format('d M Y') }}</span>
                        </div>
                    @endif
                </div>

                @if ($blog->image)
                    <div class="rounded-2xl overflow-hidden mb-10">
                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover" />
                    </div>
                @endif

                <div class="blog-content text-body-muted leading-relaxed">
                    {!! $blog->description ?? '' !!}
                </div>
            </article>
        </div>
    </section>

@endsection
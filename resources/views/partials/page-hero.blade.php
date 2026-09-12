@php($pageTitle = $pageTitle ?? $title ?? '')

<section class="relative bg-linear-to-t from-hero-gradient to-white pt-28 pb-32 lg:pt-36 overflow-hidden">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        @if (!empty($eyebrow))
            <span class="inline-block text-brand-blue font-bold text-sm uppercase tracking-wider mb-3">{{ $eyebrow }}</span>
        @endif
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1] mb-5">{{ $pageTitle }}</h1>
        <nav class="flex items-center justify-center gap-2 text-sm text-slate-600">
            <a href="{{ route('home') }}" class="text-brand-blue hover:text-brand-hover font-medium transition-colors">Home</a>
            <span class="text-slate-400">/</span>
            <span class="text-slate-900 font-medium">{{ $pageTitle }}</span>
        </nav>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                fill="#ffffff"></path>
        </svg>
    </div>
</section>

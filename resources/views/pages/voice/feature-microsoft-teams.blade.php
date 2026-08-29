@extends('layouts.app')

@section('title', 'Microsoft Teams Calling | Bismillah Computer & Technology')
@section('description', 'Direct Routing for MS Teams provides direct dialling from Office 365 Teams — collaborate via chat, video, voice and conferencing.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-20 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
            Microsoft
            <span class="text-blue-600 block mt-2">Teams Calling</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-700 font-medium leading-relaxed mt-6 max-w-3xl">Direct Routing for MS Teams
            provides direct dialling capability from the Microsoft Office 365 Teams phone system. Now your teams can
            collaborate via chat, video, voice and conferencing to people inside and outside your organisation using a
            simple and sleek collaboration suite.</p>
        <div class="mt-10 flex flex-wrap gap-4">
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
        </div>
    </div>
</section>

{{-- ==================== DIRECT ROUTING ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-bold tracking-wider uppercase text-blue-600 mb-3">Direct Routing for MS Teams</p>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Direct Routing for MS Teams</h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">Microsoft has signaled the end of Skype for
                    Business by July 2021 and MS Teams Calling is primed and ready to replace it. Is your organization
                    ready to capitalize on this change?</p>
                <p class="text-slate-600 leading-relaxed mb-4 text-justify">We can advise you on Teams and allow you to
                    bring your existing carrier service provider into your Teams experience to leverage the rich
                    Microsoft presence experience with a seamless user experience.</p>
                <p class="text-slate-600 leading-relaxed">Need a Contact Center for Teams? Contact us today! With our
                    depth of experience across multiple Contact Center platforms, we have the best product solutions to
                    complement your MS Teams platform.</p>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== BENEFITS ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Why Choose Microsoft Teams?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                'Full range of PBX features.',
                'Ideal for remote and distributed workforce.',
                'Incredibly cost-effective deployment and operating costs.',
                'Simple Office 365 central user management.',
                'Rapid, remote deployments across multiple sites.',
                'Simple and effective collaboration tools.',
            ] as $benefit)
                <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <p class="text-slate-700 font-medium">{{ $benefit }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Ready to Modernise Your Communications?</h2>
            <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Let us help you bring Microsoft Teams calling
                to your organisation, including Contact Center solutions to complement your platform.</p>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Learn More</a>
        </div>
    </div>
</section>

@endsection

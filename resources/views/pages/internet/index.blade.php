@extends('layouts.app')

@section('title', 'Internet Services | Bismillah Computer & Technology')
@section('description', 'High-speed internet solutions for businesses. NBN, 4G/5G, Starlink, and Cel-Fi connectivity.')

@section('content')

{{-- ======================== HERO SECTION ======================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Keeping you <br/>
                <span class="text-blue-600 block mt-2">connected</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Business Internet and Voice solutions designed to keep your operations running smoothly, ensuring you stay connected with clients, colleagues, and partners.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="#partners" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    NBN internet
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#capabilities" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    4G/5G LTE
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#security" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    Starlink
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#networking" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    Cel-Fi Boosters
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
            </div>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img src="/images/internet/hero.png" alt="BG Image" height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg"/>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
        </svg>
    </div>
</section>

{{-- ======================== SERVICES GRID ======================== --}}
<section class="relative bg-slate-50 py-12 lg:py-16 z-20">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            @php
            $internetCards = [
                ['title' => 'NBN', 'desc' => 'Total Solutions IT delivers the National Broadband Network (NBN) to industry quality commercial and premises.', 'img' => '/images/internet/nbn.jpg'],
                ['title' => '4G/5G backup', 'desc' => 'Ensure you stay connected in the event of an infrastructure issue to give you peace of mind with 4G/5G backup.', 'img' => '/images/internet/backup.png'],
                ['title' => 'Cel-Fi (4G/5G Boosters)', 'desc' => 'A smart antenna on the roof communicates with the mobile tower to amplify the signal to a building.', 'img' => '/images/internet/celfi.png'],
                ['title' => 'Starlink', 'desc' => 'Starlink is a satellite internet from Low Earth Orbit satellite globally by SpaceX, delivering global broadband coverage.', 'img' => '/images/internet/starlink.png'],
            ];
            @endphp
            @foreach($internetCards as $card)
            <div class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                <div class="relative w-full overflow-hidden" style="height:192px">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="object-cover transition-transform duration-700 group-hover:scale-105" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-bold text-lg text-slate-900 mb-3">{{ $card['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $card['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== INTRO TEXT SECTION ======================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Business Internet and Voice</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">In today's digital landscape, a fast and reliable internet connection is crucial for the success of any business. We provide comprehensive Business Internet and Voice solutions designed to keep your operations running smoothly, ensuring you stay connected with clients, colleagues, and partners. Our services offer the speed, reliability, and flexibility your business needs to excel in a competitive environment.</p>
        </div>
        <div class="order-1 lg:order-2 relative h-100 lg:h-125 w-full flex justify-center items-center rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
            <div class="relative w-full h-full rounded-2xl overflow-hidden">
                <img src="/images/internet/voip.jfif" alt="Connectivity and communication" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
            </div>
        </div>
    </div>
</section>

{{-- ======================== SPLIT SECTION 1 ======================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <img src="/images/internet/section.png" alt="Working seamlessly online" height="400" width="400" class="object-cover"/>
        </div>
        <div class="bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Keeping you online, <br class="hidden lg:block"/> without the hassle.</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Opting for our NBN services provides you with additional peace of mind and convenience compared to dealing with mainstream, large-scale internet connectivity. We understand the importance of supporting our communities and our commitment extends to providing tailored internet solutions that cater to the unique needs of the area.</p>
            <p class="text-slate-600 mb-6 leading-relaxed">With a focus on customer satisfaction, our local support team is readily available to assist you, offering a personalized touch to your internet experience.</p>
            <a href="#" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="m9 18 6-6-6-6"></path></svg>
                Is it connected, now what?
            </a>
        </div>
    </div>
</section>

{{-- ======================== SPLIT SECTION 2 ======================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Let us keep you <br class="hidden lg:block"/> connected.</h2>
            <div class="space-y-8">
                <div class="flex gap-4">
                    <div class="mt-1 shrink-0 w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-icon-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Personalised local support.</h3>
                        <p class="text-slate-600 leading-relaxed">Our commitment to providing exceptional NBN services is complemented by our dedicated local support team.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-1 shrink-0 w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-icon-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Tailored NBN services.</h3>
                        <p class="text-slate-600 leading-relaxed">Accessing cutting-edge technology to deliver fast and steady broadband connectivity, ensuring that you can stream, download, and engage in online activities without disruptions.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-1 shrink-0 w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-icon-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path><path d="m18 15-2-2"></path><path d="m15 18-2-2"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Community engagement.</h3>
                        <p class="text-slate-600 leading-relaxed">We ensure that our services contribute positively to the well-being and connectivity of the community we serve.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-1 lg:order-2 relative h-100 lg:h-125 w-full flex justify-center items-center rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
            <div class="relative w-full h-full rounded-2xl overflow-hidden">
                <img src="/images/internet/connected.png" alt="Connectivity and communication" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Hold Music & Messages on Hold | Bismillah Computer & Technology')
@section('description', 'Custom phone hold messages, welcome messages, auto attendant, IVR and professional on-hold music to transform every call.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-20 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
            Messages
            <span class="text-blue-600 block mt-2">On Hold</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-700 font-medium leading-relaxed mt-6 max-w-3xl">Make the most of every phone
            call by transforming waiting times into valuable customer interactions with custom, professionally produced
            hold messages.</p>
        <div class="mt-10 flex flex-wrap gap-4">
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
        </div>
    </div>
</section>

{{-- ==================== INTRO ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Message On Hold Solutions</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">We specialize in providing innovative technology
                solutions that enhance the way businesses communicate with their customers using the services of an
                industry-leading provider of custom phone hold messages. Since 1988, they have been delivering
                high-quality, engaging hold messages, and we've partnered with them to bring this service to your
                business.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Through this collaboration, we ensure your
                business can make the most of every phone call by transforming waiting times into valuable customer
                interactions. Whether you're a small business or a large corporation, we provide tailored hold messages
                that can inform, entertain, and even promote your products and services.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">By choosing us for your phone messaging needs,
                you're leveraging cutting-edge technology to enhance your customer experience. Our services help
                businesses boost customer satisfaction, increase brand awareness, and promote important information
                during phone interactions.</p>
            <p class="text-slate-600 leading-relaxed">Let us help you take your customer service to the next level with
                our customized hold message solutions that reflect your brand and engage your callers effectively.</p>
        </div>
    </div>
</section>

{{-- ==================== SERVICES ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">A Comprehensive Range of Services</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">This system offers a comprehensive range of services
            to enhance your business communication.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">After Hours Messaging</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Ensure your callers always receive a professional
                    experience, even outside of business hours.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Auto Attendant &amp; IVR</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Greet callers and route them to the right person or
                    department automatically and efficiently.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Welcome Messages</h3>
                <p class="text-slate-600 text-sm leading-relaxed">A professional welcome so callers always receive the
                    right first impression of your business.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">On Hold Messages</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Expertly crafted messages that keep callers informed and
                    engaged while they wait.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Script Writing</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Professional script writing to create tailored content
                    that reflects your brand and message.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">In-house Recording</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Professionally recorded voice talent to deliver your
                    messages with clarity and polish.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Royalty-free Music</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Engaging, legally compliant music so your messages sound
                    professional and stay compliant.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">VideoUpdate.Me</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Deliver dynamic, visual updates to your customers,
                    enhancing your overall communication strategy.</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== DEMO ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Demo On Hold Audio</h2>
            <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Check out some of the demo audio content
                available. Contact us if you would like a custom demo for your organization.</p>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Request a Custom Demo</a>
        </div>
    </div>
</section>

@endsection

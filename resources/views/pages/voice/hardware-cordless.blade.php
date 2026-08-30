@extends('layouts.app')

@section('title', 'Cordless Phone Solutions | Bismillah Computer & Technology')
@section('description', 'Analogue cordless, IP DECT, Uniden XDECT and EnGenius long-range cordless phone solutions for businesses of every size.')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Cordless
                <span class="text-blue-600 block mt-2">Phones</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Stay
                connected anywhere in the office, warehouse or home. Our range of cordless phone solutions gives staff the
                freedom to move while never missing an important call.</p>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <div class="w-full max-w-md lg:max-w-lg aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
        </svg>
    </div>
</section>

{{-- ==================== ANALOGUE CORDLESS ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">Analogue Cordless</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Analogue Extensions on your PABX system allows for
                analogue cordless phones and other analogue devices to be plugged in to your Phone system.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">Below you will find a range of Analogue cordless
                products that are available to be used with your PABX system.</p>
            <p class="text-slate-600 leading-relaxed">Please feel free to contact us if you require further info.</p>
        </div>
    </div>
</section>

{{-- ==================== IP DECT ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl text-left font-bold text-blue-900 mb-4">IP DECT</h2>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">DECT stands for <strong>Digital Enhanced Cordless
                    Telecommunications</strong>. It is a wireless standard that is very often used for landline phones.
                Wireless communication has been given a big boost thanks to the introduction of the wireless standard.</p>
            <p class="text-slate-700 font-medium leading-relaxed mb-4">Put simply:</p>
            <p class="text-slate-600 leading-relaxed mb-6 text-justify">DECT is to landline telephony what WiFi is to the
                Internet.</p>
            <p class="text-slate-600 leading-relaxed mb-4 text-justify">DECT Cordless Phones are used for Larger
                organisations who need to be able to have seamless cordless phone connections while travelling in large
                warehouse/office environments.</p>
            <p class="text-slate-600 leading-relaxed">Please check the page for your specific PABX system to view the range
                of DECT options available to you.</p>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md aspect-4/3 rounded-2xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center">
                <span class="text-blue-300 font-medium text-sm">Add image here</span>
            </div>
        </div>
    </div>
</section>

{{-- ==================== UNIDEN ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Uniden Cordless</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">If you are after a short range solution that just
            needs to cover the office or home, then the Uniden XDECT range of cordless phone products will be suitable for
            you, feel free to browse the selection below to see what options are available.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">XDECT 8355 + 3WPR</h3>
                <p class="text-slate-500 text-sm font-medium mb-4">XDECT® Digital Technology with Integrated Bluetooth®,
                    Power Failure Backup, USB Charging &amp; Waterproof Cordless Phone System</p>
                <p class="text-slate-600 text-sm leading-relaxed">Introducing the Most Advanced Home Smart Phone System in
                    the market. Sporting Bluetooth® connectivity with USB Charging Port. This new series from Uniden now
                    enables you to dial and receive mobile calls on the cordless handset for convenience and versatility as
                    well as charging your Mobile Phone simultaneously.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">XDECT 8305WP</h3>
                <p class="text-slate-500 text-sm font-medium mb-4">Waterproof Cordless Phone System</p>
                <p class="text-slate-600 text-sm leading-relaxed">Part of the XDECT range, providing dependable digital
                    cordless communication with practical, easy-to-use features ideal for the office or home.</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== ENGENIUS ==================== --}}
<section class="py-16 lg:py-24 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">EnGenius Cordless</h2>
        <p class="text-center text-slate-600 max-w-3xl mx-auto mb-6">EnGenius Durafon and the NEW FreeStyl1, the
            revolutionary cordless phone systems that are crystal clear over long distances and ideal where a number of
            handsets are required.</p>
        <p class="text-center text-slate-700 font-medium max-w-3xl mx-auto mb-12"><strong>Cordless communications for every
                business.</strong></p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">EnGenius Durafon</h3>
                <p class="text-slate-500 text-sm font-medium mb-4">Long range cordless for every business</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">EnGenius Durafon is the cordless communications tool
                    that goes the distance in any business. EnGenius Durafon uses two-way radio technology to cover the
                    extra distance needed for factories, farms, offices, warehouses, car dealerships, motels, resorts,
                    caravan parks, nurseries, hospitals homes and more.</p>
                <p class="text-slate-600 text-sm leading-relaxed">Durafon provides mobility, flexibility and freedom. Add
                    the many user-friendly convenience features and you have the ultimate in versatile, powerful cordless
                    phone systems ideal for businesses of every size.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <div class="aspect-4/3 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50/40 flex items-center justify-center mb-6">
                    <span class="text-blue-300 font-medium text-sm">Add image here</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">EnGenius FreeStyl1 (FS1)</h3>
                <p class="text-slate-500 text-sm font-medium mb-4">Designed to go the distance</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">EnGenius FreeStyl1 is the revolutionary cordless
                    phone system that's crystal clear over long distances and ideal where a number of handsets are
                    required.</p>
                <p class="text-slate-600 text-sm leading-relaxed">EnGenius Durafon uses two-way radio technology to cover
                    the extra distance needed for farms, factories, motels, resorts, caravan parks, nurseries, hospitals;
                    even homes and offices. The more open the space, the greater the distance covered. A range of over 5km
                    is not unusual for Durafon in rural areas.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Durafon Pro (SP9228)</h3>
                <p class="text-slate-600 text-sm leading-relaxed">The EnGenius Long Range Cordless Telephone provides
                    mobility and communication in demanding business environments. Durafon SP9228 Pro multi-base system,
                    with four lines per base unit, up to a maximum of 8 base units and 90 handsets.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">EnGenius Office Series (SN933)</h3>
                <p class="text-slate-600 text-sm leading-relaxed">A scalable 900 MHz Cordless Phone System with ultra-long
                    range — significantly greater range than DECT or Wi-Fi Phones. Range of up to 6km may be achieved by
                    utilizing an EnGenius AK external antenna.</p>
            </div>
            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Durafon (SN901 / SN902)</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Crystal clear over long distances. Dual base system with
                    handset speakerphone broadcast function, full duplex intercom and secure private conversation.</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative border-2 rounded-2xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100 text-center">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Give Your Team the Freedom to Move</h2>
            <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">Let us help you choose and set up the right
                cordless phone solution for your workplace.</p>
            <a href="{{ route('contact') }}" class="inline-flex px-6 py-2.5 bg-brand-blue text-white text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-brand-active">Contact Us</a>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Voice Systems | Bismillah Computer & Technology')
@section('description', 'Professional voice and phone system solutions for businesses. VoIP, cloud phone systems, and unified communications.')

@section('content')

{{-- ======================== HERO SECTION ======================== --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
        <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Telecom Systems to help <br/>
                <span class="text-blue-600 block mt-2">simplify your business</span>
            </h1>
            <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Connecting with our dedicated team of professionals to ensure your business communication runs smoothly.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                <a href="#partners" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    VODIA
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#capabilities" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    GRAND STREAM
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#security" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    AVAYA
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
                <a href="#networking" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                    IPECS
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
                </a>
            </div>
            <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
            <img src="/images/voice/hero.png" alt="BG Image" height="400" width="600" class="rounded-lg"/>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
        </svg>
    </div>
</section>

{{-- ======================== TESTIMONIALS ======================== --}}
<section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
    <div class="reveal reveal-fade-up">
        <h2 class="text-3xl font-bold text-center mb-12 text-slate-900">What people are talking about us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
            $testimonials = [
                ['name' => 'Sarah J., Marketing Director', 'text' => 'We have been extremely satisfied with the new telecom system. The seamless integration and crystal clear audio have drastically improved our remote meetings. Highly recommended for any growing team.'],
                ['name' => 'Michael T., Operations Manager', 'text' => 'Upgrading to this cloud-based system was the best decision for our business. Not only did we save on our monthly bill, but the customer support team has been phenomenal every step of the way.'],
                ['name' => 'Elena R., Small Business Owner', 'text' => 'The setup process was incredibly fast and hassle-free. The flexible features allow us to manage calls perfectly whether we are in the office or working on the go.'],
                ['name' => 'David L., IT Consultant', 'text' => 'Reliable, secure, and packed with advanced features. The administrative dashboard is intuitive, making it extremely easy to manage extensions and track call analytics.'],
            ];
            @endphp
            @foreach($testimonials as $testimonial)
            <div class="bg-dark-section text-gray-200 p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
                <span class="text-5xl text-blue-600 absolute top-6 left-6 font-serif">&ldquo;</span>
                <p class="mt-8 mb-6 text-sm leading-relaxed">{{ $testimonial['text'] }}</p>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ $testimonial['name'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== UPGRADE & FORM ======================== --}}
<section class="py-20 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        <div class="pt-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 leading-snug">Upgrade to the latest smart business phone system technology and save up to 40% on your current bill.</h2>
        </div>
        <div class="bg-white p-8 relative rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 transition-all">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">How Many Locations / Users?</label>
                    <select class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 text-slate-700 focus:ring-2 focus:ring-blue-500 outline-none">
                        <option>1-10 Users</option>
                        <option>11-50 Users</option>
                        <option>50+ Users</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">First Name</label>
                        <input type="text" class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="John"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name</label>
                        <input type="text" class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Doe"/>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                        <input type="email" class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="john@example.com"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone</label>
                        <input type="tel" class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="(555) 000-0000"/>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Company</label>
                    <input type="text" class="w-full border border-blue-100 rounded-md p-3 bg-gray-50 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Company Name"/>
                </div>
                <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-md transition-colors w-full md:w-auto">Submit</button>
            </form>
        </div>
    </div>
</section>

{{-- ======================== INFO SECTION ======================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="space-y-6 text-slate-600 leading-relaxed mt-4">
                <p><strong>Seamless communication is essential</strong> to modern operations. With a dedicated support system, you are ensuring a smooth flow of business internally and externally. We provide enterprise-grade quality voice networks tailored specifically to your company needs.</p>
                <p>Through advanced features like flexible call routing, dedicated virtual receptionists, and seamless team collaboration apps, we enable your workforce to stay connected. Boost productivity, reduce operating costs, and secure your business communications.</p>
                <p><strong>Built on a reliable foundation,</strong> our telecommunications solutions guarantee maximum uptime, crystal-clear voice clarity, and robust security protocols. Focus on your core business strategies while we manage the complex backend infrastructure. Experience true mobility, giving you and your team access from anywhere.</p>
            </div>
        </div>
        <div class="order-1 lg:order-2 relative h-112.5 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
            <img src="/images/voice/info.webp" alt="Customer Support Agent" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
    </div>
</section>

{{-- ======================== PRODUCTS / SERVICES GRID ======================== --}}
<section class="py-20 bg-slate-50">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold text-blue-900 mb-12">Phone Systems Support</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $voiceServices = [
                ['title' => 'Cloud Phone System Setup', 'img' => '/images/voice/cloud.webp', 'desc' => 'Experience seamless mobility and zero hardware maintenance with our secure cloud architecture.'],
                ['title' => 'On-Premise', 'img' => '/images/voice/premise.webp', 'desc' => 'Maintain full internal control with robust on-site communication hardware deployments.'],
                ['title' => 'VoIP', 'img' => '/images/voice/voip.webp', 'desc' => 'Cut costs without compromising quality using industry-leading Voice over IP protocols.'],
                ['title' => 'Data', 'img' => '/images/voice/data.webp', 'desc' => 'Ensure your voice and data packets travel securely and swiftly across optimized networks.'],
                ['title' => 'Security', 'img' => '/images/voice/security.webp', 'desc' => 'End-to-end encryption providing peace of mind for sensitive internal communications.'],
            ];
            @endphp
            @foreach($voiceServices as $service)
            <div class="bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 flex flex-col group transition-all duration-300 h-full">
                <div class="relative w-full overflow-hidden" style="height:192px">
                    <img src="{{ $service['img'] }}" alt="{{ $service['title'] }}" class="object-cover transition-transform duration-700 group-hover:scale-105" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-bold text-lg text-slate-900 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $service['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== DARK BANNER ======================== --}}
<section class="bg-dark-section py-16">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col md:flex-row items-center gap-12">
        <div>
            <h2 class="text-2xl md:text-3xl font-semibold text-white leading-relaxed">As well as taking incoming calls on fixed line phones, IP terminals provide optimum sound.</h2>
        </div>
        <div class="relative w-48 h-48 md:w-64 md:h-64 rounded-2xl overflow-hidden border-2 border-blue-100">
            <img src="/images/voice/dark.jpg" alt="Optimum Sound" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
    </div>
</section>

{{-- ======================== FEATURES ACCORDION & IMAGE ======================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="reveal reveal-fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-start relative">
        <div class="relative h-150 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100">
            <img src="/images/voice/feature.jpg" alt="Team Collaboration" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
        <div class="space-y-6">
            @php
            $voiceFeatures = [
                ['title' => 'Cost-Effective Solutions', 'desc' => 'Significantly lower your monthly communication bills while enjoying premium enterprise features.'],
                ['title' => 'Future Proof Phone System', 'desc' => 'Our scalable infrastructure grows with your business, ensuring you never outgrow your communications platform.'],
                ['title' => 'Customer-Centric Hosted Solutions', 'desc' => 'Tailored directly to improve customer experience with features like auto-attendant and seamless routing.'],
                ['title' => 'Cost-Effective Hardware Solutions', 'desc' => 'Access top-tier physical desk phones and conference terminals at competitive, affordable rates.'],
            ];
            @endphp
            @foreach($voiceFeatures as $i => $feature)
            <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl relative p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all" style="transition-delay:{{ $i * 80 }}ms">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; {{ $feature['title'] }}</h3>
                <p class="text-slate-600 text-sm mb-4">{{ $feature['desc'] }}</p>
                <a href="#" class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== WHY CHOOSE US ======================== --}}
<section class="py-16 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Provide the Best Communications For your Business.<br/>Choose the Best Provider.</h2>
            <ul class="space-y-6">
                <li class="flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0 mt-1">
                        <span class="text-blue-600 font-bold">&#10003;</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">State-of-the-art technology</h4>
                        <p class="text-sm text-slate-600 mt-1">Leveraging the latest advancements to keep you ahead of the curve.</p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0 mt-1">
                        <span class="text-blue-600 font-bold">&#10003;</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Dedicated customer support</h4>
                        <p class="text-sm text-slate-600 mt-1">Our support team is available 24/7 to resolve any issues immediately.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="relative h-75 rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 order-1 lg:order-2">
            <img src="/images/voice/choose.webp" alt="Modern Office Room" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
    </div>
</section>

{{-- ======================== HARDWARE CTA ======================== --}}
<section class="bg-dark-section py-16 text-white">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
        <div class="relative h-64 md:h-80 w-full">
            <img src="/images/voice/telephone.png" alt="VoIP Desk Phone" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
        <div class="space-y-6">
            <h2 class="text-3xl font-bold">Boost Productivity with Affordable Phone Systems</h2>
            <p class="text-gray-300">Transform the way your office communicates. High-definition audio and programmable interfaces ensure you never miss a beat.</p>
            <h3 class="text-xl font-semibold">Discover Phone System</h3>
            <p class="text-sm text-gray-400">Find the perfect hardware to match your cloud infrastructure.</p>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition-colors mt-4">Read More</button>
        </div>
    </div>
</section>

{{-- ======================== BENEFITS GRID ======================== --}}
<section class="py-20 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-16">Increase Time To Money and Boost Productivity with Phone Systems.</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-12">
            @php
            $voiceBenefits = [
                ['title' => 'Unified Communications', 'desc' => 'Integrate voice, video, and messaging.'],
                ['title' => 'Reliable Hosting', 'desc' => 'Guaranteed 99.99% uptime SLA.'],
                ['title' => 'Budget Planning', 'desc' => 'Predictable flat-rate monthly billing.'],
                ['title' => 'High Definition', 'desc' => 'Crystal clear wideband audio.'],
                ['title' => 'Seamless Routing', 'desc' => 'Advanced logic for inbound calls.'],
                ['title' => 'Better Tracking', 'desc' => 'Comprehensive call analytics & logging.'],
            ];
            @endphp
            @foreach($voiceBenefits as $i => $benefit)
            <div class="reveal reveal-fade-up flex flex-col items-center text-center space-y-4" style="transition-delay:{{ $i * 80 }}ms">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl font-bold">&#10003;</div>
                <h3 class="font-bold text-slate-900">{{ $benefit['title'] }}</h3>
                <p class="text-sm text-slate-600">{{ $benefit['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== PARTNERSHIP ======================== --}}
<section class="py-16 bg-slate-50 border-t border-blue-100">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1 bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Partnership With Us</h2>
                <p class="text-slate-600">We understand that every business is unique and has different communication needs. Let us tailor a solution that perfectly aligns with your operational goals.</p>
            </div>
        </div>
        <div class="order-1 lg:order-2 relative h-64 w-full rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 transition-all">
            <img src="/images/voice/partnership.jpg" alt="Partnership Meeting" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"/>
        </div>
    </div>
</section>

{{-- ======================== FAQS ======================== --}}
<section class="py-20 bg-white">
    <div class="reveal reveal-fade-up max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">FAQs</h2>
        <div class="space-y-4 mx-auto">
            @php
            $faqs = [
                ['question' => 'What is a VoIP phone system?', 'answer' => 'VoIP (Voice over Internet Protocol) is a technology that allows you to make voice calls using a broadband internet connection instead of a traditional analog phone line. It converts your voice into digital signals that travel over the internet, offering greater flexibility, lower costs, and advanced features compared to conventional phone systems.'],
                ['question' => 'How much does a phone system cost?', 'answer' => 'Pricing depends on the number of users, features required, and whether you choose a cloud-hosted or on-premise solution. Cloud systems typically start from a low monthly per-user fee with no upfront hardware costs, while on-premise systems involve an initial investment but may be more cost-effective long-term for larger teams. Contact us for a tailored quote.'],
                ['question' => 'Can I keep my current phone numbers?', 'answer' => 'Yes. We handle full number porting from your existing provider so there is zero disruption to your business. The porting process is managed end-to-end by our team, and your numbers will seamlessly transfer to the new system with no downtime.'],
                ['question' => 'Is it hard to set up a phone system?', 'answer' => 'Not at all. Our team manages the entire setup process from start to finish. For cloud-based systems, we configure everything remotely so your team can be up and running within hours. For on-premise installations, we handle all hardware deployment, cabling, and configuration with minimal disruption to your operations.'],
                ['question' => 'What features come with the phone system?', 'answer' => 'Our phone systems include call routing, auto-attendant, voicemail-to-email, call recording, call analytics, conference bridging, mobile app integration, and more. Advanced features like CRM integration, AI call transcription, and real-time dashboards are also available depending on the plan you choose.'],
            ];
            @endphp
            @foreach($faqs as $faq)
            <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                    <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <div class="px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

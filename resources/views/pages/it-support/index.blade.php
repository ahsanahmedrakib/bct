@extends('layouts.app')

@section('content')
@php
  $partners = [
    ['name' => 'MikroTik', 'logo' => '/images/home/how-we-do/mikrotik.png'],
    ['name' => 'N-Able', 'logo' => '/images/home/how-we-do/nable.png'],
    ['name' => 'Grandstream', 'logo' => '/images/home/how-we-do/grandstream.png'],
    ['name' => 'WordPress', 'logo' => '/images/home/how-we-do/wordpress.png'],
    ['name' => 'Microsoft 365', 'logo' => '/images/home/how-we-do/microsoft365.png'],
    ['name' => 'Ingram', 'logo' => '/images/home/how-we-do/ingram.png'],
    ['name' => 'Cellfi', 'logo' => '/images/home/how-we-do/cellfi.png'],
    ['name' => 'Ipecs', 'logo' => '/images/home/how-we-do/ipecs.png'],
    ['name' => 'HPE', 'logo' => '/images/home/how-we-do/hpe.png'],
    ['name' => 'Avaya', 'logo' => '/images/home/how-we-do/avaya.png'],
    ['name' => 'Cove', 'logo' => '/images/home/how-we-do/cove.png'],
    ['name' => 'Veeam', 'logo' => '/images/home/how-we-do/veeam.png'],
    ['name' => 'Datto', 'logo' => '/images/home/how-we-do/datto.png'],
    ['name' => 'Recaptcha', 'logo' => '/images/home/how-we-do/recaptcha.png'],
    ['name' => 'Woo', 'logo' => '/images/home/how-we-do/woo.png'],
  ];

  $capabilitiesList = [
    ['icon' => 'headphones', 'label' => '24/7 IT Support'],
    ['icon' => 'briefcase', 'label' => 'Strategic Planning'],
    ['icon' => 'cloud', 'label' => 'Cloud Integrations'],
  ];

  $capabilityCards = [
    [
      'title' => 'Hardware Experience',
      'icon' => 'hard-drive',
      'text' => 'Proactive monitoring and rapid response times for all your daily IT concerns.',
      'services' => ['Servers/desktops/laptops', 'Modems/routers/access points', 'Printers and scanners', 'Phone systems and handsets', 'Replacement parts', 'Site deployment/migration'],
      'route' => 'it-support.servers-networking',
    ],
    [
      'title' => 'Network Experience',
      'icon' => 'wifi',
      'text' => 'Enterprise-grade protection against malware, phishing, and external threats.',
      'services' => ['Wireless troubleshooting', 'Network segregation', 'Hotel/Motel infrastructure', 'VLAN tagging', 'Firewall/security setup', 'Routing/switching'],
      'route' => 'it-support.servers-networking',
    ],
    [
      'title' => 'Infrastructure Experience',
      'icon' => 'monitor-cloud',
      'text' => 'Seamless migrations to scalable cloud infrastructure for modern teams.',
      'services' => ['File sharing and security', 'Domain controllers and AD', 'Windows operating systems', 'Virtual machines', 'Microsoft Office applications'],
      'route' => 'it-support.managed-it',
    ],
  ];

  $cyberSecurityFeatures = [
    ['icon' => 'lock', 'label' => 'ESSENTIAL 8 SECURITY'],
    ['icon' => 'cloud', 'label' => 'CLOUD RISK ASSESSMENT'],
    ['icon' => 'bug', 'label' => 'VULNERABILITY ASSESSMENT'],
    ['icon' => 'shield', 'label' => 'WEB APPLICATION FIREWALL'],
    ['icon' => 'graduation-cap', 'label' => 'SECURITY AWARENESS TRAINING'],
    ['icon' => 'eye', 'label' => 'DARK WEB MONITORING'],
    ['icon' => 'alert-triangle', 'label' => 'INCIDENT RESPONSE'],
    ['icon' => 'target', 'label' => 'PENETRATION TESTING'],
  ];

  $networkingFeatures = [
    ['icon' => 'briefcase', 'label' => 'PROJECT SUPPORT'],
    ['icon' => 'monitor', 'label' => 'DEVICE SUPPORT'],
    ['icon' => 'cpu', 'label' => 'SERVER SUPPORT'],
    ['icon' => 'hard-drive', 'label' => 'DESKTOP SUPPORT'],
    ['icon' => 'activity', 'label' => '24/4 MONITORING & SUPPORT'],
  ];

  $managedITFeatures = [
    ['icon' => 'headphones', 'label' => 'IT SUPPORT'],
    ['icon' => 'wifi', 'label' => 'NETWORK SERVICES'],
    ['icon' => 'package', 'label' => 'IT PROCUREMENT'],
    ['icon' => 'link', 'label' => 'IT CONNECTIVITY'],
    ['icon' => 'message-square', 'label' => 'IT COMMUNICATION'],
    ['icon' => 'users', 'label' => 'IT OUTSOURCING'],
  ];

  $deviceRepairFeatures = [
    ['icon' => 'smartphone', 'label' => 'MOBILE PHONE'],
    ['icon' => 'laptop', 'label' => "LAPTOP'S"],
    ['icon' => 'monitor', 'label' => "DESKTOP'S"],
    ['icon' => 'smartphone', 'label' => 'TABLETS'],
    ['icon' => 'server', 'label' => "SERVER'S"],
  ];
@endphp

{{-- ================= HERO SECTION ================= --}}
<section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
        IT Support Services <br>
        <span class="text-blue-600 block mt-2"> for Professionals</span>
      </h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We provide enterprise-grade IT support and secure digital workspaces for small to medium businesses. Focus on your growth while we handle the technology.</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
        <a href="#partners" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          Our Partners
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
        <a href="#capabilities" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          Our Capabilities
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
        <a href="#security" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          Cyber Security
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
        <a href="#networking" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          Servers &amp; Networking
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
        <a href="#it" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          IT Services
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
        <a href="#repair" class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg text-white text-sm font-semibold rounded-xl shadow-md transition-all">
          Device Repair
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-sky-300 group-hover:translate-x-1 transition-transform"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
      </div>

      <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
        <p class="text-sky-700 font-semibold text-sm">Need help?</p>
        <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-white border border-sky-700 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy-active hover:text-white transition-colors">
          Contact Us
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="IT Support Hero" loading="lazy" class="rounded-lg" src="/images/it-support/hero.png" />
    </div>
  </div>

  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

{{-- ================= PARTNERS SECTION ================= --}}
<section class="bg-slate-50 py-12 relative z-10" id="partners">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-blue-600 font-bold tracking-wide uppercase text-sm mb-8 text-center lg:text-left">Our Partners</p>
    <div class="swiper partners-swiper" data-swiper>
      <div class="swiper-wrapper">
        @foreach($partners as $partner)
          <div class="swiper-slide flex items-center justify-center">
            <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" class="object-contain h-20 w-auto" />
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- ================= CORE FEATURES LOOP ================= --}}
<div class="bg-slate-50 py-24 space-y-32">

  {{-- 1. Our Capabilities --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="capabilities">
    <div class="reveal reveal-fade-up">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div class="order-2 lg:order-1 h-full">
          <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Our Capabilities</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Total Solutions IT provides proactive IT support and strategic guidance. From server installations to daily troubleshooting, our expert team is ready to enhance your technological efficiency.</p>
            <ul class="space-y-3">
              <li class="flex items-center text-blue-700 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 text-blue-500"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                24/7 IT Support
              </li>
              <li class="flex items-center text-blue-700 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 text-blue-500"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>
                Strategic Planning
              </li>
              <li class="flex items-center text-blue-700 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-3 text-blue-500"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
                Cloud Integrations
              </li>
            </ul>
          </div>
        </div>
        <div class="relative h-75 w-full order-1 lg:order-2">
          <img src="/images/it-support/capablities.jpg" alt="Capabilities" class="object-cover rounded-2xl shadow-xl" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
        </div>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        @foreach($capabilityCards as $i => $card)
          <div class="reveal reveal-fade-up" style="transition-delay:{{ $i * 80 }}ms">
            <div class="flex flex-col h-full bg-white p-8 rounded-2xl shadow-sm border-2 border-blue-100 hover:border-blue-400 hover:shadow-lg hover:-translate-y-1 transition-all relative">
              <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
              @if($card['icon'] === 'hard-drive')
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-blue-600 mb-4"><line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line></svg>
              @elseif($card['icon'] === 'wifi')
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-blue-600 mb-4"><path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path></svg>
              @elseif($card['icon'] === 'monitor-cloud')
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-blue-600 mb-4"><rect x="2" y="3" width="20" height="14" rx="2"></rect><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
              @endif
              <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $card['title'] }}</h3>
              <p class="text-slate-600 mb-4 text-sm">{{ $card['text'] }}</p>
              <div class="my-1">
                @foreach($card['services'] as $service)
                  <span class="block w-fit px-3 py-1 bg-blue-100 text-blue-800 text-xs rounded-full mr-2 mb-2">{{ $service }}</span>
                @endforeach
              </div>
              <a href="{{ route($card['route']) }}" class="mt-auto text-blue-600 font-medium flex items-center text-sm hover:text-blue-800">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-1"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- 2. Cyber Security --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="security">
    <div class="reveal reveal-fade-up">
      <div class="grid lg:grid-cols-2 gap-6 items-center mb-12">
        <div class="relative h-75 w-full flex justify-center">
          <div class="relative w-full max-w-md h-full">
            <img src="/images/it-support/laptop.png" alt="Cyber Security" height="300" width="300" />
          </div>
        </div>
        <div class="h-full">
          <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Cyber Security.</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Protect your business assets with our multi-layered security solutions. We identify vulnerabilities before they are exploited and ensure your data remains completely secure and compliant.</p>
            <a href="{{ route('it-support.cyber-security') }}" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        @foreach($cyberSecurityFeatures as $i => $feature)
          <div class="reveal reveal-fade-up" style="transition-delay:{{ $i * 80 }}ms">
            <div class="flex flex-col items-center justify-center p-6 bg-white rounded-2xl shadow-sm border-2 border-blue-100 hover:border-blue-400 hover:bg-blue-50 hover:shadow-md hover:-translate-y-1 w-36 md:w-44 transition-all">
              <div class="bg-blue-100 p-3 rounded-full text-blue-600 mb-3">
                @if($feature['icon'] === 'lock')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                @elseif($feature['icon'] === 'cloud')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
                @elseif($feature['icon'] === 'bug')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="m8 2 1.88 1.88"></path><path d="M14.12 3.88 16 2"></path><path d="M9 7.13v-1a3.003 3.003 0 1 1 6 0v1"></path><path d="M12 20c-3.3 0-6-2.7-6-6v-3a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v3c0 3.3-2.7 6-6 6"></path><path d="M12 20v-9"></path><path d="M6.53 9C4.6 8.8 3 7.1 3 5"></path><path d="M6 13H2"></path><path d="M3 21c0-2.1 1.7-3.9 3.8-4"></path><path d="M20.97 5c0 2.1-1.6 3.8-3.5 4"></path><path d="M22 13h-4"></path><path d="M17.2 17c2.1.1 3.8 1.9 3.8 4"></path></svg>
                @elseif($feature['icon'] === 'shield')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                @elseif($feature['icon'] === 'graduation-cap')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                @elseif($feature['icon'] === 'eye')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                @elseif($feature['icon'] === 'alert-triangle')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                @elseif($feature['icon'] === 'target')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                @endif
              </div>
              <span class="text-xs font-semibold text-center text-slate-700">{{ $feature['label'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- 3. Servers + Networking --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="networking">
    <div class="reveal reveal-fade-up">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
        <div class="order-2 lg:order-1 h-full">
          <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Servers + Networking</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Robust infrastructure is the backbone of your operations. We design, implement, and maintain high-speed networks and reliable server environments tailored to your workload.</p>
            <a href="{{ route('it-support.servers-networking') }}" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
              View Infrastructure Solutions
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
        <div class="relative h-75 w-full order-1 lg:order-2">
          <img src="/images/it-support/networking.jpg" alt="Servers" class="object-cover rounded-2xl shadow-xl" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        @foreach($networkingFeatures as $i => $feature)
          <div class="reveal reveal-fade-up" style="transition-delay:{{ $i * 80 }}ms">
            <div class="flex flex-col items-center justify-center p-6 bg-white rounded-2xl shadow-sm border-2 border-blue-100 hover:border-blue-400 hover:bg-blue-50 hover:shadow-md hover:-translate-y-1 w-36 md:w-44 transition-all">
              <div class="bg-blue-100 p-3 rounded-full text-blue-600 mb-3">
                @if($feature['icon'] === 'briefcase')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>
                @elseif($feature['icon'] === 'monitor')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                @elseif($feature['icon'] === 'cpu')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><path d="M15 2v2"></path><path d="M15 20v2"></path><path d="M2 15h2"></path><path d="M2 9h2"></path><path d="M20 15h2"></path><path d="M20 9h2"></path><path d="M9 2v2"></path><path d="M9 20v2"></path></svg>
                @elseif($feature['icon'] === 'hard-drive')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line></svg>
                @elseif($feature['icon'] === 'activity')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
                @endif
              </div>
              <span class="text-xs font-semibold text-center text-slate-700">{{ $feature['label'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- 4. Managed IT Services --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="it">
    <div class="reveal reveal-fade-up">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
        <div class="relative h-75 w-full">
          <img src="/images/it-support/it.jpg" alt="Managed Services" class="object-cover rounded-2xl shadow-xl" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
        </div>
        <div class="h-full">
          <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Managed IT Services</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Outsource your IT management to us. We offer predictable monthly costs for comprehensive support, ensuring your systems are always up to date, secure, and performing optimally.</p>
            <a href="{{ route('it-support.managed-it') }}" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
              Explore Managed IT
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        @foreach($managedITFeatures as $i => $feature)
          <div class="reveal reveal-fade-up" style="transition-delay:{{ $i * 80 }}ms">
            <div class="flex flex-col items-center justify-center p-6 bg-white rounded-2xl shadow-sm border-2 border-blue-100 hover:border-blue-400 hover:bg-blue-50 hover:shadow-md hover:-translate-y-1 w-36 md:w-44 transition-all">
              <div class="bg-blue-100 p-3 rounded-full text-blue-600 mb-3">
                @if($feature['icon'] === 'headphones')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
                @elseif($feature['icon'] === 'wifi')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path></svg>
                @elseif($feature['icon'] === 'package')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="m7.5 4.27 9 5.15"></path><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path><path d="m3.3 7 8.7 5 8.7-5"></path><path d="M12 22V12"></path></svg>
                @elseif($feature['icon'] === 'link')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                @elseif($feature['icon'] === 'message-square')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                @elseif($feature['icon'] === 'users')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                @endif
              </div>
              <span class="text-xs font-semibold text-center text-slate-700">{{ $feature['label'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- 5. Device Repair --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20" id="repair">
    <div class="reveal reveal-fade-up">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
        <div class="order-2 lg:order-1 h-full">
          <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
            <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-6 mt-2">Device Repair</h2>
            <p class="text-slate-600 mb-6 leading-relaxed">Hardware failures can bring work to a halt. Our skilled technicians provide rapid diagnostic and repair services for laptops, desktops, and peripherals to minimize your downtime.</p>
            <a href="{{ route('it-support.device-repair') }}" class="text-blue-600 font-medium flex items-center hover:text-blue-800">
              Book a Repair
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
        <div class="relative h-75 w-full order-1 lg:order-2">
          <img src="/images/it-support/repair.jpg" alt="Device Repair" class="object-cover rounded-2xl shadow-xl" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        @foreach($deviceRepairFeatures as $i => $feature)
          <div class="reveal reveal-fade-up" style="transition-delay:{{ $i * 80 }}ms">
            <div class="flex flex-col items-center justify-center p-6 bg-white rounded-2xl shadow-sm border-2 border-blue-100 hover:border-blue-400 hover:bg-blue-50 hover:shadow-md hover:-translate-y-1 w-36 md:w-44 transition-all">
              <div class="bg-blue-100 p-3 rounded-full text-blue-600 mb-3">
                @if($feature['icon'] === 'smartphone')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect x="5" y="2" width="14" height="20" rx="7"></rect><line x1="12" x2="12.01" y1="18" y2="18"></line></svg>
                @elseif($feature['icon'] === 'laptop')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg>
                @elseif($feature['icon'] === 'monitor')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                @elseif($feature['icon'] === 'server')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line></svg>
                @endif
              </div>
              <span class="text-xs font-semibold text-center text-slate-700">{{ $feature['label'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

</div>
@endsection

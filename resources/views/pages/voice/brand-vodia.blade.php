@extends('layouts.page')

@section('title', 'Vodia PBX Platform | Bismillah Computer & Technology')

@section('content')

<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Brand Partner</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Vodia PBX Platform</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">A powerful and flexible PBX platform supporting multi-tenant deployments, advanced call routing, and seamless integration with modern communication tools.</p>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Vodia PBX Platform" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/voice/brands.png"/>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Vodia PBX Features</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Discover the power of Vodia's software-based PBX platform for modern businesses and service providers.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-Tenant Support</h3>
        <p class="text-slate-600 leading-relaxed">Host multiple organisations on a single PBX instance with complete tenant isolation. Perfect for MSPs and service providers.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-5.1-5.1m0 0L11.42 4.97m-5.1 5.1H21M3 3h18v18H3V3z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">REST API Integration</h3>
        <p class="text-slate-600 leading-relaxed">Comprehensive REST API enables integration with business applications, CRM systems, and custom workflows.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Web-Based Management</h3>
        <p class="text-slate-600 leading-relaxed">Intuitive web interface for system administration. Manage users, trunks, and features from any browser.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25h13.5m-13.5 0l3-3m-3 3l3 3m4.5 4.5h13.5m-13.5 0l3-3m-3 3l3 3M3 3h18v18H3V3z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Advanced Call Routing</h3>
        <p class="text-slate-600 leading-relaxed">Flexible call routing with time-of-day rules, skills-based distribution, and failover options for optimal call handling.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Software-Based</h3>
        <p class="text-slate-600 leading-relaxed">Runs on standard Linux servers — no proprietary hardware required. Easy to deploy, update, and scale.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Cloud Ready</h3>
        <p class="text-slate-600 leading-relaxed">Deploy on-premise or in the cloud. Supports Docker containers and virtualisation for flexible deployment options.</p>
      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal reveal-fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Vodia for Service Providers</h2>
        <p class="text-slate-600 leading-relaxed mb-8">Vodia's multi-tenant architecture makes it the ideal platform for managed service providers, hosted PBX operators, and telecommunications companies looking to offer cloud-based phone services.</p>
        <ul class="space-y-4">
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">White-Label Ready</h4>
              <p class="text-slate-600">Brand the platform as your own with custom themes and domains.</p>
            </div>
          </li>
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">Pay-Per-Seat Licensing</h4>
              <p class="text-slate-600">Flexible licensing model that scales with your customer base.</p>
            </div>
          </li>
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">Tenant Self-Service</h4>
              <p class="text-slate-600">Each tenant gets their own admin portal for self-management.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="reveal reveal-fade-up flex justify-center">
        <img alt="Vodia Multi-Tenant PBX" loading="lazy" class="rounded-2xl shadow-lg w-full max-w-lg" src="/images/voice/brands.png"/>
      </div>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
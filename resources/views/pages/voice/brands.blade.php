@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Voice Brands</h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">We partner with leading voice technology brands to deliver reliable, feature-rich communication solutions for your business.</p>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="Voice Brands" loading="lazy" class="rounded-lg" src="/images/voice/brands.png"/>
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
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Partner Brands</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Trusted voice technology solutions from industry-leading manufacturers.</p>
    </div>
    <div class="grid md:grid-cols-2 gap-8">

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-brand-blue/10 rounded-xl flex items-center justify-center mr-4">
            <span class="text-xl font-bold text-brand-blue">V</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Vodia</h3>
            <p class="text-sm text-slate-500">PBX Platform</p>
          </div>
        </div>
        <p class="text-slate-600 leading-relaxed mb-6">Vodia provides a powerful and flexible PBX platform that supports multi-tenant deployments, advanced call routing, and seamless integration with modern communication tools.</p>
        <ul class="space-y-2 text-sm text-slate-600">
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Multi-tenant support
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            REST API integration
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Web-based management
          </li>
        </ul>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-brand-blue/10 rounded-xl flex items-center justify-center mr-4">
            <span class="text-xl font-bold text-brand-blue">G</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Grandstream</h3>
            <p class="text-sm text-slate-500">IP Phones & PBX</p>
          </div>
        </div>
        <p class="text-slate-600 leading-relaxed mb-6">Grandstream offers a complete range of IP phones, PBX systems, and networking equipment with exceptional quality and value for businesses of all sizes.</p>
        <ul class="space-y-2 text-sm text-slate-600">
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Full product range
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Cost-effective solutions
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            UCM series PBX
          </li>
        </ul>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-brand-blue/10 rounded-xl flex items-center justify-center mr-4">
            <span class="text-xl font-bold text-brand-blue">A</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Avaya</h3>
            <p class="text-sm text-slate-500">Enterprise Communications</p>
          </div>
        </div>
        <p class="text-slate-600 leading-relaxed mb-6">Avaya delivers enterprise-grade unified communications and contact center solutions trusted by organizations worldwide for mission-critical communications.</p>
        <ul class="space-y-2 text-sm text-slate-600">
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Cloud & on-premise
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Contact center solutions
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            IP Office platform
          </li>
        </ul>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-brand-blue/10 rounded-xl flex items-center justify-center mr-4">
            <span class="text-xl font-bold text-brand-blue">LG</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">LG iPECS</h3>
            <p class="text-sm text-slate-500">Business Phone Systems</p>
          </div>
        </div>
        <p class="text-slate-600 leading-relaxed mb-6">LG iPECS provides reliable and innovative business phone systems with advanced features, excellent voice quality, and seamless integration capabilities.</p>
        <ul class="space-y-2 text-sm text-slate-600">
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Scalable architecture
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            Advanced mobility features
          </li>
          <li class="flex items-center">
            <svg class="w-4 h-4 text-brand-green mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            High reliability
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

@include('components.cta')
@endsection

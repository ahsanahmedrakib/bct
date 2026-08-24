@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Phone Systems</h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Scalable IP phone systems designed to meet the communication needs of businesses from small startups to large enterprises.</p>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="Phone Systems" loading="lazy" class="rounded-lg" src="/images/voice/phone-systems.png"/>
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
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Solutions for Every Business</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Choose the right phone system for your business size and requirements.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-green/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Small Business</h3>
        <p class="text-slate-600 mb-6 leading-relaxed">Simple, affordable phone systems for businesses with 1-20 users. Easy setup and management.</p>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-green mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Up to 20 extensions
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-green mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Auto attendant
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-green mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Voicemail to email
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-green mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Mobile app integration
          </li>
        </ul>
        <a href="{{ route('contact') }}" class="block w-full text-center bg-brand-green text-white font-semibold py-3 rounded-xl hover:bg-brand-green/90 transition-colors">
          Get Started
        </a>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-lg border-2 border-brand-blue relative hover:shadow-xl transition-shadow" style="animation-delay: 0.1s">
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-blue text-white text-sm font-bold px-4 py-1 rounded-full">Popular</div>
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Medium Business</h3>
        <p class="text-slate-600 mb-6 leading-relaxed">Feature-rich phone systems for growing businesses with 20-100 users and multiple locations.</p>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Up to 100 extensions
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Call queues & routing
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            CRM integration
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Call recording
          </li>
        </ul>
        <a href="{{ route('contact') }}" class="block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-hover transition-colors">
          Get Started
        </a>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3H21m-3.75 3H21" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Enterprise</h3>
        <p class="text-slate-600 mb-6 leading-relaxed">Enterprise-grade unified communications for large organizations with 100+ users.</p>
        <ul class="space-y-3 mb-8">
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Unlimited extensions
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Multi-site support
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Advanced analytics
          </li>
          <li class="flex items-center text-slate-600">
            <svg class="w-5 h-5 text-brand-blue mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            Dedicated support
          </li>
        </ul>
        <a href="{{ route('contact') }}" class="block w-full text-center bg-brand-blue text-white font-semibold py-3 rounded-xl hover:bg-brand-hover transition-colors">
          Get Started
        </a>
      </div>

    </div>
  </div>
</section>

@include('components.cta')
@endsection

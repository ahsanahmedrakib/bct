@extends('layouts.page')

@section('title', 'Small Business Phone Systems | Bismillah Computer & Technology')

@section('content')

<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Phone Systems</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Small Business Phone Systems</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Simple, affordable, and powerful phone systems designed for businesses with 1-20 users. Get up and running in minutes, not days.</p>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Small Business Phone Systems" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/voice/hero.png"/>
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
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Everything Your Small Business Needs</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Professional communication without the complexity. Our small business phone systems include all the features you need to look big and stay connected.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Auto Attendant</h3>
        <p class="text-slate-600 leading-relaxed">Create a professional first impression with custom greetings and menu options that route callers to the right department automatically.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Voicemail to Email</h3>
        <p class="text-slate-600 leading-relaxed">Receive voicemails as audio attachments directly in your email inbox. Never miss an important message, even when you're away from your desk.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Mobile App Integration</h3>
        <p class="text-slate-600 leading-relaxed">Make and receive business calls from your mobile phone using your business number. Stay connected wherever you go.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Call Analytics</h3>
        <p class="text-slate-600 leading-relaxed">Track call volumes, wait times, and response rates with simple dashboards. Understand your communication patterns and improve customer service.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Scalable Setup</h3>
        <p class="text-slate-600 leading-relaxed">Start with as few as 2 extensions and add more as your team grows. No costly hardware upgrades required.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Affordable Pricing</h3>
        <p class="text-slate-600 leading-relaxed">Enterprise-grade features at small business prices. Predictable monthly costs with no hidden fees or long-term contracts.</p>
      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal reveal-fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Why Small Businesses Choose Us</h2>
        <p class="text-slate-600 leading-relaxed mb-8">We understand that small businesses need reliable communication solutions that don't break the bank. Our phone systems are designed to give you a professional edge from day one.</p>
        <ul class="space-y-4">
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">Quick Setup</h4>
              <p class="text-slate-600">Get your phone system running in under 24 hours with our guided setup process.</p>
            </div>
          </li>
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">No IT Staff Required</h4>
              <p class="text-slate-600">Cloud-managed system means no expensive on-site equipment to maintain.</p>
            </div>
          </li>
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">Work From Anywhere</h4>
              <p class="text-slate-600">Desktop and mobile apps keep your team connected whether they're in the office or on the road.</p>
            </div>
          </li>
          <li class="flex items-start">
            <svg class="w-6 h-6 text-brand-green mt-0.5 mr-3 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
            <div>
              <h4 class="font-semibold text-slate-900">Local Support</h4>
              <p class="text-slate-600">Based in Bangladesh with dedicated local support whenever you need it.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="reveal reveal-fade-up flex justify-center">
        <img alt="Small Business Phone System Setup" loading="lazy" class="rounded-2xl shadow-lg w-full max-w-lg" src="/images/voice/phone-systems.png"/>
      </div>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Perfect For</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Ideal for a wide range of small businesses looking to professionalise their communications.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
          </svg>
        </div>
        <h3 class="font-bold text-slate-900 mb-2">Professional Services</h3>
        <p class="text-sm text-slate-600">Law firms, accountants, consultants</p>
      </div>
      <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
          </svg>
        </div>
        <h3 class="font-bold text-slate-900 mb-2">Retail & eCommerce</h3>
        <p class="text-sm text-slate-600">Shops, e-commerce, customer service</p>
      </div>
      <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-5.1-5.1m0 0L11.42 4.97m-5.1 5.1H21M3 3h18v18H3V3z" />
          </svg>
        </div>
        <h3 class="font-bold text-slate-900 mb-2">Home Services</h3>
        <p class="text-sm text-slate-600">Plumbers, electricians, HVAC</p>
      </div>
      <div class="reveal reveal-fade-up bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.3s">
        <div class="w-12 h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
          </svg>
        </div>
        <h3 class="font-bold text-slate-900 mb-2">Healthcare</h3>
        <p class="text-sm text-slate-600">Clinics, dental, veterinary</p>
      </div>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
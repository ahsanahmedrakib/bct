@extends('layouts.app')

@section('title', 'Zero Trust Framework | Bismillah Computer & Technology')

@section('content')

<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cyber Security</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Zero Trust Framework</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">By employing solutions rooted in a Zero Trust Framework, we consistently adopt a "never trust, always verify" stance towards security.</p>
      <div class="flex flex-wrap gap-4 pt-2">
        <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
          Contact Us
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Zero Trust Framework" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/it-support/cyber-security/zero-trust-framework/zero-trust.png"/>
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
    <div class="reveal reveal-fade-up max-w-4xl mx-auto text-center mb-16">
      <p class="text-lg text-slate-700 leading-relaxed">Rather than presuming the safety of everything within a corporate firewall, the Zero Trust model operates on the assumption of breaches, verifies explicitly, and employs the principle of least privileged access.</p>
    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <span class="text-xl font-bold text-brand-blue">1</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-4">Assumes Breach</h3>
        <p class="text-slate-600 leading-relaxed">Reduces the impact area of potential incidents and segments access. Confirms end-to-end encryption and leverages analytics for enhanced visibility, proactive threat detection, and fortified defenses.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <span class="text-xl font-bold text-brand-blue">2</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-4">Verifies Explicitly</h3>
        <p class="text-slate-600 leading-relaxed">Authenticates and grants authorization based on a comprehensive range of data points, encompassing user identity, location, device condition, service or workload, data classification, and any anomalies detected.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <span class="text-xl font-bold text-brand-blue">3</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-4">Least Privileged Access</h3>
        <p class="text-slate-600 leading-relaxed">Restricts user access through just-in-time and just-enough-access (JIT/JEA), adaptive policies based on risk assessment, and data protection measures to safeguard both data integrity and productivity.</p>
      </div>

    </div>
  </div>
</section>

@include('components.cta')
@endsection
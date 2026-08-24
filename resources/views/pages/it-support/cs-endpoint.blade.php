@extends('layouts.page')

@section('title', 'Endpoint Security | Bismillah Computer & Technology')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cyber Security</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Endpoint Security</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches.</p>
      <div class="flex flex-wrap gap-4 pt-2">
        <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
          Contact Us
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Endpoint Security" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/it-support/cyber-security.png"/>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

{{-- Intro Section --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up max-w-4xl mx-auto">
      <p class="text-lg text-slate-700 leading-relaxed mb-8">Endpoint protection plays a critical role in safeguarding an organization's digital assets. In an increasingly connected world, every device connected to your network is a potential entry point for cyber threats. Implementing robust endpoint security ensures that all laptops, desktops, mobile devices, and servers are protected against malicious activities.</p>
      <p class="text-lg text-slate-700 leading-relaxed mb-8">Endpoint protection encompasses a suite of security tools designed to defend enterprise networks against cyber threats. It focuses on securing individual endpoints—such as workstations, laptops, mobile devices, and servers—that connect to the corporate network. By deploying advanced threat detection, antivirus software, data encryption, and access controls, endpoint security prevents unauthorized access and mitigates security risks.</p>
      <p class="text-lg text-slate-700 leading-relaxed">Our Endpoint Security services are designed to protect every endpoint across your organization. We deliver comprehensive solutions that combine proactive threat detection, real-time monitoring, and automated response capabilities to keep your business safe from ransomware, malware, and sophisticated cyberattacks. Our solutions provide comprehensive coverage against malware, phishing, ransomware, and zero-day exploits. With 24/7 monitoring, automated patch management, and endpoint detection and response (EDR), we ensure that your business endpoints remain secure and resilient against evolving cyber threats.</p>
    </div>
  </div>
</section>

{{-- Why Endpoint Protection --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Do You Need Endpoint Protection?</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Preventing Unauthorized Access</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Protecting Against Malware and Cyberattacks</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100" style="animation-delay: 0.2s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Data Protection</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Ensuring Compliance</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Maintaining System Integrity</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-slate-50 rounded-xl p-6 border border-slate-100" style="animation-delay: 0.2s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700 font-medium">Preventing Data Loss</span>
      </div>
    </div>
  </div>
</section>

{{-- Solutions --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Endpoint Security Solutions</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We offer tailored solutions that meet the specific needs of your business, ensuring that your devices and data are protected without compromising productivity.</p>
    </div>

    {{-- Microsoft Defender for Business --}}
    <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow mb-8">
      <div class="grid md:grid-cols-2 gap-8 items-start">
        <div>
          <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full mb-4">Solution</span>
          <h3 class="text-2xl font-bold text-slate-900 mb-4">Microsoft Defender for Business</h3>
          <p class="text-slate-600 leading-relaxed mb-6">Enterprise-grade protection for small- and medium-sized businesses. Microsoft Defender for Business offers enterprise-grade security tailored for small and medium-sized businesses. It provides comprehensive protection against threats, including malware, ransomware, and phishing attacks, empowering businesses to work securely.</p>
        </div>
        <div>
          <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Key Features</h4>
          <div class="space-y-3">
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Ransomware Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Automated Investigation and Response</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Threat & Vulnerability Management</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Next-Generation Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Cross-Platform Support</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Integrated Security Controls</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Attack Surface Reduction</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Sentinel One --}}
    <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow mb-8" style="animation-delay: 0.1s">
      <div class="grid md:grid-cols-2 gap-8 items-start">
        <div>
          <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full mb-4">Solution</span>
          <h3 class="text-2xl font-bold text-slate-900 mb-4">Sentinel One</h3>
          <p class="text-slate-600 leading-relaxed mb-6">Advanced Enterprise Cyber Security AI Platform. SentinelOne is an autonomous cybersecurity platform that offers real-time threat prevention and response across organization endpoints. It utilizes artificial intelligence to detect, prevent, and respond to cyber attacks in real time across the enterprise.</p>
        </div>
        <div>
          <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Key Features</h4>
          <div class="space-y-3">
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Real-Time Prevention and Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Behavioral AI and Machine Learning</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Automated Threat Response</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Endpoint Detection and Response (EDR)</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Ransomware Rollback</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Cross-Platform Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Visibility and Tracking</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Bit Defender --}}
    <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
      <div class="grid md:grid-cols-2 gap-8 items-start">
        <div>
          <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full mb-4">Solution</span>
          <h3 class="text-2xl font-bold text-slate-900 mb-4">Bit Defender Endpoint Security</h3>
          <p class="text-slate-600 leading-relaxed mb-6">Global Leader in Cybersecurity. Bitdefender is a world leader in endpoint security, offering advanced cybersecurity solutions to safeguard businesses against modern threats. Its solutions provide multi-layered ransomware protection, behavioral analysis, and threat intelligence to keep your endpoints secure.</p>
        </div>
        <div>
          <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-4">Key Features</h4>
          <div class="space-y-3">
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Advanced Threat Defense (ATD)</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Anti-Ransomware Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Behavioral Protection</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Risk Management and Analytics</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Network Threat Prevention</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Endpoint Detection and Response (EDR)</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Centralized Management Console</span>
            </div>
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
              <span class="text-slate-700">Performance Optimization</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
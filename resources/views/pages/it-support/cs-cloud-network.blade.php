@extends('layouts.app')

@section('title', 'Cloud & Network Security | Bismillah Computer & Technology')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cyber Security</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Cloud & Network Security</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Protecting Your Digital Assets</p>
      <div class="flex flex-wrap gap-4 pt-2">
        <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
          Contact Us
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Cloud & Network Security" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/it-support/cyber-security/cloud-and-network/hero.png"/>
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
    <div class="reveal reveal-fade-up max-w-4xl mx-auto text-center mb-16">
      <p class="text-lg text-slate-700 leading-relaxed">In an era where digital transformation is at the core of business operations, ensuring the security of cloud environments and networks is more critical than ever. With cyber threats evolving rapidly, organizations must adopt robust security measures to protect sensitive data, applications, and infrastructure. Cloud and network security explores key aspects, best practices, and emerging trends to help businesses stay ahead of potential threats.</p>
    </div>
  </div>
</section>

{{-- Cloud Security Services --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Cloud Security Services</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We provide comprehensive cloud security solutions tailored to protect your business assets, ensuring cloud environments remain secure and resilient against modern threats.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Data Encryption</h3>
        <p class="text-slate-600 leading-relaxed">Secure sensitive information using advanced encryption techniques for data at rest and in transit.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Identity & Access Management</h3>
        <p class="text-slate-600 leading-relaxed">Implement strong authentication mechanisms to restrict unauthorized access with strict identity verification.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Threat Detection & Response</h3>
        <p class="text-slate-600 leading-relaxed">Utilize AI-powered security tools to identify and mitigate threats in real time with proactive monitoring.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Regulatory Compliance</h3>
        <p class="text-slate-600 leading-relaxed">Ensure compliance with industry standards such as GDPR, HIPAA, and ISO 27001 to maintain security standards.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-Factor Authentication</h3>
        <p class="text-slate-600 leading-relaxed">Add an extra layer of security to protect critical systems and data with MFA across all cloud accounts.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Microsoft 365 & Azure Security</h3>
        <p class="text-slate-600 leading-relaxed">Implement advanced threat protection, spam filtering, DLP, and secure cloud workloads across Microsoft 365 and Azure.</p>
      </div>
    </div>

    <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100">
      <h3 class="text-2xl font-bold text-slate-900 mb-6">Key Elements of Cloud Security</h3>
      <div class="grid md:grid-cols-2 gap-4">
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-slate-700"><strong class="text-slate-900">Data Encryption:</strong> Encrypting data at rest and in transit to preserve confidentiality and prevent unauthorized access.</span>
        </div>
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-slate-700"><strong class="text-slate-900">Identity and Access Management (IAM):</strong> Implementing strict identity verification to limit resource access to authorized personnel.</span>
        </div>
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-slate-700"><strong class="text-slate-900">Compliance and Governance:</strong> Adhering to regulatory frameworks such as GDPR and ISO 27001 to maintain security standards and legal integrity.</span>
        </div>
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-slate-700"><strong class="text-slate-900">Threat Detection and Response:</strong> Deploying proactive monitoring tools to identify and mitigate security incidents in real-time.</span>
        </div>
        <div class="flex items-start gap-3">
          <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-slate-700"><strong class="text-slate-900">Multi-Factor Authentication (MFA):</strong> Enforcing MFA across all cloud accounts to prevent unauthorized access from compromised credentials.</span>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Network Security --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Understanding Network Security</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">A comprehensive network security framework prevents unauthorized access, stops cyber threats, and protects internal network infrastructure from downtime, data breach, and severe financial and operational damage.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Next-Gen Firewalls & Penetration Testing</h3>
        <p class="text-slate-600 leading-relaxed">Inspect traffic, block intrusions, and filter malicious web content with advanced NGFW solutions.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Zero Trust Security Model</h3>
        <p class="text-slate-600 leading-relaxed">Enforce continuous authentication and strictly control access with a zero trust approach.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">SD-WAN Secure Remote Access</h3>
        <p class="text-slate-600 leading-relaxed">Ensure safe connectivity for remote workers and branch offices with SD-WAN solutions.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Endpoint Protection</h3>
        <p class="text-slate-600 leading-relaxed">Protect workstations and mobile devices from cyber attacks with comprehensive endpoint security.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">DDoS Protection</h3>
        <p class="text-slate-600 leading-relaxed">Prevent overwhelming traffic attacks to keep critical services online and accessible.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">VPNs & Wi-Fi Security</h3>
        <p class="text-slate-600 leading-relaxed">Encrypt network connections and protect wireless networks from unauthorized access with enterprise WPA3/WPA2 encryption.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Dedicated Internet & Broadband</h3>
        <p class="text-slate-600 leading-relaxed">High-speed, reliable internet connections with SLA guarantees, including Fibre (FTTP/FTTC) and redundant backup links.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Mobile Device Security</h3>
        <p class="text-slate-600 leading-relaxed">Safeguard laptops and corporate mobile devices with MDM solutions, secure app management, and device encryption.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-xl p-8 shadow-[0_5px_30px_-10px_rgba(0,0,0,0.05)] border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.2s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Remote Offsite Backup</h3>
        <p class="text-slate-600 leading-relaxed">Implement automatic daily backups to secure remote offsite locations for critical server systems and rapid data recovery.</p>
      </div>
    </div>
  </div>
</section>

{{-- Network Consulting --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Network Consulting, Design, and Installation</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Our network consulting, design, and installation services build reliable, scalable, and secure network infrastructure aligned with your business goals. From initial planning to full execution, we ensure seamless connectivity.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Network Architecture Planning</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Designing a customized network infrastructure that aligns with your business objectives.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Security-First Approach</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Implementing advanced security measures to protect against cyber threats.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Performance Optimization</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Enhancing network speed, reliability, and capability for optimal performance.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Cloud Integration</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Seamlessly integrating on-premise networks with cloud services for hybrid and multi-cloud environments.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Compliance & Risk Management</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Ensuring the network complies with regulatory requirements and industry standards.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.2s">
        <div class="flex items-start gap-3 mb-4">
          <svg class="w-5 h-5 text-brand-blue mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <h3 class="text-lg font-bold text-slate-900">Network Installation Services</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Full setup and configuration of network hardware and software for seamless integration and deployment.</p>
      </div>
    </div>
  </div>
</section>

{{-- Best Practices --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Best Practices for Strengthening Cloud and Network Security</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700"><strong class="text-slate-900">Regular Security Audits:</strong> Conduct periodic assessments to identify vulnerabilities and ensure compliance with security standards.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700"><strong class="text-slate-900">Employee Training:</strong> Educate employees on security best practices, such as recognizing phishing attacks and using strong passwords.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700"><strong class="text-slate-900">Automated Security Patching:</strong> Keep software and operating systems updated with the latest security patches.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700"><strong class="text-slate-900">Least Privilege Access Control:</strong> Limit user access to only what is necessary for their job roles to minimize security risks.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100 md:col-span-2">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700"><strong class="text-slate-900">Incident Response Plan:</strong> Develop and test a response strategy to quickly mitigate the impact of any potential cyber incident.</span>
      </div>
    </div>
  </div>
</section>

{{-- Emerging Trends --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Emerging Trends in Cloud and Network Security</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="reveal reveal-fade-up bg-gradient-to-br from-brand-blue/5 to-transparent rounded-xl p-8 border-2 border-blue-100">
        <h3 class="text-lg font-bold text-slate-900 mb-3">AI and Machine Learning in Security</h3>
        <p class="text-slate-600 leading-relaxed">AI-driven security solutions automate threat detection and response to identify complex attacks in real time.</p>
      </div>

      <div class="reveal reveal-fade-up bg-gradient-to-br from-brand-blue/5 to-transparent rounded-xl p-8 border-2 border-blue-100" style="animation-delay: 0.1s">
        <h3 class="text-lg font-bold text-slate-900 mb-3">SASE (Secure Access Service Edge)</h3>
        <p class="text-slate-600 leading-relaxed">A cloud-based framework that integrates network security functions with WAN capabilities for safe remote access.</p>
      </div>

      <div class="reveal reveal-fade-up bg-gradient-to-br from-brand-blue/5 to-transparent rounded-xl p-8 border-2 border-blue-100" style="animation-delay: 0.2s">
        <h3 class="text-lg font-bold text-slate-900 mb-3">Zero Trust Architecture</h3>
        <p class="text-slate-600 leading-relaxed">A security model that assumes every access request is untrusted, ensuring strict identity verification for all users.</p>
      </div>

      <div class="reveal reveal-fade-up bg-gradient-to-br from-brand-blue/5 to-transparent rounded-xl p-8 border-2 border-blue-100">
        <h3 class="text-lg font-bold text-slate-900 mb-3">IoT Security</h3>
        <p class="text-slate-600 leading-relaxed">Protecting connected devices and sensors from exploits to prevent entry points into enterprise networks.</p>
      </div>

      <div class="reveal reveal-fade-up bg-gradient-to-br from-brand-blue/5 to-transparent rounded-xl p-8 border-2 border-blue-100 md:col-span-2" style="animation-delay: 0.1s">
        <h3 class="text-lg font-bold text-slate-900 mb-3">Quantum-Safe Cryptography</h3>
        <p class="text-slate-600 leading-relaxed">Preparing for future threats posed by quantum computing by developing advanced encryption algorithms to protect sensitive data.</p>
      </div>
    </div>
  </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Choose Us For Cloud and Network Security?</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We are dedicated to delivering tailored security solutions that align with your business goals. Our team of experts is committed to providing:</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100 hover:shadow-lg transition-shadow">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700">Customized security strategies tailored to your unique needs.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700">24/7 monitoring and proactive threat detection.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100 hover:shadow-lg transition-shadow">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700">Compliance with industry standards and regulations.</span>
      </div>

      <div class="reveal reveal-fade-up flex items-start gap-3 bg-white rounded-xl p-6 border-2 border-blue-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
        <span class="text-slate-700">Scalable solutions that grow with your business.</span>
      </div>
    </div>

    <div class="reveal reveal-fade-up text-center mt-12">
      <p class="text-xl text-slate-700 font-medium mb-6">Don't leave your digital assets vulnerable to cyber threats.</p>
      <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-8 py-4 rounded-xl transition-colors">
        Get Started Today
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
      </a>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
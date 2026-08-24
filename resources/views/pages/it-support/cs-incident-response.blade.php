@extends('layouts.page')

@section('title', 'Incident Response | Bismillah Computer & Technology')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cyber Security</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Incident Response</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Protect your business from costly and damaging cybersecurity incidents. Our incident response services are designed to swiftly address and mitigate incidents, minimizing and, where possible, reversing the impact of breaches.</p>
      <div class="flex flex-wrap gap-4 pt-2">
        <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
          Contact Us
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Incident Response" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/it-support/cyber-security.png"/>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

{{-- Intro --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up max-w-4xl mx-auto">
      <p class="text-lg text-slate-700 leading-relaxed">Our experienced incident response team supports organizations and businesses across various industries in managing complex and sensitive cybersecurity challenges. With deep industry expertise and an in-depth understanding of the local threat landscape, you can trust us to handle every stage of the breach response cycle efficiently.</p>
    </div>
  </div>
</section>

{{-- How Does It Work --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">How Does It Work?</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Our team offers rapid responses to any suspected IT breach affecting your organization, including malware, unauthorized access, unauthorized payments, data loss or theft, and more.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
      <div class="reveal reveal-fade-up bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Containment</h3>
        <p class="text-slate-600 leading-relaxed">Our incident response team swiftly isolates the affected segment of devices to limit damage and prevent further harm, halting the spread and progression of the attack.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Monitoring</h3>
        <p class="text-slate-600 leading-relaxed">We collaborate with our partners to help your business regain control and visibility of your network. While restoring affected systems, our team thoroughly validates them to ensure they are free from any compromise.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Attack Investigation</h3>
        <p class="text-slate-600 leading-relaxed">Post-attack, we gather crucial information—such as logs, errors, and resources from intrusion detection systems—to inform our forensic analysis. Our team examines the causes, impacts, and potential mitigation strategies.</p>
      </div>

      <div class="reveal reveal-fade-up bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Reporting</h3>
        <p class="text-slate-600 leading-relaxed">We provide detailed analysis and documentation of the incident for both management and technical teams. Our report includes a comprehensive review of the incident, highlighting lessons learned and outlining a step-by-step account of the event.</p>
      </div>
    </div>
  </div>
</section>

{{-- Customised Remediation --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up max-w-4xl mx-auto text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Customised Remediation Action Plans</h2>
      <p class="text-lg text-slate-700 leading-relaxed">Following every incident, we create tailored remediation action plans to enhance your overall security posture and help prevent future breaches.</p>
    </div>
  </div>
</section>

{{-- Benefits --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Benefits of Cyber Incident Response Services</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">In today's digital landscape, vigilance in IT security is crucial. Our highly experienced team is equipped to defend against both known and emerging threats, ensuring rapid response to any cyber attacks or security incidents. By acting as an extension of your IT and security teams, we provide peace of mind through swift incident resolution.</p>
    </div>
  </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Choose Us for Cyber Incident Response Services?</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">We develop and implement a 24/7 cyber incident response plan tailored to your unique operational needs. Our services protect against:</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto mb-16">
      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Destructive Attacks</h3>
        <p class="text-slate-600 leading-relaxed">Safeguarding against malware, phishing, denial of service attacks, and insider threats.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Data Breaches</h3>
        <p class="text-slate-600 leading-relaxed">Preventing the exposure of customer data, personally identifiable information, and other sensitive information.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">Financial Attacks</h3>
        <p class="text-slate-600 leading-relaxed">Defending against extortion, ransomware, payment card theft, and more.</p>
      </div>

      <div class="reveal reveal-fade-up bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow" style="animation-delay: 0.1s">
        <div class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-3">IP Theft</h3>
        <p class="text-slate-600 leading-relaxed">Protecting against the sophisticated theft of intellectual property, including trade secrets and other sensitive data.</p>
      </div>
    </div>

    <div class="reveal reveal-fade-up max-w-4xl mx-auto text-center">
      <p class="text-lg text-slate-700 leading-relaxed mb-8">Our incident response services efficiently triage and contain threats, while also offering consultation and forensic investigations of compromised IT infrastructure, services, and networks. Contact us to learn more about our incident response services. We're here to answer your questions and guide you through the process of getting started.</p>
      <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-8 py-4 rounded-xl transition-colors">
        Contact Us
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
      </a>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
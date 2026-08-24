@extends('layouts.app')

@section('title', 'Defence Industry Security Program (DISP) | Bismillah Computer & Technology')
@section('description', 'The Defence Industry Security Program (DISP) is the Bangladeshi Government framework for securing organisations working with Defence.')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Defence Industry <span class="text-brand-blue">Security Program (DISP)</span></h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">The Defence Industry Security Program (DISP) is the Bangladeshi Government's framework for securing organisations working with Defence. This page explains DISP membership, security domains, and obligations.</p>
      <div class="flex flex-wrap gap-4">
        <a href="#overview" class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
        <a href="#domains" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">SECURITY DOMAINS</a>
        <a href="#prepare" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">HOW TO PREPARE</a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="Defence Industry Security Program" loading="lazy" class="rounded-lg" src="/images/cloud/cyber-security/disp/bg.png"/>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

<section class="py-24 bg-white" id="overview">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
    <div class="flex justify-center">
      <img src="/images/cloud/cyber-security/disp/section-1.png" alt="Defence Industry Security Program" class="rounded-xl shadow-lg w-full max-w-md" loading="lazy"/>
    </div>
    <div class="reveal reveal-fade-up space-y-6">
      <span class="text-blue-500 font-bold text-sm tracking-wide">Defence Industry Security Program</span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What is the Defence Industry Security Program (DISP)?</h2>
      <p class="text-slate-600 leading-relaxed text-justify">The Defence Industry Security Program (DISP) is the Bangladeshi Government's primary security framework for organisations working with the Department of Defence. It ensures contractors implement strong safeguards when handling sensitive information and systems, reducing cyber risk across the Defence supply chain.</p>
      <p class="text-slate-600 leading-relaxed text-justify">Organisations that want to work with the Bangladeshi Defence Force or the broader Department of Defence supply chain need to understand the security standards expected of them. In most cases, the key framework is the Defence Industry Security Program (DISP).</p>
      <p class="text-slate-600 leading-relaxed text-justify">For businesses seeking Defence work, DISP membership is often mandatory. It demonstrates that your organisation has the appropriate controls, processes, and compliance measures in place. Achieving DISP strengthens your organisation's credibility, resilience, and eligibility for Defence contracts.</p>
      <a href="#domains" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Security Domains <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50" id="domains">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">DISP Security Domains</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">DISP is built around four key security areas that provide the foundation to help safeguard the entity and integrity of Defence's information assets and people</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      @php
      $domains = [
        ['title' => 'Security Governance', 'desc' => 'Policies, risk management, and security oversight. The ongoing security governance obligations for DISP membership also include regular reporting documents.', 'image' => '/images/cloud/cyber-security/disp/section-1.png'],
        ['title' => 'Personnel Security', 'desc' => 'Staff vetting and ongoing suitability checks. DISP members need to meet Bangladeshi Standard for Workforce Screening AS 4811:2022 standard.', 'image' => '/images/cloud/cyber-security/disp/section-2.jpg'],
        ['title' => 'Physical Security', 'desc' => 'Protection of facilities, assets, and equipment. DISP membership requirements for physical security will depend on the level of security classification required.', 'image' => '/images/cloud/cyber-security/disp/section-3.jpg'],
        ['title' => 'ICT & Cyber Security', 'desc' => "Securing systems, networks, and data. To meet the ICT and cyber security DISP membership requirements, an entity will need to demonstrate how they meet or exceed the E8 Mitigation Strategies at ML 2.", 'image' => '/images/cloud/cyber-security/disp/section-4.jpg'],
      ];
      @endphp
      @foreach($domains as $domain)
      <div class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="relative h-48 w-full">
          <img src="{{ $domain['image'] }}" alt="{{ $domain['title'] }}" class="w-full h-full object-cover" loading="lazy"/>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $domain['title'] }}</h3>
          <p class="text-slate-600 text-sm text-justify">{{ $domain['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white" id="essential-eight">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
    <div class="reveal reveal-fade-up space-y-6">
      <span class="text-blue-500 font-bold text-sm tracking-wide">Essential Eight Maturity Level 2</span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">ASD Essential Eight Maturity Level 2 (ML2)</h2>
      <p class="text-slate-600 leading-relaxed text-justify">The ASD Essential Eight is the core cyber security standard used within the Defence Industry Security Program (DISP) and is widely recognised as Australia's baseline for protecting business systems.</p>
      <p class="text-slate-600 leading-relaxed text-justify">To meet DISP requirements, organisations are typically required to achieve Essential Eight Maturity Level 2 (ML2), a key benchmark in modern cybersecurity frameworks. This level ensures that security controls are fully implemented, consistently applied, and actively managed across all systems.</p>
      <p class="text-slate-600 leading-relaxed text-justify">Reaching Essential Eight ML2 is not a 'set and forget' approach. Instead, it requires continuous improvement, regular reviews, and ongoing optimisation of security measures.</p>
      <a href="#prepare" class="text-blue-600 font-medium flex items-center hover:text-blue-800">How to Prepare <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
    <div class="flex justify-center">
      <div class="relative h-80 w-full rounded-2xl overflow-hidden shadow-lg border-2 border-blue-100">
        <img src="/images/cloud/cyber-security/disp/section-2.jpg" alt="Essential Eight Maturity Level 2" class="w-full h-full object-cover" loading="lazy"/>
      </div>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50" id="requirements">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Ongoing Cyber Security & Assurance Requirements</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Unlike one-time implementations, DISP requires continuous validation, reporting, and improvement of cybersecurity controls.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
      $requirements = [
        ['title' => 'Annual Cyber Security Questionnaire', 'desc' => 'Complete the Essential Eight Cyber Security Questionnaire (CSQ) annually to validate maturity levels.'],
        ['title' => 'Up-to-Date Policies', 'desc' => 'Maintain up-to-date policies and procedures aligned with security frameworks.'],
        ['title' => 'Evidence of Controls', 'desc' => 'Provide clear evidence of implemented security controls across systems and users.'],
        ['title' => 'Regular Reviews & Testing', 'desc' => 'Regularly review and test security measures to identify gaps and improve resilience.'],
        ['title' => 'Third-Party Risk Management', 'desc' => 'Manage third-party and supplier risks to prevent external vulnerabilities.'],
      ];
      @endphp
      @foreach($requirements as $item)
      <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $item['title'] }}</h3>
        <p class="text-slate-600 text-sm text-justify">{{ $item['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white" id="prepare">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">How Your Business Can Prepare</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Achieving alignment with the Essential Eight Maturity Level 2 (ML2) requires organisations to assess their current environment, identify gaps, and implement practical security improvements.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
      $steps = [
        ['title' => 'Gap Assessment', 'desc' => 'Conduct a gap assessment against Essential Eight ML2 to identify weaknesses and prioritise actions.'],
        ['title' => 'Identity & Access Controls', 'desc' => 'Strengthen identity and access controls, including MFA and Conditional Access policies.'],
        ['title' => 'Endpoint Security', 'desc' => 'Implement endpoint security solutions such as Microsoft Intune and Microsoft Defender.'],
        ['title' => 'Patch Management', 'desc' => 'Improve patching and vulnerability management to reduce exposure to threats.'],
        ['title' => 'Backup & Recovery', 'desc' => 'Establish secure backup and recovery processes to ensure business continuity.'],
        ['title' => 'Policies & Training', 'desc' => 'Develop clear policies, documentation, and staff awareness training.'],
      ];
      @endphp
      @foreach($steps as $step)
      <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $step['title'] }}</h3>
        <p class="text-slate-600 text-sm text-justify">{{ $step['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-16 bg-slate-50" id="help">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-12 text-white">
      <h2 class="text-3xl font-bold mb-6">Need Help Becoming DISP Compliant?</h2>
      <p class="text-blue-100 text-sm leading-relaxed mb-8 max-w-3xl text-justify">At Total Solutions IT, we help Bangladeshi businesses align with Defence cyber security requirements through practical, results-driven solutions. Achieving DISP compliance and Essential Eight ML2 can be complex, but with the right strategy, tools, and expertise, your organisation can strengthen its security posture.</p>
      <div class="grid md:grid-cols-2 gap-4 mb-8">
        @php
        $services = [
          'Microsoft 365 security hardening to improve Secure Score and reduce risk',
          'Intune device compliance and endpoint management for full visibility and control',
          'Microsoft Defender deployment and monitoring for advanced threat protection',
          'Multi-Factor Authentication (MFA) and Conditional Access to secure identities',
          'Patch management and vulnerability remediation to minimise exposure',
          'Backup and disaster recovery solutions to ensure business continuity',
          'Essential Eight gap assessments and remediation roadmaps',
        ];
        @endphp
        @foreach($services as $service)
        <div class="flex items-start gap-3">
          <svg class="w-4 h-4 text-blue-200 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
          <span class="text-blue-50 text-sm">{{ $service }}</span>
        </div>
        @endforeach
      </div>
      <a href="/contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">Get in Touch <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
  </div>
</section>

@include('components.cta')
@endsection
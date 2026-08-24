@extends('layouts.app')

@section('title', 'Microsoft Secure Score | Bismillah Computer & Technology')
@section('description', 'Microsoft Secure Score is a built-in security measurement tool that helps organizations identify risks and improve their Microsoft 365 security posture.')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft <span class="text-brand-blue">Secure Score</span> Security Posture</h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Secure Score is a built-in security measurement tool that helps organizations identify risks, implement recommended security controls, and continuously improve their Microsoft 365 security posture.</p>
      <div class="flex flex-wrap gap-4">
        <a href="#overview" class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
        <a href="#how-it-works" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">HOW IT WORKS</a>
        <a href="#improve" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">IMPROVE YOUR SCORE</a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="Microsoft Secure Score" loading="lazy" class="rounded-lg" src="/images/cloud/cyber-security/secure-score/bg.png"/>
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
      <div class="relative h-80 w-full rounded-2xl overflow-hidden shadow-lg border-2 border-blue-100">
        <img src="/images/cloud/cyber-security/secure-score/section-1.jpg" alt="Microsoft Secure Score Dashboard" class="w-full h-full object-cover" loading="lazy"/>
      </div>
    </div>
    <div class="reveal reveal-fade-up space-y-6">
      <span class="text-blue-500 font-bold text-sm tracking-wide">Microsoft Secure Score</span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What is Microsoft Secure Score?</h2>
      <p class="text-slate-600 leading-relaxed text-justify">Microsoft Secure Score is a built-in security measurement tool within Microsoft 365 and Microsoft Defender that helps organisations understand and improve their cybersecurity posture. It provides a numerical score that represents how well your Microsoft 365 environment is protected against common security threats.</p>
      <p class="text-slate-600 leading-relaxed text-justify">The score is calculated based on the security controls and configurations enabled across your Microsoft 365 services. As recommended security settings are implemented, the score increases, giving businesses a clear way to track improvements and identify areas that require attention.</p>
      <a href="#how-it-works" class="text-blue-600 font-medium flex items-center hover:text-blue-800">How It Works <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50" id="why-matters">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Why Microsoft Secure Score Matters</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Microsoft Secure Score is more than just a number — it provides organisations with a clear and measurable view of their Microsoft 365 security posture</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
      $benefits = [
        ['title' => 'Visibility', 'desc' => 'Understand what security controls are enabled and where improvements are needed across your Microsoft 365 environment.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />'],
        ['title' => 'Accountability', 'desc' => 'Assign recommended actions to IT teams and track security improvements over time with measurable goals.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />'],
        ['title' => 'Continuous Improvement', 'desc' => "Monitor how your organisation's security posture evolves as new protections are implemented across your tenant.", 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />'],
        ['title' => 'Benchmarking', 'desc' => 'Compare your Secure Score against similar organisations and industry standards to understand your competitive position.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />'],
        ['title' => 'Compliance Alignment', 'desc' => 'Many recommendations support frameworks such as the ACSC Essential Eight, ISO 27001, NIST, and GDPR.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />'],
      ];
      @endphp
      @foreach($benefits as $benefit)
      <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 shadow-sm bg-white transition-all relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <div class="flex items-center gap-3 mb-3">
          <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $benefit['icon'] !!}</svg>
          </div>
          <h3 class="text-lg font-bold text-slate-900">{{ $benefit['title'] }}</h3>
        </div>
        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white" id="categories">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Secure Score Categories</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Secure Score is divided into four main categories that cover the full spectrum of your Microsoft 365 security posture</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      @php
      $categories = [
        ['title' => 'Identity Protection', 'desc' => 'Multi-Factor Authentication (MFA), secure sign-in policies, Conditional Access, Entra ID Protection, password policies, admin account protection, and legacy authentication blocking.', 'image' => '/images/cloud/cyber-security/secure-score/section-1.jpg'],
        ['title' => 'Device Security', 'desc' => 'Compliance policies, endpoint protection, Microsoft Intune device management, device health monitoring, and attack surface reduction rules across Windows, macOS, iOS, and Android.', 'image' => '/images/cloud/cyber-security/secure-score/section-2.jpg'],
        ['title' => 'Data Protection', 'desc' => 'Email security, file protection controls, Data Loss Prevention (DLP), sensitivity labels, SharePoint and OneDrive sharing controls, and Microsoft Purview compliance tools.', 'image' => '/images/cloud/cyber-security/secure-score/section-3.jpg'],
        ['title' => 'Application Security', 'desc' => 'Safe configuration of Microsoft 365 services, Microsoft Defender for Office 365, Safe Links, Safe Attachments, anti-phishing policies, and impersonation protection.', 'image' => ''],
      ];
      @endphp
      @foreach($categories as $category)
      <div class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        @if($category['image'])
        <div class="relative h-48 w-full">
          <img src="{{ $category['image'] }}" alt="{{ $category['title'] }}" class="w-full h-full object-cover" loading="lazy"/>
        </div>
        @endif
        <div class="p-6">
          <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $category['title'] }}</h3>
          <p class="text-slate-600 text-sm text-justify">{{ $category['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50" id="improve">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">How to Improve Your Secure Score</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Microsoft provides specific recommendations to improve your Secure Score. Addressing Identity actions first delivers the highest risk reduction per point.</p>
    </div>
    <div class="grid md:grid-cols-2 gap-8">
      @php
      $improvements = [
        ['title' => 'Enable Multi-Factor Authentication (MFA) for all users', 'desc' => 'The single most impactful control in any M365 tenant. Password compromise does not lead to account takeover when MFA is required.'],
        ['title' => 'Disable legacy authentication protocols', 'desc' => 'Disable legacy authentication protocols (e.g., POP, IMAP, SMTP basic auth). Legacy protocols do not support MFA and represent a significant attack vector.'],
        ['title' => 'Apply Intune compliance policies', 'desc' => 'Apply Intune compliance policies for device health and encryption. Ensure only trusted and compliant devices can access company systems.'],
        ['title' => 'Use Microsoft Defender for Office 365', 'desc' => 'Use Microsoft Defender for Office 365 to protect against phishing and malware. Deploy Safe Links and Safe Attachments for real-time content scanning.'],
        ['title' => 'Deploy Sensitivity Labels', 'desc' => 'Deploy Sensitivity Labels to classify and protect data across Microsoft 365. Ensure only authorised users access sensitive content.'],
        ['title' => 'Implement Conditional Access', 'desc' => 'Implement Conditional Access to enforce secure access rules. Define policies that evaluate user identity, device compliance, location, and risk level.'],
        ['title' => 'Audit privileged roles', 'desc' => 'Audit privileged roles and restrict global admin usage. Enforce least-privilege access with Role-Based Access Control (RBAC).'],
        ['title' => 'Enable Safe Links and Safe Attachments', 'desc' => 'Enable Safe Links and Safe Attachments for real-time content scanning. Protect against phishing attempts, malware, and ransomware attacks.'],
      ];
      @endphp
      @foreach($improvements as $item)
      <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <div class="px-6 py-5">
          <div class="flex items-center gap-3">
            <span class="text-blue-600 font-bold text-sm shrink-0">{{ str_pad($loop->index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            <h3 class="font-medium text-slate-900 text-sm">{{ $item['title'] }}</h3>
          </div>
          <p class="mt-2 text-sm text-slate-600 leading-relaxed text-justify">{{ $item['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-16 bg-white" id="limitations">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up bg-blue-50 border-2 border-blue-100 rounded-2xl p-8">
      <div class="flex items-center gap-3 mb-4">
        <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
        <h3 class="text-lg font-bold text-blue-900">Important Limitations to Consider</h3>
      </div>
      <ul class="space-y-2">
        @php
        $limitations = [
          'Not all third-party security tools are reflected in your score',
          'Some recommendations may not apply to your licensing or business needs',
          'Secure Score is not a guarantee of protection — it is a baseline framework to guide stronger cybersecurity resilience',
          'Secure Score does not evaluate Conditional Access policy quality, RBAC hygiene, incident response capability, or user awareness',
        ];
        @endphp
        @foreach($limitations as $item)
        <li class="flex items-start gap-3">
          <span class="text-blue-400 shrink-0 mt-1">&bull;</span>
          <span class="text-slate-600 text-sm">{{ $item }}</span>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>

<section class="py-16 bg-slate-50" id="help">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-8 lg:p-12 text-white">
      <h2 class="text-3xl font-bold mb-6">Need Help Improving Your Secure Score?</h2>
      <p class="text-blue-100 text-sm leading-relaxed mb-8 max-w-3xl text-justify">Microsoft Secure Score is a powerful tool for organizations looking to enhance their Microsoft 365 security posture. It offers visibility, direction, and measurable goals in a format that's easy to understand. Partnering with a skilled Microsoft 365 Security partner can help you achieve the best combination between a secure IT environment and a great user experience.</p>
      <div class="grid md:grid-cols-2 gap-4 mb-8">
        @php
        $services = [
          'Assess your current Secure Score and identify gaps',
          'Implement best-practice security policies across your tenant',
          'Remediate high-risk items and prioritise critical actions',
          'Monitor improvements over time with regular reviews',
          'Provide Secure Score reports in our quarterly IT reviews',
          'Microsoft 365 security hardening to improve Secure Score and reduce risk',
          'Intune device compliance and endpoint management',
          'Microsoft Defender deployment and monitoring',
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
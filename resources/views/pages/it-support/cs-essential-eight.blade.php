@extends('layouts.app')

@section('title', 'Essential Eight | Bismillah Computer & Technology')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
    <div class="space-y-6">
      <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cyber Security</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Essential Eight</h1>
      <p class="text-lg md:text-xl text-slate-700 leading-relaxed">The ACSC Essential Eight is a cybersecurity framework outlining eight strategies to protect against cyber threats. These include patching, application control, user access management, backups, and more.</p>
      <div class="flex flex-wrap gap-4 pt-2">
        <a href="/contact" class="inline-flex items-center gap-2 bg-brand-blue text-white hover:bg-brand-hover font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
          Contact Us
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end">
      <img alt="Essential Eight" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full" src="/images/it-support/cyber-security/essential-eight/acsc.png"/>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>

{{-- What Is ACSC Essential Eight --}}
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal reveal-fade-up max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">What Is ACSC Essential Eight?</h2>
      <p class="text-lg text-slate-700 leading-relaxed mb-4">Developed by the Cyber Security Centre (ACSC), the Essential Eight is a baseline set of strategies designed to help organizations mitigate cyber security threats. Implementing these strategies makes it significantly harder for adversaries to compromise systems.</p>
      <p class="text-lg text-slate-700 leading-relaxed">We help businesses implement and maintain the Essential Eight strategies to build a robust defense mechanism. Contact us today to learn more about how we can strengthen your organization's cyber security.</p>
    </div>
  </div>
</section>

{{-- The Eight Strategies --}}
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What Are The Essential Eight?</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">

      {{-- 1. Application Control --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">1</span>
          <h3 class="text-xl font-bold text-slate-900">Application Control</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">This relates to the level of application control and constraints you have over user applications and the ability for staff to execute unapproved and malicious programs on workstations. This includes .exe, DLL, scripts and installers.</p>
      </div>

      {{-- 2. Application Patching --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">2</span>
          <h3 class="text-xl font-bold text-slate-900">Application Patching</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Updating third-party applications quickly is essential for ensuring the latest security updates and patches are in place. For example, using the latest version of applications and patches of web browsers, Microsoft Office, Java and PDF viewers. This requires frequent use of security vulnerability scanners to detect missing patches and updates as well as removing solutions that are no longer supported by their vendors.</p>
      </div>

      {{-- 3. Configure Microsoft Office Macro Settings --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">3</span>
          <h3 class="text-xl font-bold text-slate-900">Configure Microsoft Office Macro Settings</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">This is the amount of freedom your users have to run macros in Microsoft Office applications. Most users should have macros blocked as default unless they have a specific organisational requirement. Only allow vetted macros, either in 'trusted locations' with limited write access or digitally signed with a trusted certificate.</p>
      </div>

      {{-- 4. User Application Hardening --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">4</span>
          <h3 class="text-xl font-bold text-slate-900">User Application Hardening</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Limitations should be placed on user applications. At its most basic, web browsers should block Flash, ads and Java, with users unable to change these settings. Disable unneeded features in Microsoft Office (such as OLE), and in web browsers and PDF viewers. Internet Explorer 11 should also be disabled.</p>
      </div>

      {{-- 5. Restrict Administrative Privileges --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">5</span>
          <h3 class="text-xl font-bold text-slate-900">Restrict Administrative Privileges</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Tightly manage administrative privileges and access to operating systems and applications based on user duties. This includes regularly revalidating requests for privileged access to systems and applications, blocking privileged accounts from accessing the internet and using separate operating environments for privileged and unprivileged users. Privileged accounts should not be used for reading email and browsing the web.</p>
      </div>

      {{-- 6. Patch Operating Systems --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">6</span>
          <h3 class="text-xl font-bold text-slate-900">Patch Operating Systems</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">This focuses on keeping operating systems up to date to ensure that OS patches, updates, and security mitigations for internet-facing services are applied within two weeks of release. All computers and network devices with 'extreme security risk' vulnerabilities should be patched within 48 hours. Security Vulnerability scanners should also be used to identify any missing patches, and any OS that is no longer vendor supported should be replaced.</p>
      </div>

      {{-- 7. Multi-factor Authentication --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">7</span>
          <h3 class="text-xl font-bold text-slate-900">Multi-factor Authentication</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Enforce MFA for all privileged access. Turn on MFA for VPNs, RDP, SSH and other remote access, and for all users when they access an important data repository. Maturity starts by enforcing MFA for all users before they access internet-facing services and third-party providers.</p>
      </div>

      {{-- 8. Daily Backups --}}
      <div class="reveal reveal-fade-up bg-slate-50 rounded-xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:-translate-y-1 transition-all duration-300" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3 mb-4">
          <span class="w-10 h-10 bg-brand-blue text-white rounded-full flex items-center justify-center font-bold text-sm shrink-0">8</span>
          <h3 class="text-xl font-bold text-slate-900">Daily Backups</h3>
        </div>
        <p class="text-slate-600 leading-relaxed">Perform daily backups of important new or changed data, software and configuration settings. All unprivileged accounts should be restricted to their own backup environments. Store backups disconnected from the Internet and retain them for at least three months. Test restoration initially, annually and whenever IT infrastructure changes.</p>
      </div>

    </div>
  </div>
</section>

@include('components.cta')
@endsection
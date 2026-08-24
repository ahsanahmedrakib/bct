@extends('layouts.app')

@section('title', 'ACSC Essential Eight Compliance | Bismillah Computer & Technology')
@section('description', 'Microsoft 365 provides a comprehensive suite of security tools that help organisations achieve and maintain compliance with the ACSC Essential Eight framework.')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
  <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
    <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
      <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">How Microsoft 365 Achieves <span class="text-brand-blue">ACSC Essential 8</span> Compliance</h1>
      <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft 365 provides a comprehensive suite of security tools and features that help organisations achieve and maintain compliance with the ACSC Essential Eight framework.</p>
      <div class="flex flex-wrap gap-4">
        <a href="#overview" class="inline-flex items-center gap-2 bg-brand-blue text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors text-sm">OVERVIEW</a>
        <a href="#strategies" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">THE EIGHT STRATEGIES</a>
        <a href="#features" class="inline-flex items-center gap-2 bg-white text-brand-blue border-2 border-brand-blue font-semibold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors text-sm">MICROSOFT 365 FEATURES</a>
      </div>
    </div>
    <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
      <img alt="ACSC Essential Eight" loading="lazy" class="rounded-lg" src="/images/cloud/microsoft-solutions/conditional-access/conditional-access.png"/>
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
      <img src="/images/it-support/cyber-security/acsc.png" alt="ACSC Essential Eight" class="rounded-xl shadow-lg w-full max-w-md" loading="lazy"/>
    </div>
    <div class="reveal reveal-fade-up space-y-6">
      <span class="text-blue-500 font-bold text-sm tracking-wide">ACSC Essential Eight</span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What is the ACSC Essential Eight?</h2>
      <p class="text-slate-600 leading-relaxed text-justify">The ACSC Essential Eight, developed by the Bangladeshi Cyber Security Centre, is a proven framework designed to help organisations protect against cyber attacks, ransomware, and data breaches. It focuses on practical, high-impact controls that significantly reduce cybersecurity risk when implemented correctly.</p>
      <p class="text-slate-600 leading-relaxed text-justify">The framework includes Application Control, Patch Applications, and Patch Operating Systems, which work together to prevent malicious software from running and reduce exposure to known vulnerabilities. Restrict Administrative Privileges limits high-risk access, while Multi-Factor Authentication (MFA) strengthens identity security and helps prevent unauthorised access.</p>
      <p class="text-slate-600 leading-relaxed text-justify">To support resilience and recovery, the Essential Eight also mandates regular backups and tested data restoration processes, ensuring business continuity after an incident.</p>
      <a href="#strategies" class="text-blue-600 font-medium flex items-center hover:text-blue-800">The Eight Strategies <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50" id="strategies">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">The ACSC Essential Eight Strategies</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Eight proven mitigation strategies that significantly reduce cybersecurity risk when implemented correctly</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      @php
      $strategies = [
        ['title' => 'Application Control', 'desc' => 'Restricts execution of unapproved software to prevent malware and unauthorized programs on systems.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-1.jpg'],
        ['title' => 'Patch Applications', 'desc' => 'Updating software to fix vulnerabilities, reducing security risks and preventing exploitation by attackers.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-2.webp'],
        ['title' => 'Configure Microsoft Office Macro Settings', 'desc' => 'Restrict macro execution in Microsoft Office to prevent malicious code from compromising systems.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-3.jpg'],
        ['title' => 'User Application Hardening', 'desc' => 'Configures apps to block unnecessary features, reducing exposure to security threats and exploits.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-4.jpg'],
        ['title' => 'Restrict Administrative Privileges', 'desc' => 'Limits admin access to essential users, reducing potential damage from compromised accounts.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-5.jpg'],
        ['title' => 'Patch Operating Systems', 'desc' => 'Regularly updating OS to fix vulnerabilities and protect against security threats and exploits.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-6.jpg'],
        ['title' => 'Multi-Factor Authentication', 'desc' => 'Uses two or more verification methods to secure accounts and prevent unauthorized access.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-7.jpg'],
        ['title' => 'Regular Backups', 'desc' => 'Performing daily backups of important new or changed data, software and configuration settings.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />', 'image' => '/images/cloud/cyber-security/essential-eight/section-8.jpg'],
      ];
      @endphp
      @foreach($strategies as $strategy)
      <div class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg transition-shadow">
        <div class="relative h-48 w-full">
          <img src="{{ $strategy['image'] }}" alt="{{ $strategy['title'] }}" class="w-full h-full object-cover" loading="lazy"/>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 bg-brand-blue/10 rounded-full flex items-center justify-center">
              <svg class="w-5 h-5 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $strategy['icon'] !!}</svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ $strategy['title'] }}</h3>
          </div>
          <p class="text-slate-600 text-sm text-justify">{{ $strategy['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white" id="features">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">How Microsoft 365 Achieves Essential 8 Compliance</h2>
      <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Microsoft 365 provides comprehensive security tools and features that address each of the Essential Eight strategies</p>
    </div>
    <div class="space-y-4">
      @php
      $features = [
        ['title' => 'Password Policy', 'desc' => 'The password policy in Microsoft 365, managed through Azure Active Directory (Azure AD), enforces strong security measures to protect user accounts. It supports password complexity requirements, including length, special characters, and expiration periods to reduce vulnerabilities.'],
        ['title' => 'Multi-Factor Authentication (MFA)', 'desc' => 'Multi-Factor Authentication (MFA) in Microsoft 365 enhances security by requiring users to verify their identity using two or more factors — something they know (password), have (device or token), or are (biometrics).'],
        ['title' => 'Phishing-Resistant MFA', 'desc' => 'Phishing-resistant Multi-Factor Authentication (MFA) in Microsoft 365 provides advanced protection against phishing attacks by eliminating reliance on traditional passwords and one-time codes.'],
        ['title' => 'Passkeys', 'desc' => 'Microsoft 365 supports passkeys through Windows Hello for Business, Microsoft Authenticator, and security keys like YubiKeys. These methods integrate with Azure Active Directory to enforce Multi-Factor Authentication (MFA).'],
        ['title' => 'Entra ID', 'desc' => 'Entra ID (formerly Azure Active Directory) in Microsoft 365 is a cloud-based identity and access management (IAM) solution that secures user authentication and enforces access control.'],
        ['title' => 'Conditional Access', 'desc' => 'Conditional Access in Microsoft 365 is a key security feature that allows organizations to control how users access corporate resources based on specific conditions.'],
        ['title' => 'Data Backup', 'desc' => 'Data backup in Microsoft 365 ensures data protection through built-in features and third-party solutions. Services like OneDrive, SharePoint Online, and Exchange Online provide versioning, recycle bins, and retention policies.'],
        ['title' => 'Cloud Security', 'desc' => 'Cloud security in Microsoft 365 ensures data protection, threat prevention, and compliance in the cloud. It uses Microsoft Defender for Cloud Apps to monitor and control cloud app usage.'],
        ['title' => 'Zero Trust Framework', 'desc' => 'The Zero Trust Framework in Microsoft 365 enforces "never trust, always verify" to secure identities, devices, and data.'],
        ['title' => 'Compliance', 'desc' => 'Compliance in Microsoft 365 helps organizations meet legal, regulatory, and industry standards through tools in the Microsoft Purview Compliance Portal.'],
        ['title' => 'App Protection Policies', 'desc' => 'App Protection Policies in Microsoft 365, managed through Microsoft Intune, secure corporate data within apps on both managed and unmanaged devices.'],
        ['title' => 'Azure Sensitivity Labels', 'desc' => 'Azure Sensitivity Labels, part of Microsoft Purview Information Protection, empower organizations to classify, label, and protect sensitive data across Microsoft 365.'],
        ['title' => 'Windows Defender Application Control (WDAC)', 'desc' => 'Windows Defender Application Control (WDAC) is a powerful security feature in Windows that helps prevent unauthorized or malicious code from running on Windows devices.'],
        ['title' => 'Microsoft Intune', 'desc' => 'Microsoft Intune is a cloud-based endpoint management solution that enables organizations to securely manage devices, apps, and user access across Windows, macOS, iOS, and Android platforms.'],
      ];
      @endphp
      @foreach($features as $feature)
      <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <div class="px-6 py-5">
          <h3 class="font-medium text-slate-900">{{ $feature['title'] }}</h3>
          <p class="mt-2 text-sm text-slate-600 leading-relaxed text-justify">{{ $feature['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-16 bg-slate-50" id="useful-links">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 reveal reveal-fade-up">
      <h2 class="text-3xl font-bold text-blue-900">Useful Links</h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      @php
      $links = [
        ['title' => 'ACSC Essential Eight Overview', 'desc' => 'Official ACSC documentation explaining the Essential Eight mitigation strategies and maturity levels.', 'href' => 'https://www.cyber.gov.au/resources-business-and-government/essential-cyber-security/essential-eight'],
        ['title' => 'Microsoft Essential Eight on Microsoft Learn', 'desc' => "Microsoft's official documentation mapping the Essential Eight to Microsoft 365 controls.", 'href' => 'https://learn.microsoft.com/en-us/compliance/anz/e8-overview'],
        ['title' => 'Microsoft 365 Cyber Security', 'desc' => 'Learn how Microsoft 365 provides comprehensive cybersecurity features to protect your business.', 'href' => '#'],
        ['title' => 'Microsoft Secure Score', 'desc' => "Measure your organisation's security posture with Microsoft Secure Score.", 'href' => 'https://www.microsoft.com/en-us/security/business/security-101/what-is-microsoft-secure-score'],
      ];
      @endphp
      @foreach($links as $link)
      <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-sm bg-white transition-all">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $link['title'] }}</h3>
        <p class="text-slate-600 text-sm mb-4">{{ $link['desc'] }}</p>
        <a href="{{ $link['href'] }}" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white" id="faq">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 reveal reveal-fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-900">Frequently Asked Questions</h2>
      <p class="mt-4 text-lg text-slate-600">Common questions about Microsoft 365 and ACSC Essential Eight compliance</p>
    </div>
    <div class="space-y-4">
      @php
      $faqs = [
        ['q' => 'What is the ACSC Essential Eight?', 'a' => 'The ACSC Essential Eight is a cybersecurity framework developed by the Bangladeshi Cyber Security Centre (ACSC). It outlines eight mitigation strategies designed to help organisations protect against cyber threats, including application control, patching, macro settings, application hardening, administrative privilege restriction, OS patching, multi-factor authentication, and regular backups.'],
        ['q' => 'How does Microsoft 365 help with Essential Eight compliance?', 'a' => 'Microsoft 365 provides built-in tools and features that address each of the eight strategies. For example, Windows Defender Application Control (WDAC) handles application control, Microsoft Intune manages patching and device compliance, Entra ID provides MFA and conditional access, and OneDrive/SharePoint offer backup capabilities.'],
        ['q' => 'What is Windows Defender Application Control (WDAC)?', 'a' => 'WDAC is a security feature in Windows that helps prevent unauthorized or malicious code from running on devices. It enforces a strict application control policy by allowing only trusted, signed, and approved applications to execute.'],
        ['q' => 'How does Multi-Factor Authentication (MFA) help with Essential Eight compliance?', 'a' => 'MFA is one of the eight Essential Eight strategies. Microsoft 365 provides MFA through Entra ID, supporting various authentication methods including Microsoft Authenticator, SMS codes, phone calls, and FIDO2 security keys.'],
        ['q' => 'What backup options are available in Microsoft 365?', 'a' => 'Microsoft 365 provides built-in data protection through OneDrive, SharePoint Online, and Exchange Online with versioning, recycle bins, and retention policies. For enhanced protection, third-party solutions like Veeam, AvePoint, and Commvault offer automated backups.'],
        ['q' => 'What is the Zero Trust Framework in Microsoft 365?', 'a' => "The Zero Trust Framework in Microsoft 365 follows the 'never trust, always verify' principle. It uses MFA, Conditional Access Policies, Role-Based Access Control (RBAC), Privileged Identity Management (PIM), and Microsoft Sentinel to secure identities, devices, and data."],
      ];
      @endphp
      @foreach($faqs as $faq)
      <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <div class="px-6 py-5">
          <h3 class="font-medium text-slate-900">{{ $faq['q'] }}</h3>
          <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $faq['a'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('components.cta')
@endsection
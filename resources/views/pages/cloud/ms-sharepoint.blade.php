@extends('layouts.app')

@section('title', 'SharePoint | Bismillah Computer & Technology')
@section('description', 'Microsoft SharePoint is a powerful cloud-based document management and collaboration platform within Microsoft 365.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft SharePoint</h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft SharePoint is a powerful cloud-based document management and collaboration platform within Microsoft 365. It enables organisations to securely store, organise, share, and manage information from anywhere — while maintaining full control over permissions, compliance, and governance.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft SharePoint" loading="lazy" class="rounded-lg" src="/images/cloud/microsoft-solutions/sharepoint/sharepoint.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ================= OVERVIEW SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/sharepoint/point.png" alt="Microsoft SharePoint" class="object-cover" loading="lazy" />
            </div>
            <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft SharePoint Online</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is SharePoint?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft SharePoint is a powerful cloud-based document management system and collaboration platform within Microsoft 365, designed to help organisations securely store, organise, and share business information. As a modern replacement for traditional file servers, Microsoft SharePoint Online centralises documents into structured libraries with advanced version control, metadata tagging, and role-based permissions, ensuring teams always work from a single source of truth.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">With built-in enterprise-grade security, compliance controls, and data governance features, SharePoint helps protect sensitive information while supporting regulatory requirements. Businesses can create secure intranet portals, communication sites, and departmental hubs to improve internal collaboration and knowledge sharing.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Accessible from any device, SharePoint enables remote work, hybrid workforce collaboration, and seamless integration with Microsoft Teams, OneDrive, and Microsoft 365 apps. By combining secure file storage with real-time collaboration and workflow automation, Microsoft SharePoint enhances productivity, strengthens data security, and delivers scalable cloud document management for modern organisations.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
            </div>
        </div>
    </section>

    {{-- ================= KEY FEATURES ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features of Microsoft SharePoint</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Everything you need for secure document management and team collaboration</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @php
                    $features = [
                        ['title' => 'Centralised Document Management', 'desc' => 'Securely store and organise files in structured libraries with version control, metadata tagging, and intelligent search, ensuring teams always work from the most up-to-date document version.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />'],
                        ['title' => 'Advanced Security & Permissions', 'desc' => 'Protect sensitive information using role-based access controls, encryption, conditional access policies, and compliance settings to maintain strong data security.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />'],
                        ['title' => 'Real-Time Collaboration', 'desc' => 'Multiple users can work on the same document simultaneously with real-time updates, enhancing team collaboration and reducing version conflicts.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />'],
                        ['title' => 'Modern Intranet & Communication Sites', 'desc' => 'Create engaging intranet portals and departmental hubs to improve internal communication, knowledge sharing, and employee engagement across the organisation.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />'],
                        ['title' => 'Workflow Automation', 'desc' => 'Streamline approvals and business processes through Power Automate integration, reducing manual administrative effort and improving operational efficiency.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />'],
                        ['title' => 'Intelligent Search & Content Discovery', 'desc' => 'Quickly locate documents and information with powerful Microsoft Search integration across your organisation.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />'],
                        ['title' => 'Compliance & Data Governance', 'desc' => 'Apply retention policies, audit logs, and governance controls to meet regulatory and industry compliance requirements.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />'],
                        ['title' => 'Seamless Microsoft 365 Integration', 'desc' => 'Integrates with Microsoft Teams, OneDrive, Outlook, and the wider Microsoft 365 ecosystem for unified collaboration.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />'],
                        ['title' => 'Version History & Recovery', 'desc' => 'Automatically track document changes and restore previous versions quickly if edits are made in error, ensuring data integrity.', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />'],
                    ];
                @endphp
                @foreach($features as $i => $feature)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full" style="animation-delay: {{ $i * 0.05 }}s">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-6 text-blue-600">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 text-center mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= USEFUL LINKS ================= --}}
    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Useful Links</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @php
                    $usefulLinks = [
                        ['title' => 'Plan your Intranet', 'description' => 'Planning a SharePoint Intranet involves designing a central digital workspace where employees can access company news, resources, and collaboration tools. This guide explains how to structure sites, organise content, and implement governance so your organisation\'s intranet is easy to navigate, scalable, and aligned with business goals.', 'href' => 'https://learn.microsoft.com/en-us/sharepoint/plan-intranet'],
                        ['title' => 'Intranet Examples', 'description' => 'SharePoint Intranet Examples (Out-of-the-Box) showcases real examples of intranet portals built using the native features of SharePoint Online. The article explains how organisations can create effective company intranets using built-in site templates, web parts, and communication sites — without needing custom development or third-party tools.', 'href' => 'https://sharepointmaven.com/sharepoint-intranet-examples-available-out-of-the-box/'],
                        ['title' => 'Information Architecture', 'description' => 'SharePoint Information Architecture (Modern Experience) explains how to organise and structure content within SharePoint so users can easily find information and complete their work. It covers key elements such as navigation, site hierarchy, metadata, search, and hub sites to ensure content is accessible, well-governed, and delivered to the right people across your organisation.', 'href' => 'https://learn.microsoft.com/en-us/sharepoint/information-architecture-modern-experience'],
                    ];
                @endphp
                @foreach($usefulLinks as $link)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $link['title'] }}</h3>
                    <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                    <a href="{{ $link['href'] }}" target="_blank" class="text-blue-600 font-semibold text-sm hover:underline">Find Out More &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= BENEFITS SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50" id="benefits">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Using Microsoft SharePoint</h2>
            <p class="text-slate-600 text-center max-w-2xl mx-auto mb-12">Why businesses choose SharePoint for document management and collaboration</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $benefits = [
                        ['title' => 'Centralised Document Management', 'desc' => 'Securely store and organise files in structured libraries with version control, metadata tagging, and intelligent search, ensuring teams always work from the most up-to-date document version.'],
                        ['title' => 'Advanced Security & Permissions', 'desc' => 'Protect sensitive information using role-based access controls, encryption, conditional access policies, and compliance settings to maintain strong data security.'],
                        ['title' => 'Real-Time Collaboration', 'desc' => 'Teams can co-author documents simultaneously, with real-time updates, which enhances collaboration and reduces email attachments and version conflicts.'],
                        ['title' => 'Modern Intranet & Communication Sites', 'desc' => 'Create engaging intranet portals and departmental hubs to improve internal communication, knowledge sharing, and employee engagement across the organisation.'],
                        ['title' => 'Workflow Automation', 'desc' => 'Streamline approvals and business processes through Power Automate integration, reducing manual administrative effort and improving operational efficiency.'],
                        ['title' => 'Intelligent Search & Content Discovery', 'desc' => 'Quickly locate documents and information with powerful Microsoft Search integration across your organisation.'],
                        ['title' => 'Compliance & Data Governance', 'desc' => 'Apply retention policies, audit logs, and governance controls to meet regulatory and industry compliance requirements.'],
                        ['title' => 'Seamless Microsoft 365 Integration', 'desc' => 'Integrates with Microsoft Teams, OneDrive, Outlook, and the wider Microsoft 365 ecosystem for unified collaboration and productivity.'],
                    ];
                @endphp
                @foreach($benefits as $benefit)
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $benefit['title'] }}</h3>
                    <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= FAQ SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600 text-center mb-12">Common questions about Microsoft SharePoint</p>
            <div class="max-w-3xl mx-auto space-y-4">
                @php
                    $faqs = [
                        ['question' => 'What is Microsoft SharePoint used for?', 'answer' => 'Microsoft SharePoint is used for secure document management, team collaboration, and intranet development. It allows businesses to centralise files, control permissions, and improve internal communication.'],
                        ['question' => 'What is the difference between SharePoint and OneDrive?', 'answer' => 'SharePoint is designed for team and organisational document management with structured libraries, while OneDrive is focused on personal file storage and individual user workspace.'],
                        ['question' => 'Is SharePoint secure for business use?', 'answer' => 'Yes. SharePoint includes encryption, MFA, Conditional Access, role-based permissions, and advanced threat protection to keep business data secure.'],
                        ['question' => 'Can SharePoint be used as an intranet?', 'answer' => 'Yes. SharePoint is widely used to build modern intranet portals, communication sites, and departmental hubs for internal communication and knowledge sharing.'],
                        ['question' => 'Does SharePoint integrate with Microsoft Teams?', 'answer' => 'Yes. SharePoint seamlessly integrates with Microsoft Teams, OneDrive, and Outlook, providing a unified collaboration environment across the Microsoft 365 ecosystem.'],
                    ];
                @endphp
                @foreach($faqs as $index => $faq)
                <div class="border-2 border-blue-100 rounded-xl overflow-hidden transition-all relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="toggleFaq({{ $index }})" class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                        <span id="faq-icon-{{ $index }}" class="text-2xl text-blue-600 font-semibold shrink-0 transition-transform duration-300 faq-icon">+</span>
                    </button>
                    <div id="faq-answer-{{ $index }}" class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed text-justify">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('head')
<style>
    .faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
    .faq-answer.open {
        grid-template-rows: 1fr;
        opacity: 1;
    }
    .faq-icon {
        transition: transform 0.3s ease-in-out;
    }
    .faq-icon.rotated {
        transform: rotate(45deg);
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleFaq(index) {
        const answer = document.getElementById('faq-answer-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        const isOpen = answer.classList.contains('open');

        document.querySelectorAll('.faq-answer').forEach(function(el) {
            el.classList.remove('open');
        });
        document.querySelectorAll('.faq-icon').forEach(function(el) {
            el.classList.remove('rotated');
        });

        if (!isOpen) {
            answer.classList.add('open');
            icon.classList.add('rotated');
        }
    }
</script>
@endpush

@extends('layouts.app')

@section('title', 'Microsoft Solutions | Bismillah Computer & Technology')
@section('description',
    'Maximize your productivity with our comprehensive Microsoft 365 and Azure cloud solutions. As certified Microsoft partners, we deliver tailored enterprise solutions.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft
                    Solutions</h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Maximize your
                    productivity with our comprehensive Microsoft 365 and Azure cloud solutions. As certified Microsoft
                    partners, we deliver tailored enterprise solutions.</p>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Solutions" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/micrsoft-365/microsoft-365.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-20 bg-slate-50" id="solutions">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900">Microsoft Solutions for your business</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @php
                    $solutions = [
                        [
                            'title' => 'Microsoft 365',
                            'img' => '/images/cloud/microsoft-solutions/micrsoft-365/microsoft-365.png',
                            'desc' => 'Complete productivity suite with Word, Excel, Teams, and cloud storage for seamless collaboration.',
                            'route' => 'ms-microsoft-365',
                        ],
                        [
                            'title' => 'Windows 365',
                            'img' => '/images/cloud/microsoft-solutions/windows-365/windows-365.png',
                            'desc' => 'Stream your personalised Windows experience to any device with a secure cloud-based PC.',
                            'route' => 'ms-windows-365',
                        ],
                        [
                            'title' => 'Microsoft Azure',
                            'img' => '/images/cloud/microsoft-solutions/azure/azure.png',
                            'desc' => 'Scalable cloud computing services for building, deploying, and managing applications globally.',
                            'route' => 'ms-azure',
                        ],
                        [
                            'title' => 'Microsoft Teams',
                            'img' => '/images/cloud/microsoft-solutions/teams/teams.png',
                            'desc' => 'Chat, video meetings, file sharing, and app integrations all in one unified platform.',
                            'route' => 'ms-teams',
                        ],
                        [
                            'title' => 'Microsoft Defender',
                            'img' => '/images/cloud/microsoft-solutions/defender/defender.png',
                            'desc' => 'Advanced threat protection for endpoints, email, and cloud applications with real-time monitoring.',
                            'route' => 'ms-defender',
                        ],
                        [
                            'title' => 'Exchange Online',
                            'img' => '/images/cloud/microsoft-solutions/exchange-online/exchange.png',
                            'desc' => 'Enterprise-class email and calendar with 50GB mailbox, anti-spam protection, and mobile access.',
                            'route' => 'ms-exchange-online',
                        ],
                        [
                            'title' => 'OneDrive',
                            'img' => '/images/cloud/microsoft-solutions/onedrive/onedrive.png',
                            'desc' => '1TB of cloud storage per user with file sharing, sync across devices, and version history.',
                            'route' => 'ms-onedrive',
                        ],
                        [
                            'title' => 'SharePoint',
                            'img' => '/images/cloud/microsoft-solutions/sharepoint/sharepoint.png',
                            'desc' => 'Team sites, document management, workflows, and intranet portals for seamless collaboration.',
                            'route' => 'ms-sharepoint',
                        ],
                        [
                            'title' => 'Microsoft Copilot',
                            'img' => '/images/cloud/microsoft-solutions/copilot/copilot.png',
                            'desc' => 'AI-powered assistant that helps you write, analyze data, create presentations, and automate tasks.',
                            'route' => 'ms-copilot',
                        ],
                        [
                            'title' => 'Microsoft Intune',
                            'img' => '/images/cloud/microsoft-solutions/intune/intune.svg',
                            'desc' => 'Cloud-based endpoint management for mobile devices, laptops, and desktops across your organization.',
                            'route' => 'ms-intune',
                        ],
                        [
                            'title' => 'Microsoft Entra ID',
                            'img' => '/images/cloud/microsoft-solutions/entra-id/entra-id.svg',
                            'desc' => 'Identity and access management with single sign-on, MFA, and conditional access policies.',
                            'route' => 'ms-entra-id',
                        ],
                        [
                            'title' => 'Conditional Access',
                            'img' => '/images/cloud/microsoft-solutions/conditional-access/conditional-access.png',
                            'desc' => 'Identity-driven access policies that enforce zero trust security for your organization.',
                            'route' => 'ms-conditional-access',
                        ],
                    ];
                @endphp
                @foreach ($solutions as $solution)
                    <a href="{{ route($solution['route']) }}"
                        class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                        <div class="relative h-48 w-full overflow-hidden bg-slate-50 flex items-center justify-center p-6">
                            <img src="{{ $solution['img'] }}" alt="{{ $solution['title'] }}"
                                class="object-contain max-h-full transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $solution['title'] }}</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">{{ $solution['desc'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

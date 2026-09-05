<!DOCTYPE html>
<html lang="en" class="h-full antialiased">

<head>
    <script>
        document.documentElement.classList.add('js-reveal');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- SEO Meta --}}
    <title>@yield('title', 'Bismillah Computer & Technology | IT Solutions, Cloud, Cyber Security & Telecom')</title>
    <meta name="description" content="@yield('description', 'Bismillah Computer & Technology (BCT) provides enterprise IT solutions, cloud services, cyber security, voice & internet solutions in Bangladesh.')">
    <meta name="keywords" content="@yield('keywords', 'IT solutions, cloud services, cyber security, managed IT, voice solutions, internet, BCT, web development, Bangladesh, BCT')">
    <meta name="author" content="Bismillah Computer & Technology">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical', url('/'))">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Bismillah Computer & Technology | IT Solutions')">
    <meta property="og:description" content="@yield('og_description', 'Enterprise IT solutions, cloud services, cyber security, voice & internet solutions in Bangladesh.')">
    <meta property="og:image" content="@yield('og_image', asset('/images/og-image.png'))">
    <meta property="og:url" content="@yield('og_url', url('/'))">
    <meta property="og:site_name" content="Bismillah Computer & Technology">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Bismillah Computer & Technology | IT Solutions')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Enterprise IT solutions, cloud services, cyber security, voice & internet solutions in Bangladesh.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('/images/og-image.png'))">

    {{-- Schema.org JSON-LD --}}
    @php
        $orgJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Bismillah Computer & Technology',
            'url' => url('/'),
            'logo' => asset('/logo.svg'),
            'description' =>
                'Enterprise IT solutions, cloud services, cyber security, voice & internet solutions in Bangladesh.',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+880-1972-721388',
                'contactType' => 'customer service',
                'email' => 'support@bct.com.bd',
            ],
            'sameAs' => [
                'https://www.facebook.com/bct.com.bd',
                'https://twitter.com/bct.com.bd',
                'https://www.linkedin.com/company/bct.com.bd',
                'https://www.instagram.com/bct.com.bd',
            ],
        ];
        $siteJson = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Bismillah Computer & Technology',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => url('/?search={search_term_string}'),
                'query-input' => 'required name=search_term_string',
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($orgJson) !!}</script>
    <script type="application/ld+json">{!! json_encode($siteJson) !!}</script>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

    {{-- External CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .mega-panel {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.15s ease-in-out;
        }

        .mega-panel.hidden {
            display: none;
        }

        .mega-panel:not(.hidden) {
            pointer-events: auto;
        }

        .mega-category {
            display: none;
        }

        [data-mega] {
            position: relative;
            padding-bottom: 4px !important;
        }

        [data-mega]::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--color-brand-blue);
            transition: width 0.2s ease-in-out;
        }

        [data-mega]:hover::after,
        [data-mega].nav-active::after {
            width: 100%;
        }

        [data-mega].nav-active {
            color: var(--color-brand-hover) !important;
        }
    </style>

    @stack('head')
</head>

<body class="h-full font-sans antialiased bg-white text-slate-900">

    @php
        $megaMenus = [
            'IT' => [
                [
                    'title' => 'Cyber Security',
                    'href' => route('it-support.cyber-security'),
                    'desc' =>
                        'Advanced Endpoint security, email security, Bangladeshi Cyber Security Centre (ASCS) standards and recommendations.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Cloud & Network Security',
                            'href' => route('it-support.cs-cloud-network'),
                            'image' => '/images/navbar/it/network.svg',
                        ],
                        [
                            'label' => 'EndPoint Security',
                            'href' => route('it-support.cs-endpoint'),
                            'image' => '/images/navbar/it/computer.svg',
                        ],
                        [
                            'label' => 'Essential Eight',
                            'href' => route('it-support.cs-essential-eight'),
                            'image' => '/images/navbar/it/internet-security.svg',
                        ],
                        [
                            'label' => 'Incident Response',
                            'href' => route('it-support.cs-incident-response'),
                            'image' => '/images/navbar/it/test.svg',
                        ],
                        [
                            'label' => 'Security Awareness Training',
                            'href' => route('it-support.cs-security-awareness'),
                            'image' => '/images/navbar/it/leadership.svg',
                        ],
                        [
                            'label' => 'Zero Trust Framework',
                            'href' => route('it-support.cs-zero-trust'),
                            'image' => '/images/navbar/it/requirement.svg',
                        ],
                    ],
                ],
                [
                    'title' => 'Servers + Networking',
                    'href' => route('it-support.servers-networking'),
                    'desc' => 'Network and server infrastructure deployment, configuration and management.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Network Consulting and Design',
                            'href' => '#',
                            'image' => '/images/navbar/it/networking.svg',
                        ],
                        ['label' => 'Network Installation', 'href' => '#', 'image' => '/images/navbar/it/net.svg'],
                        ['label' => 'Wi-Fi Networking', 'href' => '#', 'image' => '/images/navbar/it/router.svg'],
                        ['label' => 'Network Security', 'href' => '#', 'image' => '/images/navbar/it/credibility.svg'],
                        ['label' => 'VPN Solutions', 'href' => '#', 'image' => '/images/navbar/it/vpn.svg'],
                        ['label' => 'Windows Server', 'href' => '#', 'image' => '/images/navbar/it/server.svg'],
                    ],
                ],
                [
                    'title' => 'Managed IT',
                    'href' => route('it-support.managed-it'),
                    'desc' => 'Maintaining and enhancing an organisation\'s IT Infrastructure.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path><path d="m3.3 7 8.7 5 8.7-5"></path><path d="M12 22V12"></path></svg>',
                    'links' => [
                        ['label' => 'Managed IT Services', 'href' => '#', 'image' => '/images/navbar/it/corporate.svg'],
                        ['label' => 'Procurement', 'href' => '#', 'image' => '/images/navbar/it/supply-chain.svg'],
                        ['label' => 'Help Desk Support', 'href' => '#', 'image' => '/images/navbar/it/leadership.svg'],
                        ['label' => 'Data Management', 'href' => '#', 'image' => '/images/navbar/it/development.svg'],
                        ['label' => 'IT Consulting', 'href' => '#', 'image' => '/images/navbar/it/online-meeting.svg'],
                        ['label' => 'IT Outsourcing', 'href' => '#', 'image' => '/images/navbar/it/teamwork.svg'],
                    ],
                ],
                [
                    'title' => 'Device Repair',
                    'href' => route('it-support.device-repair'),
                    'desc' => 'Repairs for Laptops, Desktop, Tablets, Mobile Phones and more.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>',
                    'links' => [
                        [
                            'label' => 'Virus/Malware Removal',
                            'href' => '#',
                            'image' => '/images/navbar/it/computer.svg',
                        ],
                        ['label' => 'Data Recovery', 'href' => '#', 'image' => '/images/navbar/it/recovery.svg'],
                        ['label' => 'Upgrades', 'href' => '#', 'image' => '/images/navbar/it/supply-chain.svg'],
                        [
                            'label' => 'PC & Laptop Repairs',
                            'href' => '#',
                            'image' => '/images/navbar/it/cloud-computing.svg',
                        ],
                    ],
                ],
            ],
            'WEB' => [
                [
                    'title' => 'Development',
                    'href' => route('web.development'),
                    'desc' => 'Designed and developed for your business.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><circle cx="12" cy="12" r="10"></circle><line x1="2" x2="22" y1="12" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
                    'links' => [],
                ],
                [
                    'title' => 'Hosting',
                    'href' => route('web.hosting'),
                    'desc' => 'Domain and web hosting services.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg>',
                    'links' => [],
                ],
                [
                    'title' => 'SEO',
                    'href' => route('web.seo'),
                    'desc' => 'Reach your target audience.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>',
                    'links' => [],
                ],
                [
                    'title' => 'eCommerce',
                    'href' => route('web.ecommerce'),
                    'desc' => 'Get started on your online business.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>',
                    'links' => [],
                ],
                [
                    'title' => 'Portfolio',
                    'href' => route('web.portfolio'),
                    'desc' => 'View our range of websites.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect width="7" height="7" x="3" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="14" rx="1"></viewBox></svg>',
                    'links' => [],
                ],
            ],
            'INTERNET' => [
                [
                    'title' => 'BCT',
                    'href' => '',
                    'desc' =>
                        'Access Bangladesh\'s National Broadband Network (NBN) to delivery quality internet to your premises.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Free Fibre Upgrade',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 1 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 1 11 14z"></path></svg>',
                        ],
                        [
                            'label' => 'Home and Small Business',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>',
                        ],
                        [
                            'label' => 'Business',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Enterprise Fibre',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Fixed Wireless (FW)',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path></svg>',
                        ],
                        [
                            'label' => 'Sky Muster',
                            'href' => '',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Cel-Fi (4G/5G Boosters)',
                    'href' => route('internet.cel-fi'),
                    'desc' =>
                        'Cel-Fi products are the first carrier-class cellular coverage solution for industry leading signal gain.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"></path><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"></path><circle cx="12" cy="12" r="2"></circle><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"></path><path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"></path></svg>',
                    'links' => [],
                ],
                [
                    'title' => 'StarLink',
                    'href' => route('internet.starlink'),
                    'desc' =>
                        'Starlink offers global broadband coverage to underserved and remote areas via satellite.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><circle cx="12" cy="12" r="10"></circle><line x1="2" x2="22" y1="12" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
                    'links' => [],
                ],
                [
                    'title' => '4G/5G Internet',
                    'href' => route('internet.4g-5g'),
                    'desc' => 'Ensure a seamless transition in the event of any disruptions by using a 4G/5G backup.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                    'links' => [],
                ],
            ],
            'CLOUD' => [
                [
                    'title' => 'Microsoft Solutions',
                    'href' => route('cloud.microsoft-solutions'),
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>',
                    'links' => [
                        [
                            'label' => 'Microsoft 365',
                            'href' => route('cloud.ms-microsoft-365'),
                            'image' => '/images/navbar/cloud/office-365.png',
                        ],
                        [
                            'label' => 'OneDrive',
                            'href' => route('cloud.ms-onedrive'),
                            'image' => '/images/navbar/cloud/onedrive.png',
                        ],
                        [
                            'label' => 'SharePoint',
                            'href' => route('cloud.ms-sharepoint'),
                            'image' => '/images/navbar/cloud/sharepoint.png',
                        ],
                        [
                            'label' => 'Microsoft Defender',
                            'href' => route('cloud.ms-defender'),
                            'image' => '/images/navbar/cloud/defender.png',
                        ],
                        [
                            'label' => 'Exchange Online',
                            'href' => route('cloud.ms-exchange-online'),
                            'image' => '/images/navbar/cloud/exchange.png',
                        ],
                        [
                            'label' => 'Windows 365',
                            'href' => route('cloud.ms-windows-365'),
                            'image' => '/images/navbar/cloud/win-365.png',
                        ],
                    ],
                ],
                [
                    'title' => '',
                    'href' => '',
                    'desc' => '',
                    'icon' => '',
                    'links' => [
                        [
                            'label' => 'Conditional Access',
                            'href' => route('cloud.ms-conditional-access'),
                            'image' => '/images/navbar/cloud/conditional-access.png',
                        ],
                        [
                            'label' => 'Copilot',
                            'href' => route('cloud.ms-copilot'),
                            'image' => '/images/navbar/cloud/copilot.png',
                        ],
                        [
                            'label' => 'Teams',
                            'href' => route('cloud.ms-teams'),
                            'image' => '/images/navbar/cloud/teams.png',
                        ],
                        [
                            'label' => 'Microsoft Intune',
                            'href' => route('cloud.ms-intune'),
                            'image' => '/images/navbar/cloud/intune.png',
                        ],
                        [
                            'label' => 'Entra ID',
                            'href' => route('cloud.ms-entra-id'),
                            'image' => '/images/navbar/cloud/entra.png',
                        ],
                        [
                            'label' => 'Microsoft Azure',
                            'href' => route('cloud.ms-azure'),
                            'image' => '/images/navbar/cloud/azure.png',
                        ],
                    ],
                ],
                [
                    'title' => 'Cyber Security',
                    'href' => route('cloud.cyber-security'),
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>',
                    'links' => [
                        [
                            'label' => 'ACSC Essential Eight',
                            'href' => route('cloud.cs-essential-eight'),
                            'image' => '/images/navbar/cloud/acsc.svg',
                        ],
                        [
                            'label' => 'DISP',
                            'href' => route('cloud.cs-disp'),
                            'image' => '/images/navbar/cloud/disp.svg',
                        ],
                        [
                            'label' => 'Microsoft Secure Score',
                            'href' => route('cloud.cs-secure-score'),
                            'image' => '/images/navbar/cloud/secure.png',
                        ],
                        [
                            'label' => 'Backup & Recovery',
                            'href' => route('cloud.cs-backup-recovery'),
                            'image' => '/images/navbar/cloud/backup.png',
                        ],
                        [
                            'label' => 'Microsoft 365 Cyber Security',
                            'href' => route('cloud.cs-m365-security'),
                            'image' => '/images/navbar/cloud/cyber.png',
                        ],
                    ],
                ],
                [
                    'title' => 'Services',
                    'href' => route('cloud.services'),
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Modern Workplace',
                            'href' => route('cloud.service-modern-workplace'),
                            'image' => '/images/navbar/cloud/workplace.png',
                        ],
                        [
                            'label' => 'Email Signature Management',
                            'href' => route('cloud.service-email-signature'),
                            'image' => '/images/navbar/cloud/signature.png',
                        ],
                    ],
                ],
            ],
            'VOICE' => [
                [
                    'title' => 'Phone Systems',
                    'href' => '',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><path d="M14.5 2c.5 2.5 2 4 4 6.5"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Small Business',
                            'href' => route('voice.ps-small-business'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                        ],
                        [
                            'label' => 'Medium Business',
                            'href' => route('voice.ps-medium-business'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Enterprise Business',
                            'href' => route('voice.ps-enterprise-business'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Brands',
                    'href' => route('voice.brands'),
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Vodia (Cloud System)',
                            'href' => route('voice.brand-vodia'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                        ],
                        [
                            'label' => 'Grandstream',
                            'href' => route('voice.brand-grandstream'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                        ],
                        [
                            'label' => 'Avaya IP Office',
                            'href' => route('voice.brand-avaya'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                        ],
                        [
                            'label' => 'LG iPECS',
                            'href' => route('voice.brand-lg-ipecs'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Hardware',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M12 18a4 4 0 0 0-4-4H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-4a4 4 0 0 0-4 4z"></path><path d="M12 18v4"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Headsets',
                            'href' => route('voice.hardware-headsets'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>',
                        ],
                        [
                            'label' => 'Cordless Phones',
                            'href' => route('voice.hardware-cordless'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect x="5" y="2" width="14" height="20" rx="7"></rect><line x1="12" x2="12" y1="18" y2="18.01"></line></svg>',
                        ],
                        [
                            'label' => 'Cel-Fi 4G Repeater',
                            'href' => route('voice.hardware-celfi'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"></path><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"></path><circle cx="12" cy="12" r="2"></circle><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"></path><path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Features',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path><path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Unified Comms',
                            'href' => route('voice.feature-unified-comms'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line></svg>',
                        ],
                        [
                            'label' => 'Conferencing Solutions',
                            'href' => route('voice.feature-conferencing'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="m22 8-6 4 6 4V8Z"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg>',
                        ],
                        [
                            'label' => 'Hold Music',
                            'href' => route('voice.feature-hold-music'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>',
                        ],
                        [
                            'label' => 'Microsoft Teams',
                            'href' => route('voice.feature-microsoft-teams'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                        ],
                        [
                            'label' => 'More Features',
                            'href' => route('voice.feature-more-features'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>',
                        ],
                    ],
                ],
            ],
            'INDUSTRIES' => [
                [
                    'title' => 'Healthcare & Care Services',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Community/aged care',
                            'href' => route('industries.aged-care'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>',
                        ],
                        [
                            'label' => 'Medical and fertility',
                            'href' => route('industries.medical'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2c0 1.1.9 2 2 2h5v5c0 .6.4 1 1 1h2a1 1 0 0 0 1-1v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2h-2z"></path></svg>',
                        ],
                        [
                            'label' => 'IT Support for Veterinary',
                            'href' => route('industries.veterinary'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 7h.01"></path><path d="M3.4 18H12a8 8 0 0 0 8-8V7a4 4 0 0 0-7.28-2.3L2 20"></path><path d="m20 7 2 .5-2 .5"></path><path d="M10 18v3"></path><path d="M14 17.75V21"></path><path d="M7 18a6 6 0 0 0 3.84-10.61"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Corporate & Financial Services',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M10 18v-7"></path><path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="M3 22h18"></path><path d="M6 18v-7"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Professional Services',
                            'href' => route('industries.professional-services'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="16" y="14" width="6" height="6" rx="1"></rect></svg>',
                        ],
                        [
                            'label' => 'Accounting and financial',
                            'href' => route('industries.accountants'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M10 18v-7"></path><path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="M3 22h18"></path><path d="M6 18v-7"></path></svg>',
                        ],
                        [
                            'label' => 'Government and non-profit',
                            'href' => route('industries.non-profit'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Property, Trade & Logistics',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Freight and logistics',
                            'href' => route('industries.transportation'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg>',
                        ],
                        [
                            'label' => 'Real estate and storage',
                            'href' => route('industries.real-estate'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Construction and projects',
                            'href' => route('industries.construction'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-on="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8L8 13V8L2 13Z"></path><path d="M17 18h1"></path><path d="M12 18h1"></path><path d="M7 18h1"></path></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'Science, Engineering & Primary',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><path d="M15 2v2"></path><path d="M15 20v2"></path><path d="M2 15h2"></path><path d="M2 9h2"></path><path d="M20 15h2"></path><path d="M20 9h2"></path><path d="M9 2v2"></path><path d="M9 20v2"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Agriculture and microbials',
                            'href' => route('industries.agriculture'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M7 20h10"></path><path d="M10 20c5.5-2.5.8-6.4 3-10"></path><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"></path><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"></path></svg>',
                        ],
                        [
                            'label' => 'Engineering',
                            'href' => route('industries.engineering'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>',
                        ],
                    ],
                ],
            ],
            'PAGES' => [
                [
                    'title' => 'Company',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg>',
                    'links' => [
                        [
                            'label' => 'About Us',
                            'href' => route('pages.about'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Services',
                            'href' => route('pages.services'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>',
                        ],
                        [
                            'label' => 'Projects',
                            'href' => route('pages.projects'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>',
                        ],
                        [
                            'label' => 'Case Studies',
                            'href' => route('pages.case-studies'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="16" y="14" width="6" height="6" rx="1"></rect></svg>',
                        ],
                    ],
                ],
                [
                    'title' => 'General',
                    'href' => '#',
                    'desc' => '',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>',
                    'links' => [
                        [
                            'label' => 'Pricing Plans',
                            'href' => route('pages.pricing'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>',
                        ],
                        [
                            'label' => 'Teams',
                            'href' => route('pages.team'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                        ],
                        [
                            'label' => 'FAQs',
                            'href' => route('pages.faq'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>',
                        ],
                        [
                            'label' => 'Gallery',
                            'href' => route('pages.gallery'),
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>',
                        ],
                    ],
                ],
            ],
            'CONTACT' => [
                [
                    'title' => 'Get In Touch',
                    'href' => route('contact'),
                    'desc' => 'Reach out to us for IT solutions, cloud services, and support.',
                    'icon' =>
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 stroke-[2.5]"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path></svg>',
                    'links' => [
                        [
                            'label' => 'Phone: +880 1972-721388',
                            'href' => 'tel:+8801972721388',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
                        ],
                        [
                            'label' => 'Email: support@bct.com.bd',
                            'href' => 'mailto:support@bct.com.bd',
                            'icon' =>
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-2 shrink-0 text-brand-blue"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path></svg>',
                        ],
                    ],
                ],
            ],
        ];
    @endphp

    {{-- ═══════════ NAVBAR ═══════════ --}}
    <div
        class="nav-enter w-full bg-white border-b border-brand-subtle-border font-sans selection:bg-brand-blue selection:text-white sticky top-0 z-50 transition-[translate] duration-300 translate-y-0">
        <div class="mx-auto px-2 max-w-365 relative">
            <div class="flex items-center justify-between py-2">
                {{-- Logo --}}
                <div class="flex flex-col items-start shrink-0 relative">
                    <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                        <img src="/logo.svg" alt="Logo" width="180" height="70"
                            style="width:auto;height:auto">
                    </a>
                </div>

                {{-- Desktop Nav --}}
                <nav class="hidden lg:flex items-center gap-4 2xl:gap-6" id="desktopNav">
                    {{-- IT --}}
                    <a href="{{ route('it-support') }}" data-mega="IT"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                                <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                                <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                                <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path>
                                <path d="M12 12V8"></path>
                            </svg>
                            <span>IT</span>
                        </span>
                    </a>
                    {{-- WEB --}}
                    <a href="{{ route('web') }}" data-mega="WEB"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path d="m16 18 6-6-6-6"></path>
                                <path d="m8 6-6 6 6 6"></path>
                            </svg>
                            <span>WEB</span>
                        </span>
                    </a>
                    {{-- INTERNET --}}
                    <a href="{{ route('internet') }}" data-mega="INTERNET"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path>
                            </svg>
                            <span>INTERNET</span>
                        </span>
                    </a>
                    {{-- CLOUD --}}
                    <a href="{{ route('cloud') }}" data-mega="CLOUD"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>
                            </svg>
                            <span>CLOUD</span>
                        </span>
                    </a>
                    {{-- VOICE --}}
                    <a href="{{ route('voice') }}" data-mega="VOICE"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path
                                    d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                </path>
                            </svg>
                            <span>VOICE</span>
                        </span>
                    </a>
                    {{-- INDUSTRIES --}}
                    <a href="{{ route('industries') }}" data-mega="INDUSTRIES"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path d="M10 18v-7"></path>
                                <path
                                    d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z">
                                </path>
                                <path d="M14 18v-7"></path>
                                <path d="M18 18v-7"></path>
                                <path d="M3 22h18"></path>
                                <path d="M6 18v-7"></path>
                            </svg>
                            <span>INDUSTRIES</span>
                        </span>
                    </a>
                    {{-- PAGES --}}
                    <a href="#" data-mega="PAGES"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            </svg>
                            <span>PAGES</span>
                        </span>
                    </a>
                    {{-- CONTACT --}}
                    <a href="{{ route('contact') }}" data-mega="CONTACT"
                        class="py-2 cursor-pointer text-brand-blue hover:text-brand-hover transition-colors duration-150">
                        <span class="flex items-center gap-1.5 text-nav-item font-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]">
                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            </svg>
                            <span>CONTACT</span>
                        </span>
                    </a>

                    {{-- Phone Button --}}
                    <div class="hidden lg:flex items-center shrink-0 ml-2">
                        <a href="tel:+8801972721388"
                            class="bg-brand-blue hover:bg-brand-hover active:bg-brand-active text-white px-pill-px py-pill-py rounded-pill text-phone shadow-pill-glow transition-all duration-200 hover:shadow-md inline-flex items-center gap-1">
                            <span class="font-normal">(+88)</span>
                            <span class="font-extrabold">01972721388</span>
                        </a>
                    </div>
                </nav>

                {{-- Mobile Toggle --}}
                <div class="lg:hidden flex items-center gap-3">
                    <button type="button" id="mobileToggle"
                        class="p-2 text-brand-blue hover:bg-slate-100 rounded-lg transition-colors focus:outline-none"
                        aria-label="Toggle Navigation">
                        <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                            <path d="M4 5h16"></path>
                            <path d="M4 12h16"></path>
                            <path d="M4 19h16"></path>
                        </svg>
                        <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 hidden">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Drawer --}}
        <div id="mobileDrawer"
            class="lg:hidden absolute left-0 right-0 top-full bg-white border-t border-brand-subtle-border transition-all duration-300 ease-in-out z-50 opacity-0 -translate-y-4 pointer-events-none max-h-0 overflow-hidden invisible">
            <div class="space-y-4 p-4 pt-3 pb-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-1">
                    @php
                        $mobileNavItems = [
                            [
                                'label' => 'IT',
                                'route' => 'it-support',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><rect x="16" y="16" width="6" height="6" rx="1"></rect><rect x="2" y="16" width="6" height="6" rx="1"></rect><rect x="9" y="2" width="6" height="6" rx="1"></rect><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path><path d="M12 12V8"></path></svg>',
                            ],
                            [
                                'label' => 'WEB',
                                'route' => 'web',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="m16 18 6-6-6-6"></path><path d="m8 6-6 6 6 6"></path></svg>',
                            ],
                            [
                                'label' => 'INTERNET',
                                'route' => 'internet',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path></svg>',
                            ],
                            [
                                'label' => 'CLOUD',
                                'route' => 'cloud',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>',
                            ],
                            [
                                'label' => 'VOICE',
                                'route' => 'voice',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>',
                            ],
                            [
                                'label' => 'INDUSTRIES',
                                'route' => 'industries',
                                'hasMega' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="M10 18v-7"></path><path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="M3 22h18"></path><path d="M6 18v-7"></path></svg>',
                            ],
                            [
                                'label' => 'PAGES',
                                'route' => '#',
                                'hasMega' => true,
                                'isPages' => true,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg>',
                            ],
                            [
                                'label' => 'CONTACT',
                                'route' => 'contact',
                                'hasMega' => false,
                                'icon' =>
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 stroke-[2.5]"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>',
                            ],
                        ];
                    @endphp
                    @foreach ($mobileNavItems as $item)
                        @if ($item['hasMega'])
                            <div class="border-b border-slate-100 pb-2">
                                <div class="flex items-center justify-between">
                                    @if (!empty($item['isPages']))
                                        <span
                                            class="flex items-center gap-2 p-2.5 rounded-lg text-brand-blue font-bold text-sm">
                                            {!! $item['icon'] !!}
                                            <span>{{ $item['label'] }}</span>
                                        </span>
                                    @else
                                        <a href="{{ route($item['route']) }}"
                                            class="flex items-center gap-2 p-2.5 rounded-lg text-brand-blue font-bold text-sm hover:bg-slate-50"
                                            onclick="event.stopPropagation()">
                                            {!! $item['icon'] !!}
                                            <span>{{ $item['label'] }}</span>
                                        </a>
                                    @endif
                                    <button type="button"
                                        class="mobile-mega-toggle p-2.5 rounded-lg hover:bg-slate-50 transition-colors"
                                        data-target="mobile-mega-{{ strtolower($item['label']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-brand-blue transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div id="mobile-mega-{{ strtolower($item['label']) }}"
                                    class="mobile-mega-content hidden">
                                    <div
                                        class="pl-4 pr-2 pt-2 space-y-4 bg-slate-50/50 rounded-lg p-3 mt-1 border border-brand-blue/20">
                                        @php
                                            $mobileMegaCategories = $megaMenus[$item['label']] ?? [];
                                        @endphp
                                        @foreach ($mobileMegaCategories as $category)
                                            <div class="space-y-2">
                                                <div class="space-y-2">
                                                    <div
                                                        class="flex items-center gap-2 text-brand-blue font-bold text-sm border-b border-slate-200 pb-1">
                                                        @if (!empty($category['icon']))
                                                            {!! $category['icon'] !!}
                                                        @else
                                                            <div class="h-5 invisible">Empty</div>
                                                        @endif
                                                        @if (!empty($category['href']) && $category['href'] !== '#')
                                                            <a href="{{ $category['href'] }}">
                                                                <span>{{ $category['title'] }}</span>
                                                            </a>
                                                        @elseif(!empty($category['title']))
                                                            <span>{{ $category['title'] }}</span>
                                                        @endif
                                                    </div>
                                                    @if (!empty($category['desc']))
                                                        <p
                                                            class="text-[12px] leading-relaxed text-slate-500 font-normal">
                                                            {{ $category['desc'] }}</p>
                                                    @endif
                                                </div>
                                                @if (!empty($category['links']))
                                                    <div class="grid grid-cols-1 gap-1.5 pl-2">
                                                        @foreach ($category['links'] as $subLink)
                                                            <div>
                                                                @if (!empty($subLink['href']) && $subLink['href'] !== '#')
                                                                    <a href="{{ $subLink['href'] }}"
                                                                        class="flex gap-1 text-xs font-semibold text-brand-blue hover:text-brand-hover py-1">
                                                                        @if (!empty($subLink['image']))
                                                                            <img src="{{ $subLink['image'] }}"
                                                                                alt="{{ $subLink['label'] }}"
                                                                                class="w-5 h-5 shrink-0" />
                                                                        @elseif(!empty($subLink['icon']))
                                                                            {!! $subLink['icon'] !!}
                                                                        @endif
                                                                        <span>{{ $subLink['label'] }}</span>
                                                                    </a>
                                                                @else
                                                                    <div
                                                                        class="flex gap-1 text-xs font-semibold text-brand-blue hover:text-brand-hover py-1">
                                                                        @if (!empty($subLink['image']))
                                                                            <img src="{{ $subLink['image'] }}"
                                                                                alt="{{ $subLink['label'] }}"
                                                                                class="w-5 h-5 shrink-0" />
                                                                        @elseif(!empty($subLink['icon']))
                                                                            {!! $subLink['icon'] !!}
                                                                        @endif
                                                                        <span>{{ $subLink['label'] }}</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ route($item['route']) }}"
                                class="flex items-center gap-2 p-2.5 rounded-lg text-brand-blue font-bold text-sm hover:bg-slate-50 transition-colors">
                                {!! $item['icon'] !!}
                                <span>{{ $item['label'] }}</span>
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="flex items-center shrink-0 ml-2">
                    <a href="tel:01972721388"
                        class="bg-brand-blue hover:bg-brand-hover active:bg-brand-active text-white px-pill-px py-pill-py rounded-pill text-phone shadow-pill-glow transition-all duration-200 hover:shadow-md inline-flex items-center gap-1">
                        <span class="font-normal">(+88)</span>
                        <span class="font-extrabold">01972721388</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════ MEGA MENU PANEL ═══════════ --}}
    <div id="megaMenuPanel" class="mega-panel hidden fixed left-1/2 -translate-x-1/2 w-full px-10 z-50 pt-3">
        <div class="bg-white border-2 border-brand-blue rounded-[20px] shadow-2xl p-8">
            @foreach ($megaMenus as $key => $categories)
                <div class="mega-category" data-mega-key="{{ $key }}"
                    data-visible="{{ request()->is('*' . strtolower($key) . '*') ? 'true' : 'false' }}">
                    <div
                        class="grid {{ $key === 'WEB' ? 'grid-cols-5' : ($key === 'CONTACT' ? 'grid-cols-1' : (count($categories) >= 4 ? 'grid-cols-4' : (count($categories) == 3 ? 'grid-cols-3' : (count($categories) == 2 ? 'grid-cols-2' : 'grid-cols-1')))) }} gap-8">
                        @foreach ($categories as $category)
                            <div class="flex flex-col space-y-4">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-brand-blue">
                                        @if (!empty($category['icon']))
                                            {!! $category['icon'] !!}
                                        @endif
                                        @if (!empty($category['href']) && $category['href'] !== '#')
                                            <a href="{{ $category['href'] }}"
                                                class="border-b-2 border-white hover:border-brand-blue transition-colors">
                                                <h3 class="font-bold text-base tracking-tight text-brand-blue">
                                                    {{ $category['title'] }}</h3>
                                            </a>
                                        @elseif(!empty($category['title']))
                                            <h3 class="font-bold text-base tracking-tight text-brand-blue">
                                                {{ $category['title'] }}</h3>
                                        @endif
                                    </div>
                                    @if (!empty($category['desc']))
                                        <p class="text-[14px] leading-relaxed text-slate-500 font-normal">
                                            {{ $category['desc'] }}</p>
                                    @endif
                                </div>
                                @if (!empty($category['links']))
                                    <ul class="space-y-3 pt-2 border-t border-slate-100">
                                        @foreach ($category['links'] as $subLink)
                                            <li>
                                                @if (!empty($subLink['href']) && $subLink['href'] !== '#')
                                                    <a href="{{ $subLink['href'] }}"
                                                        class="flex items-center gap-2 text-[13px] font-semibold text-brand-blue hover:text-brand-hover hover:translate-x-1 transition-all duration-150">
                                                        @if (!empty($subLink['image']))
                                                            <img src="{{ $subLink['image'] }}"
                                                                alt="{{ $subLink['label'] }}"
                                                                class="w-5 h-5 shrink-0" />
                                                        @elseif(!empty($subLink['icon']))
                                                            {!! $subLink['icon'] !!}
                                                        @endif
                                                        <span>{{ $subLink['label'] }}</span>
                                                    </a>
                                                @else
                                                    <div
                                                        class="flex items-center gap-2 text-[13px] font-semibold text-brand-blue hover:text-brand-hover hover:translate-x-1 transition-all duration-150">
                                                        @if (!empty($subLink['image']))
                                                            <img src="{{ $subLink['image'] }}"
                                                                alt="{{ $subLink['label'] }}"
                                                                class="w-5 h-5 shrink-0" />
                                                        @elseif(!empty($subLink['icon']))
                                                            {!! $subLink['icon'] !!}
                                                        @endif
                                                        <span>{{ $subLink['label'] }}</span>
                                                    </div>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ═══════════ MAIN CONTENT ═══════════ --}}
    <main>
        @yield('content')
    </main>

    {{-- ═══════════ FOOTER ═══════════ --}}
    <footer class="relative bg-brand-dark-bg text-white font-sans antialiased pb-20 lg:pb-0">
        <div class="max-w-7xl mx-auto px-1 sm:px-2 lg:px-10 py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-8 mb-4">
                {{-- Column 1: Logo & About --}}
                <div class="reveal space-y-6" data-variant="fade-right">
                    <div class="space-y-4">
                        <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                            <img src="/logo-white.svg" alt="Logo" width="180" height="70"
                                style="width:auto;height:auto">
                        </a>
                    </div>
                    <p class="text-[15px] leading-relaxed text-gray-200 pr-4 text-justify">Bismillah Computer &
                        Technology provides
                        modern and secure digital workplaces, focusing on the B2B and B2C market with comprehensive
                        services in IT Managed Services, Telecommunications, Internet, Cloud, Web, Software, Domain,
                        Hosting, and Cyber Security.</p>
                    <div class="flex items-center gap-2">
                        <a href="https://www.facebook.com/bct.com.bd" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center p-2 transition-opacity hover:opacity-90 bg-[#1877f2]"
                            aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/bct.com.bd" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center p-2 transition-opacity hover:opacity-90 bg-black"
                            aria-label="X/Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/bct.com.bd" target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center justify-center p-2 transition-opacity hover:opacity-90 bg-[#0a66c2]"
                            aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/bct.com.bd" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center p-2 transition-opacity hover:opacity-90 bg-linear-to-tr from-[#f09433] via-[#e6683c] to-[#bc1888]"
                            aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="currentColor" class="text-white">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Column 2: Navigation --}}
                <div class="reveal lg:pl-8" data-variant="fade-up" data-delay="100">
                    <h3 class="text-2xl font-bold mb-6">Navigation</h3>
                    <ul class="space-y-3 list-disc pl-5 marker:text-gray-300 text-[15px] text-gray-200">
                        <li><a href="{{ route('it-support') }}" class="hover:text-white transition-colors">IT</a>
                        </li>
                        <li><a href="{{ route('voice') }}" class="hover:text-white transition-colors">VOICE</a></li>
                        <li><a href="{{ route('internet') }}" class="hover:text-white transition-colors">INTERNET</a>
                        </li>
                        <li><a href="{{ route('cloud') }}" class="hover:text-white transition-colors">CLOUD</a></li>
                        <li><a href="{{ route('web') }}" class="hover:text-white transition-colors">WEB</a></li>
                        <li><a href="{{ route('industries') }}"
                                class="hover:text-white transition-colors">INDUSTRIES</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">CONTACT</a>
                        </li>
                    </ul>
                </div>

                {{-- Column 3: Contact --}}
                <div class="reveal" data-variant="fade-left" data-delay="200">
                    <h3 class="text-2xl font-bold mb-6">Contact</h3>
                    <div class="space-y-6">
                        <div class="flex gap-4 flex-wrap">
                            <div>
                                <div
                                    class="flex items-center space-x-2 font-bold mb-1 uppercase tracking-wide text-[13px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                    </svg>
                                    <span>Email</span>
                                </div>
                                <a href="mailto:contact@bct.com.bd"
                                    class="text-[15px] text-gray-200 hover:text-white transition-colors">contact@bct.com.bd</a>
                            </div>
                            <div>
                                <div
                                    class="flex items-center space-x-2 font-bold mb-1 uppercase tracking-wide text-[13px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <span>Phone</span>
                                </div>
                                <div>
                                    <a href="tel:+8801972721388"
                                        class="text-[15px] text-gray-200 hover:text-white transition-colors">+8801972-721388</a>
                                    <a href="tel:+8809666777100"
                                        class="text-[15px] text-gray-200 hover:text-white transition-colors">+8809666777100</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div
                                class="flex items-center space-x-2 font-bold mb-1 uppercase tracking-wide text-[13px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Address (Head Office)</span>
                            </div>
                            <address class="text-[15px] text-gray-200 not-italic leading-relaxed">House# 86, Road# Lake
                                Drive,<br>Sector#7, Uttara, Dhaka, Bangladesh</address>
                        </div>
                        <div>
                            <div
                                class="flex items-center space-x-2 font-bold mb-1 uppercase tracking-wide text-[13px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Address (Branch Office)</span>
                            </div>
                            <address class="text-[15px] text-gray-200 not-italic leading-relaxed">House#6, Road# Shera
                                Bangal Avenue,<br>Block#B, Dolipara Uttara Dhaka-1230</address>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="reveal flex flex-col md:flex-row justify-between items-center text-[13px] text-white gap-4 border-t border-white/60 bg-brand-dark-bg pt-4"
                data-variant="fade-up" data-delay="150">
                <p>&copy; {{ date('Y') }} <a href="{{ url('/') }}"
                        class="hover:text-white transition-colors">Bismillah Computer & Technology.</a> All Rights
                    Reserved</p>
                <div class="flex gap-4 flex-wrap">
                    <a href="#" class="hover:text-white transition-colors font-medium">Terms & Conditions</a>
                    <a href="#" class="hover:text-white transition-colors font-medium">Careers</a>
                    <a href="#" class="hover:text-white transition-colors font-medium">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- ═══════════ SOCIAL CHAT BUTTONS ═══════════ --}}
    @include('partials.chat-widget')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @stack('scripts')
</body>

</html>

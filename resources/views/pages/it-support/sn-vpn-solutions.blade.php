@extends('layouts.app')

@section('title', 'VPN Solutions - Bismillah Computer & Technology')
@section('description',
    'Business VPN solutions in Bangladesh: site-to-site IPsec, SSL remote access, cloud connectivity and zero-trust remote access with multi-factor authentication.')

@section('content')
    @php
        $iconLock = '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>';
        $iconGlobe = '<circle cx="12" cy="12" r="10"></circle><line x1="2" x2="22" y1="12" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>';
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconShieldCheck = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81,17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path>';
        $iconZap = '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>';
        $iconCloud = '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconLock,
                'title' => 'VPN Solutions',
                'subtitle' => 'Private, encrypted connectivity &mdash; between sites, to the cloud, and for your staff',
                'paragraphs' => [
                    'A virtual private network extends a private network across public infrastructure by encrypting traffic end to end. That means branch offices, remote staff, cloud services and partner sites can all communicate as though they were on the same local network.',
                    'Bismillah Computer & Technology deploys and manages site-to-site, remote access and cloud connectivity tunnels for businesses across Bangladesh, with authentication, monitoring and support included as standard.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'types',
                'title' => 'Types Of VPN We Deploy',
                'subtitle' => 'The right tunnel depends on who is connecting, from where, and what they need to reach.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconNetwork,
                        'title' => 'Site-to-Site IPsec',
                        'description' => 'Always-on tunnels between offices, branches, warehouses and data centres, giving branch users transparent access to head-office systems.',
                    ],
                    [
                        'icon' => $iconUsers,
                        'title' => 'Remote Access SSL',
                        'description' => 'Browser and client-based access for staff working from home, travelling or at a client site, with full or split tunnelling options.',
                    ],
                    [
                        'icon' => $iconCloud,
                        'title' => 'Cloud Connectivity',
                        'description' => 'Private tunnels from your network to Microsoft 365, Azure, AWS or other hosted platforms, avoiding exposure to the public internet.',
                        'href' => route('cloud.ms-azure'),
                    ],
                    [
                        'icon' => $iconGlobe,
                        'title' => 'Site-to-Site over Internet',
                        'description' => 'Encrypted connectivity for sites on unreliable links, combining multiple providers or broadband links into a more resilient path.',
                    ],
                    [
                        'icon' => $iconShieldCheck,
                        'title' => 'Zero Trust Access',
                        'description' => 'Identity-based access to individual applications rather than the whole network, so a user only reaches what their role requires.',
                        'href' => route('it-support.cs-zero-trust'),
                    ],
                    [
                        'icon' => $iconZap,
                        'title' => 'Always-On Failover',
                        'description' => 'Secondary tunnels and automatic failover so connectivity survives an ISP outage, line failure or power interruption.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'security-requirements',
                'title' => 'What Makes A VPN Actually Secure',
                'paragraphs' => [
                    'Encryption on its own does not make remote access safe. A tunnel that anyone with valid credentials can use, from any device, is a tunnel an attacker will eventually use too.',
                ],
                'points' => [
                    [
                        'title' => 'Multi-factor authentication',
                        'description' => 'Every connection requires a second factor, so a stolen password alone is not enough to reach your systems.',
                    ],
                    [
                        'title' => 'Device health checks',
                        'description' => 'Access allowed only from devices that are patched, encrypted and running your endpoint protection.',
                    ],
                    [
                        'title' => 'Named user accounts',
                        'description' => 'Individual credentials tied to a person, reviewed on role change and revoked immediately when someone leaves.',
                    ],
                    [
                        'title' => 'Strong cryptography',
                        'description' => 'Modern cipher suites and key sizes only, with legacy protocols such as PPTP and weak SSL versions disabled.',
                    ],
                    [
                        'title' => 'Logging and review',
                        'description' => 'Connection logs record who connected, from where, when and for how long, and are reviewed rather than merely collected.',
                    ],
                    [
                        'title' => 'Network-level restrictions',
                        'description' => 'Split tunnelling or per-role subnets so remote users reach only the systems their work requires.',
                    ],
                ],
                'closing' => 'These controls are the same principles applied at the network layer as our <a href="' . route('it-support.sn-network-security') . '" class="text-blue-600 font-medium hover:underline">network security</a> and <a href="' . route('cloud.ms-conditional-access') . '" class="text-blue-600 font-medium hover:underline">conditional access</a> services.',
            ],
            [
                'type' => 'split',
                'id' => 'multi-site',
                'image' => '/images/it-support/servers-and-networking/advanced.jpg',
                'imageAlt' => 'Secure site-to-site connectivity between business locations',
                'label' => 'Multi-Site',
                'title' => 'Connecting Branches Reliably',
                'icon' => $iconNetwork,
                'reverse' => true,
                'paragraphs' => [
                    'As a business grows to multiple locations, the network has to keep working when a link does not. Branch users need the same file servers, applications and printers as head office, without depending on a single provider or a single piece of hardware.',
                    'We design resilient connectivity: dual-carrier links, automatic failover between tunnels, local break-out for internet traffic where bandwidth is limited, and monitoring that reports a degraded link before staff notice the slowdown.',
                ],
                'points' => [
                    [
                        'title' => 'Dual-carrier resilience',
                        'description' => 'Two different providers or technologies per site, with automatic failover between them.',
                    ],
                    [
                        'title' => 'Local internet breakout',
                        'description' => 'Branch internet traffic exits locally instead of consuming head-office bandwidth, keeping WAN capacity for business applications.',
                    ],
                    [
                        'title' => 'Central management',
                        'description' => 'All sites administered as one policy set, so a change is applied everywhere without site visits.',
                    ],
                    [
                        'title' => 'Failover testing',
                        'description' => 'Failover paths tested deliberately, because untested resilience is only an assumption.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'deployment',
                'title' => 'How We Deploy A VPN',
                'subtitle' => 'Planned, tested and rolled back safely if anything behaves unexpectedly.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Requirements',
                        'description' => 'Users, sites, applications and locations to be reached, plus link speeds, current ISP details and authentication requirements.',
                    ],
                    [
                        'title' => 'Design',
                        'description' => 'Tunnel design, addressing plan, routing, DNS and split tunnelling rules, with authentication and MFA approach agreed.',
                    ],
                    [
                        'title' => 'Deploy & Test',
                        'description' => 'Pilot deployment with a small user group, thorough testing, then phased rollout with user guidance and support.',
                    ],
                    [
                        'title' => 'Support & Review',
                        'description' => 'Monitoring, connection reviews, user onboarding and offboarding, and re-testing whenever the estate changes.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Discuss secure access',
                'paragraphs' => [
                    'Tell us how many users and locations need access, and we will propose the right tunnel design, authentication method and rollout plan. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="VPN" headlineAccent="Solutions"
        intro="A VPN lets your staff work securely from home, from client sites and from anywhere in between. We deploy encrypted site-to-site and remote access tunnels so your team can reach business systems privately, without exposing them to risk."
        image="/images/it-support/servers-and-networking/hero.png" imageAlt="Servers and Networking Hero"
        :anchors="[
            ['label' => 'Types of VPN', 'href' => '#types'],
            ['label' => 'Security requirements', 'href' => '#security-requirements'],
            ['label' => 'Multi-site', 'href' => '#multi-site'],
        ]" :sections="$sections" />
@endsection

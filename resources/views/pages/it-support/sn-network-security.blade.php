@extends('layouts.app')

@section('title', 'Network Security - Bismillah Computer & Technology')
@section('description',
    'Network security for Bangladeshi businesses: next-generation firewalls, segmentation, monitoring, access control and security operations from Bismillah IT.')

@section('content')
    @php
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconShieldCheck = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81,17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path>';
        $iconLock = '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>';
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconEye = '<path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle>';
        $iconActivity = '<path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path>';
        $iconGlobe = '<circle cx="12" cy="12" r="10"></circle><line x1="2" x2="22" y1="12" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconShield,
                'title' => 'Network Security',
                'subtitle' => 'Controlling what can reach what, and proving it stays controlled',
                'paragraphs' => [
                    'Your firewall is only one part of network security. Real protection comes from controlling traffic between systems, limiting which devices can talk to which, authenticating everything that connects, and continuously checking that the controls are still doing their job.',
                    'We design and operate layered network security for businesses in Bangladesh: next-generation firewalls, network segmentation, secure remote access, web and email filtering, logging and monitoring, and regular review so the configuration still matches how the business actually operates.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'controls',
                'title' => 'Network Security Controls',
                'subtitle' => 'A layered approach &mdash; each control limits what the one before it failed to stop.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconShieldCheck,
                        'title' => 'Next-Generation Firewalls',
                        'description' => 'Business firewalls with application awareness, intrusion prevention, threat filtering, deep packet inspection and VPN acceleration.',
                    ],
                    [
                        'icon' => $iconNetwork,
                        'title' => 'Network Segmentation',
                        'description' => 'VLANs for staff, servers, management, guests, cameras and IoT, with rules limiting what each segment may reach.',
                    ],
                    [
                        'icon' => $iconLock,
                        'title' => 'Access Control',
                        'description' => 'Authentication and authorisation policies, least-privilege rules and multi-factor authentication for remote and administrative access.',
                        'href' => route('it-support.cs-zero-trust'),
                    ],
                    [
                        'icon' => $iconEye,
                        'title' => 'Web & Email Filtering',
                        'description' => 'Category-based web filtering, DNS filtering and spam, phishing and malware filtering across all user devices.',
                        'href' => route('it-support.cs-cloud-network'),
                    ],
                    [
                        'icon' => $iconActivity,
                        'title' => 'Logging & Monitoring',
                        'description' => 'Centralised logs, alerting on suspicious behaviour, blocked malware callbacks and unusual outbound traffic.',
                    ],
                    [
                        'icon' => $iconGlobe,
                        'title' => 'Content & Threat Filtering',
                        'description' => 'Reputation feeds, malware sandboxing and policies that block known dangerous destinations automatically.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'security-approach',
                'title' => 'How We Secure A Network',
                'subtitle' => 'Assessment first, then design, implementation, and ongoing review.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Assess',
                        'description' => 'Rule and configuration review, exposure analysis, external scanning and an inventory of every device that can reach the internet.',
                    ],
                    [
                        'title' => 'Design',
                        'description' => 'Target architecture, segmentation plan, remote access design and policy rules agreed against business requirements.',
                    ],
                    [
                        'title' => 'Implement',
                        'description' => 'Firewall, VPN and filtering deployment with configuration backup and change records for every adjustment.',
                    ],
                    [
                        'title' => 'Operate',
                        'description' => 'Monitoring, alert review, policy tuning and periodic security reviews aligned to the Essential Eight.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/cyber-security/section-1.png',
                'imageAlt' => 'Network security monitoring and protection',
                'label' => 'Segmentation',
                'title' => 'Stop Lateral Movement',
                'icon' => $iconNetwork,
                'reverse' => true,
                'paragraphs' => [
                    'When an attacker or malware gets onto one device, the real damage comes from what it can reach next. Flat networks let a single infected laptop move freely to file servers, finance systems and backup repositories.',
                    'Segmentation limits that movement. With the right rules in place, a compromised workstation can reach the internet but not the servers, the servers can reach the internet but not each other without approval, and management interfaces are reachable only from designated admin machines.',
                ],
                'points' => [
                    [
                        'title' => 'User networks',
                        'description' => 'General office devices separated from server, storage and backup networks.',
                    ],
                    [
                        'title' => 'Server isolation',
                        'description' => 'Server-to-server traffic restricted to the specific services that genuinely need it.',
                    ],
                    [
                        'title' => 'Management access',
                        'description' => 'Switch, router and firewall administration limited to a dedicated management network.',
                    ],
                    [
                        'title' => 'IoT and cameras',
                        'description' => 'Cameras, printers, phones and IoT devices placed in their own restricted segments with internet-only access.',
                    ],
                ],
                'link' => ['href' => route('it-support.cs-essential-eight'), 'label' => 'How this maps to the Essential Eight'],
            ],
            [
                'type' => 'points',
                'id' => 'remote-access',
                'title' => 'Remote Access Without Exposure',
                'paragraphs' => [
                    'Remote access is now normal business practice, and it is also one of the most common routes attackers exploit. Access has to be secure, authenticated and limited &mdash; not just available.',
                ],
                'points' => [
                    [
                        'title' => 'Multi-factor authentication',
                        'description' => 'A second factor required for every remote login, ideally with device-based approval rather than SMS alone.',
                    ],
                    [
                        'title' => 'Split tunnelling decisions',
                        'description' => 'Full or split tunnelling configured deliberately, with internal networks reachable only through the encrypted tunnel.',
                    ],
                    [
                        'title' => 'Device conditions',
                        'description' => 'Access permitted only from devices that are patched, encrypted and running your endpoint protection.',
                    ],
                    [
                        'title' => 'Named access only',
                        'description' => 'No shared VPN accounts; access tied to an individual, reviewed when roles change and removed when staff leave.',
                    ],
                    [
                        'title' => 'Session limits',
                        'description' => 'Timeouts, concurrent session limits and logs of who connected from where and did what.',
                    ],
                ],
                'closing' => 'Remote connectivity is covered in detail on our <a href="' . route('it-support.sn-vpn-solutions') . '" class="text-blue-600 font-medium hover:underline">VPN solutions</a> page, and endpoint requirements are covered under <a href="' . route('it-support.cs-endpoint') . '" class="text-blue-600 font-medium hover:underline">endpoint security</a>.',
            ],
            [
                'type' => 'accordion',
                'id' => 'network-faq',
                'title' => 'Network Security Questions',
                'image' => '/images/it-support/cyber-security/essential-eight/faq.jpg',
                'imageAlt' => 'Data centre network and security hardware',
                'items' => [
                    [
                        'title' => 'Do we need a managed firewall, or is an ISP-provided one enough?',
                        'description' => 'Most business internet packages include basic filtering, which protects against some threats but not application-level attacks, malware callbacks or compromised accounts. A managed next-generation firewall adds application control, threat intelligence, VPN capability and visibility into what is actually happening on your network.',
                    ],
                    [
                        'title' => 'How often should firewall rules be reviewed?',
                        'description' => 'At minimum annually, and whenever significant change occurs: new systems, new applications, staff changes, office moves or a security incident. Old rules are one of the most common sources of unnecessary exposure, because each was reasonable when it was added.',
                    ],
                    [
                        'title' => 'Is a small business really a target?',
                        'description' => 'Yes. Attacks are automated and indiscriminate: scans find an exposed service within minutes of it appearing online. Businesses are targeted for their email, banking access and customer data, and small and medium organisations are often attacked precisely because security controls tend to be lighter.',
                    ],
                    [
                        'title' => 'What is network monitoring actually for?',
                        'description' => 'It answers questions you cannot answer from the firewall rules alone: is a device infected, is a user exfiltrating data, is a backup failing, is traffic leaving at an unusual time of day. Alerts turn raw network activity into something an engineer can act on.',
                    ],
                    [
                        'title' => 'Can you support our existing firewall?',
                        'description' => 'Yes. We support and manage a range of firewall and networking platforms, and we can review an existing configuration first, document what is in place and recommend what should change before proposing to take over.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Request a security review',
                'paragraphs' => [
                    'A network security review gives you a clear, prioritised list of what is exposed and what to fix first. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry to arrange one.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Network" headlineAccent="Security"
        intro="Your network is the first line of defence for your business data. Our security specialists monitor, configure and protect the perimeter and internal segments, filtering threats and controlling access so unauthorised users and malware cannot get through."
        image="/images/it-support/servers-and-networking/hero.png" imageAlt="Servers and Networking Hero"
        :anchors="[
            ['label' => 'Security controls', 'href' => '#controls'],
            ['label' => 'Our approach', 'href' => '#security-approach'],
            ['label' => 'Common questions', 'href' => '#network-faq'],
        ]" :sections="$sections" />
@endsection

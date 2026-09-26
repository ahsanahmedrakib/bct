@extends('layouts.app')

@section('title', 'IT Outsourcing - Bismillah Computer & Technology')
@section('description',
    'Outsource your entire IT function to Bismillah Computer & Technology: dedicated engineers, defined service levels, predictable monthly cost and complete transparency.')

@section('content')
    @php
        $iconBuilding = '<rect width="16" height="20" x="4" y="2" rx="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';
        $iconClock = '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>';
        $iconHandshake = '<path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconBuilding,
                'title' => 'IT Outsourcing',
                'subtitle' => 'Your entire IT function, run by our engineers',
                'paragraphs' => [
                    'Full IT outsourcing moves the day-to-day operation of your technology to a specialist provider, along with the responsibility for keeping it working, secure and current. For many growing businesses this is the only practical way to operate enterprise-grade IT without a full internal department.',
                    'Bismillah Computer & Technology provides complete outsourced IT across Bangladesh. You receive a named service manager, a documented service level, monthly reporting and a single accountable party for every aspect of your technology &mdash; support, servers, network, security and projects.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'included',
                'title' => 'What An Outsourced IT Function Covers',
                'subtitle' => 'Everything an internal IT department would do, delivered as a service with agreed service levels.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconUsers,
                        'title' => 'Service Desk',
                        'description' => 'Helpdesk, telephone support, remote assistance and on-site attendance covering every user in the agreement.',
                        'href' => route('it-support.mi-help-desk-support'),
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Infrastructure Management',
                        'description' => 'Servers, virtualisation, storage, backups, patching and capacity management, monitored around the clock.',
                        'href' => route('it-support.sn-windows-server'),
                    ],
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Network Operations',
                        'description' => 'Switches, routers, firewalls, Wi-Fi, WAN links and structured cabling, including monitoring and fault response.',
                        'href' => route('it-support.sn-network-installation'),
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Security Operations',
                        'description' => 'Endpoint protection, email and web filtering, access control, patching discipline and security monitoring.',
                        'href' => route('it-support.cs-endpoint'),
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Projects & Change',
                        'description' => 'Office moves, network upgrades, new system deployments and migrations, managed end to end by our project engineers.',
                    ],
                    [
                        'icon' => $iconClock,
                        'title' => 'Reporting & Governance',
                        'description' => 'Monthly reporting, service reviews, budget planning, asset registers and an annual technology plan.',
                    ],
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'models',
                'title' => 'Outsourcing Models',
                'subtitle' => 'Three ways to engage, depending on how much of the IT function you want to transfer.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconClock,
                        'title' => 'Full Outsourcing',
                        'description' => 'We take ownership of the entire IT operation. You hold no internal IT staff, and we are measured on service delivery.',
                    ],
                    [
                        'icon' => $iconHandshake,
                        'title' => 'Co-Managed IT',
                        'description' => 'Your internal IT team stays in place and we take the specialist workloads &mdash; servers, network, security and projects &mdash; alongside them.',
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Project Outsourcing',
                        'description' => 'Short-term specialist delivery for a defined piece of work: a new office network, a server refresh or a cloud migration.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/managed-it/section-1.jpg',
                'imageAlt' => 'Outsourced IT engineers working on business systems',
                'label' => 'Service Levels',
                'title' => 'Measured, Documented And Reviewed',
                'icon' => $iconClipboard,
                'reverse' => true,
                'paragraphs' => [
                    'Outsourcing works when the service is defined and measured. Every agreement we sign states exactly what is covered, how quickly we respond, what availability we commit to and how both sides report against it.',
                    'You receive a named service manager, a monthly report covering ticket volumes, response times, system health and project status, and a scheduled review where we discuss performance honestly &mdash; including where we have not met a target.',
                ],
                'points' => [
                    [
                        'title' => 'Availability commitments',
                        'description' => 'Agreed uptime targets for critical systems, with credits where commitments are consistently missed.',
                    ],
                    [
                        'title' => 'Response and resolution targets',
                        'description' => 'Priority-based targets for every ticket category, tracked and reported each month.',
                    ],
                    [
                        'title' => 'Named account team',
                        'description' => 'A service manager plus named engineers who know your environment, so nothing is explained twice.',
                    ],
                    [
                        'title' => 'Transparent costs',
                        'description' => 'A fixed monthly fee with any pass-through costs listed in advance. No surprise invoices.',
                    ],
                ],
                'link' => ['href' => route('it-support.mi-managed-it-services'), 'label' => 'Compare managed IT plans'],
            ],
            [
                'type' => 'points',
                'id' => 'switching',
                'title' => 'Moving To An Outsourced Model',
                'paragraphs' => [
                    'Switching does not have to be disruptive. Most businesses we take on transition gradually, and the handover is planned so that nobody is left without support.',
                ],
                'points' => [
                    [
                        'title' => 'Discovery and takeover audit',
                        'description' => 'We review licences, domains, contracts, accounts, documentation and any obligations held with third parties before taking over.',
                    ],
                    [
                        'title' => 'Credential and access handover',
                        'description' => 'Ownership of domain, cloud, software and supplier accounts is transferred to your business, with administrator accounts and documentation.',
                    ],
                    [
                        'title' => 'Parallel running',
                        'description' => 'Existing arrangements run alongside ours for an agreed period, so the transition is a safety net rather than a leap of faith.',
                    ],
                    [
                        'title' => 'Documentation handover',
                        'description' => 'Asset register, network diagrams, credentials vault and runbooks are handed over, so you are never dependent on a single provider.',
                    ],
                ],
                'closing' => 'If a future arrangement ever changes, you keep your documentation, your data and your supplier relationships. That is the difference between an outsourcing partner and a supplier.',
            ],
            [
                'type' => 'contact',
                'label' => 'Discuss outsourcing',
                'paragraphs' => [
                    'Tell us your user count, site count and the systems you run today, and we will outline the outsourcing model that fits. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry to arrange a scoping session.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="IT" headlineAccent="Outsourcing"
        intro="Outsourcing your IT support means gaining a complete technical team on demand, at a predictable monthly cost. We take responsibility for your infrastructure, devices, security and user support so you are never left without cover." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'What is included', 'href' => '#included'],
            ['label' => 'Outsourcing models', 'href' => '#models'],
            ['label' => 'Switching over', 'href' => '#switching'],
        ]" :sections="$sections" />
@endsection

@extends('layouts.app')

@section('title', 'Windows Server - Bismillah Computer & Technology')
@section('description',
    'Windows Server deployment, migration, Active Directory, virtualisation, storage and 24/7 management for Bangladeshi businesses by Bismillah IT.')

@section('content')
    @php
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconDatabase = '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path>';
        $iconLayers = '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 12.5-9.17 4.16a2 2 0 0 1-1.66 0L2 12.5"></path><path d="m22 17.5-9.17 4.16a2 2 0 0 1-1.66 0L2 17.5"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconBackup = '<path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path>';
        $iconHardDrive = '<line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line>';
        $iconLineChart = '<path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconServer,
                'title' => 'Windows Server',
                'subtitle' => 'The on-premises foundation for identity, files and applications',
                'paragraphs' => [
                    'Many Bangladeshi organisations still rely on an on-premises Windows Server estate for file sharing, line-of-business applications, databases, print services and user management. Done well, it is stable, familiar and entirely under your control.',
                    'We design, deploy, migrate and support Windows Server environments &mdash; from a single server in a small office to a virtualised cluster in a proper server room &mdash; with Active Directory, storage, backup, security and monitoring handled as one managed service.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'solutions',
                'title' => 'Windows Server Solutions',
                'subtitle' => 'Sized for your business, from a single file server to a fully virtualised platform.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconServer,
                        'title' => 'Server Deployment',
                        'description' => 'Hardware selection, RAID configuration, installation, roles, licensing and a clean handover of a production-ready server.',
                    ],
                    [
                        'icon' => $iconUsers,
                        'title' => 'Active Directory',
                        'description' => 'Domain deployment, group policy, user and computer management, delegation and offboarding processes that actually get followed.',
                    ],
                    [
                        'icon' => $iconLayers,
                        'title' => 'Virtualisation',
                        'description' => 'Hyper-V consolidation, virtual networks, snapshots and high availability, reducing hardware overhead and simplifying recovery.',
                    ],
                    [
                        'icon' => $iconDatabase,
                        'title' => 'File & Application Services',
                        'description' => 'File and print servers, application hosting, database services, IIS web hosting and line-of-business application support.',
                    ],
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'Storage & Availability',
                        'description' => 'Storage design, drive expansion, data de-duplication, snapshots and RAID rebuild planning so capacity never becomes an emergency.',
                    ],
                    [
                        'icon' => $iconBackup,
                        'title' => 'Backup & Disaster Recovery',
                        'description' => 'Image-based and application-aware backup, off-site copies, bare-metal recovery and documented restoration testing.',
                        'href' => route('it-support.mi-data-management'),
                    ],
                ],
            ],
            [
                'type' => 'split',
                'id' => 'migration',
                'image' => '/images/it-support/servers-and-networking/networking.jpg',
                'imageAlt' => 'Windows Server rack in a business server room',
                'label' => 'Migration',
                'title' => 'Migrating Without Downtime',
                'icon' => $iconLayers,
                'paragraphs' => [
                    'A migration only has to go wrong once. The difference between a smooth server migration and an outage is preparation: rehearsed cutover steps, tested backups, clear rollback points and a maintenance window agreed with the business in advance.',
                    'We migrate from ageing hardware, unsupported versions and competing platforms &mdash; including transitions from on-premises estates to Microsoft 365 and Azure when that is genuinely the better destination.',
                ],
                'points' => [
                    [
                        'title' => 'Migration planning',
                        'description' => 'Inventory of roles, applications, shares, permissions and dependencies before anything is moved.',
                    ],
                    [
                        'title' => 'Test environment',
                        'description' => 'Migration rehearsed in isolation first, so problems are found before they affect production.',
                    ],
                    [
                        'title' => 'Staged cutover',
                        'description' => 'Work done in phases with verification at each stage and a documented rollback path.',
                    ],
                    [
                        'title' => 'User communication',
                        'description' => 'Staff told what is happening and when, with support available during and after the change.',
                    ],
                    [
                        'title' => 'Old platform retirement',
                        'description' => 'Decommissioning handled safely, with data wiped and licences released so nothing is left running unattended.',
                    ],
                ],
                'link' => ['href' => route('cloud.ms-microsoft-365'), 'label' => 'Comparing on-premises and Microsoft 365'],
            ],
            [
                'type' => 'points',
                'id' => 'operations',
                'title' => 'Running A Windows Server Estate Well',
                'paragraphs' => [
                    'Most server problems are not exotic. They are predictable failures that basic operational discipline prevents &mdash; full disks, missing patches, failed backups, logs nobody reviews and hardware past its expected life.',
                ],
                'points' => [
                    [
                        'title' => 'Patching on a schedule',
                        'description' => 'Security and quality updates applied to a maintenance plan, with reboots planned rather than discovered.',
                    ],
                    [
                        'title' => 'Capacity and disk management',
                        'description' => 'Alerts on free space, growth tracking and proactive expansion before a service stops for a full volume.',
                    ],
                    [
                        'title' => 'Event log and service monitoring',
                        'description' => 'Failed services, replication errors and hardware warnings reviewed by an engineer rather than discovered by users.',
                        'href' => route('it-support.mi-managed-it-services'),
                    ],
                    [
                        'title' => 'Documented configuration',
                        'description' => 'Roles, shares, permissions and recovery steps recorded, so knowledge does not live in one person\'s head.',
                    ],
                    [
                        'title' => 'Hardware lifecycle',
                        'description' => 'Servers monitored for age, temperature and hardware errors, with replacement planned before failure.',
                    ],
                    [
                        'title' => 'Licence compliance',
                        'description' => 'Licensing reviewed so the estate is properly covered, supported and auditable.',
                    ],
                ],
            ],
            [
                'type' => 'accordion',
                'id' => 'server-faq',
                'title' => 'Windows Server Questions',
                'image' => '/images/it-support/hero.png',
                'imageAlt' => 'Server infrastructure and support',
                'items' => [
                    [
                        'title' => 'Do we still need an on-premises server?',
                        'description' => 'It depends on your applications, connectivity and control requirements. Businesses with line-of-business software that must run locally, specific performance needs, or data that must remain on site usually get good value from an on-premises server. Organisations whose needs are mostly email, files and collaboration frequently do better on Microsoft 365. We assess both options honestly before recommending either.',
                    ],
                    [
                        'title' => 'Virtualisation or dedicated hardware?',
                        'description' => 'Virtualisation lets you run several roles on one physical host, improving utilisation and simplifying recovery. Where a single host failure would be unacceptable, we design with redundancy &mdash; two hosts, shared or replicated storage, and failover that has actually been tested.',
                    ],
                    [
                        'title' => 'How long does a server migration take?',
                        'description' => 'A straightforward file and print server typically moves within a day once preparation is complete. Domain, application and database migrations take longer, and are planned in phases. Preparation and rehearsal usually account for more of the timeline than the cutover itself.',
                    ],
                    [
                        'title' => 'Do we need 24/7 monitoring?',
                        'description' => 'For any server that other people depend on, yes. Failures frequently happen outside working hours, and monitoring with automatic alerting is what converts an overnight outage into a short, early intervention. We include monitoring in every managed server service.',
                    ],
                    [
                        'title' => 'Can you take over support of an existing server?',
                        'description' => 'Yes. We start with a health check of the current environment, document what we find including anything undocumented, and present a remediation plan. Where a server is significantly out of date or unsupported, we will tell you directly rather than pretending it is fine.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Speak to a server engineer',
                'paragraphs' => [
                    'Whether you are buying a first server, replacing an ageing one or inheriting an estate from a previous provider, we can assess it and explain your options. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Windows" headlineAccent="Server"
        intro="Windows Server gives your business the foundation for file sharing, business applications and domain services. We install, configure, patch and maintain your servers, manage Active Directory and keep your infrastructure healthy and available."
        image="/images/it-support/servers-and-networking/hero.png" imageAlt="Servers and Networking Hero"
        :anchors="[
            ['label' => 'Solutions', 'href' => '#solutions'],
            ['label' => 'Migration', 'href' => '#migration'],
            ['label' => 'Questions', 'href' => '#server-faq'],
        ]" :sections="$sections" />
@endsection

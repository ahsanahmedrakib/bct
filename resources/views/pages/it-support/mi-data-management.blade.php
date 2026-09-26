@extends('layouts.app')

@section('title', 'Data Management - Bismillah Computer & Technology')
@section('description',
    'IT data management for Bangladeshi businesses: reliable backups, cloud storage, retention policies, data security and tested recovery plans.')

@section('content')
    @php
        $iconDatabase = '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconCloud = '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';
        $iconLock = '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconHardDrive = '<line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line>';
        $iconTrash = '<path d="M3 6h18"></path><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconDatabase,
                'title' => 'Data Management',
                'subtitle' => 'Your data is the business. Treat it that way.',
                'paragraphs' => [
                    'Every organisation runs on data: customer records, accounts, projects, correspondence and the operational knowledge that makes your business work. Losing it is not an IT inconvenience &mdash; it can end the business.',
                    'Our data management service covers the full lifecycle of business data: where it is stored, who can reach it, how it is backed up, how long it must be kept, and how quickly it can be restored when something goes wrong.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'services',
                'title' => 'Data Management Services',
                'subtitle' => 'Designed so your data stays available, protected and recoverable &mdash; without your staff noticing the machinery behind it.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Backup & Recovery',
                        'description' => 'Automated daily backups of servers, workstations, email and databases, with off-site copies, retention rules and scheduled restore tests.',
                    ],
                    [
                        'icon' => $iconCloud,
                        'title' => 'Cloud Storage & Sync',
                        'description' => 'Managed cloud file storage and collaboration with controlled sharing, so staff work on the right version of the right file.',
                        'href' => route('cloud.ms-onedrive'),
                    ],
                    [
                        'icon' => $iconLock,
                        'title' => 'Data Security & Access',
                        'description' => 'Permissions, encryption, multi-factor authentication and removable-media policy applied consistently across users and devices.',
                        'href' => route('it-support.sn-network-security'),
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Retention & Archiving',
                        'description' => 'Clear retention schedules for email, documents and accounting records, with compliant archiving and defensible disposal.',
                    ],
                    [
                        'icon' => $iconDatabase,
                        'title' => 'Database Management',
                        'description' => 'Maintenance, indexing, performance tuning and security patching for SQL Server and MySQL systems, plus health monitoring.',
                    ],
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'Storage & SAN',
                        'description' => 'Shared storage, NAS and server-attached storage solutions sized for your data growth, with capacity planning and alerting.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'backup-policy',
                'title' => 'The 3-2-1 Approach To Backup',
                'paragraphs' => [
                    'Almost every failed backup has the same cause: it was never tested. We build backup strategies around the widely used 3-2-1 principle, then prove they work by restoring.',
                ],
                'points' => [
                    [
                        'title' => '3 copies of your data',
                        'description' => 'The live copy, a local backup and an off-site copy, so a single failure is never a total loss.',
                    ],
                    [
                        'title' => '2 different media',
                        'description' => 'Backups are written to more than one type of storage, so a failing disk, controller or NAS cannot destroy every copy at once.',
                    ],
                    [
                        'title' => '1 copy off-site',
                        'description' => 'At least one copy is stored away from your premises, protecting against fire, flood, theft and ransomware that reaches connected backups.',
                    ],
                    [
                        'title' => 'Tested restores',
                        'description' => 'A backup is only valuable if it can be restored. We schedule regular test restores and report the results in writing.',
                    ],
                ],
                'closing' => 'We also protect your data against ransomware, which deliberately targets backup systems. Immutable or offline copies, combined with endpoint protection, mean an encrypted file server does not become an irreversible loss.',
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/device-repair/data.jpg',
                'imageAlt' => 'Data storage and recovery of business information',
                'label' => 'Recovery Planning',
                'title' => 'Planning For The Worst Day',
                'icon' => $iconRefresh,
                'reverse' => true,
                'paragraphs' => [
                    'Hardware fails. Fire, flood and power damage happen. Ransomware arrives through an email attachment. Staff delete the wrong folder. A building outage takes an entire office offline for days.',
                    'Recovery planning turns those events from a crisis into an inconvenience. We document what your systems depend on, in what order they must come back, and how long each step takes &mdash; then we test the plan so it is more than theory.',
                ],
                'points' => [
                    [
                        'title' => 'Business impact analysis',
                        'description' => 'Identifying which systems and data the business cannot operate without, and for how long.',
                    ],
                    [
                        'title' => 'Recovery time objectives',
                        'description' => 'Agreeing how quickly each system must be back, and building the plan to meet it.',
                    ],
                    [
                        'title' => 'Recovery point objectives',
                        'description' => 'Deciding how much recent data loss the business can tolerate, and sizing backups accordingly.',
                    ],
                    [
                        'title' => 'Documented runbooks',
                        'description' => 'Written recovery procedures so restoration can be executed confidently, even under pressure.',
                    ],
                ],
                'link' => ['href' => route('it-support.dr-data-recovery'), 'label' => 'See our data recovery service'],
            ],
            [
                'type' => 'cards',
                'id' => 'governance',
                'title' => 'Data Governance In Practice',
                'subtitle' => 'Simple habits that keep data under control, whatever the software in use.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconUsers,
                        'title' => 'Clear Ownership',
                        'description' => 'Someone is accountable for each data set and each system, with deputies named for periods of leave.',
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Single Source Of Truth',
                        'description' => 'Shared storage and version control replace scattered email attachments and USB copies.',
                    ],
                    [
                        'icon' => $iconTrash,
                        'title' => 'Defensible Disposal',
                        'description' => 'Records past their retention period are securely destroyed, and data on decommissioned equipment is wiped.',
                    ],
                    [
                        'icon' => $iconLock,
                        'title' => 'Least Privilege',
                        'description' => 'Access granted by role, reviewed periodically and removed promptly when someone changes position or leaves.',
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Privacy Awareness',
                        'description' => 'Staff understand what data they handle, who may see it and how customer information must be protected.',
                        'href' => route('it-support.cs-security-awareness'),
                    ],
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'Capacity Planning',
                        'description' => 'Storage growth monitored so a full server is never the reason a project or an audit is blocked.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Review your backups',
                'paragraphs' => [
                    'We will review your current backup arrangements and tell you honestly what would and would not survive a real failure. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or get in touch online to arrange a data protection review.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Data" headlineAccent="Management"
        intro="Your business data is one of its most valuable assets, and managing it safely matters. We help you organise, secure, back up and recover files and databases, so your information is always available, accurate and protected against loss." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'Our services', 'href' => '#services'],
            ['label' => 'Backup policy', 'href' => '#backup-policy'],
            ['label' => 'Data governance', 'href' => '#governance'],
        ]" :sections="$sections" />
@endsection

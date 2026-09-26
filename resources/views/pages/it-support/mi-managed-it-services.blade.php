@extends('layouts.app')

@section('title', 'Managed IT Services - Bismillah Computer & Technology')
@section('description',
    'Round-the-clock managed IT services for Bangladeshi businesses: proactive monitoring, patch management,
    helpdesk support, maintenance and documented service levels.')

@section('content')
    @php
        $iconMonitor = '<rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line>';
        $iconBell = '<path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>';
        $iconCart = '<circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>';
        $iconHeadset = '<path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path>';
        $iconDatabase = '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconLineChart = '<path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconMonitor,
                'title' => 'Managed IT Services',
                'subtitle' => 'Proactive support for your entire IT environment',
                'paragraphs' => [
                    'Managed IT Services means your business outsources the day-to-day responsibility of running, securing and improving its technology to a dedicated IT team. At Bismillah Computer & Technology we act as your virtual IT department &mdash; monitoring your estate, fixing issues, patching systems and planning the technology roadmap that supports your growth.',
                    'Our engineers work with your systems, your users and your business targets. Instead of waiting for a system to fail, we identify warning signs early, resolve them in advance and keep a clear record of every ticket, every change and every improvement made to your environment.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'what-we-do',
                'title' => 'What Our Managed IT Services Cover',
                'subtitle' => 'A single accountable partner for every layer of your IT stack, from day-to-day support through to strategic planning.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconBell,
                        'title' => 'Proactive Monitoring',
                        'description' => 'Servers, workstations, printers, switches, routers and internet links are watched around the clock so faults are detected and resolved before your team is affected.',
                    ],
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Patch & Maintenance',
                        'description' => 'Operating system, application and firmware updates are tested and deployed on a planned schedule, with hardware servicing handled before it becomes a failure.',
                    ],
                    [
                        'icon' => $iconHeadset,
                        'title' => 'Help Desk Support',
                        'description' => 'A friendly, responsive helpdesk resolves user issues quickly, with remote assistance, on-site attendance and clear escalation when a problem is more complex.',
                        'href' => route('it-support.mi-help-desk-support'),
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Security Management',
                        'description' => 'Endpoint protection, patching discipline, backup verification and access control are maintained continuously, reducing exposure to malware, ransomware and data loss.',
                        'href' => route('it-support.cs-cloud-network'),
                    ],
                    [
                        'icon' => $iconDatabase,
                        'title' => 'Backup & Data Management',
                        'description' => 'Automatic, tested backups with off-site copies, retention policies and regular restore testing keep your business data safe and recoverable.',
                        'href' => route('it-support.mi-data-management'),
                    ],
                    [
                        'icon' => $iconClipboard,
                        'title' => 'Documentation & Reporting',
                        'description' => 'Asset registers, network diagrams, service reviews and monthly reports give you a complete picture of your estate, its cost and its performance.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'how-it-works',
                'title' => 'How Our Managed IT Service Works',
                'subtitle' => 'Four clear stages take you from a reactive environment to a fully managed one.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Discovery & Audit',
                        'description' => 'We document every device, user, server, application and licence, then benchmark security, capacity and current risks.',
                    ],
                    [
                        'title' => 'Stabilise',
                        'description' => 'Critical issues, failing hardware, backup gaps and security weaknesses are remediated so the environment becomes stable and reliable.',
                    ],
                    [
                        'title' => 'Standardise',
                        'description' => 'Configurations, security policies, backups and documentation are standardised, making support faster and safer for everyone.',
                    ],
                    [
                        'title' => 'Improve & Advise',
                        'description' => 'A quarterly technology plan reviews performance, budgets and upgrades so your IT keeps pace with the business.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/managed-it/section-1.jpg',
                'imageAlt' => 'Managed IT engineers monitoring business systems',
                'label' => '24/7 Monitoring',
                'title' => 'Proactive Monitoring Keeps You Working',
                'icon' => $iconBell,
                'paragraphs' => [
                    'Most business downtime is avoidable. Disk failures, full mailboxes, expiring licences, interrupted connectivity and overloaded servers all generate warning signals long before they cause an outage.',
                    'Our engineers monitor those signals continuously and act on them before your team is disrupted. Where an outage is unavoidable, you receive clear updates, an honest impact assessment and a realistic restoration time.',
                ],
                'points' => [
                    [
                        'title' => 'Server health',
                        'description' => 'CPU, memory, storage, event logs and service availability are checked continuously.',
                    ],
                    [
                        'title' => 'Workstation health',
                        'description' => 'Disk space, antivirus status, patch levels and device errors are tracked per user.',
                    ],
                    [
                        'title' => 'Network & connectivity',
                        'description' => 'Routers, switches, Wi-Fi coverage, firewall rules and internet links are monitored for drops and misuse.',
                    ],
                    [
                        'title' => 'Backup verification',
                        'description' => 'Every backup job is checked, and restore tests prove the data can actually be recovered.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'included',
                'title' => 'Included In Every Managed IT Plan',
                'paragraphs' => [
                    'Every plan is built around a documented service level agreement, so you always know what is covered, how quickly we respond and what it costs.',
                ],
                'points' => [
                    [
                        'title' => 'Unlimited remote support',
                        'description' => 'Telephone, remote desktop and email support for every user included in the agreement, with a single point of contact for your team.',
                    ],
                    [
                        'title' => 'Documented response times',
                        'description' => 'Priority-based response targets, from critical production outages to low-impact requests, agreed in writing before work begins.',
                    ],
                    [
                        'title' => 'Fixed monthly cost',
                        'description' => 'A predictable monthly fee per user or per device replaces unpredictable break-fix invoices, making IT budgeting simple.',
                    ],
                    [
                        'title' => 'On-site attendance',
                        'description' => 'Scheduled preventive maintenance visits in Dhaka and across Bangladesh, with emergency call-outs when they are needed.',
                    ],
                    [
                        'title' => 'Asset lifecycle management',
                        'description' => 'We track warranty, depreciation and refresh dates and advise you on the right time to replace equipment.',
                    ],
                    [
                        'title' => 'Quarterly service reviews',
                        'description' => 'Open tickets, response times, system health and improvement opportunities are reviewed with your management team.',
                    ],
                ],
                'closing' => 'Managed IT is not simply outsourced break-fix support. It is a partnership built on measurement, prevention and honest advice about what your technology should deliver for your business.',
            ],
            [
                'type' => 'cards',
                'id' => 'service-plans',
                'title' => 'Managed IT Plans For Every Business',
                'subtitle' => 'Plans scale with the size of your team and the criticality of your systems. We tailor the mix of services, and update it as you grow.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconUsers,
                        'title' => 'Essential',
                        'description' => 'For small offices that need dependable cover: business-hours support, patching, monitoring, backup checks and quarterly reviews.',
                    ],
                    [
                        'icon' => $iconLineChart,
                        'title' => 'Business',
                        'description' => 'For growing organisations: 24/7 cover, server and network management, security maintenance, project support and monthly reporting.',
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Enterprise',
                        'description' => 'For critical operations: dedicated engineers, redundant infrastructure, disaster recovery planning, compliance support and a named account manager.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Book a consultation',
                'paragraphs' => [
                    'Tell us how many people and devices you run today, and we will map out the managed IT plan that fits. Call us on <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry and a consultant will respond with a clear, no-obligation proposal.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Managed IT" headlineAccent="Services"
        intro="Managed IT services give your business a dedicated technology team without the cost of hiring in-house staff. We take care of your computers, servers, network, security and day-to-day support, so your employees can stay focused on their own work." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'What we do', 'href' => '#what-we-do'],
            ['label' => 'How it works', 'href' => '#how-it-works'],
            ['label' => 'Service plans', 'href' => '#service-plans'],
        ]" :sections="$sections" />
@endsection

@extends('layouts.app')

@section('title', 'Help Desk Support - Bismillah Computer & Technology')
@section('description',
    'Professional IT help desk support for Bangladeshi businesses: phone, email and remote assistance, on-site response and documented service levels.')

@section('content')
    @php
        $iconHeadset = '<path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path>';
        $iconMail = '<rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>';
        $iconMonitor = '<rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line>';
        $iconTool = '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>';
        $iconClock = '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconAlert = '<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4M12 17h.01"></path>';
        $iconTrending = '<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconHeadset,
                'title' => 'Help Desk Support',
                'subtitle' => 'One number to call, every problem resolved',
                'paragraphs' => [
                    'When something stops working, your staff need a single, dependable point of contact &mdash; not a list of vendors to chase. Our help desk gives your business one number, one email address and one team accountable for getting people working again.',
                    'Most issues are resolved on first contact by telephone, email or remote assistance. When hands-on attendance is genuinely required, we send an engineer with the parts and experience to complete the job in a single visit wherever possible.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'support-channels',
                'title' => 'How You Reach Us',
                'subtitle' => 'Multiple channels, one ticket system &mdash; whatever works for your team, the outcome is tracked the same way.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconHeadset,
                        'title' => 'Telephone Support',
                        'description' => 'Speak directly to an engineer who can see your systems, your network and your ticket history while you are on the line.',
                    ],
                    [
                        'icon' => $iconMail,
                        'title' => 'Email & Ticket Logging',
                        'description' => 'Raise a ticket by email or through the helpdesk portal. Every request is recorded with a reference number, owner and status.',
                    ],
                    [
                        'icon' => $iconMonitor,
                        'title' => 'Remote Assistance',
                        'description' => 'With your permission we connect to the affected device or server, diagnose the fault and resolve it without a site visit in most cases.',
                    ],
                    [
                        'icon' => $iconUsers,
                        'title' => 'On-Site Attendance',
                        'description' => 'Scheduled visits in Dhaka and across Bangladesh, plus emergency call-outs for outages that affect business operations.',
                    ],
                    [
                        'icon' => $iconClock,
                        'title' => 'Scheduled Support Hours',
                        'description' => 'Business-hours cover for standard plans, extended hours and 24/7 cover for critical environments.',
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Escalation Management',
                        'description' => 'Complex or vendor-related issues are escalated to a senior engineer and, where needed, coordinated with the manufacturer or supplier.',
                    ],
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'common-requests',
                'title' => 'What Users Ask Us For Most',
                'subtitle' => 'The everyday requests that consume time across any office, handled as a standard part of the service.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconAlert,
                        'title' => 'Slow Computers',
                        'description' => 'Startup, storage and background process problems diagnosed and resolved, with advice on upgrades when replacement is the better answer.',
                    ],
                    [
                        'icon' => $iconMail,
                        'title' => 'Email & Account Issues',
                        'description' => 'Mailbox configuration, password resets, shared mailbox access, signature and archive setup, and external access problems.',
                        'href' => route('it-support.cs-security-awareness'),
                    ],
                    [
                        'icon' => $iconMonitor,
                        'title' => 'Printers & Scanning',
                        'description' => 'Printer deployment, queue management, driver installation, scanning to email or network folders and consumable planning.',
                    ],
                    [
                        'icon' => $iconMonitor,
                        'title' => 'New User Onboarding',
                        'description' => 'Account creation, mailbox setup, device configuration, application deployment and data transfer before a new starter begins work.',
                    ],
                    [
                        'icon' => $iconTool,
                        'title' => 'Software Installation',
                        'description' => 'Approved business software installed, licensed and configured, including updates, add-ins and integrations.',
                    ],
                    [
                        'icon' => $iconTrending,
                        'title' => 'Performance Improvement',
                        'description' => 'Proactive tune-ups: disk cleanup, startup management, system health checks and recommendations for hardware refresh.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'id' => 'service-levels',
                'image' => '/images/it-support/it.jpg',
                'imageAlt' => 'Help desk engineers providing remote support',
                'label' => 'Service Levels',
                'title' => 'Response Times You Can Plan Around',
                'icon' => $iconClock,
                'paragraphs' => [
                    'Every managed service agreement defines priority levels and response targets in writing, so your team knows exactly what to expect and your management team can measure what they are receiving.',
                    'We also review response times and open tickets with you regularly. If performance drifts, we correct it &mdash; because a support contract should be judged on what it delivers, not on what it promises.',
                ],
                'points' => [
                    [
                        'title' => 'Critical',
                        'description' => 'Business is unable to work. Acknowledged immediately and worked on continuously until service is restored.',
                    ],
                    [
                        'title' => 'High',
                        'description' => 'A significant group of users is affected, or a critical system is degraded. Same business day, with a workaround provided.',
                    ],
                    [
                        'title' => 'Normal',
                        'description' => 'An individual user is affected but a workaround exists. Handled within the agreed target, usually the next business day.',
                    ],
                    [
                        'title' => 'Scheduled',
                        'description' => 'Planned work such as installations, upgrades and configuration changes, agreed and delivered to a schedule.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'good-helpdesk',
                'title' => 'What Makes A Help Desk Worth Keeping',
                'paragraphs' => [
                    'A help desk earns its place by removing friction for the people who use it. That comes down to a handful of behaviours we hold ourselves to.',
                ],
                'points' => [
                    [
                        'title' => 'A real person answers',
                        'description' => 'No endless phone trees. Your call is answered by someone who can start diagnosing immediately.',
                    ],
                    [
                        'title' => 'No repeat explanations',
                        'description' => 'Your infrastructure is documented, so engineers arriving on a ticket already understand the environment.',
                    ],
                    [
                        'title' => 'Ownership until closure',
                        'description' => 'The engineer who takes a ticket stays responsible for it until the user confirms the issue is resolved.',
                    ],
                    [
                        'title' => 'Plain language',
                        'description' => 'You receive a clear explanation of what failed, why it failed, and what happens next &mdash; in terms a non-technical colleague can use.',
                    ],
                ],
                'closing' => 'Support that is easy to use gets used. That is how small problems stay small and how a productive workforce is protected.',
            ],
            [
                'type' => 'contact',
                'label' => 'Enable support',
                'paragraphs' => [
                    'We can support your existing IT environment or take on the whole estate as part of a managed service plan. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> to discuss coverage hours, response targets and pricing for your team.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Help Desk" headlineAccent="Support"
        intro="A well-run help desk gives your staff fast answers when technology gets in the way. Our engineers handle everything from password resets and printer problems to application errors, with remote support that resolves most issues within minutes." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'Contact methods', 'href' => '#support-channels'],
            ['label' => 'Common requests', 'href' => '#common-requests'],
            ['label' => 'Service levels', 'href' => '#service-levels'],
        ]" :sections="$sections" />
@endsection

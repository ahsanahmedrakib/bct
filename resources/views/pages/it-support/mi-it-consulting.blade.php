@extends('layouts.app')

@section('title', 'IT Consulting - Bismillah Computer & Technology')
@section('description',
    'IT consulting for growing businesses: infrastructure assessments, technology roadmaps, cloud strategy, security alignment and vendor-neutral advice.')

@section('content')
    @php
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';
        $iconSearch = '<circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path>';
        $iconLineChart = '<path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path>';
        $iconCloud = '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconClipboard,
                'title' => 'IT Consulting',
                'subtitle' => 'Independent, vendor-neutral technology advice',
                'paragraphs' => [
                    'Technology decisions are easy to get wrong in expensive ways. A server bought for a two-year need that should last five; a cloud migration that moves costs but not capability; a security programme that satisfies an auditor without reducing real risk.',
                    'Our consultants assess what you have, understand what your business will need next, and recommend a realistic path between the two. We are not tied to a single vendor, so the advice you receive is designed around your business rather than around someone else\'s sales target.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'services',
                'title' => 'Consulting Services',
                'subtitle' => 'Engagements that can be scoped as a one-off review or as ongoing advisory support alongside your managed IT plan.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconSearch,
                        'title' => 'Infrastructure Assessment',
                        'description' => 'A full audit of your servers, network, workstations and applications, with a prioritised list of risks, gaps and quick wins.',
                    ],
                    [
                        'icon' => $iconLineChart,
                        'title' => 'Technology Roadmap',
                        'description' => 'A phased three-year plan covering refresh cycles, budget, sequencing and the business case for each investment.',
                    ],
                    [
                        'icon' => $iconCloud,
                        'title' => 'Cloud Strategy',
                        'description' => 'Deciding what belongs in the cloud and what should stay local, covering licensing, connectivity, security and exit strategy.',
                        'href' => route('cloud.services'),
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Security & Risk Advisory',
                        'description' => 'Risk assessment, security policy development and alignment with recognised frameworks such as the ACSC Essential Eight.',
                        'href' => route('it-support.cs-essential-eight'),
                    ],
                    [
                        'icon' => $iconNetwork,
                        'title' => 'Network & Connectivity Design',
                        'description' => 'Structured cabling, switching, wireless coverage and connectivity design for offices, branches and multi-site operations.',
                        'href' => route('it-support.sn-network-consulting-design'),
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Server & Virtualisation',
                        'description' => 'Sizing, consolidation and virtualisation advice that reduces hardware overhead and operating cost without disrupting production.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'engagement',
                'title' => 'How A Consulting Engagement Runs',
                'subtitle' => 'A clear, time-boxed process with defined deliverables and no obligation to proceed afterwards.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Discover',
                        'description' => 'Interviews with management and staff, review of the current estate, contracts, licences and documentation.',
                    ],
                    [
                        'title' => 'Analyse',
                        'description' => 'Findings mapped against business goals, growth plans, risk appetite and realistic budget constraints.',
                    ],
                    [
                        'title' => 'Recommend',
                        'description' => 'Prioritised options with costs, timelines, dependencies and an honest view of the trade-offs involved.',
                    ],
                    [
                        'title' => 'Deliver',
                        'description' => 'Optionally, we implement the agreed roadmap ourselves and manage suppliers on your behalf through to completion.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/capablities.jpg',
                'imageAlt' => 'IT consultants reviewing business technology strategy',
                'label' => 'Business Alignment',
                'title' => 'Start With The Business, Not The Technology',
                'icon' => $iconLineChart,
                'paragraphs' => [
                    'Technology is a means, not an outcome. The most valuable question is not which platform is best, but what your business must be able to do that it cannot do today.',
                    'We work backwards from that. Revenue growth, customer response times, remote working, audit obligations, manufacturing throughput &mdash; each produces a clear set of technical requirements, and the technology decision follows from them.',
                ],
                'points' => [
                    [
                        'title' => 'Growth and change',
                        'description' => 'Headcount growth, new branches, new locations and hybrid working all change the infrastructure you need.',
                    ],
                    [
                        'title' => 'Risk and compliance',
                        'description' => 'Regulatory, contractual and client security requirements define the minimum bar your controls must clear.',
                    ],
                    [
                        'title' => 'Budget reality',
                        'description' => 'Recommendations are phased across financial periods so improving security does not require a single large capital outlay.',
                    ],
                    [
                        'title' => 'Skills available',
                        'description' => 'Technology your own team can maintain is worth more than technology nobody on site can support.',
                    ],
                ],
                'link' => ['href' => route('it-support.mi-managed-it-services'), 'label' => 'See how we support these plans'],
            ],
            [
                'type' => 'cards',
                'id' => 'who',
                'title' => 'Who We Advise',
                'subtitle' => 'Our consulting work spans organisations at every stage of technology maturity.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconUsers,
                        'title' => 'Small & Medium Businesses',
                        'description' => 'Establishing a dependable, affordable IT foundation when there is no internal IT department and no budget surprises.',
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Growing Organisations',
                        'description' => 'Scaling infrastructure, standardising processes and removing the manual workarounds that start limiting growth.',
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Regulated & Client-Driven',
                        'description' => 'Meeting security, privacy and audit obligations for clients who now expect evidence, not assurances.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Book a consultation',
                'paragraphs' => [
                    'A first consultation is the fastest way to find out whether your technology is helping or holding your business back. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry and we will arrange a visit, a site survey and a written recommendation.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="IT" headlineAccent="Consulting"
        intro="IT consulting helps you invest in the right technology instead of the wrong one. We assess your current systems, identify risks and gaps, and deliver a clear, practical roadmap that matches your budget and your business goals." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'Services', 'href' => '#services'],
            ['label' => 'How we engage', 'href' => '#engagement'],
            ['label' => 'Who we advise', 'href' => '#who'],
        ]" :sections="$sections" />
@endsection

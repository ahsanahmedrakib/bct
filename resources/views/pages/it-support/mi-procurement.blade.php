@extends('layouts.app')

@section('title', 'IT Procurement - Bismillah Computer & Technology')
@section('description',
    'Business IT procurement in Bangladesh: honest advice, genuine hardware, competitive pricing, licensed software and full warranty support from Bismillah Computer & Technology.')

@section('content')
    @php
        $iconCart = '<circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';
        $iconPackage = '<path d="m7.5 4.27 9 5.15"></path><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path><path d="m3.3 7 8.7 5 8.7-5"></path><path d="M12 22V12"></path>';
        $iconLineChart = '<path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path>';
        $iconHandshake = '<path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconCart,
                'title' => 'IT Procurement',
                'subtitle' => 'The right equipment, licensed software and a supplier who stands behind it',
                'paragraphs' => [
                    'Buying technology is easy; buying the right technology is not. Specification sheets rarely reveal which model will actually suit your users, your power supply, your network and your budget three years from now.',
                    'Bismillah Computer & Technology handles IT procurement for businesses across Bangladesh. We assess the requirement, recommend honest options, source genuine products at competitive prices, and remain accountable for the equipment long after the invoice is settled.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'what-we-supply',
                'title' => 'What We Supply',
                'subtitle' => 'One supplier for the whole estate removes compatibility guesswork, duplicated invoices and warranty disputes.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconServer,
                        'title' => 'Business Computers',
                        'description' => 'Desktops, all-in-ones, workstations and laptops sized for office, design, engineering and finance workloads, configured and ready to deploy.',
                    ],
                    [
                        'icon' => $iconPackage,
                        'title' => 'Servers & Storage',
                        'description' => 'Tower and rack servers, NAS appliances, SAN and SSD storage, plus memory, processors and redundant power supplies for existing systems.',
                    ],
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Networking Equipment',
                        'description' => 'Firewalls, routers, managed switches, wireless access points, cabling, patch panels and structured cabling materials for offices of every size.',
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Security Solutions',
                        'description' => 'Endpoint protection, next-generation firewalls, email and web filtering, secure remote access and hardware or virtualised network security appliances.',
                        'href' => route('it-support.cs-endpoint'),
                    ],
                    [
                        'icon' => $iconClipboard,
                        'title' => 'Licensed Software',
                        'description' => 'Genuine operating systems, Office applications, design and engineering tools, and business applications with proper volume licensing and support.',
                    ],
                    [
                        'icon' => $iconPackage,
                        'title' => 'Peripherals & Consumables',
                        'description' => 'Monitors, docking stations, keyboards, mice, headsets, printers, scanners, UPS units and replacement parts for daily office use.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'how-it-works',
                'title' => 'Our Procurement Process',
                'subtitle' => 'A structured approach that protects your budget and your timeline.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Requirement Analysis',
                        'description' => 'We review what the equipment must actually do, who will use it, and what it must integrate with before recommending anything.',
                    ],
                    [
                        'title' => 'Specification & Quotation',
                        'description' => 'You receive a written specification with options and transparent pricing, so nothing is hidden and every line can be justified.',
                    ],
                    [
                        'title' => 'Sourcing & Supply',
                        'description' => 'Genuine stock is sourced from authorised channels, delivered, installed and configured, with licences and warranty documents handed over.',
                    ],
                    [
                        'title' => 'Support & Warranty',
                        'description' => 'We manage warranty claims on your behalf and remain your single point of contact for the lifetime of the equipment.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/managed-it/section-2.jpg',
                'imageAlt' => 'IT procurement and hardware supply for business',
                'label' => 'Genuine Products',
                'title' => 'Authorised Supply, Real Warranties',
                'icon' => $iconShield,
                'paragraphs' => [
                    'The counterfeit and grey-market hardware that circulates in the market looks identical until it fails. Genuine products carry valid warranties, published specifications and firmware updates; unverified stock often carries none of these.',
                    'We supply authorised products only. That means your warranty is valid at authorised service centres, spare parts are available, and drivers and security patches are released as intended by the manufacturer.',
                ],
                'points' => [
                    [
                        'title' => 'No hidden margin',
                        'description' => 'Quotations show the specification and the price, so you can compare like with like across suppliers.',
                    ],
                    [
                        'title' => 'Total cost of ownership',
                        'description' => 'We factor warranty cover, power consumption, support costs and expected lifespan, not just the purchase price.',
                    ],
                    [
                        'title' => 'Lease and staged purchase',
                        'description' => 'For larger deployments, equipment can be phased across a financial year so cash flow matches your budget.',
                    ],
                    [
                        'title' => 'Trade-in and refresh',
                        'description' => 'We value and dispose of ageing equipment securely, including data sanitisation before recycling.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'why-bct',
                'title' => 'Why Businesses Procure With Bismillah IT',
                'paragraphs' => [
                    'Because the cheapest quotation is rarely the cheapest option once downtime, replacement parts and lost productivity are counted.',
                ],
                'points' => [
                    [
                        'title' => 'Independent advice',
                        'description' => 'We recommend what fits the requirement, even when that means selling you less hardware than you asked for.',
                    ],
                    [
                        'title' => 'Compatibility assurance',
                        'description' => 'Every purchase is checked against your existing operating systems, applications and network before it is quoted.',
                    ],
                    [
                        'title' => 'Delivery and installation',
                        'description' => 'Supply, imaging, deployment, user onboarding and data transfer are handled as one coordinated job.',
                    ],
                    [
                        'title' => 'Asset records',
                        'description' => 'Serial numbers, warranties, licences and purchase dates are recorded in your asset register for audit and resale purposes.',
                    ],
                ],
                'closing' => 'Many of our procurement clients stay with us for years because, when something does go wrong, there is one accountable party to call.',
            ],
            [
                'type' => 'contact',
                'label' => 'Request a quotation',
                'paragraphs' => [
                    'Send us your requirement &mdash; even a rough list &mdash; and we will return a written specification and quotation. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or contact us online to discuss your next purchase.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="IT" headlineAccent="Procurement"
        intro="IT procurement makes buying technology straightforward, fair and reliable. We assess what you actually need, source genuine hardware and software at competitive prices, and handle the supply, configuration and deployment for you." image="/images/it-support/hero.png"
        imageAlt="Managed IT Services Hero" :anchors="[
            ['label' => 'What we supply', 'href' => '#what-we-supply'],
            ['label' => 'How we work', 'href' => '#how-it-works'],
            ['label' => 'Request a quote', 'href' => route('contact')],
        ]" :sections="$sections" />
@endsection

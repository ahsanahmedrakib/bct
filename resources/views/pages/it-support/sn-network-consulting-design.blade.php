@extends('layouts.app')

@section('title', 'Network Consulting and Design - Bismillah Computer & Technology')
@section('description',
    'Network consulting and design services: site surveys, structured cabling, switching, Wi-Fi coverage, WAN architecture and documentation for Bangladeshi businesses.')

@section('content')
    @php
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconMapPin = '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle>';
        $iconRuler = '<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path><path d="m14.5 12.5 2-2"></path><path d="m11.5 9.5 2-2"></path><path d="m8.5 6.5 2-2"></path><path d="m17.5 15.5 2-2"></path>';
        $iconRouter = '<rect width="20" height="8" x="2" y="14" rx="2"></rect><path d="M6.01 18H6"></path><path d="M10.01 18H10"></path><path d="M4 10a12 12 0 0 1 16 0"></path><path d="M7 13a8 8 0 0 1 10 0"></path><path d="M12 16h.01"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconLayers = '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 12.5-9.17 4.16a2 2 0 0 1-1.66 0L2 12.5"></path><path d="m22 17.5-9.17 4.16a2 2 0 0 1-1.66 0L2 17.5"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconNetwork,
                'title' => 'Network Consulting and Design',
                'subtitle' => 'Designed once, documented properly, expandable for years',
                'paragraphs' => [
                    'A network is the part of your infrastructure that is hardest and most expensive to change after installation. Cable routes, risers, power and cooling all have to be right before the first cable is pulled, and every decision made on day one affects what you can do for the next decade.',
                    'Our network consultants design practical, standards-based infrastructure for offices, warehouses, retail sites, clinics and multi-site operations. We survey your building, model how the business will grow, and produce a documented design you can build on and extend later.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'services',
                'title' => 'Design Services We Provide',
                'subtitle' => 'Engage us for the full design or for a single element of it, such as a Wi-Fi survey or a WAN architecture review.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconRuler,
                        'title' => 'Site Survey & Assessment',
                        'description' => 'Physical survey of the building, existing cabling, power, interference and coverage requirements, including photographs and measurements.',
                    ],
                    [
                        'icon' => $iconNetwork,
                        'title' => 'LAN Architecture',
                        'description' => 'Structured cabling design, switch port planning, VLAN segmentation, PoE requirements and equipment selection sized for growth.',
                    ],
                    [
                        'icon' => $iconRouter,
                        'title' => 'Wireless Design',
                        'description' => 'Access point placement, channel planning, guest and corporate wireless separation, and coverage validation after install.',
                        'href' => route('it-support.sn-wifi-networking'),
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Server Room Design',
                        'description' => 'Rack layout, power distribution, UPS sizing, cooling, cable management and remote access requirements for the comms room.',
                    ],
                    [
                        'icon' => $iconLayers,
                        'title' => 'WAN & Multi-Site Design',
                        'description' => 'Branch and site-to-site architecture, link selection, routing, resilience and centralised management across locations.',
                        'href' => route('it-support.sn-vpn-solutions'),
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Documentation & As-Built Drawings',
                        'description' => 'Test results, labelled patching schedules, IP addressing plans, rack elevations and as-built drawings you keep for future work.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'process',
                'title' => 'Our Design Process',
                'subtitle' => 'A structured engagement that removes guesswork before anything is installed.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Discovery',
                        'description' => 'We speak to management and IT, review current diagrams, and understand how the business and its staff will use the network.',
                    ],
                    [
                        'title' => 'Survey',
                        'description' => 'On-site measurement of distances, outlets, risers, power, interference and existing equipment, with photographic evidence.',
                    ],
                    [
                        'title' => 'Design & Document',
                        'description' => 'Drawings, equipment schedules, cable schedules, addressing plans and a clear bill of quantities for costing.',
                    ],
                    [
                        'title' => 'Review & Support',
                        'description' => 'We present the design, refine it with you, and support installation and commissioning by your contractor or ours.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/servers-and-networking/solutions.jpg',
                'imageAlt' => 'Network cabling and structured cabling connectors',
                'label' => 'Standards',
                'title' => 'Built To Standards, Tested To Prove It',
                'icon' => $iconRuler,
                'paragraphs' => [
                    'Structured cabling follows recognised international standards for permanent link and channel performance. Designing to those standards means every outlet can support current speeds today and higher speeds tomorrow without the cabling being replaced.',
                    'Cabling that is installed without certification is a risk: it looks finished, it tests as installed, and it fails intermittently under load months later. We certify every link and hand over the results.',
                ],
                'points' => [
                    [
                        'title' => 'Cat6 and Cat6A pathways',
                        'description' => 'Designed for 1 Gbps today with the pathway and termination practice to support 10 Gbps later where required.',
                    ],
                    [
                        'title' => 'Certification testing',
                        'description' => 'Permanent link and channel certification with printed results stored for warranty and future troubleshooting.',
                    ],
                    [
                        'title' => 'Redundant pathways',
                        'description' => 'Two diverse routes to critical devices so a single cable or socket failure is not an outage.',
                    ],
                    [
                        'title' => 'Scalable patching',
                        'description' => 'Patch panels, cable management and rack space provided so adding a user or a new switch does not mean rebuilding the room.',
                    ],
                ],
                'link' => ['href' => route('it-support.sn-network-installation'), 'label' => 'See our installation service'],
            ],
            [
                'type' => 'points',
                'id' => 'segmentation',
                'title' => 'Designing For Security And Scale',
                'paragraphs' => [
                    'Segmentation is what separates a network that is merely connected from one that is controlled. It is also the single most effective way to limit the damage a compromised device can do.',
                ],
                'points' => [
                    [
                        'title' => 'VLAN segmentation',
                        'description' => 'Separate networks for staff, guests, servers, management, cameras, phones and IoT, so traffic cannot cross between them freely.',
                    ],
                    [
                        'title' => 'Device isolation',
                        'description' => 'Ports and devices that should only talk to specific destinations are restricted, limiting the spread of malware.',
                    ],
                    [
                        'title' => 'Management access',
                        'description' => 'Network equipment administered from a dedicated management network with strong credentials and restricted access.',
                    ],
                    [
                        'title' => 'Capacity headroom',
                        'description' => 'Switch port counts, uplink bandwidth and PoE budgets designed with headroom, so growth is a routine change rather than a rebuild.',
                    ],
                    [
                        'title' => 'Remote sites',
                        'description' => 'Branch networks designed to survive WAN interruption and recover without on-site attendance.',
                    ],
                ],
                'closing' => 'A documented design is also an operational asset: the next engineer, contractor or owner can extend the network confidently because the original intent was written down.',
            ],
            [
                'type' => 'contact',
                'label' => 'Request a survey',
                'paragraphs' => [
                    'We can carry out a survey of a single floor or a full multi-site review. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry with your floor plan and we will arrange a site visit.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Network Consulting" headlineAccent="and Design"
        intro="A well-designed network is the backbone of a modern business. We plan and design structured cabling, wireless coverage and network architecture that performs reliably, scales easily and is built to your workplace layout."
        image="/images/it-support/servers-and-networking/hero.png"
        imageAlt="Servers and Networking Hero" :anchors="[
            ['label' => 'Design services', 'href' => '#services'],
            ['label' => 'Our process', 'href' => '#process'],
            ['label' => 'Security and scale', 'href' => '#segmentation'],
        ]" :sections="$sections" />
@endsection

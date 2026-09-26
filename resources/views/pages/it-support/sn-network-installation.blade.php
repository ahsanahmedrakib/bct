@extends('layouts.app')

@section('title', 'Network Installation - Bismillah Computer & Technology')
@section('description',
    'Structured network installation in Bangladesh: cabling, patching, switch and firewall deployment, testing, labelling and handover documentation.')

@section('content')
    @php
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconRuler = '<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path><path d="m14.5 12.5 2-2"></path><path d="m11.5 9.5 2-2"></path><path d="m8.5 6.5 2-2"></path><path d="m17.5 15.5 2-2"></path>';
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconRouter = '<rect width="20" height="8" x="2" y="14" rx="2"></rect><path d="M6.01 18H6"></path><path d="M10.01 18H10"></path><path d="M4 10a12 12 0 0 1 16 0"></path><path d="M7 13a8 8 0 0 1 10 0"></path><path d="M12 16h.01"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconWrench = '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>';
        $iconClock = '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconTool = '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconServer,
                'title' => 'Network Installation',
                'subtitle' => 'Cabling, hardware and commissioning, delivered as one job',
                'paragraphs' => [
                    'Installing a business network involves a surprising number of trades: containment and cabling, outlet installation, rack assembly, switch and firewall configuration, wireless coverage, testing and documentation. Handled by separate contractors, the gaps between them are where faults appear.',
                    'Bismillah Computer & Technology delivers network installation end to end with our own engineers, from pulling cable through to a fully commissioned, tested and documented network your staff can use from day one.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'scope',
                'title' => 'Installation Scope',
                'subtitle' => 'Single-floor fit-outs, multi-floor offices, branch networks and full building infrastructure.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconRuler,
                        'title' => 'Structured Cabling',
                        'description' => 'Cat6 and Cat6A horizontal and backbone cabling, outlets, patch panels, trunking, risers and cable management to standard.',
                    ],
                    [
                        'icon' => $iconNetwork,
                        'title' => 'Switching & PoE',
                        'description' => 'Managed access and distribution switches, VLAN configuration, spanning tree settings, PoE budgets for phones, cameras and access points.',
                    ],
                    [
                        'icon' => $iconRouter,
                        'title' => 'Routers & Firewalls',
                        'description' => 'Internet gateways, firewall deployment, policy rules, NAT, VPN capability and traffic filtering tuned to your requirements.',
                        'href' => route('it-support.sn-network-security'),
                    ],
                    [
                        'icon' => $iconRouter,
                        'title' => 'Wireless Deployment',
                        'description' => 'Access point mounting, cabling, SSID and security configuration, plus coverage validation and roaming tuning.',
                        'href' => route('it-support.sn-wifi-networking'),
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'Server Room Build',
                        'description' => 'Rack assembly, power distribution, UPS installation, grounding, cooling and environmental monitoring.',
                    ],
                    [
                        'icon' => $iconTool,
                        'title' => 'Camera & Access Point Cabling',
                        'description' => 'IP cameras, NVRs, door access, telephony and specialist device cabling integrated into the same network.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'installation',
                'title' => 'How We Install',
                'subtitle' => 'Four phases, each with a clear handover point and no surprises at the end.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Prepare',
                        'description' => 'Site preparation, cable routes agreed, protection in place for floors, ceilings and finishes, and a delivery schedule issued.',
                    ],
                    [
                        'title' => 'Install',
                        'description' => 'Containment, cable pulling, termination, outlet and rack hardware installed to standard, with photographs as work progresses.',
                    ],
                    [
                        'title' => 'Configure',
                        'description' => 'Switches, routers, firewalls and wireless configured, firmware applied, VLANs, security and management access set up.',
                    ],
                    [
                        'title' => 'Test & Handover',
                        'description' => 'Certification testing, connectivity and performance validation, labelling, as-built drawings and technician walkthrough.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/servers-and-networking/networking.jpg',
                'imageAlt' => 'Installed network rack and structured cabling',
                'label' => 'Quality Assurance',
                'title' => 'Tested, Labelled And Documented',
                'icon' => $iconFileText,
                'reverse' => true,
                'paragraphs' => [
                    'The difference between an installation that works on day one and one that causes trouble in six months is almost always in the details: terminations, labelling, testing and documentation.',
                    'We certify every cable run, label both ends of every patch lead and outlet to a consistent scheme, and hand over the results as part of the project. Your next engineer can trace any connection without guesswork.',
                ],
                'points' => [
                    [
                        'title' => 'Cable certification',
                        'description' => 'Permanent link and channel testing to standard, with printed results retained for warranty purposes.',
                    ],
                    [
                        'title' => 'Consistent labelling',
                        'description' => 'Outlets, patch panels, ports and equipment labelled to a documented scheme that matches the as-built drawings.',
                    ],
                    [
                        'title' => 'As-built documentation',
                        'description' => 'Rack elevations, port maps, IP addressing plan and cable schedules delivered at handover.',
                    ],
                    [
                        'title' => 'Staged commissioning',
                        'description' => 'Installation completed out of hours or zone by zone where the business cannot absorb an outage.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'during-install',
                'title' => 'Working Around A Live Business',
                'paragraphs' => [
                    'Most installations happen in offices that are open. Our project planning accounts for that, so the network is delivered without disrupting the working day.',
                ],
                'points' => [
                    [
                        'title' => 'Out-of-hours work',
                        'description' => 'Cabling and cutovers scheduled after hours or at weekends, with your business notified in advance.',
                    ],
                    [
                        'title' => 'Temporary connectivity',
                        'description' => 'Temporary wireless or spare switch ports keep users connected while each area is migrated.',
                    ],
                    [
                        'title' => 'Clear communication',
                        'description' => 'A written schedule of what happens where and when, so managers can inform their teams before they notice.',
                    ],
                    [
                        'title' => 'Rollback plan',
                        'description' => 'Old configurations and cabling retained until the new network is proven, so any issue can be reversed quickly.',
                    ],
                ],
                'closing' => 'After handover, we are still the point of contact. Managed network support, monitoring and further expansion can be added at any time &mdash; see our <a href="' . route('it-support.mi-managed-it-services') . '" class="text-blue-600 font-medium hover:underline">managed IT services</a>.',
            ],
            [
                'type' => 'contact',
                'label' => 'Plan your installation',
                'paragraphs' => [
                    'Send us your floor plan and the number of outlets, devices and locations you need, and we will come back with an approach and a fixed quotation. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> to arrange a site visit.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Network" headlineAccent="Installation"
        intro="Proper network installation is what makes fast, dependable connectivity possible across your office. Our engineers install, terminate and test cabling, switches and access points, then certify every outlet so your network performs as designed."
        image="/images/it-support/servers-and-networking/hero.png" imageAlt="Servers and Networking Hero"
        :anchors="[
            ['label' => 'Scope of work', 'href' => '#scope'],
            ['label' => 'How we install', 'href' => '#installation'],
            ['label' => 'Working around business', 'href' => '#during-install'],
        ]" :sections="$sections" />
@endsection

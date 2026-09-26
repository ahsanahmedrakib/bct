@extends('layouts.app')

@section('title', 'Wi-Fi Networking - Bismillah Computer & Technology')
@section('description',
    'Business Wi-Fi in Bangladesh: access point design, site surveys, guest networks, coverage, performance, security and ongoing wireless support.')

@section('content')
    @php
        $iconWifi = '<path d="M12 20h.01"></path><path d="M2 8.82a15 15 0 0 1 20 0"></path><path d="M5 12.859a10 10 0 0 1 14 0"></path><path d="M8.5 16.429a5 5 0 0 1 7 0"></path>';
        $iconRouter = '<rect width="20" height="8" x="2" y="14" rx="2"></rect><path d="M6.01 18H6"></path><path d="M10.01 18H10"></path><path d="M4 10a12 12 0 0 1 16 0"></path><path d="M7 13a8 8 0 0 1 10 0"></path><path d="M12 16h.01"></path>';
        $iconMapPin = '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconGauge = '<path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconNetwork = '<rect width="20" height="8" x="2" y="16" rx="2"></rect><rect width="20" height="8" x="2" y="4" rx="2"></rect><path d="M6 8h.01M6 20h.01"></path>';
        $iconTrash = '<path d="M3 6h18"></path><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>';
        $iconClipboard = '<rect width="8" height="4" x="8" y="2" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M9 12h6M9 16h4"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconWifi,
                'title' => 'Wi-Fi Networking',
                'subtitle' => 'Wireless that works in every corner, on every device, all day',
                'paragraphs' => [
                    'A single router in the middle of an office is not a wireless network. Thick walls, floors, metal, neighbouring networks and dozens of connected devices all reduce performance, and the result is dropped video calls, slow uploads and staff reverting to mobile data.',
                    'Bismillah Computer & Technology designs business wireless networks properly: a site survey, access points placed for coverage and capacity, clean channel planning, separate guest and corporate networks, and monitoring that reveals problems before users report them.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'services',
                'title' => 'Wireless Services',
                'subtitle' => 'From a single-floor office to multi-site retail, hospitality and warehouse environments.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconMapPin,
                        'title' => 'Site Survey & Heat Mapping',
                        'description' => 'Coverage, interference and capacity measured across the building, with a heat map showing strong, weak and unusable areas.',
                    ],
                    [
                        'icon' => $iconRouter,
                        'title' => 'Access Point Deployment',
                        'description' => 'Ceiling or wall mounted business-class access points, PoE powered, positioned and tuned to eliminate dead zones.',
                    ],
                    [
                        'icon' => $iconUsers,
                        'title' => 'Corporate & Guest Networks',
                        'description' => 'Staff devices on secured internal SSIDs and visitors on an isolated guest network with a captive portal, completely separated from company systems.',
                    ],
                    [
                        'icon' => $iconGauge,
                        'title' => 'Performance Tuning',
                        'description' => 'Channel and transmit power planning, band steering, load balancing and roaming tuning so devices connect to the best nearby access point.',
                    ],
                    [
                        'icon' => $iconShield,
                        'title' => 'Wireless Security',
                        'description' => 'WPA3 or WPA2-Enterprise with RADIUS or cloud identity, per-device policies, and management access restricted to authorised engineers.',
                    ],
                    [
                        'icon' => $iconClipboard,
                        'title' => 'Managed Wireless',
                        'description' => 'Centralised cloud or on-premises controller, health monitoring, firmware management and alerting when an access point fails.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'coverage-capacity',
                'title' => 'Coverage Is Not The Same As Capacity',
                'subtitle' => 'Most wireless complaints are capacity problems wearing a coverage problem\'s clothes.',
                'paragraphs' => [
                    'A weak signal is obvious: users see one bar and give up. A busy network is more confusing &mdash; the signal is full, the connection is established, and everything is still slow.',
                ],
                'points' => [
                    [
                        'title' => 'Coverage planning',
                        'description' => 'Every working area, meeting room, corridor, warehouse aisle and outdoor entrance surveyed for usable signal.',
                    ],
                    [
                        'title' => 'Capacity planning',
                        'description' => 'Access point count driven by client density and application demand, not by floor area alone.',
                    ],
                    [
                        'title' => 'Dual-band and tri-band design',
                        'description' => '5 GHz for throughput-heavy applications and congested areas, 2.4 GHz for range and older devices.',
                    ],
                    [
                        'title' => 'Interference control',
                        'description' => 'Channel selection to avoid neighbouring networks, neighbouring businesses and non-Wi-Fi equipment.',
                    ],
                    [
                        'title' => 'Roaming behaviour',
                        'description' => 'Fast, seamless roaming so staff walking between areas on a call stay connected.',
                    ],
                    [
                        'title' => 'High-density environments',
                        'description' => 'Specific design for training rooms, call centres, exhibition floors and hospitality venues where many devices share few access points.',
                    ],
                ],
                'closing' => 'Every wireless project starts with a survey, because placing access points by eye is how offices end up with an expensive network that still does not work.',
            ],
            [
                'type' => 'split',
                'id' => 'secure-wireless',
                'image' => '/images/it-support/servers-and-networking/wireless.jpg',
                'imageAlt' => 'Wireless access point installed in a business premises',
                'label' => 'Secure Wireless',
                'title' => 'Guest Wi-Fi Without Guest Risk',
                'icon' => $iconShield,
                'reverse' => true,
                'paragraphs' => [
                    'Offering Wi-Fi to visitors and guests is expected, but an open network on the same segment as your file servers and finance systems is a serious exposure.',
                    'We deploy guest wireless on isolated network segments with client isolation, internet-only access and a captive portal or voucher system. Guests get simple sign-in; your servers, cameras and finance systems remain unreachable from their devices.',
                ],
                'points' => [
                    [
                        'title' => 'Isolated guest segment',
                        'description' => 'Guest traffic cannot route to internal networks, servers, printers or management interfaces.',
                    ],
                    [
                        'title' => 'Captive portal & vouchers',
                        'description' => 'Simple sign-in, time limits and usage logging, with marketing or terms pages of your choice.',
                    ],
                    [
                        'title' => 'Bandwidth policy',
                        'description' => 'Rate limits that keep guest usage from saturating your internet link during working hours.',
                    ],
                    [
                        'title' => 'Managed SSIDs',
                        'description' => 'Separate staff, guest, voice and IoT networks, each with its own security and policy requirements.',
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'ongoing',
                'title' => 'Keeping The Network Healthy',
                'paragraphs' => [
                    'Wireless networks degrade as the environment around them changes. Walls move, offices are re-furnished, new devices appear, firmware ages and firmware vulnerabilities accumulate. A small amount of ongoing attention prevents a large amount of user frustration.',
                ],
                'points' => [
                    [
                        'title' => 'Health monitoring',
                        'description' => 'Continuous alerting when access points go offline, clients drop excessively or channel utilisation rises.',
                    ],
                    [
                        'title' => 'Firmware management',
                        'description' => 'Security updates applied on a controlled schedule rather than whenever a device happens to reboot.',
                    ],
                    [
                        'title' => 'Configuration backups',
                        'description' => 'Controller and access point configurations backed up, so a failed device is restored in minutes rather than rebuilt.',
                    ],
                    [
                        'title' => 'Capacity reviews',
                        'description' => 'Client counts and throughput reviewed as headcount grows, with additional access points recommended before users notice.',
                    ],
                    [
                        'title' => 'Expansion',
                        'description' => 'New floors, extensions and branches added to the same management platform and policies as the business grows.',
                    ],
                ],
                'closing' => 'Wireless support can be provided as part of a managed service, or as scheduled health checks and expansions. See our <a href="' . route('it-support.sn-network-security') . '" class="text-blue-600 font-medium hover:underline">network security</a> and <a href="' . route('it-support.mi-managed-it-services') . '" class="text-blue-600 font-medium hover:underline">managed IT services</a>.',
            ],
            [
                'type' => 'contact',
                'label' => 'Book a wireless survey',
                'paragraphs' => [
                    'Tell us the floor area, approximate user count and building construction, and we will arrange a wireless survey with a heat map and a clear recommendation. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> to book a site visit.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Wi-Fi" headlineAccent="Networking"
        intro="Dependable wireless keeps your people connected as they move through the workplace. We survey your premises, select the right access points, and deploy coverage that supports busy offices, meetings and guest areas without dead zones."
        image="/images/it-support/servers-and-networking/hero.png" imageAlt="Servers and Networking Hero"
        :anchors="[
            ['label' => 'Wireless services', 'href' => '#services'],
            ['label' => 'Coverage and capacity', 'href' => '#coverage-capacity'],
            ['label' => 'Guest Wi-Fi', 'href' => '#secure-wireless'],
        ]" :sections="$sections" />
@endsection

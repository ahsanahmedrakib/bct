@extends('layouts.app')

@section('title', 'Computer and Laptop Upgrades - Bismillah Computer & Technology')
@section('description',
    'Laptop and PC upgrades in Bangladesh: SSD conversion, memory, processor and graphics upgrades, battery replacement and honest advice on repair versus replacement.')

@section('content')
    @php
        $iconTrending = '<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline>';
        $iconHardDrive = '<line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line>';
        $iconCpu = '<rect width="16" height="16" x="4" y="4" rx="2"></rect><rect width="6" height="6" x="9" y="9" rx="1"></rect><path d="M15 2v2M15 20v2M2 15h2M2 9h2M20 15h2M20 9h2M9 2v2M9 20v2"></path>';
        $iconMonitor = '<rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line>';
        $iconBattery = '<rect width="16" height="10" x="2" y="7" rx="2"></rect><line x1="22" x2="22" y1="11" y2="13"></line><line x1="6" x2="6" y1="10" y2="14"></line><line x1="10" x2="10" y1="10" y2="14"></line>';
        $iconLineChart = '<path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path>';
        $iconWrench = '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>';
        $iconPackage = '<path d="m7.5 4.27 9 5.15"></path><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path><path d="m3.3 7 8.7 5 8.7-5"></path><path d="M12 22V12"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconTrending,
                'title' => 'Computer and Laptop Upgrades',
                'subtitle' => 'More capability from the machine you already own',
                'paragraphs' => [
                    'A slow computer is not always an expensive problem. In most offices the machine is perfectly capable; it is carrying a mechanical hard drive, too little memory, or a background workload that has grown over the years. In those cases an upgrade delivers a dramatic improvement for a fraction of the cost of a replacement.',
                    'Bismillah Computer & Technology upgrades laptops, desktops and workstations across all major brands. We assess the hardware honestly, tell you what is possible, quote only what makes a real difference, and return the device to you working as intended.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'upgrades',
                'title' => 'Upgrades We Perform',
                'subtitle' => 'Hardware upgrades that are worth doing, and software work that makes the existing hardware go further.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'SSD Conversion',
                        'description' => 'Replacing a mechanical hard drive with an SSD is the single biggest improvement most ageing computers can receive: dramatically faster boot, launch and application response.',
                    ],
                    [
                        'icon' => $iconCpu,
                        'title' => 'Memory & Processor Upgrades',
                        'description' => 'Additional RAM, faster modules, and CPU replacement where the motherboard supports it, based on a genuine performance assessment.',
                    ],
                    [
                        'icon' => $iconBattery,
                        'title' => 'Battery Replacement',
                        'description' => 'Genuine or high-quality replacement batteries for laptops that no longer hold charge, restoring genuine portability and runtime.',
                    ],
                    [
                        'icon' => $iconMonitor,
                        'title' => 'Screen, Keyboard & Hinges',
                        'description' => 'Faded, cracked or flickering displays replaced, along with worn keyboards, trackpads, hinges and broken display cables.',
                    ],
                    [
                        'icon' => $iconLineChart,
                        'title' => 'System Optimisation',
                        'description' => 'Clean installation, removal of bloatware and unwanted start-up programs, storage cleanup, driver updates and a tuned configuration.',
                    ],
                    [
                        'icon' => $iconWrench,
                        'title' => 'Cooling & Reliability',
                        'description' => 'Thermal paste replacement, fan and heatsink cleaning, dust removal and thermal check so upgraded components run at full speed without throttling.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'id' => 'ssd-conversion',
                'image' => '/images/it-support/device-repair/computer.jpg',
                'imageAlt' => 'Computer being upgraded with new components',
                'label' => 'SSD Conversion',
                'title' => 'Why An SSD Changes Everything',
                'icon' => $iconHardDrive,
                'paragraphs' => [
                    'A mechanical hard drive stores data on spinning platters with a moving read head. Every operation involves physical movement and a queue of requests, which is why a hard drive eventually feels slow no matter how much memory the machine has.',
                    'An SSD has no moving parts. It responds in milliseconds rather than tens of milliseconds, and because of that, the difference is felt immediately in every part of the working day &mdash; startup, application launches, file browsing, updates and browsing with many tabs open.',
                ],
                'points' => [
                    [
                        'title' => 'Boot and launch times',
                        'description' => 'Windows start-up and applications open dramatically faster, often reducing a minute of waiting to a few seconds.',
                    ],
                    [
                        'title' => 'Multitasking',
                        'description' => 'Many applications open at once without the system stalling, which matters when staff work across several applications.',
                    ],
                    [
                        'title' => 'Reliability',
                        'description' => 'No moving parts means no mechanical failure from shock, vibration or worn bearings &mdash; one of the most common causes of data loss.',
                    ],
                    [
                        'title' => 'Lower power and heat',
                        'description' => 'Less power draw and heat, extending battery life and reducing fan noise on laptops.',
                    ],
                ],
                'link' => ['href' => route('it-support.mi-data-management'), 'label' => 'Protect the data on your drive'],
            ],
            [
                'type' => 'points',
                'id' => 'repair-or-replace',
                'title' => 'Repair Or Replace? Honest Guidance',
                'paragraphs' => [
                    'We are asked for upgrades and we also supply new equipment, so it is worth saying plainly: sometimes the right answer is a new machine, and we will tell you when it is.',
                ],
                'points' => [
                    [
                        'title' => 'Upgrade when it makes sense',
                        'description' => 'The device is structurally sound, the processor and motherboard are capable, and the cost is meaningfully below replacement.',
                    ],
                    [
                        'title' => 'Replace when it does not',
                        'description' => 'Very old processors with no memory headroom, failed motherboards, sealed chassis, or machines that no longer receive security updates.',
                    ],
                    [
                        'title' => 'Watch for lifecycle dates',
                        'description' => 'An operating system or processor that has reached end of support will not receive security updates, regardless of how well it still runs.',
                    ],
                    [
                        'title' => 'Consider a business fleet plan',
                        'description' => 'For several machines, staged replacement across a financial year keeps costs predictable and avoids a sudden expense.',
                        'href' => route('it-support.mi-procurement'),
                    ],
                    [
                        'title' => 'Consider managed services',
                        'description' => 'If performance is not the real problem &mdash; too many applications, poor processes, no updates &mdash; configuration and management will help more than new hardware.',
                        'href' => route('it-support.mi-managed-it-services'),
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'before-after',
                'title' => 'What To Expect At Our Workshop',
                'paragraphs' => [
                    'Every device follows the same process, so you always know what has been done to your machine and what has been replaced.',
                ],
                'points' => [
                    [
                        'title' => 'Free pre-upgrade assessment',
                        'description' => 'We inspect the device, confirm which upgrades are technically possible, and quote only what will make a measurable difference.',
                    ],
                    [
                        'title' => 'Clear quotation first',
                        'description' => 'Parts, labour and any software work are itemised. If a component fails during the upgrade, we stop and consult you before continuing.',
                    ],
                    [
                        'title' => 'Data transferred safely',
                        'description' => 'Files, profiles and settings moved to the new drive, with a full backup taken before any work begins.',
                    ],
                    [
                        'title' => 'Tested and documented',
                        'description' => 'Hardware tests, health checks and a clean, updated, licensed operating system before the device is returned.',
                    ],
                    [
                        'title' => 'Warranty on the work',
                        'description' => 'Parts and workmanship carry a warranty, and we remain contactable if anything behaves unexpectedly afterwards.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Book an upgrade',
                'paragraphs' => [
                    'Bring the device in or describe its symptoms and we will advise on the most cost-effective route. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry for a free pre-upgrade assessment.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="PC and" headlineAccent="Laptop Upgrades"
        intro="Older hardware slows your staff down and quietly costs you more in lost time. We upgrade laptops, desktops, memory, storage and components, extending the life of your machines and giving them the performance your work now needs."
        image="/images/it-support/device-repair/hero.png" imageAlt="Device Repair Hero"
        :anchors="[
            ['label' => 'Upgrades we do', 'href' => '#upgrades'],
            ['label' => 'SSD conversion', 'href' => '#ssd-conversion'],
            ['label' => 'Repair or replace', 'href' => '#repair-or-replace'],
        ]" :sections="$sections" />
@endsection

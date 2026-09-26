@extends('layouts.app')

@section('title', 'PC and Laptop Repairs - Bismillah Computer & Technology')
@section('description',
    'Professional laptop and desktop repair in Bangladesh: diagnostics, hardware replacement, screen and keyboard repair, motherboard work and data-safe repairs.')

@section('content')
    @php
        $iconWrench = '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>';
        $iconMonitor = '<rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line>';
        $iconHardDrive = '<line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line>';
        $iconCpu = '<rect width="16" height="16" x="4" y="4" rx="2"></rect><rect width="6" height="6" x="9" y="9" rx="1"></rect><path d="M15 2v2M15 20v2M2 15h2M2 9h2M20 15h2M20 9h2M9 2v2M9 20v2"></path>';
        $iconAlert = '<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4M12 17h.01"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconDatabase = '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconWrench,
                'title' => 'PC and Laptop Repairs',
                'subtitle' => 'Diagnosed properly, repaired once, and returned working',
                'paragraphs' => [
                    'The worst computer repair experience is having the same fault back the following week. It happens when a symptom is treated instead of a cause, or when a repair is done without confirming that the original problem is actually resolved.',
                    'Bismillah Computer & Technology repairs laptops, desktops, workstations and all-in-one computers from brands including HP, Dell, Lenovo, ASUS, Acer and Apple. We diagnose first, replace what has genuinely failed, verify the repair, and tell you plainly when replacement is the better decision.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'repairs',
                'title' => 'Repairs We Carry Out',
                'subtitle' => 'Hardware, software and configuration work on business and personal devices.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconMonitor,
                        'title' => 'Screen & Display Repair',
                        'description' => 'Cracked, dead, flickering or dim panels replaced, plus backlight, inverter and display cable faults on laptops and monitors.',
                    ],
                    [
                        'icon' => $iconWrench,
                        'title' => 'Keyboard & Hinge Repair',
                        'description' => 'Failed keys, liquid-damaged keyboards, worn hinges, trackpads and broken casing, restoring usability and protecting the display.',
                    ],
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'Drive & Storage Repair',
                        'description' => 'Failing hard drives replaced with SSDs, memory faults diagnosed, and storage controllers and connectors repaired where economical.',
                    ],
                    [
                        'icon' => $iconCpu,
                        'title' => 'Motherboard & Power Repair',
                        'description' => 'Component-level repair of power circuits, charging faults, no-power conditions and damaged ports where board replacement is not warranted.',
                    ],
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Software & OS Repair',
                        'description' => 'Failed installations, boot errors, blue screens, driver conflicts and activation issues, repaired without reformatting where possible.',
                    ],
                    [
                        'icon' => $iconDatabase,
                        'title' => 'Data-Safe Repairs',
                        'description' => 'Data preserved wherever the fault allows, with backups taken before any procedure and no work started without your approval.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'repair-process',
                'title' => 'Our Repair Process',
                'subtitle' => 'Four stages, with an agreed price before any work begins.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Diagnose',
                        'description' => 'Full hardware and software diagnosis to identify the actual cause, not just the visible symptom.',
                    ],
                    [
                        'title' => 'Quote',
                        'description' => 'A clear, itemised quotation with parts, labour and expected turnaround. We do not begin without your approval.',
                    ],
                    [
                        'title' => 'Repair',
                        'description' => 'Only the failed component is replaced where possible, and your data and configuration are protected throughout.',
                    ],
                    [
                        'title' => 'Verify',
                        'description' => 'Stress and hardware testing, a clean and updated system, and a return of the device in good working order.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'id' => 'on-site-repairs',
                'image' => '/images/it-support/device-repair/repair.jpg',
                'imageAlt' => 'Laptop and PC repair by a technician',
                'label' => 'On-Site Repairs',
                'title' => 'Repairs At Your Office',
                'icon' => $iconMonitor,
                'reverse' => true,
                'paragraphs' => [
                    'For business devices, a workshop trip means the user loses a computer for a day or more, and someone has to arrange the transport. For most hardware faults we can repair the device on site instead.',
                    'We attend your premises with common replacement parts &mdash; SSDs, memory, batteries, keyboards, power supplies and displays &mdash; so most faults are resolved during the visit, with only unusual failures returned to the workshop.',
                ],
                'points' => [
                    [
                        'title' => 'Fast response',
                        'description' => 'Priority attendance for the device stopping work, and scheduled visits for batches of devices.',
                    ],
                    [
                        'title' => 'Common parts on hand',
                        'description' => 'Replacement parts carried on site so a swap takes minutes rather than days of transit.',
                    ],
                    [
                        'title' => 'Data kept on the machine',
                        'description' => 'Repairs performed on site avoid moving a device containing business data in and out of transit.',
                    ],
                    [
                        'title' => 'Fleet management',
                        'description' => 'Scheduled maintenance across your estate with an asset list, so hardware is replaced or serviced before it fails.',
                        'href' => route('it-support.mi-it-outsourcing'),
                    ],
                ],
            ],
            [
                'type' => 'points',
                'id' => 'reduce-failures',
                'title' => 'Reducing The Next Failure',
                'paragraphs' => [
                    'A repaired device is a device with a weakness somewhere. These measures remove the most common causes of repeat failures in laptops and desktops used every day.',
                ],
                'points' => [
                    [
                        'title' => 'Battery health',
                        'description' => 'Swollen and degraded batteries replaced, charge limits set where supported, and unsafe batteries removed from circulation.',
                    ],
                    [
                        'title' => 'Thermal care',
                        'description' => 'Internal dust removal and thermal servicing, which prevents the overheating that damages batteries and motherboards.',
                    ],
                    [
                        'title' => 'Protection and updates',
                        'description' => 'Endpoint protection installed and system updates completed, so software faults do not masquerade as hardware problems.',
                        'href' => route('it-support.dr-virus-malware-removal'),
                    ],
                    [
                        'title' => 'Backups before repairs',
                        'description' => 'A verified backup taken before any repair, so a device failure does not become a data loss event.',
                        'href' => route('it-support.dr-data-recovery'),
                    ],
                    [
                        'title' => 'Protective cases',
                        'description' => 'For mobile devices, cases and screen protection that genuinely reduce the likelihood of another drop.',
                    ],
                    [
                        'title' => 'Planned refresh',
                        'description' => 'Devices approaching end of life replaced on a schedule rather than at the point of failure.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Book a repair',
                'paragraphs' => [
                    'Bring the device to our workshop, or request an on-site visit for business equipment. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry and we will arrange a free diagnostic and a clear quotation.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="PC and" headlineAccent="Laptop Repairs"
        intro="Broken equipment should not slow your business down. We repair desktops, laptops, tablets and monitors, replacing faulty parts and diagnosing hardware and software faults, with turnaround options to get you working again fast."
        image="/images/it-support/device-repair/hero.png" imageAlt="Device Repair Hero"
        :anchors="[
            ['label' => 'Repairs we do', 'href' => '#repairs'],
            ['label' => 'Repair process', 'href' => '#repair-process'],
            ['label' => 'On-site repairs', 'href' => '#on-site-repairs'],
        ]" :sections="$sections" />
@endsection

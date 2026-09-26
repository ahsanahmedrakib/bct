@extends('layouts.app')

@section('title', 'Data Recovery - Bismillah Computer & Technology')
@section('description',
    'Professional data recovery in Bangladesh: failed hard disks, deleted files, corrupted systems and ransomware-damaged data, with no-charge diagnostics and clean-room practices.')

@section('content')
    @php
        $iconHardDrive = '<line x1="22" x2="2" y1="12" y2="12"></line><path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" x2="6.01" y1="16" y2="16"></line><line x1="10" x2="10.01" y1="16" y2="16"></line>';
        $iconDatabase = '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path>';
        $iconSearch = '<circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path>';
        $iconRefresh = '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>';
        $iconFileText = '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path>';
        $iconAlert = '<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4M12 17h.01"></path>';
        $iconShield = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>';
        $iconServer = '<rect width="20" height="8" x="2" y="2" rx="2"></rect><rect width="20" height="8" x="2" y="14" rx="2"></rect><line x1="6" x2="6.01" y1="6" y2="6"></line><line x1="6" x2="6.01" y1="18" y2="18"></line>';
        $iconUsers = '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>';
        $iconLock = '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>';

        $sections = [
            [
                'type' => 'overview',
                'icon' => $iconHardDrive,
                'title' => 'Data Recovery',
                'subtitle' => 'Every measure taken to protect the data first',
                'paragraphs' => [
                    'Data recovery is not simply repairing a disk. It is a sequence of decisions about what to do first, because the wrong action can destroy the very data you are trying to save. A failing drive that is used harder, or a formatted volume that is written to, can lose everything.',
                    'Bismillah Computer & Technology recovers business and personal data from failed hard disks, corrupted file systems, deleted files, damaged arrays and ransomware-encrypted systems. We assess the device, tell you honestly what is recoverable, and only then proceed &mdash; with diagnostics provided at no charge.',
                ],
            ],
            [
                'type' => 'cards',
                'id' => 'what-we-recover',
                'title' => 'What We Recover',
                'subtitle' => 'The most common situations we are asked to handle, across laptops, desktops, servers and storage appliances.',
                'cols' => 3,
                'items' => [
                    [
                        'icon' => $iconHardDrive,
                        'title' => 'Failed Hard Disks',
                        'description' => 'Drives that no longer spin, report errors, show bad sectors or are not detected, where the data is still physically intact.',
                    ],
                    [
                        'icon' => $iconRefresh,
                        'title' => 'Accidentally Deleted Files',
                        'description' => 'Deleted documents, folders and photos, including from the recycle bin, where the storage has not since been heavily written to.',
                    ],
                    [
                        'icon' => $iconDatabase,
                        'title' => 'Corrupted File Systems',
                        'description' => 'Damaged partitions, file systems that will not mount, and volumes reporting errors after a power failure.',
                    ],
                    [
                        'icon' => $iconServer,
                        'title' => 'RAID & Server Storage',
                        'description' => 'Arrays rebuilt from surviving disks, server file systems, SAN and NAS volumes, and controller-level failures.',
                    ],
                    [
                        'icon' => $iconLock,
                        'title' => 'Ransomware-Encrypted Data',
                        'description' => 'Assessment of shadow copies, offline backups and untouched data, plus recovery where encryption has not fully completed.',
                    ],
                    [
                        'icon' => $iconFileText,
                        'title' => 'Damaged Media',
                        'description' => 'USB drives, memory cards, external disks and mobile devices, plus partially unreadable drives with recoverable fragments.',
                    ],
                ],
            ],
            [
                'type' => 'steps',
                'id' => 'recovery-process',
                'title' => 'The First Four Steps Matter Most',
                'subtitle' => 'If a device holds data you need, read this before powering it on or formatting anything.',
                'cols' => 4,
                'items' => [
                    [
                        'title' => 'Stop using it',
                        'description' => 'Do not continue working on a failing drive, do not reformat it, and do not run repair tools on it. Every additional read increases the risk of losing more.',
                    ],
                    [
                        'title' => 'Do not initialise',
                        'description' => 'If a disk appears empty in Windows or macOS, do not create a new volume on it. That action overwrites the partition table.',
                    ],
                    [
                        'title' => 'Diagnose first',
                        'description' => 'We assess the device, its failure type and the likely recoverable content at no charge, and we tell you whether recovery is realistic before any work begins.',
                    ],
                    [
                        'title' => 'Recover to a clean target',
                        'description' => 'Recovered data is always written to a new, healthy drive, never back to the failing original.',
                    ],
                ],
            ],
            [
                'type' => 'split',
                'image' => '/images/it-support/device-repair/data.jpg',
                'imageAlt' => 'Data recovery from a business storage device',
                'label' => 'Backups First',
                'title' => 'Check Your Backups Before Anything Else',
                'icon' => $iconRefresh,
                'reverse' => true,
                'paragraphs' => [
                    'In a significant share of the recovery cases we handle, the data was available all along in a backup that nobody had looked at recently. A restore takes hours; a physical recovery can take days and cost far more.',
                    'That is why we start every recovery conversation with the backup question. If you have backups, we can often restore you to full operation the same day and use the failed disk itself as a lesson about what to fix.',
                ],
                'points' => [
                    [
                        'title' => 'Check the backup job history',
                        'description' => 'Confirm what was actually backed up, when it last ran successfully, and whether it covered the data you need.',
                    ],
                    [
                        'title' => 'Confirm the copies are clean',
                        'description' => 'If the failure was ransomware or a compromise, backups may be affected too &mdash; and restoring infected data is worse than no data.',
                    ],
                    [
                        'title' => 'Test before relying on it',
                        'description' => 'An untested backup is an assumption. We perform a restore test before you commit to it as your safety net.',
                    ],
                    [
                        'title' => 'Fix the cause afterwards',
                        'description' => 'Once you are operational, we fix the root cause: backup frequency, off-site copies, storage health monitoring and user deletion policies.',
                        'href' => route('it-support.mi-data-management'),
                    ],
                ],
                'link' => ['href' => route('it-support.mi-data-management'), 'label' => 'See our data management service'],
            ],
            [
                'type' => 'points',
                'id' => 'prevention',
                'title' => 'Protecting Your Data Going Forward',
                'paragraphs' => [
                    'Almost every recovery we perform could have been avoided. These are the measures that make the difference between an inconvenience and a business-ending event.',
                ],
                'points' => [
                    [
                        'title' => 'Follow the 3-2-1 rule',
                        'description' => 'Three copies of your data, on two types of media, with one copy stored off-site &mdash; and protected from ransomware.',
                    ],
                    [
                        'title' => 'Automate and verify backups',
                        'description' => 'Manual backups do not happen. Automatic jobs with failure alerting, and scheduled restore tests to prove the data comes back.',
                    ],
                    [
                        'title' => 'Monitor storage health',
                        'description' => 'SMART status, reallocated sectors and temperature monitored, so failing drives are replaced before they take data with them.',
                    ],
                    [
                        'title' => 'Upgrade ageing drives',
                        'description' => 'Mechanical disks in laptops and desktops reach end of life; moving to SSD storage removes the most common cause of data loss entirely.',
                        'href' => route('it-support.dr-upgrades'),
                    ],
                    [
                        'title' => 'Protect accounts and email',
                        'description' => 'Multi-factor authentication and email filtering, since compromised credentials are the most common route into a network.',
                    ],
                    [
                        'title' => 'Plan for the worst day',
                        'description' => 'A written recovery plan naming what comes back first, in what order, and who is responsible &mdash; reviewed with your team.',
                    ],
                ],
            ],
            [
                'type' => 'contact',
                'label' => 'Request a free diagnostic',
                'paragraphs' => [
                    'Free diagnostics for qualifying recoveries. Bring the device in, or describe the symptoms and we will advise on next steps before you commit to any cost. Call <a href="tel:+8801972721388" class="text-blue-600 font-semibold hover:underline">+880 1972-721388</a> or send an enquiry.',
                ],
            ],
        ];
    @endphp

    <x-it-subpage headline="Data" headlineAccent="Recovery"
        intro="Losing files to hardware failure, accidental deletion or corruption is stressful and disruptive. Our engineers recover data from failed drives, laptops, phones and storage systems, and return your files so your business can carry on working." image="/images/it-support/device-repair/hero.png"
        imageAlt="Device Repair Hero" :anchors="[
            ['label' => 'What we recover', 'href' => '#what-we-recover'],
            ['label' => 'First steps', 'href' => '#recovery-process'],
            ['label' => 'Prevention', 'href' => '#prevention'],
        ]" :sections="$sections" />
@endsection

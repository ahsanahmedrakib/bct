@extends('layouts.app')

@section('title', 'Microsoft Teams | Bismillah Computer & Technology')
@section('description', 'Unified chat, video meetings, file sharing, and app integrations with Microsoft Teams.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft 365
                    <span class="text-blue-600 block mt-2"> Teams</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft Teams is a
                    leading communication and collaboration platform that integrates effortlessly with Microsoft 365. Serving
                    as a central hub for teamwork, it allows users to chat, hold video meetings, share files, and collaborate
                    on projects in real-time.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-blue-600 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-blue-600 hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="Microsoft Teams" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/teams/teams.png" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center">
                <img src="/images/cloud/microsoft-solutions/teams/section.png" alt="Microsoft Teams"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-xl p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft Teams</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is Microsoft Teams?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft Teams is a leading
                    communication and collaboration platform that integrates effortlessly with Microsoft 365. Serving as a
                    central hub for teamwork, it allows users to chat, hold video meetings, share files, and collaborate on
                    projects in real-time. Since its launch in 2017, the platform has become indispensable for remote and
                    hybrid work settings, providing a flexible solution for both small groups and large organisations.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">A key feature of this platform is its
                    ability to support instant messaging and video conferencing, making it easy for users to stay connected
                    regardless of their location. It also enables seamless file sharing and collaboration, allowing multiple
                    team members to work on documents simultaneously within the same interface. This platform's integration
                    with Microsoft Office apps, such as Word, Excel, and PowerPoint, further boosts productivity by
                    streamlining workflows.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Customisation options include creating
                    channels for specific projects or departments, making it easier to organise discussions and resources.
                    Additionally, the platform supports integration with a wide range of third-party apps, expanding its
                    functionality to meet the diverse needs of various organisations. Overall, Microsoft Teams is a powerful
                    tool that enhances communication, collaboration, and productivity across different industries and work
                    environments.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Key Features of Microsoft Teams</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Everything you need for seamless team communication
                    and collaboration</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $keyFeatures = [
                        [
                            'title' => 'Chat & Messaging',
                            'desc' => 'Persistent, threaded conversations with rich formatting, @mentions, and file sharing within channels and direct messages.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />',
                        ],
                        [
                            'title' => 'Video & Audio Meetings',
                            'desc' => 'HD video conferencing, meeting scheduling with Outlook integration, and automatic meeting recordings saved to OneDrive.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />',
                        ],
                        [
                            'title' => 'Screen Sharing',
                            'desc' => 'Real-time screen sharing and digital whiteboard for collaborative brainstorming during meetings.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />',
                        ],
                        [
                            'title' => 'File Collaboration',
                            'desc' => 'SharePoint-integrated file storage with real-time co-authoring on Word, Excel, and PowerPoint documents.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />',
                        ],
                        [
                            'title' => 'Teams Calling',
                            'desc' => 'VoIP and PSTN calling with call transfer, forwarding, and voicemail for comprehensive business communications.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />',
                        ],
                        [
                            'title' => 'Security & Compliance',
                            'desc' => 'End-to-end encryption, Data Loss Prevention (DLP), and compliance recording for secure communications.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        ],
                    ];
                @endphp
                @foreach ($keyFeatures as $feature)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <div class="flex justify-center pb-6 text-blue-600">
                            <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 text-center mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="all-features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Teams Features</h2>
                <p class="text-slate-600 text-center mb-12">Comprehensive collaboration capabilities across Microsoft Teams</p>
            </div>
            @php
                $features = [
                    [
                        'category' => 'Team Chat and Messaging',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />',
                        'items' => [
                            ['title' => 'Persistent Chat', 'desc' => 'Teams allows for continuous, threaded conversations within channels and direct messages, making it easy to keep track of discussions over time.'],
                            ['title' => 'Rich Text Formatting', 'desc' => 'Users can format messages with bold, italics, bullet points, and more, making it easier to communicate clearly.'],
                            ['title' => '@Mentions', 'desc' => 'You can tag individuals or entire teams to draw their attention to specific messages or updates.'],
                        ],
                    ],
                    [
                        'category' => 'Video and Audio Meetings',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />',
                        'items' => [
                            ['title' => 'High-Quality Video Calls', 'desc' => 'Teams supports HD video conferencing, allowing users to conduct virtual meetings with clear video and audio.'],
                            ['title' => 'Meeting Scheduling', 'desc' => 'Integrated with Outlook, users can schedule meetings directly within Teams or Outlook, ensuring that all participants receive calendar invites.'],
                            ['title' => 'Meeting Recordings', 'desc' => 'Teams allows users to record meetings, which can then be automatically saved to OneDrive or SharePoint for later reference.'],
                        ],
                    ],
                    [
                        'category' => 'Screen Sharing',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />',
                        'items' => [
                            ['title' => 'Real-Time Sharing', 'desc' => 'During meetings, participants can share their screens to collaborate on documents, presentations, or applications in real time.'],
                            ['title' => 'Whiteboard', 'desc' => 'Teams includes a digital whiteboard feature, allowing participants to brainstorm and visualise ideas together during meetings.'],
                        ],
                    ],
                    [
                        'category' => 'File Sharing and Collaboration',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />',
                        'items' => [
                            ['title' => 'Integrated with SharePoint', 'desc' => 'Files shared in Teams channels are stored in SharePoint, making them easily accessible and securely stored.'],
                            ['title' => 'Real-Time Co-Authoring', 'desc' => 'Users can collaborate on documents (Word, Excel, PowerPoint) directly within Teams, with changes being synchronised in real-time.'],
                            ['title' => 'File Tabs', 'desc' => 'Each channel can have dedicated file tabs for easy access to important documents and resources.'],
                        ],
                    ],
                    [
                        'category' => 'Customisable Teams and Channels',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />',
                        'items' => [
                            ['title' => 'Team Structure', 'desc' => 'Users can create teams for different projects, departments, or groups, and organise conversations into channels based on topics or workstreams.'],
                            ['title' => 'Private Channels', 'desc' => 'Teams supports the creation of private channels, which are only accessible to selected members within a team, for more confidential discussions.'],
                        ],
                    ],
                    [
                        'category' => 'App Integration and Bots',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />',
                        'items' => [
                            ['title' => 'App Store', 'desc' => 'Teams integrates with a wide range of third-party apps and services, such as Trello, Asana, GitHub, and more, allowing users to extend the platform\'s functionality.'],
                            ['title' => 'Custom Bots', 'desc' => 'Organisations can create custom bots that interact with users, provide information, or automate tasks directly within Teams.'],
                        ],
                    ],
                    [
                        'category' => 'Teams Calling',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />',
                        'items' => [
                            ['title' => 'VoIP and PSTN Calling', 'desc' => 'Teams supports voice over IP (VoIP) calls and can integrate with the public switched telephone network (PSTN) for traditional phone services, allowing users to make and receive calls from anywhere.'],
                            ['title' => 'Call Transfer and Voicemail', 'desc' => 'Teams includes features like call transfer, call forwarding, and voicemail, making it a comprehensive solution for business communications.'],
                        ],
                    ],
                    [
                        'category' => 'Task Management',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />',
                        'items' => [
                            ['title' => 'Microsoft Planner Integration', 'desc' => 'Teams integrates with Microsoft Planner, allowing users to create, assign, and track tasks within the platform.'],
                            ['title' => 'To-Do Lists', 'desc' => 'Users can manage personal tasks and to-do lists directly within Teams, helping them stay organised and on track.'],
                        ],
                    ],
                    [
                        'category' => 'Meeting Rooms and Devices',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />',
                        'items' => [
                            ['title' => 'Teams Rooms', 'desc' => 'Microsoft Teams supports specialised hardware for meeting rooms, such as cameras, microphones, and screens, optimising the meeting experience in physical spaces.'],
                            ['title' => 'Device Integration', 'desc' => 'Teams works seamlessly across various devices, including desktop computers, smartphones, and tablets, ensuring accessibility and consistency.'],
                        ],
                    ],
                    [
                        'category' => 'Security and Compliance',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />',
                        'items' => [
                            ['title' => 'End-to-End Encryption', 'desc' => 'Teams offers end-to-end encryption for meetings and chats, ensuring that communications are secure.'],
                            ['title' => 'Data Loss Prevention (DLP)', 'desc' => 'Integrated with Microsoft 365\'s DLP policies, Teams helps prevent sensitive information from being shared inappropriately within chats or files.'],
                            ['title' => 'Compliance Recording', 'desc' => 'Teams supports compliance recording, ensuring that all communications are logged and stored in accordance with legal and regulatory requirements.'],
                        ],
                    ],
                    [
                        'category' => 'Live Events and Webinars',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />',
                        'items' => [
                            ['title' => 'Large-Scale Webinars', 'desc' => 'Teams allows organisations to host live events and webinars for up to 10,000 participants (or more with advanced licensing), making it a powerful tool for large-scale presentations and public events.'],
                            ['title' => 'Interactive Features', 'desc' => 'Webinars in Teams can include Q&A, polls, and attendee engagement tools, enhancing the experience for both presenters and participants.'],
                        ],
                    ],
                    [
                        'category' => 'Breakout Rooms',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />',
                        'items' => [
                            ['title' => 'Small Group Discussions', 'desc' => 'Breakout rooms allow meeting organisers to split participants into smaller groups for focused discussions, which can then rejoin the main meeting.'],
                        ],
                    ],
                    [
                        'category' => 'Notifications and Alerts',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />',
                        'items' => [
                            ['title' => 'Custom Notifications', 'desc' => 'Users can customise their notification settings to stay informed about important updates without being overwhelmed by alerts.'],
                            ['title' => 'Priority Notifications', 'desc' => 'Teams offers the ability to mark messages as urgent, ensuring that recipients are notified repeatedly until they respond.'],
                        ],
                    ],
                    [
                        'category' => 'Activity and Collaboration Insights',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />',
                        'items' => [
                            ['title' => 'Analytics and Reporting', 'desc' => 'Teams provides insights into collaboration patterns, meeting effectiveness, and user activity, helping organisations optimise their communication strategies.'],
                        ],
                    ],
                ];
            @endphp
            <div class="space-y-4">
                @foreach ($features as $feature)
                    <div class="border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <span class="text-blue-600 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">{!! $feature['icon'] !!}</svg>
                                </span>
                                <span class="font-medium text-slate-900">{{ $feature['category'] }}</span>
                            </div>
                            <svg class="chevron w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden">
                            <div class="px-6 pb-5 space-y-4">
                                @foreach ($feature['items'] as $item)
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-900 mb-1">{{ $item['title'] }}</h4>
                                        <p class="text-sm text-slate-600 text-justify">{{ $item['desc'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50" id="useful-links">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12 reveal reveal-fade-up">Useful Links</h2>
            @php
                $usefulLinks = [
                    [
                        'title' => 'Microsoft Teams Overview',
                        'description' => 'Learn about Microsoft Teams — the central hub for teamwork that combines chat, video meetings, file sharing, and app integration.',
                        'href' => 'https://www.microsoft.com/en-us/microsoft-teams/group-chat-software',
                    ],
                    [
                        'title' => 'Teams Tips & Tricks',
                        'description' => 'Microsoft\'s adoption guide with tips, tricks, and training resources to help you get the most out of Microsoft Teams.',
                        'href' => 'https://adoption.microsoft.com/en-us/microsoft-teams/',
                    ],
                    [
                        'title' => 'Teams Pricing & Plans',
                        'description' => 'Compare Microsoft Teams plans and pricing — find the right option for your organisation\'s collaboration needs.',
                        'href' => 'https://www.microsoft.com/en-us/microsoft-teams/compare-microsoft-teams-options',
                    ],
                    [
                        'title' => 'Teams Documentation',
                        'description' => 'Technical documentation for Microsoft Teams — including admin guides, deployment, and best practices.',
                        'href' => 'https://learn.microsoft.com/en-us/microsoftteams/',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($usefulLinks as $link)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; {{ $link['title'] }}</h3>
                        <p class="text-slate-600 text-sm mb-4">{{ $link['description'] }}</p>
                        <a href="{{ $link['href'] }}" target="_blank"
                            class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50" id="benefits">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Benefits of Using Microsoft Teams</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Why organisations choose Teams for communication and
                    collaboration</p>
            </div>
            @php
                $benefits = [
                    [
                        'title' => 'Centralised Team Communication',
                        'desc' => 'Teams provides a single hub for chat, video meetings, file sharing, and project collaboration — eliminating the need for multiple disjointed tools.',
                    ],
                    [
                        'title' => 'Seamless Microsoft 365 Integration',
                        'desc' => 'Deep integration with Word, Excel, PowerPoint, Outlook, SharePoint, and OneDrive ensures a connected and streamlined workflow.',
                    ],
                    [
                        'title' => 'Support for Remote & Hybrid Work',
                        'desc' => 'Enable your team to collaborate from anywhere with secure chat, video conferencing, and file access across all devices.',
                    ],
                    [
                        'title' => 'Customisable Channels & Teams',
                        'desc' => 'Organise discussions by project, department, or topic with public and private channels, keeping conversations focused and manageable.',
                    ],
                    [
                        'title' => 'Enterprise-Grade Security',
                        'desc' => 'End-to-end encryption, DLP policies, compliance recording, and advanced admin controls protect your organisation\'s communications.',
                    ],
                    [
                        'title' => 'Extensible with Apps & Bots',
                        'desc' => 'Integrate third-party apps like Trello, Asana, and GitHub, or create custom bots to automate tasks and extend functionality.',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($benefits as $benefit)
                    <div
                        class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $benefit['title'] }}</h3>
                        <p class="text-slate-600 text-sm text-justify">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center mb-12">Common questions about Microsoft Teams</p>
            </div>
            @php
                $faqs = [
                    [
                        'question' => 'What is Microsoft Teams?',
                        'answer' => 'Microsoft Teams is a communication and collaboration platform within Microsoft 365 that provides chat, video meetings, file sharing, and app integration — serving as a central hub for teamwork.',
                    ],
                    [
                        'question' => 'Is Microsoft Teams free?',
                        'answer' => 'Microsoft Teams offers a free tier with basic features. However, the full feature set — including advanced security, compliance, and admin controls — requires a Microsoft 365 Business or Enterprise subscription.',
                    ],
                    [
                        'question' => 'Can I use Teams for phone calls?',
                        'answer' => 'Yes. Teams supports VoIP calling and can integrate with PSTN for traditional phone services. Users can make and receive calls, transfer calls, and use voicemail directly within Teams.',
                    ],
                    [
                        'question' => 'How many people can join a Teams meeting?',
                        'answer' => 'Teams supports meetings with up to 300 participants for standard plans, and up to 10,000 participants for live events and webinars with advanced licensing.',
                    ],
                    [
                        'question' => 'Is Teams secure for business use?',
                        'answer' => 'Yes. Teams includes end-to-end encryption, Data Loss Prevention (DLP), compliance recording, and integration with Microsoft 365 security policies to protect communications and data.',
                    ],
                ];
            @endphp
            <div class="space-y-4 mx-auto">
                @foreach ($faqs as $faq)
                    <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                        <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-180')"
                            class="w-full flex justify-between items-center px-6 py-5 text-left cursor-pointer hover:bg-slate-50 transition-colors">
                            <span class="font-medium text-slate-900 pr-4">{{ $faq['question'] }}</span>
                            <svg class="chevron w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden">
                            <p class="px-6 pb-5 text-sm text-slate-600 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

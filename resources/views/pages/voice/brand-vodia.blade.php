@extends('layouts.app')

@section('title', 'Vodia Cloud Phone System | Bismillah Computer & Technology')
@section('description',
    'Vodia PBX is a cloud phone system for the modern workplace, catering to contemporary companies
    where seamless communication is vital.')

@section('content')

    {{-- ==================== HERO ==================== --}}
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Cloud Phone System
                    <span class="text-blue-600 block mt-2">For The Modern Workplace</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Cloud
                    phone systems and phone numbers remain an essential tool, and Vodia PBX modernizes the phone system for
                    today's workplace, catering to the needs of contemporary companies where seamless communication, both
                    internally and externally, is vital. Vodia PBX software turns mobile phones, laptops, tablets, PCs and
                    standard VoIP phones into clients all of your employees can use for their communication needs.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="BG Image" src="/images/voice/brands/vodia/hero.png"
                    class="rounded-lg w-full max-w-md lg:max-w-lg" />
            </div>

        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    {{-- ==================== VALUE PROPS ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Why Vodia</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Cost Effective</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Optimized resource allocation means cost savings for
                        businesses of all sizes.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Cloud-Based</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">No hardware maintenance, no outdated software, just
                        internet dependent.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">SIP Trunking</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Connect your cloud PBX with the public telephony
                        network.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Flexible</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Easily adapts to various communication needs,
                        integrating
                        and customizing smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================  ALL-IN-ONE SOFT-PHONE ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-2">Feature Overview</h2>
            <h3 class="text-2xl text-center font-bold text-slate-900 mb-6">All in One Softphone to make and manage calls
            </h3>
            <p class="text-center text-slate-600 max-w-3xl mx-auto mb-12">The Vodia desktop apps go far beyond what you know
                from traditional SIP soft phones. You can see the status of your coworkers, call or text them, see messages
                in
                your mailbox, see your call history, call recordings and even see what is going on in your ACD. And you can
                change your preferences in your PBX, like redirections, upload your profile image or timezone.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-3">Windows Desktop App</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">You can use the Vodia PBX through a standard web
                        browser
                        without having to install an app: users can change settings, schedule conference calls or set their
                        devices.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-3">macOS Desktop App</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">You can use the Vodia PBX through a standard web
                        browser
                        without having to install an app: users can change settings, schedule conference calls or set their
                        devices.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-3">Android App</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">The Vodia PBX Android client is available from Google
                        Play
                        and runs on all major Android systems. The app supports calling, putting calls on hold, transferring
                        calls and texting (SMS).</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-3">Apple App</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Our iOS app is the latest addition to our fleet of
                        softphones. Make and receive calls, listen and manage voicemails, message your colleagues all with
                        our
                        own iOS app.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== FEATURES GRID ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Powerful Built-In Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Extensions</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Users connect to the Vodia PBX through extensions, and
                        each extension can have multiple devices connected to it. These devices will ring in parallel when
                        someone calls the extension, so a person can pick up the call on the device that suits him or her
                        best.
                        Each extension can have its own time zone, language, ringtone, address book and much, much more.
                        Extensions may have administrative permissions; for example, for managing the central address book
                        or
                        for barging into calls. For each extension, working hours can be established and users can manually
                        place them in do-not-disturb mode. There are many ways for redirecting calls.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Mailbox</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Each extension comes with a mailbox so callers can
                        leave
                        messages. These messages can be shared in a group, moved to other mailboxes; users can also leave
                        comments for mailbox messages. The PBX can also receive FAX messages and then send them to the
                        user's
                        email address, and FAX can be sent from the user's front end. Messages can be escalated to managers
                        when the user is unable to retrieve it in time. The PBX can use the Google speech API to convert
                        mailbox messages into text; these messages can then be sent to the user's cell phone as a preview of
                        the message.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Auto Attendant</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">The auto attendant helps incoming callers find the
                        right
                        party for the call. Callers can use their keyboard to enter extension numbers or search the company
                        directory by name. There are several ways to redirect incoming calls, based on time of call, and to
                        present different announcements. A selection of pre-recorded announcements makes it easy to announce
                        shortcut numbers, for example, for sales or support departments.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Groups</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Simple hunt groups call a list of extensions up and
                        escalate calls based on simple time rules. Groups can have their own ring melody and display the
                        group
                        name on phones, making which group is being called easy to discern. When necessary, users can be
                        called
                        on their cell phones when a call reaches a hunt group.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Call Center</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">For more sophisticated call distribution, the Vodia
                        PBX
                        comes with agent groups which are equipped to handle higher call volumes and sequentially distribute
                        calls. While waiting, the PBX can play announcements and mix these announcements with music on the
                        fly.
                        Users can receive a call back when it's their turn, instead of holding. Agents can log in and out of
                        the queues, and managers can see service level measurements like speed of answer. For outbound
                        calls,
                        lists of numbers-to-be-dialed can be uploaded into the ACD; the PBX can then dial those numbers
                        automatically and distribute them to an agent, or the agents can use a code to dial the next number
                        on
                        the list. Virtual offices benefit from separate DID: each can have its own name and voice
                        announcement.
                        Calls can be recorded inside the PBX or sent to external recording devices.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Conferencing</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Sometimes more than two people need to talk, and the
                        Vodia
                        PBX can mix multiple audio channels in spontaneous conference calls or in scheduled conferences.
                        When
                        setting up a conference, the PBX sends calendar events to the invited participants and, if needed,
                        calls the conference participants into the conference. Rapid response conferences can be commenced
                        when
                        one of the participants calls into the conference room.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Paging</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">The PBX comes with extensive paging features that can
                        be
                        used with standard desktop phones and with overhead speaker equipment; it supports live paging and
                        recorded announcements. Predefined pages can be triggered by events – for example, when a user calls
                        an
                        emergency number or when a group receives a call. Using the Google text to speech API, arbitrary
                        texts
                        can be sent to paging accounts through the API or from the app text interface. There are rules about
                        which extension may do this.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">CRM Integration</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">There are several predefined CRM integrations
                        available,
                        including Zoho, Salesforce and HubSpot; customizations for in-house CRM systems can be done through
                        backend code. For hotels, the PBX integrates with mainstream PMS systems.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Address Book</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">The PBX keeps address books on user and domain level,
                        so
                        that each user can have their own contacts and companies can share contacts. Contacts can be
                        imported
                        through the web interface or from Google G-Suite and Office 365. The contacts are stored on the
                        server,
                        simplifying compliance and making it easier to switch between devices.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">VoIP Phones</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">The Vodia PBX supports a great many VoIP phones
                        through
                        provisioning templates. Where available, the PBX uses secure communication for provisioning and
                        calls.
                        Button templates can be used to assign functions to buttons without touching the devices. Whenever
                        possible, the PBX generates background images and ring tones, making branding easier for partners
                        and
                        corporate users.</p>
                </div>

                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 md:col-span-2">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Reporting</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">There are numerous reports available for users,
                        managers
                        and system administrators. The PBX proactively sends emails and SMS messages when important events
                        are
                        happening; for example, when a new voicemail arrives or a call is missed. Call reports can be sent
                        daily, weekly or monthly. There are several ways to push call data records to external services for
                        further processing.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== MICROSOFT TEAMS ==================== --}}
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="w-full">
                <img src="/images/voice/brands/vodia/microsoft.jpg" alt="Section" class="w-full h-auto object-cover" />
            </div>

            <div class="relative border-2 rounded-2xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white border-blue-100">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <h2 class="text-3xl text-left font-bold text-blue-900 mb-3">Microsoft Teams Integration</h2>
                <p class="text-slate-500 font-semibold mb-4">Interoperability with Microsoft Teams</p>
                <p class="text-slate-600 leading-relaxed mb-6 text-justify">The Vodia PBX can act as an SBC for Microsoft
                    Teams. Teams extensions can dial internal resources in the PBX, including overhead paging or other
                    extensions using VoIP phones unavailable for Teams; the PBX can also terminate Teams calls into SIP
                    trunks
                    for outbound calls. Inbound calls can be sent to Teams extensions.</p>
                <a href="{{ route('voice.feature-microsoft-teams') }}"
                    class="text-blue-600 font-medium flex items-center hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    Learn More About Teams
                </a>
            </div>
        </div>
        </div>
    </section>

    {{-- ==================== DESK PHONES ==================== --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="reveal reveal-fade-up max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center font-bold text-blue-900 mb-12">Desk Phones &amp; Soft Phones</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-full">
                        <img src="/images/voice/brands/vodia/phone-1.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Grandstream GXP2612P</h3>
                    <p class="text-slate-600 text-sm">A professional VoIP desk phone compatible with the Vodia PBX.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-full">
                        <img src="/images/voice/brands/vodia/phone-2.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Grandstream GXP2170</h3>
                    <p class="text-slate-600 text-sm">A high-end IP phone with a large touchscreen and powerful features.
                    </p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="w-full">
                        <img src="/images/voice/brands/vodia/phone-3.png" alt="Section"
                            class="w-full h-auto object-cover" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Grandstream GXP2615</h3>
                    <p class="text-slate-600 text-sm">A carrier-grade professional IP phone ideal for everyday business
                        use.</p>
                </div>
            </div>
            <h3 class="text-xl text-center font-bold text-slate-900 mb-6">Soft Phones</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 text-center">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-2">PC</h4>
                    <p class="text-slate-600 text-sm">Windows desktop app for making and managing calls.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 text-center">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-2">Mac</h4>
                    <p class="text-slate-600 text-sm">macOS desktop app with the full softphone experience.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 text-center">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-2">Android</h4>
                    <p class="text-slate-600 text-sm">Android client available on Google Play for all major Android
                        systems.</p>
                </div>
                <div
                    class="relative border-2 rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all h-full border-blue-100 hover:border-blue-300 text-center">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h4 class="font-bold text-slate-900 mb-2">iOS</h4>
                    <p class="text-slate-600 text-sm">iOS app to make and receive calls and manage voicemails.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

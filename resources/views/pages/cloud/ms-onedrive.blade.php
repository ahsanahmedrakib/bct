@extends('layouts.app')

@section('title', 'OneDrive | Bismillah Computer & Technology')
@section('description', 'Secure cloud file storage and sync with 1TB per user, file sharing, and version history.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Microsoft OneDrive
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">Microsoft OneDrive for
                    Business is a secure cloud storage platform within Microsoft 365 that enables organisations to store,
                    access, and share files from anywhere. Designed for today's modern workplace, OneDrive allows staff to
                    securely collaborate on documents in real time using Word, Excel, and PowerPoint, whether working in the
                    office or remotely.</p>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="/contact"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img alt="OneDrive" loading="lazy" class="rounded-lg w-full max-w-md lg:max-w-lg"
                    src="/images/cloud/microsoft-solutions/onedrive/onedrive.png" />
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

    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal reveal-fade-up flex justify-center">
                <img src="/images/cloud/microsoft-solutions/onedrive/drive.png" alt="Drive"
                    class="object-cover" loading="lazy" />
            </div>
            <div class="reveal reveal-fade-up bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all relative h-full">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                <span class="text-blue-500 font-bold text-sm tracking-wide mb-3 block">Microsoft OneDrive for Business</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 leading-tight">What is OneDrive?</h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Microsoft OneDrive for Business is a
                    secure cloud storage platform within Microsoft 365 that enables organisations to store, access, and share
                    files from anywhere. Designed for today's modern workplace, OneDrive allows staff to securely collaborate on
                    documents in real time using Word, Excel, and PowerPoint, whether working in the office or remotely.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 text-justify">Files are protected with enterprise-grade
                    security, including encryption at rest and in transit, Multi-Factor Authentication (MFA), and Conditional
                    Access policies. Built-in version history ensures documents can be restored if changes are made accidentally,
                    while advanced sharing controls allow businesses to manage internal and external access securely.</p>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 text-justify">Seamlessly integrated with Microsoft Teams
                    and SharePoint Online, OneDrive provides a central, secure location for personal work files while supporting
                    collaborative teamwork. With automatic sync across devices and ransomware detection capabilities, Microsoft
                    OneDrive helps organisations improve productivity while maintaining strong data protection and compliance
                    standards.</p>
                <a href="#features" class="text-blue-600 font-medium flex items-center hover:text-blue-800">Key Features <svg
                        class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Key Features of Microsoft OneDrive for Business</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Everything you need for secure cloud storage and
                    seamless collaboration</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Secure Cloud Storage</h3>
                    <p class="text-slate-600 text-sm text-justify">1TB+ storage per user with enterprise-grade security,
                        ensuring business data is safely stored in Microsoft's globally secure cloud infrastructure.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Real-Time Co-Authoring</h3>
                    <p class="text-slate-600 text-sm text-justify">Collaborate live in Word, Excel, and PowerPoint, allowing
                        multiple users to edit documents simultaneously without version conflicts.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Advanced Sharing Controls</h3>
                    <p class="text-slate-600 text-sm text-justify">Easily manage internal and external file sharing, with
                        permission levels, expiry dates, and password-protected links.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Version History</h3>
                    <p class="text-slate-600 text-sm text-justify">Automatically track document changes and restore previous
                        versions quickly if edits are made in error.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Ransomware Detection & Recovery</h3>
                    <p class="text-slate-600 text-sm text-justify">Built-in ransomware detection and file recovery tools help
                        protect and restore compromised data.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Device Sync</h3>
                    <p class="text-slate-600 text-sm text-justify">Automatic file synchronisation across desktop, laptop, and
                        mobile devices, keeping files up to date everywhere.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.41A2.25 2.25 0 012.25 5.495V5.25" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Offline Access</h3>
                    <p class="text-slate-600 text-sm text-justify">Access and edit files offline, with changes syncing
                        automatically once reconnected to the internet.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Data Encryption</h3>
                    <p class="text-slate-600 text-sm text-justify">Files are encrypted at rest and in transit, protecting
                        sensitive information from unauthorised access.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <div class="flex justify-center pb-4 text-brand-active">
                        <svg class="w-11 h-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 text-center mb-3">Integration with Teams & SharePoint</h3>
                    <p class="text-slate-600 text-sm text-justify">Seamless integration with Microsoft Teams and SharePoint
                        Online for a fully connected collaboration environment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-10 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Usefull Links</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Data Backup</h3>
                    <p class="text-slate-600 text-sm mb-4">Microsoft OneDrive PC Cloud Backup automatically protects
                        important files on your computer by securely syncing your Desktop, Documents, and Pictures folders to
                        the cloud. This ensures your data is safely backed up, accessible from any device, and protected from
                        hardware failure, accidental deletion, or device loss.</p>
                    <a href="https://www.microsoft.com/en/microsoft-365/onedrive/pc-cloud-backup" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">&bull; Photo Storage</h3>
                    <p class="text-slate-600 text-sm mb-4">Microsoft OneDrive Online Photo Storage allows you to securely
                        store, organise, and access your photos and videos in the cloud. Your images are automatically backed
                        up and available from any device, making it easy to view, share, and protect your memories while keeping
                        your phone or computer storage free.</p>
                    <a href="https://www.microsoft.com/en/microsoft-365/onedrive/online-photo-storage" target="_blank"
                        class="text-blue-600 font-semibold text-sm hover:underline">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Benefits of Using OneDrive for Business</h2>
                <p class="text-slate-600 text-center max-w-2xl mx-auto">Why businesses choose OneDrive for secure cloud
                    storage</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Secure Cloud Storage with Enterprise-Grade Protection</h3>
                    <p class="text-slate-600 text-sm text-justify">Microsoft OneDrive for Business protects organisational
                        data with encryption at rest and in transit, Multi-Factor Authentication (MFA), and Conditional Access
                        policies. This ensures business files remain secure whether accessed in the office, at home, or on
                        mobile devices.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Enable Remote & Hybrid Work</h3>
                    <p class="text-slate-600 text-sm text-justify">With secure cloud access from any device, OneDrive supports
                        the modern hybrid workplace. Staff can access, edit, and share files from anywhere without relying on
                        on-premise file servers or VPN connections.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Seamless Real-Time Collaboration</h3>
                    <p class="text-slate-600 text-sm text-justify">Teams can co-author documents simultaneously in Word, Excel,
                        and PowerPoint, reducing email attachments and improving workflow efficiency.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Built-In Data Recovery & Version Control</h3>
                    <p class="text-slate-600 text-sm text-justify">Automatic version history allows businesses to restore
                        previous file versions, while ransomware detection and recovery features add another layer of
                        protection.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Reduced IT Infrastructure Costs</h3>
                    <p class="text-slate-600 text-sm text-justify">Moving to OneDrive reduces reliance on physical file servers,
                        lowering hardware, maintenance, and backup costs.</p>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 rounded-2xl p-6 relative shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Improved Compliance & Governance</h3>
                    <p class="text-slate-600 text-sm text-justify">OneDrive integrates with Microsoft Purview, enabling data
                        retention policies, audit logging, and information protection controls.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal reveal-fade-up text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-center">Common questions about Microsoft OneDrive</p>
            </div>
            <div class="space-y-4">
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">What is the difference between OneDrive and
                            SharePoint?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">OneDrive is designed for personal file storage,
                            while SharePoint is used for team and organisational document management.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Is OneDrive secure for business use?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. OneDrive includes encryption, MFA, Conditional
                            Access, and advanced threat protection.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">How much storage does OneDrive provide?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Most Microsoft 365 Business plans include 1TB per
                            user, expandable if required.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Can I share files externally?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. You can securely share files with clients and
                            partners using permission controls and expiry dates.</p>
                    </div>
                </div>
                <div class="reveal reveal-fade-up border-2 border-blue-100 rounded-xl overflow-hidden relative">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium text-slate-900 pr-4">Does OneDrive protect against ransomware?</span>
                        <svg class="w-5 h-5 text-blue-600 shrink-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-5">
                        <p class="text-sm text-slate-600 leading-relaxed">Yes. OneDrive includes ransomware detection and file
                            recovery features.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

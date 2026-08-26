@extends('layouts.page')

@section('title', 'Cloud Services | Bismillah Computer & Technology')

@section('content')

    <section class="relative bg-linear-to-br from-hero-gradient to-white pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="space-y-6">
                <span
                    class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-sm font-semibold rounded-full">Cloud
                    Services</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">Cloud
                    Services</h1>
                <p class="text-lg md:text-xl text-slate-700 leading-relaxed">Empower your business with scalable cloud
                    solutions. From Microsoft 365 to cloud security, we help you leverage the full potential of the cloud.
                </p>
            </div>
            <div class="flex justify-center lg:justify-end">
                <img alt="Cloud Services" loading="lazy" class="rounded-2xl shadow-lg max-w-md w-full"
                    src="/images/cloud/hero.png" />
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

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Microsoft Solutions</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Certified Microsoft partners delivering
                    comprehensive cloud productivity and collaboration solutions.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Microsoft 365</h3>
                    <p class="text-sm text-slate-600">Complete productivity suite</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.05s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">OneDrive</h3>
                    <p class="text-sm text-slate-600">Cloud file storage</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.1s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">SharePoint</h3>
                    <p class="text-sm text-slate-600">Team collaboration</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.15s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Defender</h3>
                    <p class="text-sm text-slate-600">Security protection</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.2s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Exchange Online</h3>
                    <p class="text-sm text-slate-600">Enterprise email</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.25s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Windows 365</h3>
                    <p class="text-sm text-slate-600">Cloud PC</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.3s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Conditional Access</h3>
                    <p class="text-sm text-slate-600">Identity security</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.35s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Copilot</h3>
                    <p class="text-sm text-slate-600">AI assistant</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.4s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Teams</h3>
                    <p class="text-sm text-slate-600">Communication hub</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.45s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Intune</h3>
                    <p class="text-sm text-slate-600">Device management</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.5s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Entra ID</h3>
                    <p class="text-sm text-slate-600">Identity management</p>
                </a>

                <a href="{{ route('cloud.microsoft-solutions') }}"
                    class="reveal reveal-fade-up bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-shadow group"
                    style="animation-delay: 0.55s">
                    <div
                        class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Azure</h3>
                    <p class="text-sm text-slate-600">Cloud platform</p>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal reveal-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Cloud Cyber Security</h2>
                <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">Protect your cloud environment with advanced
                    security solutions.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="reveal reveal-fade-up bg-linear-to-br from-brand-blue to-theme-navy rounded-2xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-3">Threat Protection</h3>
                    <p class="text-white/80 leading-relaxed">Advanced threat detection and response across your entire
                        cloud infrastructure.</p>
                </div>
                <div class="reveal reveal-fade-up bg-linear-to-br from-brand-blue to-theme-navy rounded-2xl p-8 text-white"
                    style="animation-delay: 0.1s">
                    <h3 class="text-xl font-bold mb-3">Data Loss Prevention</h3>
                    <p class="text-white/80 leading-relaxed">Protect sensitive data with comprehensive DLP policies and
                        monitoring.</p>
                </div>
                <div class="reveal reveal-fade-up bg-linear-to-br from-brand-blue to-theme-navy rounded-2xl p-8 text-white"
                    style="animation-delay: 0.2s">
                    <h3 class="text-xl font-bold mb-3">Compliance Management</h3>
                    <p class="text-white/80 leading-relaxed">Stay compliant with industry regulations and standards
                        effortlessly.</p>
                </div>
            </div>
        </div>
    </section>


@endsection

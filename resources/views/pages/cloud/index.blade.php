@extends('layouts.app')

@section('title', 'Cloud Services | Bismillah Computer & Technology')
@section('description', 'Microsoft 365, Azure, cloud migration, and cybersecurity solutions to keep your business
    connected and secure.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Ask us about <br />
                    <span class="text-blue-600 block mt-2">Microsoft 365 for your business</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">
                    Empower your business with scalable cloud solutions. From Microsoft 365 to cloud security, we help you
                    leverage the full potential of the cloud to drive productivity, collaboration, and growth.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#benifits"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Benifits
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <a href="#services"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 bg-navy text-white text-sm font-semibold rounded-xl shadow-md hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm hover:bg-navy-active hover:text-white transition-colors">Contact
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img src="/images/cloud/hero.png" alt="BG Image" height="400" width="600" class="rounded-lg w-full max-w-md lg:max-w-lg" />
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

    <section id="benifits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900">Right application, right scale, right cost</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span
                            class="text-blue-600 mr-2">&bull;</span>Scalability
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Easily scale your IT resources up or down based on
                        demand. Cloud solutions allow your business to grow without the need for significant upfront
                        infrastructure investments.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span
                            class="text-blue-600 mr-2">&bull;</span>Accessibility
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Access your data and applications from anywhere in the
                        world with an internet connection. Enable remote work and ensure your team stays connected and
                        productive.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span class="text-blue-600 mr-2">&bull;</span>Enhanced
                        security</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Benefit from enterprise-grade security measures
                        including encryption, multi-factor authentication, and regular security updates to protect your
                        sensitive business data.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span class="text-blue-600 mr-2">&bull;</span>Cost
                        efficiencies</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Reduce capital expenditure by moving to an operational
                        expense model. Pay only for the resources you use and eliminate the costs of maintaining on-premises
                        hardware.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span class="text-blue-600 mr-2">&bull;</span>Business
                        continuity</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Ensure your business operations continue uninterrupted
                        with built-in disaster recovery, automatic backups, and redundant infrastructure across multiple
                        data centres.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span class="text-blue-600 mr-2">&bull;</span>Rapid
                        deployment</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Deploy new services and applications in minutes rather
                        than weeks. Cloud platforms enable rapid prototyping and faster time-to-market for your business
                        solutions.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>

                <div
                    class="reveal reveal-fade-up border-2 border-blue-100 hover:border-blue-300 relative rounded-2xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white transition-all">
                    <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
                    <h3 class="text-lg font-bold text-slate-900 mb-3"><span
                            class="text-blue-600 mr-2">&bull;</span>Innovation
                        and agility</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">Leverage cutting-edge technologies like AI, machine
                        learning, and advanced analytics without significant investment. Stay ahead of the competition with
                        continuous innovation.</p>
                    <a href="#" class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">Read
                        More →</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal reveal-fade-up">
                <h2 class="text-3xl text-center font-bold text-blue-900">Cloud Services for the modern business</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/microsoft365.jpg" alt="Microsoft 365"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Microsoft 365</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Complete productivity suite with Word, Excel,
                            Teams, and cloud storage for seamless collaboration.</p>
                    </div>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/windows365.jpg" alt="Windows 365"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Windows 365</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Stream your personalised Windows experience to
                            any device with a secure cloud-based PC.</p>
                    </div>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/azure.png" alt="Microsoft Azure"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Microsoft Azure</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Scalable cloud computing services for building,
                            deploying, and managing applications globally.</p>
                    </div>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/entra.jpg" alt="Entra ID"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Entra ID</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Identity and access management solution for
                            secure authentication and single sign-on.</p>
                    </div>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/backup.jpg" alt="Data Backup"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Data Backup</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Reliable cloud backup solutions to protect your
                            business data with automated recovery.</p>
                    </div>
                </div>

                <div
                    class="reveal reveal-fade-up bg-white rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="/images/cloud/email.jpg" alt="Email Signature Management"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Email Signature Management</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Centralised management of professional email
                            signatures across your entire organisation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

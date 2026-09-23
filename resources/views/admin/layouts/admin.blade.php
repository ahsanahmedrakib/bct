<!DOCTYPE html>
<html lang="en" class="h-full antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - BCT</title>
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/admin.js'])
    @stack('styles')
</head>

<body class="h-full bg-slate-100 text-slate-900">
    <div class="min-h-full">
        <aside id="adminSidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 -translate-x-full bg-[#0b1526] text-white transition-transform duration-200 lg:translate-x-0">
            <div class="flex h-16 items-center justify-center gap-3 border-b border-white/10 px-6">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo-white.svg') }}" alt="Logo">
                </a>
            </div>

            <nav class="px-3 py-4">
                <p class="px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Menu</p>
                <a href="{{ route('admin.dashboard-view') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.dashboard-view') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-gauge w-5 text-center {{ request()->routeIs('admin.dashboard-view') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Dashboard
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">HOMEPAGE</p>
                <a href="{{ route('admin.hero-slides') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.hero-slides') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-image w-5 text-center {{ request()->routeIs('admin.hero-slides') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Hero Slides
                </a>
                <a href="{{ route('admin.marquee') }}"
                    class="mt-0.5 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.marquee') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-star w-5 text-center {{ request()->routeIs('admin.marquee') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Marquee
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">WEB</p>
                <a href="{{ route('admin.categories') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.categories') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-tags w-5 text-center {{ request()->routeIs('admin.categories') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Categories
                </a>
                <a href="{{ route('admin.portfolio') }}"
                    class="mt-0.5 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.portfolio') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-folder-open w-5 text-center {{ request()->routeIs('admin.portfolio') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Portfolio
                </a>
                <a href="{{ route('admin.gallery') }}"
                    class="mt-0.5 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.gallery') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-images w-5 text-center {{ request()->routeIs('admin.gallery') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Gallery
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Company</p>
                <a href="{{ route('admin.team') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.team') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-users w-5 text-center {{ request()->routeIs('admin.team') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Team Members
                </a>
                <a href="{{ route('admin.locations') }}"
                    class="mt-0.5 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.locations') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-location-dot w-5 text-center {{ request()->routeIs('admin.locations') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Our Locations
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Resources</p>
                <a href="{{ route('admin.pricing-plans') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.pricing-plans') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-tags w-5 text-center {{ request()->routeIs('admin.pricing-plans') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Pricing Plans
                </a>
                <a href="{{ route('admin.faqs') }}"
                    class="mt-0.5 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.faqs') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-circle-question w-5 text-center {{ request()->routeIs('admin.faqs') ? 'text-white' : 'text-brand-blue' }}"></i>
                    FAQs
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Blog</p>
                <a href="{{ route('admin.blogs') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.blogs') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-newspaper w-5 text-center {{ request()->routeIs('admin.blogs') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Blogs
                </a>

                <p class="mt-4 px-3 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Inbox</p>
                <a href="{{ route('admin.queries') }}"
                    class="mt-1 ml-3 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs('admin.queries') ? 'bg-brand-blue text-white' : 'text-slate-200 hover:bg-white/10' }}"
                    data-smooth>
                    <i class="fa-solid fa-envelope w-5 text-center {{ request()->routeIs('admin.queries') ? 'text-white' : 'text-brand-blue' }}"></i>
                    Contact Queries
                </a>
                <a href="{{ route('admin.login') }}" onclick="event.preventDefault(); window.AdminLogout();"
                    class="mt-4 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-200 hover:bg-white/10">
                    <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center text-brand-secondary"></i>
                    Logout
                </a>
            </nav>
        </aside>

        {{-- Sidebar overlay (mobile) --}}
        <div id="sidebarOverlay" class="fixed inset-0 z-30 hidden bg-black/50 lg:hidden"></div>

        <div class="lg:pl-64">
            <header
                class="sticky top-0 z-20 flex h-16 items-center justify-between border-b border-slate-200 bg-white px-4 sm:px-6">
                <div class="flex items-center gap-3">
                    <button id="sidebarToggle" class="rounded-lg p-2 text-slate-600 hover:bg-slate-100 lg:hidden">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div>
                        <h1 class="text-base font-bold text-slate-900 sm:text-lg">@yield('pageTitle', 'Dashboard')</h1>
                        <p class="hidden text-xs text-slate-500 sm:block">@yield('pageSubtitle', 'Manage your site content')</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span id="adminName" class="hidden text-sm font-medium text-slate-600 sm:inline">Admin</span>
                    <div
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-brand-blue text-sm font-bold text-white">
                        A
                    </div>
                </div>
            </header>

            <main class="p-4 sm:p-6">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Toast container --}}
    <div id="toastContainer" class="fixed bottom-5 right-5 z-50 flex flex-col gap-3"></div>

    <script>
        const adminToken = () => localStorage.getItem('bct_admin_token');
    </script>
</body>

</html>

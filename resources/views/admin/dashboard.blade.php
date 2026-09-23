@extends('admin.layouts.admin')

@section('title', 'Dashboard | Admin Panel')
@section('pageTitle', 'Dashboard')
@section('pageSubtitle', 'Overview of your site content')

@section('content')
    <div id="dashboard-section" data-admin-page class="space-y-6">
        {{-- Welcome banner --}}
        <div
            class="rounded-xl border border-slate-200 bg-gradient-to-r from-[#0b1526] to-[#157cc1] p-6 text-white shadow-sm">
            <h2 id="welcomeHeading" class="text-lg font-bold">Welcome back</h2>
            <p class="mt-1 text-sm text-blue-100">Here's what's happening with your site right now.</p>
        </div>

        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Projects</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-folder-open"></i>
                    </span>
                </div>
                <p id="statProjects" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Categories</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                </div>
                <p id="statCategories" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Contact Queries</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Unread</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-red-50 text-red-600">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </span>
                </div>
                <p id="statUnread" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            {{-- Recent contact queries --}}
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                    <h2 class="text-sm font-bold text-slate-900">Recent Contact Queries</h2>
                    <a href="{{ route('admin.queries') }}"
                        class="flex items-center gap-1.5 text-xs font-semibold text-[#157cc1] hover:underline">
                        View all <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div id="recentQueries">
                    <div class="flex items-center justify-center py-10">
                        <i class="fa-solid fa-circle-notch animate-spin text-xl text-[#157cc1]"></i>
                    </div>
                </div>
            </div>

            {{-- Recent projects --}}
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                    <h2 class="text-sm font-bold text-slate-900">Recent Portfolio</h2>
                    <a href="{{ route('admin.portfolio') }}"
                        class="flex items-center gap-1.5 text-xs font-semibold text-[#157cc1] hover:underline">
                        Manage <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div id="recentProjects">
                    <div class="flex items-center justify-center py-10">
                        <i class="fa-solid fa-circle-notch animate-spin text-xl text-[#157cc1]"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="en" class="h-full antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - BCT</title>
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/admin.js'])
</head>

<body class="h-full bg-slate-100 text-slate-900">
    <div class="flex min-h-full items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="mb-8 text-center">
                <div
                    class="mx-auto flex items-center justify-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-3.5 group" target="_blank">
                        <img src="/logo.svg" alt="Logo" width="180" height="70"
                            style="width:auto;height:auto">
                    </a>
                </div>
                <h1 class="mt-4 text-2xl font-extrabold text-slate-900">BCT Admin Panel</h1>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                <div id="loginError"
                    class="mb-4 hidden rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"></div>

                <form id="loginForm" class="space-y-5" novalidate>
                    @csrf
                    <div>
                        <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email
                            Address</label>
                        <div class="relative">
                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" autocomplete="email" required
                                placeholder="admin@bct.com"
                                class="w-full rounded-lg border border-slate-300 py-2.5 pl-10 pr-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-brand-blue focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="mb-1.5 block text-sm font-medium text-slate-700">Password</label>
                        <div class="relative">
                            <span
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password" autocomplete="current-password"
                                required placeholder="••••••••"
                                class="w-full rounded-lg border border-slate-300 py-2.5 pl-10 pr-10 text-sm text-slate-900 placeholder:text-slate-400 focus:border-brand-blue focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            <button type="button" id="togglePassword" aria-label="Show password"
                                class="absolute inset-y-0 right-0 flex w-10 items-center justify-center text-slate-400 transition hover:text-brand-blue focus:outline-none">
                                <i id="eyeIcon" class="fa-solid fa-eye"></i>
                                <i id="eyeSlashIcon" class="fa-solid fa-eye-slash" style="display:none"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" id="loginBtn"
                        class="flex w-full items-center justify-center gap-2 rounded-lg bg-brand-blue py-2.5 text-sm font-semibold text-white transition hover:bg-brand-hover disabled:cursor-not-allowed disabled:opacity-60">
                        <span id="btnText">Sign In</span>
                        <span id="btnSpinner" class="hidden">
                            <i class="fa-solid fa-circle-notch animate-spin"></i>
                        </span>
                    </button>
                </form>
            </div>

            <p class="mt-6 text-center text-xs text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-brand-blue">
                    <i class="fa-solid fa-arrow-left mr-1"></i> Back to website
                </a>
            </p>
        </div>
    </div>
</body>

</html>

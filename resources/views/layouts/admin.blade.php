<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>@yield('title', 'Admin') · {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-secondary-surface font-sans text-secondary-text antialiased">
    <div class="min-h-screen lg:flex">
        <x-admin.sidebar />

        <div class="min-w-0 flex-1">
            <header class="flex h-16 items-center justify-end border-b border-brand/10 bg-white px-6 lg:px-8">
                <div class="flex items-center gap-4">
                    <span class="text-sm text-secondary-text/75">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="rounded bg-brand px-3 py-2 text-sm font-medium text-secondary-surface hover:bg-brand/90">Sign out</button>
                    </form>
                </div>
            </header>

            <main class="px-6 py-10 lg:px-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin login · {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-secondary-surface font-sans text-secondary-text antialiased">
    <main class="flex min-h-screen items-center justify-center px-6 py-12">
        <section class="w-full max-w-sm">
            <div class="mb-8 text-center">
                <img src="{{ asset('images/super-fresh-logo-dark.png') }}" alt="Super Fresh" class="mx-auto mb-7 h-auto w-56">
            </div>

            <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-5 rounded-md border border-brand/10 bg-white p-6 shadow-sm">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-brand">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none transition placeholder:text-secondary-text/40 focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20"
                        placeholder="admin@example.com">
                    @error('email')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-brand">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none transition focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
                    @error('password')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <label class="flex items-center gap-2 text-sm text-secondary-text/80">
                    <input type="checkbox" name="remember" value="1" class="size-4 rounded border-brand/30 text-brand focus:ring-brand-bright">
                    Remember me
                </label>

                <button type="submit" class="w-full rounded bg-brand px-4 py-2.5 text-sm font-semibold text-secondary-surface transition hover:bg-brand/90 focus:outline-none focus:ring-4 focus:ring-brand-bright/30">
                    Sign in
                </button>
            </form>
        </section>
    </main>
</body>
</html>

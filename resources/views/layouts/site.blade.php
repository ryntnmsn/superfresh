<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>
        @hasSection('seo_title')
            @yield('seo_title')
        @else
            @yield('title', 'Home')
        @endif
        · {{ config('app.name', 'Super Fresh') }}
    </title>
    @hasSection('meta_description')
        <meta name="description" content="@yield('meta_description')">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-white font-sans text-brand antialiased">
    <x-site.header />
    @yield('content')
    <x-site.footer />
</body>
</html>

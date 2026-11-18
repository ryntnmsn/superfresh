<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    <title>
        @hasSection('seo_title')
            @yield('seo_title')
        @else
            @yield('title', 'Superfresh schoonmaakdiensten')
        @endif
        · {{ config('app.name') === 'Laravel' ? 'Superfresh' : config('app.name', 'Superfresh') }}
    </title>
    <meta name="description" content="@yield('meta_description', 'Professionele schoonmaak voor bedrijven en verhuurpanden in Den Haag en omgeving. Bekijk onze diensten of vraag een vrijblijvende offerte aan bij Superfresh.')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="{{ config('app.name') === 'Laravel' ? 'Superfresh' : config('app.name', 'Superfresh') }}">
    <meta property="og:title" content="@yield('seo_title', 'Professionele schoonmaak in Den Haag | Superfresh')">
    <meta property="og:description" content="@yield('meta_description', 'Professionele schoonmaak voor bedrijven en verhuurpanden in Den Haag en omgeving. Bekijk onze diensten of vraag een vrijblijvende offerte aan bij Superfresh.')">
    <meta property="og:url" content="@yield('canonical_url', url()->current())">
    <meta name="twitter:card" content="@yield('twitter_card', 'summary')">
    <meta name="twitter:title" content="@yield('seo_title', 'Professionele schoonmaak in Den Haag | Superfresh')">
    <meta name="twitter:description" content="@yield('meta_description', 'Professionele schoonmaak voor bedrijven en verhuurpanden in Den Haag en omgeving. Bekijk onze diensten of vraag een vrijblijvende offerte aan bij Superfresh.')">
    @yield('social_image')
    @php($businessStructuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => 'Superfresh',
        'url' => url('/'),
        'logo' => asset('favicon.png'),
        'telephone' => '+31705680983',
        'areaServed' => ['Den Haag', 'Rijswijk', 'Delft', 'Leiden', 'Rotterdam'],
    ])
    <script type="application/ld+json">@json($businessStructuredData)</script>
    @yield('structured_data')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (config('services.recaptcha.site_key'))
        <script src="https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() }}" async defer></script>
    @endif
</head>
<body class="flex min-h-screen flex-col bg-white font-sans text-brand antialiased">
    <x-site.header />
    @yield('content')
    <x-site.footer />
    <x-site.newsletter-popup />
    <section id="cookie-consent" aria-labelledby="cookie-consent-heading" aria-describedby="cookie-consent-description" aria-hidden="true" class="fixed inset-x-0 bottom-0 z-50 hidden border-t border-brand/15 bg-white p-4 shadow-[0_-8px_30px_rgba(21,61,54,0.16)] sm:p-6">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div class="max-w-3xl">
                <h2 id="cookie-consent-heading" class="font-heading text-lg font-extrabold text-brand">{{ __('Cookies en privacy') }}</h2>
                <p id="cookie-consent-description" class="mt-1 text-sm leading-6 text-secondary-text/75">{{ __('We gebruiken analytische cookies om het bezoek aan onze website te meten en te verbeteren. U kunt deze accepteren of weigeren. Lees meer in onze') }} <a href="{{ route('privacyverklaring') }}" class="underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('privacyverklaring') }}</a>.</p>
            </div>
            <div class="flex shrink-0 flex-col gap-2 sm:flex-row">
                <button type="button" data-cookie-consent="rejected" class="rounded border border-brand/20 bg-white px-4 py-2.5 text-sm font-bold text-brand transition hover:bg-secondary-surface focus:outline-none focus:ring-4 focus:ring-brand-bright/30">{{ __('Weigeren') }}</button>
                <button type="button" data-cookie-consent="accepted" class="rounded bg-brand px-4 py-2.5 text-sm font-bold text-white transition hover:bg-brand/90 focus:outline-none focus:ring-4 focus:ring-brand-bright/40">{{ __('Accepteren') }}</button>
            </div>
        </div>
    </section>
</body>
</html>

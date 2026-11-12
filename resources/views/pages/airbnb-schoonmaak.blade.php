@extends('layouts.site')

@section('title', 'Airbnb & short-stay schoonmaak')
@section('seo_title', 'Airbnb-schoonmaak Den Haag | Superfresh')
@section('overview_excerpt', 'Schoonmaak tussen twee verblijven, zodat u de volgende gasten in een schoon verblijf ontvangt. We stemmen de planning af op uw wisseltijden.')
@section('meta_description', 'Airbnb- en short-stay schoonmaak in Den Haag. Vaak starten binnen 48 uur na akkoord, afhankelijk van uw wisseltijden. Vraag een offerte aan.')

@section('content')
    <main class="flex-1" aria-label="Airbnb en short-stay schoonmaak">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Airbnb &amp; short-stay schoonmaak</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Airbnb- en short-stay schoonmaak in Den Haag</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>De vorige gasten zijn vertrokken, de volgende komen alweer aan. Superfresh maakt uw Airbnb of short-stay accommodatie schoon tussen twee verblijven.</p>
                        <p>Verhuurt u in Den Haag of omgeving en zoekt u hulp bij de schoonmaak? Geef uw wisseldagen en aankomsttijden door. We hebben schoonmakers beschikbaar en bekijken of uw boekingsplanning aansluit op onze beschikbare momenten.</p>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'airbnb']) }}">Vraag een offerte aan</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">Snel starten? Bel ons</a>
                    </div>
                    <x-site.availability />
                </div>
            </div>
        </section>

        <section aria-labelledby="turnover-cleaning-heading" class="bg-white">
            <div class="mx-auto max-w-5xl px-6 py-20 lg:px-8 lg:py-28">
                <h2 id="turnover-cleaning-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Schoonmaak voor de volgende gasten</h2>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">Een schone badkamer, een keuken zonder etensresten en vloeren zonder stof of kruimels. Dit zijn de dingen die gasten bij aankomst direct zien.</p>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">Voor de schoonmaak tussen verblijven kunnen we afspraken maken over:</p>
                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        'Badkamer en toilet reinigen.',
                        'Het keukenwerkblad, de spoelbak en kookplaat schoonmaken.',
                        'Bereikbare tafels en andere oppervlakken afnemen.',
                        'Vloeren stofzuigen en dweilen.',
                        'Afvalbakken legen.',
                        'Woon- en slaapkamers schoonmaken.',
                    ] as $task)
                        <li class="flex items-start gap-3 rounded-lg border border-brand/10 bg-white p-4 text-sm leading-6 text-secondary-text/75 shadow-sm">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-5 shrink-0 rounded-full object-contain">
                            <span>{{ $task }}</span>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-6 text-base leading-7 text-secondary-text/75">Vooraf leggen we vast welke werkzaamheden bij iedere wissel horen.</p>
            </div>
        </section>

        <section aria-labelledby="booking-plan-heading" class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="booking-plan-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Uw wisseltijden bepalen de planning</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Laat ons weten wanneer gasten uitchecken en hoe laat de volgende gasten kunnen aankomen. Dan beoordelen we of de schoonmaak binnen die tijd kan worden ingepland.</p>
                        <p>Ook de toegang tot de accommodatie en het doorgeven van gewijzigde boekingen spreken we af. Verhuurt u meerdere accommodaties? Vermeld per locatie de omvang en de verwachte wisselfrequentie.</p>
                        <p>Verhuurt u een woning voor langere tijd? Bekijk ook onze <a href="{{ route('schoonmaak-huurwoningen') }}" class="text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">schoonmaak voor verhuurders</a>.</p>
                    </div>
                </div>
                <img src="https://images.openai.com/static-rsc-4/ytsQ0t3-9ylHV360WoAuEvjKuu0OgqIchLIJ_0rCrMknXuLECFoOIezQzSx2TFxol5s-05vicECxAtROAdWthWAD-5vZ4El65Z6Ob7nCyFanCMI-pLPr_ImewdMPwRLiVEsh4_ovX7B7UnoD1tb1dsgqufYrIb_tMjH-kvKof0g?purpose=inline" alt="Een verzorgde short-stay accommodatie" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section aria-labelledby="airbnb-cost-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="airbnb-cost-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Wat kost Airbnb-schoonmaak?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">De prijs hangt af van het aantal kamers, de grootte van de accommodatie en de werkzaamheden. Ook de frequentie en beschikbare tijd tussen verblijven nemen we mee in de offerte.</p>
                </div>
                <img src="https://images.openai.com/static-rsc-4/P-UkFe89ghyAeBAtGul4Ck3u5Sbkq4Tar0_hHIisHWIb7qnVbuXudQueT4V74gLGHi-c4j0dq0jGbqozzrksHvTZt_aWV8f3Pb50p1GifxcPnR8EKEtbMZntdOnf_pzA5jfn6nq_w9rjAkY4--oTDT2z5A51cK5VEPJqXcsSrfE?purpose=inline" alt="Een schoon en verzorgd interieur" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Persoonlijk afgestemd</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Nog geen schoonmaak geregeld voor uw volgende gasten?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Stuur ons de locatie, het aantal kamers en uw eerstvolgende wisselmoment. Vaak kunnen we binnen 48 uur na akkoord starten, als de schoonmaak past binnen de afgesproken wisseltijden.</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'airbnb']) }}">Vraag een offerte aan</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">Bel ons voor de planning</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

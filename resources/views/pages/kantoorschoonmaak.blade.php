@extends('layouts.site')

@section('title', __('Kantoorschoonmaak'))
@section('seo_title', 'Kantoorschoonmaak Den Haag | Superfresh')
@section('overview_excerpt', 'Van werkplekken en vergaderruimtes tot keuken en sanitair. Wij maken uw kantoor schoon op de afgesproken momenten.')
@section('meta_description', 'Kantoorschoonmaak in Den Haag en omgeving. Vaak starten binnen 48 uur na akkoord. Vraag een offerte aan en bespreek uw gewenste startdatum.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Kantoorschoonmaak') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Kantoorschoonmaak') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Kantoorschoonmaak in Den Haag en omgeving') }}</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>{{ __('Superfresh maakt kantoren schoon in Den Haag en omgeving. Van werkplekken en vergaderruimtes tot de keuken en het sanitair.') }}</p>
                        <p>{{ __('Wilt u de schoonmaak uitbesteden of zoekt u een ander schoonmaakbedrijf? We hebben mensen beschikbaar voor nieuwe opdrachten. Vertel ons wat er moet gebeuren en hoe vaak. Dan maken we een offerte en bespreken we wanneer we kunnen beginnen.') }}</p>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'kantoor']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Snel starten? Bel ons') }}</a>
                    </div>
                    <x-site.availability />
                </div>
            </div>
        </section>

        <section aria-labelledby="daily-spaces-heading" class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-5xl">
                    <h2 id="daily-spaces-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat maken we schoon op uw kantoor?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Vergadertafels worden de hele dag gebruikt, in de keuken blijft de afwas zich opstapelen en de vloeren lopen snel vuil. Wij nemen de afgesproken schoonmaakwerkzaamheden uit handen.') }}</p>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('In het schoonmaakprogramma kunnen we onder meer opnemen:') }}</p>
                    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ([
                            'Bureaus en bereikbare werkoppervlakken afnemen.',
                            'Vloeren stofzuigen en dweilen.',
                            'Toiletten en wastafels reinigen.',
                            'De keuken of pantry schoonmaken.',
                            'Afvalbakken legen.',
                            'De entree en vergaderruimtes schoonhouden.',
                        ] as $task)
                            <li class="flex items-start gap-3 rounded-lg border border-brand/10 bg-white p-4 text-sm leading-6 text-secondary-text/75 shadow-sm">
                                <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-5 shrink-0 rounded-full object-contain">
                                <span>{{ __($task) }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-6 text-base leading-7 text-secondary-text/75">{{ __('We leggen vooraf vast welke werkzaamheden bij iedere schoonmaakbeurt horen en wat minder vaak nodig is.') }}</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="cleaning-plan-heading" class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="cleaning-plan-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Afspraken die passen bij uw werkdag') }}</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>{{ __('Een drukbezet kantoor vraagt om een andere schoonmaakfrequentie dan een locatie waar medewerkers enkele dagen per week aanwezig zijn.') }}</p>
                        <p>{{ __('Daarom kijken we naar het gebruik van de ruimtes, de bezetting en uw wensen. Ook het schoonmaakmoment en de toegang tot het pand spreken we vooraf af. Zo weet u wat er wordt schoongemaakt en wanneer.') }}</p>
                    </div>
                </div>
                <img src="https://images.openai.com/static-rsc-4/GeQnPAFItM0zaQiSRH17oEes5tUYn4p8dllmbH3W1zq18dybbrRZk13hZjg50YV1d1OXRHKhsV_aOhX71OfzsAL39juNxvdhbhGHcyca3aGR9_6PxmcHXxSpcpH6Oloz5-_1U5AKzNhYq8sHht9VA2xVPz7MfIo3n_bBtkxzFBs?purpose=inline" alt="{{ __('Een lichte, verzorgde kantoorwerkplek') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section aria-labelledby="cleaning-cost-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="cleaning-cost-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat kost kantoorschoonmaak?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('De prijs hangt af van de oppervlakte, het aantal ruimtes, de werkzaamheden en de schoonmaakfrequentie. Vermeld bij uw aanvraag ook eventuele bijzonderheden, zoals meerdere verdiepingen of veel sanitair. Op basis daarvan stellen we een offerte op.') }}</p>
                </div>
                <img src="https://images.openai.com/static-rsc-4/UW86ErY3PpVvO3wIO1WBQ_UrP3NlZhP0mzsd50KYijs6UKtZf9G5odJfSoCtmuzkB2gAvlL1fqT-25vG8DrbMoALYZup8QxkIzqXl9qE4cjRwrDriBB-6oUD0CtAXrpyzZ12cxXwWJ7xhTSMxRlH6x2AEfWYy2tXUZqYPkwN5xs?purpose=inline" alt="{{ __('Een professioneel onderhouden kantoorinterieur') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Samen bekijken wat past') }}</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wanneer wilt u starten met kantoorschoonmaak?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Geef de locatie, de geschatte oppervlakte en de gewenste frequentie door. We kunnen vaak binnen 48 uur na akkoord starten en spreken de startdatum vooraf met u af.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'kantoor']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

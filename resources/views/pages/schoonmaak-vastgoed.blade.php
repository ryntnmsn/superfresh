@extends('layouts.site')

@section('title', __('Schoonmaak voor vastgoedprofessionals'))
@section('seo_title', 'Vastgoedschoonmaak Den Haag | Superfresh')
@section('overview_excerpt', 'Een schoon pand voor fotografie, bezichtiging of sleuteloverdracht. Voor makelaars en vastgoedbeheerders met één locatie of meerdere panden.')
@section('meta_description', 'Schoonmaak voor makelaars en vastgoedbeheerders in Den Haag. Vaak starten binnen 48 uur na akkoord. Vraag een offerte aan voor uw pand.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Schoonmaak voor vastgoedprofessionals') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Schoonmaak voor vastgoedprofessionals') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Schoonmaak voor makelaars en vastgoedbeheerders in Den Haag') }}</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>{{ __('Binnenkort een fotograaf, bezichtiging of sleuteloverdracht? Superfresh maakt woningen en bedrijfspanden schoon voor makelaars en vastgoedbeheerders in Den Haag en omgeving.') }}</p>
                        <p>{{ __('We hebben ruimte voor nieuwe opdrachtgevers, voor eenmalige schoonmaak en terugkerende opdrachten. Geef aan om welk pand het gaat, wat er moet gebeuren en wanneer het klaar moet zijn.') }}</p>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'vastgoed']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Snel starten? Bel ons') }}</a>
                    </div>
                    <x-site.availability />
                </div>
            </div>
        </section>

        <section aria-labelledby="property-preparation-heading" class="bg-white">
            <div class="mx-auto max-w-5xl px-6 py-20 lg:px-8 lg:py-28">
                <h2 id="property-preparation-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Schoonmaak vóór fotografie, bezichtiging of overdracht') }}</h2>
                <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>{{ __('Stof op de vloer, vlekken op oppervlakken en een vuile keuken vallen op tijdens een bezichtiging of fotoreportage. Wij maken de afgesproken ruimtes schoon voordat het volgende moment in uw planning aanbreekt.') }}</p>
                    <p>{{ __('De werkzaamheden kunnen onder meer bestaan uit:') }}</p>
                    <ul class="grid gap-3 sm:grid-cols-2">
                        @foreach ([
                            'Vloeren stofzuigen en dweilen.',
                            'Bereikbare oppervlakken afnemen.',
                            'Keuken en sanitair reinigen.',
                            'De entree en verkeersruimtes schoonmaken.',
                            'Lege kamers en werkruimtes reinigen.',
                        ] as $task)
                            <li class="flex items-start gap-3 rounded-lg border border-brand/10 bg-white p-4 text-sm leading-6 text-secondary-text/75 shadow-sm">
                                <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-5 shrink-0 rounded-full object-contain">
                                <span>{{ __($task) }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <p>{{ __('De staat van het pand en het doel van de schoonmaak bepalen wat er nodig is. We leggen de werkzaamheden vooraf vast.') }}</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="multiple-locations-heading" class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="multiple-locations-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Eén aanspreekpunt voor uw schoonmaakaanvraag') }}</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>{{ __('Een leeg appartement vraagt om een andere aanpak dan een ingericht bedrijfspand. Vermeld daarom per locatie het type pand, de omvang en de gewenste werkzaamheden.') }}</p>
                        <p>{{ __('We bespreken wie toegang verleent, wie de contactpersoon is en wanneer het werk uitgevoerd moet worden. Heeft u meerdere locaties? Stuur de adressen en gewenste data samen mee, zodat we de planning kunnen beoordelen.') }}</p>
                        <p>{{ __('Gaat het om een vaste zakelijke werklocatie? Bekijk ook onze') }} <a href="{{ route('kantoorschoonmaak') }}" class="text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('kantoorschoonmaak') }}</a>.</p>
                    </div>
                </div>
                <img src="https://images.openai.com/static-rsc-4/6HjMxGtTB6ogHgKeE6UML2ubmNY-kdxbg7w-O6VIjkWq08pHsg5wqZH7DYAUbgiy9SuS2IxpthHf8JfbzRE9_EOxnAHvZXSFyo-7013r7fsOvOce4RJiSPVnjz8gVy6D-5oowYv4mCPd58CiSHPmiil9abnnMVLxmvi-fchrQqg?purpose=inline" alt="{{ __('Een verzorgd interieur klaargemaakt voor vastgoedpresentatie') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section aria-labelledby="property-cost-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="property-cost-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat bepaalt de prijs van vastgoedschoonmaak?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('De prijs wordt bepaald door de oppervlakte, de staat van het pand en de werkzaamheden. Geef eventuele deadlines direct door, zoals de komst van de fotograaf of een geplande overdracht. Op basis van de opdracht stellen we een offerte op.') }}</p>
                </div>
                <img src="https://images.openai.com/static-rsc-4/P-UkFe89ghyAeBAtGul4Ck3u5Sbkq4Tar0_hHIisHWIb7qnVbuXudQueT4V74gLGHi-c4j0dq0jGbqozzrksHvTZt_aWV8f3Pb50p1GifxcPnR8EKEtbMZntdOnf_pzA5jfn6nq_w9rjAkY4--oTDT2z5A51cK5VEPJqXcsSrfE?purpose=inline" alt="{{ __('Een schoon en verzorgd pandinterieur') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Persoonlijke afstemming') }}</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Een pand op korte termijn laten schoonmaken?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Deel de locatie, de werkzaamheden en uw deadline. We hebben mensen beschikbaar en kunnen vaak binnen 48 uur na akkoord starten. De startdatum spreken we vooraf met u af.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'vastgoed']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

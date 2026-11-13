@extends('layouts.site')

@section('title', __('Schoonmaak voor huurwoningen'))
@section('seo_title', 'Schoonmaak huurwoning Den Haag | Superfresh')
@section('overview_excerpt', 'Een huurder vertrokken? Wij maken uw huurwoning schoon voordat de volgende bewoner intrekt, met aandacht voor keuken, badkamer en de overige kamers.')
@section('meta_description', 'Huurwoning laten schoonmaken in Den Haag en omgeving? Superfresh kan vaak binnen 48 uur na akkoord starten. Vraag een offerte aan.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Schoonmaak voor huurwoningen') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Schoonmaak voor verhuurders') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Schoonmaak van huurwoningen in Den Haag en omgeving') }}</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>{{ __('Een huurder vertrokken? Superfresh maakt uw huurwoning schoon voordat de volgende bewoner intrekt. Voor particuliere en zakelijke verhuurders in Den Haag en omgeving.') }}</p>
                        <p>{{ __('Of u nu één appartement verhuurt of meerdere woningen beheert: laat ons weten wat er moet gebeuren en wanneer de sleuteloverdracht is. We hebben mensen beschikbaar en kunnen snel een startdatum met u bespreken.') }}</p>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'verhuurders']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Snel starten? Bel ons') }}</a>
                    </div>
                    <x-site.availability />
                </div>
            </div>
        </section>

        <section aria-labelledby="tenant-change-heading" class="bg-white">
            <div class="mx-auto max-w-5xl px-6 py-20 lg:px-8 lg:py-28">
                <h2 id="tenant-change-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Een huurwoning schoonmaken bij een huurderswissel') }}</h2>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Zodra een woning leeg is, wordt zichtbaar wat aandacht nodig heeft. Stof langs de plinten, vet in de keuken of kalkaanslag in de badkamer bijvoorbeeld.') }}</p>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Afhankelijk van de staat van de woning kunnen we de volgende werkzaamheden opnemen:') }}</p>
                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        'Keukenwerkblad, spoelbak en kookplaat reinigen.',
                        'Badkamer en toilet schoonmaken.',
                        'Vloeren stofzuigen en dweilen.',
                        'Bereikbare oppervlakken en plinten afnemen.',
                        'Lege kasten aan de binnenzijde schoonmaken.',
                        'De entree en overige kamers reinigen.',
                    ] as $task)
                        <li class="flex items-start gap-3 rounded-lg border border-brand/10 bg-white p-4 text-sm leading-6 text-secondary-text/75 shadow-sm">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-5 shrink-0 rounded-full object-contain">
                            <span>{{ __($task) }}</span>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-6 text-base leading-7 text-secondary-text/75">{{ __('Geef bijzonderheden vooraf door. Zo kunnen we het werk en de benodigde tijd beter inschatten.') }}</p>
            </div>
        </section>

        <section aria-labelledby="properties-heading" class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="properties-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Voor één woning of meerdere huurpanden') }}</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>{{ __('Bij een huurderswissel werken verschillende partijen vaak naar dezelfde datum toe. Geef daarom direct door wanneer de woning toegankelijk is en wanneer deze schoon moet zijn.') }}</p>
                        <p>{{ __('Heeft u meerdere huurwoningen? We bespreken per locatie wat nodig is. Voor de schoonmaak van gemeenschappelijke ruimtes kunnen we aparte afspraken maken.') }}</p>
                        <p>{{ __('Verhuurt u ook accommodaties voor korte verblijven? Bekijk onze') }} <a href="{{ route('airbnb-schoonmaak') }}" class="text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Airbnb- en short-stay schoonmaak') }}</a>.</p>
                    </div>
                </div>
                <img src="https://images.openai.com/static-rsc-4/xfyJB2AhnwD18ySc5nMAVTJWGC-xatucKxBn5h-6d4z-aeFt8Qk7zNMCOs3_vjiXtE_zgd46NSCjYKrulo9QSou9CKYwmVqwOfDgFRdlh9Q9UNUZQ-PioLr6hUiKxcfCCTI6BeX6-kAzTK646KaaK_DDJ2ysA8McwsBu0fGPryU?purpose=inline" alt="{{ __('Een appartementencomplex met huurwoningen') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section aria-labelledby="rental-cost-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="rental-cost-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat kost het schoonmaken van een huurwoning?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('De prijs hangt af van de oppervlakte, de staat van de woning en de afgesproken werkzaamheden. Ook maakt het verschil of de woning leeg of gemeubileerd is. Foto’s van de keuken, badkamer en overige ruimtes helpen bij het beoordelen van uw aanvraag.') }}</p>
                </div>
                <img src="https://images.openai.com/static-rsc-4/P-UkFe89ghyAeBAtGul4Ck3u5Sbkq4Tar0_hHIisHWIb7qnVbuXudQueT4V74gLGHi-c4j0dq0jGbqozzrksHvTZt_aWV8f3Pb50p1GifxcPnR8EKEtbMZntdOnf_pzA5jfn6nq_w9rjAkY4--oTDT2z5A51cK5VEPJqXcsSrfE?purpose=inline" alt="{{ __('Een verzorgd interieur van een huurwoning') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Samen bekijken wat past') }}</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wanneer moet uw huurwoning schoon zijn?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Stuur ons de locatie, de gewenste datum en enkele foto’s. We kunnen vaak binnen 48 uur na akkoord beginnen en bevestigen de startdatum vooraf.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'verhuurders']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

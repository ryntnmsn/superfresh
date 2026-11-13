@extends('layouts.site')

@section('title', __('Home'))
@section('meta_description', 'Schoonmaak voor kantoren, scholen, huurwoningen, short-stay accommodaties en vastgoed in Den Haag en omgeving. Vraag een offerte aan bij Superfresh.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Home page') }}">
        <section class="bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-home-hero.jpg') }}'); background-position: center; background-size: cover">
            <div class="mx-auto flex max-w-7xl items-center px-6 py-24 sm:py-28 lg:px-8 lg:py-32">
                <div class="max-w-2xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Superfresh · Professionele schoonmaak') }}</p>
                    <h1 class="font-heading mt-3 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Schoonmaakbedrijf in Den Haag en omgeving') }}</h1>
                    <p class="mt-4 max-w-xl text-lg leading-8 text-secondary-text/75">{{ __('Voor uw kantoor, school of verhuurpand: wij regelen de schoonmaak. Eenmalig of op vaste momenten, met duidelijke afspraken over het werk en de planning.') }}</p>
                    <div class="mt-5 max-w-xl rounded-md border border-brand/10 bg-white/80 px-4 py-3">
                        <h2 class="font-heading text-lg font-bold text-brand">{{ __('Vaak binnen 48 uur starten') }}</h2>
                        <p class="mt-1 text-sm leading-6 text-secondary-text/75">{{ __('We hebben schoonmakers beschikbaar en kunnen vaak binnen 48 uur na akkoord beginnen. De startdatum spreken we vooraf met u af.') }}</p>
                    </div>
                    <div class="mt-5 flex flex-wrap items-center gap-3">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center justify-center rounded border border-brand/20 bg-white px-4 py-2.5 text-sm text-brand transition hover:bg-secondary-surface focus:outline-none focus:ring-4 focus:ring-brand-bright/30">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="diensten" aria-labelledby="services-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-16">
                <div class="mx-auto mb-10 max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Onze schoonmaakdiensten') }}</p>
                    <h2 id="services-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat wilt u laten schoonmaken?') }}</h2>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-6">
                    <a href="{{ route('kantoorschoonmaak') }}" class="group flex h-full flex-col overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/GeQnPAFItM0zaQiSRH17oEes5tUYn4p8dllmbH3W1zq18dybbrRZk13hZjg50YV1d1OXRHKhsV_aOhX71OfzsAL39juNxvdhbhGHcyca3aGR9_6PxmcHXxSpcpH6Oloz5-_1U5AKzNhYq8sHht9VA2xVPz7MfIo3n_bBtkxzFBs?purpose=inline" alt="{{ __('Professionele kantoorinrichting') }}" class="h-52 w-full object-cover">
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">{{ __('Kantoorschoonmaak') }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-6 text-secondary-text/75">{{ __('Van werkplekken en vergaderruimtes tot keuken en sanitair. Wij maken uw kantoor schoon op de afgesproken momenten.') }}</p>
                            <span class="font-subheading mt-5 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Meer over kantoorschoonmaak') }}</span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-scholen') }}" class="group flex h-full flex-col overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/HTXjbWQY6kt6KxeRyFuNjC-2w4Fbx8ASrVwBeer8Vq2Rwjpg8ZcSFbm1Ex9FRWGKo73_zJv7agJ7tS0ro3KiIuuBuwrIwpXDoNhXnKxLk45jHjix3ruBSNZAF3qe-jc6_2NdHrrTGUImNEl8HDYoe0btPKbCUMWWH4E_EQ4uw9o?purpose=inline" alt="{{ __('Een klaslokaal in een school') }}" class="h-52 w-full object-cover">
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">{{ __('Schoonmaak voor scholen') }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-6 text-secondary-text/75">{{ __('Schoonmaak van klaslokalen, gangen en sanitair, met een planning die rekening houdt met het lesrooster en het gebruik van uw schoolgebouw.') }}</p>
                            <span class="font-subheading mt-5 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Meer over schoolschoonmaak') }}</span>
                        </div>
                    </a>

                    <a href="{{ route('airbnb-schoonmaak') }}" class="group flex h-full flex-col overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/ytsQ0t3-9ylHV360WoAuEvjKuu0OgqIchLIJ_0rCrMknXuLECFoOIezQzSx2TFxol5s-05vicECxAtROAdWthWAD-5vZ4El65Z6Ob7nCyFanCMI-pLPr_ImewdMPwRLiVEsh4_ovX7B7UnoD1tb1dsgqufYrIb_tMjH-kvKof0g?purpose=inline" alt="{{ __('Een uitnodigende vakantiewoning') }}" class="h-52 w-full object-cover">
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">{{ __('Airbnb & short-stay schoonmaak') }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-6 text-secondary-text/75">{{ __('Schoonmaak tussen twee verblijven, zodat u de volgende gasten in een schoon verblijf ontvangt. We stemmen de planning af op uw wisseltijden.') }}</p>
                            <span class="font-subheading mt-5 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Meer over Airbnb-schoonmaak') }}</span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-huurwoningen') }}" class="group flex h-full flex-col overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2 xl:col-start-2">
                        <img src="https://images.openai.com/static-rsc-4/xfyJB2AhnwD18ySc5nMAVTJWGC-xatucKxBn5h-6d4z-aeFt8Qk7zNMCOs3_vjiXtE_zgd46NSCjYKrulo9QSou9CKYwmVqwOfDgFRdlh9Q9UNUZQ-PioLr6hUiKxcfCCTI6BeX6-kAzTK646KaaK_DDJ2ysA8McwsBu0fGPryU?purpose=inline" alt="{{ __('Een modern appartementencomplex') }}" class="h-52 w-full object-cover">
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">{{ __('Schoonmaak voor verhuurders') }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-6 text-secondary-text/75">{{ __('Een huurder vertrokken? Wij maken uw huurwoning schoon voordat de volgende bewoner intrekt, met aandacht voor keuken, badkamer en de overige kamers.') }}</p>
                            <span class="font-subheading mt-5 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Meer over schoonmaak voor verhuurders') }}</span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-vastgoed') }}" class="group flex h-full flex-col overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2 xl:col-start-4">
                        <img src="https://images.openai.com/static-rsc-4/6HjMxGtTB6ogHgKeE6UML2ubmNY-kdxbg7w-O6VIjkWq08pHsg5wqZH7DYAUbgiy9SuS2IxpthHf8JfbzRE9_EOxnAHvZXSFyo-7013r7fsOvOce4RJiSPVnjz8gVy6D-5oowYv4mCPd58CiSHPmiil9abnnMVLxmvi-fchrQqg?purpose=inline" alt="{{ __('Een ingericht interieur voor vastgoedpresentatie') }}" class="h-52 w-full object-cover">
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">{{ __('Schoonmaak voor vastgoedprofessionals') }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-6 text-secondary-text/75">{{ __('Een schoon pand voor fotografie, bezichtiging of sleuteloverdracht. Voor makelaars en vastgoedbeheerders met één locatie of meerdere panden.') }}</p>
                            <span class="font-subheading mt-5 inline-flex items-center text-sm text-brand group-hover:underline">{{ __('Meer over vastgoedschoonmaak') }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="waarom-superfresh" aria-labelledby="why-superfresh-heading" class="bg-cover bg-center text-white" style="background-image: url('{{ asset('images/superfresh-section-bg.jpg') }}')">
            <div class="mx-auto grid max-w-7xl items-stretch gap-12 px-6 py-14 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-20">
                <div>
                    <p class="font-subheading text-sm text-white/80">{{ __('Waarom Superfresh?') }}</p>
                    <h2 id="why-superfresh-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">{{ __('Schoonmaak nodig? Wij kunnen snel starten.') }}</h2>
                    <div class="mt-6 space-y-4 text-base leading-7 text-white/80 sm:text-lg sm:leading-8">
                        <p>{{ __('Zoekt u een schoonmaakbedrijf voor uw kantoor, school of verhuurpand? We hebben schoonmakers beschikbaar in Den Haag en omgeving.') }}</p>
                        <p>{{ __('Vaak kunnen we binnen 48 uur na akkoord beginnen. Vooraf spreken we af wat we schoonmaken, hoe vaak en wanneer we starten.') }}</p>
                    </div>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>{{ __('Vaak starten binnen 48 uur na akkoord.') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>{{ __('Schoonmakers beschikbaar voor nieuwe opdrachten.') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>{{ __('Voor eenmalige en terugkerende schoonmaak.') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>{{ __('Actief in Den Haag en omgeving.') }}</span>
                        </li>
                    </ul>
                    <div class="mt-8 flex flex-col items-start gap-4 sm:flex-row sm:items-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-white underline decoration-white/50 underline-offset-4 hover:decoration-white">{{ __('Liever direct overleggen? Bel ons') }}</a>
                    </div>
                </div>
                <div class="grid min-h-[360px] grid-cols-2 grid-rows-2 gap-3 overflow-hidden rounded-2xl lg:h-full">
                    <img src="https://images.openai.com/static-rsc-4/UW86ErY3PpVvO3wIO1WBQ_UrP3NlZhP0mzsd50KYijs6UKtZf9G5odJfSoCtmuzkB2gAvlL1fqT-25vG8DrbMoALYZup8QxkIzqXl9qE4cjRwrDriBB-6oUD0CtAXrpyzZ12cxXwWJ7xhTSMxRlH6x2AEfWYy2tXUZqYPkwN5xs?purpose=inline" alt="{{ __('Professionele schoonmaak van een kantoorruimte') }}" class="col-span-1 row-span-2 h-full w-full rounded-2xl object-cover">
                    <img src="https://images.openai.com/static-rsc-4/lg4hsWQ1X6p4kGZfaYBTceQ4pojmV7jOjhLkTxGQ06WSXBjKqAn9buvBxor0GpELcbAkKqN5nDn1Bx86O4BB2lg4gjtfY2-_lX3q41NiJIjUcH4uYRMGfwLdjbl5uSEanYNBd0Mv_xzjx7d_EcgajOio-DFr3RFtLfRjt72W3Lw?purpose=inline" alt="{{ __('Schoonmaakwerkzaamheden in een professionele omgeving') }}" class="h-full w-full rounded-2xl object-cover">
                    <img src="https://images.openai.com/static-rsc-4/P-UkFe89ghyAeBAtGul4Ck3u5Sbkq4Tar0_hHIisHWIb7qnVbuXudQueT4V74gLGHi-c4j0dq0jGbqozzrksHvTZt_aWV8f3Pb50p1GifxcPnR8EKEtbMZntdOnf_pzA5jfn6nq_w9rjAkY4--oTDT2z5A51cK5VEPJqXcsSrfE?purpose=inline" alt="{{ __('Een professionele schoonmaak na verhuizing') }}" class="h-full w-full rounded-2xl object-cover">
                </div>
            </div>
        </section>

        <section id="werkgebied" aria-labelledby="service-area-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-14 text-center lg:px-8 lg:py-20">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Werkgebied') }}</p>
                    <h2 id="service-area-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Schoonmaak in Den Haag en omgeving') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('We maken kantoren, scholen en verhuurpanden schoon in Den Haag en omliggende steden. Ook voor Airbnb- en short-stay schoonmaak kunt u bij ons terecht.') }}</p>
                </div>

                <ul class="mx-auto mt-8 grid max-w-4xl grid-cols-2 gap-3 text-sm text-secondary-text/75 sm:grid-cols-3 lg:grid-cols-5">
                    @foreach (['Den Haag', 'Rotterdam', 'Leiden', 'Delft', 'Rijswijk'] as $location)
                        <li class="rounded-md border border-brand/10 bg-white/75 px-4 py-3 font-semibold">{{ $location }}</li>
                    @endforeach
                </ul>

                <p class="mt-8 text-base leading-7 text-secondary-text/75">{{ __('Staat uw plaats er niet bij? Neem contact met ons op om uw locatie te bespreken.') }}</p>
                <a href="{{ route('werkgebied') }}" class="font-subheading mt-4 inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bekijk ons werkgebied') }}</a>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-24">
                <div class="mx-auto max-w-3xl">
                    <h2 id="contact-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Schoonmaak nodig? We kunnen snel starten.') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('We hebben schoonmakers beschikbaar en kunnen vaak binnen 48 uur na akkoord beginnen. Vertel ons wat er schoongemaakt moet worden en wanneer. U ontvangt een offerte en we spreken de startdatum met u af.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-3">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center justify-center rounded border border-brand/20 bg-white px-4 py-2.5 text-sm text-brand transition hover:bg-secondary-surface focus:outline-none focus:ring-4 focus:ring-brand-bright/30">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

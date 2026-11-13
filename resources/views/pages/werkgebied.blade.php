@extends('layouts.site')

@section('title', __('Werkgebied'))
@section('seo_title', 'Werkgebied schoonmaak: Den Haag en omgeving | Superfresh')
@section('meta_description', 'Superfresh maakt kantoren, scholen en verhuurpanden schoon in Den Haag, Rotterdam, Leiden, Delft en Rijswijk. Vraag naar de planning voor uw locatie.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Werkgebied') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-werkgebied-hero.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Werkgebied') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Schoonmaak in Den Haag en omgeving') }}</h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-secondary-text/80">{{ __('Superfresh maakt kantoren, scholen, huurwoningen en vakantieverblijven schoon in Den Haag, Rotterdam, Leiden, Delft en Rijswijk.') }}</p>

                    <div class="mt-6 max-w-2xl rounded-md border border-brand/10 bg-white/80 px-4 py-3">
                        <h2 class="font-heading text-lg font-bold text-brand">{{ __('Vaak binnen 48 uur starten') }}</h2>
                        <p class="mt-1 text-sm leading-6 text-secondary-text/75">{{ __('We hebben schoonmakers beschikbaar. Na akkoord kunnen we vaak binnen 48 uur beginnen. De startdatum spreken we vooraf met u af.') }}</p>
                    </div>

                    <div class="mt-6 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="locations-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-14 text-center lg:px-8 lg:py-20">
                <div class="mx-auto max-w-3xl">
                    <h2 id="locations-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('In deze plaatsen zijn we actief') }}</h2>
                    <p class="mt-5 text-lg leading-8 text-secondary-text/75">{{ __('U kunt bij ons terecht voor eenmalige schoonmaak en schoonmaak op vaste momenten.') }}</p>
                </div>

                <ul class="mx-auto mt-8 grid max-w-4xl grid-cols-2 gap-3 text-sm text-secondary-text/75 sm:grid-cols-3 lg:grid-cols-5">
                    @foreach (['Den Haag', 'Rotterdam', 'Leiden', 'Delft', 'Rijswijk'] as $location)
                        <li class="rounded-md border border-brand/10 bg-white/75 px-4 py-3 font-semibold">{{ $location }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-16 text-center lg:px-8 lg:py-20">
                <div class="mx-auto max-w-3xl">
                    <h2 id="contact-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Staat uw plaats er niet bij?') }}</h2>
                    <p class="mt-5 text-lg leading-8 text-secondary-text/75">{{ __('Geef uw postcode door en vertel wat u wilt laten schoonmaken. Dan laten we weten of we op uw locatie kunnen werken en wanneer we kunnen starten.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen') }}#postal_code">{{ __('Vraag naar uw locatie') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

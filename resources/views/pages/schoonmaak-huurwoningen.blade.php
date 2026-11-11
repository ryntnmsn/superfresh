@extends('layouts.site')

@section('title', 'Schoonmaak voor huurwoningen')

@section('content')
    <main class="flex-1" aria-label="Schoonmaak voor huurwoningen">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Schoonmaak voor verhuurders</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Professionele schoonmaak voor huurwoningen</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Een verzorgde huurwoning is belangrijk voor zowel verhuurders als huurders.</p>
                        <p>Superfresh richt zich op schoonmaakoplossingen voor verhuurders en vastgoedeigenaren in Den Haag en omgeving.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="rental-home-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Aandacht voor uw woning</p>
                    <h2 id="rental-home-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Uw huurwoning verzorgd houden</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>Huurwoningen worden intensief gebruikt en kunnen verschillende schoonmaakbehoeften hebben.</p>
                    <p>Een passende schoonmaakaanpak helpt om uw woning verzorgd te houden en klaar te maken voor een volgende bewoner wanneer dat nodig is.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="landlord-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Afgestemd op uw vastgoed</p>
                    <h2 id="landlord-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Voor particuliere en zakelijke verhuurders</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Of u nu één woning verhuurt of meerdere huurpanden beheert, we bespreken graag uw specifieke situatie.</p>
                </div>

                <div class="mx-auto mt-14 max-w-4xl rounded-md border border-brand/10 bg-white p-7 shadow-sm sm:p-10">
                    <h3 class="font-heading text-2xl font-extrabold text-brand">Denk bijvoorbeeld aan:</h3>
                    <ul class="mt-6 grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            'Schoonmaak van huurwoningen.',
                            'Schoonmaak bij wisseling van huurders.',
                            'Schoonmaak van gemeenschappelijke ruimtes.',
                            'Schoonmaak van verhuurpanden.',
                        ] as $service)
                            <li class="flex items-start gap-3 rounded-md bg-secondary-surface p-4 leading-7 text-secondary-text/80">
                                <span class="mt-2 size-2 shrink-0 rounded-full bg-brand-bright" aria-hidden="true"></span>
                                <span>{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-6 text-sm leading-6 text-secondary-text/65">De invulling en beschikbaarheid van werkzaamheden stemmen we met u af.</p>
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Samen bekijken wat past</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Interesse in onze dienstverlening?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Vertel ons meer over uw vastgoed en uw schoonmaakbehoeften.</p>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

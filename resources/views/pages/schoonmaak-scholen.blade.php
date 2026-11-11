@extends('layouts.site')

@section('title', 'Schoonmaak voor scholen')

@section('content')
    <main class="flex-1" aria-label="Schoonmaak voor scholen">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Schoonmaak voor scholen</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Een verzorgde leeromgeving begint met goede schoonmaak</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Een school is een omgeving waar dagelijks leerlingen, docenten en medewerkers samenkomen. Een schone en verzorgde omgeving is daarom belangrijk.</p>
                        <p>Superfresh richt zich op schoonmaakoplossingen voor scholen in Den Haag en omgeving.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="school-environment-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Een prettige leeromgeving</p>
                    <h2 id="school-environment-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Aandacht voor de schoolomgeving</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>Van klaslokalen tot gemeenschappelijke ruimtes: een schoolgebouw kent verschillende ruimtes met uiteenlopende gebruiksintensiteiten.</p>
                    <p>Een passende schoonmaakaanpak houdt rekening met de behoeften van uw school en de manier waarop het gebouw wordt gebruikt.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="education-cleaning-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Afgestemd op uw locatie</p>
                    <h2 id="education-cleaning-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Schoonmaak afgestemd op uw onderwijsinstelling</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Iedere onderwijsinstelling heeft andere wensen en organisatorische behoeften.</p>
                </div>

                <div class="mx-auto mt-14 max-w-4xl rounded-md border border-brand/10 bg-white p-7 shadow-sm sm:p-10">
                    <h3 class="font-heading text-2xl font-extrabold text-brand">We bespreken graag:</h3>
                    <ul class="mt-6 grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            'Het type schoolgebouw.',
                            'De omvang van de locatie.',
                            'De gewenste schoonmaakwerkzaamheden.',
                            'De gewenste frequentie.',
                            'Uw specifieke aandachtspunten.',
                        ] as $consideration)
                            <li class="flex items-start gap-3 rounded-md bg-secondary-surface p-4 leading-7 text-secondary-text/80">
                                <span class="mt-2 size-2 shrink-0 rounded-full bg-brand-bright" aria-hidden="true"></span>
                                <span>{{ $consideration }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Persoonlijke afstemming</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Samen kijken naar de mogelijkheden</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Bent u verantwoordelijk voor het beheer van een schoolgebouw en zoekt u een schoonmaakpartner?</p>
                        <p>Neem contact op met Superfresh om uw wensen te bespreken.</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Vraag een offerte aan</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

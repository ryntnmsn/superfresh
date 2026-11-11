@extends('layouts.site')

@section('title', 'Schoonmaakdiensten')

@section('content')
    <main class="flex-1" aria-label="Schoonmaakdiensten">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Schoonmaakdiensten</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Professionele schoonmaakdiensten voor bedrijven en vastgoed</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Van kantoren en scholen tot vakantiewoningen en huurpanden. Superfresh richt zich op schoonmaakoplossingen voor verschillende zakelijke omgevingen.</p>
                        <p>Ontdek onze diensten en bekijk welke oplossing bij uw organisatie of vastgoed past.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section id="diensten" aria-labelledby="services-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto mb-12 max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Voor iedere omgeving</p>
                    <h2 id="services-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Onze schoonmaakdiensten</h2>
                </div>

                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-6">
                    @foreach ([
                        ['Kantoorschoonmaak', 'Een nette en verzorgde kantoorruimte zorgt voor een professionele uitstraling voor medewerkers, klanten en bezoekers.'],
                        ['Schoonmaak voor scholen', 'Een verzorgde leeromgeving draagt bij aan een prettige omgeving voor leerlingen, docenten en medewerkers.'],
                        ['Airbnb & short-stay schoonmaak', 'Een schone accommodatie helpt bij het creëren van een positieve eerste indruk voor gasten.'],
                        ['Schoonmaak voor huurwoningen', 'Voor verhuurders die hun woningen verzorgd willen houden voor nieuwe en bestaande huurders.'],
                        ['Vastgoedschoonmaak', 'Voor makelaars en vastgoedbeheerders die waarde hechten aan een verzorgde presentatie van hun panden.'],
                    ] as [$title, $description])
                        <article class="rounded-md border border-brand/10 bg-white p-7 shadow-sm sm:p-8 lg:col-span-2 {{ $loop->iteration === 4 ? 'lg:col-start-2' : ($loop->last ? 'lg:col-start-4' : '') }}">
                            <span class="inline-flex size-11 items-center justify-center rounded-full bg-secondary-soft font-subheading text-sm text-brand" aria-hidden="true">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3 class="font-heading mt-5 text-xl font-extrabold text-brand">{{ $title }}</h3>
                            <p class="mt-3 leading-7 text-secondary-text/75">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Persoonlijk afgestemd</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Een oplossing die bij uw locatie past</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Geen enkele locatie is hetzelfde. Daarom begint een passende schoonmaakoplossing met inzicht in uw situatie.</p>
                        <p>Vertel ons welk type pand u beheert, welke werkzaamheden gewenst zijn en wat uw verwachtingen zijn.</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Vraag een vrijblijvende offerte aan</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

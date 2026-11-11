@extends('layouts.site')

@section('title', 'Schoonmaak voor vastgoedprofessionals')

@section('content')
    <main class="flex-1" aria-label="Schoonmaak voor vastgoedprofessionals">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Schoonmaak voor vastgoedprofessionals</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Professionele vastgoedschoonmaak voor makelaars en beheerders</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Een verzorgde vastgoedlocatie maakt een goede indruk op potentiële huurders, kopers en bezoekers.</p>
                        <p>Superfresh biedt schoonmaakoplossingen gericht op makelaars en vastgoedbeheerders in Den Haag en omgeving.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="property-presentation-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Een verzorgde indruk</p>
                    <h2 id="property-presentation-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Een verzorgde presentatie van uw vastgoed</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>De uitstraling van een pand speelt een belangrijke rol bij de presentatie en het beheer ervan.</p>
                    <p>Of het nu gaat om verhuurpanden, woningen of zakelijke vastgoedlocaties: een passende schoonmaakaanpak helpt uw vastgoed verzorgd te houden.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="property-audience-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Voor professionals in vastgoed</p>
                    <h2 id="property-audience-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Voor wie werken wij?</h2>
                </div>

                <ul class="mx-auto mt-10 grid max-w-5xl gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        'Makelaars.',
                        'Vastgoedbeheerders.',
                        'Vastgoedeigenaren.',
                        'Beheerders van verhuurportefeuilles.',
                        'Professionele vastgoedorganisaties.',
                    ] as $audience)
                        <li class="flex items-start gap-3 rounded-md border border-brand/10 bg-white p-5 leading-7 text-secondary-text/80 shadow-sm">
                            <span class="mt-2 size-2 shrink-0 rounded-full bg-brand-bright" aria-hidden="true"></span>
                            <span>{{ $audience }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Persoonlijke afstemming</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Uw vastgoed, onze aandacht</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Iedere vastgoedportefeuille is anders. Daarom bespreken we graag de omvang van uw portefeuille, het type panden en uw gewenste werkzaamheden.</p>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="mailto:service@super-fresh.com">Bespreek uw wensen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

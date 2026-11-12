@extends('layouts.site')

@section('title', 'Werkgebied')

@section('content')
    <main class="flex-1" aria-label="Werkgebied">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Werkgebied</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Professionele schoonmaak in Den Haag en omgeving</h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-secondary-text/80">Superfresh richt zich op zakelijke schoonmaakdiensten voor bedrijven en vastgoedprofessionals in Den Haag en omliggende steden.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="regions-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto mb-12 max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Lokaal en regionaal</p>
                    <h2 id="regions-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Onze regio's</h2>
                </div>

                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-6">
                    @foreach ([
                        ['Den Haag', 'Onze belangrijkste regio voor zakelijke schoonmaak en vastgoedgerelateerde dienstverlening.'],
                        ['Rotterdam', 'Schoonmaakoplossingen voor bedrijven en vastgoedprofessionals in Rotterdam.'],
                        ['Leiden', 'Ondersteuning voor zakelijke locaties en vastgoed in Leiden.'],
                        ['Delft', 'Schoonmaakoplossingen voor bedrijven, scholen en vastgoedlocaties in Delft.'],
                        ['Rijswijk', 'Professionele schoonmaak voor zakelijke en vastgoedgerelateerde locaties in Rijswijk.'],
                    ] as [$city, $description])
                        <article class="rounded-md border border-brand/10 bg-white p-7 text-center shadow-sm sm:p-8 lg:col-span-2 {{ $loop->iteration === 4 ? 'lg:col-start-2' : ($loop->last ? 'lg:col-start-4' : '') }}">
                            <span class="inline-flex size-11 items-center justify-center rounded-full bg-secondary-soft text-brand" aria-hidden="true">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z" />
                                    <circle cx="12" cy="10" r="2.5" />
                                </svg>
                            </span>
                            <h3 class="font-heading mt-5 text-xl font-extrabold text-brand">{{ $city }}</h3>
                            <p class="mt-3 leading-7 text-secondary-text/75">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Ook buiten de regio?</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Staat uw locatie er niet tussen?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Neem gerust contact met ons op. We bespreken graag of uw locatie binnen ons werkgebied valt.</p>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('contact') }}">Neem contact op</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

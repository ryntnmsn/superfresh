@extends('layouts.site')

@section('title', 'Kantoorschoonmaak')

@section('content')
    <main class="flex-1" aria-label="Kantoorschoonmaak">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Kantoorschoonmaak</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Professionele kantoorschoonmaak voor een verzorgde werkomgeving</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Een schoon kantoor maakt een professionele indruk op medewerkers, klanten en bezoekers.</p>
                        <p>Superfresh richt zich op kantoorschoonmaak voor bedrijven in Den Haag en omgeving.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="office-care-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Een prettige werkplek</p>
                    <h2 id="office-care-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Een kantoor dat er verzorgd uitziet</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>Een kantoor wordt dagelijks gebruikt. Werkplekken, vergaderruimtes en gemeenschappelijke ruimtes verdienen daarom aandacht.</p>
                    <p>Met een passende schoonmaakoplossing blijft uw kantoor een verzorgde omgeving waarin medewerkers en bezoekers zich prettig kunnen voelen.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="tailored-cleaning-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Aandacht voor uw werkomgeving</p>
                    <h2 id="tailored-cleaning-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Kantoorschoonmaak afgestemd op uw bedrijf</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Ieder bedrijf heeft een eigen werkomgeving en schoonmaakbehoefte.</p>
                        <p>Of u nu een kleinere kantoorruimte beheert of verantwoordelijk bent voor een groter bedrijfspand, we bespreken graag uw wensen en de mogelijkheden.</p>
                    </div>
                </div>

                <div class="mx-auto mt-14 max-w-4xl rounded-md border border-brand/10 bg-white p-7 shadow-sm sm:p-10">
                    <h3 class="font-heading text-2xl font-extrabold text-brand">Voor welke bedrijven?</h3>
                    <p class="mt-3 text-secondary-text/75">Onze kantoorschoonmaak is gericht op:</p>
                    <ul class="mt-6 grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            'Kleine en middelgrote bedrijven.',
                            'Grotere kantooromgevingen.',
                            'Zakelijke panden.',
                            'Organisaties met meerdere werkruimtes.',
                        ] as $audience)
                            <li class="flex items-start gap-3 rounded-md bg-secondary-surface p-4 leading-7 text-secondary-text/80">
                                <span class="mt-2 size-2 shrink-0 rounded-full bg-brand-bright" aria-hidden="true"></span>
                                <span>{{ $audience }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Samen bekijken wat past</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Interesse in kantoorschoonmaak?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Vertel ons meer over uw kantoor en uw wensen. We bekijken graag welke schoonmaakoplossing passend is.</p>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

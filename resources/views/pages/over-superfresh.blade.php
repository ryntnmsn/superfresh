@extends('layouts.site')

@section('title', 'Over Superfresh')

@section('content')
    <main class="flex-1" aria-label="Over Superfresh">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Over Superfresh</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Maak kennis met Superfresh</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Superfresh richt zich op professionele schoonmaakdiensten voor bedrijven, scholen en vastgoedprofessionals in Den Haag en omgeving.</p>
                        <p>Wij begrijpen dat iedere organisatie en iedere locatie andere schoonmaakbehoeften heeft.</p>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="approach-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Persoonlijk en passend</p>
                    <h2 id="approach-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Onze aanpak</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>Een goede schoonmaakoplossing begint met luisteren naar uw wensen en begrijpen wat uw locatie nodig heeft.</p>
                    <p>Daarom staat uw situatie centraal bij het bespreken van een passende dienstverlening.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="audience-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Zakelijke schoonmaak</p>
                    <h2 id="audience-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Voor wie werken wij?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Wij richten ons op verschillende zakelijke doelgroepen:</p>
                </div>

                <ul class="mx-auto mt-10 grid max-w-5xl gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        'Kantoren en bedrijven.',
                        'Scholen en onderwijsinstellingen.',
                        'Airbnb-verhuurders en short-stay exploitanten.',
                        'Verhuurders en vastgoedeigenaren.',
                        'Makelaars en vastgoedbeheerders.',
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
                    <p class="font-subheading text-sm text-brand/75">We maken graag kennis</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Samenwerken met Superfresh?</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Bent u op zoek naar een schoonmaakpartner voor uw bedrijf of vastgoed?</p>
                        <p>We maken graag kennis met u.</p>
                    </div>
                    <div class="mt-8 flex flex-wrap justify-center gap-3">
                        <x-site.button href="{{ route('kennismaking-plannen') }}">Kennismaking plannen</x-site.button>
                        <x-site.button href="{{ route('offerte-aanvragen') }}" variant="secondary">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

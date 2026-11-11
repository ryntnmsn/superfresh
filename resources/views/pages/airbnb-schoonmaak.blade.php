@extends('layouts.site')

@section('title', 'Airbnb & short-stay schoonmaak')

@section('content')
    <main class="flex-1" aria-label="Airbnb en short-stay schoonmaak">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Airbnb &amp; short-stay schoonmaak</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Een verzorgde accommodatie voor iedere gast</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Bij het ontvangen van gasten is de uitstraling van uw accommodatie belangrijk. Een nette en schone omgeving draagt bij aan een prettige aankomst en een positieve eerste indruk.</p>
                        <p>Superfresh richt zich op schoonmaak voor Airbnb-verhuurders en short-stay accommodaties in Den Haag en omgeving.</p>
                    </div>
                    <div class="mt-8">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="rental-cleaning-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-brand/75">Voor een goede ontvangst</p>
                    <h2 id="rental-cleaning-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Schoonmaak voor verhuuraccommodaties</h2>
                </div>
                <div class="space-y-4 text-lg leading-8 text-secondary-text/75">
                    <p>Vakantieverblijven en short-stay accommodaties worden regelmatig door verschillende gasten gebruikt.</p>
                    <p>Daarom is het belangrijk om aandacht te besteden aan de staat en presentatie van uw accommodatie.</p>
                    <p>We bespreken graag welke schoonmaakwerkzaamheden u nodig heeft en hoe deze kunnen aansluiten op uw verhuuractiviteiten.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="rental-audience-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Voor verhuurders en beheerders</p>
                    <h2 id="rental-audience-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Voor wie?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Onze dienstverlening richt zich onder andere op:</p>
                </div>

                <ul class="mx-auto mt-10 grid max-w-4xl gap-4 sm:grid-cols-2">
                    @foreach ([
                        'Airbnb-verhuurders.',
                        'Eigenaren van short-stay accommodaties.',
                        'Beheerders van vakantieverblijven.',
                        'Exploitanten van tijdelijke verhuurwoningen.',
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
                    <p class="font-subheading text-sm text-brand/75">Persoonlijk afgestemd</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Een passende oplossing voor uw accommodatie</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Elke accommodatie heeft een andere indeling, omvang en gebruiksfrequentie.</p>
                        <p>Vertel ons meer over uw accommodatie en uw wensen. Samen bekijken we de mogelijkheden.</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

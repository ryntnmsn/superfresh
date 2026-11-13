@extends('layouts.site')

@section('title', __('Schoonmaak voor scholen'))
@section('seo_title', 'Schoonmaak scholen Den Haag | Superfresh')
@section('overview_excerpt', 'Schoonmaak van klaslokalen, gangen en sanitair, met een planning die rekening houdt met het lesrooster en het gebruik van uw schoolgebouw.')
@section('meta_description', 'Schoonmaak voor scholen in Den Haag en omgeving. Vaak starten binnen 48 uur na akkoord. Vraag een offerte aan voor uw schoolgebouw.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Schoonmaak voor scholen') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Schoonmaak voor scholen') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Schoonmaak voor scholen in Den Haag en omgeving') }}</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>{{ __('Klaslokalen, gangen en toiletten worden elke schooldag intensief gebruikt. Superfresh verzorgt de schoonmaak van schoolgebouwen in Den Haag en omgeving.') }}</p>
                        <p>{{ __('Zoekt u een schoonmaakbedrijf voor uw school? We hebben mensen beschikbaar voor nieuwe opdrachten. Voor de start maken we afspraken over de werkzaamheden, toegang tot het gebouw en schoonmaakmomenten rond het lesrooster.') }}</p>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'scholen']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Snel starten? Bel ons') }}</a>
                    </div>
                    <x-site.availability />
                </div>
            </div>
        </section>

        <section aria-labelledby="classroom-cleaning-heading" class="bg-white">
            <div class="mx-auto max-w-5xl px-6 py-20 lg:px-8 lg:py-28">
                <h2 id="classroom-cleaning-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Van klaslokaal tot lerarenkamer') }}</h2>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Zand bij de ingang, kruimels onder de tafels en drukbezochte toiletten: elke ruimte heeft andere aandacht nodig. We stemmen de schoonmaak af op het dagelijkse gebruik van uw schoolgebouw.') }}</p>
                <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Het schoonmaakprogramma kan bestaan uit:') }}</p>
                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        'Vloeren in lokalen en gangen reinigen.',
                        'Bereikbare tafels en werkoppervlakken afnemen.',
                        'Toiletten en wastafels schoonmaken.',
                        'De lerarenkamer en personeelskeuken reinigen.',
                        'Afvalbakken legen.',
                        'De entree en gemeenschappelijke ruimtes schoonhouden.',
                    ] as $task)
                        <li class="flex items-start gap-3 rounded-lg border border-brand/10 bg-white p-4 text-sm leading-6 text-secondary-text/75 shadow-sm">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-5 shrink-0 rounded-full object-contain">
                            <span>{{ __($task) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section aria-labelledby="school-plan-heading" class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="school-plan-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Een duidelijke planning voor uw school') }}</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>{{ __('We bespreken welke ruimtes bij iedere schoonmaakbeurt aan bod komen en welke werkzaamheden periodiek nodig zijn.') }}</p>
                        <p>{{ __('Daarnaast maken we afspraken over de schoonmaaktijden, schoolvakanties en de contactpersoon binnen uw organisatie. Heeft uw school specifieke aandachtspunten? Geef die vooraf door, zodat we ze kunnen meenemen in de offerte.') }}</p>
                    </div>
                </div>
                <img src="https://images.openai.com/static-rsc-4/HTXjbWQY6kt6KxeRyFuNjC-2w4Fbx8ASrVwBeer8Vq2Rwjpg8ZcSFbm1Ex9FRWGKo73_zJv7agJ7tS0ro3KiIuuBuwrIwpXDoNhXnKxLk45jHjix3ruBSNZAF3qe-jc6_2NdHrrTGUImNEl8HDYoe0btPKbCUMWWH4E_EQ4uw9o?purpose=inline" alt="{{ __('Een klaslokaal in een schoolgebouw') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section aria-labelledby="school-cost-heading" class="bg-white">
            <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <h2 id="school-cost-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Wat bepaalt de kosten van schoolschoonmaak?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('De kosten hangen onder meer af van de omvang van het gebouw, het aantal gebruikers en de schoonmaakfrequentie. Stuur ons de locatie, de geschatte oppervlakte en de werkzaamheden die u wilt uitbesteden. Daarmee kunnen we een gericht voorstel maken.') }}</p>
                </div>
                <img src="https://images.openai.com/static-rsc-4/UW86ErY3PpVvO3wIO1WBQ_UrP3NlZhP0mzsd50KYijs6UKtZf9G5odJfSoCtmuzkB2gAvlL1fqT-25vG8DrbMoALYZup8QxkIzqXl9qE4cjRwrDriBB-6oUD0CtAXrpyzZ12cxXwWJ7xhTSMxRlH6x2AEfWYy2tXUZqYPkwN5xs?purpose=inline" alt="{{ __('Een schone gemeenschappelijke ruimte') }}" class="aspect-[4/3] w-full rounded-xl object-cover shadow-sm">
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">{{ __('Persoonlijke afstemming') }}</p>
                    <h2 id="contact-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">{{ __('Schoonmaak nodig voor uw schoolgebouw?') }}</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">{{ __('Vertel ons welke schoonmaak u nodig heeft en wanneer u wilt beginnen. We kunnen vaak binnen 48 uur na akkoord starten, zodra de planning en toegang tot het gebouw zijn geregeld.') }}</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <x-site.button href="{{ route('offerte-aanvragen', ['service' => 'scholen']) }}">{{ __('Vraag een offerte aan') }}</x-site.button>
                        <a href="tel:+31705680983" class="font-subheading inline-flex items-center text-sm text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Bel ons voor de planning') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@extends('layouts.site')

@section('title', 'Veelgestelde vragen')

@section('content')
    <main class="flex-1" aria-label="Veelgestelde vragen">
        <section class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center" style="margin-bottom:40px">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Veelgestelde vragen</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">Veelgestelde vragen over Superfresh</h1>
                </div>

                <div class="mx-auto mt-16 max-w-4xl space-y-4">
                    @foreach ([
                        'In welke regio\'s is Superfresh actief?' => 'Superfresh richt zich op Den Haag, Rotterdam, Leiden, Delft en Rijswijk.',
                        'Voor welke klanten werkt Superfresh?' => 'Superfresh richt zich op kantoren, scholen, Airbnb-verhuurders, short-stay exploitanten, verhuurders, vastgoedeigenaren, makelaars en vastgoedbeheerders.',
                        'Hoe kan ik een offerte aanvragen?' => 'U kunt via het offerteformulier op onze website uw gegevens en schoonmaakbehoeften doorgeven.',
                        'Kan ik een kennismakingsgesprek plannen?' => 'Ja. Via de pagina \'Kennismaking plannen\' kunt u een aanvraag indienen.',
                        'Biedt Superfresh schoonmaak op maat?' => 'Superfresh bespreekt graag uw locatie en wensen om te bekijken welke schoonmaakoplossing passend is.',
                        'Hoe vaak kan er worden schoongemaakt?' => 'De gewenste frequentie kunt u tijdens uw offerteaanvraag aangeven. De mogelijkheden worden vervolgens met u besproken.',
                        'Kan ik schoonmaak aanvragen voor meerdere panden?' => 'U kunt uw situatie en het aantal locaties vermelden in uw offerteaanvraag. Superfresh kan vervolgens de mogelijkheden bespreken.',
                        'Is mijn locatie buiten het werkgebied ook mogelijk?' => 'Neem contact met ons op om te bespreken of dienstverlening op uw locatie mogelijk is.',
                    ] as $question => $answer)
                        <details class="faq-accordion group rounded-md border border-brand/10 bg-white shadow-sm">
                            <summary class="font-heading flex cursor-pointer list-none items-center justify-between gap-6 p-6 text-left text-lg font-extrabold text-brand marker:hidden focus:outline-none focus-visible:ring-4 focus-visible:ring-inset focus-visible:ring-brand-bright/40 sm:p-8 sm:text-xl">
                                <span>{{ $question }}</span>
                                <span class="inline-flex size-8 shrink-0 items-center justify-center text-brand" aria-hidden="true">
                                    <svg class="size-4 transition-transform group-open:rotate-45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                        <path d="M12 5v14" />
                                        <path d="M5 12h14" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="border-t border-brand/10 px-6 py-5 sm:px-8 sm:py-6">
                                <p class="leading-7 text-secondary-text/75">{{ $answer }}</p>
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

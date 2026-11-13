@extends('layouts.site')

@section('title', __('Privacyverklaring'))
@section('seo_title', 'Privacyverklaring | Superfresh')
@section('meta_description', 'Lees hoe Superfresh persoonsgegevens gebruikt die u via de websiteformulieren deelt.')

@section('content')
    <main class="flex-1" aria-label="{{ __('Privacyverklaring') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:px-8 lg:py-24">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Privacy') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">{{ __('Privacyverklaring') }}</h1>
                    <p class="mt-5 text-lg leading-8 text-secondary-text/80">{{ __('Hier leest u hoe Superfresh omgaat met gegevens die u via onze websiteformulieren deelt.') }}</p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto flex max-w-4xl flex-col gap-12 px-6 py-16 lg:px-8 lg:py-20">
                <section aria-labelledby="privacy-controller-heading">
                    <h2 id="privacy-controller-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Wie verwerkt uw gegevens?') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('Superfresh verwerkt de gegevens die u zelf invult in het contact-, offerte- of kennismakingsformulier. U kunt ons bereiken via') }} <a href="mailto:service@super-fresh.nl" class="text-brand underline underline-offset-4">service@super-fresh.nl</a> {{ __('of telefonisch via') }} <a href="tel:+31705680983" class="text-brand underline underline-offset-4">+31(0) 70 568 0983</a>{{ __('. Ons adres is J.C. van Markenlaan 32, 2285 VL Rijswijk.') }}</p>
                </section>

                <section aria-labelledby="privacy-data-heading">
                    <h2 id="privacy-data-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Welke gegevens gebruiken we?') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('Afhankelijk van uw aanvraag gaat het om uw naam, bedrijfsnaam, e-mailadres, telefoonnummer, postcode en de informatie over de schoonmaak die u met ons deelt. Bij een offerteaanvraag kunt u ook foto’s meesturen.') }}</p>
                </section>

                <section aria-labelledby="privacy-purpose-heading">
                    <h2 id="privacy-purpose-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Waarvoor gebruiken we uw gegevens?') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('We gebruiken uw gegevens om uw bericht of aanvraag te behandelen, contact met u op te nemen en waar nodig een offerte of planning voor te bereiden. Contact- en offerteaanvragen worden opgeslagen in onze websiteadministratie en naar onze contactmailbox verzonden. Alleen medewerkers die de aanvraag afhandelen hebben toegang. Onze hosting- en e-maildienstverleners verwerken gegevens voor het bewaren en bezorgen van berichten.') }}</p>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('Voor offerte- en kennismakingsaanvragen gebruiken we uw gegevens om op uw verzoek stappen te zetten vóór een eventuele overeenkomst. Voor overige contactvragen gebruiken we ze om uw vraag te beantwoorden en onze zakelijke communicatie af te handelen.') }}</p>
                </section>

                <section aria-labelledby="privacy-retention-heading">
                    <h2 id="privacy-retention-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Hoe lang bewaren we uw gegevens?') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('We bewaren uw gegevens zolang dat nodig is om uw aanvraag af te handelen en eventuele vervolgafspraken te behandelen. Daarna verwijderen we ze wanneer ze niet meer nodig zijn, tenzij we gegevens langer moeten bewaren om aan een wettelijke verplichting te voldoen of een geschil af te handelen.') }}</p>
                </section>

                <section aria-labelledby="privacy-rights-heading">
                    <h2 id="privacy-rights-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Uw privacyrechten') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('U kunt ons vragen om uw persoonsgegevens in te zien, te corrigeren of te verwijderen. U kunt ook bezwaar maken tegen het gebruik van uw gegevens of vragen om de verwerking te beperken. Neem hiervoor contact op via') }} <a href="mailto:service@super-fresh.nl" class="text-brand underline underline-offset-4">service@super-fresh.nl</a>{{ __('. U kunt daarnaast een klacht indienen bij de Autoriteit Persoonsgegevens.') }}</p>
                </section>
            </div>
        </section>
    </main>
@endsection

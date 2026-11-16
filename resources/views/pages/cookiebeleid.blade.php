@extends('layouts.site')

@section('title', __('Cookiebeleid'))
@section('seo_title', __('Cookiebeleid') . ' | Superfresh')
@section('meta_description', __('Lees welke cookies en vergelijkbare technieken Superfresh gebruikt, waarvoor ze dienen en hoe u uw keuze kunt wijzigen.'))

@section('content')
    <main class="flex-1" aria-label="{{ __('Cookiebeleid') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-policy-page.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:px-8 lg:py-24">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Privacy') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl">{{ __('Cookiebeleid') }}</h1>
                    <p class="mt-5 text-lg leading-8 text-secondary-text/80">{{ __('In dit cookiebeleid leest u welke cookies en vergelijkbare technieken deze website gebruikt, waarvoor ze dienen en hoe u uw keuze kunt wijzigen.') }}</p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto flex max-w-4xl flex-col gap-10 px-6 py-16 lg:px-8 lg:py-20">
                <section aria-labelledby="cookie-controller-heading">
                    <h2 id="cookie-controller-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Wie is verantwoordelijk?') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('De website wordt beheerd door Caerus Tech B.V. U kunt vragen over dit cookiebeleid stellen via') }} <a href="mailto:service@super-fresh.nl" class="text-brand underline underline-offset-4">service@super-fresh.nl</a> {{ __('of telefonisch via') }} <a href="tel:+31705680983" class="text-brand underline underline-offset-4">+31(0) 70 568 0983</a>.</p>
                </section>

                <section aria-labelledby="cookie-types-heading">
                    <h2 id="cookie-types-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Welke cookies gebruiken we?') }}</h2>
                    <div class="mt-4 space-y-5 leading-7 text-secondary-text/75">
                        <div>
                            <h3 class="font-bold text-brand">{{ __('Noodzakelijke cookies') }}</h3>
                            <p class="mt-1">{{ __('De website gebruikt een sessiecookie voor onder meer de beveiliging van formulieren, de taalkeuze en het beheren van een ingelogde beheersessie. Deze cookie verloopt volgens de ingestelde sessieduur van de website; standaard is dat na maximaal 120 minuten inactiviteit.') }}</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand">{{ __('Cookie voor uw keuze') }}</h3>
                            <p class="mt-1">{{ __('De cookie sf_cookie_consent onthoudt of u analytische cookies hebt geaccepteerd of geweigerd. Deze keuze wordt één jaar bewaard, zodat de cookiebanner niet bij ieder bezoek opnieuw verschijnt.') }}</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand">{{ __('Voorkeur voor de nieuwsbriefpop-up') }}</h3>
                            <p class="mt-1">{{ __('We gebruiken sessionStorage in uw browser om te onthouden wanneer u de nieuwsbriefpop-up hebt gesloten. Deze voorkeur blijft bewaard zolang uw browsertab open is en voorkomt dat de pop-up op iedere pagina opnieuw verschijnt.') }}</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand">{{ __('Google Tag Manager en analyse') }}</h3>
                            <p class="mt-1">{{ __('Google Tag Manager wordt pas geladen nadat u op Accepteren hebt geklikt. De container kan analytische tags bevatten die bezoekinformatie verwerken of cookies plaatsen. De namen en bewaartermijnen daarvan hangen af van de tags die in de container zijn gepubliceerd. Als u weigert, laden we Google Tag Manager niet.') }}</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand">{{ __('Google reCAPTCHA') }}</h3>
                            <p class="mt-1">{{ __('Als reCAPTCHA voor de website is ingeschakeld, wordt de dienst van Google gebruikt om formulieren tegen geautomatiseerd misbruik te beschermen. De reCAPTCHA-code wordt door Google geladen wanneer deze functie is ingeschakeld. Google kan daarbij technische gegevens verwerken; raadpleeg het') }} <a href="https://policies.google.com/privacy" class="text-brand underline underline-offset-4" target="_blank" rel="noopener noreferrer">{{ __('privacybeleid van Google') }}</a> {{ __('voor meer informatie.') }}</p>
                        </div>
                    </div>
                </section>

                <section aria-labelledby="cookie-choice-heading">
                    <h2 id="cookie-choice-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Uw keuze wijzigen') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('U kunt uw keuze op elk moment aanpassen. Als u uw keuze wijzigt, wordt uw eerdere keuze vervangen. U kunt cookies ook via de instellingen van uw browser verwijderen; de website kan dan opnieuw om uw keuze vragen.') }}</p>
                    <button type="button" data-open-cookie-consent class="mt-5 rounded bg-brand px-4 py-2.5 text-sm font-bold text-white transition hover:bg-brand/90 focus:outline-none focus:ring-4 focus:ring-brand-bright/40">{{ __('Cookievoorkeuren wijzigen') }}</button>
                </section>

                <section aria-labelledby="cookie-more-heading">
                    <h2 id="cookie-more-heading" class="font-heading text-2xl font-extrabold text-brand">{{ __('Meer informatie') }}</h2>
                    <p class="mt-4 leading-7 text-secondary-text/75">{{ __('Lees in onze privacyverklaring hoe we omgaan met persoonsgegevens. Meer informatie over cookies vindt u bij de') }} <a href="https://autoriteitpersoonsgegevens.nl/nl/onderwerpen/internet-telefoon-tv-en-post/cookies" class="text-brand underline underline-offset-4" target="_blank" rel="noopener noreferrer">{{ __('Autoriteit Persoonsgegevens') }}</a>.</p>
                    <a href="{{ route('privacyverklaring') }}" class="mt-4 inline-flex text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('Privacyverklaring') }}</a>
                </section>
            </div>
        </section>
    </main>
@endsection

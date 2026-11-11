@extends('layouts.site')

@section('title', 'Home')

@section('content')
    <main class="flex-1" aria-label="Home page">
        <section class="min-h-[420px] bg-[#E5F5EB] bg-cover bg-center lg:min-h-[460px]" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}'); background-position: center; background-size: cover">
            <div class="mx-auto flex min-h-[420px] max-w-7xl items-center px-6 py-14 lg:min-h-[460px] lg:px-8 lg:py-16">
                <div class="max-w-2xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Professionele schoonmaak voor bedrijven</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Een frisse, schone omgeving begint bij Superfresh.</h1>
                    <div class="mt-6 max-w-xl space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Een schone werkomgeving draagt bij aan een prettige uitstraling en een professionele omgeving. Superfresh biedt schoonmaakoplossingen voor bedrijven, scholen en vastgoedprofessionals in Den Haag en omgeving.</p>
                        <p>Of het nu gaat om kantoren, scholen, vakantieverblijven of huurwoningen: ontdek wat Superfresh voor uw locatie kan betekenen.</p>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                        <x-site.button href="{{ route('kennismaking-plannen') }}" variant="secondary">Kennismaking plannen</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section id="introduction" aria-labelledby="introduction-heading" class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 id="introduction-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Schoonmaak op maat voor iedere omgeving</h2>
                    <div class="mt-6 space-y-4 text-lg leading-8 text-secondary-text/75">
                        <p>Iedere locatie heeft andere schoonmaakbehoeften. Een kantoor vraagt om een andere aanpak dan een school, vakantiewoning of huurpand.</p>
                        <p>Bij Superfresh staat uw situatie centraal. We kijken naar uw locatie, wensen en verwachtingen om samen te bekijken welke schoonmaakoplossing passend is.</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <x-site.button href="#diensten">Ontdek onze schoonmaakdiensten</x-site.button>
                    </div>
                </div>
            </div>
        </section>

        <section id="diensten" aria-labelledby="services-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="mx-auto mb-10 max-w-3xl text-center">
                    <p class="font-subheading text-sm text-brand/75">Dienstenoverzicht</p>
                    <h2 id="services-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Professionele schoonmaak voor verschillende sectoren</h2>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-6">
                    <a href="{{ route('kantoorschoonmaak') }}" class="group block overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/GeQnPAFItM0zaQiSRH17oEes5tUYn4p8dllmbH3W1zq18dybbrRZk13hZjg50YV1d1OXRHKhsV_aOhX71OfzsAL39juNxvdhbhGHcyca3aGR9_6PxmcHXxSpcpH6Oloz5-_1U5AKzNhYq8sHht9VA2xVPz7MfIo3n_bBtkxzFBs?purpose=inline" alt="Professionele kantoorinrichting" class="h-52 w-full object-cover">
                        <div class="p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">Kantoorschoonmaak</h3>
                            <p class="mt-3 text-sm leading-6 text-secondary-text/75">Een verzorgde kantooromgeving draagt bij aan een professionele uitstraling en een prettige werkplek.</p>
                            <span class="font-subheading mt-5 inline-flex text-sm text-brand group-hover:underline">Meer over kantoorschoonmaak <span aria-hidden="true" class="ml-1">→</span></span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-scholen') }}" class="group block overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/HTXjbWQY6kt6KxeRyFuNjC-2w4Fbx8ASrVwBeer8Vq2Rwjpg8ZcSFbm1Ex9FRWGKo73_zJv7agJ7tS0ro3KiIuuBuwrIwpXDoNhXnKxLk45jHjix3ruBSNZAF3qe-jc6_2NdHrrTGUImNEl8HDYoe0btPKbCUMWWH4E_EQ4uw9o?purpose=inline" alt="Een klaslokaal in een school" class="h-52 w-full object-cover">
                        <div class="p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">Schoonmaak voor scholen</h3>
                            <p class="mt-3 text-sm leading-6 text-secondary-text/75">Een schone en verzorgde leeromgeving is belangrijk voor leerlingen, medewerkers en bezoekers.</p>
                            <span class="font-subheading mt-5 inline-flex text-sm text-brand group-hover:underline">Meer over schoolschoonmaak <span aria-hidden="true" class="ml-1">→</span></span>
                        </div>
                    </a>

                    <a href="{{ route('airbnb-schoonmaak') }}" class="group block overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2">
                        <img src="https://images.openai.com/static-rsc-4/ytsQ0t3-9ylHV360WoAuEvjKuu0OgqIchLIJ_0rCrMknXuLECFoOIezQzSx2TFxol5s-05vicECxAtROAdWthWAD-5vZ4El65Z6Ob7nCyFanCMI-pLPr_ImewdMPwRLiVEsh4_ovX7B7UnoD1tb1dsgqufYrIb_tMjH-kvKof0g?purpose=inline" alt="Een uitnodigende vakantiewoning" class="h-52 w-full object-cover">
                        <div class="p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">Airbnb &amp; short-stay schoonmaak</h3>
                            <p class="mt-3 text-sm leading-6 text-secondary-text/75">Een nette en verzorgde accommodatie is belangrijk voor een goede eerste indruk bij gasten.</p>
                            <span class="font-subheading mt-5 inline-flex text-sm text-brand group-hover:underline">Meer over Airbnb-schoonmaak <span aria-hidden="true" class="ml-1">→</span></span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-huurwoningen') }}" class="group block overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2 xl:col-start-2">
                        <img src="https://images.openai.com/static-rsc-4/xfyJB2AhnwD18ySc5nMAVTJWGC-xatucKxBn5h-6d4z-aeFt8Qk7zNMCOs3_vjiXtE_zgd46NSCjYKrulo9QSou9CKYwmVqwOfDgFRdlh9Q9UNUZQ-PioLr6hUiKxcfCCTI6BeX6-kAzTK646KaaK_DDJ2ysA8McwsBu0fGPryU?purpose=inline" alt="Een modern appartementencomplex" class="h-52 w-full object-cover">
                        <div class="p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">Schoonmaak voor verhuurders</h3>
                            <p class="mt-3 text-sm leading-6 text-secondary-text/75">Houd uw huurwoningen verzorgd en aantrekkelijk voor huidige en toekomstige huurders.</p>
                            <span class="font-subheading mt-5 inline-flex text-sm text-brand group-hover:underline">Meer over schoonmaak voor verhuurders <span aria-hidden="true" class="ml-1">→</span></span>
                        </div>
                    </a>

                    <a href="{{ route('schoonmaak-vastgoed') }}" class="group block overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/40 xl:col-span-2 xl:col-start-4">
                        <img src="https://images.openai.com/static-rsc-4/6HjMxGtTB6ogHgKeE6UML2ubmNY-kdxbg7w-O6VIjkWq08pHsg5wqZH7DYAUbgiy9SuS2IxpthHf8JfbzRE9_EOxnAHvZXSFyo-7013r7fsOvOce4RJiSPVnjz8gVy6D-5oowYv4mCPd58CiSHPmiil9abnnMVLxmvi-fchrQqg?purpose=inline" alt="Een ingericht interieur voor vastgoedpresentatie" class="h-52 w-full object-cover">
                        <div class="p-6">
                            <h3 class="font-heading text-xl font-extrabold text-brand">Schoonmaak voor vastgoedprofessionals</h3>
                            <p class="mt-3 text-sm leading-6 text-secondary-text/75">Een verzorgde vastgoedpresentatie is belangrijk voor makelaars en vastgoedbeheerders.</p>
                            <span class="font-subheading mt-5 inline-flex text-sm text-brand group-hover:underline">Meer over vastgoedschoonmaak <span aria-hidden="true" class="ml-1">→</span></span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="waarom-superfresh" aria-labelledby="why-superfresh-heading" class="bg-cover bg-center text-white" style="background-image: url('{{ asset('images/superfresh-section-bg.jpg') }}')">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-28">
                <div>
                    <p class="font-subheading text-sm text-white/80">Waarom Superfresh?</p>
                    <h2 id="why-superfresh-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Een schoonmaakpartner die met u meedenkt</h2>
                    <div class="mt-6 space-y-4 text-base leading-7 text-white/80 sm:text-lg sm:leading-8">
                        <p>Een goede schoonmaakpartner begrijpt dat iedere locatie en organisatie andere behoeften heeft.</p>
                        <p>Superfresh richt zich op zakelijke klanten en vastgoedprofessionals die op zoek zijn naar een passende schoonmaakoplossing.</p>
                    </div>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>Oplossingen afgestemd op uw locatie.</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>Aandacht voor verschillende sectoren.</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>Gericht op zakelijke klanten en vastgoedprofessionals.</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/90">
                            <img src="{{ asset('images/check-icon.png') }}" alt="" aria-hidden="true" class="mt-0.5 size-6 shrink-0 rounded-full object-contain">
                            <span>Actief in Den Haag en omliggende steden.</span>
                        </li>
                    </ul>
                </div>
                <div class="grid aspect-[4/3] grid-cols-2 grid-rows-2 gap-3 overflow-hidden rounded-2xl">
                    <img src="https://images.openai.com/static-rsc-4/UW86ErY3PpVvO3wIO1WBQ_UrP3NlZhP0mzsd50KYijs6UKtZf9G5odJfSoCtmuzkB2gAvlL1fqT-25vG8DrbMoALYZup8QxkIzqXl9qE4cjRwrDriBB-6oUD0CtAXrpyzZ12cxXwWJ7xhTSMxRlH6x2AEfWYy2tXUZqYPkwN5xs?purpose=inline" alt="Professionele schoonmaak van een kantoorruimte" class="col-span-1 row-span-2 h-full w-full rounded-2xl object-cover">
                    <img src="https://images.openai.com/static-rsc-4/lg4hsWQ1X6p4kGZfaYBTceQ4pojmV7jOjhLkTxGQ06WSXBjKqAn9buvBxor0GpELcbAkKqN5nDn1Bx86O4BB2lg4gjtfY2-_lX3q41NiJIjUcH4uYRMGfwLdjbl5uSEanYNBd0Mv_xzjx7d_EcgajOio-DFr3RFtLfRjt72W3Lw?purpose=inline" alt="Schoonmaakwerkzaamheden in een professionele omgeving" class="h-full w-full rounded-2xl object-cover">
                    <img src="https://images.openai.com/static-rsc-4/P-UkFe89ghyAeBAtGul4Ck3u5Sbkq4Tar0_hHIisHWIb7qnVbuXudQueT4V74gLGHi-c4j0dq0jGbqozzrksHvTZt_aWV8f3Pb50p1GifxcPnR8EKEtbMZntdOnf_pzA5jfn6nq_w9rjAkY4--oTDT2z5A51cK5VEPJqXcsSrfE?purpose=inline" alt="Een professionele schoonmaak na verhuizing" class="h-full w-full rounded-2xl object-cover">
                </div>
            </div>
        </section>

        <section id="werkgebied" aria-labelledby="service-area-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-28">
                <div class="mx-auto max-w-3xl">
                    <p class="font-subheading text-sm text-brand/75">Werkgebied</p>
                    <h2 id="service-area-heading" class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Superfresh in Den Haag en omgeving</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Superfresh richt zich op bedrijven en vastgoedprofessionals in Den Haag en omliggende gebieden.</p>
                </div>

                <ul class="mx-auto mt-10 flex max-w-4xl flex-wrap justify-center gap-3">
                    @foreach (['Den Haag', 'Rotterdam', 'Leiden', 'Delft', 'Rijswijk'] as $location)
                        <li class="font-subheading rounded-full border border-brand/10 bg-white px-5 py-3 text-sm text-brand shadow-sm">{{ $location }}</li>
                    @endforeach
                </ul>

                <p class="mt-10 text-base leading-7 text-secondary-text/75">Wilt u weten of wij ook op uw locatie actief zijn? Neem contact met ons op.</p>
                <div class="mt-6 flex justify-center">
                    <x-site.button href="{{ route('werkgebied') }}">Bekijk ons werkgebied</x-site.button>
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading" class="bg-[#E5F5EB]">
            <div class="mx-auto max-w-7xl px-6 py-20 text-center lg:px-8 lg:py-24">
                <div class="mx-auto max-w-3xl">
                    <h2 id="contact-heading" class="font-heading text-3xl font-extrabold tracking-tight text-brand sm:text-4xl">Op zoek naar een betrouwbare schoonmaakoplossing?</h2>
                    <p class="mt-6 text-lg leading-8 text-secondary-text/75">Vertel ons meer over uw locatie en uw schoonmaakbehoeften. We bekijken graag samen welke mogelijkheden er zijn.</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-3">
                        <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>
                        <x-site.button href="{{ route('kennismaking-plannen') }}" variant="secondary">Kennismaking plannen</x-site.button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

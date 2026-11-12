<footer class="border-t border-white/10 bg-brand">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 py-14 text-sm text-secondary-surface/75 sm:grid-cols-5 sm:gap-4 lg:gap-6 lg:px-8">
        <section>
            <a href="{{ route('home') }}" aria-label="Superfresh home" class="inline-flex">
                <img src="{{ asset('images/super-fresh-logo-light.png') }}" alt="Superfresh" class="h-auto w-36 max-w-full">
            </a>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">Navigatie</h2>
            <nav aria-label="Navigatie footer" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('home') }}" class="transition hover:text-white">Home</a>
                <a href="{{ route('werkgebied') }}" class="transition hover:text-white">Werkgebied</a>
                <a href="{{ route('over-superfresh') }}" class="transition hover:text-white">Over Superfresh</a>
                <a href="{{ route('tips-advies') }}" class="transition hover:text-white">Tips &amp; advies</a>
                <a href="{{ route('contact') }}" class="transition hover:text-white">Contact</a>
            </nav>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">Onze diensten</h2>
            <nav aria-label="Onze diensten" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('kantoorschoonmaak') }}" class="transition hover:text-white">Kantoorschoonmaak</a>
                <a href="{{ route('schoonmaak-scholen') }}" class="transition hover:text-white">Schoonmaak voor scholen</a>
                <a href="{{ route('airbnb-schoonmaak') }}" class="transition hover:text-white">Airbnb &amp; short-stay</a>
                <a href="{{ route('schoonmaak-huurwoningen') }}" class="transition hover:text-white">Schoonmaak voor huurwoningen</a>
                <a href="{{ route('schoonmaak-vastgoed') }}" class="transition hover:text-white">Vastgoedschoonmaak</a>
            </nav>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">Contact</h2>
            <address class="mt-4 space-y-3 not-italic leading-6">
                <p><a href="tel:+31705680983" class="transition hover:text-white">+31(0) 70 568 0983</a></p>
                <p><a href="mailto:service@super-fresh.nl" class="break-words transition hover:text-white">service@super-fresh.nl</a></p>
                <p>Caerus Tech B.V.<br>J.C. van Markenlaan 32<br>2285 VL Rijswijk</p>
            </address>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">Juridisch</h2>
            <nav aria-label="Juridisch" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('privacyverklaring') }}" class="transition hover:text-white">Privacyverklaring</a>
                <a href="#cookiebeleid" class="transition hover:text-white">Cookiebeleid</a>
            </nav>
        </section>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-5 text-center text-xs text-secondary-surface/70 lg:px-8">
            © {{ now()->year }} Superfresh. Alle rechten voorbehouden.
        </div>
    </div>
</footer>

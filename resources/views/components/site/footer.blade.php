<footer class="border-t border-white/10 bg-brand">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 py-14 text-sm text-secondary-surface/75 sm:grid-cols-5 sm:gap-4 lg:gap-6 lg:px-8">
        <section>
            <a href="{{ route('home') }}" aria-label="Superfresh home" class="inline-flex">
                <img src="{{ asset('images/super-fresh-logo-light.png') }}" alt="Superfresh" class="h-auto w-36 max-w-full">
            </a>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">{{ __('Navigatie') }}</h2>
            <nav aria-label="{{ __('Navigatie footer') }}" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('home') }}" class="transition hover:text-white">{{ __('Home') }}</a>
                <a href="{{ route('werkgebied') }}" class="transition hover:text-white">{{ __('Werkgebied') }}</a>
                <a href="{{ route('tips-advies') }}" class="transition hover:text-white">{{ __('Tips & advies') }}</a>
                <a href="{{ route('contact') }}" class="transition hover:text-white">{{ __('Contact') }}</a>
            </nav>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">{{ __('Onze diensten') }}</h2>
            <nav aria-label="{{ __('Onze diensten') }}" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('kantoorschoonmaak') }}" class="transition hover:text-white">{{ __('Kantoorschoonmaak') }}</a>
                <a href="{{ route('schoonmaak-scholen') }}" class="transition hover:text-white">{{ __('Schoonmaak voor scholen') }}</a>
                <a href="{{ route('airbnb-schoonmaak') }}" class="transition hover:text-white">{{ __('Airbnb & short-stay') }}</a>
                <a href="{{ route('schoonmaak-huurwoningen') }}" class="transition hover:text-white">{{ __('Schoonmaak voor huurwoningen') }}</a>
                <a href="{{ route('schoonmaak-vastgoed') }}" class="transition hover:text-white">{{ __('Vastgoedschoonmaak') }}</a>
            </nav>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">{{ __('Contact') }}</h2>
            <address class="mt-4 space-y-3 not-italic leading-6">
                <p><a href="tel:+31705680983" class="transition hover:text-white">+31(0) 70 568 0983</a></p>
                <p><a href="mailto:service@super-fresh.nl" class="break-words transition hover:text-white">service@super-fresh.nl</a></p>
                <p>Caerus Tech B.V.<br>J.C. van Markenlaan 32<br>2285 VL Rijswijk</p>
            </address>
        </section>

        <section>
            <h2 class="font-heading text-base font-extrabold text-white">{{ __('Juridisch') }}</h2>
            <nav aria-label="{{ __('Juridisch') }}" class="font-subheading mt-4 flex flex-col items-start gap-3">
                <a href="{{ route('privacyverklaring') }}" class="transition hover:text-white">{{ __('Privacyverklaring') }}</a>
                <a href="#cookiebeleid" class="transition hover:text-white">{{ __('Cookiebeleid') }}</a>
            </nav>
        </section>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-5 text-center text-xs text-secondary-surface/70 lg:px-8">
            © {{ now()->year }} {{ __('Superfresh. Alle rechten voorbehouden.') }}
        </div>
    </div>
</footer>

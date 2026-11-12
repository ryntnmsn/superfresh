<header class="border-b border-brand/10 bg-white">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-x-4 gap-y-4 px-6 py-4 lg:px-8">
        <a href="{{ route('home') }}" aria-label="Superfresh home" class="shrink-0">
            <img src="{{ asset('images/super-fresh-logo-dark.png') }}" alt="Superfresh" class="h-auto w-[132px] max-w-full sm:w-36 lg:w-40">
        </a>

        <nav aria-label="Hoofdnavigatie" class="font-subheading order-2 hidden items-center gap-x-5 text-sm text-brand/80 lg:order-2 lg:flex xl:gap-x-6">
            <a href="{{ route('home') }}" class="transition hover:text-brand">Home</a>

            <details class="group relative">
                <summary class="flex cursor-pointer list-none items-center gap-1 transition hover:text-brand marker:hidden">
                    Voor wie
                    <svg class="size-3.5 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 7.47a.75.75 0 0 1 1.06 0L10 11.19l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="absolute left-1/2 top-full z-40 mt-3 hidden w-72 -translate-x-1/2 rounded-md border border-brand/10 bg-white p-2 text-left shadow-lg group-open:block">
                    <a href="{{ route('kantoorschoonmaak') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand">Kantoren</a>
                    <a href="{{ route('schoonmaak-scholen') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand">Scholen</a>
                    <a href="{{ route('airbnb-schoonmaak') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand">Airbnb &amp; short stay</a>
                    <a href="{{ route('schoonmaak-huurwoningen') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand">Verhuurders &amp; vastgoedeigenaren</a>
                    <a href="{{ route('schoonmaak-vastgoed') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand">Makelaars &amp; vastgoedbeheerders</a>
                </div>
            </details>

            <a href="{{ route('werkgebied') }}" class="transition hover:text-brand">Werkgebied</a>
            <a href="{{ route('over-superfresh') }}" class="transition hover:text-brand">Over Superfresh</a>
            <a href="{{ route('tips-advies') }}" class="transition hover:text-brand">Tips &amp; advies</a>
            <a href="{{ route('contact') }}" class="transition hover:text-brand">Contact</a>
        </nav>

        <div class="order-2 flex items-center gap-3 lg:order-3">
            <x-site.button href="{{ route('offerte-aanvragen') }}">Offerte aanvragen</x-site.button>

            <details class="group relative lg:hidden">
                <summary aria-label="Menu" class="flex size-10 cursor-pointer list-none items-center justify-center rounded border border-brand/20 text-brand transition hover:bg-secondary-surface marker:hidden">
                    <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="m6 6 12 12M18 6 6 18" />
                    </svg>
                </summary>

                <nav aria-label="Mobiele navigatie" class="absolute right-0 top-full z-50 mt-3 w-72 max-w-[calc(100vw-3rem)] rounded-md border border-brand/10 bg-white p-3 text-sm text-brand shadow-lg">
                    <a href="{{ route('home') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">Home</a>

                    <details class="group/mobile">
                        <summary class="flex cursor-pointer list-none items-center justify-between rounded px-3 py-2.5 transition hover:bg-[#7de9c0] marker:hidden">
                            Voor wie
                            <svg class="size-3.5 transition-transform group-open/mobile:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.22 7.47a.75.75 0 0 1 1.06 0L10 11.19l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="mt-1 space-y-1 pl-3">
                            <a href="{{ route('kantoorschoonmaak') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0]">Kantoren</a>
                            <a href="{{ route('schoonmaak-scholen') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0]">Scholen</a>
                            <a href="{{ route('airbnb-schoonmaak') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0]">Airbnb &amp; short stay</a>
                            <a href="{{ route('schoonmaak-huurwoningen') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0]">Verhuurders &amp; vastgoedeigenaren</a>
                            <a href="{{ route('schoonmaak-vastgoed') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0]">Makelaars &amp; vastgoedbeheerders</a>
                        </div>
                    </details>

                    <a href="{{ route('werkgebied') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">Werkgebied</a>
                    <a href="{{ route('over-superfresh') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">Over Superfresh</a>
                    <a href="{{ route('tips-advies') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">Tips &amp; advies</a>
                    <a href="{{ route('contact') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">Contact</a>
                </nav>
            </details>
        </div>
    </div>
</header>

<header class="border-b border-brand/10 bg-white">
    <div class="mx-auto grid max-w-7xl grid-cols-[1fr_auto_1fr] grid-rows-[auto_auto] gap-x-2 gap-y-3 px-4 py-4 min-[641px]:flex min-[641px]:flex-nowrap min-[641px]:justify-between min-[641px]:gap-x-4 min-[641px]:px-6 xl:px-8">
        <div class="col-start-2 row-start-2 flex w-auto shrink-0 items-center justify-center min-[641px]:col-auto min-[641px]:row-auto min-[641px]:justify-self-auto">
            <a href="{{ route('home') }}" aria-label="Superfresh home" class="shrink-0">
                <img src="{{ asset('images/super-fresh-logo-dark.png') }}" alt="Superfresh" class="block h-auto w-28 max-w-full min-[400px]:w-36 min-[641px]:w-44 xl:w-48">
            </a>
        </div>

        <nav aria-label="{{ __('Hoofdnavigatie') }}" class="font-subheading order-3 hidden items-center gap-x-5 text-sm text-brand/80 xl:order-2 xl:flex xl:gap-x-6">
            <a href="{{ route('home') }}" class="transition hover:text-brand">{{ __('Home') }}</a>

            <details class="group relative">
                <summary class="flex cursor-pointer list-none items-center gap-1 transition hover:text-brand focus-visible:rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-bright marker:hidden">
                    {{ __('Schoonmaakdiensten') }}
                    <svg class="size-3.5 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 7.47a.75.75 0 0 1 1.06 0L10 11.19l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="absolute left-1/2 top-full z-40 mt-3 hidden w-80 -translate-x-1/2 rounded-md border border-brand/10 bg-white p-2 text-left shadow-lg group-open:block">
                    <a href="{{ route('kantoorschoonmaak') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand focus:bg-[#7de9c0] focus:outline-none">{{ __('Kantoorschoonmaak') }}</a>
                    <a href="{{ route('schoonmaak-scholen') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor scholen') }}</a>
                    <a href="{{ route('airbnb-schoonmaak') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand focus:bg-[#7de9c0] focus:outline-none">{{ __('Airbnb & short-stay schoonmaak') }}</a>
                    <a href="{{ route('schoonmaak-huurwoningen') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor verhuurders') }}</a>
                    <a href="{{ route('schoonmaak-vastgoed') }}" class="block rounded-lg px-4 py-2.5 transition hover:bg-[#7de9c0] hover:text-brand focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor vastgoedprofessionals') }}</a>
                </div>
            </details>

            <a href="{{ route('werkgebied') }}" class="transition hover:text-brand">{{ __('Werkgebied') }}</a>
            <a href="{{ route('tips-advies') }}" class="transition hover:text-brand">{{ __('Tips & advies') }}</a>
            <a href="{{ route('contact') }}" class="transition hover:text-brand">{{ __('Contact') }}</a>
        </nav>

        <div class="contents min-[641px]:order-2 min-[641px]:flex min-[641px]:w-auto min-[641px]:items-center min-[641px]:justify-end min-[641px]:gap-3 xl:order-3">
            <form method="POST" action="{{ route('language.switch') }}" aria-label="{{ __('Taal kiezen') }}" class="col-start-3 row-start-1 flex items-center justify-self-end rounded border border-brand/20 p-0.5 text-xs font-semibold min-[641px]:col-auto min-[641px]:row-auto min-[641px]:justify-self-auto">
                @csrf
                <button type="submit" name="locale" value="nl" @class(['rounded px-2 py-1 transition', 'bg-brand text-white' => app()->isLocale('nl'), 'text-brand hover:bg-secondary-surface' => app()->isLocale('en')]) aria-pressed="{{ app()->isLocale('nl') ? 'true' : 'false' }}">NL</button>
                <button type="submit" name="locale" value="en" @class(['rounded px-2 py-1 transition', 'bg-brand text-white' => app()->isLocale('en'), 'text-brand hover:bg-secondary-surface' => app()->isLocale('nl')]) aria-pressed="{{ app()->isLocale('en') ? 'true' : 'false' }}">EN</button>
            </form>
            <x-site.button href="{{ route('offerte-aanvragen') }}" aria-label="{{ __('Vraag een offerte aan') }}" class="col-start-3 row-start-2 inline-flex h-[40px] w-[40px] justify-self-end p-0 min-[641px]:col-auto min-[641px]:row-auto min-[641px]:h-auto min-[641px]:w-auto min-[641px]:px-4 min-[641px]:py-2.5 min-[641px]:text-sm min-[641px]:justify-self-auto">
                <svg class="h-[24px] w-[24px] min-[641px]:hidden" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.24.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2Z" />
                </svg>
                <span class="sr-only min-[641px]:not-sr-only">{{ __('Vraag een offerte aan') }}</span>
            </x-site.button>

            <details class="group relative col-start-1 row-start-2 justify-self-start min-[641px]:col-auto min-[641px]:row-auto min-[641px]:justify-self-auto xl:hidden">
                <summary aria-label="Menu" class="flex size-10 cursor-pointer list-none items-center justify-center rounded border border-brand/20 text-brand transition hover:bg-secondary-surface marker:hidden">
                    <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="m6 6 12 12M18 6 6 18" />
                    </svg>
                </summary>

                <nav aria-label="{{ __('Mobiele navigatie') }}" class="absolute left-0 top-full z-50 mt-3 w-72 max-w-[calc(100vw-3rem)] rounded-md border border-brand/10 bg-white p-3 text-sm text-brand shadow-lg min-[641px]:left-auto min-[641px]:right-0">
                    <a href="{{ route('home') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">{{ __('Home') }}</a>

                    <details class="group/mobile">
                        <summary class="flex cursor-pointer list-none items-center justify-between rounded px-3 py-2.5 transition hover:bg-[#7de9c0] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-bright marker:hidden">
                            {{ __('Schoonmaakdiensten') }}
                            <svg class="size-3.5 transition-transform group-open/mobile:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.22 7.47a.75.75 0 0 1 1.06 0L10 11.19l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="mt-1 space-y-1 pl-3">
                            <a href="{{ route('kantoorschoonmaak') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0] focus:bg-[#7de9c0] focus:outline-none">{{ __('Kantoorschoonmaak') }}</a>
                            <a href="{{ route('schoonmaak-scholen') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0] focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor scholen') }}</a>
                            <a href="{{ route('airbnb-schoonmaak') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0] focus:bg-[#7de9c0] focus:outline-none">{{ __('Airbnb & short-stay schoonmaak') }}</a>
                            <a href="{{ route('schoonmaak-huurwoningen') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0] focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor verhuurders') }}</a>
                            <a href="{{ route('schoonmaak-vastgoed') }}" class="block rounded px-3 py-2 transition hover:bg-[#7de9c0] focus:bg-[#7de9c0] focus:outline-none">{{ __('Schoonmaak voor vastgoedprofessionals') }}</a>
                        </div>
                    </details>

                    <a href="{{ route('werkgebied') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">{{ __('Werkgebied') }}</a>
                    <a href="{{ route('tips-advies') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">{{ __('Tips & advies') }}</a>
                    <a href="{{ route('contact') }}" class="block rounded px-3 py-2.5 transition hover:bg-[#7de9c0]">{{ __('Contact') }}</a>
                </nav>
            </details>
        </div>
    </div>
</header>

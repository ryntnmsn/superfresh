<dialog id="newsletter-popup" aria-labelledby="newsletter-popup-heading" aria-describedby="newsletter-popup-description" data-has-errors="{{ $errors->hasAny(['newsletter_email', 'newsletter_consent']) ? 'true' : 'false' }}" class="m-auto w-[calc(100%-2rem)] max-w-lg rounded-2xl border border-brand/10 bg-white p-0 text-brand shadow-2xl backdrop:bg-brand/50">
    <div class="relative p-7 sm:p-9">
        <form method="dialog" class="absolute right-4 top-4">
            <button type="submit" aria-label="{{ __('Sluiten') }}" class="rounded-full px-3 py-1 text-2xl leading-none text-brand/65 transition hover:bg-secondary-surface hover:text-brand focus:outline-none focus:ring-2 focus:ring-brand-bright">&times;</button>
        </form>

        @if (session('newsletter_subscribed'))
            <div id="newsletter-subscription-success" role="status">
                <p class="font-subheading text-sm text-brand/75">{{ __('Nieuwsbrief') }}</p>
                <h2 id="newsletter-popup-heading" class="font-heading mt-3 pr-8 text-2xl font-extrabold">{{ __('Bedankt voor uw aanmelding!') }}</h2>
                <p id="newsletter-popup-description" class="mt-3 leading-7 text-secondary-text/75">{{ __('U staat op de lijst voor de Superfresh-nieuwsbrief.') }}</p>
                <form method="dialog" class="mt-6"><button type="submit" class="rounded bg-brand px-5 py-3 text-sm font-bold text-white transition hover:bg-brand/90 focus:outline-none focus:ring-4 focus:ring-brand-bright/40">{{ __('Sluiten') }}</button></form>
            </div>
        @else
            <p class="font-subheading text-sm text-brand/75">{{ __('Nieuwsbrief') }}</p>
            <h2 id="newsletter-popup-heading" class="font-heading mt-3 pr-8 text-2xl font-extrabold sm:text-3xl">{{ __('Schoonmaaktips in uw inbox') }}</h2>
            <p id="newsletter-popup-description" class="mt-3 leading-7 text-secondary-text/75">{{ __('Meld u aan voor nieuws en praktische schoonmaaktips van Superfresh. U kunt zich op elk moment afmelden.') }}</p>

            <form method="POST" action="{{ route('newsletter.store') }}" class="mt-6 space-y-4">
                @csrf
                <div class="absolute -left-[10000px] top-auto size-px overflow-hidden" aria-hidden="true">
                    <label for="newsletter-website">{{ __('Laat dit veld leeg') }}</label>
                    <input id="newsletter-website" name="website" type="text" tabindex="-1" autocomplete="off">
                </div>
                <div>
                    <label for="newsletter-email" class="mb-1.5 block text-sm font-bold text-brand">{{ __('E-mailadres') }}</label>
                    <input id="newsletter-email" name="newsletter_email" type="email" value="{{ old('newsletter_email') }}" autocomplete="email" required maxlength="255" class="w-full rounded border border-brand/20 px-4 py-3 text-secondary-text outline-none transition placeholder:text-secondary-text/45 focus:border-brand focus:ring-4 focus:ring-brand-bright/25" placeholder="{{ __('uw@email.nl') }}">
                    @error('newsletter_email')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="flex items-start gap-3 text-sm leading-6 text-secondary-text/75">
                        <input type="checkbox" name="newsletter_consent" value="1" required @checked(old('newsletter_consent')) class="mt-1 size-4 shrink-0 accent-brand">
                        <span>{{ __('Ik geef toestemming om de nieuwsbrief per e-mail te ontvangen. Ik kan me altijd uitschrijven.') }} <a href="{{ route('privacyverklaring') }}" class="text-brand underline underline-offset-4">{{ __('Privacyverklaring') }}</a>.</span>
                    </label>
                    @error('newsletter_consent')<p class="mt-1.5 text-sm text-red-700">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="w-full rounded bg-brand px-5 py-3 font-subheading text-sm text-white transition hover:bg-brand/90 focus:outline-none focus:ring-4 focus:ring-brand-bright/40">{{ __('Aanmelden voor de nieuwsbrief') }}</button>
            </form>
            <button type="button" data-newsletter-dismiss class="mt-4 w-full py-2 text-sm text-brand/70 underline decoration-brand/30 underline-offset-4 hover:text-brand">{{ __('Misschien later') }}</button>
        @endif
    </div>
</dialog>

@extends('layouts.site')

@section('title', __('Contact'))

@section('content')
    <main class="flex-1" aria-label="{{ __('Contact') }}">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">{{ __('Contact') }}</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">{{ __('Neem contact op met Superfresh') }}</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>{{ __('Heeft u vragen over onze schoonmaakdiensten of wilt u bespreken wat we voor uw bedrijf of vastgoed kunnen betekenen?') }}</p>
                        <p>{{ __('We helpen u graag verder.') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary-surface">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 py-16 lg:grid-cols-[0.8fr_1.2fr] lg:gap-14 lg:px-8 lg:py-24">
                <aside aria-labelledby="contact-details-heading" class="space-y-8">
                    <div>
                        <p class="font-subheading text-sm text-brand/75">{{ __('We staan voor u klaar') }}</p>
                        <h2 id="contact-details-heading" class="font-heading mt-2 text-2xl font-extrabold text-brand sm:text-3xl">{{ __('Contactgegevens') }}</h2>
                    </div>

                    <dl class="space-y-5 rounded-md border border-brand/10 bg-white p-6 shadow-sm sm:p-8">
                        <div>
                            <dt class="font-subheading text-sm text-brand">{{ __('Telefoon') }}</dt>
                            <dd class="mt-1"><a href="tel:+31705680983" class="text-secondary-text/75 hover:text-brand">+31(0) 70 568 0983</a></dd>
                        </div>
                        <div>
                            <dt class="font-subheading text-sm text-brand">{{ __('E-mail') }}</dt>
                            <dd class="mt-1"><a href="mailto:service@super-fresh.nl" class="break-words text-secondary-text/75 hover:text-brand">service@super-fresh.nl</a></dd>
                        </div>
                        <div>
                            <dt class="font-subheading text-sm text-brand">{{ __('Adres') }}</dt>
                            <dd class="mt-1 leading-6 text-secondary-text/75">J.C. van Markenlaan 32<br>2285 VL Rijswijk</dd>
                        </div>
                        <div>
                            <dt class="font-subheading text-sm text-brand">{{ __('Werkgebied') }}</dt>
                            <dd class="mt-1 leading-6 text-secondary-text/75">{{ __('Den Haag, Rotterdam, Leiden, Delft en Rijswijk.') }}</dd>
                        </div>
                    </dl>
                </aside>

                <div>
                    @if (session('contact_message_submitted'))
                        <div role="status" class="rounded-md border border-brand/10 bg-white p-8 shadow-sm sm:p-10">
                            <p class="font-subheading text-sm text-brand/75">{{ __('Bericht verzonden') }}</p>
                            <h2 class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand">{{ __('Bedankt voor uw bericht!') }}</h2>
                            <p class="mt-5 text-lg leading-8 text-secondary-text/75">{{ __('Uw bericht is succesvol verzonden. We waarderen uw interesse in Superfresh.') }}</p>
                        </div>
                    @else
                        <form method="POST" action="{{ route('contact.store') }}" class="space-y-7 rounded-md border border-brand/10 bg-white p-6 shadow-sm sm:p-10">
                            @csrf

                            <div>
                                <p class="font-subheading text-sm text-brand/75">{{ __('Stuur ons een bericht') }}</p>
                                <h2 class="font-heading mt-2 text-2xl font-extrabold text-brand sm:text-3xl">{{ __('Hoe kunnen we u helpen?') }}</h2>
                                <p class="mt-3 text-sm text-secondary-text/65"><span aria-hidden="true">*</span> {{ __('Verplicht veld') }}</p>
                            </div>

                            @if ($errors->any())
                                <div role="alert" class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                                    {{ __('Controleer de gemarkeerde velden en probeer het opnieuw.') }}
                                </div>
                            @endif

                            <div class="grid gap-5 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-2 block text-sm font-medium text-brand">{{ __('Naam') }} <span aria-hidden="true">*</span></label>
                                    <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}" required maxlength="255" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('name'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('name')])>
                                    @error('name')<p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>@enderror
                                </div>

                                <div>
                                    <label for="business_name" class="mb-2 block text-sm font-medium text-brand">{{ __('Bedrijfsnaam') }}</label>
                                    <input id="business_name" name="business_name" type="text" autocomplete="organization" value="{{ old('business_name') }}" maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
                                    @error('business_name')<p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>@enderror
                                </div>

                                <div>
                                    <label for="email" class="mb-2 block text-sm font-medium text-brand">{{ __('E-mailadres') }} <span aria-hidden="true">*</span></label>
                                    <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required maxlength="255" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('email'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('email')])>
                                    @error('email')<p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>@enderror
                                </div>

                                <div>
                                    <label for="phone" class="mb-2 block text-sm font-medium text-brand">{{ __('Telefoonnummer') }}</label>
                                    <input id="phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}" maxlength="50" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('phone'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('phone')])>
                                    @error('phone')<p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="message" class="mb-2 block text-sm font-medium text-brand">{{ __('Bericht') }} <span aria-hidden="true">*</span></label>
                                    <textarea id="message" name="message" rows="6" maxlength="5000" required @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('message'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('message')])>{{ old('message') }}</textarea>
                                    @error('message')<p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>@enderror
                                    <p class="mt-2 text-sm leading-6 text-secondary-text/65">{{ __('Gaat uw vraag over schoonmaak? Vermeld dan de postcode van de locatie, wat er schoongemaakt moet worden en wanneer u wilt starten.') }}</p>
                                </div>
                            </div>

                            <x-site.recaptcha />

                            <div class="flex flex-col gap-4 border-t border-brand/10 pt-6 sm:flex-row sm:items-center sm:justify-between">
                                <p class="text-xs text-secondary-text/55">{{ __('De velden met een * zijn verplicht.') }}</p>
                                <x-site.button type="submit">{{ __('Bericht versturen') }}</x-site.button>
                            </div>
                        </form>
                    @endif
                    <p class="mt-5 text-sm leading-6 text-secondary-text/70">{{ __('Lees in') }} <a href="{{ route('privacyverklaring') }}" class="font-medium text-brand underline decoration-brand/40 underline-offset-4 hover:decoration-brand">{{ __('onze privacyverklaring') }}</a> {{ __('hoe we met uw gegevens omgaan.') }}</p>
                </div>
            </div>
        </section>
    </main>
@endsection

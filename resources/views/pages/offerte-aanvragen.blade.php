@extends('layouts.site')

@section('title', 'Offerte aanvragen')

@section('content')
    <main class="flex-1" aria-label="Offerte aanvragen">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Offerte aanvragen</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Ontvang een offerte op maat</h1>
                    <div class="mt-6 max-w-2xl space-y-4 text-lg leading-8 text-secondary-text/80">
                        <p>Bent u op zoek naar professionele schoonmaak voor uw bedrijf, school of vastgoed?</p>
                        <p>Vertel ons meer over uw locatie en uw wensen. Superfresh bekijkt graag welke schoonmaakoplossing bij uw situatie past.</p>
                    </div>
                </div>
            </div>
        </section>

        <section aria-labelledby="quote-form-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-4xl">
                    @if (session('quote_request_submitted'))
                        <div role="status" class="rounded-md border border-brand/10 bg-white p-8 shadow-sm sm:p-12">
                            <p class="font-subheading text-sm text-brand/75">Aanvraag verzonden</p>
                            <h2 class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand">Bedankt voor uw offerteaanvraag!</h2>
                            <p class="mt-5 text-lg leading-8 text-secondary-text/75">We hebben uw aanvraag ontvangen. Superfresh neemt uw gegevens mee om uw schoonmaakbehoeften en de mogelijkheden te bekijken.</p>
                        </div>
                    @else
                        <form method="POST" action="{{ route('offerte-aanvragen.store') }}" class="space-y-8 rounded-md border border-brand/10 bg-white p-6 shadow-sm sm:p-10">
                            @csrf

                            <div>
                                <p class="font-subheading text-sm text-brand/75">Uw aanvraag</p>
                                <h2 id="quote-form-heading" class="font-heading mt-2 text-2xl font-extrabold text-brand sm:text-3xl">Vertel ons over uw schoonmaakbehoefte.</h2>
                                <p class="mt-3 text-sm text-secondary-text/65"><span aria-hidden="true">*</span> Verplicht veld</p>
                            </div>

                            @if ($errors->any())
                                <div role="alert" class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                                    Controleer de gemarkeerde velden en probeer het opnieuw.
                                </div>
                            @endif

                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-2 block text-sm font-medium text-brand">Naam <span aria-hidden="true">*</span></label>
                                    <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}" required maxlength="255" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('name'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('name')])>
                                    @error('name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="business_name" class="mb-2 block text-sm font-medium text-brand">Bedrijfsnaam</label>
                                    <input id="business_name" name="business_name" type="text" autocomplete="organization" value="{{ old('business_name') }}" maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
                                    @error('business_name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="email" class="mb-2 block text-sm font-medium text-brand">E-mailadres <span aria-hidden="true">*</span></label>
                                    <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required maxlength="255" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('email'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('email')])>
                                    @error('email')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="phone" class="mb-2 block text-sm font-medium text-brand">Telefoonnummer <span aria-hidden="true">*</span></label>
                                    <input id="phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}" required maxlength="50" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('phone'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('phone')])>
                                    @error('phone')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="service_type" class="mb-2 block text-sm font-medium text-brand">Type dienstverlening <span aria-hidden="true">*</span></label>
                                    <select id="service_type" name="service_type" required @class(['w-full rounded border bg-white px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('service_type'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('service_type')])>
                                        <option value="">Kies een dienstverlening</option>
                                        @foreach ($serviceTypes as $serviceType)
                                            <option value="{{ $serviceType }}" @selected(old('service_type') === $serviceType)>{{ $serviceType }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_type')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="location" class="mb-2 block text-sm font-medium text-brand">Plaats / locatie <span aria-hidden="true">*</span></label>
                                    <input id="location" name="location" type="text" autocomplete="address-level2" value="{{ old('location') }}" required maxlength="255" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('location'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('location')])>
                                    @error('location')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="location_count" class="mb-2 block text-sm font-medium text-brand">Aantal locaties</label>
                                    <input id="location_count" name="location_count" type="number" min="1" max="10000" step="1" value="{{ old('location_count') }}" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('location_count'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('location_count')])>
                                    @error('location_count')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="frequency" class="mb-2 block text-sm font-medium text-brand">Gewenste schoonmaakfrequentie</label>
                                    <select id="frequency" name="frequency" @class(['w-full rounded border bg-white px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('frequency'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('frequency')])>
                                        <option value="">Kies een frequentie</option>
                                        @foreach ($frequencies as $frequency)
                                            <option value="{{ $frequency }}" @selected(old('frequency') === $frequency)>{{ $frequency }}</option>
                                        @endforeach
                                    </select>
                                    @error('frequency')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="wishes" class="mb-2 block text-sm font-medium text-brand">Beschrijf uw wensen</label>
                                    <textarea id="wishes" name="wishes" rows="5" maxlength="5000" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">{{ old('wishes') }}</textarea>
                                    @error('wishes')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div class="border-t border-brand/10 pt-6">
                                <p class="text-sm leading-6 text-secondary-text/70">Door dit formulier te verzenden, gaat u akkoord met onze privacyverklaring. Uw gegevens worden gebruikt om uw aanvraag te behandelen.</p>
                                <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <p class="text-xs text-secondary-text/55">De velden met een * zijn verplicht.</p>
                                    <x-site.button type="submit">Offerte aanvragen</x-site.button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection

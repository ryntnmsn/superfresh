@extends('layouts.site')

@section('title', 'Offerte aanvragen')
@section('seo_title', 'Schoonmaakofferte aanvragen | Superfresh')
@section('meta_description', 'Vraag een schoonmaakofferte aan voor uw bedrijf, school, huurwoning of vastgoed in Den Haag en omgeving.')

@section('content')
    <main class="flex-1" aria-label="Offerte aanvragen">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Offerte aanvragen</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Offerte aanvragen</h1>
                </div>
            </div>
        </section>

        <section aria-labelledby="quote-form-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-4xl">
                    @if (session('quote_request_submitted'))
                        <div role="status" class="rounded-md border border-brand/10 bg-white p-8 shadow-sm sm:p-12">
                            <p class="font-subheading text-sm text-brand/75">Aanvraag verzonden</p>
                            <h2 class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand">Uw aanvraag is ontvangen</h2>
                            <p class="mt-5 text-lg leading-8 text-secondary-text/75">Bedankt voor uw aanvraag. We nemen contact met u op om de werkzaamheden en uw gewenste startdatum te bespreken.</p>
                        </div>
                    @else
                        <form method="POST" action="{{ route('offerte-aanvragen.store') }}" enctype="multipart/form-data" class="space-y-8 rounded-md border border-brand/10 bg-white p-6 shadow-sm sm:p-10">
                            @csrf

                            <div>
                                <p class="font-subheading text-sm text-brand/75">Uw aanvraag</p>
                                <h2 id="quote-form-heading" class="font-heading mt-2 text-2xl font-extrabold text-brand sm:text-3xl">Vraag een schoonmaakofferte aan</h2>
                                <p class="mt-3 text-base leading-7 text-secondary-text/75">Vertel ons wat u wilt laten schoonmaken en wanneer u wilt starten. We nemen contact met u op over de werkzaamheden, prijs en planning.</p>
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
                                    <label for="business_name" class="mb-2 block text-sm font-medium text-brand">Bedrijfsnaam — optioneel</label>
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
                                    <label for="service_type" class="mb-2 block text-sm font-medium text-brand">Gewenste schoonmaakdienst <span aria-hidden="true">*</span></label>
                                    <select id="service_type" name="service_type" required @class(['w-full rounded border bg-white px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('service_type'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('service_type')])>
                                        <option value="">Kies een schoonmaakdienst</option>
                                        @foreach ($serviceTypes as $serviceType)
                                            <option value="{{ $serviceType }}" @selected(old('service_type', $selectedService) === $serviceType)>{{ $serviceType }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_type')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="postal_code" class="mb-2 block text-sm font-medium text-brand">Postcode van de schoonmaaklocatie <span aria-hidden="true">*</span></label>
                                    <input id="postal_code" name="postal_code" type="text" autocomplete="postal-code" value="{{ old('postal_code') }}" required maxlength="16" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('postal_code'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('postal_code')])>
                                    @error('postal_code')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="start_date" class="mb-2 block text-sm font-medium text-brand">Wanneer wilt u starten?</label>
                                    <input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('start_date'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('start_date')])>
                                    @error('start_date')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="frequency" class="mb-2 block text-sm font-medium text-brand">Hoe vaak is schoonmaak nodig?</label>
                                    <select id="frequency" name="frequency" @class(['w-full rounded border bg-white px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('frequency'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('frequency')])>
                                        <option value="">Kies een frequentie</option>
                                        @foreach ($frequencies as $frequency)
                                            <option value="{{ $frequency }}" @selected(old('frequency') === $frequency)>{{ $frequency }}</option>
                                        @endforeach
                                    </select>
                                    @error('frequency')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="cleaning_description" class="mb-2 block text-sm font-medium text-brand">Wat wilt u laten schoonmaken? <span aria-hidden="true">*</span></label>
                                    <textarea id="cleaning_description" name="cleaning_description" rows="5" required maxlength="5000" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">{{ old('cleaning_description') }}</textarea>
                                    @error('cleaning_description')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="photos" class="mb-2 block text-sm font-medium text-brand">Foto’s toevoegen — optioneel</label>
                                    <input id="photos" name="photos[]" type="file" accept="image/jpeg,image/png,image/webp" multiple class="w-full rounded border border-brand/20 bg-white px-3.5 py-2.5 text-sm text-secondary-text file:mr-4 file:rounded file:border-0 file:bg-secondary-surface file:px-3 file:py-2 file:text-sm file:font-medium file:text-brand">
                                    <p class="mt-2 text-xs leading-5 text-secondary-text/65">Maximaal vijf JPG-, PNG- of WebP-foto’s van 10 MB per foto.</p>
                                    @error('photos')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                    @error('photos.*')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div class="border-t border-brand/10 pt-6">
                                <p class="text-sm leading-6 text-secondary-text/70">Door dit formulier te verzenden, gaat u akkoord met onze privacyverklaring. Uw gegevens worden gebruikt om uw aanvraag te behandelen.</p>
                                <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <p class="text-xs text-secondary-text/55">De velden met een * zijn verplicht.</p>
                                    <x-site.button type="submit">Verstuur offerteaanvraag</x-site.button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection

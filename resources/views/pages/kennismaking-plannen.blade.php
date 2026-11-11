@extends('layouts.site')

@section('title', 'Kennismaking plannen')

@section('content')
    <main class="flex-1" aria-label="Kennismaking plannen">
        <section class="relative isolate overflow-hidden bg-[#E5F5EB] bg-cover bg-center" style="background-image: url('{{ asset('images/superfresh-hero-bg.jpg') }}')">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-3xl">
                    <p class="font-subheading text-sm uppercase tracking-[0.16em] text-brand/75">Kennismaking plannen</p>
                    <h1 class="font-heading mt-4 text-4xl font-extrabold tracking-tight text-brand sm:text-5xl lg:text-6xl">Laten we kennismaken</h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-secondary-text/80">Wilt u meer weten over de schoonmaakdiensten van Superfresh? Plan een kennismaking en bespreek uw wensen en de mogelijkheden voor uw bedrijf of vastgoed.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="meeting-form-heading" class="bg-secondary-surface">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-4xl">
                    @if (session('meeting_request_submitted'))
                        <div role="status" class="rounded-md border border-brand/10 bg-white p-8 shadow-sm sm:p-12">
                            <p class="font-subheading text-sm text-brand/75">Aanvraag ontvangen</p>
                            <h2 class="font-heading mt-3 text-3xl font-extrabold tracking-tight text-brand">Bedankt voor uw aanvraag!</h2>
                            <p class="mt-5 text-lg leading-8 text-secondary-text/75">We hebben uw verzoek voor een kennismaking ontvangen. We nemen contact met u op om de afspraak verder af te stemmen.</p>
                            <p class="mt-5 border-t border-brand/10 pt-4 text-sm leading-6 text-secondary-text/65">Een aanvraag is pas een bevestigde afspraak nadat deze door Superfresh is bevestigd.</p>
                        </div>
                    @else
                        <form method="POST" action="{{ route('kennismaking-plannen.store') }}" class="space-y-7 rounded-md border border-brand/10 bg-white p-6 shadow-sm sm:p-10">
                            @csrf

                            <div>
                                <p class="font-subheading text-sm text-brand/75">Uw aanvraag</p>
                                <h2 id="meeting-form-heading" class="font-heading mt-2 text-2xl font-extrabold text-brand sm:text-3xl">Plan uw kennismaking.</h2>
                                <p class="mt-3 text-sm text-secondary-text/65"><span aria-hidden="true">*</span> Verplicht veld</p>
                            </div>

                            @if ($errors->any())
                                <div role="alert" class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                                    Controleer de gemarkeerde velden en probeer het opnieuw.
                                </div>
                            @endif

                            <div class="grid gap-5 sm:grid-cols-2">
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
                                    <label for="phone" class="mb-2 block text-sm font-medium text-brand">Telefoonnummer</label>
                                    <input id="phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}" maxlength="50" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('phone'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('phone')])>
                                    @error('phone')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="organization_type" class="mb-2 block text-sm font-medium text-brand">Type organisatie</label>
                                    <input id="organization_type" name="organization_type" type="text" value="{{ old('organization_type') }}" maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
                                    @error('organization_type')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="conversation_topic" class="mb-2 block text-sm font-medium text-brand">Onderwerp van gesprek</label>
                                    <input id="conversation_topic" name="conversation_topic" type="text" value="{{ old('conversation_topic') }}" maxlength="255" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">
                                    @error('conversation_topic')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="preferred_date" class="mb-2 block text-sm font-medium text-brand">Gewenste datum</label>
                                    <input id="preferred_date" name="preferred_date" type="date" min="{{ now()->toDateString() }}" value="{{ old('preferred_date') }}" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('preferred_date'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('preferred_date')])>
                                    @error('preferred_date')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div>
                                    <label for="preferred_time" class="mb-2 block text-sm font-medium text-brand">Gewenste tijd</label>
                                    <input id="preferred_time" name="preferred_time" type="time" value="{{ old('preferred_time') }}" @class(['w-full rounded border px-3.5 py-2.5 text-sm outline-none focus:ring-4 focus:ring-brand-bright/20', 'border-red-400 focus:border-red-500' => $errors->has('preferred_time'), 'border-brand/20 focus:border-brand-bright' => ! $errors->has('preferred_time')])>
                                    @error('preferred_time')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="additional_information" class="mb-2 block text-sm font-medium text-brand">Aanvullende informatie</label>
                                    <textarea id="additional_information" name="additional_information" rows="5" maxlength="5000" class="w-full rounded border border-brand/20 px-3.5 py-2.5 text-sm outline-none focus:border-brand-bright focus:ring-4 focus:ring-brand-bright/20">{{ old('additional_information') }}</textarea>
                                    @error('additional_information')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div class="border-t border-brand/10 pt-6">
                                <p class="text-sm leading-6 text-secondary-text/70">Een aanvraag is pas een bevestigde afspraak nadat deze door Superfresh is bevestigd.</p>
                                <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <p class="text-xs text-secondary-text/55">De velden met een * zijn verplicht.</p>
                                    <x-site.button type="submit">Kennismaking aanvragen</x-site.button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection

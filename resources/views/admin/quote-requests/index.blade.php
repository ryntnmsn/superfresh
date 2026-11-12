@extends('layouts.admin')

@section('title', 'Quote requests')

@section('content')
    <div>
        <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Quote requests</h1>
    </div>

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[1100px] text-left text-sm">
                <thead class="bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                    <tr>
                        <th class="px-5 py-3 font-medium">Received</th>
                        <th class="px-5 py-3 font-medium">Customer</th>
                        <th class="px-5 py-3 font-medium">Contact</th>
                        <th class="px-5 py-3 font-medium">Service and location</th>
                        <th class="px-5 py-3 font-medium">Schedule</th>
                        <th class="px-5 py-3 font-medium">Request details</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand/10">
                    @forelse ($quoteRequests as $quoteRequest)
                        <tr class="align-top">
                            <td class="whitespace-nowrap px-5 py-4 text-secondary-text/70">{{ $quoteRequest->created_at->format('d-m-Y H:i') }}</td>
                            <td class="px-5 py-4">
                                <p class="font-medium text-brand">{{ $quoteRequest->name }}</p>
                                @if ($quoteRequest->business_name)
                                    <p class="mt-1 text-xs text-secondary-text/65">{{ $quoteRequest->business_name }}</p>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <a href="mailto:{{ $quoteRequest->email }}" class="block text-brand hover:underline">{{ $quoteRequest->email }}</a>
                                <a href="tel:{{ $quoteRequest->phone }}" class="mt-1 block text-secondary-text/70 hover:text-brand">{{ $quoteRequest->phone }}</a>
                            </td>
                            <td class="px-5 py-4">
                                <p class="font-medium text-brand">{{ $quoteRequest->service_type }}</p>
                                <p class="mt-1 text-secondary-text/70">{{ $quoteRequest->postal_code }}</p>
                            </td>
                            <td class="px-5 py-4 text-secondary-text/70">
                                <p>Start: {{ $quoteRequest->start_date?->format('d-m-Y') ?? 'Not specified' }}</p>
                                <p class="mt-1">{{ $quoteRequest->frequency ?: 'Frequency not specified' }}</p>
                            </td>
                            <td class="px-5 py-4">
                                <button type="button" aria-haspopup="dialog" aria-controls="quote-request-details-{{ $quoteRequest->id }}" onclick="document.getElementById('quote-request-details-{{ $quoteRequest->id }}').showModal()" class="font-medium text-brand hover:underline focus:outline-none focus:ring-2 focus:ring-brand-bright">View details</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-5 py-12 text-center text-sm text-secondary-text/60">No quote requests yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @foreach ($quoteRequests as $quoteRequest)
            <dialog id="quote-request-details-{{ $quoteRequest->id }}" aria-labelledby="quote-request-title-{{ $quoteRequest->id }}" class="m-auto max-h-[90vh] w-[calc(100%-2rem)] max-w-3xl overflow-y-auto rounded-lg border border-brand/10 bg-white p-0 shadow-xl backdrop:bg-brand/50">
                <div class="flex items-start justify-between gap-4 border-b border-brand/10 px-6 py-5">
                    <div>
                        <p class="font-subheading text-sm text-secondary-text/65">Quote request · {{ $quoteRequest->created_at->format('d-m-Y H:i') }}</p>
                        <h2 id="quote-request-title-{{ $quoteRequest->id }}" class="font-heading mt-1 text-xl font-extrabold text-brand">{{ $quoteRequest->name }}</h2>
                    </div>
                    <form method="dialog">
                        <button type="submit" aria-label="Close details" class="rounded px-3 py-1.5 text-sm font-medium text-brand hover:bg-secondary-surface focus:outline-none focus:ring-2 focus:ring-brand-bright">Close</button>
                    </form>
                </div>
                <div class="space-y-6 px-6 py-5">
                    <dl class="grid gap-x-8 gap-y-5 text-sm sm:grid-cols-2">
                        <div><dt class="font-medium text-secondary-text/60">Business</dt><dd class="mt-1 text-secondary-text">{{ $quoteRequest->business_name ?: 'Not provided' }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Email</dt><dd class="mt-1"><a href="mailto:{{ $quoteRequest->email }}" class="text-brand hover:underline">{{ $quoteRequest->email }}</a></dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Phone</dt><dd class="mt-1"><a href="tel:{{ $quoteRequest->phone }}" class="text-brand hover:underline">{{ $quoteRequest->phone }}</a></dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Service</dt><dd class="mt-1 text-secondary-text">{{ $quoteRequest->service_type }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Postal code</dt><dd class="mt-1 text-secondary-text">{{ $quoteRequest->postal_code }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Requested start</dt><dd class="mt-1 text-secondary-text">{{ $quoteRequest->start_date?->format('d-m-Y') ?? 'Not specified' }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Frequency</dt><dd class="mt-1 text-secondary-text">{{ $quoteRequest->frequency ?: 'Not specified' }}</dd></div>
                    </dl>

                    <section aria-labelledby="quote-request-description-{{ $quoteRequest->id }}">
                        <h3 id="quote-request-description-{{ $quoteRequest->id }}" class="font-heading text-base font-bold text-brand">Cleaning request</h3>
                        <p class="mt-2 whitespace-pre-line text-sm leading-6 text-secondary-text/75">{{ $quoteRequest->cleaning_description }}</p>
                    </section>

                    @if ($quoteRequest->photos)
                        <section aria-labelledby="quote-request-photos-{{ $quoteRequest->id }}">
                            <h3 id="quote-request-photos-{{ $quoteRequest->id }}" class="font-heading text-base font-bold text-brand">Attached photos</h3>
                            <div class="mt-3 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach ($quoteRequest->photos as $photoIndex => $photoPath)
                                    <a href="{{ route('admin.quote-requests.photos.show', [$quoteRequest, $photoIndex]) }}" target="_blank" rel="noopener" class="overflow-hidden rounded-md border border-brand/10 focus:outline-none focus:ring-4 focus:ring-brand-bright/30">
                                        <img src="{{ route('admin.quote-requests.photos.show', [$quoteRequest, $photoIndex]) }}" alt="Photo {{ $photoIndex + 1 }} attached to this quote request" loading="lazy" class="h-40 w-full object-cover">
                                        <span class="block px-3 py-2 text-xs text-brand">View photo {{ $photoIndex + 1 }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                    @endif
                </div>
            </dialog>
        @endforeach
        @if ($quoteRequests->hasPages())
            <div class="border-t border-brand/10 px-5 py-4">{{ $quoteRequests->links() }}</div>
        @endif
    </div>
@endsection

@extends('layouts.admin')

@section('title', 'Contact messages')

@section('content')
    <div>
        <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Contact messages</h1>
    </div>

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px] text-left text-sm">
                <thead class="bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                    <tr>
                        <th class="px-5 py-3 font-medium">Received</th>
                        <th class="px-5 py-3 font-medium">Name</th>
                        <th class="px-5 py-3 font-medium">Contact</th>
                        <th class="px-5 py-3 font-medium">Message</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand/10">
                    @forelse ($contactMessages as $contactMessage)
                        <tr class="align-top">
                            <td class="whitespace-nowrap px-5 py-4 text-secondary-text/70">{{ $contactMessage->created_at->format('d-m-Y H:i') }}</td>
                            <td class="px-5 py-4">
                                <p class="font-medium text-brand">{{ $contactMessage->name }}</p>
                                @if ($contactMessage->business_name)
                                    <p class="mt-1 text-xs text-secondary-text/65">{{ $contactMessage->business_name }}</p>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <a href="mailto:{{ $contactMessage->email }}" class="block text-brand hover:underline">{{ $contactMessage->email }}</a>
                                @if ($contactMessage->phone)
                                    <a href="tel:{{ $contactMessage->phone }}" class="mt-1 block text-secondary-text/70 hover:text-brand">{{ $contactMessage->phone }}</a>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <p class="mb-2 max-w-md truncate text-secondary-text/75">{{ $contactMessage->message }}</p>
                                <button type="button" aria-haspopup="dialog" aria-controls="contact-message-details-{{ $contactMessage->id }}" onclick="document.getElementById('contact-message-details-{{ $contactMessage->id }}').showModal()" class="font-medium text-brand hover:underline focus:outline-none focus:ring-2 focus:ring-brand-bright">View message</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-5 py-12 text-center text-sm text-secondary-text/60">No contact messages yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @foreach ($contactMessages as $contactMessage)
            <dialog id="contact-message-details-{{ $contactMessage->id }}" aria-labelledby="contact-message-title-{{ $contactMessage->id }}" class="m-auto max-h-[90vh] w-[calc(100%-2rem)] max-w-2xl overflow-y-auto rounded-lg border border-brand/10 bg-white p-0 shadow-xl backdrop:bg-brand/50">
                <div class="flex items-start justify-between gap-4 border-b border-brand/10 px-6 py-5">
                    <div>
                        <p class="font-subheading text-sm text-secondary-text/65">Contact message · {{ $contactMessage->created_at->format('d-m-Y H:i') }}</p>
                        <h2 id="contact-message-title-{{ $contactMessage->id }}" class="font-heading mt-1 text-xl font-extrabold text-brand">Message from {{ $contactMessage->name }}</h2>
                    </div>
                    <form method="dialog">
                        <button type="submit" aria-label="Close message" class="rounded px-3 py-1.5 text-sm font-medium text-brand hover:bg-secondary-surface focus:outline-none focus:ring-2 focus:ring-brand-bright">Close</button>
                    </form>
                </div>
                <div class="space-y-5 px-6 py-5">
                    <dl class="grid gap-x-8 gap-y-4 text-sm sm:grid-cols-2">
                        <div><dt class="font-medium text-secondary-text/60">Name</dt><dd class="mt-1 text-secondary-text">{{ $contactMessage->name }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Business</dt><dd class="mt-1 text-secondary-text">{{ $contactMessage->business_name ?: 'Not provided' }}</dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Email</dt><dd class="mt-1"><a href="mailto:{{ $contactMessage->email }}" class="text-brand hover:underline">{{ $contactMessage->email }}</a></dd></div>
                        <div><dt class="font-medium text-secondary-text/60">Phone</dt><dd class="mt-1 text-secondary-text">{{ $contactMessage->phone ?: 'Not provided' }}</dd></div>
                    </dl>
                    <section aria-labelledby="contact-message-body-{{ $contactMessage->id }}">
                        <h3 id="contact-message-body-{{ $contactMessage->id }}" class="font-heading text-base font-bold text-brand">Message</h3>
                        <p class="mt-2 whitespace-pre-line text-sm leading-6 text-secondary-text/75">{{ $contactMessage->message }}</p>
                    </section>
                </div>
            </dialog>
        @endforeach
        @if ($contactMessages->hasPages())
            <div class="border-t border-brand/10 px-5 py-4">{{ $contactMessages->links() }}</div>
        @endif
    </div>
@endsection

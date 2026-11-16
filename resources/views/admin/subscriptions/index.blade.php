@extends('layouts.admin')

@section('title', 'Subscriptions')

@section('content')
    <div>
        <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Subscriptions</h1>
        <p class="mt-1 text-sm text-secondary-text/70">View and manage newsletter subscriptions.</p>
    </div>

    @if (session('status'))
        <p role="status" class="mt-5 rounded-md bg-secondary-surface px-4 py-3 text-sm text-brand">{{ session('status') }}</p>
    @endif

    <div class="mt-6 overflow-hidden rounded-md border border-brand/10 bg-white shadow-sm">
        @if ($subscriptions->isEmpty())
            <p class="px-6 py-12 text-center text-sm text-secondary-text/70">No subscriptions to display yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="border-b border-brand/10 bg-secondary-surface text-xs uppercase tracking-wide text-secondary-text/60">
                        <tr>
                            <th scope="col" class="px-5 py-3">Email</th>
                            <th scope="col" class="px-5 py-3">Consent recorded</th>
                            <th scope="col" class="px-5 py-3">Subscribed</th>
                            <th scope="col" class="px-5 py-3"><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-brand/10">
                        @foreach ($subscriptions as $subscription)
                            <tr>
                                <td class="px-5 py-4"><a href="mailto:{{ $subscription->email }}" class="font-medium text-brand hover:underline">{{ $subscription->email }}</a></td>
                                <td class="px-5 py-4 text-secondary-text/70">{{ $subscription->consented_at->format('d-m-Y H:i') }}</td>
                                <td class="px-5 py-4 text-secondary-text/70">{{ $subscription->created_at->format('d-m-Y H:i') }}</td>
                                <td class="px-5 py-4 text-right">
                                    <form method="POST" action="{{ route('admin.subscriptions.destroy', $subscription) }}" onsubmit="return confirm('Remove this newsletter subscription?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-sm font-medium text-red-700 hover:underline focus:outline-none focus:ring-2 focus:ring-red-500">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($subscriptions->hasPages())
                <div class="border-t border-brand/10 px-5 py-4">{{ $subscriptions->links() }}</div>
            @endif
        @endif
    </div>
@endsection

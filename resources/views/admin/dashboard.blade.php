@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Welcome, {{ auth()->user()->name }}</h1>
    <p class="mt-2 text-secondary-text/75">You are signed in to the admin area.</p>

    <div class="mt-8 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
        @foreach ($stats as $stat)
            <article class="rounded-md border border-brand/10 bg-white p-6 shadow-sm">
                <h2 class="font-subheading text-sm text-secondary-text/75">{{ $stat['label'] }}</h2>
                <p class="font-heading mt-4 text-3xl font-extrabold tracking-tight text-brand">{{ number_format($stat['value']) }}</p>
                <p class="mt-2 text-xs text-secondary-text/60">{{ $stat['description'] }}</p>
            </article>
        @endforeach
        @if (auth()->user()->isAdministrator())
            <a href="{{ route('admin.quote-requests.index') }}" class="rounded-md border border-brand/10 bg-white p-6 shadow-sm transition hover:border-brand/30 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-brand-bright/30">
                <h2 class="font-subheading text-sm text-secondary-text/75">Quote requests</h2>
                <p class="font-heading mt-4 text-3xl font-extrabold tracking-tight text-brand">{{ number_format($quoteRequestCount) }}</p>
                <p class="mt-2 text-xs text-secondary-text/60">Review submitted quote requests</p>
            </a>
        @endif
    </div>
@endsection

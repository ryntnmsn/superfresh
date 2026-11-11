@extends('layouts.admin')

@section('title', 'Bookings')

@section('content')
    <div>
        <h1 class="font-heading text-2xl font-extrabold tracking-tight text-brand">Bookings</h1>
        <p class="mt-1 text-sm text-secondary-text/70">View and manage customer bookings.</p>
    </div>

    <div class="mt-6 rounded-md border border-brand/10 bg-white px-6 py-12 text-center">
        <p class="text-sm text-secondary-text/70">No bookings to display yet.</p>
    </div>
@endsection

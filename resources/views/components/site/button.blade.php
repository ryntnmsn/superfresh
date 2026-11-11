@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $buttonClasses = match ($variant) {
        'secondary' => 'border border-brand/20 bg-white text-brand hover:bg-secondary-surface',
        default => 'bg-brand text-white hover:bg-brand/90',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['font-subheading inline-flex items-center justify-center rounded px-4 py-2.5 text-sm transition focus:outline-none focus:ring-4 focus:ring-brand-bright/30', $buttonClasses]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->class(['font-subheading inline-flex items-center justify-center rounded px-4 py-2.5 text-sm transition focus:outline-none focus:ring-4 focus:ring-brand-bright/30', $buttonClasses]) }}>{{ $slot }}</button>
@endif

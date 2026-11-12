@php
    $serviceTypes = [
        'Kantoorschoonmaak' => 'Office cleaning',
        'Schoonmaak voor scholen' => 'School cleaning',
        'Airbnb & short-stay schoonmaak' => 'Airbnb & short-stay cleaning',
        'Schoonmaak voor verhuurders' => 'Cleaning for landlords',
        'Schoonmaak voor vastgoedprofessionals' => 'Cleaning for property professionals',
        'Anders' => 'Other',
    ];
    $frequencies = [
        'Dagelijks' => 'Daily',
        'Meerdere keren per week' => 'Several times per week',
        'Wekelijks' => 'Weekly',
        'Maandelijks' => 'Monthly',
        'Eenmalig' => 'One-time',
        'Anders / in overleg' => 'Other / to be discussed',
    ];
@endphp

<h1>New quote request</h1>

<p><strong>Name:</strong> {{ $quoteRequest['name'] }}</p>
<p><strong>Business name:</strong> {{ ($quoteRequest['business_name'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Email address:</strong> {{ $quoteRequest['email'] }}</p>
<p><strong>Phone number:</strong> {{ $quoteRequest['phone'] }}</p>
<p><strong>Service type:</strong> {{ $serviceTypes[$quoteRequest['service_type']] ?? $quoteRequest['service_type'] }}</p>
<p><strong>Cleaning location postal code:</strong> {{ $quoteRequest['postal_code'] }}</p>
<p><strong>Requested start date:</strong> {{ ($quoteRequest['start_date'] ?? null) ?: 'Not specified' }}</p>
<p><strong>Cleaning frequency:</strong> {{ ! empty($quoteRequest['frequency']) ? ($frequencies[$quoteRequest['frequency']] ?? $quoteRequest['frequency']) : 'Not specified' }}</p>
<p><strong>What would you like cleaned?</strong></p>
<p>{!! nl2br(e($quoteRequest['cleaning_description'])) !!}</p>

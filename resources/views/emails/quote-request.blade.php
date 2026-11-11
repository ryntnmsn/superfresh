<h1>Nieuwe offerteaanvraag</h1>

<p><strong>Naam:</strong> {{ $quoteRequest['name'] }}</p>
<p><strong>Bedrijfsnaam:</strong> {{ ($quoteRequest['business_name'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>E-mailadres:</strong> {{ $quoteRequest['email'] }}</p>
<p><strong>Telefoonnummer:</strong> {{ $quoteRequest['phone'] }}</p>
<p><strong>Type dienstverlening:</strong> {{ $quoteRequest['service_type'] }}</p>
<p><strong>Plaats / locatie:</strong> {{ $quoteRequest['location'] }}</p>
<p><strong>Aantal locaties:</strong> {{ ($quoteRequest['location_count'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Gewenste schoonmaakfrequentie:</strong> {{ ($quoteRequest['frequency'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Wensen:</strong></p>
<p>{!! nl2br(e(($quoteRequest['wishes'] ?? null) ?: 'Niet ingevuld')) !!}</p>

<h1>Nieuwe offerteaanvraag</h1>

<p><strong>Naam:</strong> {{ $quoteRequest['name'] }}</p>
<p><strong>Bedrijfsnaam:</strong> {{ ($quoteRequest['business_name'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>E-mailadres:</strong> {{ $quoteRequest['email'] }}</p>
<p><strong>Telefoonnummer:</strong> {{ $quoteRequest['phone'] }}</p>
<p><strong>Type dienstverlening:</strong> {{ $quoteRequest['service_type'] }}</p>
<p><strong>Postcode schoonmaaklocatie:</strong> {{ $quoteRequest['postal_code'] }}</p>
<p><strong>Gewenste startdatum:</strong> {{ ($quoteRequest['start_date'] ?? null) ?: 'Nog niet bekend' }}</p>
<p><strong>Hoe vaak is schoonmaak nodig:</strong> {{ ($quoteRequest['frequency'] ?? null) ?: 'Nog niet bekend' }}</p>
<p><strong>Wat wilt u laten schoonmaken?</strong></p>
<p>{!! nl2br(e($quoteRequest['cleaning_description'])) !!}</p>

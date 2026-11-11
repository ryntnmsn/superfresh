<h1>Nieuw contactbericht via de website</h1>

<p><strong>Naam:</strong> {{ $contactMessage['name'] }}</p>
<p><strong>Bedrijfsnaam:</strong> {{ ($contactMessage['business_name'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>E-mailadres:</strong> {{ $contactMessage['email'] }}</p>
<p><strong>Telefoonnummer:</strong> {{ ($contactMessage['phone'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Onderwerp:</strong> {{ $contactMessage['subject'] }}</p>
<p><strong>Bericht:</strong></p>
<p>{!! nl2br(e($contactMessage['message'])) !!}</p>

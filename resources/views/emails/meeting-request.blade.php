<h1>Aanvraag voor kennismaking</h1>

<p><strong>Naam:</strong> {{ $meetingRequest['name'] }}</p>
<p><strong>Bedrijfsnaam:</strong> {{ ($meetingRequest['business_name'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>E-mailadres:</strong> {{ $meetingRequest['email'] }}</p>
<p><strong>Telefoonnummer:</strong> {{ ($meetingRequest['phone'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Type organisatie:</strong> {{ ($meetingRequest['organization_type'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Onderwerp van gesprek:</strong> {{ ($meetingRequest['conversation_topic'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Gewenste datum:</strong> {{ ($meetingRequest['preferred_date'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Gewenste tijd:</strong> {{ ($meetingRequest['preferred_time'] ?? null) ?: 'Niet ingevuld' }}</p>
<p><strong>Aanvullende informatie:</strong></p>
<p>{!! nl2br(e(($meetingRequest['additional_information'] ?? null) ?: 'Niet ingevuld')) !!}</p>

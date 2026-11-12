<h1>Meeting request</h1>

<p><strong>Name:</strong> {{ $meetingRequest['name'] }}</p>
<p><strong>Business name:</strong> {{ ($meetingRequest['business_name'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Email address:</strong> {{ $meetingRequest['email'] }}</p>
<p><strong>Phone number:</strong> {{ ($meetingRequest['phone'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Organization type:</strong> {{ ($meetingRequest['organization_type'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Meeting topic:</strong> {{ ($meetingRequest['conversation_topic'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Preferred date:</strong> {{ ($meetingRequest['preferred_date'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Preferred time:</strong> {{ ($meetingRequest['preferred_time'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Additional information:</strong></p>
<p>{!! nl2br(e(($meetingRequest['additional_information'] ?? null) ?: 'Not provided')) !!}</p>

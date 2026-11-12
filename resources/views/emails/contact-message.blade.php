<h1>New contact message from the website</h1>

<p><strong>Name:</strong> {{ $contactMessage['name'] }}</p>
<p><strong>Business name:</strong> {{ ($contactMessage['business_name'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Email address:</strong> {{ $contactMessage['email'] }}</p>
<p><strong>Phone number:</strong> {{ ($contactMessage['phone'] ?? null) ?: 'Not provided' }}</p>
<p><strong>Message:</strong></p>
<p>{!! nl2br(e($contactMessage['message'])) !!}</p>

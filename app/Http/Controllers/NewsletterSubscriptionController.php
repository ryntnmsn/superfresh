<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterSubscriptionController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'newsletter_email' => ['required', 'email', 'max:255'],
            'newsletter_consent' => ['accepted'],
            'website' => ['prohibited'],
        ], [
            'newsletter_email.required' => __('Vul uw e-mailadres in.'),
            'newsletter_email.email' => __('Vul een geldig e-mailadres in.'),
            'newsletter_email.max' => __('Uw e-mailadres mag maximaal 255 tekens bevatten.'),
            'newsletter_consent.accepted' => __('Geef toestemming om de nieuwsbrief per e-mail te ontvangen.'),
        ]);

        Subscription::query()->firstOrCreate(
            ['email' => strtolower($validated['newsletter_email'])],
            ['consented_at' => now()],
        );

        return redirect()->back()->with('newsletter_subscribed', true);
    }
}

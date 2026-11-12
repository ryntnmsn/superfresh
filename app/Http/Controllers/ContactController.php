<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage as ContactMessageRecord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'business_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Vul uw naam in.',
            'name.max' => 'Uw naam mag maximaal 255 tekens bevatten.',
            'business_name.max' => 'De bedrijfsnaam mag maximaal 255 tekens bevatten.',
            'email.required' => 'Vul uw e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'email.max' => 'Uw e-mailadres mag maximaal 255 tekens bevatten.',
            'phone.max' => 'Uw telefoonnummer mag maximaal 50 tekens bevatten.',
            'message.required' => 'Vul uw bericht in.',
            'message.max' => 'Uw bericht mag maximaal 5.000 tekens bevatten.',
        ]);

        ContactMessageRecord::query()->create($validated);

        Mail::to(config('services.quote_requests.recipient'))
            ->send(new ContactMessageReceived($validated));

        return redirect()->route('contact')->with('contact_message_submitted', true);
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\MeetingRequestReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MeetingRequestController extends Controller
{
    public function create(): View
    {
        return view('pages.kennismaking-plannen');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'business_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'organization_type' => ['nullable', 'string', 'max:255'],
            'conversation_topic' => ['nullable', 'string', 'max:255'],
            'preferred_date' => ['nullable', 'date', 'after_or_equal:today'],
            'preferred_time' => ['nullable', 'date_format:H:i'],
            'additional_information' => ['nullable', 'string', 'max:5000'],
        ], [
            'name.required' => 'Vul uw naam in.',
            'email.required' => 'Vul uw e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'preferred_date.date' => 'Vul een geldige datum in.',
            'preferred_date.after_or_equal' => 'Kies vandaag of een datum in de toekomst.',
            'preferred_time.date_format' => 'Vul een geldige tijd in.',
        ]);

        Mail::to(config('services.quote_requests.recipient'))
            ->send(new MeetingRequestReceived($validated));

        return redirect()->route('kennismaking-plannen')->with('meeting_request_submitted', true);
    }
}

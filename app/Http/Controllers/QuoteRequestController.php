<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class QuoteRequestController extends Controller
{
    public function create(): View
    {
        return view('pages.offerte-aanvragen', [
            'serviceTypes' => [
                'Kantoorschoonmaak',
                'Schoonmaak voor scholen',
                'Airbnb & short-stay schoonmaak',
                'Schoonmaak voor huurwoningen',
                'Vastgoedschoonmaak',
                'Anders',
            ],
            'frequencies' => [
                'Dagelijks',
                'Meerdere keren per week',
                'Wekelijks',
                'Maandelijks',
                'Eenmalig',
                'Anders / in overleg',
            ],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'business_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'service_type' => ['required', 'string', 'in:Kantoorschoonmaak,Schoonmaak voor scholen,Airbnb & short-stay schoonmaak,Schoonmaak voor huurwoningen,Vastgoedschoonmaak,Anders'],
            'location' => ['required', 'string', 'max:255'],
            'location_count' => ['nullable', 'integer', 'min:1', 'max:10000'],
            'frequency' => ['nullable', 'string', 'in:Dagelijks,Meerdere keren per week,Wekelijks,Maandelijks,Eenmalig,Anders / in overleg'],
            'wishes' => ['nullable', 'string', 'max:5000'],
        ], [
            'name.required' => 'Vul uw naam in.',
            'email.required' => 'Vul uw e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'phone.required' => 'Vul uw telefoonnummer in.',
            'service_type.required' => 'Kies het type dienstverlening.',
            'service_type.in' => 'Kies een geldig type dienstverlening.',
            'location.required' => 'Vul de plaats of locatie in.',
            'location_count.integer' => 'Vul een geldig aantal locaties in.',
            'location_count.min' => 'Het aantal locaties moet minimaal 1 zijn.',
            'frequency.in' => 'Kies een geldige schoonmaakfrequentie.',
        ]);

        Mail::to(config('services.quote_requests.recipient'))
            ->send(new QuoteRequestReceived($validated));

        return redirect()->route('offerte-aanvragen')->with('quote_request_submitted', true);
    }
}

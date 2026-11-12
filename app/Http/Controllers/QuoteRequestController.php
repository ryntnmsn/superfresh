<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestReceived;
use App\Models\QuoteRequest as QuoteRequestRecord;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use RuntimeException;
use Throwable;

class QuoteRequestController extends Controller
{
    /** @var array<string, string> */
    private const SERVICE_TYPES = [
        'kantoor' => 'Kantoorschoonmaak',
        'scholen' => 'Schoonmaak voor scholen',
        'airbnb' => 'Airbnb & short-stay schoonmaak',
        'verhuurders' => 'Schoonmaak voor verhuurders',
        'vastgoed' => 'Schoonmaak voor vastgoedprofessionals',
        'anders' => 'Anders',
    ];

    public function create(Request $request): View
    {
        $requestedService = $request->query('service');

        return view('pages.offerte-aanvragen', [
            'serviceTypes' => array_values(self::SERVICE_TYPES),
            'selectedService' => is_string($requestedService)
                ? (self::SERVICE_TYPES[$requestedService] ?? null)
                : null,
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
            'service_type' => ['required', 'string', Rule::in(array_values(self::SERVICE_TYPES))],
            'postal_code' => ['required', 'string', 'max:16'],
            'cleaning_description' => ['required', 'string', 'max:5000'],
            'start_date' => ['nullable', 'date'],
            'frequency' => ['nullable', 'string', 'in:Dagelijks,Meerdere keren per week,Wekelijks,Maandelijks,Eenmalig,Anders / in overleg'],
            'photos' => ['nullable', 'array', 'max:5'],
            'photos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ], [
            'name.required' => 'Vul uw naam in.',
            'email.required' => 'Vul uw e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'phone.required' => 'Vul uw telefoonnummer in.',
            'service_type.required' => 'Kies het type dienstverlening.',
            'service_type.in' => 'Kies een geldige schoonmaakdienst.',
            'postal_code.required' => 'Vul de postcode van de schoonmaaklocatie in.',
            'cleaning_description.required' => 'Beschrijf wat u wilt laten schoonmaken.',
            'start_date.date' => 'Vul een geldige gewenste startdatum in.',
            'frequency.in' => 'Kies een geldige schoonmaakfrequentie.',
            'photos.max' => 'U kunt maximaal vijf foto’s toevoegen.',
            'photos.*.image' => 'Voeg alleen afbeeldingen toe.',
            'photos.*.mimes' => 'Gebruik een JPG-, PNG- of WebP-afbeelding.',
            'photos.*.max' => 'Elke foto mag maximaal 10 MB zijn.',
        ]);

        $photos = $validated['photos'] ?? [];
        unset($validated['photos']);

        $storedPhotoPaths = [];

        try {
            foreach ($photos as $photo) {
                if (! $photo instanceof UploadedFile) {
                    continue;
                }

                $storedPath = $photo->store('quote-requests', 'local');

                if (! is_string($storedPath)) {
                    throw new RuntimeException('Unable to store a quote request photo.');
                }

                $storedPhotoPaths[] = $storedPath;
            }

            QuoteRequestRecord::create([
                ...$validated,
                'photos' => $storedPhotoPaths,
            ]);
        } catch (Throwable $exception) {
            Storage::disk('local')->delete($storedPhotoPaths);

            throw $exception;
        }

        Mail::to(config('services.quote_requests.recipient'))
            ->send(new QuoteRequestReceived($validated, $photos));

        return redirect()->route('offerte-aanvragen')->with('quote_request_submitted', true);
    }
}

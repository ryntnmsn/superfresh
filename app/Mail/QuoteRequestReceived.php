<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name: string, business_name?: ?string, email: string, phone: string, service_type: string, location: string, location_count?: ?int, frequency?: ?string, wishes?: ?string} $quoteRequest
     */
    public function __construct(public array $quoteRequest)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->quoteRequest['email'], $this->quoteRequest['name'])],
            subject: 'Nieuwe offerteaanvraag via de website',
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.quote-request');
    }
}

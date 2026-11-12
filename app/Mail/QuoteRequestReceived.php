<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Http\UploadedFile;
use Illuminate\Queue\SerializesModels;

class QuoteRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name: string, business_name?: ?string, email: string, phone: string, service_type: string, postal_code: string, cleaning_description: string, start_date?: ?string, frequency?: ?string} $quoteRequest
     * @param list<UploadedFile> $photos
     */
    public function __construct(public array $quoteRequest, public array $photos = [])
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->quoteRequest['email'], $this->quoteRequest['name'])],
            subject: 'New quote request from the website',
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.quote-request');
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        foreach ($this->photos as $index => $photo) {
            $extension = $photo->guessExtension() ?? 'jpg';
            $path = $photo->getRealPath() ?: $photo->getPathname();

            $attachments[] = Attachment::fromPath($path)
                ->as('Aanvraagfoto-'.($index + 1).'.'.$extension);
        }

        return $attachments;
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MeetingRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name: string, business_name?: ?string, email: string, phone?: ?string, organization_type?: ?string, conversation_topic?: ?string, preferred_date?: ?string, preferred_time?: ?string, additional_information?: ?string} $meetingRequest
     */
    public function __construct(public array $meetingRequest)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->meetingRequest['email'], $this->meetingRequest['name'])],
            subject: 'Meeting request from the website',
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.meeting-request');
    }
}
